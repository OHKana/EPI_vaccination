<?php

use App\Http\Controllers\ChildVaccineChartController;
use App\Http\Controllers\ChildVaccineScheduleController;
use App\Http\Controllers\TeenageVaccineChartController;
use App\Http\Controllers\PregnancyTikaChartController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Noticescontroller;
use App\Http\Controllers\Servicescontroller;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\PatientsListController;
use App\Http\Controllers\HealthWorkerListController;
use App\Http\Controllers\ScheduleController;

use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\TeenageVaccineScheduleController;
use App\Models\ChildVaccineSchedule;
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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/',[Homecontroller::class,'list'])->name('home');

Route::get('/notices',[Noticescontroller::class,'list'])->name('notices');

Route::get('/services',[Servicescontroller::class,'list'])->name('services');

Route::get('/helpline',[Helplinecontroller::class,'list'])->name('helpline');

Route::get('/patientsList',[PatientsListController::class,'list'])->name('patientsList');

Route::get('/childvaccineschedule',[ChildVaccineScheduleController::class,'list'])->name('childvaccineschedule');
Route::post('/childvaccineschedule/c',[ChildVaccineScheduleController::class,'create'])->name('childvaccineschedule.create');

Route::get('/healthworkerList',[HealthWorkerListController::class,'list'])->name('healthWorkerList');

Route::get('/ChildVaccineChart',[ChildVaccineChartController::class,'list'])->name('ChildVaccineChart');
Route::post('/ChildVaccineChart',[ChildVaccineChartController::class,'create'])->name('ChildVaccineChart.create');


Route::get('/teenageVaccineChart',[TeenageVaccineChartController::class,'list'])->name('TeenageVaccineChart');
Route::post('/teenageVaccineChart/t',[TeenageVaccineChartController::class,'create'])->name('TeenageVaccineChart.create');

//teenage vaccine schedule
Route::get('/teenagevaccineschedule',[TeenageVaccineScheduleController::class,'list'])->name('TeenageVaccineSchedule');
Route::post('/teenagevaccineschedule',[TeenageVaccineScheduleController::class,'create'])->name('TeenageVaccineSchedule.create');


Route::get('/pregnancytikachart',[PregnancyTikaChartController::class,'list'])->name('pregnancyTikaChart');



Route::get('/registration',[Registrationcontroller::class,'list'])->name('registration');

Route::post('/registration/patient',[HealthWorkerListController::class,'create'])->name('registration.assistant');
Route::post('/registration/assistant',[PatientsListController::class,'create'])->name('registration.patient');



Route::get('/schedule',[ScheduleController::class,'list'])->name('schedule');




Route::get('/patientLogedIn', function () {
    return view('patientLogedIn');
});;
Route::get('/healthWorkerLogedIn', function () {
    return view('healthWorkerLogedIn');
});;




