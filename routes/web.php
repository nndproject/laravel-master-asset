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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','HomeController@schedule')->name('front.schedule');
Route::post('/post-schedule','HomeController@postschedule')->name('front.post-schedule');
Route::get('/schedule/{id}','HomeController@schedulepdf')->name('front.schedule.pdf');

Auth::routes();

Route::group(['prefix' => 'adm',  'middleware' => 'auth'], function () {
        Route::get('management-user/my-profile','ManagementUserController@profile')->name('management-user.my-profile');
        Route::post('management-user/act-profile','ManagementUserController@actprofile')->name('management-user.act-profile');
        Route::get('/', 'ScheduleMeetingController@index')->name('home');
        Route::resource('/meeting-schedule','ScheduleMeetingController');
        Route::post('/meeting-schedule/export','ScheduleMeetingController@export')->name('meeting-schedule.export');
});