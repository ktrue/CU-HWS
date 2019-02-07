<?php
# note: this contains enough settings1.php data for initial startup.
# use easyweathersetup.php to configure the real one.
# 
$apikey = "";
$weatherflowID = "5153";
$weatherflowdairID = "14584";
$weatherflowdskyID = "14847";
$weatherflowoption   = "no";
$weatherflowmapzoom   = "5";
$id = "KCASARAT1";
$TZ = "America/Los_Angeles";
$UTC = "-8";
$lon = -122.022;
$lat = 37.67;
$stationlocation = "Saratoga, CA, USA";
$stationName = "Cumulus Demo";           
$moonadj = "0";
$minmag = "3";
$unit = "english";
$metric = false;
$elevation = "394 ft";

$purpleairID = "4299";
$purpleairhardware   = "yes";
$darkskyunit   = "us";

$indoor = false;
$worldloc = "usa";
$usa = true; 
$uk = false; 
$scandinavia = false; 
$restoftheworld = false; 

$windunit = "mph";
$distanceunit = "mi";
$tempunit = "F";
$rainunit  = "in";
$rainrate = "/h";
$pressureunit  = "inHg";
$livedataFormat = "cumulus";
$livedata   = "demodata/realtime.txt";

$currentconditions   = "currentconditionsds.php";
$boltekfile   = "demodata/NSRealtime.txt";

$personalmessage   = "Testing website for Cumulus HWS template with live data.";
$extralinks   = "yes";
$languages   = "yes";

$dateFormat   = "m-d-Y";
$timeFormat    = "g:i:s a";
$timeFormatShort    = "g:i a";
$clockformat    = "12";

$showDate = false; // always false after 27th April 2017 
$fireriskshow = true;
$position1   = "weather34clock.php";
$position2   = "max-minwind.php";
$position3   = "rainfallf-year-month.php";
$position4   = "advisory.php";
$position1title   = "Weather Station <orange> Time";
$position2title   = "Wind <oblue> Data </oblue>";
$position3title   = "Rain <oblue>Data</oblue>";
$position4title   = "Weather <ored>Advisory</ored>";
$position12title   = "Solar DarkSky";
$position12   = "solaruvds.php";
$positionlastmoduletitle   = "Earthquake";
$positionlastmodule   = "eq.php";
$temperaturemodule   = "temperaturein.php";
$hardware   = "Win10-Pro, 16GB, Core I5";
$email    = "webmaster@saratoga-weather.org";
$twitter   = "@saratogaWXPHP";
$showEqNotDaylight   = false;
$notificationeq   = "no";
// $uvhardware    = "weather34uvsolar.php";
$theme1   = "dark";
$since    = "Feb 2004";

$db_host   = "localhost";
$db_user    = "root";
$db_pass  = "";
$db_name   = "weatherstation";

$metarapikey ="c18426c58f8a453fcc42cc1f82";

$metar   = "yes";
$icao1   = "KSJC";
$airport1   = "San Jose, CA, USA";
$airport1dist   = "9";

$notifications = "yes";
$sunoption = "sun3.php";
$weatherhardware   = "Davis Cabled Vantage Pro1™+Solar/UV/FARS";
$davis   = "Yes";
$sunpositionbearing = "75";
$cloudbase   = "feet";
$hemisphere   = "0";

$defaultlanguage   = "en";
$language    = "en";
$password    = "";
$https    = "no";
$flag   = "en";
?>