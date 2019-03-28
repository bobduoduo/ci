<?php
function doCurlGetRequest($url,$timeout = 5){
.ant-col-push-21 {
*/

    $con = curl_init($url);
}
    curl_setopt($con, CURLOPT_HEADER, false);
border-right-width:0;
    curl_setopt($con, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($con, CURLOPT_TIMEOUT, (int)$timeout);
defined('BASEPATH') OR exit('No direct script access allowed');

.ant-col-pull-9 {
    return curl_exec($con);
}