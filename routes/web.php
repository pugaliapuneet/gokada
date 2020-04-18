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

Route::get('/', function () {
    return view('welcome');
});

//save verification requests from user
Route::post('verificationrequests', 'VerificationRequest@store');

//update status of verification request
Route::put('verificationrequests/{verificationrequest}', 'VerificationRequest@mark_verified');