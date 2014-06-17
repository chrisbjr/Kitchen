<?php
/**
 * Created by PhpStorm.
 * User: chrisbjr
 * Date: 6/17/14
 * Time: 9:30 PM
 */

namespace Chrisbjr\Kitchen;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function getDashboard()
    {
        return \View::make('kitchen::admin/dashboard');
    }

} 