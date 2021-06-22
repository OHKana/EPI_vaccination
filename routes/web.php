<?php

use App\Http\Controllers\ChildVaccineChartController;
use App\Http\Controllers\ChildVaccineScheduleController;
use App\Http\Controllers\TeenageVaccineChartController;
use App\Http\Controllers\PregnancyTikaChartController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Servicescontroller;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\PatientsListController;
use App\Http\Controllers\HealthWorkerListController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SignInUpController;
use App\Http\Controllers\HealthWorkerSignInUpController;
use App\Http\Controllers\PatientsSignInUpController;
use App\Http\Controllers\PatientsProfileController;
use App\Http\Controllers\HealthworkerProfileController;
use App\Http\Controllers\HealthworkerNoticeController;
use App\Http\Controllers\StockUpdateController;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\TeenageVaccineScheduleController;

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

Route::get('/notice',[NoticeController::class,'list'])->name('notices');

Route::get('/services',[Servicescontroller::class,'list'])->name('services');



Route::get('/helpline',[Helplinecontroller::class,'list'])->name('helpline');


Route::get('/SignInUp',[SignInUpController::class,'list'])->name('SignInUp');





// healt worker sign in sign up
Route::get('/healthWorkerSignInSignUp',[HealthWorkerSignInUpController::class,'show'])->name('healthWorkerSignInUp');
Route::post('/HWlogin',[HealthWorkerSignInUpController::class,'login'])->name('HWlogin');
Route::get('/HWlogout',[HealthWorkerSignInUpController::class,'logout'])->name('HWlogout');

// //patients log In
Route::get('/patientsSignInSignUp',[PatientsSignInUpController::class,'show'])->name('patientsSignInUp');
Route::post('/plogin',[PatientsSignInUpController::class,'login'])->name('login');
Route::get('/plogout',[PatientsSignInUpController::class,'logout'])->name('logout');


//admin auth
Route::group(['middleware'=>'admin-auth'], function(){

// registration
Route::post('/registration/patient',[HealthWorkerListController::class,'create'])->name('registration.assistant');
Route::post('/registration/assistant',[PatientsListController::class,'create'])->name('registration.patient');

//profile
Route::get('/healthWorkerprofile',[HealthWorkerProfileController::class,'list'])->name('healthWorkerProfile');
Route::get('/healthWorkerprofile/changePassword',[HealthWorkerProfileController::class,'changePassword'])->name('changePassword');
Route::post('/healthWorkerprofile/updatePassword',[HealthWorkerProfileController::class,'updatePassword'])->name('update.Password');

//notice
Route::get('/healthWorkerNotice',[HealthWorkerNoticeController::class,'list'])->name('healthWorkerNotices');
Route::post('/healthWorkerNotice/create',[HealthWorkerNoticeController::class,'createNotice'])->name('create.healthWorkerNotice');
// Route::get('/notice',[NoticeController::class,'list'])->name('notices');

// patients list
Route::get('/patientsList',[PatientsListController::class,'list'])->name('patientsList');
Route::get('/patient/search',[PatientsListController::class,'search'])->name('patients.search');

Route::get('/patientsList/checkChild/{id}',[PatientsListController::class,'checkChild'])->name('patientsList.checkChild');
Route::get('/patientsList/checkTeenage/{id}',[PatientsListController::class,'checkTeenage'])->name('patientsList.checkTeenge');


// health worker list
Route::get('/healthworkerList',[HealthWorkerListController::class,'list'])->name('healthWorkerList');
Route::get('/healthworker/delete/{id}', [HealthWorkerListController::class, 'delete'])->name('healthWorkerList.delete');

// child Vaccine
Route::get('/ChildVaccineChart',[ChildVaccineChartController::class,'list'])->name('ChildVaccineChart');
Route::post('/ChildVaccineChart',[ChildVaccineChartController::class,'create'])->name('ChildVaccineChart.create');
Route::get('/childVaccineChart/delete/{id}', [ChildVaccineChartController::class, 'delete'])->name('ChildVaccineChart.delete');

Route::get('/childvaccineschedule',[ChildVaccineScheduleController::class,'list'])->name('childvaccineschedule');
Route::post('/childvaccineschedule/c',[ChildVaccineScheduleController::class,'create'])->name('childvaccineschedule.create');
Route::get('/childvaccineschedule/edit/{id}',[ChildVaccineScheduleController::class,'edit'])->name('childvaccineschedule.edit');
// teenage Vaccine
Route::get('/teenageVaccineChart',[TeenageVaccineChartController::class,'list'])->name('TeenageVaccineChart');
Route::post('/teenageVaccineChart/t',[TeenageVaccineChartController::class,'create'])->name('TeenageVaccineChart.create');
Route::get('/teenageVaccineChart/delete/{id}', [TeenageVaccineChartController::class, 'delete'])->name('TeenageVaccineChart.delete');

Route::get('/teenagevaccineschedule',[TeenageVaccineScheduleController::class,'list'])->name('teenageVaccineSchedule');
Route::post('/teenagevaccineschedule',[TeenageVaccineScheduleController::class,'create'])->name('teenageVaccineSchedule.create');
Route::get('/teenagevaccineschedule/edit/{id}',[TeenageVaccineScheduleController::class,'edit'])->name('teenageVaccineSchedule.edit');

// Route::get('/pregnancytikachart',[PregnancyTikaChartController::class,'list'])->name('pregnancyTikaChart');


//stock
Route::get('/stock',[StockUpdateController::class,'list'])->name('stockUpdate');
Route::post('/stock/update',[StockUpdateController::class,'createStock'])->name('stockUpdate.create');

//report
Route::get('/report/list',[ReportController::class,'list'])->name('Report');
Route::post('/report',[ReportController::class,'reportProcess'])->name('report.process');



});


//user auth
Route::group(['middleware'=>'user-auth'], function(){

    Route::get('/patientsprofile',[PatientsProfileController::class,'list'])->name('patientsProfile');

    Route::get('/schedule',[ScheduleController::class,'list'])->name('schedule');



});





