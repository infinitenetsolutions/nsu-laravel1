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
Route::get('career', function () {
    return view('career');
});
Route::get('news', function () {
    return view('news');
});
Route::get('upgrade', function () {
    return view('upgrade');
});
Route::get('course-detail', function () {
    return view('course-detail');
});
Route::get('apply-now', function () {
    return view('apply-now');
});
Route::get('play-button', function () {
    return view('play-button');
});
Route::get('test', function () {
    return view('test');
});
Route::get('testimonial', function () {
    return view('testimonial');
});





