<?php
include('PENGATURAN/fungsi.php');

$domen = $_SERVER['HTTP_HOST'];

$file = $_GET['file'];
$title = str_replace(''.$linkstyle.'', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = str_replace(''.$domen.'', '', $title);
$title =  ltrim(rtrim($title));
//$number_of_characters = 70;
//$titlenya = substr($title, 0, strrpos(substr($title, 0, $number_of_characters), " "));
$title = ucwords($title);
$gambar = preg_replace('/[0-9]+/', '', $title);
$gambar = $domen.'/'.sanitize_title($gambar).'.jpg';
$acak = acak($singledesc);
$contentdesc = spinner($acak);
$contentdesc = str_replace('%booktitle%', $title, $contentdesc);
$acak2 = acak($singledesc2);
$contentdesc2 = spinner($acak2);
$contentdesc2 = str_replace('%booktitle%', $title, $contentdesc2);
$spinjudul = spinner($spinjudul);
$spinjudul2 = spinner($spinjudul2);
$fontpdf  = spinner($fontpdf);
$page = rand(1,11);
$booknya = rand(1,127);
$filename = str_replace(' ', ''.$linkstyle.'', $title);
$filename = ''.$file.'.pdf';
$file_name = 'http://'.$domen.'/related.txt';
$related = file_get_contents( $file_name );
$html = '

<div align="center"><h2>'.$title.'</h2>
<img src="//'.$gambar.'"alt="'.$title.'"title="'.$title.'"style="max-width: 900mm; max-height: 1200mm;">
<h2>Ebook | Schematic | Circuit | Diagram | Part | Workshop | Manuals | Service | Handbook | User Guide | Journal | Reference | EXAM | ANSWER </h2>
</div>
<pre>'.$contentdesc.' Download '.$title.' and Read Online all your favorite Books for free at '.strtoupper($domen).'
'.$contentdesc2.' 

</pre>
<BR><BR>
'.$related.'
<BR><BR>
';
$url = 'http://www.bing.com/search?q=manual+'.$title.'+pdf&format=rss';
$load = simplexml_load_file($url);

foreach($load->channel->item as $xml){
	$page = rand(1,11);
	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf','Telecharger','eBay'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','Shipping','jpg','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Telecharger','eBay'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 

	$html .='<p>'.$desced.''.$titled.'</p>';


}
$url2 = 'http://www.bing.com/search?q=download+'.$title.'+pdf&format=rss';
$load = simplexml_load_file($url2);

foreach($load->channel->item as $xml){
        $page  = rand(1,11);
	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf','Telecharger','eBay'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','Shipping','jpg','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Telecharger','eBay'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 

	$html .='<p>'.$desced.''.$titled.'</p>';


}
$url3 = 'http://www.bing.com/search?q=amazon+'.$title.'&format=rss';
$load = simplexml_load_file($url3);

foreach($load->channel->item as $xml){ 
   	$page  = rand(1,11);
	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf','Telecharger','eBay'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','Shipping','jpg','php','com','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Telecharger','eBay'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 
	$html .='<p>'.$desced.''.$titled.'</p>';


}
$html .= '<h1>'.$title.' '.$site_name.' '.strtoupper($domen).'</h1> ';

//==============================================================
//==============================================================
//==============================================================

require_once __DIR__ . '/../vendor/autoload.php';
$mpdf = new mPDF('c');
$mpdf->SetCompression(true);
$mpdf->SetTitle(''.$spinjudul.' '.$title.'  @'.strtoupper($domen).'');
$mpdf->SetSubject(''.$spinjudul.' '.$filename.''.$contentdesc.' '.$contentdesc2.''.$spinjudul2.' at '.$site_name.'  '.strtoupper($domen).'');
$mpdf->SetAuthor(''.$title.'');
$mpdf->SetKeywords(''.$title.','.keyword($title).','.$site_keyword.',download pdf '.$title.',free download '.$title.',download '.$title.','.$title.' pdf book');
$mpdf->WriteHTML($html);
$mpdf->Output($filename, 'I');
exit;
?>

//==============================================================
//==============================================================
//==============================================================
