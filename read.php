<?php
include('PENGATURAN/config.php');
$refer = $_SERVER['HTTP_REFERER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(preg_match("/Googlebot|MJ12bot|msnbot|bingbot|yandexbot/i", $agent) || preg_match('/\.googlebot|googlebot\.com|search\.msn\.com|msn\.com$/i', $host)) {
	include('core/'.$enginepdf.'/pdf/pdf.php');
}
else {
$acak = rand( 5, 5);
include('lp'.$acak.'/lp.php');
} ?> 

