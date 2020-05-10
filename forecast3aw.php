<?php 
include_once('settings.php');
include_once('common.php');
include_once('livedata.php');
error_reporting(0); date_default_timezone_set($TZ);
header('Content-type: text/html; charset=UTF-8');
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19 
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/
	#
	#
	# 	Based on 3 DAY WU WEATHER FORECAST:  original FEB 2019
	#      	#
	# 	Code simplified by ktrue - 30-Mar-2019
	#   Code modified for Aerisweather forecast - ktrue - 17-Apr-2020
	####################################################################################################
$lightningalert4=' <svg id="weather34_wu_lightning_alert" width="9" height="9" fill="#ff552e" viewBox="0 0 20 20"><path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>';

//start the Aerisweather output
$jsonfile="jsondata/aerisweather.txt";
if(!file_exists($jsonfile)) {
	return;
}
$weather34awurl=file_get_contents($jsonfile);
$P_json = json_decode($weather34awurl,true);
$parsed_awjson = $P_json['response'][0]['periods'];

?><div class="updatedtimecurrent"><?php $forecastime=filemtime($jsonfile);
if(filesize($jsonfile)<1){echo "".$offline. " Offline<br>";
} else {echo $online,"";echo " ",	date($timeFormat,$forecastime);}
?>
</div>
<div class="darkskyforecasthome"><div class="darkskydiv">
<?php //begin Aerisweather stuff 

$idx = 0;
for ($k=0;$k<=3;$k++) {
	 if(empty($parsed_awjson[$k]['icon'])) { continue; }
	 if($idx > 8) {break; }
	 $awIcon=$parsed_awjson[$k]['icon'];	 
	 $awTime = date('l',$parsed_awjson[$k]['timestamp']);
   $awTempHigh = $parsed_awjson[$k]['maxTempC'];	
   $awTempLow = $parsed_awjson[$k]['minTempC'];	
	 $awWindGust = $parsed_awjson[$k]['windGustKPH'];
	 $awWinddir = $parsed_awjson[$k]['windDirDEG'];
	 $awWinddircardinal = $parsed_awjson[$k]['windDir'];
	 
	 $awacumm = $parsed_awjson[$k]['snowRange'];
	 $ptypes = array();
	 if($parsed_awjson[$k]['precipMM'] > 0.0) {
		 $ptypes[] = 'rain';
	 }
	 if($parsed_awjson[$k]['snowCM'] > 0.0) {
		 $ptypes[] = 'snow';
	 }
	 if($parsed_awjson[$k]['iceaccumMM'] > 0.0) {
		 $ptypes[] = 'ice';
	 }
	 $awPrecipType = join(',',$ptypes);
	 
	 $awprecipIntensity = $parsed_awjson[$k]['precipMM'];
	 $awPrecipProb = $parsed_awjson[$k]['pop'];
	 
	 $awUV = $parsed_awjson[$k]['uvi'];
	 $awUVdesc = '';
	 	
	 $awsnow = $parsed_awjson[$k]['snowCM'];
	 $awsummary = $parsed_awjson[$k]['weather'];
	 $awnight = !$parsed_awjson[$k]['isDay'];
	 $awskydesc = $parsed_awjson[$k]['weatherPrimary'];
   if(strlen($wuskydesc) > $wordWrapAt) {$wuskydesc = wordwrap($wuskydesc,$wordWrapAt,'<br/>'); }


	//wu convert temps-rain-wind
	//metric to F
	if ($tempunit=='F'){
	$awTempHigh=($awTempHigh*9/5)+32;
	$awTempLow=($awTempLow*9/5)+32;
	}
	if(	!$parsed_awjson[$k]['isDay'] ) {
		$awTempHigh = $awTempLow;
		$awTime .= ' Night';
	}
	//rain mm to inches 
	if ($rainunit=='in'){
	  $awprecipIntensity=round($awprecipIntensity*0.0393701,2);
	}

	//Aerisweather convert temps-rain-wind
	//wind
	//km/h to mph
	if ($windunit=='mph'){
	$awWindGust=(number_format($awWindGust,1)*0.621371);}
	//kmh to ms
	if ($windunit=='m/s' ){
	$awWindGust=(number_format($awWindGust,1)*0.277778);}
	
	//rain mm to inches
	if ($rainunit=='in'){
	$awprecipIntensity=$awprecipIntensity*0.0393701;}
	
	//icon + day
	echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$awTime.'</div><div class=darkskyhomeicons>';
	echo '<img src="css/awicons/'.$awIcon.'" width="40px" height="35px" ></img>';
	echo '</div><darkskytempdesc><value>'.$awskydesc.'<value></darkskytempdesc><br>';
	//temp non metric
	if($tempunit == 'F') {
		if($awTempHigh<44.6){echo '<darkskytemphihome><bluet>'.number_format($awTempHigh,0).'°</bluet></darkskytemphihome>';}
		else if($awTempHigh>104){echo '<darkskytemphihome><purplet>'.number_format($awTempHigh,0).'°</purplet></darkskytemphihome>';}
		else if($awTempHigh>80.6){echo '<darkskytemphihome><redt>'.number_format($awTempHigh,0).'°</redt></darkskytemphihome>';}
		else if($awTempHigh>64){echo '<darkskytemphihome><oranget>'.number_format($awTempHigh,0).'°</oranget></darkskytemphihome>';}
		else if($awTempHigh>55){echo '<darkskytemphihome><yellowt>'.number_format($awTempHigh,0).'°</yellowt></darkskytemphihome>';}
		else if($awTempHigh>=44.6){echo '<darkskytemphihome><greent>'.number_format($awTempHigh,0).'°</greent></darkskytemphihome>';}
	} else {
	//temp metric
		if($awTempHigh<7){echo '<darkskytemphihome><bluet>'.number_format($awTempHigh,0).'°</bluet></darkskytemphihome>';}
		else if($awTempHigh>40){echo '<darkskytemphihome><purplet>'.number_format($awTempHigh,0).'°</purplet></darkskytemphihome>';}
		else if($awTempHigh>27){echo '<darkskytemphihome><redt>'.number_format($awTempHigh,0).'°</redt></darkskytemphihome>';}
		else if($awTempHigh>17.7){echo '<darkskytemphihome><oranget>'.number_format($awTempHigh,0).'°</oranget></darkskytemphihome>';}
		else if($awTempHigh>12.7){echo '<darkskytemphihome><yellowt>'.number_format($awTempHigh,0).'°</yellowt></darkskytemphihome>';}
		else if($awTempHigh>=7){echo '<darkskytemphihome><greent>'.number_format($awTempHigh,0).'°</greent></darkskytemphihome>';}
	}
	//wind
	echo "<div class='darkskywindspeedicon'>";
	echo $awWinddircardinal; 
	echo " ".number_format($awWindGust,0)," <valuewindunit>".$windunit;echo  '</div>';'<br>';
	//snow
	if ( $awsnow>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$awsnow.'</oblue><valuewindunit> in</valuewindunit></darkskywindhome></span></precip>';}
	else if ( $awsnow>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$awsnow.'</oblue><valuewindunit> cm</valuewindunit></darkskywindhome></span></precip>';}
	//rain
	else if ($awPrecipType='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. number_format($awprecipIntensity,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
	else if ($awPrecipType='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. number_format($awprecipIntensity,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
	
	//uvi
	if (!$awnight){
	  echo '<br><darkskytemplohome><uv>UV <uvspan>';
	  if ($awUV>=10){     echo "<purpleu>".$awUV. '</purpleu><greyu> '.$awUVdesc;}
	  else  if ($awUV>=7){echo "<redu>".$awUV. '</redu><greyu> '.$awUVdesc;}
	  else if ($awUV>=5){ echo "<orangeu>".$awUV. '</orangeu><greyu> '.$awUVdesc;}
	  else if ($awUV>2){  echo "<yellowu>".$awUV. '</yellowu><greyu> '.$awUVdesc;}
	  else if ($awUV>=0){ echo "<greenu>".$awUV. '</greenu><greyu> '.$awUVdesc;}				  
	  echo '</uvspan></uv>';
	}
	//lightning
	echo '</darkskytemplohome></div>';
} // end for loop for icons
?>
</div></div></div>