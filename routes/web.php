<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\resumeController;
use Illuminate\Support\Facades\Route;

//page route
Route::get('/',[homeController::class,'page']);
Route::get('/contact',[contactController::class,'page']);
Route::get('/project',[projectController::class,'page']);
Route::get('/resume',[resumeController::class,'page']);

//Ajax call route

Route::get('/heroData',[homeController::class,'heroData']);
Route::get('/aboutData',[homeController::class,'aboutData']);
Route::get('/socialData',[homeController::class,'socialData']);
Route::get('/projectsData',[projectController::class,'projectsData']);
Route::get('/resumeLink',[resumeController::class,'resumeLink']);
Route::get('/experiencesData',[resumeController::class,'experiencesData']);
Route::get('/educationalData',[resumeController::class,'educationalData']);
Route::get('/skillsData',[resumeController::class,'skillsData']);
Route::get('/languagesData',[resumeController::class,'languagesData']);
Route::post('/contactRequest',[contactController::class,'contactRequest']);
