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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/infonews', function () {
    return view('infoNews');
});
Route::get('/financial', function () {
    return view('financial');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/regulations', function () {
    return view('regulations');
});
Route::get('/requirements', function () {
    return view('requirements');
});
Route::get('/procedures', function () {
    return view('procedures');
});
Route::get('/prospectus', function () {
    return view('prospectus');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/theology', function () {
    return view('theologydept');
});
Route::get('/philosophy', function () {
    return view('philosophydept');
});
Route::get('/generalstudies', function () {
    return view('generalstudydept');
});
Route::get('/psychology', function () {
    return view('psychologydept');
});

Route::get('/certificate', function () {
    return view('certificatecourses');
});
Route::get('/diploma', function () {
    return view('diplomacourses');
});
Route::get('/bachelor', function () {
    return view('bachelorcourses');
});


// Testing for EOMS
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/apply', function () {
    return view('apply');
});

Route::get('/apply/certificate', function () {
    return view('applycertificate');
});
Route::get('/apply/diploma', function () {
    return view('applydiploma');
});
Route::get('/apply/bachelor', function () {
    return view('applybachelor');
});