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

Route::get('/',array('as'=>'homePage','uses'=>'PagesController@index'));

Route::get('basic',array('as'=>'basicPage','uses'=>'PagesController@basic'));

Route::get('page1', array('as' => 'page1', 'uses' => 'PagesController@page1'));

Route::get('page2', array('as' => 'page2', 'uses' => 'PagesController@page2'));

Route::get('page3', array('as' => 'page3', 'uses' => 'PagesController@page3'));

Route::get('page4', array('as' => 'page4', 'uses' => 'PagesController@page4'));