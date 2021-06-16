<?php

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

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/visimisi', 'App\Http\Controllers\HomeController@visimisi');
Route::get('/galeri', 'App\Http\Controllers\HomeController@galeri');
Route::get('/ekstrakurikuler', 'App\Http\Controllers\HomeController@ekstrakurikuler');
Route::get('/about', 'App\Http\Controllers\HomeController@about');

//siswa
Route::get('siswa', function () { return view('siswa.siswa'); })->middleware(['checkRole:siswa,admin']);
Route::get('/dataorangtua', 'App\Http\Controllers\ParentController@index');
Route::get('/uploadberkas', 'App\Http\Controllers\FileController@index');
Route::get('/menu', 'App\Http\Controllers\HomeController@menu');
Route::get('/kelulusan/{id}', 'App\Http\Controllers\StudentController@kelulusan'); //un scroll
Route::get('/semuadata/{id}', 'App\Http\Controllers\StudentController@joinTabel'); //scroll
Route::get('/kartu/{id}', 'App\Http\Controllers\StudentController@showkartu');

Route::post('/datadiri', 'App\Http\Controllers\StudentController@store');
Route::post('/dataorangtua', 'App\Http\Controllers\ParentController@store');
Route::post('/uploadberkas', 'App\Http\Controllers\FileController@store');

//admin
Route::get('admin', function () { $student =\App\Models\Student::all(); return view('admin.data', compact('student'));})->middleware('checkRole:admin');
Route::get('/datasiswaadmin/{id}', 'App\Http\Controllers\StudentController@joinTabel');
Route::get('/pesertalulus', 'App\Http\Controllers\StudentController@pesertalulus');

Route::post('/updatelulus/{id}', 'App\Http\Controllers\StudentController@updatelulus');
Route::post('/updatetdklulus/{id}', 'App\Http\Controllers\StudentController@updatetdklulus');