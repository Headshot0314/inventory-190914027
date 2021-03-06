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

Route::get('/hello', function () {
    echo ('Hello World');
});

Route::get('/name/{name}', function ($name) {
    return "Hello ". $name;
});

Route::get('/name/{name}/{nrp}', function ($name, $nrp) {
    return "Hello ". $name . $nrp;
})->where("name", '[A-Za-z]+');

Route::get('/person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@show');
Route::get('/person/sendData', 'PersonController@sendData');

Route::get('/student', 'StudentController@index');

Route::get('/student/sendData', 'StudentController@sendData');



Route::get('my-academic/{course}/{task}/{quiz}/{mid_term}/{final}','StudentController@myCourse');

Route::get('/person/add', 'PersonController@add');
Route::post('/person/addProcess', 'PersonController@addProcess');