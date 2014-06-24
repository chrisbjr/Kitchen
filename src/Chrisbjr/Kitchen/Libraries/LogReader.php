<?php
/**
 * Created by PhpStorm.
 * User: chrisbjr
 * Date: 6/21/14
 * Time: 11:50 AM
 */

namespace Chrisbjr\Kitchen\Libraries;


class LogReader
{

    public function getLog($date, $status)
    {
        \Log::info("This is a test");

        $logFile = storage_path() . '/logs/laravel.log';

        $response = array();
        exec("cat {$logFile} | grep INFO", $response);

        print_r($response);
    }

} 