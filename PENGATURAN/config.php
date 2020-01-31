<?php
error_reporting(0);
$ssl			= 'http'; // jika mau pakai ssl/https rubah valuenya disini
$domain			= ''.$ssl.'://'.$_SERVER['HTTP_HOST'];
$domen 			= $_SERVER['HTTP_HOST'];
$lpdomain		= 'http://iactprogram.com';
$agclist		= 'pop';
$enginepdf		= 'dompdf'; // engine yang tersedia saat ini dompdpf,mpdf fpdf tcpdf
$niche			= 'zon'; //ini adalah nama folder sitemap
$niche2			= 'manualbooks'; //ini adalah nama folder sitemap
$site_name		= 'Ebook User Manual Guide Reference'; // Ganti Nama Web anda Agar Lebih Unik
$site_description	= 'Get Free Download Popular Ebook And User Manual Guide Repair Reference, AVAILABLE NOW 2020';  // Ganti Deskripsi Web anda Agar Lebih Unik
$site_keyword		= 'eBook Read Online,Free eBook Download,Download eBook Free,Free PDF Books'; // Ganti Keyword Web anda Agar Lebih Unik
$feed			= '500'; //Untuk Menampilkan Berapa Url di feed (Google Menyarankan Maksimal 500 Post didalam Feed)
$linkstyle		= '-'; // untuk merubah style url pakai strip - atau underscore _ atau apapun bebas
$linkfont		= 'strtolower'; // untuk mengubah font permalink yg tersedia strtolower,ucwords dan strtoupper
$sizepdf		= 'custom';  //ukuran yang tersedia halaman pdf (letter,legal,ledger,tabloid,executive,folio)
$paperstyle             = 'portrait'; // GAK PERLU DI EDIT Style yg tersedia dihalaman pdf hanya (portrait dan landscape)
$unixurlcode		= 'printablefile-2020';
$fontpdf		= '{Agency FB|Albertina|Antiqua|Architect|Arial|BankFuturistic|BankGothic|Blackletter|Blagovest|Calibri|Comic Sans MS|Courier|Cursive|Decorative|Fantasy|Fraktur|Frosty|Garamond|Georgia|Helvetica|Impact|Minion|Modern|Monospace|Open Sans|Palatino|Perpetua|Roman|Sans-serif|Serif|Script|Swiss|Times|Times New Roman|Tw Cen MT|Verdana}';
$spinjudul		= '{☀|☁|☂|☃|☄|★|☆|☇|☈|☉|☊|☋|☌|☍|☘|☙|☚|☛|☝|☟|☠|☡|☢|☣|☤|☥|☦|☧|☨|☩|☪|☫|☬|☭|☮|☯|☸|☹|☺|☻|☼|☽|☾|☿|♀|♁|♂|♃|♄|♅|♆|♇|♈|♉|♊|♋|♌|♍|♎|♏|♐|♑|♒|♓|♔|♕|♖|♗|♘|♙|♚|♛|♜|♝|♞|♟|♠|♣|♥|♦|♪|♫|♭|♯|⛉|⛊|⛋|⛌|⛒|⛕|⛖|⛗|⛘|⛙|⛚|⛛|⛜|⛝|⛞|⛣|⛨|⛩|⛫|⛬|⛭|⛮|⛯|⛰|⛶|⛻|⛼} {Download Ebook:|Ebook Download:|PDF Download:|Download PDF:|Download Free:}';
$spinjudul2		= '{Read Online|Online Reading|Read E-Book Online|Free Reading|Reading Free}';
$singledesc = '%booktitle% is {the best|big|most popular} ebook you {want|must read|need}. You can {get|download|read} %booktitle% ebooks you wanted like %booktitle% in {simple|easy} step and you can {download|get|save|read full version} %booktitle% now.||{The big|The most popular|Popular|Best|Great|Nice} ebook you {should|must|want to} read is %booktitle%. {I am|We are} {sure|promise} you will {love|like} the %booktitle%. You can download %booktitle% to your {computer|laptop|smartphone} {with|in|through} {simple|easy|light} steps.||Are you {looking for|search|trying to find} %booktitle%? {Then you|Then you definitely|You then|Then you certainly} come {to the right|right|off to the right|to the correct} place {to get the|to obtain the|to find the|to have the} %booktitle%. {You can read|Read|Look for|Search for} %booktitle% ebook online with {easy steps|simple steps|basic steps|simple actions}. But if you want to {save|download|get} %booktitle% to your {computer|laptop|smartphone}, you can download {much|more} of %booktitle% ebooks now.||Download %booktitle% {big|most popular|popular|best|great|nice} ebook and read the %booktitle% ebook. {You will not|You won\'t|You\'ll not|You can\'t} find %booktitle% ebook anywhere online. {Read the|Browse the|See the|Look at} %booktitle% books now and {if you do not|if you don\'t|unless you|should you not} have {a lot of time|considerable time|lots of time|time and effort} {to read|to see|to learn|you just read}, {you can|you are able to|it is possible to|you\'ll be able to} download %booktitle% ebooks {to your|for your|in your|on your} {computer|laptop|smartphone|device} and {read|check} {next time|later|tomorrow}.';
$singledesc2 = '{We all know|Everyone knows|Everybody knows|You know} that reading %booktitle%  {is beneficial|is helpful|is effective|is useful}, because {we can|we are able to|we could|we can easily} get {a lot of information|enough detailed information online|information|too much info online} {from the|in the|from your|through the} %booktitle% {reading materials|resources}. {Technology has|Technologies have} developed, and reading %booktitle%  books {can be|could be|may be|might be} {more convenient|easier|far more convenient|far easier} {and easier|and simpler|and much easier}. {We can|We are able to|We could|We can easily} read %booktitle% books {on our|on the} {mobile|tablets|Kindle},etc. %booktitle%, {there are many|there are lots of|there are numerous|there are several} %booktitle% books {coming into|entering|getting into|being received by} %booktitle% PDF format. {Below are some|Listed below are some|Right here|Several} websites for downloading free %booktitle% PDF books {where you can|where one can|to|which you could} acquire {as much|just as much|the maximum amount of|all the} %booktitle% {as you want|as you would like|as you wish|as you desire}.';



$contact_email = 'ba@gmail.com'; //EMAIL WAJIB DI GANTI

// GAK PERLU DI EDIT //
$site_title = $site_name;
$site_url = $domain;
$footnav_home = 'Home';
$footnav_privacy = 'Privacy Policy';
$footnav_dmca = 'DMCA';
$footnav_contact = 'Contact';
?>