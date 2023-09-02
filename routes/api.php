<?php

use App\Http\Controllers\Examination\ExaminationController;
use App\Http\Controllers\FormBuilder\FormController;
use App\Http\Controllers\FormBuilder\FormGroupController;
use App\Http\Controllers\FormBuilder\FormGroupFieldController;
use App\Http\Controllers\FormBuilder\FormGroupFieldOptionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('forms',FormController::class);
Route::resource('form-groups',FormGroupController::class);
Route::resource('form-group-fields',FormGroupFieldController::class);
Route::resource('form-group-field-options',FormGroupFieldOptionController::class);


Route::resource('examinations',ExaminationController::class);
