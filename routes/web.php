<?php

use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('work', function () {
    return view('work');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('showall', function () {
    return view('showall');
});
//Lab 4
Route::get('showall','App\Http\Controllers\MydbController@showalldata');

Route::get('new', function () {
    return view('new');
});

Route::post('insert','App\Http\Controllers\MydbController@insert');
Route::post('chang','App\Http\Controllers\MydbController@chang');//ส่งแบบ post
//Route::post('edit','App\Http\Controllers\MydbController@edit'); //ส่งแบบ post แบบนี้ใช้ไม่ได้ edit
//Route::get('edit/{id}','App\Http\Controllers\MydbController@edit'); //ส่งแบบ get
Route::post('edits/{id}','App\Http\Controllers\MydbController@edits');
Route::post('delete/{id}','App\Http\Controllers\MydbController@delete');
