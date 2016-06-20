<?php
Route::group(['namespace'=>'LincolnBrito\Bleh\Controllers', 'prefix'=>'blehdemo'], function(){
    Route::get('foo', 'BlehController@foo');
});