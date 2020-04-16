<?php

use Illuminate\Support\Facades\Route;

   // Route::get('/records', 'recordController@index');
  // Route::get('/records/record','recordController@create');
  // Route::post('/records','recordController@store');
  // Route::delete('/records/{record}','recordController@destory')->name('destroy');
  // Route::put('/records/{record}/edit','recordController@edit')->name('edit');
  // Route::patch ('/records/{record}','recordController@update')->name('update');
    Route::resource('records', 'recordController');
    Route::apiResource('records', 'recordController');