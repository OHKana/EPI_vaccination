<?php

use App\Http\Controllers\BabyTikaChartController;
use App\Http\Controllers\TeenageTikaChartController;
use App\Http\Controllers\PregnancyTikaChartController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Noticescontroller;
use App\Http\Controllers\Servicescontroller;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\PatientsListController;
use App\Http\Controllers\HealthWorkerListController;

use App\Http\Controllers\Registrationcontroller;
use App\Models\HealthWorkerLIst;
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

Route::get('/patientsList',[PatientsListController::class,'list'])->name('patientsList');

Route::get('/healthworkerList',[HealthWorkerListController::class,'list'])->name('healthWorkerList');

Route::get('/babytikachart',[BabyTikaChartController::class,'list'])->name('babyTikaChart');

Route::get('/teenagetikachart',[TeenageTikaChartController::class,'list'])->name('teenageTikaChart');

Route::get('/pregnancytikachart',[PregnancyTikaChartController::class,'list'])->name('pregnancyTikaChart');



Route::get('/registration',[Registrationcontroller::class,'list'])->name('registration');

Route::post('/registration',[HealthWorkerListController::class,'create'])->name('registration.assistant');
Route::post('/registration',[PatientsListController::class,'create'])->name('registration.assistant');




Route::get('/patientLogedIn', function () {
    return view('patientLogedIn');
});;
Route::get('/healthWorkerLogedIn', function () {
    return view('healthWorkerLogedIn');
});;




