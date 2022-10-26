<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('choosingLoginOption');
});

Route::post('/addstudent',[\App\Http\Controllers\StudentController::class,'addNewStudent'])->name('addNewStudent');
Route::get('/stuLoginPage',[\App\Http\Controllers\StudentController::class,'gotoLoginPage'])->name('stuLoginPage');
Route::get('/studentHomePage',[\App\Http\Controllers\HomeController::class,'gotoStudentHomePage'])->name('studentHomePage');
Route::post('/loginstudent',[\App\Http\Controllers\StudentController::class,'loginStudent'])->name('loginStudent');
Route::get('/gotoPaymentPage',[\App\Http\Controllers\StudentController::class,'gotoPaymentPage'])->name('gotoPaymentPage');

Route::post('/addadmin',[\App\Http\Controllers\AdminController::class,'addNewAdmin'])->name('addNewadmin');
Route::get('/adminLoginPage',[\App\Http\Controllers\AdminController::class,'gotoLoginPage'])->name('adminLoginPage');
Route::get('/adminHomePage',[\App\Http\Controllers\HomeController::class,'gotoAdminHomePage'])->name('adminHomePage');
Route::post('/loginadmin',[\App\Http\Controllers\AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::get('/studentSignUpPage',[\App\Http\Controllers\AdminController::class,'gotoStudentSignUpPage'])->name('studentSignUpPage');

Route::get('/addSemesterFeePage',[\App\Http\Controllers\SemesterFeeController::class,'gotoAddSemesterFeePage'])->name('addSemesterFeePage');
Route::post('/addSemesterFee',[\App\Http\Controllers\SemesterFeeController::class,'addSemesterFee'])->name('addSemesterFee');

Route::get('/addHallFeePage',[\App\Http\Controllers\HallFeeController::class,'gotoHallFeePage'])->name('addHallFeePage');
Route::post('/addHallFee',[\App\Http\Controllers\HallFeeController::class,'addHallFee'])->name('addHallFee');

Route::get('/admitCardDownload',[\App\Http\Controllers\StudentController::class, 'admitCardDownload'])->name('admitCardDownload');




// SSLCOMMERZ Start
Route::get('/example1', [\App\Http\Controllers\SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [\App\Http\Controllers\SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [\App\Http\Controllers\SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [\App\Http\Controllers\SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [\App\Http\Controllers\SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [\App\Http\Controllers\SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [\App\Http\Controllers\SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [\App\Http\Controllers\SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


