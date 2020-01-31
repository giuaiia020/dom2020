<?php

header("Content-Type: text/plain; charset=utf-8");

include('PENGATURAN/config.php');
function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 20) {
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
				echo '<a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a>, ';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
?>
<?php poplist();?>