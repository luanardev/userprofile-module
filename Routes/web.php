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

Route::prefix('userprofile')->middleware(['auth', 'client:userprofile'])->group(function () {

    Route::get('/', 'UserProfileController@index')->name('userprofile.home');
    Route::get('profile', 'UserProfileController@profile')->name('user.profile');
    Route::get('employment', 'UserProfileController@employment')->name('user.employment');
    Route::get('supervisor', 'UserProfileController@supervisor')->name('user.supervisor');
    Route::get('spouse', 'UserProfileController@spouse')->name('user.spouse');
    Route::get('kinsman', 'UserProfileController@kinsman')->name('user.kinsman');
    Route::get('dependants', 'UserProfileController@dependants')->name('user.dependants');
    Route::get('experience', 'UserProfileController@experience')->name('user.experience');
    Route::get('qualifications', 'UserProfileController@qualifications')->name('user.qualifications');
    Route::get('awards', 'UserProfileController@awards')->name('user.awards');
    Route::get('referees', 'UserProfileController@referees')->name('user.referees');
    Route::get('documents', 'UserProfileController@documents')->name('user.documents');
    Route::get('progress', 'UserProfileController@progress')->name('user.progress');

    Route::get('change-password', 'PasswordController@create')->name('password.create');
    Route::post('change-password', 'PasswordController@store')->name('password.store');


    Route::get('add-profile', 'RegisterController@profile')->name('user.create.profile');
    Route::get('add-employment', 'RegisterController@employment')->name('user.create.employment');
    Route::get('add-supervisor', 'RegisterController@supervisor')->name('user.create.supervisor');
    Route::get('add-spouse', 'RegisterController@spouse')->name('user.create.spouse');
    Route::get('add-kinsman', 'RegisterController@kinsman')->name('user.create.kinsman');
    Route::get('add-dependants', 'RegisterController@dependants')->name('user.create.dependants');
    Route::get('add-experience', 'RegisterController@experience')->name('user.create.experience');
    Route::get('add-qualifications', 'RegisterController@qualifications')->name('user.create.qualifications');
    Route::get('add-awards', 'RegisterController@awards')->name('user.create.awards');
    Route::get('add-referees', 'RegisterController@referees')->name('user.create.referees');
    Route::get('add-documents', 'RegisterController@documents')->name('user.create.documents');


});
