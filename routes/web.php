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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',                         ['uses'=>'PatientsController@patientsList',             'as'=>'patients']);
Route::get('/details/{id}',             ['uses'=>'PatientsController@patientsDetails',          'as'=>'patient_details']);
Route::get('/add',                      ['uses'=>'PatientsController@addPatient',               'as'=>'add_patient']);
Route::get('/delete/{id}',              ['uses'=>'PatientsController@deletePatient',            'as'=>'delete_patient']);
Route::post('/add',                     ['uses'=>'PatientsController@store',                    'as'=>'store_patient']);
Route::post('/edit',                    ['uses'=>'PatientsController@edit',                     'as'=>'edit_patient']);
Route::get('/notes/{date?}', 			['uses'=>'NotesController@index',                       'as'=>'notes']);
Route::post('/note', 					['uses'=>'NotesController@store',                       'as'=>'add_note']);
Route::any('{any?}', 					['uses'=>'PatientsController@patientsList',             'as'=>'patients']);
