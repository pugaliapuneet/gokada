<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});






//new verification requests from user
Route::post('verificationrequests', 'VerificationRequest@store');

//check if a user exists based on a phone number
Route::get('users/{phone_number}', 'UserController@show');


Route::group(['middleware' => ['auth:api']], function () {
    
    //update status of verification request
    Route::put('verificationrequests/{verification_request}', 'VerificationRequest@mark_verified');
    
    //search for address using address
    Route::get('addresses/{address}', 'AddressController@search');
    Route::get('addresses/{latlong}', 'AddressController@searchLatLong');

    //get estimates for delivery between 2 addresses
    Route::get('addresses/{address1}/{address2}', 'AddressController@calculateEstimates');
    Route::get('addresses/{latlong1}/{latlong2}', 'AddressController@calculateEstimates');
    
    //place an order
    Route::post('orders', 'OrderController@store');

    //search for open delivery requests by driver app
    Route::get('orders?status=open', 'OrderController@index');
    
});