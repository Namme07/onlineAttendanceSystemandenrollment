<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemesterFeeAddRequest;
use App\Models\SemesterFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterFeeController extends Controller
{
    //
    public function gotoAddSemesterFeePage(){
        return view('addSemesterFeePage');
    }

    public function addSemesterFee(SemesterFeeAddRequest $request){
        SemesterFee::create($request->all());

        //calculating fees
        $totalCreditHour = $request->totalCreditHour;
        $creditHourFee = $request->creditHourFee;
        $creditFee = $creditHourFee * $totalCreditHour;
        $otherFee = $request->otherFees;
        $totalFee = $otherFee + $creditFee;

        //updating model
        $semFee = SemesterFee::where('department', $request->department)
            ->where('level', $request->level)
            ->where('semester', $request->semester)->first();
        $semFee->totalCreditFee = $creditFee;
        $semFee->totalSemesterFee = $totalFee;

        //updating database table
        DB::table('semester_fees')
            ->where('department', $request->department)
            ->where('level', $request->level)
            ->where('semester', $request->semester)
            ->update(['totalCreditFee' => $creditFee, 'totalSemesterFee' => $totalFee]);

        return redirect()->back()->with('msg','Data add Successfully');
    }
}
