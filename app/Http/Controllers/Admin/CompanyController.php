<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class CompanyController extends Controller
{
    
    public function index()
    {
        $result['data'] = company::all();
        return view('admin.company',$result);
    }

    public function manage_company(Request $request,$id='')
    {
        if($id>0){
            $arr = company::where(['id'=>$id])->get();

            $result['id']=$arr['0']->id;
            $result['company_name'] = $arr['0']->company_name;
            $result['company_email'] = $arr['0']->company_email;
            $result['company_website'] = $arr['0']->company_website;
            $result['company_logo'] = $arr['0']->company_logo;
        }else{
            $result['id'] = 0;
            $result['company_name'] = '';
            $result['company_email'] = '';
            $result['company_website'] = '';
            $result['company_logo'] = '';
        }

        // echo '<pre>';
        // print_r($result);
        // die();
        return view('admin/manage-company',$result);
    }

    public function manage_company_process(Request $request)
    {
        //return $request->post();
        if($request->post('id')>0){
            $image_validation="mimes:jpg,jpeg,png";
        }else{
            $image_validation="mimes:jpg,jpeg,png";
        }

        $request->validate([
             'company_name'=>'required|unique:companies,company_name,'.$request->post('id'),
             'company_email'=>'required|unique:companies,company_email,'.$request->post('id'),
             'company_website'=>'required',
             'company_logo'=>$image_validation
        ]);

        if($request->post('id')>0){
            $model=company::find($request->post('id'));
            $msg="Company Updated";
        }else{
            $model=new company();
            $msg="Company Inserted";
        }

        if($request->hasfile('company_logo')){
            if($request->post('id')>0){
                $arrImage=DB::table('companies')->where(['id'=>$request->post('id')])->get(); //delete image from folder
                if(Storage::exists('/public/company/'.$arrImage[0]->company_logo)){
                    Storage::delete('/public/company/'.$arrImage[0]->company_logo);
                }
            }
            $image=$request->file('company_logo'); //to figure out image
            $ext=$image->extension(); //to figure out extension of image
            $image_name=time().'.'.$ext; //to make new image name with current time
            $image->storeAs('/public/company',$image_name); //to store image in folder 
            $model->company_logo=$image_name;
        }

        $model->company_name=$request->post('company_name');
        $model->company_email=$request->post('company_email');
        $model->company_website=$request->post('company_website');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/company');
    }

    public function status(Request $request,$status,$id){
        $model=company::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Company Status Updated');
        return redirect('admin/company');
    }

    public function delete(Request $request,$id)
    {
        // echo $id;
        // die();
        $model = company::find($id);
        $model->delete();
        $request->session()->flash('message','Company Deleted');
        return redirect('admin/company');
    }
    
}
