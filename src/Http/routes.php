<?php
/**
 * Created by PhpStorm.
 * User: 王鹏
 * Date: 2019/7/26
 * Time: 9:05
 */
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('sjunit.store');


Route::get('test', 'TeController@index');
