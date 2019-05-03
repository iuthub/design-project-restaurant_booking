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

Route::get('food', 'FoodController@ajaxRequest');

Route::match(['get', 'post'], '/login', 'DashboardController@login')->name('login');;
Route::match(['get', 'post'], '/logout', 'DashboardController@logout');

// orders
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
// booking
Route::group([
    'prefix'     => 'booking',
    'as'         => 'booking.',
    ], function () {
    Route::get('/', [
        'as'   => 'booking.index',
        'uses' => 'BookingController@index',
    ]);
    Route::get('/create', [
        'as'   => 'booking.store',
        'uses' => 'BookingController@store',
    ]);
});
// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::get('/', [
        'as'   => 'admin.index',
        'uses' => 'DashboardController@admin',
    ]);
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
 // menu
    Route::group([
        'prefix'     => 'menu',
        'as'         => 'menu.',
    ], function () {
        Route::post('/create', [
            'as'   => 'create',
            'uses' => 'Admin\MenuController@store',
        ]);
    });
});