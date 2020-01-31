<?php
include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/config.php");
include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/fungsi.php");
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
$cano = ''.$domain.'/'.$file.'.pdf';
$judul = ucwords($title);
$md5 = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$gambar = preg_replace('/[0-9]+/', '', $title);
function poplist() {
	if (file_exists('KEY/zon.txt')) {
		$myfile = fopen("KEY/zon.txt", "r") or die("Unable to open file!");
		while( $i < 5) {
			$seek = rand(0, filesize("KEY/zon.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/config.php");
				$url = $linkfont($kiwot);
				$titled =  ltrim(rtrim($titled));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
$gambar = preg_replace('/[0-9]+/', '', $judul);
$gambar = str_replace (' ','-',$gambar);
				echo '<div class="thumb thumb--small">
    <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" class="thumb__cover">
        <!-- cover -->
        <div class="cover">
            <div class="cover__wrapper">
                <div href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" class="cover__img" style="background-image:url(https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png);">
                    <img  src="http://'.$domen.'/'.$gambar.'.jpg" class="cover__img"onerror="this.src=\'https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png\'">
                </div>
            </div>
        </div>
    </a>
    <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" class="thumb__info">
        <!-- info -->
        <h1 class="document__title">'.ucwords($judul).'</h1>
    </a>
</div>
';
}
			$i++;
		}
		fclose($myfile);
	}
}

function agcmasterclass($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = stripos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}
$dmcaurl = $_SERVER['REQUEST_URI'];
$juduldmca = str_replace('-', ' ', $dmcaurl);
$dmca		= file_get_contents('dmca.txt', true);
$dmca		= explode(',',$dmca);
if (agcmasterclass($juduldmca,$dmca))
{
$urlredirect = '/dl.php';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
$ads = ''.$lpdomain.'/dl.php?file='.$title.'&subId='.$file.'';
?>
<!DOCTYPE html>
<html class="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content="NOINDEX, NOFOLLOW" name="robots">
    <meta name="rem:pc" content="landers;Book">
    <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/js-polyfills/0.1.42/polyfill.min.js"></script>

    

    <title>Download <?php echo $judul; ?> PDF Book- <?php echo strtoupper( $domains ); ?></title>
    <link href="/lp5/asset/images/book-ico.png" rel="shortcut icon">
    <link href="/lp5/asset/images/book-ico-sm.png" rel="icon" type="image/png">

    <meta name="lpl:r" content="lcat"/>
    <meta name="lpl:d" content="z=31267"/>
    <meta name="lpl:q" content="z,dp,q,s1,s2,s3,s4,s5,lcat,lpage,lang,var,country"/>
    <meta name="lpl:$" content="email=#email,password=#password"/>
    <meta name="lpl:$" content="q=.media--title"/>
    <meta name="lpl:t" content="m=.message--title"/>
    <meta name="lpl:t" content="q=.media--title"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/lp5/asset/css/3ea616374ac544c4794302fbdcc6365a-1573706501.css">
    <style>.media--title{word-wrap: break-word;}</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lp5/asset/css/c6b27c61a7a8735fe7a2802fcdf3375b-1573706501.css" rel="stylesheet">
        <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="application/javascript" src="/lp5/asset/js/9106ffcd2ab3dd974606051bf7f038d4-1576604836.js"></script>
<link rel="stylesheet" href="/lp3/dblib/flags/flag-icon.min.css"/>

</head>
<body class="" data-site="books">

    <div class="onloader"></div>

    <!-- nap pop -->
    <div class="nap-pop">
    <div class="nap-pop__inner">
        <img src="/themes/common-spin-landers/assets/images/dotted-loader.gif" width="100" alt="">
        <p></p>
    </div>
</div>
        

<!-- header -->


<div class="signin-modal" style="display: none;">

    <div class="signin-modal__holder">

        <!-- sign in close -->
        <div class="signin-modal__close js-close-signinmodal">
            <i class="fa fa-close fa-lg" aria-hidden="true"></i>
        </div>

        <!-- sign in default -->
        <form id="signinform">
            <div class="signin-modal__default">
                <h1 class="tr">sign in</h1>
                <div class="form-group">
                    <label for="email" class="tr">Email*</label>                    <input class="form-control tr" type="text" id="signinemail" data-tr-holder="emailHolder" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password" class="tr">Password*</label>                    <p class="label-note first-letter-cap tr" id="forgotpass">forgot password?</p>
                    <input class="form-control tr" type="password" id="signinpassword" data-tr-holder="passwordHolder" placeholder="Enter your password (min 6 characters)">
                    <div class="invalid-feedback" style="display: none;"></div>
                </div>
                <button class="btn btn--primary tr" type="submit">sign in</button>
                <div class="subform-link" style="display: block;">
                    <div class="tr js-close-signinmodal">Don't have an account? Sign Up</div>
                </div>
            </div>
        </form>

        <!-- forgot password -->
        <form id="resetpassform" style="display: none;">
            <div class="signin-modal__resetpassword">
                <h1 class="tr">reset password</h1>
                <p class="text-muted first-letter-cap tr">enter your email address and we'll send you a link to reset your password.</p>
                <div class="form-group">
                    <label for="emailreset" class="tr">Email*</label>                    <input class="form-control tr" type="text" id="emailreset" data-tr-holder="emailHolder" placeholder="Enter your email">
                    <div class="invalid-feedback" style="display: none;"></div>
                </div>
                <button class="btn btn--primary tr" type="submit">submit</button>
                <div class="subform-link">
                    <div class="tr" id="signinmodal-default">Back to Sign In</div>
                </div>
            </div>
        </form>

    </div>
</div>
<header>

    <div class="head">
        <a class="logo" href="/">
            <img src="/lp5/asset/images/ebook.png" alt="<?php echo $site_name;?>">
            <h1 class="word-wrap"><?php echo $site_name;?></h1>
        </a>

        <div class="mobilenav_btn" onClick="open_nav()"><i id="mobile-nav-fa" class="fa fa-navicon"></i></div>
        <div class="mobilenav">
            <a href="/" class="mntitle">HOME</a>
            <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id" class="mntitle mntitle_primary">SIGN IN</a>
            <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id" class="mntitle mntitle_primary">SIGN UP</a>
            
                   </div>

        <div class="nav_box">
            <div class="nav">
               
                <a href="" onclick="event.preventDefault();" class="nav_link js-open-signinmodal">SIGN IN</a>
                <a href="" class="nav_primary" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id">SIGN UP</a>
                <a href="" class="nav_search"><font size="7"><i class="fa fa-search-plus" aria-hidden="true"></i></font></a>
            </div>
        </div>
    </div>

</header>

<div class="head_search-nav">
    <div class="head_search-nav_main">
        <div class="search-field">
    <form action="/search" method="get">
        <input type="text" name="q" placeholder=" Search by Title, Author... ">
        <input type="submit" name="" value="Search">
    </form>
</div>    </div>
</div>
<div class="height100"></div>
<div class="height20"></div>

<h1 class="media--title d-none"><?php echo $judul; ?></h1>

<section class="white box-shadow">
    <div class="container">
        <div class="document">
            <div class="row">
                <div class="col-sm-3 col-4">
                    <!-- cover -->
                    <div class="cover">
    <div class="cover__wrapper">
        <a href="<?php echo $ads;?>" class="cover__img" style="background-image:url(https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png);">
            <img src="<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'" class="img-fluid">
        </a>
            </div>
</div>
                    <div class="document__actions d-none d-sm-block">
                        <!-- actions list -->
                        <ul class="actions-list">
    <li>
        <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id">
            <i class="fa fa fa-heart fa-lg"></i>
            <span>Add to Favorites</span>
        </a>
    </li>
    <li>
        <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id">
            <i class="fa fa-list fa-lg"></i>
            <span>Add to Reading List</span>
        </a>
    </li>
</ul>                    </div>
                </div>
                <div class="col-sm-8 offset-sm-1 d-none d-sm-block">
                    <!-- info -->
                    <h1 class="document__title"><?php echo $judul; ?></h1>
    <a class="document__subtitle" href="">
                   Free Downloads <?php echo $judul; ?>
            </a>
<div class="document__rating">
    <div class="rating">
    <div class='rating__stars'>
      <div class='rating__stars__wrapper'>
        <span class='rating__stars__icons' style="width:80%"></span>
      </div>
    </div>
     <span class="rating__stats">4/5</span>
     <span class="rating__stats"> (1695 ratings) </span>
</div></div>
                    <!-- main buttons -->
                    <div class="btn--wrapper">
    <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id"  class="btn btn--primary"><i class="fa fa-eye"></i> Read</a>
    <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id" class="btn"><i class="fa fa-download"></i> Download</a>
</div>
                    <!-- description -->
                    <article class="document__desc js-readmore">
     <p>More than 10 million titles spanning every genre imaginable, at your fingertips. Get the best Books, Magazines & Comics in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more. </p>
<br />
<br />



      <p style="text-align: left;"><font size="5"><b>Book Description:</b></font><br>
<b>Title:</b> - <?php echo $judul;?><br>
<b>File Type:</b> PDF EPUB MOBI.<br>
<b>MD5 Hash Code:</b> <?php $str = "$md5"; echo md5($str);?><br>

<font color="blue"><b><img src="https://1.bp.blogspot.com/-GRIMN60Gl5Q/WuaqiSF0jvI/AAAAAAAAAhI/z0sUTHcbhlwDMO35GJCR-BeXz6AdaadlgCLcBGAs/s1600/liveG.gif" alt="User Online"  align="left">Recent Member Activity</b></font>

  <div class="panel-heading">
    <div class="panel-body" id="activityBody">
      <div id="loadingActivity">
        <p class="text-center">Loading...</p>
        <img class="center-block" id="loader" src="/lp3/dblib/ajax_loading.gif" alt=""/>
      </div>

                      </div>
      </div>





</article>
                    <!-- detail items -->
              </div>
                <div class="col-8 d-block d-sm-none">
                    <!-- info -->
                    <h1 class="document__title"><?php echo $judul; ?></h1>
    <a class="document__subtitle" href="">
                    Free Download <?php echo $judul; ?>
            </a>
<div class="document__rating">
    <div class="rating">
    <div class='rating__stars'>
      <div class='rating__stars__wrapper'>
        <span class='rating__stars__icons' style="width:80%"></span>
      </div>
    </div>
     <span class="rating__stats">4/5</span>
     <span class="rating__stats"> (1695 ratings) </span>
</div></div>                    <!-- main buttons -->
                    <div class="btn--wrapper">
    <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id"  class="btn btn--primary"><i class="fa fa-eye"></i> Read</a>
    <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id" class="btn"><i class="fa fa-download"></i> Download</a>
</div>                </div>
            </div>
            <div class="row d-flex d-sm-none">
                <div class="col-12">

                    <div class="document__actions">
                        <!-- actions list -->
                        <ul class="actions-list">
    <li>
        <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id">
            <i class="fa fa fa-heart fa-lg"></i>
            <span>Add to Favorites</span>
        </a>
    </li>
    <li>
        <a href="" data-url="<?php echo $ads;?>" data-lpl="z,dp,s1,s2,s3,s4,s5=v,q,lcat,lpage,lang,var,c_bg,c_img1,c_img2,imdb_id">
            <i class="fa fa-list fa-lg"></i>
            <span>Add to Reading List</span>
        </a>
    </li>
</ul>                    </div>

                    <!-- description -->
                    <article class="document__desc js-readmore">
<p>More than 10 million titles spanning every genre imaginable, at your fingertips. Get the best Books, Magazines & Comics in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more. </p>

<p style="text-align: left;"><font size="5"><b>Book Description:</b></font><br>
<b>Title:</b> - <?php echo $judul;?><br>
<b>File Type:</b> PDF EPUB MOBI.<br>
<b>MD5 Hash Code:</b> <?php $str = "$md5"; echo md5($str);?><br>

<font color="blue"><b><img src="https://1.bp.blogspot.com/-GRIMN60Gl5Q/WuaqiSF0jvI/AAAAAAAAAhI/z0sUTHcbhlwDMO35GJCR-BeXz6AdaadlgCLcBGAs/s1600/liveG.gif" alt="User Online"  align="left">Recent Member Activity</b></font>

  <div class="panel-heading">
    <div class="panel-body" id="activityBody">
      <div id="loadingActivity">
        <p class="text-center">Loading...</p>
        <img class="center-block" id="loader" src="/lp3/dblib/ajax_loading.gif" alt=""/>
      </div>

                      </div>
      </div>


</article>
                   

      </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-12">
                <h3 class="heading-small mt-5 mb-3">More books</h3>
                <div class="carrousel carrousel--author">
                    <div class="carrousel__fiveup owl-carousel">
                                                    
<?php poplist();?>
                                         </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<footer>
    <div class="us_link">
        <a href="/dmca">DMCA</a>
        <a href="/privacy">Privacy Policy</a>
        <a href="/contact">Contact Us</a>
        <a href="/feed">Feed</a>
    </div>
    <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y');?> <span class="media--title word-wrap tr">Read <?php echo $judul; ?></span> Inc. All rights reserved.</p>
</footer>


        <script type="application/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/URI.js/1.19.1/URI.min.js"></script>
        <script type="application/javascript" src="/lp5/asset/js/5e0f1499cb66751aaed90ea44f057f12-1573706501.js">
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha256-C8oQVJ33cKtnkARnmeWp6SDChkU+u7KvsNMFUzkkUzk=" crossorigin="anonymous"></script>
    <script src="/lp5/asset/js/0eb0f43c492ad2f54f02f93146b91ce9-1573706501.js" type="text/javascript"></script>
<script src="/lp3/dblib/fed.js"></script>
<script src="/lp3/dblib/jQuery.scrollSpeed.js"></script> 
<script src="/lp3/dblib/blur.js"></script>
<script src="/lp3/dblib/buzz.min.js"></script>
<?php include('histats.php')?>
</body>
</html>
