<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function gotoStudentHomePage(){
        return view('studentHomePage');
    }

    public function gotoAdminHomePage(){
        return view('adminHomePage');
    }
}
