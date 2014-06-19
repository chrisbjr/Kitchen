<?php
/**
 * Created by PhpStorm.
 * User: chrisbjr
 * Date: 6/19/14
 * Time: 12:34 PM
 */

namespace Chrisbjr\Kitchen\Authentication;

class SentryAdminAuthenticate
{

    public function filter()
    {
        if (!Confide::check()) {
            $redirect = urlencode(\Request::path());
            return \Redirect::to('admin/login?redirect=' . $redirect)
                ->with('errorMessage', 'You need to log in to continue');
        }

        // User is logged in but is he admin?

        $userGroups = Sentry::getUser()->getGroups();

        $isAdmin = false;
        foreach($userGroups as $g)
        {
            if($g['id'] == 1) {
                $isAdmin = true;
            }
        }

    }

}