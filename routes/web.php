<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});

Route::get('infrastructure', function () {
    return view('infrastructure');
});

Route::get('course', function () {
    return view('course-list');
});
Route::get('course1', function () {
    return view('course-list1');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('gallery', function () {
    return view('gallery');
});