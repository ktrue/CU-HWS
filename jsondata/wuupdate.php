<?php
// 31-Jan-2019 DarkSky multilanguage support added - ktrue
// 13-Mar-2019 complete rewrite to have curl reporting and code simplification
//
chdir(dirname(__FILE__));
include_once('../settings.php');
include_once('../settings1.php');
include_once('../common.php');
date_default_timezone_set($TZ);
error_reporting(E_ALL);
ini_set('display_errors','on');
$Status = '';
// NEW checkwx.com API 

$filename5 = 'metar34.txt';
if(!file_exists($filename5) or file_exists($filename5)&&time()- filemtime($filename5)>1800){
  $keyHeader = "X-API-KEY:".$metarapikey;
  $url5 = "https://api.checkwx.com/metar/".$icao1."/decoded";
  $data = HWS_fetchUrlWithoutHanging($url5,false,$keyHeader);
	if(strlen($data) > 0) {
		file_put_contents($filename5,$data);
	}
} else {
	$Status .= "<!-- $filename5 is current -->\n";
}
// end metar fetch

$filename4 = 'darksky-'.$language.'.txt';
if(!file_exists($filename4) or 
  (file_exists($filename4)&&time()- filemtime($filename4)>3600)){
// weather34 darksky  curl based
  $url4 = 'https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang='.$language.'&units='.$darkskyunit ;

  $data = HWS_fetchUrlWithoutHanging($url4);
	if(strlen($data) > 0) {
		file_put_contents($filename4,$data);
	}

} else {
	$Status .= "<!-- $filename4 is current -->\n";
}

// weather34 earthquakes curl based
  $filename1a = 'eqnotification.txt';
if(!file_exists($filename1a) or file_exists($filename1a)&&time()- filemtime($filename1a)>1800){
  $url1a = 'https://earthquake-report.com/feeds/recent-eq?json'; 
  $data = HWS_fetchUrlWithoutHanging($url1a);
	if(strlen($data) > 0) {
		file_put_contents($filename1a,$data);
	}
} else {
	$Status .= "<!-- $filename1a is current -->\n";
}

$filename2a = 'kindex.txt';
if(!file_exists($filename2a) or file_exists($filename2a)&&time()- filemtime($filename2a)>1800){
 //k-index curl based
  $url2a = 'https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json'; 
  $data = HWS_fetchUrlWithoutHanging($url2a);
	if(strlen($data) > 0) {
		file_put_contents($filename2a,$data);
	}

} else {
	$Status .= "<!-- $filename2a is current -->\n";
}

// weather34 purple air quality  curl based
if($purpleairhardware=='yes') {
	$filename4a = 'purpleair.txt';
	if(!file_exists($filename4a) or file_exists($filename4a)&&time()- filemtime($filename4a)>300){

	$url4a = 'https://www.purpleair.com/json?show='.$purpleairID.''; 
  $data = HWS_fetchUrlWithoutHanging($url4a);
	if(strlen($data) > 0) {
		file_put_contents($filename4a,$data);
	}
  } else {
	  $Status .= "<!-- $filename2a is current -->\n";
  }

}

$filename = '../chartswudata/'.date('dmY').'.txt';
if(!file_exists($filename) or file_exists($filename)&&time()- filemtime($filename)>300){

 //day
  $url = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&day&month&year&graphspan=day&format=1&units='.$unit.''; 
  $data = HWS_fetchUrlWithoutHanging($url);
	if(strlen($data) > 0) {
		file_put_contents($filename,$data);
	}
} else {
	$Status .= "<!-- $filename is current -->\n";
}

//month
$filename1 = '../chartswudata/'.date('mY').'.txt';
if(!file_exists($filename1) or file_exists($filename1)&&time()- filemtime($filename1)>300){
  $url1 = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=month&year=year&month=month&format=1&units='.$unit.' '; 
  $data = HWS_fetchUrlWithoutHanging($url1);
	if(strlen($data) > 0) {
		file_put_contents($filename1,$data);
	}
} else {
	$Status .= "<!-- $filename1 is current -->\n";
}

//year
$filename2 = '../chartswudata/'.date('Y').'.txt';
if(!file_exists($filename2) or file_exists($filename2)&&time()- filemtime($filename2)>300){
  $url2 = 'https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=year&year=&format=1&units='.$unit.'  '; 
  $data = HWS_fetchUrlWithoutHanging($url2);
	if(strlen($data) > 0) {
		file_put_contents($filename2,$data);
	}
} else {
	$Status .= "<!-- $filename2 is current -->\n";
}

if($weatherflowoption=='yes'){
  $filename8 = 'weatherflow.txt';
	if(!file_exists($filename2) or file_exists($filename2)&&time()- filemtime($filename2)>300){
    $url8 = 'https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'';
    $data = HWS_fetchUrlWithoutHanging($url8);
	  if(strlen($data) > 0) {
		  file_put_contents($filename8,$data);
	  }
	} else {
	  $Status .= "<!-- $filename8 is current -->\n";
  }

}

print $Status;
file_put_contents('wuupdate-status.txt',$Status);

// fetch function
function HWS_fetchUrlWithoutHanging($url,$useFopen=false,$useHeader='') {
// get contents from one URL and return as string 
  global $Status, $needCookie;
  
  $overall_start = time();
  if (! $useFopen) {
   // Set maximum number of seconds (can have floating-point) to wait for feed before displaying page without feed
   $numberOfSeconds=6;   

// Thanks to Curly from ricksturf.com for the cURL fetch functions

  $data = '';
  $domain = parse_url($url,PHP_URL_HOST);
  $theURL = str_replace('nocache','?'.$overall_start,$url);        // add cache-buster to URL if needed
  $Status .= "<!-- curl fetching '$theURL' -->\n";
  $ch = curl_init();                                           // initialize a cURL session
  curl_setopt($ch, CURLOPT_URL, $theURL);                         // connect to provided URL
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);                 // don't verify peer certificate
  curl_setopt($ch, CURLOPT_USERAGENT, 
    'Mozilla/5.0 (CU-HWS-wuupdate.php - saratoga-weather.org)');
  $reqHeader = array (
         "Accept: text/html,text/plain"
     );
	if(!empty($useHeader)) {$reqHeader[] = $useHeader;}
	
  curl_setopt($ch,CURLOPT_HTTPHEADER,$reqHeader);                          // request 

  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $numberOfSeconds);  //  connection timeout
  curl_setopt($ch, CURLOPT_TIMEOUT, $numberOfSeconds);         //  data timeout
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);              // return the data transfer
  curl_setopt($ch, CURLOPT_NOBODY, false);                     // set nobody
  curl_setopt($ch, CURLOPT_HEADER, true);                      // include header information
//  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);              // follow Location: redirect
//  curl_setopt($ch, CURLOPT_MAXREDIRS, 1);                      //   but only one time
  if (isset($needCookie[$domain])) {
    curl_setopt($ch, $needCookie[$domain]);                    // set the cookie for this request
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);             // and ignore prior cookies
    $Status .=  "<!-- cookie used '" . $needCookie[$domain] . "' for GET to $domain -->\n";
  }

  $data = curl_exec($ch);                                      // execute session

  if(curl_error($ch) <> '') {                                  // IF there is an error
   $Status .= "<!-- curl Error: ". curl_error($ch) ." -->\n";        //  display error notice
  }
  $cinfo = curl_getinfo($ch);                                  // get info on curl exec.
/*
curl info sample
Array
(
[url] => http://saratoga-weather.net/clientraw.txt
[content_type] => text/plain
[http_code] => 200
[header_size] => 266
[request_size] => 141
[filetime] => -1
[ssl_verify_result] => 0
[redirect_count] => 0
  [total_time] => 0.125
  [namelookup_time] => 0.016
  [connect_time] => 0.063
[pretransfer_time] => 0.063
[size_upload] => 0
[size_download] => 758
[speed_download] => 6064
[speed_upload] => 0
[download_content_length] => 758
[upload_content_length] => -1
  [starttransfer_time] => 0.125
[redirect_time] => 0
[redirect_url] =>
[primary_ip] => 74.208.149.102
[certinfo] => Array
(
)

[primary_port] => 80
[local_ip] => 192.168.1.104
[local_port] => 54156
)
*/
  $Status .= "<!-- HTTP stats: " .
    " RC=".$cinfo['http_code'];
	if(isset($cinfo['primary_ip'])) {
		$Status .= " dest=".$cinfo['primary_ip'] ;
	}
	if(isset($cinfo['primary_port'])) { 
	  $Status .= " port=".$cinfo['primary_port'] ;
	}
	if(isset($cinfo['local_ip'])) {
	  $Status .= " (from sce=" . $cinfo['local_ip'] . ")";
	}
	$Status .= 
	"\n      Times:" .
    " dns=".sprintf("%01.3f",round($cinfo['namelookup_time'],3)).
    " conn=".sprintf("%01.3f",round($cinfo['connect_time'],3)).
    " pxfer=".sprintf("%01.3f",round($cinfo['pretransfer_time'],3));
	if($cinfo['total_time'] - $cinfo['pretransfer_time'] > 0.0000) {
	  $Status .=
	  " get=". sprintf("%01.3f",round($cinfo['total_time'] - $cinfo['pretransfer_time'],3));
	}
    $Status .= " total=".sprintf("%01.3f",round($cinfo['total_time'],3)) .
    " secs -->\n";

  //$Status .= "<!-- curl info\n".print_r($cinfo,true)." -->\n";
  curl_close($ch);                                              // close the cURL session
  //$Status .= "<!-- raw data\n".$data."\n -->\n"; 
  $i = strpos($data,"\r\n\r\n");
  $headers = substr($data,0,$i);
  $content = substr($data,$i+4);
  if($cinfo['http_code'] <> '200') {
    $Status .= "<!-- headers returned:\n".$headers."\n -->\n"; 
  }
  return $content;                                                 // return headers+contents

 } else {
//   print "<!-- using file_get_contents function -->\n";
   $STRopts = array(
	  'http'=>array(
	  'method'=>"GET",
	  'protocol_version' => 1.1,
	  'header'=>"Cache-Control: no-cache, must-revalidate\r\n" .
				"Cache-control: max-age=0\r\n" .
				"Connection: close\r\n" .
				"User-agent: Mozilla/5.0 (CU-HWS-wuupdate.php - saratoga-weather.org)\r\n" .
				"Accept: text/html,text/plain\r\n"
	  ),
	  'https'=>array(
	  'method'=>"GET",
	  'protocol_version' => 1.1,
	  'header'=>"Cache-Control: no-cache, must-revalidate\r\n" .
				"Cache-control: max-age=0\r\n" .
				"Connection: close\r\n" .
				"User-agent: Mozilla/5.0 (CU-HWS-wuupdate.php - saratoga-weather.org)\r\n" .
				"Accept: text/html,text/plain\r\n"
	  )
	);
	
   $STRcontext = stream_context_create($STRopts);

   $T_start = HWS_fetch_microtime();
   $xml = file_get_contents($url,false,$STRcontext);
   $T_close = HWS_fetch_microtime();
   $headerarray = get_headers($url,0);
   $theaders = join("\r\n",$headerarray);
//   $xml = $theaders . "\r\n\r\n" . $xml;

   $ms_total = sprintf("%01.3f",round($T_close - $T_start,3)); 
   $Status .= "<!-- file_get_contents() stats: total=$ms_total secs -->\n";
   $Status .= "<-- get_headers returns\n".$theaders."\n -->\n";
//   print " file() stats: total=$ms_total secs.\n";
   $overall_end = time();
   $overall_elapsed =   $overall_end - $overall_start;
   $Status .= "<!-- fetch function elapsed= $overall_elapsed secs. -->\n"; 
//   print "fetch function elapsed= $overall_elapsed secs.\n"; 
   return($xml);
 }

}    // end HWS_fetchUrlWithoutHanging
// ------------------------------------------------------------------

function HWS_fetch_microtime()
{
   list($usec, $sec) = explode(" ", microtime());
   return ((float)$usec + (float)$sec);
}
   
// ----------------------------------------------------------

?>