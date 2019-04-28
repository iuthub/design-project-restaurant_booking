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
    'as'   => 'order.index',
    'uses' => 'DashboardController@index',
]);
Route::get('/order', [
    'as'   => 'order.index',
    'uses' => 'DashboardController@order',
]);
Route::get('/admin', [
    'as'   => 'admin.index',
    'uses' => 'DashboardController@admin',
]);


// Orders
Route::group([
    'prefix'     => 'order',
    'as'         => 'order.',
    ], function () {
    Route::get('/', [
        'as'   => 'order.index',
        'uses' => 'OrderController@index',
    ]);
    Route::get('/create', [
        'as'   => 'order.store',
        'uses' => 'OrderController@store',
    ]);
});
// Admin
Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    ], function () {
 // unit
    Route::group([
        'prefix'     => 'unit',
        'as'         => 'unit.',
    ], function () {
        Route::post('/create', [
            'as'   => 'create',
            'uses' => 'Admin\UnitController@store',
        ]);
    });
 // food
    Route::group([
        'prefix'     => 'food',
        'as'         => 'food.',
    ], function () {
        Route::post('/create', [
            'as'   => 'create',
            'uses' => 'Admin\FoodController@store',
        ]);
    });
});