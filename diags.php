<?php
$Version = "diags.php Version 1.00 - 08-Jan-2019";
/*
Utility diagnostic script to support the CU-HWS template sets.

Author: Ken True - webmaster@saratoga-weather.org

Note: there are no user customizations expected in this utility.  Please replace the
  entire script with a newer version when available.

*/
//--self downloader --
if(isset($_REQUEST['sce']) and strtolower($_REQUEST['sce']) == 'view') {
   $filenameReal = __FILE__;
   $download_size = filesize($filenameReal);
   header('Pragma: public');
   header('Cache-Control: private');
   header('Cache-Control: no-cache, must-revalidate');
   header("Content-type: text/plain,charset=ISO-8859-1");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header('Connection: close');
   
   readfile($filenameReal);
   exit;
 }
error_reporting(E_ALL);
// ------------------------------------------------------------------
if(isset($_REQUEST['show']) and preg_match('|settings|i',$_REQUEST['show'])) {
	$toShow = array("settings.php","settings1.php");
	$doneHeaders = false;
	$doHighlight = preg_match('|settingsr|i',$_REQUEST['show'])?false:true;
	foreach ($toShow as $n => $showFilename) {
	  if(!$doneHeaders) { 
	    printHeaders(); 
		$doneHeaders = true;
		printInfo(); 
	    print "<h2>Contents of Settings files</h2>\n";
	  }
	  if(file_exists($showFilename)) {
		  print "<h3>$showFilename</h3>\n";
		  print "<pre style=\"border: 1px solid black;\">\n";
		  if($doHighlight) { 
		    highlight_file_num($showFilename,array('password','db_user','db_pass'));
		  } else {
			$flines = file($showFilename);
			$num = 1;
			foreach ($flines as $n => $line) {
				$line = preg_replace('|<\?php|i','<&#63;php',$line);
				foreach (array('password','db_user','db_pass') as $tofind) {
			    $searchstring = '!('.$tofind.'\s*=\s*"[^"]*";)!Uis';
			    // print "Note: Replacing $tofind by ".$searchstring." for security.\n";
			    $line = preg_replace($searchstring,
			  "$tofind = \"******\"; // suppressed listing",$line);
		    }
				$pnum = sprintf('%6d',$num);
				print "$pnum:\t$line";
				$num++;
			}
		  }
		  print "</pre>\n<hr/>\n";
	  } else {
		  // print "<h2>$showFilename is not found.</h2>\n<hr/>\n";
	  }
	}
   if($doneHeaders) {
	  print "  </body>\n";
	  print "</html>\n";
   }
	
   exit;
}
// ------------------------------------------------------------------

if(isset($_REQUEST['show']) and strtolower($_REQUEST['show']) == 'info') {
  if(file_exists("settings.php")) {
	include_once("settings.php");
  }
# set the Timezone abbreviation automatically based on $SITE['tzname'];
# Set timezone in PHP5/PHP4 manner
  if (!function_exists('date_default_timezone_set')) {
	 putenv("TZ=" . $SITE['tz']);
//	 print "<!-- using putenv(\"TZ=". $SITE['tz']. "\") -->\n";
    } else {
	 date_default_timezone_set($SITE['tz']);
//	 print "<!-- using date_default_timezone_set(\"". $SITE['tz']. "\") -->\n";
   }
  printHeaders(); 
  printInfo();
	$toCheck = array('curl_init','curl_setopt','curl_exec','curl_error',
									 'curl_close','curl_getinfo',									 
									 );

	print "<h2>Status of needed built-in PHP functions</h2><p>\n";

	foreach ($toCheck as $n => $chkName) {
		print "function <b>$chkName</b> ";
		if(function_exists($chkName)) {
			print " is available<br/>\n";
		} else {
			print " is <b>NOT available</b><br/>\n";
		}
		
	}
  print "</p>\n";
	
	if(function_exists('curl_version')) {
		// Get curl version array
		print "<h2>Current required cURL features status:</h2>\n";
		$version = curl_version();
		/*
		Array
		(
				[version_number] => 463623
				[age] => 3
				[features] => 1597
				[ssl_version_number] => 0
				[version] => 7.19.7
				[host] => x86_64-redhat-linux-gnu
				[ssl_version] => NSS/3.27.1
				[libz_version] => 1.2.3
				[protocols] => Array
						(
								[0] => tftp
								[1] => ftp
								[2] => telnet
								[3] => dict
								[4] => ldap
								[5] => ldaps
								[6] => http
								[7] => file
								[8] => https
								[9] => ftps
								[10] => scp
								[11] => sftp
						)
		
		)
		*/
		
			print "cURL version: <strong>".$version['version']."</strong><br/>\n";
			if(isset($version['ssl_version'])) {
				print "cURL SSL version: <strong>".$version['ssl_version']."</strong><br/>\n";
			} else {
				print "cURL SSL not enabled in PHP<br/>\n";
			}
			if(isset($version['libz_version'])) {
				print "cURL libz version: <strong>".$version['libz_version']."</strong><br/>\n";
			} else {
				print "cURL libz not enabled in PHP<br/>\n";
			}
			
		
		// These are the bitfields that can be used 
		// to check for features in the curl build
		$bitfields = Array(
								'CURL_VERSION_SSL' => "SSL", 
								'CURL_VERSION_LIBZ' => "LIBZ"
								);
	
		foreach($bitfields as $feature => $fname)
		{
				echo $fname . ($version['features'] & constant($feature) ? ' is available' : ' is NOT AVAILABLE but REQUIRED');
				echo "<br/>\n";
		}
		print "cURL protocols supported: <strong>";
		$protocols = $version['protocols'];
		sort($protocols,SORT_STRING);
		print join(', ',$protocols)."</strong><br/>\n";
	
		print "</p>\n";
	 } else {
		print "<h2>cURL functions are not found (but REQUIRED)</h2>\n";
}
	if(is_dir('jsondata')) {
		$tstring = "Test file at ".gmdate('r');
		$bytes = @file_put_contents("jsondata/testfile.txt",$tstring);
		$t2 = '';
		$msg = "Test of writability to jsondata/ directory ";
		
		if($bytes > 0) {
			$t2 = file_get_contents("jsondata/testfile.txt");
			unlink("jsondata/testfile.txt");
			if($tstring == trim($t2)) { 
			  $msg .= 'was successful.';
			} else {
				$msg .= 'was <b>NOT successful</b>.';
			}
		} else {
			$msg .= 'was <b>NOT successful</b>.  Unable to write/unlink jsondata/testfile.txt';
		}
    print "<h2>Check PHP write to jsondata directory</h2>\n";
		print "<p>$msg</p>\n";
		//print "<pre>\n";
		//print "tstring='$tstring'\n";
		//print "     t2='$t2'\n";
		//print "bytes='$bytes'\n;";
		//print "</pre>\n";
		
	}

  $coreDirs = array(
	'chartswu' => 'WU Charts scripts',
  'chartswudata' => 'WU charts raw data',
  'css' => 'CU-HWS CSS stylesheets and SVG image collections',
  'css/aqi' => 'CU-HWS SVG images for AQI display',
  'css/darkskyicons' => 'CU-HWS SVG images for DarkSky forecasts',
  'css/fonts' => 'CU-HWS fonts',
  'css/icons' => 'CU-HWS SVG images',
  'css/mouse' => 'CU-HWS SVG images for mouse cursor',
  'css/rain' => 'CU-HWS SVG images for rain gauge display',
  'css/windicons' => 'CU-HWS SVG images for wind direction',
  'css/windspeed' => 'CU-HWS SVG images for wind speed',
	'curl' => 'CU-HWS update weather conds. utilities',
  'demodata' => 'CU-HWS demodata',
  'img' => 'CU-HWS images',
  'img/flags' => 'CU-HWS country flag images',
  'js' => 'CU-HWS JavaScripts',
  'jsondata' => 'CU-HWS downloaded JSON data files',
  'languages' => 'CU-HWS Language plugins',
  'metar' => 'CU-HWS METAR scripts',
  );
  print "</p><h2>Check for presence of required core template directories</h2><p>\n";
  foreach ($coreDirs as $chkDir => $description) {
	 print "<b>./$chkDir</b> ($description): ";
	 print is_dir($chkDir)?"found on website.":"<b>NOT FOUND</b> on website, but <b>required</b> for proper operation.";
	 print "<br/>\n";  
	  
  }
  print "</p>\n";
	
	print "<p>Script by saratoga-weather.org.  Distribution at <a href=\"https://github.com/ktrue/CU-HWS\" title=\"GitHub distribution for CU-HWS template\">GitHub.com</a></p>\n";

  print "  </body>\n";
  print "</html>\n";
	
  exit;
}


if(isset($_REQUEST['show']) and strtolower($_REQUEST['show']) == 'fullphpinfo') {
  phpinfo();
	return;
}

printHeaders();
// ------------------------------------------------------------------
  

print "PHP Version " . phpversion() . "\n";
print "Memory post_max_size " . ini_get('post_max_size') . " bytes.\n";
print "Memory usage " . memory_get_usage() . " bytes.\n";
print "Memory peak usage " . memory_get_peak_usage() . " bytes.\n";
?>
</pre>
<?php
// ------------------------------------------------------------------

function printHeaders() {
  global $Version;
  print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CU-HWS Template Test Utility</title>
<meta http-equiv="Robots" content="noindex,nofollow,noarchive" />
<meta name="author" content="Ken True" />
<meta name="copyright" content="&copy; 2019, Saratoga-Weather.org" />
<meta name="Description" content="CU-HWS website template diagnostic utility." />
<style type="text/css">
.row-odd  {background-color: #96C6F5; }
.row-even {background-color: #EFEFEF; }
.num { 
        float: left; 
        color: gray; 
        font-size: 13px;    
        font-family: monospace; 
        text-align: right; 
        margin-right: 6pt; 
        padding-right: 6pt; 
        border-right: 1px solid gray;
} 

body {margin: 0px; margin-left: 5px;} 
td {    vertical-align: top;
        font-size: 13px;    
        font-family: monospace; 
} 
code {white-space: nowrap;
        font-size: 13px;    
        font-family: monospace; 
} 
</style>
</head>
<body style="background-color:#FFFFFF; font-family:Arial, Helvetica, sans-serif;font-size: 10pt;">
<h3>'.$Version.'</h3>
';
	
}
// ------------------------------------------------------------------
// Retrieve information about the currently installed GD library
// script by phpnet at furp dot com (08-Dec-2004 06:59)
//   from the PHP usernotes about gd_info
function describeGDdyn() {
 echo "\n<ul><li>GD support: ";
 if(function_exists("gd_info")){
   echo "<span style=\"color:#00ff00\">is available.</span>";
   $info = gd_info();
   $keys = array_keys($info);
   for($i=0; $i<count($keys); $i++) {
	  if(is_bool($info[$keys[$i]])) {
		echo "</li>\n<li>" . $keys[$i] .": " . yesNo($info[$keys[$i]]);
	  } else {
		echo "</li>\n<li>" . $keys[$i] .": " . $info[$keys[$i]];
	  }
   }
 } else { 
   echo "<span style=\"color:#ff0000\">is NOT AVAILABLE but required.</span>"; 
 }
 echo "</li></ul>\n";
}

// ------------------------------------------------------------------

function yesNo($bool){
 if($bool) {
	 return "<span style=\"color:#00ff00\"> is available</span>";
 } else {
	 return "<span style=\"#ff0000\"> is NOT available</span>";
 }
}  

// ------------------------------------------------------------------

function microtime_float()
{
   list($usec, $sec) = explode(" ", microtime());
   return ((float)$usec + (float)$sec);
}
// ------------------------------------------------------------------
 function fetchUrlWithoutHanging($url,$useFopen) {

// get contents from one URL and return as string 
  global $Debug, $needCookie,$timeStamp,$TOTALtime;
  $overall_start = time();
  if (true or ! $useFopen) {
   // Set maximum number of seconds (can have floating-point) to wait for feed before displaying page without feed
   $numberOfSeconds=4;   

// Thanks to Curly from ricksturf.com for the cURL fetch functions

    $data = '';
    $domain = parse_url($url, PHP_URL_HOST);
    $theURL = str_replace('nocache', '?' . $overall_start, $url); // add cache-buster to URL if needed
    $Debug.= "<!-- curl fetching '$theURL' -->\n";
    $ch = curl_init(); // initialize a cURL session
    curl_setopt($ch, CURLOPT_URL, $theURL); // connect to provided URL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // don't verify peer certificate
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (check-fetch-times.php - saratoga-weather.org)');
//    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0');
    curl_setopt($ch, CURLOPT_HTTPHEADER, // request LD-JSON format
    array(
      "Accept: text/plain,text/html"
    ));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $numberOfSeconds); //  connection timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, $numberOfSeconds); //  data timeout
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the data transfer
    curl_setopt($ch, CURLOPT_NOBODY, false); // set nobody
    curl_setopt($ch, CURLOPT_HEADER, true); // include header information

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);              // follow Location: redirect
    curl_setopt($ch, CURLOPT_MAXREDIRS, 1);                      //   but only one time

    if (isset($needCookie[$domain])) {
      curl_setopt($ch, $needCookie[$domain]); // set the cookie for this request
      curl_setopt($ch, CURLOPT_COOKIESESSION, true); // and ignore prior cookies
      $Debug.= "<!-- cookie used '" . $needCookie[$domain] . "' for GET to $domain -->\n";
    }

    $data = curl_exec($ch); // execute session
    if (curl_error($ch) <> '') { // IF there is an error
      $Debug.= "<!-- curl Error: " . curl_error($ch) . " -->\n"; //  display error notice
    }
   
    $cinfo = curl_getinfo($ch); // get info on curl exec.
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
		if($url != $cinfo['url']) {
			$Debug .= "<!-- note: fetched '".$cinfo['url']."' after redirect was followed. -->\n";
			//$Debug .= "<!-- cinfo=".print_r($cinfo,true)." -->\n";
		}

    $Debug.= "<!-- HTTP stats: " . " RC=" . $cinfo['http_code'];
		if (isset($cinfo['primary_ip'])) {
			$Debug .= " dest=" . $cinfo['primary_ip'];
		}
    if (isset($cinfo['primary_port'])) {
      $Debug .= " port=" . $cinfo['primary_port'];
    }

    if (isset($cinfo['local_ip'])) {
      $Debug.= " (from sce=" . $cinfo['local_ip'] . ")";
    }

    $Debug.= "\n      Times:" . 
		" dns=" . sprintf("%01.3f", round($cinfo['namelookup_time'], 3)) . 
		" conn=" . sprintf("%01.3f", round($cinfo['connect_time'], 3)) . 
		" pxfer=" . sprintf("%01.3f", round($cinfo['pretransfer_time'], 3));
    if ($cinfo['total_time'] - $cinfo['pretransfer_time'] > 0.0000) {
      $Debug.= " get=" . sprintf("%01.3f", round($cinfo['total_time'] - $cinfo['pretransfer_time'], 3));
    }

    $Debug.= " total=" . sprintf("%01.3f", round($cinfo['total_time'], 3)) . " secs -->\n";

    // $Debug .= "<!-- curl info\n".print_r($cinfo,true)." -->\n";
    if(isset($cinfo['header_size'])) {
			$headerSize = $cinfo['header_size'];
			$headerArray = explode("\r\n\r\n",substr($data,0,$headerSize-4));
			//$Debug .= "<!-- headerArray=".print_r($headerArray,true)." -->\n";
		} else {
			$headerSize = 0;
		}
    curl_close($ch); // close the cURL session

    // $Debug .= "<!-- raw data\n".$data."\n -->\n";
    //$stuff = explode("\r\n\r\n",$data); // maybe we have more than one header due to redirects.
    //$content = (string)array_pop($stuff); // last one is the content
    //$headers = (string)array_pop($stuff); // next-to-last-one is the headers
		if($headerSize > 0) {
			$headers = (string)array_pop($headerArray); // take the last header
			$content = substr($data,$headerSize);
			//$Debug .= "<!-- header size=$headerSize -->\n";
		} else {
			$i = strpos($data,"\r\n\r\n"); // find the first header
			$headers = substr($data,0,$i);
			$content = substr($data,$i+4);
			//$Debug .= "<!-- header size=$i found -->\n";
		}
			
    if ($cinfo['http_code'] <> '200') {
      $Debug.= "<!-- headers returned:\n" . $headers . "\n -->\n";
    }
		$firstRC = $cinfo['http_code'];
    if(preg_match('|^HTTP\/\S+ (.*)\r\n|',$data,$m)) {$firstRC = trim($m[1]); }
		if ($firstRC == '200') {
			return $data;
		} else {
      return $headers."\r\n\r\n".$content; // return headers+contents
		}
  }
  else {

    //   print "<!-- using file_get_contents function -->\n";

    $STRopts = array(
      'http' => array(
        'method' => "GET",
        'protocol_version' => 1.1,
        'header' => "Cache-Control: no-cache, must-revalidate\r\n" . 
					"Cache-control: max-age=0\r\n" . 
					"Connection: close\r\n" . 
					"User-agent: Mozilla/5.0 (check-fetch-times.php - saratoga-weather.org)\r\n" . 
					"Accept: application/ld+json\r\n"
      ) ,
      'https' => array(
        'method' => "GET",
        'protocol_version' => 1.1,
        'header' => "Cache-Control: no-cache, must-revalidate\r\n" . 
					"Cache-control: max-age=0\r\n" . 
					"Connection: close\r\n" . 
					"User-agent: Mozilla/5.0 (check-fetch-times.php - saratoga-weather.org)\r\n" . 
					"Accept: application/ld+json\r\n"
      )
    );
    $STRcontext = stream_context_create($STRopts);
    $T_start = ADV_fetch_microtime();
    $xml = file_get_contents($url, false, $STRcontext);
    $T_close = ADV_fetch_microtime();
    $headerarray = get_headers($url, 0);
    $theaders = join("\r\n", $headerarray);
    $xml = $theaders . "\r\n\r\n" . $xml;
    $ms_total = sprintf("%01.3f", round($T_close - $T_start, 3));
    $Debug.= "<!-- file_get_contents() stats: total=$ms_total secs -->\n";
    $Debug.= "<-- get_headers returns\n" . $theaders . "\n -->\n";

    //   print " file() stats: total=$ms_total secs.\n";

    $overall_end = time();
    $overall_elapsed = $overall_end - $overall_start;
    $Debug.= "<!-- fetch function elapsed= $overall_elapsed secs. -->\n";

    //   print "fetch function elapsed= $overall_elapsed secs.\n";

    return ($xml);
  }
}    // end fetchUrlWithoutHanging
// ------------------------------------------------------------------

#---------------------------------------------------------  
# display file with PHP highlighting and line numbers
#---------------------------------------------------------  

function highlight_file_num($file,$suppress=array()) 
{ 
	if(count($suppress) > 0) {
    $rawfile = file_get_contents($file);
		foreach ($suppress as $tofind) {
			$searchstring = '!('.$tofind.'\s*=\s*"[^"]*";)!Uis';
			// print "Note: Replacing $tofind by ".$searchstring." for security.\n";
			$rawfile = preg_replace($searchstring,
			  "$tofind = \"******\"; // suppressed listing",$rawfile);
		}
		$lines = implode(range(1, count(explode("\n",$rawfile))), "<br />");
		$content = highlight_string($rawfile,true);
	} else {
		$rawrecs = file($file);
    $lines = implode(range(1, count($rawrecs)), "<br />"); 
    $content = highlight_file($file, true); 
	}

  
    echo "<table><tr><td class=\"num\">\n$lines\n</td><td>\n$content\n</td></tr></table>";
 } 

#---------------------------------------------------------  
# decode unix file permissions
#---------------------------------------------------------  

function decode_permissions($perms) {

  if (($perms & 0xC000) == 0xC000) {
	  // Socket
	  $info = 's';
  } elseif (($perms & 0xA000) == 0xA000) {
	  // Symbolic Link
	  $info = 'l';
  } elseif (($perms & 0x8000) == 0x8000) {
	  // Regular
	  $info = '-';
  } elseif (($perms & 0x6000) == 0x6000) {
	  // Block special
	  $info = 'b';
  } elseif (($perms & 0x4000) == 0x4000) {
	  // Directory
	  $info = 'd';
  } elseif (($perms & 0x2000) == 0x2000) {
	  // Character special
	  $info = 'c';
  } elseif (($perms & 0x1000) == 0x1000) {
	  // FIFO pipe
	  $info = 'p';
  } else {
	  // Unknown
	  $info = 'u';
  }
  
  // Owner
  $info .= (($perms & 0x0100) ? 'r' : '-');
  $info .= (($perms & 0x0080) ? 'w' : '-');
  $info .= (($perms & 0x0040) ?
			  (($perms & 0x0800) ? 's' : 'x' ) :
			  (($perms & 0x0800) ? 'S' : '-'));
  
  // Group
  $info .= (($perms & 0x0020) ? 'r' : '-');
  $info .= (($perms & 0x0010) ? 'w' : '-');
  $info .= (($perms & 0x0008) ?
			  (($perms & 0x0400) ? 's' : 'x' ) :
			  (($perms & 0x0400) ? 'S' : '-'));
  
  // World
  $info .= (($perms & 0x0004) ? 'r' : '-');
  $info .= (($perms & 0x0002) ? 'w' : '-');
  $info .= (($perms & 0x0001) ?
			  (($perms & 0x0200) ? 't' : 'x' ) :
			  (($perms & 0x0200) ? 'T' : '-'));
  
  return $info;
}

//-------------------------------------------------
function printInfo() {
  print "<h2>Website PHP information</h2>\n";
  print "<p>\n";
  print "Webserver OS: <b>".php_uname()."</b><br/>\n";
  print "PHP Version: <b>".phpversion()."</b><br/>\n";
  if (version_compare(PHP_VERSION, '5.3.0', '<') ) {
    print "<span style=\"color: red;\"><b>NOTE: some scripts require PHP 5.3+ for proper operation.</b></span><br/>\n";
  }
  
  print "Document root: <b>".$_SERVER['DOCUMENT_ROOT']."</b><br/>\n";
  print "allow_url_fopen = <b>";
  print ini_get("allow_url_fopen")?"ON":"off";
  print "</b><br/>\n";
  print "allow_url_include = <b>";
  print ini_get("allow_url_include")?"ON":"off";
  print "</b><br/>\n";
		$streams = stream_get_wrappers();
	print "Stream support for <b>http</b> ";
	print in_array('http',$streams)?'is available':'is <b>NOT available but REQUIRED.</b>';
	print "<br/>\n";
	print "Stream support for <b>https</b> ";
	print in_array('https',$streams)?'is available':'is <b>NOT available but REQUIRED.</b>';
	print "<br/>\n";
	sort($streams,SORT_STRING);
	print "Streams supported: <strong>".join($streams,', ')."</strong></p>\n";

}

?>
</body>
</html>