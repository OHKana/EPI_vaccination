<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Noticescontroller;
use App\Http\Controllers\Servicescontroller;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\Registrationcontroller;

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
    return view('master');
});

Route::get('/home',[Homecontroller::class,'list'])->name('home');

Route::get('/notices',[Noticescontroller::class,'list'])->name('notices');

Route::get('/services',[Servicescontroller::class,'list'])->name('services');

Route::get('/helpline',[Helplinecontroller::class,'list'])->name('helpline');

Route::get('/registration',[Registrationcontroller::class,'list'])->name('registration');

Route::post('/registration/',[Registrationcontroller::class,'create'])->name('registration');

