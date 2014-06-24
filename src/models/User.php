<?php

namespace Chrisbjr\Kitchen;

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends ConfideUser
{
    use HasRole;

    public function userProfile()
    {
        return $this->hasOne('Chrisbjr\Kitchen\UserProfile');
    }

    public function getAdminProfileUrl()
    {
        return action('Chrisbjr\Kitchen\KitchenAdminController@getUserProfile', $this->id);
    }
}