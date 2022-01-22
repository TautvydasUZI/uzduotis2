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
    return view('welcome');
});


Route::prefix('schools')->group(function() {

    Route::get('', 'App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::get('create', 'App\Http\Controllers\SchoolController@create')->name('school.create');
    Route::post('store', 'App\Http\Controllers\SchoolController@store' )->name('school.store');
    Route::get('edit/{school}', 'App\Http\Controllers\SchoolController@edit')->name('school.edit');
    Route::post('update/{school}', 'App\Http\Controllers\SchoolController@update')->name('school.update');
    Route::post('destroy/{school}', 'App\Http\Controllers\SchoolController@destroy' )->name('school.destroy');
    Route::get('show/{school}', 'App\Http\Controllers\SchoolController@show')->name('school.show');

});


Route::prefix('attendancegroups')->group(function() { 

    Route::get('', 'App\Http\Controllers\AttendancegroupController@index')->name('attendancegroup.index');
    Route::get('create', 'App\Http\Controllers\AttendancegroupController@create')->name('attendancegroup.create');
    Route::post('store', 'App\Http\Controllers\AttendancegroupController@store' )->name('attendancegroup.store');
    Route::get('edit/{attendancegroup}', 'App\Http\Controllers\AttendancegroupController@edit')->name('attendancegroup.edit');
    Route::post('update/{attendancegroup}', 'App\Http\Controllers\AttendancegroupController@update')->name('attendancegroup.update');
    Route::post('destroy/{attendancegroup}', 'App\Http\Controllers\AttendancegroupController@destroy' )->name('attendancegroup.destroy');
    Route::get('show/{attendancegroup}', 'App\Http\Controllers\AttendancegroupController@show')->name('attendancegroup.show');

});


Route::prefix('students')->group(function() {

    Route::get('', 'App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    Route::post('store', 'App\Http\Controllers\StudentController@store' )->name('student.store');
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    Route::post('destroy/{student}', 'App\Http\Controllers\StudentController@destroy' )->name('student.destroy');
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');

});