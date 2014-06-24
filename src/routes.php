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

Route::get('user/login', 'Chrisbjr\Kitchen\KitchenUserController@getLogin');
Route::get('user/confirm/{code}', 'Chrisbjr\Kitchen\KitchenUserController@getConfirm');
Route::post('user/login', 'Chrisbjr\Kitchen\KitchenUserController@postLogin');
Route::post('user/forgot_password', 'Chrisbjr\Kitchen\KitchenUserController@postForgotPassword');
Route::get( 'user/reset/{token}', 'Chrisbjr\Kitchen\KitchenUserController@getResetPassword');
Route::post('user/reset', 'Chrisbjr\Kitchen\KitchenUserController@postResetPassword');

Route::post('user/register', 'Chrisbjr\Kitchen\KitchenUserController@postRegister');

Route::get('user/logout', 'Chrisbjr\Kitchen\KitchenUserController@getLogout');

Route::get(Config::get('kitchen::adminRoute'), array('before' => 'admin', 'uses' => 'Chrisbjr\Kitchen\KitchenAdminController@getDashboard'));
Route::get(Config::get('kitchen::adminRoute') . '/users', array('before' => 'admin', 'uses' => 'Chrisbjr\Kitchen\KitchenAdminController@getUsers'));
Route::get(Config::get('kitchen::adminRoute') . '/roles', array('before' => 'admin', 'uses' => 'Chrisbjr\Kitchen\KitchenAdminController@getRoles'));
Route::get(Config::get('kitchen::adminRoute') . '/users/{id}', array('before' => 'admin', 'uses' => 'Chrisbjr\Kitchen\KitchenAdminController@getUserProfile'));

HTML::macro('metronicMenu', function ($route, $text, $icon = 'icon-home', $subMenu = array()) {
    $active = '';
    $selected = '';
    $arrow = '';
    $mainUrl = 'javascript:;';
    if ($route != null) {
        $mainUrl = url($route);
        if (Request::path() == $route) {
            $active = 'active';
            $selected = '<span class="selected"></span>';
        }
    }

    $subMenuArray = array();
    if (count($subMenu) > 0) {
        $arrow = '<span class="arrow"></span>';
        foreach ($subMenu as $sub) {
            $subActive = '';
            if(strpos(Request::path(), $sub['route']) !== false) {
                $subActive = 'active';
                $active .= 'active open';
                $arrow = '<span class="arrow open"></span>';
            }
            $subMenuArray[] = '<li class="' . $subActive . '"><a href="' . url($sub['route']) . '">' . $sub['text'] . '</a>';
        }
    }

    $menu = '<li class="' . $active . '"><a href="' . $mainUrl . '"><i class="' . $icon . '"></i><span class="title">' . $text . '</span>' . $selected . $arrow . '</a>';

    if (count($subMenuArray) > 0) {
        $menu .= '<ul class="sub-menu">';
        foreach ($subMenuArray as $s) {
            $menu .= $s;
        }
        $menu .= '</ul>';
    }

    $menu .= '</li>';

    return $menu;

});

Route::get('logs', function() {
    $logReader = new \Chrisbjr\Kitchen\Libraries\LogReader();
    $logReader->getLog('','');
});