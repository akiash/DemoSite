<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   
    public function index(Request $request)
    {
        //echo "hello";
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        //return $request->post();
        $email = $request->post('email');
        $password = $request->post('password');

        //$result = Admin::where(['email'=>$email, 'password'=>$password])->get();
        // echo '<pre>';
        // print_r($result);
        // if(isset($result['0']->id)){
        //     $request->session()->put('ADMIN_LOGIN',true);
        //     $request->session()->put('ADMIN_ID',$result['0']->id);
        //     return redirect('admin/dashboard');
        // }else{
        //     $request->session()->flash('error','Please enter valid credentials');
        //     return redirect('admin');
        // }

        //with hash
        $result = Admin::where(['email'=>$email])->first();
        if($result){
            if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('admin');
            }
            
        }else{
            $request->session()->flash('error','Please enter valid credentials');
            return redirect('admin');
        }
    }

    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    // public function updatepass(Request $request)
    // {
    //     $r = Admin::find(1);
    //     $r->password = Hash::make('12345');
    //     $r->save();
    // }

}
