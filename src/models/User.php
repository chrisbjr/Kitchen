<?php

namespace Chrisbjr\Kitchen;

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends ConfideUser
{
    use HasRole;
}