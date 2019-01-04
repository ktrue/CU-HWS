<?php //weather34 curl based scripts 
include('../settings.php');
// extras added march 23rd 2016 //
date_default_timezone_set($TZ);
$date = date_create();

if ($chartsource =="mbcharts"){
   //connect to mysqli db for homeweatherstation save to csv files october 2017
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$result = mysqli_query($conn,'SELECT * FROM `weatherstation`'); 
if (!$result) die('Couldn\'t fetch records'); 
$num_fields = mysqli_num_fields($result); 
$headers = array(); 
for ($i = 0; $i < $num_fields; $i++) 
{     
       $headers[] = mysqli_fetch_field_direct($result , $i)->name; 
} 
$output='../mbcharts/result.csv';
$fp = fopen('../mbcharts/result.csv', 'w'); 
if ($fp && $result) 
{         
       fputcsv($fp, $headers); 
       while ($row = mysqli_fetch_row($result)) 
       { 
          fputcsv($fp, array_values($row),',', chr(0)); 
		  // fputs($fp, implode($row, ',')."\n");
       }} }
	   
	   else "weather34 sez do nothing";
	   
?>


<?php 
$w34header= array(
            "X-API-KEY:".$metarapikey."",);
$ch5 = curl_init();
$filename5 = '../jsondata/metar34.txt';
$complete_save_loc5 = $filename5; 
$fp5 = fopen($complete_save_loc5, 'wb'); 
curl_setopt($ch5, CURLOPT_URL,"https://api.checkwx.com/metar/".$icao1."/decoded");
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch5, CURLOPT_HTTPHEADER,$w34header);
curl_setopt($ch5, CURLOPT_FILE, $fp5);
$result = curl_exec ($ch5);
curl_close ($ch5);
?>

<?php //weather34 wunderground curl based
$url = 'https://api.wunderground.com/api/'.$apikey.'/conditions_v11/forecast10day/hourly_v11/units:'.$unit.'/lang:'.$language.'/q/pws:'.$id.'.json'; 
$ch = curl_init($url);
$filename = '../jsondata/wuweatherupdate.txt';
$complete_save_loc = $filename; 
$fp = fopen($complete_save_loc, 'wb'); 
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
<?php // weather34 earthquakes curl based
$url1 = 'https://earthquake-report.com/feeds/recent-eq?json'; 
$ch1 = curl_init($url1);
$filename1 = '../jsondata/eqnotification.txt';
$complete_save_loc1 = $filename1; 
$fp1 = fopen($complete_save_loc1, 'wb'); 
curl_setopt($ch1, CURLOPT_FILE, $fp1);
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_exec($ch1);
curl_close($ch1);
fclose($fp1);
?>
<?php //k-index curl based
$url2 = 'https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json'; 
$ch2 = curl_init($url2);
$filename2 = '../jsondata/kindex.txt';
$complete_save_loc2 = $filename2; 
$fp2 = fopen($complete_save_loc2, 'wb'); 
curl_setopt($ch2, CURLOPT_FILE, $fp2);
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_exec($ch2);
curl_close($ch2);
fclose($fp2);
?>
<?php // weather34 aqicn air quality  curl based
if($aqidisplay=='yes'){
$url3 = "https://api.waqi.info/feed/geo:".$lat.";".$lon."/?token=".$aqitoken.""; 
$ch3 = curl_init($url3);
$filename3 = '../jsondata/aqi.txt';
$complete_save_loc3 = $filename3; 
$fp3 = fopen($complete_save_loc3, 'wb'); 
curl_setopt($ch3, CURLOPT_FILE, $fp3);
curl_setopt($ch3, CURLOPT_HEADER, 0);
curl_exec($ch3);
curl_close($ch3);
fclose($fp3);}
?>
<?php // weather34 purple air quality  curl based
if($purpleairhardware=='yes'){
$url4 = 'https://www.purpleair.com/json?show='.$purpleairID.''; 
$ch4 = curl_init($url4);
$filename4 = '../jsondata/purpleair.txt';
$complete_save_loc4 = $filename4; 
$fp4 = fopen($complete_save_loc4, 'wb'); 
curl_setopt($ch4, CURLOPT_FILE, $fp4);
curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_exec($ch4);
curl_close($ch4);
fclose($fp4);}
?>