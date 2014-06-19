<?php

Route::filter('admin', function () {
    if (Auth::guest()) // If the user is not logged in
    {
        return Redirect::to('user/login');
    }

    if (!Entrust::hasRole('Admin')) // Checks the current user
    {
        App::abort(403);
    }
});