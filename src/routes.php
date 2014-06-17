<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get(Config::get('kitchen::adminRoute') . '/dashboard', 'Chrisbjr\Kitchen\KitchenAdminController@getDashboard');
Route::get(Config::get('kitchen::adminRoute') . '/login', 'Chrisbjr\Kitchen\KitchenAdminController@getLogin');

HTML::macro('clever_link', function ($route, $text, $icon = 'icon-home') {
    $active = '';
    $selected = '';
    if (Request::path() == $route) {
        $active = ' active';
        $selected = '<span class="selected"></span>';
    }

    return '<li class="start' . $active . '"><a href="' . url($route) . '"><i class="' . $icon . '"></i><span class="title">' . $text . '</span>' . $selected . '</a></li>';
});
