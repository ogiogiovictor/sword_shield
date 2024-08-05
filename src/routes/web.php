<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Ibelemo\Contact\Http\Controllers'], function() {

    Route::group(['prefix' => 'V3_deadonarrival_passage_ibedc_OAUTH_secure'], function () {


        Route::get('contact', 'ProcessingFiguresController@index')->name('contact');

        //return view('contact::contact');
    
        Route::controller(ProcessingFiguresController::class)->group(function() {
            Route::post('implement_nodes', 'proxes')->name('implement_nodes');
        });
    
    });
    
});

