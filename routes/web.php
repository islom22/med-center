<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DoctorController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PatientController::class, 'index']);
Route::post('/patient-info', [PagesController::class, 'patientRegister'])->name('moreInformation');
Route::post('/patient-room', [PatientController::class, 'store'])->name('room-post');
Route::get('/patient-room', [PagesController::class, 'room'])->name('room-get');
Route::get('/admin-panel', [PagesController::class, 'mainPanel'])->name('admin-panel');
Route::get('/add-doctor',[ PagesController::class,'Doctor'])->name('add-doctor');
Route::post('/add-doctor', [DoctorController::class,'store'])->name('add-doctor-post');
Route::get('/admin/{id}/edit',[ DoctorController::class,'show'])->name('admin.show');
Route::post('/admin-update/{id}/',[ DoctorController::class,'update']);
Route::delete('/admin-delete/{id}', [DoctorController::class, 'destroy']);
Route::get('/main-doctor',[PagesController::class, 'maindoctor'])->name('main-doctor');
Route::get('/eye-doctor',[PagesController::class, 'eyedoctor']);
Route::get('/cardiolog-doctor',[PagesController::class, 'cardiologdoctor']);
Route::get('/xray-doctor',[PagesController::class, 'xraydoctor']);
Route::get('/patient/edit/{id}',[PatientController::class, 'update']);
Route::get('/patient/{id}',[PagesController::class, 'diagnosis']);


