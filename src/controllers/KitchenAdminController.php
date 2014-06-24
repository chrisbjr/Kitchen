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
        $data['users'] = User::get();
        return \View::make('kitchen::admin/users', $data);
    }

    public function getUserProfile($user_id)
    {
        $data['user'] = User::find($user_id);
        //$data['userProfile'] = $data['user']->userProfile;
        return \View::make('kitchen::admin/user_profile', $data);
    }

    public function getRoles()
    {
        return \View::make('kitchen::admin/roles');
    }

}