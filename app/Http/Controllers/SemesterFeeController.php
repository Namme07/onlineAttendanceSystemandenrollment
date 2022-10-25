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

        $checkSemFee = \App\Models\SemesterFee::where('department', $request->department)
        ->where('level', $request->level)
        ->where('semester', $request->semester)->first();

        //calculating fees
        $totalCreditHour = $request->totalCreditHour;
        $creditHourFee = $request->creditHourFee;
        $creditFee = $creditHourFee * $totalCreditHour;
        $otherFee = $request->otherFees;
        $totalFee = $otherFee + $creditFee;


        if($checkSemFee == null)
        {
            SemesterFee::create($request->all());

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
        }

        else
        {
            //updating model
            $semFee = SemesterFee::where('department', $request->department)
            ->where('level', $request->level)
            ->where('semester', $request->semester)->first();

            $semFee->totalCreditHour = $totalCreditHour;
            $semFee->creditHourFee = $creditHourFee;
            $semFee->totalCreditFee = $creditFee;
            $semFee->creditHourFee = $creditHourFee;
            $semFee->otherFees = $otherFee;
            $semFee->totalSemesterFee = $totalFee;

            //updating database table
            DB::table('semester_fees')
                ->where('department', $request->department)
                ->where('level', $request->level)
                ->where('semester', $request->semester)
                ->update(['totalCreditHour' => $totalCreditHour, 'creditHourFee' => $creditHourFee, 'totalCreditFee' => $creditFee, 'otherFees' => $otherFee, 'totalSemesterFee' => $totalFee]);
        }


        return redirect()->back()->with('success','Data Added Successfully');
        /*return redirect()->back()->with('msg','Data add Successfully');*/
    }
}
