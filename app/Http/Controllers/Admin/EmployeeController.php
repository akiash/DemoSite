<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $result['data'] = Employee::all();
        return view('admin.employee',$result);
    }

    public function manage_employee(Request $request,$id='')
    {
        if($id>0){
            $arr = Employee::where(['id'=>$id])->get();

            $result['id']=$arr['0']->id;
            $result['f_name'] = $arr['0']->f_name;
            $result['l_name'] = $arr['0']->l_name;
            $result['companies_id'] = $arr['0']->companies_id;
            $result['email'] = $arr['0']->email;
            $result['phone'] = $arr['0']->phone;

            $result['company']=DB::table('companies')->where(['status'=>1])->where('id','!=',$id)->get(); //
        }else{
            $result['id'] = 0;
            $result['f_name'] = '';
            $result['l_name'] = '';
            $result['companies_id'] = '';
            $result['email'] = '';
            $result['phone'] = '';

            
        }
        $result['company']=DB::table('companies')->where(['status'=>1])->get();

        // echo '<pre>';
        // print_r($result['company']);
        // die();
        return view('admin/manage-employee',$result);
    }

    public function manage_employee_process(Request $request)
    {
        //echo "hello";
    //     $request->validate([
    //         'fname'=>'required',
    //         'lname'=>'required',
    //         'company'=>'required',
    //         'phone'=>'required|numeric|unique:employees,phone|digits:10',
    //         'email'=>'required|email|unique:employees,email',
    //    ]);

       if($request->post('id')>0){
            $model=Employee::find($request->post('id'));
            $msg="Employee Updated";
        }else{
            $model=new Employee();
            $msg="Employee Inserted";
        }

        $model->f_name=$request->post('f_name');
        $model->l_name=$request->post('l_name');
        $model->companies_id=$request->post('companies_id');
        $model->email=$request->post('email');
        $model->phone=$request->post('phone');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/employee');
    }

    public function delete(Request $request,$id){
        $model=EMployee::find($id);
        $model->delete();
        $request->session()->flash('message','Employee Deleted');
        return redirect('admin/employee');
    }
}
