<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAddRequest;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function gotoLoginPage()
    {
        return view('adminLogin');
    }

    public function gotoStudentSignUpPage(){
        return view('studentSignUpPage');
    }

    public function addNewAdmin(AdminAddRequest $request){
        Admin::create($request->all());
        DB::table('students')
            ->where('studentID', $request->studentID)
            ->update(['userType' => 'admin']);
        return redirect()->back()->with('msg','Data add Successfully');
    }

    public function loginAdmin(AdminLoginRequest $request)
    {
        $admin = \App\Models\Admin::where('phoneNumber', $request->get('phoneNumber'))->first();

        if ($admin == null) {
            return redirect()->back()->with('error','Phone number not valid');
        }

        if (($request->get('password') != $admin->password)) {
            return redirect()->back()->with('error','Wrong Password');
        }

        else{
            \Illuminate\Support\Facades\Session::put('user_id', $admin);
            \Illuminate\Support\Facades\Session::put('user_type', $admin->userType);
            //return redirect()->route('adminHomePage');

            return view('adminHomePage') -> with(['admin'=>$admin]);
        }

        /*\Illuminate\Support\Facades\Session::put('user_id', $admin);
        \Illuminate\Support\Facades\Session::put('user_type', $admin->userType);*/

        /*if ($admin->userType == 'student') {
            return redirect()->route('studentHomePage');
        }

        if ($admin->userType == 'admin') {
            return redirect()->route('adminHomePage');
        }*/

    }
}
