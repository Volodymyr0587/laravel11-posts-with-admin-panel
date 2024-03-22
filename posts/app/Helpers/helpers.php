<?php

use Carbon\Carbon;

if (!function_exists('convertYmdToMdy')) {
    function convertYmdToMdy(Carbon $date)
    {
        return $date->format('m-d-Y');
    }
}

