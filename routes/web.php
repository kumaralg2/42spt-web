<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/technologies', function () {
    return view('pages.technologies');
});
Route::get('/price', function () {
    return view('pages.price');
});
Route::get('/videos', function () {
    return view('pages.videos');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/apply-now', function () {
    return view('pages.apply-now');
});
Route::get('/whyus', function () {
    return view('pages.whyus');
});



