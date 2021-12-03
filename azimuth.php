<?php
error_reporting(E_ALL);
ini_set('display_error',true);
## adapted for HWS-template
$scrpt_vrsn_dt  = 'azimuth.php|00|2019-01-10|';  # first version in this template, only very small changes, commented echo, used lat lon tz from template
#
if (isset($_REQUEST['sce']) && strtolower($_REQUEST['sce']) == 'view' ) {
   $filenameReal = __FILE__;    #               display source of script if requested so
   $download_size = filesize($filenameReal);
   header('Pragma: public');
   header('Cache-Control: private');
   header('Cache-Control: no-cache, must-revalidate');
   header("Content-type: text/plain");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header('Connection: close');
   readfile($filenameReal);
   exit;}
#
if (!isset ($stck_lst)) {$stck_lst = '';}
$stck_lst      .= basename(__FILE__).' ('.__LINE__.') version =>'.$scrpt_vrsn_dt.PHP_EOL;       // save list of loaded scrips;
#
#  Credit to "niko of weather-watch" who converted the excel to PHP and allowed the use in this HWS-template
#  Minor schanges to the original script are marked with ## adapted for HWS-template
#  ported from Wim's pwsWD template to CU-HWS by ktrue 14-Jan-2019 for sun3.php
## adapted for HWS-template
#
//php code converted from an excel spreadsheet created by Keith Burnett http://www.bodmas.org/kepler/
//Based on a spreadsheet idea by Thomas Kraus http://www.astroexcel.de/

//Creates 4 arrays, each with 26 values, values 0 to 24 are for the whole day graphs and contain sun altitude and azimuth and moon altitude in degrees
//for hours 0 to 24, value 25 contains the current sun and moon altitude.
//$gtime contains the times
//$sunpos contains the sun altitude values in degrees
//$sunazi contains the sun azimuth values in degrees
//$moonpos contains the moon altitude values in degrees

//Set the timezone and latitude longitude here
$stationlat =  $lat;    ## adapted for HWS-template
$stationlong =  $lon;   ## adapted for HWS-template
$z = 90.83333;
$tzz = $TZ;             ## adapted for HWS-template
date_default_timezone_set($tzz);

//get the current offset from UTC
$WXTimeZone = new DateTimeZone($tzz);
$WXdateTime = new DateTime("now", $WXTimeZone);
$offset = ($WXTimeZone->getOffset($WXdateTime))/3600;

//get the timestamp for the start of today
$ddd = date('Ymd');
$ddn = date('l jS \of F Y'); //pretty date
$midnight = strtotime($ddd);

//get the timestamp for the start of yesterday
$lastmnight = strtotime($ddd)-86400;

//get timestamps for sunrise, sunset, and calculate length of day today
$tsrise = date_sunrise($midnight, SUNFUNCS_RET_TIMESTAMP, $stationlat, $stationlong, $z, $offset);
$tsset = date_sunset($midnight, SUNFUNCS_RET_TIMESTAMP, $stationlat, $stationlong, $z, $offset);
$tlod = $tsset - $tsrise;

//get timestamps for sunrise, sunset, and calculate length of day yesterday
$ysrise = date_sunrise($lastmnight, SUNFUNCS_RET_TIMESTAMP, $stationlat, $stationlong, $z, $offset);
$ysset = date_sunset($lastmnight, SUNFUNCS_RET_TIMESTAMP, $stationlat, $stationlong, $z, $offset);
$ylod = $ysset - $ysrise;

//output basic sun stuff
print '<!-- '.PHP_EOL;  ## adapted for HWS-template
print 'Today is: '.$ddn."<br/>".PHP_EOL;
print 'Sunrise Today: '.date("H:i:s",$tsrise)."<br/>".PHP_EOL;
print 'Sunset Today: '.date("H:i:s",$tsset)."<br/>".PHP_EOL;
print 'Length of Day Today: '.gmdate("H:i:s", $tlod)."<hr br/>".PHP_EOL;
print 'Sunrise Yesterday: '.date("H:i:s",$ysrise)."<br/>".PHP_EOL;
print 'Sunset Yesterday: '.date("H:i:s",$ysset)."<br/>".PHP_EOL;
print 'Length of Day Yesterday: '.gmdate("H:i:s", $ylod)."<hr br/>".PHP_EOL;
$tdiff = abs($ylod-$tlod);
//print $tdiff;
$dchange=intval(gmdate('i', $tdiff))." minute(s) ".intval(gmdate('s',$tdiff))." second(s)";
if ( $tlod > $ylod ) {
$diffdesc = 'Increased By ';
} else {
$diffdesc = 'Decreased By ';
}		
print 'Day Length '.$diffdesc.$dchange."<hr br/>".PHP_EOL;


//sun position calculations start here

$dst = (date("I"));
$tdiff = (date("Z")/3600);
$year = date("Y");
$mo = date("n");
$day = date("j");
$ahour = (date("G") + (date("i")/60));

//constants for sun
$dsj2k = (367*$year)-floor(7*($year+floor(($mo+9)/12))/4)+(floor(275*$mo/9)+$day-730531.5+(-$tdiff)/24);
//$dsj2k = (367*$year)-floor(7*($year+floor(($mo+9)/12))/4)+(floor(275*$mo/9)+$day-730531.5+(-$tz-$dst)/24);
$csj2k = ($dsj2k/36525);
$lst = fmod((280.46061837 + (360.98564736629*($dsj2k+ $stationlong))),360);
$epsilon = (23.439 - (0.0000004 * $dsj2k));
$eff = (180/pi());
$tee = pow(tan(deg2rad($epsilon/2)),2);


for ($qq = 0; $qq <= 25; $qq += 1) {
if ($qq == 25) {
       $hour = $ahour;
} else  {
    $hour = ($qq);
}
$gtime[] = $hour;

//sunstuff
$FNday = (367*$year)-floor(7*($year+floor(($mo+9)/12))/4)+(floor(275*$mo/9)+$day-730531.5+(-$tdiff)/24)+($hour/24);
$lsun = fmod((280.461 + (0.9856474 * $FNday)), 360);
$gee = fmod((357.528 + (0.9856003 * $FNday)), 360);
$lambda = (($lsun+1.915 * sin(deg2rad($gee))) + (0.02 * sin(deg2rad(2 *$gee))));
$rasun = $lambda - $eff*$tee*sin(deg2rad(2*$lambda)) + $eff/2 * pow($tee,2) * sin(deg2rad(4*$lambda));
$decsun = rad2deg(asin(sin(deg2rad($epsilon))*sin(deg2rad($lambda))));
$hasun = fmod((280.46061837 + (360.98564736629*$FNday) + ($stationlong-$rasun)), 360);
//$ssalt = sin(deg2rad($decsun))* sin(deg2rad($stationlat))+cos(deg2rad($decsun))*cos(deg2rad($stationlat))*cos(deg2rad($hasun));
$salt = (rad2deg(asin(sin(deg2rad($decsun))* sin(deg2rad($stationlat))+cos(deg2rad($decsun))*cos(deg2rad($stationlat))*cos(deg2rad($hasun)))));

$sunpos[] = $salt;

//Sun azimuth


$coslat = cos(deg2rad($stationlat));
$sinlat = sin(deg2rad($stationlat));
$decsunr = deg2rad($decsun);
$rasunr = deg2rad($rasun);
$ddat = ($decsun + (20.0383 * cos($rasunr))/36*($FNday/36525));
$cosddat = cos(deg2rad($decsun + (20.0383 * cos($rasunr))/36*($FNday/36525)));
$sinddat = sin(deg2rad($decsun + (20.0383 * cos($rasunr))/36*($FNday/36525)));
$sinHA = sin(deg2rad($hasun));
$sinalt = sin(deg2rad($salt));

$suny = (-1 * $coslat * $cosddat * $sinHA);
$sunx = ($sinddat - $sinlat * $sinalt);
$sunA1 = atan($suny/$sunx);

//$sunazr
if ($sunx < 0) {
    $sunazr = (pi() + $sunA1);
} elseif ($suny < 0) {
    $sunazr = ((2*pi()) + $sunA1);
} else  {
    $sunazr = ($sunA1);
}

$sunazd = rad2deg($sunazr);

$sunazi[] = $sunazd;


//moonstuff
$mtee = ($FNday/36525);
$mlambda = fmod(218.32 + 481267.883 * $mtee,360)
 + 6.29 * sin(deg2rad(fmod(134.9 + 477198.85 * $mtee,360)))
 - 1.27 * sin(deg2rad(fmod(259.2 - 413335.38 * $mtee,360)))
 + 0.66 * sin(deg2rad(fmod(235.7 + 890534.23 * $mtee,360)))
 + 0.21 * sin(deg2rad(fmod(269.9 + 954397.7 * $mtee, 360)))
 - 0.19 * sin(deg2rad(fmod(357.5 + 35999.05 * $mtee, 360)))
 - 0.11 * sin(deg2rad(fmod(186.6 + 966404.05 * $mtee, 360)));
$mbeta = ((5.13 * sin(deg2rad(fmod(93.3 + (483202.03 * $mtee), 360))))
 + (0.28 * sin(deg2rad(fmod(228.2 + (960400.87 * $mtee), 360))))
 - (0.28 * sin(deg2rad(fmod(318.3 + (6003.18 * $mtee), 360))))
 - (0.17 * sin(deg2rad(fmod(217.6 - (407332.2 * $mtee), 360))))); 

$mpi = 0.9508
+ (0.0518 * cos(deg2rad(fmod(134.9 + 477198.85 * $mtee, 360))))
+ (0.0095 * cos(deg2rad(fmod(259.2 - 413335.38 * $mtee, 360))))
+ (0.0078 * cos(deg2rad(fmod(235.7 + 890534.23 * $mtee, 360))))
+ (0.0028 * cos(deg2rad(fmod(269.9 + 954397.7 * $mtee, 360))));

$mr = 1/(sin(deg2rad($mpi)));
$ml = cos(deg2rad($mbeta))*cos(deg2rad($mlambda));
$mm = 0.9175 * cos(deg2rad($mbeta))*sin(deg2rad($mlambda)) - (0.3978 * sin(deg2rad($mbeta)));
$mn = 0.3978 * cos(deg2rad($mbeta))*sin(deg2rad($mlambda)) + (0.9175 * sin(deg2rad($mbeta)));
$mA = rad2deg(atan($mm/$ml));

//$ramoon
if ($ml < 0) {
    $ramoon = ($mA + 180);
} elseif ($mm < 0) {
    $ramoon = ($mA + 360);
} else  {
    $ramoon = ($mA);
}

$decmoon = rad2deg(asin($mn));
$mx = $mr*cos(deg2rad($decmoon))*cos(deg2rad($ramoon)) - cos(deg2rad($stationlat))*cos(deg2rad(fmod(280.46061837 + 360.98564736629*$FNday+ $stationlong, 360)));
$my = $mr*cos(deg2rad($decmoon))*sin(deg2rad($ramoon)) - cos(deg2rad($stationlat))*sin(deg2rad(fmod(280.46061837 + 360.98564736629*$FNday+ $stationlong, 360)));
$mz = $mr*sin(deg2rad($decmoon))-sin(deg2rad($stationlat));
$mr1 = sqrt(($mx*$mx)+($my*$my)+($mz*$mz));
$mA1 = rad2deg(atan($my/$mx));
//$ramoon1
if ($mx < 0) {
    $ramoon1 = ($mA1 + 180);
} elseif ($my < 0) {
    $ramoon1 = ($mA1 + 360);
} else  {
    $ramoon1 = ($mA1);
}

$decmoon1 = rad2deg(asin($mz/$mr1));
$hamoon1 = fmod(280.46061837 + 360.98564736629*$FNday+ $stationlong-$ramoon1,360);
$malt = rad2deg(asin(sin(deg2rad($decmoon1))*sin(deg2rad($stationlat))+cos(deg2rad($decmoon1))*cos(deg2rad($stationlat))*cos(deg2rad($hamoon1))));

$moonpos[] = $malt;
}
//convert degrees to compass points
if(!function_exists('getWDir')) {
function getWDir($b) { $dirs = array('N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW',  'NW', 'NNW', 'N'); return $dirs[round($b/22.5)]; }
}

$sundir = getWDir(round($sunazi[25],2));

//output sun position
if ((time() >= $tsrise) && (time() <= $tsset)) {
	echo "At ".date("H:i",time())." the sun is up at Azimuth ".round($sunazi[25],2)." Deg (".$sundir.") and Elevation ".round($sunpos[25],2). " Deg"."<br/>".PHP_EOL;
} elseif ((time() < $tsrise)) {
  echo "At ".date("H:i",time())." the sun is not yet up"."<hr br/>".PHP_EOL;
}else{
	echo "At ".date("H:i",time())." the sun has set"."<hr br/>".PHP_EOL;
}
print ' -->';  ## adapted for HWS-template
