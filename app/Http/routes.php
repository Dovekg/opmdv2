<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/file', 'HomeController@fileUpload');
Route::get('/patients/{id}/times/{times}/create', ['as' => 'patients.times.create', 'uses' => 'Dashboard\PatientsController@timesCreate']);
Route::get('/patients/{id}/times/{times}/edit', ['as' => 'patients.times.edit', 'uses' => 'Dashboard\PatientsController@timesEdit']);
Route::resource('patients', 'Dashboard\PatientsController');
Route::resource('baseinfos', 'Dashboard\BaseinfosController');
Route::resource('epibios', 'Dashboard\EpibiosController');
Route::resource('clinicals', 'Dashboard\ClinicalsController');
Route::resource('results', 'Dashboard\ResultsController');
Route::resource('olks', 'Dashboard\OlksController');
Route::resource('olps', 'Dashboard\OlpsController');
Route::resource('cancers', 'Dashboard\CancersController');
