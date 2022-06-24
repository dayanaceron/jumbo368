<?php

use App\Http\Controllers\AmbientGroupController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HourGroupController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
    return view('Template.Template');
});
// Rutas Para Docentes
Route::resource('profesores', TeacherController::class);
//Rutas Para Grupos
Route::resource('grupos', GroupController::class);
//Rutas Para Materias
Route::resource('materias', SubjectController::class);
//Rutas Para Aula
Route::resource('aulas', AmbientGroupController::class);
//Ruta Para Hor
Route::resource('horas', HourGroupController::class);
