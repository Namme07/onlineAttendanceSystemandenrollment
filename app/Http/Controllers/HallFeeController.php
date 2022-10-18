<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallFeeAddRequest;
use App\Models\HallFee;
use Illuminate\Http\Request;

class HallFeeController extends Controller
{
    //
    public function gotoHallFeePage(){
        return view('addHallFeePage');
    }

    public function addHallFee(HallFeeAddRequest $request)
    {
        HallFee::create($request->all());
        return redirect()->back()->with('msg','Data add Successfully');
    }
}
