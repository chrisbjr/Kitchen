<?php
/**
 * Created by PhpStorm.
 * User: chrisbjr
 * Date: 6/21/14
 * Time: 12:58 PM
 */

namespace Chrisbjr\Kitchen;


class UserProfile extends \Eloquent {

    protected $table = 'user_profiles';

    public function user() {
        return $this->belongsTo('User');
    }

}