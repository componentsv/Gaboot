<?php

Route::group(['middleware' => 'web', 'prefix' => 'gaboot', 'namespace' => 'App\\Components\Gaboot\Http\Controllers'], function()
{
    Route::get('/', 'GabootController@index');
});

// Route::group(['middleware' => ['web']], function () {
//     Route::group(['prefix' => 'admin'], function () {
//         Voyager::routes();
//     });
// });
