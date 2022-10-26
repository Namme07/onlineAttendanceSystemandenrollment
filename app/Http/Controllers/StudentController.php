<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentAddRequest;
use App\Http\Requests\StudentLoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentController extends Controller
{
    //
    public function gotoLoginPage()
    {
        return view('studentLogin');
    }

    public function addNewStudent(StudentAddRequest $request){
        Student::create($request->all());
        $toMail = $request->studentEmail;
        $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*()_+!^";
        $str1 = str_shuffle($str);
        $str2 = substr($str1,0,8);
        DB::table('students')
            ->where('studentID', $request->studentID)
            ->update(['userType' => 'student', 'password'=>Hash::make($str2)]);

        //Email
        //if ($this->isOnline()){
            $mail_data = [
                'recipinet' => $toMail,
                'fromEmail'=>'awe.some.guy.anonymous@gmail.com',
                'fromName' => 'Enrollment System',
                'subject' => 'Enrollment System Passkey',
                'body' => $str2,
            ];

            Mail::send('email_template', $mail_data, function ($message) use ($mail_data){
                $message->to($mail_data['recipinet'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });

            //return redirect()->back();

        //}


        /*->update(['userType' => 'student', 'password'=>Hash::make($str2)]);*/
        return redirect()->back()->with('success','Data Added Successfully');
    }

    public function loginStudent(StudentLoginRequest $request){
        $student = \App\Models\Student::where('studentPhone',$request->get('phoneNumber'))->first();

        if($student == null){
            return redirect()->back()->with('error','Phone number not valid');
        }

        if (!Hash::check($request->get('password'), $student->password)){
            return redirect()->back()->with('error','Wrong Password');
        }

        /*if ($request->get('password') != $student->password){
            return redirect()->back();
        }*/

        else{
            \Illuminate\Support\Facades\Session::put('user_id', $student);
            \Illuminate\Support\Facades\Session::put('user_type', $student->userType);
            //return redirect()->route('studentHomePage');

            return view('studentHomePage') -> with(['student'=>$student]);
        }

        /*\Illuminate\Support\Facades\Session::put('user_id', $student);
        \Illuminate\Support\Facades\Session::put('user_type', $student->userType);

        if($student->userType == 'student'){
            return redirect()->route('studentHomePage');
        }

        if($student->usertype == 'travel agency'){
            return redirect()->route('travelagencyhome');
        }*/
    }

    public function gotoPaymentPage()
    {
        return view('exampleHosted');
    }


    public function admitCardDownload()
    {
        $pdf = Pdf::loadView('admitCardPage');
        return $pdf->download('admitCard.pdf');

       /* return view('admitCardPage');*/
    }
}
