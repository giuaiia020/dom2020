<?php
header("HTTP/1.1 403 Forbidden");
$judul = $_GET['file'];
$subId = $_GET['subId'];
$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "CH"||$cc == "BE"||$cc == "DK"||$cc == "NO"||$cc == "FR") 
{
$offer = 'http://look.djfiln.com/offer?prod=2&ref=5161312&q='.$judul.'&sub_id='.$subId.'';
}
else
{
$offer = 'https://www.zyxxtt.com/scripts/un981c6l?a_aid=1f0f6f26&a_bid=9ad19760&data1='.$judul.'';
}
header('Location: '.$offer.'');
die();


//Keterangan
//yang bawah adalah link AFFORCE kalau mau di rubah URLnya sampai &data1
//Kalau Belum Punya Akun Afforce bisa daftar disini http://affforce.com/affiliates/signup.php?a_aid=1f0f6f26
//Kalau mau Pakai ADC semua tinggal ganti semua Offer jadi ADC 
?>

