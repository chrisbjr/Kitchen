<?php

namespace Chrisbjr\Kitchen;

use Illuminate\Support\Facades\Input;

class KitchenAdminController extends KitchenBaseController
{
    public function getDashboard()
    {
        return \View::make('kitchen::admin/dashboard');
    }

    public function getUsers()
    {
        return \View::make('kitchen::admin/users');
    }

    public function getGroups()
    {
        return \View::make('kitchen::admin/groups');
    }

}