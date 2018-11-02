<?php

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

Route::get('getData', function()
 {
     return view('getData');
});

Route::get('addCourse', function()
 {
     return view('addCourse');
});

Route::get('getSavedCourses', function()
  {
     return view('getSavedCourses');
});

Route::get('getCourses', 'API\V1\CourseraController@index');

