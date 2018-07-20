<?php

/**
 * All route names are prefixed with 'admin.auth'.
 */
Route::group([
    'prefix'     => 'planner',
    'as'         => 'planner.',
    'namespace'  => 'Planner',
], function () {
    Route::group([
        'middleware' => 'role:administrator',
    ], function () {

        /*
         * Role Management
         */
        Route::group(['namespace' => 'Restaurant'], function () {
           // Route::resource('role', 'RoleController', ['except' => ['show']]);
            Route::resource('restaurant', 'RestaurantController', ['except' => ['show']]);
            Route::post('create', 'RestaurantController@create')->name('create.post');
        });
    });
});
