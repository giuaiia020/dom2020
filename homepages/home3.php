<?php
include('PENGATURAN/config.php');
function am() {
	if (file_exists('KEY/am.txt')) {
		$myfile = fopen("KEY/am.txt", "r") or die("Unable to open file!");
		while( $i < 200) {
			$seek = rand(0, filesize("KEY/am.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}

function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 200) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function azon() {
	if (file_exists('KEY/azon.txt')) {
		$myfile = fopen("KEY/azon.txt", "r") or die("Unable to open file!");
		while( $i < 100) {
			$seek = rand(0, filesize("KEY/azon.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function trends() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 200) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function cano($s){
$s = strtolower($s);
$output = str_replace(array('&',',','.','\'','!','@',':','-',')','(','{','}','+','’','*','_','^','[',']','/','|',' ','#','?','>','"',';','<','--'), " ", $s);
$output =  ltrim(rtrim($output));
$s = preg_replace("/[[:blank:]]+/","-",$output);
return $s;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> <?php echo strtoupper($domen);?>: <?php echo $site_name;?> - <?php echo $site_description;?></title>
<meta name="description" content="<?php echo $site_description;?>">
<meta name="keywords" content="<?php echo $site_keyword;?>">
<meta name="author" content="<?php echo strtoupper($domen);?>">
<link rel="canonical" href="http://<?php echo $domen;?>" />

    <!-- Bootstrap Core CSS -->   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/home3.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script>
<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>	

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" style="background-color:rgb(56,111,177)" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="/" style="color:#eee">Read Free Books & Download eBooks</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://<?php echo $domen;?>/feed" style="color:#eee">RSS</a>
                    </li>
                    <li>
                        <a href="http://<?php echo $domen;?>/sitemap.xml" style="color:#eee">SITEMAP</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Header -->
    <br>
    <section class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">                        
		 <?php azon();?>
<?php trends();?>
<?php poplist();?>

</div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs">
                    
        <div class="list-group">
<h3 class="list-group-item list-group-item-info">2020 New Release Books</h3>
     
<?php
$toppaidebooks = file_get_contents('genre/toppaidebooks100.xml');
$toppaidebooks = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $toppaidebooks);
$xml = simplexml_load_string($toppaidebooks);

// Output
$rssresults = '';

foreach ($xml->entry as $val) {
    
	// edit foreach
	$musicid = $val->id;
	$musicid = str_replace("/id/","xxx",$musicid);
	$musicid=explode('/id',$musicid);
	$musicid=explode('?',$musicid[1]);
	$bigimage = preg_replace('/170x170/ms', "270x270", $val->imimage[2]);
	
    $rssresults .= '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a itemprop="url" href="/'.cano($val->imname).'-by-'.cano($val->imartist).'.pdf">'.$val->imname.' by '.$val->imartist.'</a></li>';
   
}
echo $rssresults;
if(empty($toppaidebooks) || $toppaidebooks == false)
{

$string = file_get_contents('https://itunes.apple.com/'.$site_country.'/rss/toppaidebooks/limit=100/xml');
file_put_contents('./genre/toppaidebooks100.xml', $string);
$string = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $string);
$xml = simplexml_load_string($string);

// Output
$rssresults = '';

foreach ($xml->entry as $val) {
    
	// edit foreach
	$musicid = $val->id;
	$musicid = str_replace("/id/","xxx",$musicid);
	$musicid=explode('/id',$musicid);
	$musicid=explode('?',$musicid[1]);
	$bigimage = preg_replace('/170x170/ms', "270x270", $val->imimage[2]);
	
    $rssresults .= '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a itemprop="url" href="/'.cano($val->imname).'-by-'.cano($val->imartist).'.pdf">'.$val->imname.' by '.$val->imartist.'</a></li>';
   
}
echo $rssresults;

}

?>
<h3 class="list-group-item list-group-item-info">Popular Books</h3>
		 <?php am();?>

        <div>
            <ul class="list-group">
            </ul>
        </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </section>
    <!-- /.content-section-a -->
        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <p class="copyright text-muted small">
                     Read Free Books & Download eBooks matches keywords, searched from 3rd-party sites, to affiliate-networks offering unlimited access to licensed entertainment content. 
                     <br>Read Free Books & Download eBooks allows visitors, otherwise looking for free-content to enjoy more for less.
 </p>
                </div>
            </div>
        </div>
    </footer>

   
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/callme.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>

</html>
<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$site_url = parse_url($root);
$domain = str_replace('www.','',$site_url['host']); 


$file = 'domain.txt';
if (!file_exists($file)){
	fopen($file, 'w') or die('Cannot open file:  '.$file); //implicitly creates file
}


$arr = file($file,FILE_IGNORE_NEW_LINES);
if (!in_array($domain,$arr))
{
	$docp = file_put_contents($file, $domain. PHP_EOL, FILE_APPEND);
}

?>