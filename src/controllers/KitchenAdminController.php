<?php

namespace Chrisbjr\Kitchen;

class KitchenAdminController extends KitchenBaseController
{
    public function getLogin()
    {
        return \View::make('kitchen::admin/login');
    }

    public function getDashboard()
    {
        return \View::make('kitchen::admin/dashboard');
    }

}