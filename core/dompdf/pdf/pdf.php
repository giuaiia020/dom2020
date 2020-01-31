<?php
//include('PENGATURAN/config.php');
include('PENGATURAN/fungsi.php');
$file = $_GET['file'];
$title = str_replace(''.$linkstyle.'', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title =  ltrim(rtrim($title));
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
$domen = $_SERVER['HTTP_HOST'];
$file_name = 'http://'.$domen.'/related.txt';
$related = file_get_contents( $file_name );
$pbn = 'http://212.237.7.225/pbn.php';
$pbnlink = file_get_contents( $pbn );
$hero = 'http://212.237.7.225/hero.php';
$herolink = file_get_contents( $hero );
function SpinTax($s) {
    preg_match('#{(.+?)}#is',$s,$m);
    if(empty($m)) return $s;
 
    $t = $m[1];
 
    if(strpos($t,'{')!==false){
            $t = substr($t, strrpos($t,'{') + 1);
    }
 
    $parts = explode("|", $t);
    $s = preg_replace("+{".preg_quote($t)."}+is", $parts[array_rand($parts)], $s, 1);
 
    return SpinTax($s);
}


$fafifu = file_get_contents('fafifu.txt');
$fafifu = str_replace('[judul]', $title, $fafifu);
$fafifu = spintax($fafifu);
$html = '
<html>
<head>
<title>'.$spinjudul.' '.$title.' '.$spinjudul2.' at '.strtoupper($domen).'</title>
<meta name="description" content="'.$spinjudul.' '.$title.''.$contentdesc.' or '.$spinjudul2.' at '.strtoupper($domen).'">
<meta name="keywords" content="'.keyword($title).','.$site_keyword.',download pdf '.$title.',download '.$title.',pdf download '.$title.',ebook download '.$title.'">
<meta name="author" content="'.strtoupper($domen).'">
<style type="text/css">
@page { margin:10px; }
body{font-family:'.$fontpdf.';font-size:15px;text-align:justify;text-justify:inter-word}
p,b,h1,h2,h3,h4,h5,h6{margin:1em}
#footer{position:fixed;left:0;right:0;color:#aaa;font-size:.9em;bottom:0;border-top:.1pt solid #aaa}
#footer table{width:100%;border-collapse:collapse;border:none}
#footer td{padding:2;width:50%}
.page-number{text-align:right} 
.page-number:before{content:counter(page)}
hr{page-break-after:always;border:0}
h1{display:block;text-align:center}
.thumb{text-align:center;margin:15px}
.btn a{width:50%;display:block;background:#333;border:5px solid #444;border-radius:15px;color:#fff;font-size:34px;text-shadow:0 0 1px #000;margin:15px auto;padding:15px 25px;text-decoration:none;text-align:center;text-transform:uppercase}
body {
  background-color:'.$warnapdf.';
  border-style:dotted solid double dashed;
  border-color: coral;
  border-width: 9px;   
}
</style>
</head>
<body>
<div id="footer">
<div class="page-number"></div>
</div>
<div id="page">
<div class="nav-primary"></div>
<h1>'.$title.'</h1>
<p>'.$contentdesc.'</p>
<BR>
<BR>

<center><a href="http://'.$lpdomain.'/dl.php?file='.$file.'.pdf"><img src="'.$ssl.'://'.$gambar.'"></a></center>
<center>'.$title.' Books</center>
<BR>
<BR>
<BR>
<p>'.$fafifu.'</p>
<BR>
<BR>
<b>MORE PDF SOURCE :</b> '.$pbnlink.'
<BR>

<p>Free Download Books '.$title.' '.$contentdesc2.'<BR><BR>'.$related.'<BR><BR></p>

';

$url = 'http://www.bing.com/search?q='.$title.'+pdf&format=rss';
$load = simplexml_load_file($url);

foreach($load->channel->item as $xml){

	$titled = preg_replace('/\-.*$/', '', $xml->title);
	$titled = preg_replace('/[^A-Za-z0-9 ]/', '',  $titled); 
	$titled =  ltrim(rtrim($titled));
        $titled	 = str_replace(array('www','/','-','+','-','PDF','pdf','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon','Download','Pdf'),' ',$titled);
        $url  = $linkfont($titled);
        $url =  ltrim(rtrim($url));
        $url = str_replace(' ',''.$linkstyle.'',$url);
        $desced	= $xml->description;
	$desced	 = str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced);
	$desced = preg_replace('/[^A-Za-z0-9 ]/', '', $desced); 
	$html .='<h2>'.$titled.'</h2>';
	$html .='<p><b>Description: '.$titled.' Ebook PDF:</b>'.$desced.'. '.$spinjudul.' '.$titled.' '.$spinjudul2.' at '.strtoupper($domen).'</p>';


}

$html .= '</div>
</body>
</html>';

require_once("core/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf = new DOMPDF($options);
$dompdf->set_paper(''.$sizepdf.'',''.$paperstyle.'');
$dompdf->load_html(utf8_encode($html));
$dompdf->render();
$dompdf->get_canvas();
$dompdf->getFontMetrics();
$dompdf->stream($file,array("Attachment"=>false));



?>