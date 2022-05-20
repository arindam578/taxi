<?php

Route::get('/', 'HospitalerController@index')->name('index');
Route::get('/dashboard', 'HospitalerController@dashboard')->name('dashboard');
Route::get('/heatmap', 'HospitalerController@heatmap')->name('heatmap');
Route::get('/translation',  'HospitalerController@translation')->name('translation');
Route::get('/hospitaler', function(){
    return "hello";
});

Route::group(['as' => 'hospitaler.', 'prefix' => 'hospitaler'], function () {
	Route::get('/', 'HospitalerController@index')->name('index');
	Route::post('/', 'HospitalerController@store')->name('store');
	Route::get('/trips', 'HospitalerController@trips')->name('trips');
	Route::get('/trips/{trip}/{provider}', 'HospitalerController@assign')->name('assign');
	Route::get('/users', 'HospitalerController@users')->name('users');
	Route::get('/providers', 'HospitalerController@providers')->name('providers');
	Route::get('/cancelled', 'HospitalerController@cancelled')->name('cancelled');
	Route::get('/cancel', 'HospitalerController@cancel')->name('cancel');
    
});
Route::get('/estimated/fare', 'HospitalerController@estimated_fare');
Route::resource('service', 'Resource\ServiceResource');

Route::get('password', 'HospitalerController@password')->name('password');
Route::post('password', 'HospitalerController@password_update')->name('password.update');

Route::get('profile', 'HospitalerController@profile')->name('profile');
Route::post('profile', 'HospitalerController@profile_update')->name('profile.update');

 

Route::resource('user', 'Resource\UserResource');
Route::resource('dispatch-manager', 'Resource\HospitalerrResource');
Route::resource('account-manager', 'Resource\AccountResource');
Route::resource('fleet', 'Resource\FleetResource');
Route::resource('provider', 'Resource\ProviderResource');
Route::resource('document', 'Resource\DocumentResource');

// geo fencing set city base drag location
Route::resource('geo-fencing', 'Resource\GeoFencingResource');

Route::group(['as' => 'provider.'], function () {
    Route::get('review/provider', 'HospitalerController@provider_review')->name('review');
    Route::get('provider/{id}/approve', 'Resource\ProviderResource@approve')->name('approve');
    Route::get('provider/{id}/disapprove', 'Resource\ProviderResource@disapprove')->name('disapprove');
    Route::get('provider/{id}/request', 'Resource\ProviderResource@request')->name('request');
    Route::get('provider/{id}/statement', 'Resource\ProviderResource@statement')->name('statement');
    Route::resource('provider/{provider}/document', 'Resource\ProviderDocumentResource');
    Route::delete('provider/{provider}/service/{document}', 'Resource\ProviderDocumentResource@service_destroy')->name('document.service');

    Route::get('service', 'HospitalerController@service')->name('service');
    
});

Route::get('review/user', 'HospitalerController@user_review')->name('user.review');
Route::get('user/{id}/request', 'Resource\UserResource@request')->name('user.request');

Route::get('map', 'HospitalerController@map_index')->name('map.index');
Route::get('map/ajax', 'HospitalerController@map_ajax')->name('map.ajax');


Route::get('payment', 'HospitalerController@payment')->name('payment');

// statements

Route::get('/statement', 'HospitalerController@statement')->name('ride.statement');
Route::get('/statement/provider', 'HospitalerController@statement_provider')->name('ride.statement.provider');
Route::get('/statement/today', 'HospitalerController@statement_today')->name('ride.statement.today');
Route::get('/statement/monthly', 'HospitalerController@statement_monthly')->name('ride.statement.monthly');
Route::get('/statement/yearly', 'Controller@statement_yearly')->name('ride.statement.yearly');


// Static Pages - Post updates to pages.update when adding new static pages.

Route::get('/help', 'HospitalerController@help')->name('help');
Route::get('/send/push', 'HospitalerController@push')->name('push');
Route::post('/send/push', 'HospitalerController@send_push')->name('send.push');
Route::get('/privacy', 'HospitalerController@privacy')->name('privacy');
Route::get('/terms', 'HospitalerController@terms')->name('terms');
Route::get('/help', 'HospitalerController@help')->name('help');
Route::get('/offers', 'HospitalerController@offers')->name('offers');
Route::get('/about_us', 'HospitalerController@about_us')->name('about_us');
Route::post('/pages', 'HospitalerController@pages')->name('pages.update');
Route::get('hospitaler/requests/index', 'Resource\HospitalTripResource')->name('requests.index');
Route::get('scheduled', 'Resource\TripResource@scheduled')->name('requests.scheduled');

Route::get('push', 'HospitalerController@push_index')->name('push.index');
Route::post('push', 'HospitalerController@push_store')->name('push.store');



