<?php
$refer = $_SERVER['HTTP_REFERER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(preg_match("/Googlebot/i", $agent) || preg_match('/\.googlebot|googlebot\.com$/i', $host)) {

		include('homepages/home3.php');
}
else {
include('homepages/home1.php');
} ?> 

