<?php header('Content-type: text/html; charset=utf-8');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018 
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at
	#   https://weather34.com/homeweatherstation/index.html 
	# 	WEATHER STATION TEMPLATE 2015-2016-2017-2018 
	# 	Cumulus Version
	#   https://www.weather34.com 
	# reworked to use module variables from common.php - K. True - 29-Mar-2019
	####################################################################################################
if(!file_exists('settings1.php')) {copy('initial-settings1.php','settings1.php'); }
include('livedata.php');
include('settings1.php');
include('common.php');
date_default_timezone_set($TZ);
?>
<!DOCTYPE html>
<html lang="<?php echo $language;?>">
<head>
  <title><?php echo $stationlocation; ?> Smart Home Weather Station</title>
  <meta content="Smart Home weather station providing current weather conditions for <?php echo $stationlocation;?>" name="description">
  <meta content="website" property="og:type">    
  <meta content="7 days" name="revisit-after">
  <meta content="web" name="distribution">
  <meta content="<?php echo "${stationlocation} \n";?> smart home weather station" property="og:title">
  <meta content="<?php echo "${stationlocation} \n";?> smart home weather station" property="og:site_name">
  <meta content="" property="og:url">
  <meta content="Smart Home weather station providing current weather conditions for <?php echo $stationlocation;?>" property="og:description">
  <meta content="img/weather34.png" property="og:image">
  <meta content="" property="fb:app_id">
  <meta content="place" property="og:type">
  <meta content="brian underdown" name="author">
  <meta content="INDEX,FOLLOW" name="robots">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name=apple-mobile-web-app-title content="SMART HOME WEATHER STATION">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, viewport-fit=cover">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="img/manifest.json">
  <meta name="theme-color" content="#ffffff">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="favicon.ico" rel="icon" type="image/x-icon">
  <link href="css/main.<?php echo $theme;?>.css?version=<?php echo filemtime('css/main.'.$theme.'.css');?>" rel="stylesheet prefetch">
</head>
<body>
<!-- begin top layout for homeweatherstation template -->
<div class="weather2-container">
  <div class="container weather34box-toparea">
    <!-- position1   -->
    <div class="weather34box clock"> <!-- module <?php echo $position1; ?> -->
      <div class="title"><?php echo $info?> <?php echo $position1title ;?> </div>
      <div class="value">
        <div id="position1"></div>
      </div>
    </div>
     <!-- position2  -->
    <div class="weather34box indoor"><!-- module <?php echo $position2; ?> -->
      <div class="title"><?php echo $info?> <?php echo $position2title ;?> </div>
      <div class="value">
        <div id="position2"></div>
      </div>
    </div>
    <!-- position3  -->
    <div class="weather34box earthquake"><!-- module <?php echo $position3; ?> -->
      <div class="title"><?php echo $info?> <?php echo $position3title ;?> </div>
      <div class="value">
        <div id="position3"></div>
      </div>
    </div>
    <!-- position4  -->   
    <div class="weather34box alert"><!-- module <?php echo $position4; ?> -->
      <div class="title"><?php echo $info;?> <?php echo $position4title ;?> </div>
      <div class="value">
        <div id="position4"></div>
      </div>
    </div>
  </div>
</div> <!-- extra div closures? </div></div>  -->
<!-- end top section (1-4) for homeweatherstation template -->

<!-- begin outside/station data section for homeweatherstation template -->
<div class="weather-container">
  <div class="weather-item"><!-- module <?php echo $temperaturemodule; ?> -->
    <div class="chartforecast">
    <?php if(false) { // WU discontinued the data source 18-Mar-2019 ?>
      <span class="yearpopup">  <a href="chartswu/yearlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
       <?php } // end of no graphs ?>
      <span class="monthpopup"> <a href="chartswu/monthlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
     <span class="todaypopup"> <a href="chartswu/todaytemperature.php" data-featherlight="iframe" >  <?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
    </div>
    <span class='moduletitle'> <?php echo $lang['Temperature']; ?> <span class="fgcontrast"><?php echo "&deg;" . $weather["temp_units"] . " \n";?></span><br /></span>   
    <div id="temperature"></div>
    <br>
  </div>
  <!-- forecast for homeweatherstation template -->
  <div class="weather-item"><!-- module <?php echo $position6; ?> -->
    <div class="chartforecast">
      <span class="yearpopup">
      <?php if ($position6=='forecast3ds.php'){
        echo'<a title="Dark Sky Forecast" href="outlookds.php" data-featherlight="iframe">'. $chartinfo. ' '.$lang['Forecastsummary']."</a></span>";
        echo ' <span class="monthpopup"><a title="Hourly Forecast" href="forecastdshour.php" data-featherlight="iframe">&nbsp;'. $chartinfo. ' '.$lang['Hourlyforecast']."</a>";
        $position6title = "DarkSky ".$lang['Forecast'];
        } 
        if ($position6=='forecast3wu.php') {echo ' <a title="Weather Wnderground forecast" href="outlookwu.php" data-featherlight="iframe">'. $chartinfo.  ' '.$lang['Forecastsummary']."</a>";
        $position6title = "WU ".$lang['Forecast'];
        
        }?>
      </span>
    </div>
    <span class='moduletitle'>
      <?php echo $position6title ;?>  (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>)
    </span><br />
    <div id="currentfore"></div>
  </div>
  
  <!-- currentsky for homeweatherstation template -->
  <div class="weather-item"><!-- module <?php echo $currentconditions; ?> -->
    <div class="chartforecast">
      <!-- HOURLY & Outlook for homeweather station -->
      <span class="yearpopup"> <a title="nearby metar station" href="metarnearby.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a>
      </span>
      <span class="monthpopup">  <a href="windy-radar.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo 'Radar'; ?></a>
      </span>
             
    </div>
    <span class='moduletitle'><?php echo $lang['Currentsky'];?></span><br /> 
    <div id="currentsky"></div>
  </div>
</div>
<!-- end of module 5-7  -->
<!-- begin module 8-10  -->
<div class="weather-container">
  <div class="weather-item"><!-- module <?php echo 'windspeeddirection.php'; ?> -->
    <div class="chartforecast">
    <?php if(false) { // WU discontinued the data source 18-Mar-2019 ?>
      <span class="yearpopup">  <a href="chartswu/yearlywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?></a></span>
      <?php } // end graphs unavailable ?>
      <span class="monthpopup"> <a href="chartswu/monthlywindspeedgust.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
      <span class="todaypopup"> <a href="chartswu/todaywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
    </div>
   <span class='moduletitle'><?php echo $lang['Windspeed'] ;?> | <?php echo $lang['Gust'] ;?></span><br />          
   <div id="windspeed"></div>
  </div>
  <!-- barometer for homeweatherstation template -->
  <div class="weather-item"><!-- module <?php echo 'barometer.php'; ?> -->
    <div class="chartforecast" style="z-index:20">
    <?php if(false) { // WU discontinued the data source 18-Mar-2019 ?>
      <span class="yearpopup">  <a href="chartswu/yearlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
      <?php } // end graphs unavailable ?>
      <span class="monthpopup"> <a href="chartswu/monthlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
      <span class="todaypopup"> <a href="chartswu/todaybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?></a></span>
    </div>
    <span class='moduletitle'><?php echo $lang['Barometer']; ?>   </span><br />
    <div id="barometer"></div>
  </div>
<!-- moonphase for homeweatherstation template includes reverse for southern hemisohere -->
  <div class=weather-item><!-- module <?php echo $sunoption; ?> -->
    <div class=chartforecast>
    <?php if ($purpleairhardware=='yes'){echo''?>
      <span class="yearpopup" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);"><?php echo $moon=moon_posit($months, $days, $years);?>
<a title="current moonphase" href="mooninfo.php" data-featherlight="iframe"><?php $moon = new MoonPhase();$moonage =$moon->age();
{if ($moonage<1.84566) {echo $lang['Newmoon'];} elseif ($moonage<5.53699) {echo $lang['Waxingcrescent'];} elseif ($moonage<9.22831) {echo $lang['Firstquarter'];} elseif ($moonage<12.91963) {echo $lang['Waxinggibbous'];
} elseif ($moonage<16.61096) {echo $lang['Fullmoon'];} elseif ($moonage<20.302228) {echo $lang['Waninggibbous'];} elseif ($moonage<23.99361) {echo $lang['Lastquarter'];} elseif ($moonage<27.68493) {    echo $lang['Waningcrescent'];
} else { echo $lang['Newmoon'];}}}
?></a></span>
<?php 
$meteor_default="No Meteor Showers";
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 1),"event_title"=>"Quadrantids","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Quadrantids peak","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5),"event_title"=>"Quadrantids","event_end"=>mktime(23, 59, 59, 1, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 9),"event_title"=>"Approaching Lyrids","event_end"=>mktime(23, 59, 59, 4, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 21),"event_title"=>"Lyrids peak","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 5, 5),"event_title"=>"ETA Aquarids","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 20),"event_title"=>"Approaching Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 27),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 28),"event_title"=>"Delta Aquarids peak","event_end"=>mktime(23, 59, 59, 7, 29),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 1),"event_title"=>"Perseids Aug 1st-24th","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Perseids peak","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 14),"event_title"=>"Perseids passed","event_end"=>mktime(23, 59, 59, 8, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 7),"event_title"=>"Draconids peak","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 20),"event_title"=>"Orionids peak","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 4),"event_title"=>"South Taurids peak","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 11),"event_title"=>"North Taurids peak","event_end"=>mktime(23, 59, 59, 11, 11),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17),"event_title"=>"Leonids peak","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13),"event_title"=>"Geminids peak","event_end"=>mktime(23, 59, 59, 12, 14),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 17),"event_title"=>"Ursids 17th-25th","event_end"=>mktime(23, 59, 59, 12, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 21),"event_title"=>"Ursids peak","event_end"=>mktime(23, 59, 59, 12, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 23),"event_title"=>"Ursids 17th-25th","event_end"=>mktime(23, 59, 59, 12, 25),);
$meteorNow=time();
$meteorOP=false;
$meteor_default = 'No Meteor';
foreach ($meteor_events as $meteor_check) {
    if ($meteor_check["event_start"]<=$meteorNow&&$meteorNow<=$meteor_check["event_end"]) {
        $meteorOP=true;
        $meteor_default=$meteor_check["event_title"];
    }
};?>
     <span class="monthpopup"><a title="meteor showers" href="meteorshowers.php" data-featherlight="iframe"><?php echo $meteorinfo;?> &nbsp;<?php if ($meteor_default=='No Meteor') {echo $lang['Meteor'];} else {	echo $meteor_default;}?></a></span>
     <span class="todaypopup"><a title="aurora information" href=aurora.php data-featherlight=iframe><?php echo $info;?> Aurora <?php if ($kp>=5) {echo '<oorange>Active</oorange>';}else {echo "";}?></a></span>
    </div>
    <span class='moduletitle'><?php echo $lang['SunPosition'];?></span><br />
    <div id="moonphase"></div>
  </div>
</div>
<!-- end module 8-10  -->

<!-- begin module 11-13  -->
<!-- rainfall for homeweatherstation template -->
<div class="weather-container">
  <div class="weather-item"><!-- module <?php echo "rainfall.php"; ?> -->
    <div class="chartforecast" >
    <?php if(false) { // WU discontinued the data source 18-Mar-2019 ?>
      <span class="yearpopup">  <a href="chartswu/yearlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
      <?php } // end graphs unavailable ?>
      <span class="monthpopup"> <a href="chartswu/weeklyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
      <span class="todaypopup"> <a href="chartswu/todayrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
    </div>
    <span class='moduletitle'><?php echo $lang['Rainfalltoday']; ?></span><br />   
    <div id="rainfall"></div>
  </div>
  <!-- position 12th module (second to last) for homeweatherstation template -->
  <div class="weather-item"><!-- module <?php echo $position12; ?> -->
    <div class="chartforecast" >
      <span class="yearpopup">
<?php if ($position12=='webcamsmall.php'){echo'<a title="Webcam " href="webcam.php" data-featherlight="iframe">'. $webcamicon. " Live Webcam </a>";}?>
<?php if ($position12=='airqualitymodule.php') {echo ' <a title="air quality information" href="purpleair.php" data-featherlight="iframe">'. $chartinfo. " Air Quality | Cloudbase </a>";}?>
<?php if ($position12=='indoortemperature.php') {echo ' <a title="Indoor Guide" href="homeindoor.php" data-featherlight="iframe">'. $chartinfo. " Indoor Guide </a>";}?>
<?php if ($position12=='moonphase.php') {echo ' <a title="Moon Info" href="mooninfo.php" data-featherlight="iframe">'. $chartinfo. " Moon Info </a>";}?>
<?php if ($position12=='solaruvds.php') {echo ' <a title="UV Guide" href="uvindexds.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a>";}?>
<?php if ($position12=='eq.php') {echo ' <a title="Earthquakes Worldwide" href="eqlist.php" data-featherlight="iframe">'. $chartinfo. " Worldwide Earthquakes </a>";}?>
      </span>
    </div>
    <span class='moduletitle'><?php echo $position12title?></span>
    <div id="solar"></div>
  </div>
 <!-- position last module for homeweatherstation template -->
  <div class="weather-item"><!-- module <?php echo $positionlastmodule; ?> -->
    <div class="chartforecast" >
      <span class="yearpopup">
<?php if ($positionlastmodule=='webcamsmall.php'){echo'<a title="Webcam " href="webcam.php" data-featherlight="iframe">'. $webcamicon. " Live Webcam </a>";}?>
<?php if ($positionlastmodule=='airqualitymodule.php') {echo ' <a title="air quality" href="purpleair.php" data-featherlight="iframe">'. $chartinfo. " Air Quality | Cloudbase </a>";}?>
<?php if ($positionlastmodule=='indoortemperature.php') {echo ' <a title="Indoor Guide" href="homeindoor.php" data-featherlight="iframe">'. $chartinfo. " Indoor Guide </a>";} ?>
<?php if ($positionlastmodule=='moonphase.php') {echo ' <a title="Moon Info" href="mooninfo.php" data-featherlight="iframe">'. $chartinfo. " Moon Info </a>";}?>
<?php if ($positionlastmodule=='solaruvds.php') {echo ' <a title="UV Guide" href="uvindexds.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a>";}?>
<?php if ($positionlastmodule=='eq.php') {echo ' <a title="Earthquakes Worldwide" href="eqlist.php" data-featherlight="iframe">'. $chartinfo. " Worldwide Earthquakes </a>";}?>
      </span>
    </div>
    <span class='moduletitle'><?php echo $positionlastmoduletitle?></span>
    <div id="dldata"></div>
  </div>
</div>
<!-- end module  11-13  -->
 <!-- end outdoor data for homeweatherstation template -->
  <!-- footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing -->
<div class="weatherfooter-container">
  <div class="weatherfooter-item"> 
    <div class="hardwarelogo1"><?php 
 if ($livedataFormat == 'weewx') {
	echo '<a href="http://www.weewx.com/" title="WeeWX Software" target="_blank">
	<img src="img/icon-weewx.svg" width="150" height="55" alt="http://www.weewx.com/" 
	style="margin-left: 20px"></a>';
	}
  elseif ($livedataFormat=='weathercat'){
	echo '<a href="https://trixology.com/" title="WeatherCat Software" target="_blank">
	<img src="img/WeatherCat100.png" width="50" height="50" alt="https://trixology.com/" 
	style="margin-left: 20px"></a>';
	}
  else { 
  echo '<a href="https://cumuluswiki.wxforum.net/a/Software" target="_blank" title="Cumulus Software">
	<img src="img/cumulus.svg" width="125" height="25" alt="Cumulus"
	style="margin-top: 15px;"></a>';
	} ?>
    </div>

    <div class="hardwarelogo2"><?php 
if ($davis=="Yes"){echo '<a href="https://www.davisinstruments.com/solution/vantage-pro2/" title="https://www.davisinstruments.com/solution/vantage-pro2/" target="_blank"><img src="img/designedfor.svg" width="125" height="125" alt="Davis Instruments&reg;"  style="margin-top: -40px" ></a>';}
else if ($weatherhardware=='Weatherflow Air-Sky'){echo '<a href="http://weatherflow.com/" title="http://weatherflow.com/" target="_blank"><img src="img/wflogo.svg" width="100" alt="http://weatherflow.com/" ></a>';
} else {
	echo '<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="img/weather34logo.svg" width="40" alt="https://weather34.com/homeweatherstation/" class="homeweatherstationlogo" ></a>';}?>
   </div>

   <div class="footertext">
<?php echo $info?>Source: (<?php echo $weather["swversion"];echo "-",$weather["version"]." Template:<oblue>".$templateversion?></oblue>)&nbsp;
<?php echo $info;?>Hardware:<?php echo $weatherhardware;?><br><?php echo $info;?><?php echo $stationlocation ;?> Weather Station &nbsp; <img alt="current language flag" src="img/flags/<?php echo $flag ;?>.svg" width="20" ><?php 
if (isset($personalmessage) and trim($personalmessage) <> '') {echo '<br />'.$personalmessage;}
?>
   </div>
  </div>
</div>
<div id="lightningalert"></div>
</body>
<?php include('updater.php');include('menu.php')?>
</html>