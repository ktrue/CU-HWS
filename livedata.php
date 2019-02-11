<?php 
// 31-Jan-2019 DarkSky multilanguage support added - ktrue
// 02-Feb-2019 Added weewx/weathercat realtime.txt support
####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation            # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	updated 25 May 2017 LIVEDATA.PHP ITS WHERE A LOT HAPPENS SO DONT MESS IT UP	  		           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
 include_once('settings.php');
 include_once('shared.php');
 error_reporting(0); 
 
$file1 = 'jsondata/weatherflow.txt';
$url = $file1;
$content = file_get_contents($url);
$json = json_decode($content, true);    
foreach($json['obs'] as $item)
//foreach($json['station_units'] as $item2) 
{
	
   $weatherflow['time']  = $item['timestamp'];		
   $weatherflow['temperature']  = $item['air_temperature'];
   $weatherflow['barometer']  = $item['barometric_pressure'];
   $weatherflow['seapressure']  = $item['sea_level_pressure'];
   $weatherflow['humidity']  = $item['relative_humidity'];
   $weatherflow['rainrate']  = $item['precip'];
   $weatherflow["rainlasthour"]  = $item['precip_accum_last_1hr'];
   $weatherflow['rain']  = $item['precip_accum_local_day'];
   $weatherflow['raintotal']  = $item['precip_accum_local_yesterday'];
   $weatherflow['raintotalyesterday']  = $item['precip_accum_local_yesterday'];
   $weatherflow['wind_speed']  = $item['wind_gust']/1.36;
   $weatherflow['wind_direction']  = $item['wind_direction'];
   $weatherflow['wind_gust_speed']  = $item['wind_gust'];
   $weatherflow['wind_lull']  = $item['wind_lull'];
   $weatherflow['solar']  = $item['solar_radiation'];
   $weatherflow['uv']  = $item['uv'];
   $weatherflow['lux']  = $item['brightness'];
   $weatherflow['temp_feel']  = $item['feels_like'];
   $weatherflow['heat_index']  = $item['heat_index'];
   $weatherflow['windchill']  = $item['wind_chill'];
   $weatherflow['dewpoint']  = $item['dew_point'];
   $weatherflow['wetbulb']  = $item['wet_bulb_temperature'];
   $weatherflow['delta_t']  = $item['delta_t'];
   $weatherflow['air_density']  = $item['air_density'];   
   $weatherflow['lastlightningtime']  = $item['lightning_strike_last_epoch'];
   $weatherflow['lightningdistance']  = $item['lightning_strike_last_distance'];
   $weatherflow['lightning']  = $item['lightning_strike_count'];
   $weatherflow['lightning3hr']  = $item['lightning_strike_count_last_3hr'];   
   $weatherflow['batteryair']  = $item['lightning_strike_count_last_3hr'];
   $weatherflow['batterysky']  = $item['lightning_strike_count_last_3hr'];
}


 
 
 
 

//Cumulus-Meteobridge(Sararoga Method)
// Cumulus and Meteobridge(Sararoga Method) are virtually identical, so handle them together
if (
   ($livedataFormat == 'cumulus' || 
    $livedataFormat == 'meteobridge' ||
		$livedataFormat == 'weewx' || 
		$livedataFormat == 'weathercat') && $livedata) {
	$file_live = file_get_contents($livedata);
	$cumulus = explode(" ", $file_live);

	// For both Cumulus remove decimal places from wind direction
	if (isset($cumulus[7])) {
		$cumulus[7] = (float)(1*$cumulus[7]);
		$cumulus[7] = number_format((float)$cumulus[7],0,'.','');
	}	
	$year = substr($cumulus[0], 6);
	if ($livedataFormat == 'meteobridge') {
		// For Meteobridge(Sararoga Method), remove decimal places from indoor humidity
		if (isset($cumulus[23])) {
			$cumulus[23] = (float)(1*$cumulus[23]);
			$cumulus[23] = number_format((float)$cumulus[23],0,'.','');			
		}			
	}
	else {
		// Cumulus only uses a two-digit year, so prefix with 20
		$year = "20" . $year;
	}
	// Cumulus starts record with dd/mm/yy hh:mm:ss
	// Meteobridge(Sararoga Method) starts record with dd/mm/yyyy hh:mm:ss
	$recordDate = mktime(substr($cumulus[1], 0, 2), substr($cumulus[1], 3, 2), substr($cumulus[1], 6, 2),
		substr($cumulus[0], 3, 2), substr($cumulus[0], 0, 2), $year);

	$weather["datetime"]           = $recordDate;
	$weather["date"]               = date($dateFormat, $recordDate);
	$weather["time"]               = date($timeFormat, $recordDate);
	$weather["barometer"]          = $cumulus[10];
	$weather["barometer_trend"]    = $cumulus[18];
	$weather["barometer_max"]      = $cumulus[34];
	$weather["barometer_min"]      = $cumulus[36];
	$weather["barometer_units"]    = $cumulus[15]; // mb or hPa or in
	$weather["temp_units"]         = $cumulus[14]; // C or F
	if(preg_match('/C/i',$weather["temp_units"])) { // handle WeatherCat WCT_Realtime.txt TEMPUNITS$ format
		$weather["temp_units"] = 'C';
	} else {
		$weather["temp_units"] = 'F';
	}
	$weather["temp_indoor"]        = $cumulus[22];
	$weather["temp_indoor_feel"]   = heatIndex($cumulus[22], $cumulus[23]); // must set temp_units first
	$weather["humidity_indoor"]    = $cumulus[23];
	$weather["rain_rate"]          = $cumulus[8];
	$weather["dewpoint"]           = $cumulus[4];
	$weather["rain_today"]         = $cumulus[9];
	$weather["rain_month"]         = $cumulus[19]; // rain month total
	$weather["rain_year"]          = $cumulus[20]; // rain year total
	$weather["rain_units"]         = $cumulus[16]; // mm or in
	$weather["rainydmax"]          = $cumulus[21]; // rain yesterday total
	$weather["rain_lasthour"]      = $cumulus[47]; // rain last hour tnx Ian
	$weather["uv"]                 = $cumulus[43];
	$weather["uvdatetime"]         = $recordDate;
	$weather["solar"]              = round($cumulus[45],0);
	$weather["lux"] 			   = number_format($cumulus[45]/0.0084555*1.035,0, '.', '');
	$weather["temp"]               = $cumulus[2];
	$weather["temp_feel"]          = heatIndex($cumulus[2], $cumulus[3]); // must set temp_units first
	$weather["heat_index"]         = $cumulus[41];
	$weather["windchill"]          = $cumulus[24];
	$weather["humidity"]           = $cumulus[3];
	$weather["temp_today_high"]    = $cumulus[26];
	$weather["temp_today_low"]     = $cumulus[28];
	$weather["temp_trend"]         = $cumulus[25];
	$weather["wind_direction"]     = $cumulus[7];
	$weather["wind_direction_avg"] = $cumulus[46];
	$weather["wind_speed"]         = $cumulus[6];
	$weather["wind_gust_speed"]    = $cumulus[40];
	$weather["wind_speed_max"]     = $cumulus[30];
	$weather["wind_gust_speed_max"]= $cumulus[32];
	$weather["wind_units"]         = strtolower($cumulus[13]); // m/s or mph or km/h or kts
	$weather["wind_run"]           = $cumulus[17];
	$weather["wind_speed_avg"]     = $cumulus[5];
	$weather["sunshine"]           = $cumulus[55];
	$weather["maxsolar"]           = $cumulus[56];
	$weather["sunny"]          	   = $cumulus[57];
	$weather["maxtemptime"]        = $cumulus[27];
	$weather["lowtemptime"]        = $cumulus[29];
	$weather["maxwindtime"]        = $cumulus[31];
	$weather["maxgusttime"]        = $cumulus[33];	
	$weather["version"]       	   = $cumulus[39];	
	$weather["swversion"]          = ucfirst($livedataFormat) ;	
	$weather["cloudbase"]          = $cumulus[52] ; 
	$weather["cloudbase_units"]    = $cumulus[53] ;	 
	$weather["thb0seapressmaxtime"]	= $cumulus[35] ;	
	$weather["thb0seapressmintime"]	= $cumulus[37] ;	

	$weather["zambretti"]  = $cumulus[48] ;		
    $weather["humidex"] =$cumulus[42] ;	
	$weather["dewpoint2"] = round(((pow(($weather["humidity_indoor"]/100), 0.125))*(112+0.9*$weather["temp_indoor"] )+(0.1*$weather["temp_indoor"] )-112),1);
	
	
	if ($weather["barometer_units"] == "in") {
		// standardize format
		$weather["barometer_units"] = "inHg";
	}
}

if ($weather["heat_index"] == null)
{
	$weather["heat_index"] = heatIndex($weather["temp"], $weather["humidity"]);
}

if (!$uvhardware) {
	// add actual UV forecast value from Wunderground hourly forecast for those who don't have UV sensor. 
	// This forecast value has great accuracy when compared to a real UV sensor value (usually within +/- 1 IUV)
	$forecast = file_get_contents('jsondata/wuweatherupdate.txt'); 
	$decoded = json_decode($forecast, true);
	foreach ($decoded['hourly_forecast'] as $value)
	{ 
		$weather["uv"] = $value['uvi'];
		$weather["uvdatetime"] = filemtime('jsondata/wuweatherupdate.txt'); 
		break;
	}
	// end of UV forecast from hourly.json
}

// Convert temperatures if necessary
if ($tempunit != $weather["temp_units"]) {
	if ($tempunit == "C") {
		fToC($weather, "temp_indoor");
		fToC($weather, "temp");
		fToC($weather, "wetbulb");
		fToC($weather, "windchill");
		fToC($weather, "heat_index");
		fToC($weather, "dewpoint");
		fToC($weather, "temp_indoor_feel");
		fToC($weather, "temp_feel");
		fToC($weather, "temp_today_high");
		fToC($weather, "temp_today_low");
		fToC($weather, "avgtemp");
		//fToCrel($weather, "temp_avg");	
		fToCrel($weather, "temp_trend");
		fToCrel($weather, "dewpoint_trend");
		fToC($weather, "humidex");			
		$weather["temp_units"] = $tempunit;
	}
	else if ($tempunit == "F") {
		cToF($weather, "temp_indoor");
		cToF($weather, "temp");
		cToF($weather, "wetbulb");
		cToF($weather, "windchill");
		cToF($weather, "heat_index");
		cToF($weather, "dewpoint");
		cToF($weather, "temp_indoor_feel");
		cToF($weather, "temp_feel");
		cToF($weather, "temp_today_high");
		cToF($weather, "temp_today_low");
		cToF($weather, "avgtemp");
		cToFrel($weather, "temp_trend");
		cToFrel($weather, "dewpoint_trend");
		cToF($weather, "humidex");
		$weather["temp_units"] = $tempunit;
	}
}

// Convert rainfall units if necessary
if ($rainunit != $weather["rain_units"]) {
	if ($rainunit == "mm") {
		inTomm($weather, "rain_rate");
		inTomm($weather, "rain_today");
		inTomm($weather, "rain_month");
		inTomm($weather, "rain_year");
		inTomm($weather, "rainydmax");
		inTomm($weather, "rain_lasthour");		
		$weather["rain_units"] = $rainunit;
	}
	else if ($rainunit == "in") {
		mmToin($weather, "rain_rate");
		mmToin($weather, "rain_today");
		mmToin($weather, "rain_month");
		mmToin($weather, "rain_year");
		mmToin($weather, "rainydmax");
		mmToin($weather, "rain_lasthour");
		$weather["rain_units"] = $rainunit;
	}
}

// Convert pressure units if necessary
if ($pressureunit != $weather["barometer_units"]) {
	if (($pressureunit == 'hPa' && $weather["barometer_units"] == 'mb') ||
		($pressureunit == 'mb' && $weather["barometer_units"] == 'hPa')) {
		// 1 mb = 1 hPa so just change the unit being displayed
		$weather["barometer_units"] = $pressureunit;
	}
	else if ($pressureunit == "inHg" && ($weather["barometer_units"] == 'mb' || $weather["barometer_units"] == 'hPa')) {
		mbToin($weather, "barometer");
		mbToin($weather, "barometer_trend");
		mbToin($weather, "barometermovement");
		mbToin($weather, "barometer_max");
		mbToin($weather, "barometer_min");
		$weather["barometer_units"] = $pressureunit;
	}
	else if (($pressureunit == "mb" || $pressureunit == 'hPa') && $weather["barometer_units"] == 'inHg') {
		inTomb($weather, "barometer");
		inTomb($weather, "barometer_trend");
		inTomb($weather, "barometermovement");
		inTomb($weather, "barometer_max");
		inTomb($weather, "barometer_min");
		$weather["barometer_units"] = $pressureunit;
	}
}

// Convert wind speed units if necessary
if ($windunit != $weather["wind_units"]) {
	if ($windunit == 'mph' && $weather["wind_units"] == 'kts') {
		ktsTomph($weather, "wind_speed");
		ktsTomph($weather, "wind_speed_avg");
		ktsTomph($weather, "wind_speed_trend");
		ktsTomph($weather, "wind_gust_speed");
		ktsTomph($weather, "wind_gust_speed_trend");
		ktsTomph($weather, "wind_speed_max");
		ktsTomph($weather, "wind_gust_speed_max");
		ktsTomph($weather, "wind_run");
		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'mph' && $weather["wind_units"] == 'km/h') {
		kmhTomph($weather, "wind_speed");
		kmhTomph($weather, "wind_speed_avg");
		kmhTomph($weather, "wind_speed_trend");
		kmhTomph($weather, "wind_gust_speed");
		kmhTomph($weather, "wind_gust_speed_trend");
		kmhTomph($weather, "wind_speed_max");
		kmhTomph($weather, "wind_gust_speed_max");
		kmhTomph($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'mph' && $weather["wind_units"] == 'm/s') {
		msTomph($weather, "wind_speed");
		msTomph($weather, "wind_speed_avg");
		msTomph($weather, "wind_speed_trend");
		msTomph($weather, "wind_gust_speed");
		msTomph($weather, "wind_gust_speed_trend");
		msTomph($weather, "wind_speed_max");
		msTomph($weather, "wind_gust_speed_max");
		msTomph($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'kts') {
		ktsTokmh($weather, "wind_speed");
		ktsTokmh($weather, "wind_speed_avg");
		ktsTokmh($weather, "wind_speed_trend");
		ktsTokmh($weather, "wind_gust_speed");
		ktsTokmh($weather, "wind_gust_speed_trend");
		ktsTokmh($weather, "wind_speed_max");
		ktsTokmh($weather, "wind_gust_speed_max");
		ktsTokmh($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'mph') {
		mphTokmh($weather, "wind_speed");
		mphTokmh($weather, "wind_speed_avg");
		mphTokmh($weather, "wind_speed_trend");
		mphTokmh($weather, "wind_gust_speed");
		mphTokmh($weather, "wind_gust_speed_trend");
		mphTokmh($weather, "wind_speed_max");
		mphTokmh($weather, "wind_gust_speed_max");
		mphTokmh($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'm/s') {
		msTokmh($weather, "wind_speed");
		msTokmh($weather, "wind_speed_avg");
		msTokmh($weather, "wind_speed_trend");
		msTokmh($weather, "wind_gust_speed");
		msTokmh($weather, "wind_gust_speed_trend");
		msTokmh($weather, "wind_speed_max");
		msTokmh($weather, "wind_gust_speed_max");
		msTokmh($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'kts') {
		ktsToms($weather, "wind_speed");
		ktsToms($weather, "wind_speed_avg");
		ktsToms($weather, "wind_speed_trend");
		ktsToms($weather, "wind_gust_speed");
		ktsToms($weather, "wind_gust_speed_trend");
		ktsToms($weather, "wind_speed_max");
		ktsToms($weather, "wind_gust_speed_max");
		ktsToms($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'mph') {
		mphToms($weather, "wind_speed");
		mphToms($weather, "wind_speed_avg");
		mphToms($weather, "wind_speed_trend");
		mphToms($weather, "wind_gust_speed");
		mphToms($weather, "wind_gust_speed_trend");
		mphToms($weather, "wind_speed_max");
		mphToms($weather, "wind_gust_speed_max");
		mphToms($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'km/h') {
		kmhToms($weather, "wind_speed");
		kmhToms($weather, "wind_speed_avg");
		kmhToms($weather, "wind_speed_trend");
		kmhToms($weather, "wind_gust_speed");
		kmhToms($weather, "wind_gust_speed_trend");
		kmhToms($weather, "wind_speed_max");
		kmhToms($weather, "wind_gust_speed_max");
		kmhToms($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'm/s') {
		msTokts($weather, "wind_speed");
		msTokts($weather, "wind_speed_avg");
		msTokts($weather, "wind_speed_trend");
		msTokts($weather, "wind_gust_speed");
		msTokts($weather, "wind_gust_speed_trend");
		msTokts($weather, "wind_speed_max");
		msTokts($weather, "wind_gust_speed_max");
		msTokts($weather, "wind_run");		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'mph') {
		mphTokts($weather, "wind_speed");
		mphTokts($weather, "wind_speed_avg");
		mphTokts($weather, "wind_speed_trend");
		mphTokts($weather, "wind_gust_speed");
		mphTokts($weather, "wind_gust_speed_trend");
		mphTokts($weather, "wind_speed_max");
		mphTokts($weather, "wind_gust_speed_max");
		mphTokts($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'km/h') {
		kmhTokts($weather, "wind_speed");
		kmhTokts($weather, "wind_speed_avg");
		kmhTokts($weather, "wind_speed_trend");
		kmhTokts($weather, "wind_gust_speed");
		kmhTokts($weather, "wind_gust_speed_trend");
		kmhTokts($weather, "wind_speed_max");
		kmhTokts($weather, "wind_gust_speed_max");
		kmhTokts($weather, "wind_run");
		$weather["wind_units"] = $windunit;
	}
}

// Keep track of the conversion factor for windspeed to knots because it is useful in multiple places
$toKnots = 1;
if ($weather["wind_units"] == 'mph') {
	$toKnots = 0.868976;
} else if ($weather["wind_units"] == 'km/h') {
	$toKnots = 0.5399568;
} else if ($weather["wind_units"] == 'm/s') {
	$toKnots = 1.943844;
}

// darksky api forecast and current script for HOMEWEATHERSTATION gets data from jsondata/darksky.json Friday 2nd December 2016 //
//$units = 'auto';  // Read the API docs for full details // default is auto
date_default_timezone_set($TZ);
$json = 'jsondata/darksky-'.$language.'.txt'; 
$json = file_get_contents($json); 
$response = json_decode($json, true);       
if ($response != null) {
  //darksky api Current SKY Conditions
  $darkskycurTime = $response['currently']['time'];
  $darkskycurSummary = $response['currently']['summary'];
  $darkskycurIcon = $response['currently']['icon'];
  $darkskycurTemp = round($response['currently']['temperature']);
  $darkskycurCover = $response['currently']['cloudCover']*100;   
  //darksky api Hourly Forecast
  $darkskyhourlySummary = $response['hourly']['summary'];
  $darkskyhourlyIcon = $response['hourly']['icon'];
  $darkskyhourlyCond= array();
    foreach ($response['hourly']['data'] as $td) {
      $darkskyhourlyCond[] = $td;
    }
  //darksky api Daily Forecast
  $darkskydaySummary = $response['daily']['summary'];
  $darkskydayIcon = $response['daily']['icon'];
  $darkskydayCond= array();
    foreach ($response['daily']['data'] as $d) {
      $darkskydayCond[] = $d;
    }}
//end darksky api and convert winspeed below

if ($weather["wind_units"] == 'mph') {
	$darkskywind = 2.23694;
} else if ($weather["wind_units"] == 'km/h') {
	$darkskywind = 3.6;
} else if ($weather["wind_units"] == 'm/s') {
	$darkskywind = 1;
}


$windconversion = $darkskywind;



// meteor shower alternative by betejuice cumulus forum
// adapted for homeweatherstation template be carefull its mind blowing updated July 3rd 2016// 
$o='Template by weather34.com';date_default_timezone_set($TZ); function isdayofmonth($month,$day,$year){ $dim=array(31,29,31,30,31,30,31,31,30,31,30,31); if($month!=2){ if(1<=$day&&$day<=$dim[$month-1]) return true; else return false; } $feb=$dim[0]; if(isleapyear($year)){ $feb++; } if(1<=$day&&$day<=$feb){ return true; } return false; } function isleapyear($year){ $a=floor($year-4*floor($year/4)); $b=floor($year-100*floor($year/100)); $c=floor($year-400*floor($year/400)); if($a==0){ if($b==0&&$c!=0) return false; else return true; } return false; } function moon_posit($month=null,$day=null,$year=null,$invert=false){ $moon=array(); if(!isdayofmonth($month,$day,$year)){ $moon['errors']='Invalid date'; } else{ $moon['errors']=null;$phase=''; $YY=0;$MM=0;$K1=0;$K2=0;$K3=0;$JD=0;$IP=0.0;$DP=0.0;$NP=0.0;$RP=0.0; $YY=$year-floor((12-$month)/10); $MM=$month+9; if($MM>=12){ $MM=$MM-12; } $K1=floor(365.25*($YY+4712)); $K2=floor(30.6*$MM+0.5); $K3=floor(floor(($YY/100)+49)*0.75)-38; $JD=$K1+$K2+$day+59; if($JD>2299160){ $JD=$JD-$K3; } $IP=normalize(($JD-2451550.1)/29.530588853); $age=$IP*29.53; } $moon=$phase; $ageofmoon=round($age,2); $alt = ""; if ($invert) { $alt = "-alt"; } if($ageofmoon<.53){echo "<div class=\"wi wi-moon" . $alt . "-0\"></div>";} else if($ageofmoon<1.58){echo "<div class=\"wi wi-moon" . $alt . "-1\"></div> ";} else if($ageofmoon<2.64){echo "<div class=\"wi wi-moon" . $alt . "-2\"></div>";} else if($ageofmoon<3.69){echo "<div class=\"wi wi-moon" . $alt . "-3\"></div>";} else if($ageofmoon<4.75){echo "<div class=\"wi wi-moon" . $alt . "-4\"></div>";} else if($ageofmoon<5.80){echo "<div class=\"wi wi-moon" . $alt . "-5\"></div>";} else if($ageofmoon<6.86){echo "<div class=\"wi wi-moon" . $alt . "-6\"></div>";} else if($ageofmoon<7.91){echo "<div class=\"wi wi-moon" . $alt . "-7\"></div>";} else if($ageofmoon<8.96){echo "<div class=\"wi wi-moon" . $alt . "-8\"></div>";} else if($ageofmoon<10.02){echo "<div class=\"wi wi-moon" . $alt . "-9\"></div>";} else if($ageofmoon<11.07){echo "<div class=\"wi wi-moon" . $alt . "-10\"></div>";} else if($ageofmoon<12.13){echo "<div class=\"wi wi-moon" . $alt . "-11\"></div>";} else if($ageofmoon<13.18){echo "<div class=\"wi wi-moon" . $alt . "-12\"></div>";} else if($ageofmoon<14.23){echo "<div class=\"wi wi-moon" . $alt . "-13\"></div>";} else if($ageofmoon<15.29){echo "<div class=\"wi wi-moon" . $alt . "-14\"></div>";} else if($ageofmoon<16.35){echo "<div class=\"wi wi-moon" . $alt . "-15\"></div>";} else if($ageofmoon<17.40){echo "<div class=\"wi wi-moon" . $alt . "-16\"></div>";} else if($ageofmoon<18.46){echo "<div class=\"wi wi-moon" . $alt . "-17\"></div>";} else if($ageofmoon<19.51){echo "<div class=\"wi wi-moon" . $alt . "-18\"></div>";} else if($ageofmoon<20.57){echo "<div class=\"wi wi-moon" . $alt . "-19\"></div>";} else if($ageofmoon<21.62){echo "<div class=\"wi wi-moon" . $alt . "-20\"></div>";} else if($ageofmoon<22.67){echo "<div class=\"wi wi-moon" . $alt . "-21\"></div>";} else if($ageofmoon<23.73){echo "<div class=\"wi wi-moon" . $alt . "-22\"></div>";} else if($ageofmoon<24.78){echo "<div class=\"wi wi-moon" . $alt . "-23\"></div>";} else if($ageofmoon<25.84){echo "<div class=\"wi wi-moon" . $alt . "-24\"></div>";} else if($ageofmoon<26.89){echo "<div class=\"wi wi-moon" . $alt . "-25\"></div>";} else if($ageofmoon<27.95){echo "<div class=\"wi wi-moon" . $alt . "-26\"></div>";} else if($ageofmoon<29.00){echo "<div class=\"wi wi-moon" . $alt . "-27\"></div>";} else {echo "<div class=\"wi wi-moon" . $alt . "-0\"></div>";} echo "<span style='color:#777;font-weight:normal;font-size:9px'> ${moon} </span>\n"; } $moonify="Version 4.37"; function normalize($v){ $v=$v-floor($v); if($v<0){ $v+1; } return $v; } $date=time(); $years=date('Y',$date); $months=date('n',$date); $days=date('j',$date); define('ERR_UNDEF',-1); define('EPOCH',2444238.5); define('ELONGE',278.833540); define('ELONGP',282.596403); define('ECCENT',0.016718); define('SUNSMAX',1.495985e8); define('SUNANGSIZ',0.533128); define('MMLONG',64.975464); define('MMLONGP',349.383063); define('MLNODE',151.950429); define('MINC',5.145396); define('MECC',0.054900); define('MANGSIZ',0.5181); define('MSMAX',384401.0); define('MPARALLAX',0.9507); define('SYNMONTH',29.53058868); function sgn($arg){return(($arg<0)?-1:($arg>0?1:0));} function fixangle($arg){return($arg-360.0*(floor($arg/360.0)));} function torad($arg){return($arg*(pi()/180.0));} function todeg($arg){return($arg*(180.0/pi()));} function dsin($arg){return(sin(torad($arg)));} function dcos($arg){return(cos(torad($arg)));} function jtime($timestamp){$julian=($timestamp/86400)+2440587.5;return $julian;} function jdaytosecs($jday=0){$stamp=($jday-2440587.5)*86400;return $stamp;} function jyear($td,&$yy,&$mm,&$dd){$td+=0.5;$z=floor($td);$f=$td-$z;if($z<2299161.0){$a=$z;}else{$alpha=floor(($z-1867216.25)/36524.25);$a=$z+1+$alpha-floor($alpha/4);}$b=$a+1524;$c=floor(($b-122.1)/365.25);$d=floor(365.25*$c);$e=floor(($b-$d)/30.6001);$dd=$b-$d-floor(30.6001*$e)+$f;$mm=$e<14?$e-1:$e-13;$yy=$mm>2?$c-4716:$c-4715;} function meanphase($sdate,$k){$t=($sdate-2415020.0)/36525;$t2=$t*$t;$t3=$t2*$t;$nt1=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);return($nt1);} function truephase($k,$phase){$apcor=0;$k+=$phase;$t=$k/1236.85;$t2=$t*$t;$t3=$t2*$t;$pt=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);$m=359.2242+29.10535608*$k-0.0000333*$t2-0.00000347*$t3;$mprime=306.0253+385.81691806*$k+0.0107306*$t2+0.00001236*$t3;$f=21.2964+390.67050646*$k-0.0016528*$t2-0.00000239*$t3;if(($phase<0.01)||(abs($phase-0.5)<0.01)){$pt+=(0.1734-0.000393*$t)*dsin($m)+0.0021*dsin(2*$m)-0.4068*dsin($mprime)+0.0161*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0104*dsin(2*$f)-0.0051*dsin($m+$mprime)-0.0074*dsin($m-$mprime)+0.0004*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0010*dsin(2*$f-$mprime)+0.0005*dsin($m+2*$mprime);$apcor=1;}elseif((abs($phase-0.25)<0.01||(abs($phase-0.75)<0.01))){$pt+=(0.1721-0.0004*$t)*dsin($m)+0.0021*dsin(2*$m)-0.6280*dsin($mprime)+0.0089*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0079*dsin(2*$f)-0.0119*dsin($m+$mprime)-0.0047*dsin($m-$mprime)+0.0003*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0021*dsin(2*$f-$mprime)+0.0003*dsin($m+2*$mprime)+0.0004*dsin($m-2*$mprime)-0.0003*dsin(2*$m+$mprime);if($phase<0.5){$pt+=0.0028-0.0004*dcos($m)+0.0003*dcos($mprime);}else{$pt+=-0.0028+0.0004*dcos($m)-0.0003*dcos($mprime);}$apcor=1;}if(!$apcor){print"truephase() called with invalid phase selector ($phase).\n";exit(ERR_UNDEF);}return($pt);} function phasehunt($time=-1){if(empty($time)||$time==-1){$time=time();}$sdate=jtime($time);$adate=$sdate-45;jyear($adate,$yy,$mm,$dd);$k1=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685);$adate=$nt1=meanphase($adate,$k1);while(1){$adate+=SYNMONTH;$k2=$k1+1;$nt2=meanphase($adate,$k2);if(($nt1<=$sdate)&&($nt2>$sdate)){break;}$nt1=$nt2;$k1=$k2;}return array(jdaytosecs(truephase($k1,0.0)),jdaytosecs(truephase($k1,0.25)),jdaytosecs(truephase($k1,0.5)),jdaytosecs(truephase($k1,0.75)),jdaytosecs(truephase($k2,0.0)));} function phaselist($sdate,$edate){if(empty($sdate)||empty($edate)){return array();}$sdate=jtime($sdate);$edate=jtime($edate);$phases=array();$d=$k=$yy=$mm=0;jyear($sdate,$yy,$mm,$d);$k=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685)-2;while(1){++$k;foreach(array(0.0,0.25,0.5,0.75)as $phase){$d=truephase($k,$phase);if($d>=$edate){return $phases;}if($d>=$sdate){if(empty($phases)){array_push($phases,floor(4*$phase));}array_push($phases,jdaytosecs($d));}}}} function kepler($m,$ecc){$EPSILON=1e-6;$m=torad($m);$e=$m;do{$delta=$e-$ecc*sin($e)-$m;$e-=$delta/(1-$ecc*cos($e));}while(abs($delta)>$EPSILON);return($e);} function phase($time=0){if(empty($time)||$time==0){$time=time();}$pdate=jtime($time);$pphase;$mage;$dist;$angdia;$sudist;$suangdia;$Day=$pdate-EPOCH;$N=fixangle((360/365.2422)*$Day);$M=fixangle($N+ELONGE-ELONGP);$Ec=kepler($M,ECCENT);$Ec=sqrt((1+ECCENT)/(1-ECCENT))*tan($Ec/2);$Ec=2*todeg(atan($Ec));$Lambdasun=fixangle($Ec+ELONGP);$F=((1+ECCENT*cos(torad($Ec)))/(1-ECCENT*ECCENT));$SunDist=SUNSMAX/$F;$SunAng=$F*SUNANGSIZ;$ml=fixangle(13.1763966*$Day+MMLONG);$MM=fixangle($ml-0.1114041*$Day-MMLONGP);$MN=fixangle(MLNODE-0.0529539*$Day);$Ev=1.2739*sin(torad(2*($ml-$Lambdasun)-$MM));$Ae=0.1858*sin(torad($M));$A3=0.37*sin(torad($M));$MmP=$MM+$Ev-$Ae-$A3;$mEc=6.2886*sin(torad($MmP));$A4=0.214*sin(torad(2*$MmP));$lP=$ml+$Ev+$mEc-$Ae+$A4;$V=0.6583*sin(torad(2*($lP-$Lambdasun)));$lPP=$lP+$V;$NP=$MN-0.16*sin(torad($M));$y=sin(torad($lPP-$NP))*cos(torad(MINC));$x=cos(torad($lPP-$NP));$Lambdamoon=todeg(atan2($y,$x));$Lambdamoon+=$NP;$BetaM=todeg(asin(sin(torad($lPP-$NP))*sin(torad(MINC))));$MoonAge=$lPP-$Lambdasun;$MoonPhase=(1-cos(torad($MoonAge)))/2;$MoonDist=(MSMAX*(1-MECC*MECC))/(1+MECC*cos(torad($MmP+$mEc)));$MoonDFrac=$MoonDist/MSMAX;$MoonAng=MANGSIZ/$MoonDFrac;$MoonPar=MPARALLAX/$MoonDFrac;$pphase=$MoonPhase;$mage=SYNMONTH*(fixangle($MoonAge)/360.0);$dist=$MoonDist;$angdia=$MoonAng;$sudist=$SunDist;$suangdia=$SunAng;$mpfrac=fixangle($MoonAge)/360.0;return array($mpfrac,$pphase,$mage,$dist,$angdia,$sudist,$suangdia); } 
//get moon rise/set updated 29th July
class Moon{ public static function calculateMoonTimes($month,$day,$year,$lat,$lon){$utrise=$utset=0;$timezone=(int)($lon / 15);$date=self::modifiedJulianDate($month,$day,$year);$date-=$timezone / 24;$latRad=deg2rad($lat);$sinho=0.0023271056;$sglat=sin($latRad);$cglat=cos($latRad);$rise=false;$set=false;$above=false;$hour=0;$ym=self::sinAlt($date,$hour ,$lon,$cglat,$sglat)- $sinho;$above=$ym>0;while($hour<25&&(false==$set||false==$rise)){$yz=self::sinAlt($date,$hour,$lon,$cglat,$sglat)- $sinho;$yp=self::sinAlt($date,$hour + 1,$lon,$cglat,$sglat)- $sinho;$quadout=self::quad($ym,$yz,$yp);$nz=$quadout[0];$z1=$quadout[1];$z2=$quadout[2];$xe=$quadout[3];$ye=$quadout[4];if($nz==1){if($ym<0){$utrise=$hour + $z1;$rise=true;}else{$utset=$hour + $z1;$set=true;}}if($nz==2){if($ye<0){$utrise=$hour + $z2;$utset=$hour + $z1;}else{$utrise=$hour + $z1;$utset=$hour + $z2;}}$ym=$yp;$hour+=2.0;}$retVal=new stdClass();$utrise=self::convertTime($utrise);$utset=self::convertTime($utset);$retVal->moonrise=$rise?mktime($utrise['hrs'],$utrise['min'],0,$month,$day,$year):mktime(0,0,0,$month,$day + 1,$year);$retVal->moonset=$set?mktime($utset['hrs'],$utset['min'],0,$month,$day,$year):mktime(0,0,0,$month,$day + 1,$year);return $retVal;} private static function quad($ym,$yz,$yp){$nz=$z1=$z2=0;$a=0.5 *($ym + $yp)- $yz;$b=0.5 *($yp - $ym);$c=$yz;$xe=-$b /(2 * $a);$ye=($a * $xe + $b)* $xe + $c;$dis=$b * $b - 4 * $a * $c;if($dis>0){$dx=0.5 * sqrt($dis)/ abs($a);$z1=$xe - $dx;$z2=$xe + $dx;$nz=abs($z1)<1?$nz + 1:$nz;$nz=abs($z2)<1?$nz + 1:$nz;$z1=$z1<-1?$z2:$z1;}return array($nz,$z1,$z2,$xe,$ye);} private static function sinAlt($mjd,$hour,$glon,$cglat,$sglat){$mjd+=$hour / 24;$t=($mjd - 51544.5)/ 36525;$objpos=self::minimoon($t);$ra=$objpos[1];$dec=$objpos[0];$decRad=deg2rad($dec);$tau=15 *(self::lmst($mjd,$glon)- $ra);return $sglat * sin($decRad)+ $cglat * cos($decRad)* cos(deg2rad($tau));} private static function degRange($x){$b=$x / 360;$a=360 *($b -(int)$b);$retVal=$a<0?$a + 360:$a;return $retVal;} private static function lmst($mjd,$glon){$d=$mjd - 51544.5;$t=$d / 36525;$lst=self::degRange(280.46061839 + 360.98564736629 * $d + 0.000387933 * $t * $t - $t * $t * $t / 38710000);return $lst / 15 + $glon / 15;} private static function minimoon($t){$p2=6.283185307;$arc=206264.8062;$coseps=0.91748;$sineps=0.39778;$lo=self::frac(0.606433 + 1336.855225 * $t);$l=$p2 * self::frac(0.374897 + 1325.552410 * $t);$l2=$l * 2;$ls=$p2 * self::frac(0.993133 + 99.997361 * $t);$d=$p2 * self::frac(0.827361 + 1236.853086 * $t);$d2=$d * 2;$f=$p2 * self::frac(0.259086 + 1342.227825 * $t);$f2=$f * 2;$sinls=sin($ls);$sinf2=sin($f2);$dl=22640 * sin($l);$dl+=-4586 * sin($l - $d2);$dl+=2370 * sin($d2);$dl+=769 * sin($l2);$dl+=-668 * $sinls;$dl+=-412 * $sinf2;$dl+=-212 * sin($l2 - $d2);$dl+=-206 * sin($l + $ls - $d2);$dl+=192 * sin($l + $d2);$dl+=-165 * sin($ls - $d2);$dl+=-125 * sin($d);$dl+=-110 * sin($l + $ls);$dl+=148 * sin($l - $ls);$dl+=-55 * sin($f2 - $d2);$s=$f +($dl + 412 * $sinf2 + 541 * $sinls)/ $arc;$h=$f - $d2;$n=-526 * sin($h);$n+=44 * sin($l + $h);$n+=-31 * sin(-$l + $h);$n+=-23 * sin($ls + $h);$n+=11 * sin(-$ls + $h);$n+=-25 * sin(-$l2 + $f);$n+=21 * sin(-$l + $f);$L_moon=$p2 * self::frac($lo + $dl / 1296000);$B_moon=(18520.0 * sin($s)+ $n)/ $arc;$cb=cos($B_moon);$x=$cb * cos($L_moon);$v=$cb * sin($L_moon);$w=sin($B_moon);$y=$coseps * $v - $sineps * $w;$z=$sineps * $v + $coseps * $w;$rho=sqrt(1 - $z * $z);$dec=(360 / $p2)* atan($z / $rho);$ra=(48 / $p2)* atan($y /($x + $rho));$ra=$ra<0?$ra + 24:$ra;return array($dec,$ra);} private static function frac($x){$x-=(int)$x;return $x<0?$x + 1:$x;} private static function modifiedJulianDate($month,$day,$year){if($month<=2){$month+=12;$year--;}$a=10000 * $year + 100 * $month + $day;$b=0;if($a<=15821004.1){$b=-2 *(int)(($year + 4716)/ 4)- 1179;}else{$b=(int)($year / 400)-(int)($year / 100)+(int)($year / 4);}$a=365 * $year - 679004;return $a + $b +(int)(30.6001 *($month + 1))+ $day;} private static function convertTime($hours){include('settings.php');$hrs=(int)($hours * 60 + 0.5)/ 60.0;$h=(int)($hrs);$m=(int)(60 *($hrs - $h)+ 0.5);return array('hrs'=>$h + $moonadj,'min'=>$m);} } $Moon=Moon::calculateMoonTimes($months,$days,$years,$lat,$lon); $MoonRise=$Moon->moonrise; $MoonSet=$Moon->moonset; $MoonRise=date($MoonRise); $MoonSet=date($MoonSet); class MoonPhase{ private $timestamp; private $phase; private $illum; private $age; private $dist; private $angdia; private $sundist; private $sunangdia; private $synmonth; private $quarters=null; function __construct($pdate=null){if(is_null($pdate))$pdate=time();$epoch=2444238.5;$elonge=278.833540;$elongp=282.596403;$eccent=0.016718;$sunsmax=1.495985e8;$sunangsiz=0.533128;$mmlong=64.975464;$mmlongp=349.383063;$mlnode=151.950429;$minc=5.145396;$mecc=0.054900;$mangsiz=0.5181;$msmax=384401;$mparallax=0.9507;$synmonth=29.53058868;$zenith=90+(50/60);$this->synmonth=$synmonth;$lunatbase=2423436.0;$this->timestamp=$pdate;$pdate=$pdate / 86400 + 2440587.5;$Day=$pdate - $epoch;$N=$this->fixangle((360 / 365.2422)* $Day);$M=$this->fixangle($N + $elonge - $elongp);$Ec=$this->kepler($M,$eccent);$Ec=sqrt((1 + $eccent)/(1 - $eccent))* tan($Ec / 2);$Ec=2 * rad2deg(atan($Ec));$Lambdasun=$this->fixangle($Ec + $elongp);$F=((1 + $eccent * cos(deg2rad($Ec)))/(1 - $eccent * $eccent));$SunDist=$sunsmax / $F;$SunAng=$F * $sunangsiz;$ml=$this->fixangle(13.1763966 * $Day + $mmlong);$MM=$this->fixangle($ml - 0.1114041 * $Day - $mmlongp);$MN=$this->fixangle($mlnode - 0.0529539 * $Day);$Ev=1.2739 * sin(deg2rad(2 *($ml - $Lambdasun)- $MM));$Ae=0.1858 * sin(deg2rad($M));$A3=0.37 * sin(deg2rad($M));$MmP=$MM + $Ev - $Ae - $A3;$mEc=6.2886 * sin(deg2rad($MmP));$A4=0.214 * sin(deg2rad(2 * $MmP));$lP=$ml + $Ev + $mEc - $Ae + $A4;$V=0.6583 * sin(deg2rad(2 *($lP - $Lambdasun)));$lPP=$lP + $V;$NP=$MN - 0.16 * sin(deg2rad($M));$y=sin(deg2rad($lPP - $NP))* cos(deg2rad($minc));$x=cos(deg2rad($lPP - $NP));$Lambdamoon=rad2deg(atan2($y,$x))+ $NP;$BetaM=rad2deg(asin(sin(deg2rad($lPP - $NP))* sin(deg2rad($minc))));$MoonAge=$lPP - $Lambdasun;$MoonPhase=(1 - cos(deg2rad($MoonAge)))/ 2;$MoonDist=($msmax *(1 - $mecc * $mecc))/(1 + $mecc * cos(deg2rad($MmP + $mEc)));$MoonDFrac=$MoonDist / $msmax;$MoonAng=$mangsiz / $MoonDFrac;$this->phase=$this->fixangle($MoonAge)/ 360;$this->illum=$MoonPhase;$this->age=$synmonth * $this->phase;$this->dist=$MoonDist;$this->angdia=$MoonAng;$this->sundist=$SunDist;$this->sunangdia=$SunAng;} private function fixangle($a){return($a - 360 * floor($a / 360));} private function kepler($m,$ecc){$epsilon=0.000001;$e=$m=deg2rad($m);do{$delta=$e - $ecc * sin($e)- $m;$e-=$delta /(1 - $ecc * cos($e));}while(abs($delta)>$epsilon);return $e;} private function meanphase($sdate,$k){$t=($sdate - 2415020.0)/ 36525;$t2=$t * $t;$t3=$t2 * $t;$nt1=2415020.75933 + $this->synmonth * $k + 0.0001178 * $t2 - 0.000000155 * $t3 + 0.00033 * sin(deg2rad(166.56 + 132.87 * $t - 0.009173 * $t2));return $nt1;} private function truephase($k,$phase){$apcor=false;$k+=$phase;$t=$k / 1236.85;$t2=$t * $t;$t3=$t2 * $t;$pt=2415020.75933 + $this->synmonth * $k + 0.0001178 * $t2 - 0.000000155 * $t3 + 0.00033 * sin(deg2rad(166.56 + 132.87 * $t - 0.009173 * $t2));$m=359.2242 + 29.10535608 * $k - 0.0000333 * $t2 - 0.00000347 * $t3;$mprime=306.0253 + 385.81691806 * $k + 0.0107306 * $t2 + 0.00001236 * $t3;$f=21.2964 + 390.67050646 * $k - 0.0016528 * $t2 - 0.00000239 * $t3;if($phase<0.01||abs($phase - 0.5)<0.01){$pt+=(0.1734 - 0.000393 * $t)* sin(deg2rad($m))+ 0.0021 * sin(deg2rad(2 * $m))- 0.4068 * sin(deg2rad($mprime))+ 0.0161 * sin(deg2rad(2 * $mprime))- 0.0004 * sin(deg2rad(3 * $mprime))+ 0.0104 * sin(deg2rad(2 * $f))- 0.0051 * sin(deg2rad($m + $mprime))- 0.0074 * sin(deg2rad($m - $mprime))+ 0.0004 * sin(deg2rad(2 * $f + $m))- 0.0004 * sin(deg2rad(2 * $f - $m))- 0.0006 * sin(deg2rad(2 * $f + $mprime))+ 0.0010 * sin(deg2rad(2 * $f - $mprime))+ 0.0005 * sin(deg2rad($m + 2 * $mprime));$apcor=true;}else if(abs($phase - 0.25)<0.01||abs($phase - 0.75)<0.01){$pt+=(0.1721 - 0.0004 * $t)* sin(deg2rad($m))+ 0.0021 * sin(deg2rad(2 * $m))- 0.6280 * sin(deg2rad($mprime))+ 0.0089 * sin(deg2rad(2 * $mprime))- 0.0004 * sin(deg2rad(3 * $mprime))+ 0.0079 * sin(deg2rad(2 * $f))- 0.0119 * sin(deg2rad($m + $mprime))- 0.0047 * sin(deg2rad($m - $mprime))+ 0.0003 * sin(deg2rad(2 * $f + $m))- 0.0004 * sin(deg2rad(2 * $f - $m))- 0.0006 * sin(deg2rad(2 * $f + $mprime))+ 0.0021 * sin(deg2rad(2 * $f - $mprime))+ 0.0003 * sin(deg2rad($m + 2 * $mprime))+ 0.0004 * sin(deg2rad($m - 2 * $mprime))- 0.0003 * sin(deg2rad(2 * $m + $mprime));if($phase<0.5)$pt+=0.0028 - 0.0004 * cos(deg2rad($m))+ 0.0003 * cos(deg2rad($mprime));else $pt+=-0.0028 + 0.0004 * cos(deg2rad($m))- 0.0003 * cos(deg2rad($mprime));$apcor=true;}if(!$apcor)return false;return $pt;} private function phasehunt(){$sdate=$this->utctojulian($this->timestamp);$adate=$sdate - 45;$ats=$this->timestamp - 86400 * 45;$yy=(int)gmdate('Y',$ats);$mm=(int)gmdate('n',$ats);$k1=floor(($yy +(($mm - 1)*(1 / 12))- 1900)* 12.3685);$adate=$nt1=$this->meanphase($adate,$k1);while(true){$adate+=$this->synmonth;$k2=$k1 + 1;$nt2=$this->meanphase($adate,$k2);if(abs($nt2 - $sdate)<0.75)$nt2=$this->truephase($k2,0.0);if($nt1<=$sdate&&$nt2>$sdate)break;$nt1=$nt2;$k1=$k2;}$data=array($this->truephase($k1,0.0),$this->truephase($k1,0.25),$this->truephase($k1,0.5),$this->truephase($k1,0.75),$this->truephase($k2,0.0),$this->truephase($k2,0.25),$this->truephase($k2,0.5),$this->truephase($k2,0.75));$this->quarters=array();foreach($data as $v)$this->quarters[]=($v - 2440587.5)* 86400;}private function utctojulian($ts){return $ts / 86400 + 2440587.5;} private function get_phase($n){if(is_null($this->quarters))$this->phasehunt();return $this->quarters[$n];} function phase(){return $this->phase;}function illumination(){return $this->illum;} function age(){return $this->age;} function distance(){return $this->dist;} function diameter(){return $this->angdia;} function sundistance(){return $this->sundist;} function sundiameter(){return $this->sunangdia;} function new_moon(){return $this->get_phase(0);} function first_quarter(){return $this->get_phase(1);} function full_moon(){return $this->get_phase(2);} function last_quarter(){return $this->get_phase(3);} function next_new_moon(){return $this->get_phase(4);} function next_first_quarter(){return $this->get_phase(5);} function next_full_moon(){return $this->get_phase(6);} function next_last_quarter(){return $this->get_phase(7);} function phase_name(){$names=array('New Moon','Waxing Crescent','First Quarter','Waxing Gibbous','Full Moon','Waning Gibbous','Third Quarter','Waning Crescent','New Moon');return $names[ floor(($this->phase + 0.0625)* 8)];} } ?>

<?php 
$meteor_default="No Meteor";
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2018),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2019),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2019),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2020),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2020),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2021),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2021),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2022),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 9),"event_title"=>"Lyrids Meteor","event_end"=>mktime(20, 59, 59, 4, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 21),"event_title"=>"Lyrids Meteor","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 5, 5),"event_title"=>"ETA Aquarids","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 20),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 28),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 29),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 30),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 1),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 14),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 6),"event_title"=>"Draconids","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 20),"event_title"=>"Orionids Meteor","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 4),"event_title"=>"South Taurids","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 11),"event_title"=>"North Taurids","event_end"=>mktime(23, 59, 59, 11, 11),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 13),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 16),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 19),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 29),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 30),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 14),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 16),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 21),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 23),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 25),);
$meteorNow=time();
$meteorOP=false;
foreach ($meteor_events as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNow&&$meteorNow<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_default=$meteor_check["event_title"];}};
//end meteor
//begin weather34 eclipse
//lunar and solar eclipse 2017-2018-2019-2020
$eclipse_default=" <noalert>No Current <spanbold>Weather</spanbold> <spanyellow>Alerts</spanyellow> </noalert>";
//super moon  2019 21st Jan
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 21 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg." <alert>Super<spanblue> Moon</spanblue> Phenomena</alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 21, 2019),);
//super moon  2019 19th Feb
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 2, 19 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg." <alert>Super<spanblue> Moon</spanblue> Phenomena</alert>  </div>
","event_end"=>mktime(23, 59, 59, 2, 19, 2019),);
//leonids 2018
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17 , 2018),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Leonids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 11, 18, 2018),);
//geminids 2018
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13 , 2018),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Geminids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 12, 14, 2018),);
//Quadrantids 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Quadrantids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 4, 2019),);
//5/6 jan solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."<alert>Partial Solar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 6, 2019),);
//20/21 jan solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 20, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."  <alert>Partial Lunar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 21, 2019),);
//2 jul solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 7, 2, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg." <alert>Total Solar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 7, 2, 2019),);
//16/17 jul solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 7, 16, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."  <alert>Partial Lunar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 7, 17, 2019),);
//persieds 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 8, 12 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Perseids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 8, 13, 2019),);
//leonids 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Leonids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 11, 18, 2018),);
//geminids 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Geminids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 12, 14, 2019),);
//5/6 dec solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 12, 26, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."  <alert>Annular Solar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 12, 26, 2019),);
//Quadrantids 2020
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3 , 2020),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg."  <alert>Quadrantids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 4, 2020),);

$eclipseNow=time();$eclipseOP=false;foreach ($eclipse_events as $eclipse_check) {if ($eclipse_check["event_start"]<=$eclipseNow&&$eclipseNow<=$eclipse_check["event_end"]) {$eclipseOP=true;$eclipse_default=$eclipse_check["event_title"]; }};	
?>
<?php // based on cumulus forum thread http://sandaysoft.com/forum/viewtopic.php?f=14&t=2789&sid=77ffab8f6f2359e09e6c58d8b13a0c3c&start=30
$firerisk = number_format((((110 - 1.373 * $weather["humidity"] ) - 0.54 * (10.20 - $weather["temp"] )) * (124 * pow(10,(-0.0142 * $weather["humidity"] ))))/60,0);?>
<?php
$Tc =($weather['temp']);$P = $weather['barometer'];$RH = $weather['humidity'];
$Tdc = (($Tc - (14.55 + 0.114 * $Tc) * (1 - (0.01 * $RH)) - pow((2.5 + 0.007 * $Tc) * (1 - (0.01 * $RH)) , 3) - (15.9 + 0.117 * $Tc) * pow(1 - (0.01 * $RH),  14)));
$E = (6.11 * pow(10 , (7.5 * $Tdc / (237.7 + $Tdc))));
$wetbulbcalc = (((0.00066 * $P) * $Tc) + ((4098 * $E) / pow(($Tdc + 237.7) , 2) * $Tdc)) / ((0.00066 * $P) + (4098 * $E) / pow(($Tdc + 237.7) , 2));
$wetbulbx =number_format($wetbulbcalc,1);
$software    = 'Cumulus <span>Software</span>';
$designedfor    = '<br>For Cumulus';
// K-INDEX & SOLAR DATA FOR WEATHER34 HOMEWEATHERSTATION TEMPLATE RADIO HAMS REJOICE :-) //
$str = file_get_contents('jsondata/kindex.txt');$json = array_reverse(json_decode($str,false));$kp =  $json[1][1];?>
<?php $file = $_SERVER["SCRIPT_NAME"];$break = Explode('/', $file);$mod34file = $break[count($break) - 1];?>
