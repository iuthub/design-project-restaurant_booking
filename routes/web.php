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

Route::get('/', [
    'as'   => 'index',
    'uses' => 'DashboardController@index',
]);

// Orders
Route::group([
    'prefix'     => 'order',
    'as'         => 'order.',
    ], function () {
    Route::get('/', [
        'as'   => 'index',
        'uses' => 'OrderController@index',
    ]);
    Route::get('/create', [
        'as'   => 'order.store',
        'uses' => 'OrderController@store',
    ]);
});