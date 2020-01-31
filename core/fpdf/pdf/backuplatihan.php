<?php
require('WriteHTML.php');
include('fungsi.php');
include('config.php');
$file = $_GET['file'];
$title = str_replace(''.$linkstyle.'', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title =  ltrim(rtrim($title));
$title = ucwords($title);
$number_of_characters = 70;
$titlenya = substr($title, 0, strrpos(substr($title, 0, $number_of_characters), " "));
$acak = acak($singledesc);
$contentdesc = spinner($acak);
$contentdesc = str_replace('%booktitle%', $title, $contentdesc);
$acak2 = acak($singledesc2);
$contentdesc2 = spinner($acak2);
$contentdesc2 = str_replace('%booktitle%', $titlenya, $contentdesc2);
$spinjudul = spinner($spinjudul);
$spinjudul2 = spinner($spinjudul2);
$fontpdf  = spinner($fontpdf);
$domen = $_SERVER['HTTP_HOST'];


$html = '<p>'.$title.'</p><BR>';



$html .='<pre>Free Download Books '.$titlenya.' '.$contentdesc2.'</pre>
<h2>'.$title.' '.strtoupper($domen).' '.$site_name.'</h2>
'.$contentdesc.''.$spinjudul.' '.$titlenya.' '.$spinjudul2.' at '.strtoupper($domen).'
';

$url = 'http://www.bing.com/search?q='.$titlenya.'+pdf&format=rss';
$load = simplexml_load_file($url);

foreach($load->channel->item as $xml){
	$page = rand(1,11);
	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf','Telecharger','eBay'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Telecharger','eBay'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 
	$html .='<h3><a href="'.$ssl.'://'.$domen.'/'.$url.'.pdf">'.$titled.'</a></h3>';
	$html .='<p><b>Download '.$titled.' Ebook PDF:</b>'.$desced.'. '.$spinjudul.' '.$titled.' '.$spinjudul2.' at '.strtoupper($domen).'</p>';



}
$url = 'http://www.bing.com/search?q='.$titlenya.'+book&format=rss';
$load = simplexml_load_file($url);

foreach($load->channel->item as $xml){
	$page = rand(1,11);
	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf','Telecharger','eBay'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Telecharger','eBay'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 
	$html .='<h3><a href="'.$ssl.'://'.$domen.'/'.$url.'.pdf">'.$titled.'</a></h3>';
	$html .='<p><b>Download '.$titled.' Ebook PDF:</b>'.$desced.'. '.$spinjudul.' '.$titled.' '.$spinjudul2.' at '.strtoupper($domen).'</p>';



}


$pdf=new PDF_HTML();
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->WriteHTML($html);
$myImage = "https://images-na.ssl-images-amazon.com/images/I/411E0hy8c9L._AC_UL500.jpg";
$pdf->Image($myImage, 5, $pdf->GetY(), 170.150);
$titleseo = ''.$titlenya.' PDF Books';
$pdf->SetTitle($titleseo,'.strtoupper($domen).');
$pdf->SetAuthor(''.$domen.'');
$pdf->SetCreator(''.$domen.'');
$pdf->SetSubject(''.$spinjudul.' '.$title.''.$contentdesc.' '.$titlenya.' at '.strtoupper($domen).'');
$pdf->SetKeywords(''.keyword($titlenya).','.$site_keyword.',Download Books '.$title.' , Download Books '.$titlenya.' Online , Download Books '.$title.' Pdf , Download Books '.$titlenya.' For Free , Books '.$title.' To Read , Read Online '.$titlenya.' Books , Free Ebook '.$title.' Download , Ebooks '.$titlenya.' Free Download Pdf , Free Pdf Books '.$title.' Download , Read Online Books '.$titlenya.' For Free Without Downloading');
$filename = $_SERVER['REQUEST_URI'];
$pdf->Output( 'I', $filename, true );



?>
