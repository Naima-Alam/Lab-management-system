<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TestReportController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\LabtechnicalController;
use App\Http\Controllers\backend\TestinfoController;
use App\Http\Controllers\backend\TimeslotController;
use App\Http\Controllers\Frontend\PatientProfile;
use App\Http\Controllers\Profile\ProfileController;

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
Route::get('view/{id}',[DoctorController::class,'profile'])->name('doctor.view');


//profile

Route::get('patient/profile/', [PatientProfile::class,'profile'])->name('profile');





// website / frontend routes here

Route::get('/', [HomeController::class,'website'])->name('website');
//doctor login form
Route::group(['prefix' => 'doctor'], function () {
Route::get('/login', [HomeController::class,'login'])->name('doctor.loginForm');
Route::post('/dologin',[HomeController::class,'doLogin'])->name('doctor.login');
Route::get('/logout', [HomeController::class, 'logout'])->name('doctor.logout');
});

//patent registration form
Route::get('/registration/form',[UserController::class,'registrationForm'])->name('registration.form');
Route::post('/registration/create',[UserController::class,'register'])->name('register');

Route::get('/user/login',[UserController::class,'loginForm'])->name('login.form');
Route::post('/dologin',[UserController::class,'doLogin'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
//DOCTOR
Route::get('/form',[UserController::class,'form'])->name('form');
Route::get('/department',[HomeController::class,'department'])->name('department');




Route::get('/news', [HomeController::class,'news'])->name('news');
Route::get('/contact', [HomeController::class,'contact'])->name('contact.info');
Route::get('/about', [HomeController::class,'about'])->name('about.info');


//admin route here
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login',[AdminController::class,'loginForm'])->name('admin.loginForm');
    Route::post('/dologin',[AdminController::class,'doLogin'])->name('admin.login');


    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//backend deshboard routes here

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//appointment routes
Route::group(['prefix'=> 'appointment'],function() {
    Route::get('all',[AppointmentController::class,'all'])->name('appointment.list');
    Route::get('new',[AppointmentController::class,'new'])->name('appointment.new');
    Route::get('form',[AppointmentController::class,'form'])->name('appointment.form');
    Route::post('create',[AppointmentController::class,'create'])->name('appointment.create');
    Route::get('view/{id}',[AppointmentController::class,'view'])->name('appointment.view');
    Route::get('accepted/{id}',[AppointmentController::class,'accepted'])->name('appointment.accepted');
    Route::get('rejected/{id}',[AppointmentController::class,'rejected'])->name('appointment.rejected');

    Route::get('rejected_all/{id}',[AppointmentController::class,'rejectedAll'])->name('appointment.rejectedAll');
    Route::get('restore/{id}',[AppointmentController::class,'restore'])->name('appointment.restore');

});

Route::group(['middleware'=>'admin-auth'],function (){
//Doctor routes
Route::group(['prefix' => 'doctor'], function () {
    Route::get('list',[DoctorController::class,'list'])->name('doctor.list');
    Route::post('search',[DoctorController::class,'search'])->name('doctor.search');
    Route::get('form',[DoctorController::class,'form'])->name('doctor.form');
    Route::post('create',[DoctorController::class,'create'])->name('doctor.create');
    Route::get('edit/{id}',[DoctorController::class,'edit'])->name('doctor.edit');

    Route::put('update/{id}',[DoctorController::class,'update'])->name('doctor.update');
    Route::get('delete/{id}',[DoctorController::class,'delete'])->name('doctor.delete');
});


//labtechnical routes

Route::group(['prefix' => 'labtechnical'], function () {
    Route::get('list',[LabtechnicalController::class,'list'])->name('labtechnical.list');
    Route::get('form',[LabtechnicalController::class,'form'])->name('labtechnical.form');
    Route::post('create',[LabtechnicalController::class,'create'])->name('labtechnical.create');
    Route::get('edit/{id}',[LabtechnicalController::class,'edit'])->name('labtechnical.edit');
    Route::get('view/{id}',[LabtechnicalController::class,'view'])->name('labtechnical.view');
    Route::put('update/{id}',[LabtechnicalController::class,'update'])->name('labtechnical.update');
    Route::get('delete/{id}',[LabtechnicalController::class,'delete'])->name('labtechnical.delete');
});

//test report routes

Route::group(['prefix' => 'test'], function () {
    Route::get('list',[TestReportController::class,'list'])->name('test.list');
    Route::get('form',[TestReportController::class,'form'])->name('test.form');
    Route::post('create',[TestReportController::class,'create'])->name('test.create');
    Route::get('edit/{id}',[TestReportController::class,'edit'])->name('test.edit');
    Route::get('view/{id}',[TestReportController::class,'view'])->name('test.view');
    Route::put('update/{id}',[TestReportController::class,'update'])->name('test.update');
    Route::get('delete/{id}',[TestReportController::class,'delete'])->name('test.delete');
});

//test information routes
Route::group(['prefix' => 'testinformation'], function () {
    Route::get('form',[TestinfoController::class,'form'])->name('testinformation.form');
    Route::get('list',[TestinfoController::class,'list'])->name('testinformation.list');
    Route::post('create',[TestinfoController::class,'create'])->name('testinformation.create');
});

//patient routes



Route::group(['prefix' => 'patient'], function () {
    Route::get('list',[PatientController::class,'list'])->name('patient.list');
    Route::get('form',[PatientController::class,'form'])->name('patient.form');
    Route::post('create',[PatientController::class,'create'])->name('patient.create');
    Route::get('edit/{id}',[PatientController::class,'edit'])->name('patient.edit');
    Route::get('view/{id}',[PatientController::class,'view'])->name('patient.view');
    Route::put('update/{id}',[PatientController::class,'update'])->name('patient.update');
    Route::get('delete/{id}',[PatientController::class,'delete'])->name('patient.delete');
});

//department routes
Route::group(['prefix' => 'department'], function () {
    Route::get('form',[DepartmentController::class,'form'])->name('department.form');
    Route::get('list',[DepartmentController::class,'form'])->name('department.list');
    Route::post('create',[DepartmentController::class,'create'])->name('department.create');
});



//timeslot routes
Route::group(['prefix' => 'timeslot'], function () {
    Route::get('form',[TimeslotController::class,'form'])->name('timeslot.form');
    Route::get('list',[TimeslotController::class,'list'])->name('timeslot.list');
    Route::post('create',[TimeslotController::class,'create'])->name('timeslot.create');
});




});

});
