<?php
chdir(dirname(__FILE__));
include_once('../settings.php');
include_once('../settings1.php');
date_default_timezone_set($TZ);
// NEW checkwx.com API 
if(file_exists('metar34.txt')&&time()- filemtime('metar34.txt')>1800){
$w34header= array(
            "X-API-KEY:".$metarapikey."",);
$ch5 = curl_init();
$filename5 = 'metar34.txt';
$complete_save_loc5 = $filename5; 
$fp5 = fopen($complete_save_loc5, 'wb'); 
curl_setopt($ch5, CURLOPT_URL,"https://api.checkwx.com/metar/".$icao1."/decoded");
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch5, CURLOPT_HTTPHEADER,$w34header);
curl_setopt($ch5, CURLOPT_FILE, $fp5);
$result = curl_exec ($ch5);
curl_close ($ch5);}
?>
<?php
if(file_exists('darksky.txt')&&time()- filemtime('darksky.txt')>3600){
// weather34 darksky  curl based
$url4 = 'https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang='.$language.'&units='.$darkskyunit ;
$ch4 = curl_init($url4);
$filename4 = 'darksky.txt';
$complete_save_loc4 = $filename4; 
$fp4 = fopen($complete_save_loc4, 'wb'); 
curl_setopt($ch4, CURLOPT_FILE, $fp4);
curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_exec($ch4);
curl_close($ch4);
fclose($fp4);}?>

<?php 
// weather34 earthquakes curl based
if(file_exists('eqnotification.txt')&&time()- filemtime('eqnotification.txt')>1800){
$url1a = 'https://earthquake-report.com/feeds/recent-eq?json'; 
$ch1a = curl_init($url1a);
$filename1a = 'eqnotification.txt';
$complete_save_loc1a = $filename1a; 
$fp1a = fopen($complete_save_loc1a, 'wb'); 
curl_setopt($ch1a, CURLOPT_FILE, $fp1a);
curl_setopt($ch1a, CURLOPT_HEADER, 0);
curl_exec($ch1a);
curl_close($ch1a);
fclose($fp1a);
 //k-index curl based
$url2a = 'https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json'; 
$ch2a = curl_init($url2a);
$filename2a = 'kindex.txt';
$complete_save_loc2a = $filename2a; 
$fp2a = fopen($complete_save_loc2a, 'wb'); 
curl_setopt($ch2a, CURLOPT_FILE, $fp2a);
curl_setopt($ch2a, CURLOPT_HEADER, 0);
curl_exec($ch2a);
curl_close($ch2a);
fclose($fp2a);

// weather34 purple air quality  curl based
if($purpleairhardware=='yes'){
$url4a = 'https://www.purpleair.com/json?show='.$purpleairID.''; 
$ch4a = curl_init($url4a);
$filename4a = 'purpleair.txt';
$complete_save_loc4a = $filename4a; 
$fp4a = fopen($complete_save_loc4a, 'wb'); 
curl_setopt($ch4a, CURLOPT_FILE, $fp4a);
curl_setopt($ch4a, CURLOPT_HEADER, 0);
curl_exec($ch4a);
curl_close($ch4a);
fclose($fp4a);}
}
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

<?php 
if($weatherflowoption=='yes'){
$url8 = 'https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.''; 
$ch8 = curl_init($url8);
$filename8 = 'weatherflow.txt';
$complete_save_loc8 = $filename8; 
$fp8 = fopen($complete_save_loc8, 'wb'); 
curl_setopt($ch8, CURLOPT_FILE, $fp8);
curl_setopt($ch8, CURLOPT_HEADER, 0);
curl_exec($ch8);
curl_close($ch8);
fclose($fp8);}
?>