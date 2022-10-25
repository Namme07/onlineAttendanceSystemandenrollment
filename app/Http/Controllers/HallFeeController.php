<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallFeeAddRequest;
use App\Models\HallFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HallFeeController extends Controller
{
    //
    public function gotoHallFeePage(){
        return view('addHallFeePage');
    }

    public function addHallFee(HallFeeAddRequest $request)
    {

        $checkHallFee = \App\Models\HallFee::where('hallName', $request->hallName)
        ->where('residentialStatus', $request->residentialStatus)->first();

        if($checkHallFee == null)
        {
            HallFee::create($request->all());
        }

        else
        {
            $checkHallFee->hallFee = $request->hallFee;
            DB::table('hall_fees')
                ->where('hallName', $request->hallName)
                ->where('residentialStatus', $request->residentialStatus)
                ->update(['hallFee' => $request->hallFee]);

        }
        return redirect()->back()->with('success','Data Added Successfully');
        /*return redirect()->back()->with('msg','Data add Successfully');*/
    }
}
