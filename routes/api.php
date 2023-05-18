<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(PatientsController::class)->prefix('/patient')->group(function () {
    Route::post('create-patient', 'createPatient')->name('api#createpatient');
    Route::get('get-all-patients', 'getAllPatients')->name('api#getallpatients');
    Route::get('get-one-patient/{id}', 'getOnePatient')->name('api#getonepatient');
    Route::post('update-patient/{id}', 'updatePatient')->name('api#updatepatient');
    Route::delete('delete-patient/{id}', 'deletePatient')->name('api#deletepatient');
});
