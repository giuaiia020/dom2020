<?php
header("Content-Type: text/plain; charset=utf-8");
include('PENGATURAN/config.php');
include('PENGATURAN/fungsi.php'); 
function pbn() {
	if (file_exists('pbn.txt')) {
		$myfile = fopen("pbn.txt", "r") or die("Unable to open file!");
		while( $i < 10) {
			$seek = rand(0, filesize("pbn.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$kiwot = trim(preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $kiwot), ' ');
                                $uri = file_get_contents('agcmasterclass/'.$kiwot.'.txt', true);
				$url = str_replace (' ','-',$kiwot);
				$url = '/download/'.$url.'';
				echo '<a href="http://'.$kiwot.'" title="'.ucwords($kiwot).'">'.ucwords($kiwot).'</a>, ';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
?>
<?php pbn();?>
