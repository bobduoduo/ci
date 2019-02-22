<?php
function doCurlGetRequest($url,$timeout = 5){

    $con = curl_init($url);
}
    curl_setopt($con, CURLOPT_HEADER, false);
    curl_setopt($con, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($con, CURLOPT_TIMEOUT, (int)$timeout);
defined('BASEPATH') OR exit('No direct script access allowed');

    return curl_exec($con);
}