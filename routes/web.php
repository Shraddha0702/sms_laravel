<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sms_controller;

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

Route::get('/sms', function () {
    return view('sms');
});
route::post('/sms',[sms_controller::class,'send_sms']);
