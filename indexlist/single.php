<?php
header('Content-type: text/html; charset=UTF-8');
$permalink	=	$_SERVER['REQUEST_URI'];
$permalinkx	=	$_SERVER['REQUEST_URI'];
$permalinky	=	explode('?',$permalink);
$permalinky	=	$permalinky[0];
$permalink	=       explode('/',$permalinkx);
$permalinkz     =	$permalink[1];
$permalink	=	$permalink[1];
$permalink	=	explode('?',$permalink);
$permalink	=	$permalink[0];
$title    	= 	str_replace(array('/','-','+','-','Printable_2019','.html','pdf','_','.'),' ',$permalink);
$title  = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $title);
$downloadurl   	= 	str_replace(array('Printable_2019','.html'),'',$permalink);
$downloadurl  = preg_replace(array('/\s{2,}/', '/[\t\n]/'), '_', $downloadurl);
$judul		=	$title;	
$images = preg_replace("/\W|_/", ' ', $judul);
$images = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $images);
$images = str_replace(' ','-',$images);
$domainnya  = $_SERVER['HTTP_HOST'];
?>

<!DOCTYPE html>
<HTML amp='amp' lang='en'>
<head>
<meta charset='utf-8'/>
<meta content='blogger' name='generator'/>
<meta content='width=device-width,minimum-scale=1,initial-scale=1' name='viewport'/>
<meta content='Nama Kamu' name='Author'/>
<link href='/indexlist/img/icon.ico' rel='icon' type='image/x-icon'/>
<meta content='#000000' name='theme-color'/>
<meta content='#000000' name='msapplication-navbutton-color'/>
<meta content='yes' name='apple-mobile-web-app-capable'/>
<meta content='#000000' name='apple-mobile-web-app-status-bar-style'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='blogger' name='generator'/>
<link href='/indexlist/img/icon.ico' rel='icon' type='image/x-icon'/>
<link href='http://<?php echo $domainnya;?>/<?php echo $permalink;?>' rel='canonical'/>
<!--Can't find substitution for tag [blog.ieCssRetrofitLinks]-->
<meta content='<?php echo $judul;?>' name='description'/>
<meta content='http://<?php echo $domainnya;?>/<?php echo $permalink;?>' property='og:url'/>
<meta content='<?php echo $judul;?>' property='og:title'/>
<meta content='<?php echo $judul;?>' property='og:description'/>
<!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
<meta content='<?php echo $judul;?>,<?php echo $judul;?> download,<?php echo $judul;?> pdf,<?php echo $judul;?> free download,<?php echo $judul;?> pdf download,<?php echo $judul;?>pdf book' name='keywords'/>
<meta content='<?php echo $judul;?>' name='description'/>
<title><?php echo $judul; ?> - <?php echo $domainnya;?></title>
<meta content='blog' property='og:type'/>
<meta content='http://<?php echo $domainnya;?>/<?php echo $images;?>.jpg' property='og:image'/>
<meta content='Free Download <?php echo $judul;?> Read Online PDF Books at <?php echo $domainnya;?>' property='og:description'/>
<meta content='<?php echo $judul;?>' property='og:site_name'/>
<meta content='http://<?php echo $domainnya;?>' property='article:author'/>
<meta content='http://<?php echo $domainnya;?>' property='article:publisher'/>
<meta content='en_US' property='og:locale'/>
<meta content='en_GB' property='og:locale:alternate'/>
<meta content='fr_FR' property='og:locale:alternate'/>
<meta content='<?php echo $judul;?>' name='twitter:site'/>
<meta content='summary_large_image' name='twitter:card'/>
<meta content='@<?php echo $domainnya;?>' name='twitter:creator'/>
<link href='http://<?php echo $domainnya;?>/indexer' rel='alternate' title='<?php echo $judul;?> - Atom' type='application/atom+xml'/>
<link href='http://<?php echo $domainnya;?>/feed' rel='alternate' title='<?php echo $judul;?> - RSS' type='application/rss+xml'/>
<link href='http://<?php echo $domainnya;?>/<?php echo rand(1,200);?>rss' rel='alternate' title='<?php echo $judul;?> - Atom' type='application/atom+xml'/>
<script async='async' custom-element='amp-ad' src='https://cdn.ampproject.org/v0/amp-ad-0.1.js'></script>
<style amp-custom='amp-custom'> @font-face{
    font-family:'Montserrat';
    font-style:normal;
    font-weight:700;
    src:local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v9/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');
    unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215
}
@font-face{
    font-family:'Quicksand';
    font-style:normal;
    font-weight:400;
    src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/NUrn2XQrRfyGZp5MknntaRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
    unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB
}
@font-face{
    font-family:'Quicksand';
    font-style:normal;
    font-weight:400;
    src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/s2PXW4WrV3VLrOUpHiqsfRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
    unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF
}
@font-face{
    font-family:'Quicksand';
    font-style:normal;
    font-weight:400;
    src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/sKd0EMYPAh5PYCRKSryvW1tXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
    unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215
}
@font-face{
    font-family:'Material Icons';
    font-style:normal;
    font-weight:400;
    src:local('Material Icons'),local('MaterialIcons-Regular'),url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2')
}
.material-icons{
    font-family:'Material Icons';
    font-weight:400;
    font-style:normal;
    font-size:20px;
    letter-spacing:normal;
    text-transform:none;
    display:inline-block;
    white-space:nowrap;
    word-wrap:normal;
    direction:ltr;
    -webkit-font-feature-settings:'liga';
    -webkit-font-smoothing:antialiased
}
 body{
    font-family:Courier New,Lucida Sans Unicode;
    font-size:16px;
    text-align:justify;
    color:#444;
    margin:0;
    padding:0;
    background:#fff;
    line-height:1.7
}
a:link,a:visited{
    color:#525659;
    text-decoration:none
}
a:hover{
    color:#444
}
a img{
    border-width:0
}
.post-update{
    display:none
}
.left{
    float:left
}
.right{
    float:right
}
img{
    max-width:50%;
    height:50%;
}
.clear{
    clear:both
}
.date-header{
    display:none
}
.navbar,.quickedit,.post-feeds,.feed-links,.date-header,.feed-links,.status-msg-wrap,.date-header{
    display:none
}
.section{
    margin:0
}
h1,h2,h3,h4,h5,h6{
    font-family:'Quicksand',sans-serif;
    font-weight:700;
    margin:0 0;
    text-align:left;
    color:#333
}
h1{
    font-size:39px;
    text-indent:-9999px;
    margin:0 0 0 0;
    padding:0 0 0 0;
    height:0
}
h2{
    font-size:24px
}
h3{
    font-size:23px
}
h4{
    font-size:22px
}
h5,h6{
    font-size:20px
}
#wrapper{
    width:100%;
    height:100%;
    margin:0 auto 0;
    background:#525659
}
#content-wrapper{
    width:768px;
    margin:0 auto 0;
    padding:0;
    background-color:#fff
}
.main-wrapper{
    padding:20px
}
.post-wrapper{
    word-wrap:break-word;
    overflow:hidden;
    width:100%
}
#top-ads{
    margin-bottom:25px
}
#bottom-ads{
    margin-top:25px
}
#part-header{
    margin:0 0 0 0;
    width:100%;
    padding:0;
    background:#525659
}
#header-wrapper{
    text-align:center;
    padding:0;
    margin:0 auto;
    width:768px
}
#header-inner{
    padding:20px
}
#header-inner h1,.title{
    text-align:left;
    color:#fff;
    font-size:30px;
    margin:0;
    width:40%;
    padding:0;
    text-transform:capitalize;
    line-height:1.7em;
    font-weight:400;
    font-family:'Montserrat',sans-serif
}
header{
    margin-bottom:0
}
.descriptionwrapper{
    display:none
}
.titlewrapper .title a{
    color:#fff
}
 .btn-amp-sidebar{
    display:inline-block;
    background-repeat:no-repeat;
    background-size:30px 24px;
    background-position:center center;
    background-color:transparent;
    width:25px;
    height:35px;
    border:none;
    float:right;
    z-index:1001;
    cursor:pointer;
    font-size:30px
}
amp-sidebar{
    width:280px;
    background:#fff;
    color:#323232
}
amp-sidebar ul{
    padding:0;
    list-style:none
}
amp-sidebar li{
    line-height:40px;
    padding:2px 0;
    list-style:none;
    color:#323232;
    text-align:left;
    cursor:pointer
}
amp-sidebar li:nth-child(1){
    border-top:2px solid #5a5a5a
}
amp-sidebar li a{
    color:#323232;
    text-decoration:none;
    padding:5px 20px
}
amp-sidebar li:nth-child(even){
    background:#fafafa
}
amp-sidebar nav ul li a:link{
    color:#323232
}
amp-sidebar nav ul li a:visited{
    color:#323232
}
amp-sidebar button{
    margin-left:20px
}
.amp-sidebar-image{
    line-height:100px;
    vertical-align:middle
}
.amp-close-image{
    top:11px;
    left:245px;
    cursor:pointer
}
#search-box{
    width:95%;
    height:35px;
    float:left;
    padding:0;
    margin:0 0 15px 0;
    position:relative
}
#search-box form{
    border:1px solid #525659;
    line-height:35px
}
.search-form{
    border:none;
    color:#525659;
    width:100%;
    padding:0 30px 0 10px;
    height:35px;
    line-height:35px;
    font-size:14px;
    font-weight:400;
    margin:0;
    -moz-box-sizing:border-box;
    box-sizing:border-box
}
.search-button{
    background:0 0;
    width:30px;
    height:35px;
    line-height:35px;
    padding:3px 0 0 0;
    text-align:center;
    margin:0;
    top:0;
    right:0;
    font-size:16px;
    color:#525659;
    position:absolute;
    border:none;
    border-radius:0;
    text-shadow:none;
    box-shadow:none;
    cursor:pointer
}
.search-form:focus,.search-form:hover,.search-button:focus,.search-button:hover{
    border:none;
    outline:0;
    color:#acacac
}
 @media screen and (max-width:560px){
    #search-box{
        width:90%
    }
}
#header-inner amp-img{
    width:150px;
    text-align:center
}
.PopularPosts{
    background:#fff;
    margin:25px 0 0 0
}
.PopularPosts amp-img{
    width:150px;
    height:150px
}
.PopularPosts h2{
    position:relative;
    overflow:hidden;
    margin:0 0 10px
}
.PopularPosts h2 div{
    padding:0 10px 0 0;
    display:inline;
    float:left
}
.PopularPosts h2:after{
    content:'';
    display:inline-block;
    float:left;
    position:absolute;
    top:0;
    height:15px;
    margin:13px 0 0 0;
    width:100%;
    background:url(/indexlist/img/repeat-bg.png);
    opacity:.9
}
#blog-pager{
    text-align:center;
    padding:0;
    margin:0
}
#blog-pager-older-link{
    float:right;
    text-align:center;
    height:auto;
    display:inline-block;
    border-radius:3px;
    color:#525659
}
#blog-pager-home-link{
    text-align:center;
    display:inline-block;
    text-transform:none;
    margin:0;
    padding:2px
}
#blog-pager-newer-link{
    float:left;
    text-align:center;
    padding:0 5px;
    height:auto;
    display:inline-block;
    border-radius:3px;
    color:#525659
}
#blog-pager-newer-link h6{
    margin:0;
    padding:0;
    text-align:left;
    color:#ccc;
    text-transform:uppercase;
    font-weight:700
}
#blog-pager-home{
    text-align:center;
    padding:0 5px;
    height:auto;
    display:inline-block;
    border-radius:3px;
    color:#525659
}
footer.credit{
    background:#525659;
    padding:20px;
    margin:0
}
.footer-credit{
    width:800px;
    margin:0 auto;
    text-align:center;
    text-transform:uppercase
}
.footer-credit h5{
    text-align:center;
    color:#fff;
    font-family:Arial;
    font-size:14px
}
.footer-credit a{
    text-align:center;
    color:#fff;
    font-family:Arial;
    font-size:14px
}
.post-info{
    display:block;
    margin:5px 0;
    padding:3px 0;
    overflow:hidden
}
.post-info a{
    color:#525659
}
.post-info a:hover{
    color:#999
}
.post-info .material-icons{
    font-size:13px
}
.post h2{
    margin:0
}
.post{
    margin:0 0 25px;
    padding:0 0 25px;
    border-bottom:1px dashed #ddd
}
.post-body{
    margin:0;
    padding:0;
    text-align:left
}
.post-body img{
    background:url(/indexlist/img/pdficon3.png);
    margin:0 10px 0 0;
    padding:2px
}
.post-thumbnail{
    float:left;
    margin:0 20px 0 0;
    padding:2px;
    transition:all .3s ease-out;
    -webkit-transition:all .3s ease-out;
    -moz-transition:all .3s ease-out;
    -o-transition:all .3s ease-out
}
@media screen and (max-width:150px){
    .post-thumbnail img{
        margin:0 0 20px 0;
        padding:0
    }
    .post-sum p{
        display:none
    }
}
.breadcrumbs{
    margin-bottom:5px;
    padding-bottom:5px;
    text-align:left;
    position:absolute;
    visibility:hidden
}
.breadcrumbs a{
    color:#444
}
#bread-crumbs{
    padding:20px
}
.thumbnail-cadangan{
    display:none
}
@media screen and (max-width:961px){
    #content-wrapper,.footer-credit{
        width:100%
    }
}
@media screen and (max-width:500px){
    .post-thumbnail{
        margin:0 0 10px 0
    }
    h2.post-title.entry-title{
        font-size:120%
    }
    body{
        font-size:100%
    }
}
#error-page amp-img{
 
    margin: 0 auto;
}
#error-page h2{
    text-align:center
}
 </style>
<style amp-boilerplate='amp-boilerplate'>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}

</style><noscript><style amp-boilerplate='amp-boilerplate'>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async='async' src='https://cdn.ampproject.org/v0.js'></script>
<script async='async' custom-element='amp-sidebar' src='https://cdn.ampproject.org/v0/amp-sidebar-0.1.js'></script>
<script async='async' custom-element='amp-form' src='https://cdn.ampproject.org/v0/amp-form-0.1.js'></script>
<script async='async' custom-element='amp-analytics' src='https://cdn.ampproject.org/v0/amp-analytics-0.1.js'></script>
<script async='async' custom-element='amp-carousel' src='https://cdn.ampproject.org/v0/amp-carousel-0.1.js'></script>

</head>
<!-- Start Body -->
<body class='loading' itemscope='itemscope' itemtype='http://schema.org/WebPage'>
<div itemprop='mainContentOfPage' itemscope='itemscope' itemtype='https://schema.org/WebPageElement'>
<div id='part-header'>
<header itemscope='itemscope' itemtype='http://schema.org/WPHeader'>
<div class='section' id='header-wrapper'>
<a href='/'><?php echo $judul;?></a>
</div>
</header>
<div class='clear'></div>
</div>
<div class='ltr' id='wrapper'>
<div class='clear'></div>
<!-- Start Content Wrapper -->
<div id='content-wrapper'>
<div class='main-wrapper'>
<div id='topsed'>
<div id='search-box'>
<div itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/WebSite'>
<meta content='/' itemprop='url'/>
<form action='/indexlist/search.php' itemprop='potentialAction' itemscope='itemscope' itemtype='http://schema.org/SearchAction' method='get'>
<meta content='/indexlist/search.php?file={file}' itemprop='target'/>
<input class='search-form' id='feed-file-input' itemprop='query-input' name='file' placeholder='Search' required='required' type='text'/>
<button class='search-button' title='Search' type='submit'><i class='material-icons'>&#59574;</i></button>
</form>
</div>
</div>

<button class='btn-amp-sidebar' on='tap:sidebar.toggle'>&#8801;</button></div>
<div class='clear'></div>
<div class='top-ads section' id='top-ads'><div class='widget HTML' data-version='1' id='HTML1'>
</div></div>
<div class='clear'></div>
<div class='post-wrapper'>
<div class='main section' id='main'><div class='widget Blog' data-version='1' id='Blog1'>
<div itemprop="mainEntity" itemscope itemtype="http://schema.org/Book">
<link itemprop="bookFormat" href="https://schema.org/EBook">
<div class="post-thumbnail">
<meta content="/<?php echo $images;?>.jpg" itemprop="image"/>
<a href=""><amp-img alt="thumbnail" title="Download : <?php echo $judul;?>" height="130" src="/<?php echo $images;?>.jpg" width="100"></amp-img></a>
</div>
Title : <span itemprop="name"><?php echo $judul;?></span><br>
File Name : <?php echo $downloadurl;?>.pdf<br>
FileType : <span  itemprop="encodingFormat">PDF</span>
<meta itemprop="fileFormat" content="application/pdf"><br>
by <a itemprop="author" href="/"><?php echo $domainnya;?></a><br>
Publisher: <span itemprop="publisher">PDF BOOKS LIBRARY</span> <br>
Genre : <span itemprop="genre">Educational Materials</span>
<br>
Download pages :  <a itemprop="URL" href="/<?php echo $downloadurl;?>.pdf">Download Here</a>
</div></div>


<div class='clear'></div>

<div class='blog-posts hfeed'>

<?php 
function cutjudul($bingjudul, $wordsreturned)
{
  $retval = $bingjudul;
  $bingjudul = preg_replace('/(?<=\S,)(?=\S)/', ' ', $bingjudul);
  $bingjudul = str_replace("\n", " ", $bingjudul);
  $array = explode(" ", $bingjudul);
  if (count($array)<=$wordsreturned)
  {
    $retval = $bingjudul;
  }
  else
  {
    array_splice($array, $wordsreturned);
    $retval = implode(" ", $array)."";
  }
  return $retval;
}

function BingPDF($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

function limitBingPDFwords($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}

$homekw = 'manual user guide';
$firstx = ($nav - 1) * 10;
$firstx = $firstx + 1; 
$urlrss    = 'http://www.bing.com/search?q=filetype:pdf+'.urlencode(limitBingPDFwords($judul,4)).'&count=10&first='.$firstx.'&format=rss';
$feedbing  = simplexml_load_string(BingPDF($urlrss));
foreach ($feedbing->channel->item as $itembing):
$bingjudul = $itembing->title;
$bingdesc = $itembing->description;
$pdfurl	= $itembing->link;
$pubDate = $itembing->pubDate;
$ganti = array('_','-',':','&amp;','!',',','<','>','(',')','[',']','|','/','\\');
$urlpost = str_replace($ganti,' ', $bingjudul);
$urlpost = preg_replace("/\W|_/", ' ', $urlpost);
$urlpost = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $urlpost);
$urlpost = str_replace(' ','_',$urlpost);
$urlimages = preg_replace("/\W|_/", ' ', $urlpost);
$urlimages = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $urlimages);
$urlimages = str_replace(' ','-',$urlimages);

echo '

<div class="date-outer"> 
<h3 class="date-header"><span>'.$pubDate.'</span></h3>
<div class="date-posts"> 
<div class="post-outer">
<article class="post hentry">
<div class="post-body entry-content" id="'.md5($bingjudul).'">
<div class="post-thumbnail">
<meta content="/'.$urlimages.'.jpg"itemprop="image"/>
<a href="/'.$urlpost.'.html"><amp-img alt="thumbnail" title="Read more : '.$bingjudul.'" height="130" src="/'.$urlimages.'.jpg"width="100"></amp-img></a>
</div>
<h2 class="post-title entry-title" itemprop="headline" title="'.$bingjudul.'">
<a href="/'.$urlpost.'.html" title="Read more : '.$bingjudul.'">'.cutjudul($bingjudul, 6).'</a>
</h2>
<div class="post-info">
<span class="post-author vcard">
<span class="fn" itemscope="itemscope" itemtype="http://schema.org/person">
<meta content="/"/>
<i class="material-icons">&#59391;</i>
<a class="author-meta g-profile" href="/" rel="author" title="Admin">#DOMAIN</a></span>
</span>
<span class="post-timestamp">
<meta content="#"/>&#8211;<span class="updated" title="'.$pubDate.'">
'.$pubDate.'
</span>
</span>
</div>
<div>
<b>File name :</b> '.$urlpost.'.pdf</br>
<b>Download pdf :</b>  <a itemprop="URL" href="/'.$urlpost.'.pdf">Download Here</a>
</br>
'.$bingdesc.' 

</div>
<div class="clear"></div>
</div>
</article>
</div>
 </div></div> 

';
endforeach;
?>

</div>
<div class='blog-pager' id='blog-pager'>
<a class='blog-pager-older-link' href='#' id='Blog1_blog-pager-older-link' title='Old Post'><span id='blog-pager-older-link'>
      Older Post
      </span></a>
<a class='home-link' href='http://<?php echo $domainnya;?>/'><span id='blog-pager-home'>
   Home</span></a>
</div>
<div class='clear'></div>
</div><div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
<h2><div>Popular Downloads</div></h2>
<div class='widget-content popular-posts'>
<amp-carousel height='180' layout='fixed-height' type='carousel'>
<?php 
$homekw = 'manual user guide';
$firstx = ($nav - 1) * 10;
$firstx = $firstx + 1; 
$urlrss    = 'http://www.bing.com/search?q=filetype:pdf+'.urlencode(limitBingPDFwords($homekw,4)).'&count=4&first='.$firstx.'&format=rss';
$feedbing  = simplexml_load_string(BingPDF($urlrss));
foreach ($feedbing->channel->item as $itembing):
$bingjudul = $itembing->title;
$bingdesc = $itembing->description;
$pdfurl	= $itembing->link;
$pubDate = $itembing->pubDate;
$ganti = array('_','-',':','&amp;','!',',','<','>','(',')','[',']','|','/','\\');
$urlpost = str_replace($ganti,' ', $bingjudul);
$urlpost = preg_replace("/\W|_/", ' ', $urlpost);
$urlpost = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $urlpost);
$urlpost = str_replace(' ','_',$urlpost);
$urlimages2 = preg_replace("/\W|_/", ' ', $urlpost);
$urlimages2 = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $urlimages2);
$urlimages2 = str_replace(' ','-',$urlimages2);

echo '
<a href="/'.$urlpost.'.html" target="_blank" title="'.$bingjudul.'">
<amp-img alt="'.$bingjudul.'" height="180" src="/'.$urlimages2.'.jpg""></amp-img>
</a>';
endforeach;
?>

</amp-carousel>
</div>
</div></div>
</div>
<div class='bottom-ads section' id='bottom-ads'><div class='widget HTML' data-version='1' id='HTML2'>
</div></div>
</div>
</div>
<!-- End Content Wrapper -->
<div class='clear'></div>
<!-- Start Footer Wrapper -->
<footer class='credit' itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/WPFooter'><div class='footer-credit'>
</h5><h5>COPYRIGHT &#169; <?php echo date('Y');?> <a href='/' title='Super PDF Books'><?php echo $domainnya;?></a>. ALL RIGHTS RESERVED.</h5></div></footer>
<!-- End Footer Wrapper -->
</div>
</div>
<amp-sidebar id='sidebar' layout='nodisplay' side='right'>
<amp-img alt='close sidebar' class='amp-close-image' height='20' on='tap:sidebar.close' role='button' src='https://ampbyexample.com/img/ic_close_black_18dp_2x.png' tabindex='0' width='20'></amp-img>
<nav>
<ul>
<li><a href='/' itemprop='url' title='Home'>Home</a></li>
<li><a href='/privacy-policy.html' itemprop='url' title='Privacy Policy'>Privacy Policy</a></li>
<li><a href='/contact' itemprop='url' title='Contact Us'>Contact Us</a></li>
<li><a href='/about' itemprop='url' title='About Us'>About Us</a></li>
</ul>
</nav>
</amp-sidebar>
</body>
<!-- End Body -->
</HTML>