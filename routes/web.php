<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('adminregister','admin.register');
Route::view('adminlogin','admin.login');
Route::controller(AdminController::class)->group(function(){
    Route::post('adminregistration', "register");
    Route::post('adminverify','loginverify');

});