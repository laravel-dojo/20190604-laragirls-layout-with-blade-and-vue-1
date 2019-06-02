<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('comments', function () {
    return [
        [
            'name' => 'User 1 (from API)',
            'content' => 'User comment 1 (from API)',
        ],
        [
            'name' => 'User 2 (from API)',
            'content' => 'User comment 2 (from API)',
        ],
    ];
});
