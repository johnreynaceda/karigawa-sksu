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

Route::get('/', function () {
    return view('auth.login');
})->middleware('checkrole');

//FACULTY
Route::get('/account', 'App\Http\Controllers\FacultyController@account')->name('account')->middleware('faculty');
Route::get('/faculty', 'App\Http\Controllers\FacultyController@index')->name('faculty')->middleware('faculty');
Route::get('/faculty/dashboard', 'App\Http\Controllers\FacultyController@dashboard')->name('faculty-dashboard')->middleware('faculty');
Route::get('/faculty/application', 'App\Http\Controllers\FacultyController@application')->name('faculty-application')->middleware('faculty');
Route::get('/faculty/pds', 'App\Http\Controllers\FacultyController@pds')->name('faculty-pds')->middleware('faculty');


//PROGRAMHEAD
Route::get('/programhead/dashboard',
'App\Http\Controllers\FacultyController@phdashboard')->name('programhead-dashboard')->middleware('faculty');
Route::get('/programhead/application',
'App\Http\Controllers\FacultyController@phapplication')->name('programhead-application')->middleware('faculty');

//HUMAN RESOURCE
Route::get('/hr/dashboard',
'App\Http\Controllers\FacultyController@hrdashboard')->name('hr-dashboard')->middleware('faculty');
Route::get('/hr/monitor',
'App\Http\Controllers\FacultyController@hrmonitor')->name('hr-monitor')->middleware('faculty');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');


Route::get('/redirect', fn()=>view('login'))->middleware(['checkrole', 'auth']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
