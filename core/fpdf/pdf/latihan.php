<?php
require('WriteHTML.php');
include('PENGATURAN/fungsi.php');
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
$file_name = 'http://'.$domen.'/related.txt';
$related = file_get_contents( $file_name );
$html = 'Download '.$title.' PDF Book<BR><BR>'; 

$html .='Free Download Books '.$titlenya.' '.$contentdesc2.'<BR><BR>'.$title.' '.strtoupper($domen).' '.$site_name.''.$contentdesc.''.$spinjudul.' '.$titlenya.' '.$spinjudul2.' at '.strtoupper($domen).'<BR><BR><BR>'.$related.'<BR><BR><BR>';
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
	$html .='<P><b>Download '.$titled.' Ebook PDF:</b>'.$desced.'. '.$spinjudul.' '.$titled.' '.$spinjudul2.'.<BR></P>';



}

$pdf=new PDF_HTML();
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->WriteHTML($html);
//$gambarnya = strtolower($titlenya);
//$gambar = preg_replace('/[0-9]+/', '', $title);
//$gambar = 'http://'.$domen.'/'.sanitize_title($gambar).'.jpg';
//$pdf->Image($gambar, 55, $pdf->GetY(), 100.50);
$titleseo = ''.$spinjudul.' '.$titlenya.' PDF Books';
$pdf->SetTitle($titleseo,'.strtoupper($domen).');
$pdf->SetAuthor(''.$domen.'');
$pdf->SetCreator(''.$domen.'');
$pdf->SetSubject(''.$spinjudul.' '.$title.''.$contentdesc.' '.$titlenya.' at '.strtoupper($domen).'');
$pdf->SetKeywords(''.keyword($titlenya).','.$site_keyword.',download books '.$title.' ,free download '.$titlenya.',download pdf '.$title.',download ebook '.$titlenya.' free, books '.$title.' to read , read online '.$titlenya.' books , free ebook '.$title.' download , ebooks '.$titlenya.' free download pdf , free pdf books '.$title.' download , read online books '.$titlenya.' for free without downloading');
$filename = ''.$file.'.pdf';
$pdf->Output( 'I', $filename, true );



?>
