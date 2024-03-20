<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SchoolController::class , "index"])->name("home");
Route::post('/school/store',[SchoolController::class , "store"])->name("school.store");
Route::post('/student/store',[StudentController::class , "store"])->name("student.store");
