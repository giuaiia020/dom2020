<?php
error_reporting(0);
ini_set("display_errors", 0);

header("Content-Type: image/jpg");
$file = $_GET['file'];
$url =  "https://ts2.mm.bing.net/th?q='.$file.'";
readfile($url);
?>
