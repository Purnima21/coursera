<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => '1.0'], function () {

	//Consta Cloud

	Route::post('addCourse', 'API\V1\CourseraController@addCourse');
    Route::get('getData', 'API\V1\TestController@getData');

    //Cousera
   
    Route::post('addCourse', 'API\V1\CourseraController@addCourse');
    Route::get('getSavedCourses', 'API\V1\CourseraController@getSavedCourses');
});    
