<?php

Route::group(['middleware' => 'web', 'prefix' => 'gaboot', 'namespace' => 'App\\Components\Gaboot\Http\Controllers'], function()
{
    Route::get('/', 'GabootController@index');
});
