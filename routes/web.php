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

Auth::routes(['register'=> false, 'reset'=>false]);
	// Route::get('/home', 'HomeController@index')->name('home');
	
Route::group(['middleware' => ['role:superadministrator']], function () {
	Route::resource('users', 'UsersController');
	Route::resource('permission', 'PermissionController');
	Route::resource('roles', 'RolesController');
});
	

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['role:superadministrator|administrator']], function() {
    	Route::get('/home', 'QrscanController@index')->name('home');

		Route::resource('/visitor', 'VisitorController');
		Route::resource('/member', 'MemberController');
		Route::resource('/company', 'CompanyController');
		Route::resource('/absensi', 'AbsensiController');
    });
});