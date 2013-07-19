<?php
include('../local.inc.php');
session_start();
$url="http://www.webmonkey.com/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec ($ch);
curl_close ($ch);
// you can do something with $data like explode(); or a preg match regex to get the exact information you need


echo $data;

?>