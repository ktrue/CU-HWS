<?php header('Content-type: text/html; charset=utf-8');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2016-2017-2018 	  											   #
	# 	Cumulus Version    														                       #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include('livedata.php');include('common.php');include('settings1.php');date_default_timezone_set($TZ);?>
<!DOCTYPE html>
<html>
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
<!-- begin top layout for homeweatherstation template-->
<div class="weather2-container">
<div class="container weather34box-toparea">
  <!-- position1 --->
  <div class="weather34box clock">  <div class="title"><?php echo $info?> <?php echo $position1title ;?> </div><div class="value"><div id="position1"></div></div></div>
   <!-- position2--->
  <div class="weather34box indoor"> <div class="title"><?php echo $info?> <?php echo $position2title ;?> </div><div class="value"><div id="position2"></div></div></div>
  <!-- position3--->
  <div class="weather34box earthquake"> <div class="title"><?php echo $info?> <?php echo $position3title ;?> </div><div class="value"><div id="position3"></div></div></div>
  <!-- position4--->   
  <div class="weather34box alert"><div class="title"><?php echo $info;?> <?php echo $position4title ;?> </div><div class="value"><div id="position4"></div></div></div>
  </div></div></div></div>
<!--end position section for homeweatherstation template-->
<!--begin outside/station data section for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a href="chartswu/yearlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartswu/monthlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartswu/todaytemperature.php" data-featherlight="iframe" >  <?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
<span class='moduletitle'> <?php echo $lang['Temperature']; ?> <span class="fgcontrast"><?php echo "&deg;" . $weather["temp_units"] . " \n";?></span><br /></span>   
  <div id="temperature"></div><br></div>
  <!--forecast for homeweatherstation template-->
<div class="weather-item"><div class="chartforecast">
<span class="yearpopup"> <a href="outlookds.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo $lang['Forecastsummary'];?></a></span>
<span class="yearpopup">  <a href="forecastdshour.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Hourlyforecast']; ?></a></span>
      </div>
  <span class='moduletitle'>
  <?php echo $lang['Forecast'];?>  </span><br />
  <div id="currentfore"></div></div>  
  <!--currentsky for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast">
         <!-- HOURLY & Outlook for homeweather station-->
   <span class="yearpopup"> <a alt="nearby metar station" title="nearby metar station" href="metarnearby.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a></span>
             
         </div>
  <span class='moduletitle'><?php echo $lang['Currentsky'];?></span><br /> 
  <div id="currentsky"></div></div></div>
 <!--windspeed for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a href="chartswu/yearlywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?></a></span>
<span class="monthpopup"> <a href="chartswu/monthlywindspeedgust.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartswu/todaywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Windspeed'] ;?> | <?php echo $lang['Gust'] ;?></span><br />          
         <div id="windspeed"></div></div>
       <!--barometer for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20">
<span class="yearpopup">  <a href="chartswu/yearlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartswu/monthlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartswu/todaybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?></a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Barometer']; ?>   </span><br />
         <div id="barometer"></div></div>
<!--moonphase for homeweatherstation template includes reverse for southern hemisohere-->
<div class=weather-item><div class=chartforecast>
<?php if ($purpleairhardware=='yes'){echo''?>
  <span class="yearpopup" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);"><?php echo $moon=moon_posit($months, $days, $years);?>
<a alt="current moonphase" title="current moonphase" href=mooninfo.php data-featherlight=iframe><?php $moon = new MoonPhase();$moonage =$moon->age();
{if ($moonage<1.84566) {echo "New Moon";} elseif ($moonage<5.53699) {echo "Waxing Crescent";} elseif ($moonage<9.22831) {echo "First Quarter";} elseif ($moonage<12.91963) {echo "Waxing Gibbous";
} elseif ($moonage<16.61096) {echo "Full Moon";} elseif ($moonage<20.302228) {echo "Waning Gibbous";} elseif ($moonage<23.99361) {echo "Last Quarter";} elseif ($moonage<27.68493) {    echo "Waning Crescent";
} else { echo "New Moon ";}}}
?></a></span>  
<span class="monthpopup"><a alt="meteor showers" title="meteor showers" href="meteorshowers.php" data-featherlight="iframe"><?php echo $meteorinfo;?> &nbsp;<?php if ($meteor_default=='No Meteor') {echo "Meteor Showers";} else {	echo $meteor_default;}?></a></span>
<span class="todaypopup"><a alt="aurora information" title="aurora information" href=aurora.php data-featherlight=iframe><?php echo $info;?> Aurora <?php if ($kp>=5) {echo '<oorange>Active</oorange>';}else {echo "";}?></a></span></div>
<span class='moduletitle'><?php echo $lang['SunPosition'];?></span><br />
  <div id="moonphase"></div> </div></div></div>
 <!--rainfall for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast" >
<span class="yearpopup">  <a href="chartswu/yearlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartswu/monthlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartswu/todayrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Rainfalltoday']; ?></span><br />   
         <div id="rainfall"></div></div>
  <!--solar or web cam for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20;">  
   <span class="yearpopup"> 
  <?php 
  if ($uvhardware == 'webcamsmall.php' ) {echo  $webcamicon.'  <a href="cam.php" data-featherlight="iframe" >
   '.$lang['LiveWebCam'] ."</a>";}  
  else echo ''   ?></a></span>      
     <?php if ($uvhardware == 'aqiuv.php'){echo '<span class="monthpopup"> 
     <a href="airqualityuv.php" data-featherlight="iframe"> '.$chartinfo.' AQI - UV Info </a></span>';} 	
	  else if ($uvhardware == 'weather34uvsolar.php' ){echo '<span class="yearpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info</a></span>';}  
	  else if ($uvhardware == 'aqisolar.php'){echo '<span class="monthpopup"> 
     <a href="airqualitysolar.php" data-featherlight="iframe"> '.$chartinfo.' AQI - Solar Info </a></span>';}
	 else if ($uvhardware == 'solaruvds.php'){echo '<span class="monthpopup"> 
     <a href="dsuvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';} 		
	 else if ($uvhardware == 'uvsolarlux.php'){echo '<span class="monthpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';}	
	 else if ($uvhardware == 'indoortemperature.php'){echo '<span class="monthpopup"> 
     <a href="eqlist.php" data-featherlight="iframe"> '.$info.' Latest Earthquake Info </a></span>';}
	 else if ($uvhardware == 'weatherflowuvsolar.php'){echo '<a href="uvindexwf.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info</a></span>';}	
	 else if ($uvhardware == 'eq.php'){echo '<a href="eqlist.php" data-featherlight="iframe"> '.$chartinfo.' Earthquakes</a></span>';}		
	 ?>   
     
    </div>
  <span class='moduletitle'>
  <?php 
  if ($uvhardware == 'solar.php' ) { echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'uvsolarlux.php' ){ echo "Solar | UV-Index | Lux";}
  else if ($uvhardware == 'solaruvds.php' ){ echo "Solar | UV-Index | Lux";}
  else if ($uvhardware == 'weather34uvsolar.php' ){ echo "Solar | UV-Index | Lux";}  
  else if ($uvhardware == 'indoortemperature.php' ){ echo $lang['Indoor'];}
  else if ($uvhardware == 'weatherflowuvsolar.php' ){ echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'webcamsmall.php' ) {echo $webcamicon, $lang['LiveWebCam'];} 
   else if ($uvhardware == 'eq.php' ) {echo $lang['Earthquake'];}?></span></span><br />
<div id="solar"></div></div>
  <!--air quality- moon for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20">
  <?php if ($purpleairhardware=='no'){echo''?>
  <span class="yearpopup" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);"><?php echo $moon=moon_posit($months, $days, $years);?>
<a alt="current moonphase" title="current moonphase" href=mooninfo.php data-featherlight=iframe><?php $moon = new MoonPhase();$moonage =$moon->age();
{if ($moonage<1.84566) {echo "New Moon";} elseif ($moonage<5.53699) {echo "Waxing Crescent";} elseif ($moonage<9.22831) {echo "First Quarter";} elseif ($moonage<12.91963) {echo "Waxing Gibbous";
} elseif ($moonage<16.61096) {echo "Full Moon";} elseif ($moonage<20.302228) {echo "Waning Gibbous";} elseif ($moonage<23.99361) {echo "Last Quarter";} elseif ($moonage<27.68493) {    echo "Waning Crescent";
} else { echo "New Moon ";}}}
?></a></span>  
  <span class="monthpopup"><?php if ($purpleairhardware=='yes'){echo ' <a href="purpleair.php" data-featherlight="iframe">'. $chartinfo. "Air Quality </a></span>";}?> 
</a></span>  
   
  </div>
     <span class='moduletitle'> 
	 <?php if ($purpleairhardware=="yes") {echo "Purple Air Quality Index";} else if ($indoor=="true")echo $lang['Indoor'];else echo $lang['Moonphase'];?>
     </span></span>
      <div id="dldata"></div>    
    </div></div>
 <!--end outdoor data for homeweatherstation template-->
  <!--footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing-->
<div class=weatherfooter-container><div class=weatherfooter-item> 
<div class=hardwarelogo1><a href="" target="_blank" title=""><img src="img/cumulus.svg" width="125px" height="25px" alt="meteobridge"></a></div><div class=hardwarelogo2><?php 
if ($davis=="Yes"){echo '<a href="https://www.davisinstruments.com/solution/vantage-pro2/" title="https://www.davisinstruments.com/solution/vantage-pro2/" target="_blank"><img src="img/davisw34.svg" width="95px" height="20px" alt="Davis Instruments&reg;" ></a>';}
else if ($weatherhardware=='Weatherflow Air-Sky'){echo '<a href="http://weatherflow.com/" title="http://weatherflow.com/" target="_blank"><img src="img/wflogo.svg" width="100px" alt="http://weatherflow.com/" ></a>';}
else echo '<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="img/weather34logo.svg" width="40px" alt="https://weather34.com/homeweatherstation/" class="homeweatherstationlogo" ></a>';?> </div>
<div class=designedby><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/"><?php echo $o ;?></a></div>
<div class=footertext>
<?php echo $info?>Source:<?php echo $mbplatform;?> (<?php echo $weather["swversion"];echo "-",$weather["version"]." Template:<oblue>".$templateversion?></oblue>)&nbsp;
<?php echo $info;?>Hardware:<?php echo $weatherhardware;?><br><?php echo $info;?><?php echo $stationlocation ;?> Weather Station &nbsp; <img src="img/flags/<?php echo $flag ;?>.svg" width="20px" ></div></div></div>
<div id=lightningalert></div></body><?php include('updater.php');include('menu.php')?></html>