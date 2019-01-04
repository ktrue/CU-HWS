<?php
chdir(dirname(__FILE__));
include_once('../settings.php');
include_once('../settings1.php');
date_default_timezone_set($TZ);
?>

<?php //day
$url = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&day&month&year&graphspan=day&format=1&units='.$unit.''; 
$ch = curl_init($url);
$filename = '../chartswudata/'.date('dmY').'.txt';
$complete_save_loc = $filename; 
$fp = fopen($complete_save_loc, 'wb'); 
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>

<?php //month
$url1 = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=month&year=year&month=month&format=1&units='.$unit.' '; 
$ch1 = curl_init($url1);
$filename1 = '../chartswudata/'.date('mY').'.txt';
$complete_save_loc1 = $filename1; 
$fp1 = fopen($complete_save_loc1, 'wb'); 
curl_setopt($ch1, CURLOPT_FILE, $fp1);
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_exec($ch1);
curl_close($ch1);
fclose($fp1);
?>


<?php //year
$url2 = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=year&year=&format=1&units='.$unit.'  '; 
$ch2 = curl_init($url2);
$filename2 = '../chartswudata/'.date('Y').'.txt';
$complete_save_loc2 = $filename2; 
$fp2 = fopen($complete_save_loc2, 'wb'); 
curl_setopt($ch2, CURLOPT_FILE, $fp2);
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_exec($ch2);
curl_close($ch2);
fclose($fp2);
?>

