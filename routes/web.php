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
    return view('home.index');
});

Route::get('news', function () {
    return view('news.index');
});

Route::get('news/{id}', function ($id) {
    return view('news.show');
});

Route::get('posts', function () {
    return view('posts.index');
});

Route::get('posts/{id}', function ($id) {
    return view('posts.show');
});

Route::get('jobs', function () {
    return view('jobs.index');
});

Route::get('jobs/{id}', function ($id) {
    return view('jobs.show');
});

Route::get('projects', function () {
    return view('projects.index');
});

Route::get('projects/{id}', function ($id) {
    return view('projects.show');
});
