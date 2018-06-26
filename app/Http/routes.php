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

Route::get('/main', ["as" => "main", "uses" => "mainController@show"]);
Route::get('/profile', ["as" => "profile", "uses" => "profileController@show"]);
Route::get('/profile/auth', ["as" => "auth", "uses" => "authController@show"]);
Route::get('/profile/register', ["as" => "register", "uses" => "registerController@show"]);
Route::get('/profile/userRegister', ["as" => "userRegister", "uses" => "userRegisterController@show"]);
Route::get('/profile/addMaster', ["as" => "addMaster", "uses" => "addMasterController@show"]);
Route::get('/profile/addMasterType', ["as" => "addMasterType", "uses" => "addMasterTypeController@show"]);
Route::get('/profile/addClient', ["as" => "addClient", "uses" => "addClientController@show"]);
Route::get('/main/profile/userType', ["uses" => "UserTypeController@show", "as" => "usertype"]);
Route::get('/client/order', ["uses" => "clientOrderController@show", "as" => "clientOrder"]);
Route::get('/client/order/add', ["uses" => "addOrderController@show", "as" => "addOrder"]);
Route::get('/profile/logout', ["as" => "logout", "uses" => "logOutController@show"]);
Route::get('/client/order/show', ["uses" => "showOrderController@show", "as" => "showOrder"]);
Route::get('/master/show', ["uses" => "masterMenuController@show", "as" => "masterMenu"]);
Route::get('/master/changeStatus', ["uses" => "statusChangeController@show", "as" => "statusChange"]);
Route::get('/master/createPDF', ["uses" => "createPDFController@show", "as" => "createPDF"]);
Route::get('/master/createXLS', ["uses" => "createXLSController@show", "as" => "createXLS"]);
Route::get('/master/createCSV', ["uses" => "createCSVController@show", "as" => "createCSV"]);