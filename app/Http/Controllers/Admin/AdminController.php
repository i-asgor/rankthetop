<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Session;
use Auth;

class AdminController extends Controller
{
    
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $adminCount = Admin::where(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])->count();
            // echo "<pre>";print_r($adminCount);die;
            // if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password'],'admin'=>'1'])){
            if($adminCount > 0){
                Session::put('adminSession',$data['email']);
                return redirect('admin/dashboard');
            }else{
                return redirect('/admin')->with('flash_message_error','Email or password is incorrect');
            }
        }
        return view('admin.admin_login');
    }


    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logout Successfully');
    }
}
