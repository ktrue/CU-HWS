<!DOCTYPE html>
<title>weather34 current conditions</title>
<style>
uppercase{ text-transform:capitalize;}
</style>
<?php include('metar34get.php');include('common.php');error_reporting(0);
$result = date_sun_info(time(), $lat, $lon);
$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$tw=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$twe=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$suns2 =date('G.i', $result['sunset']);
$sunr2 =date('G.i', $result['sunrise']);
$suns3 =date('G.i', $result['sunset']);
$sunr3 =date('G.i', $result['sunrise']);
$sunrisehour =date('G', $result['sunrise']);
$sunsethour =date('G', $result['sunset']);
$twighlight_begin =date('G:i', $result['civil_twilight_begin']);
$twighlight_end =date('G:i', $result['civil_twilight_end']);
$now =date('G.i');?>
<div class="updatedtimecurrent">
<?php $forecastime=filemtime('jsondata/metar34.txt');
	$weather34wuurl = file_get_contents("jsondata/metar34.txt");
	if(filesize('jsondata/metar34.txt')<160){echo $online;}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="darkskyiconcurrent"><span1>
<?php 

//rain
  
//lightning
if ($weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600 && $weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/tstorm.svg' width='70px' height='60px' alt='weather34 rain lightning icon'>";}
else if ($weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600 ){echo "<img rel='prefetch' src='css/icons/lightning.svg' width='70px' height='60px' alt='weather34 rain lightning icon'>";}


//rain-weather34
else if($weather["rain_rate"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 rain icon'>";}

//fog-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now >$suns2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='70px' height='60px' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now <$sunr2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='70px' height='60px' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/fog.svg' width='70px' height='60px' alt='weather34 fog'>";}
//override


//windy moderate
else if($weather["wind_speed_avg"]>20 && $now >$suns2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>20 && $now <$sunr2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>20){echo "<img rel='prefetch' src='css/icons/windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";}

//metar with darksky fallback
else if(filesize('jsondata/metar34.txt')<160){
if($now >$suns2){echo "<img rel='prefetch' src='css/darkskyicons/nt_".$darkskycurIcon.".svg'width='70px' height='60px' alt='weather34 darksky night icon'>";}
else if($now <$sunr2){echo "<img rel='prefetch' src='css/darkskyicons/nt_".$darkskycurIcon.".svg'width='70px' height='60px' alt='weather34 darksky after midnight icon'>";}
else echo "<img rel='prefetch' src='css/darkskyicons/".$darkskycurIcon.".svg'width='70px' height='60px' alt='weather34 darksky current icon'>";} 	
else echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='70px' height='60px'>";
?></div>
<div class="darkskysummary"><span>

<?php 

echo '';
//lightning
if($weatherflowoption=='yes' &&  $weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600 && $weather["rain_rate"]>0){echo "<oblue>Rain</oblue> <oorange>Lightning ".$alert." <br>Caution<br>";}
else if ($weatherflowoption=='yes' &&  $weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600){echo "<oorange>Nearby Lightning  ".$alert."</oorange> <br>".$lang['Conditions']."" ;}

//rain-weather34
else if($weather["rain_rate"]>=20){echo "Heavy Rain"; echo '<br>';echo "Flooding Possible";}
else if($weather["rain_rate"]>=10){echo "Heavy Rain"; echo '<br>Showers';}
else if($weather["rain_rate"]>=5){echo "Moderate Rain"; echo '<br>Showers';}
else if($weather["rain_rate"]>=1){echo "Steady Rain";echo '<br>Showers';}
else if($weather["rain_rate"]>0){echo "Light Rain";echo '<br>Showers';}
//fog-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $now >$suns2 && $weather["temp"]>5){echo "Misty Fog <br>Conditions ".$alert."";}
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $now <$sunr2 && $weather["temp"]>5) {echo "Misty Fog<br>Conditions ".$alert."";}
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $weather["temp"]>5){echo "Misty Fog <br>Conditions ".$alert."";}
//misty-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now >$suns2 && $weather["temp"]>5){echo "Misty <br>Conditions";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now <$sunr2 && $weather["temp"]>5) {echo " Misty <br>Conditions";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $weather["temp"]>5){echo "Misty <br>Conditions";}

//windy-weather34
else if($weather["wind_speed_avg"]>40){echo "Strong Wind ".$alert."<br>Conditions" ;}
else if($weather["wind_speed_avg"]>30){echo "Very Windy ".$alert."<br>Conditions";}
else if($weather["wind_speed_avg"]>20){echo "Moderate Wind <br>Conditions";}

else if(filesize('jsondata/metar34.txt')<160){echo "<uppercase>",$darkskycurSummary ," <br>Conditions</uppercase>";}
//metar conditions
else echo '<uppercase>',$sky_desc.'</uppercase>'; 

?>
</span></div>
<!-- Darksky Hourly Next 3 hours HOMEWEATHER STATION--> 
<div class="darkskynexthours">

<?php 

echo $lang['Hourlyforecast'];echo "<br>";
//weather34 darksky script for current conditions next hours
      $hi = 0;
      foreach ($darkskyhourlyCond as $cond) {
        $darkskyhourlyTime = $cond['time'];
        $darkskyhourlySummary = $cond['summary'];
        $darkskyhourlyIcon = $cond['icon'];
        $darkskyhourlyTemp = round($cond['temperature']);            
         $darkskyhourlyWinddir = $cond['windBearing'];
			$darkskyhourlyuv = $cond['uvIndex'];
			$darkskyhourlyClouds = $cond['cloudCover']*100;
            $darkskyhourlyHumidity = $cond['humidity']*100;
            $darkskyhourlyPrecipProb = $cond['precipProbability']*100;
            if (isset($cond['precipType'])){
            $darkskyhourlyPrecipType = $cond['precipType'];}
			$darkskyhourlyprecipIntensity = number_format($cond['precipIntensityMax'],1);         
            $darkskyhourlyWindSpeed = round($cond['windSpeed'],0);
			$darkskyhourlyWindGust = round($cond['windGust'],0);   
			
			echo " ".$lang['Temperature']." ";
			//celsius
			if($tempunit=="C" && $darkskyhourlyTemp>=20){echo "<oorange>" .$darkskyhourlyTemp."</oorange>°".$tempunit;} 
			else if($tempunit=="C" && $darkskyhourlyTemp<=10){echo "<oblue>" .$darkskyhourlyTemp."</oblue>°".$tempunit;}
			else if($tempunit=="C" && $darkskyhourlyTemp<20){echo "<ogreen>" .$darkskyhourlyTemp."</ogreen>°".$tempunit;} 			
			//fahrenheitt
			if($tempunit=="F" && $darkskyhourlyTemp>=65){echo "<oorange>" .$darkskyhourlyTemp."</oorange>°".$tempunit;}
			else if($tempunit=="F" && $darkskyhourlyTemp<=40){echo "<oblue>" .$darkskyhourlyTemp."</oblue>°".$tempunit;}   
			else if($tempunit=="F" && $darkskyhourlyTemp<65){echo "<ogreen>" .$darkskyhourlyTemp."</ogreen>°".$tempunit;} 
			echo  "<ogreen> ".$darkskyhourlySummary."	</ogreen>".$lang['Conditions'].". <oorange><br>".$lang['Windspeed']. " "  .$lang['Gust']."</oorange> ";
			if($tempunit=="C" && $darkskyhourlyWindGust>=40){echo "<oorange>" .$darkskyhourlyWindGust."</oorange> ".$windunit;} 			
			else if($tempunit=="C" && $darkskyhourlyWindGust>=0){echo "<ogreen>" .$darkskyhourlyWindGust."</ogreen> ".$windunit;} 	
			
			if($tempunit=="F" && $darkskyhourlyWindGust>=30){echo "<oorange>" .$darkskyhourlyWindGust."</oorange> ".$windunit;} 
			else if($tempunit=="F" && $darkskyhourlyWindGust>=0){echo "<ogreen>" .$darkskyhourlyWindGust."</ogreen> ".$windunit;}			
			echo ". ".$lang['Rainfall']."   ".$rainsvg." ".$darkskyhourlyPrecipProb. "%<oblue> " .$darkskyhourlyprecipIntensity."</oblue> " .$rainunit;  
			
			//uvindex forecast
			echo "<br><oorange>UVI</oorange> ".$lang['Forecast']. " ";
			if ($darkskyhourlyuv>=8){ echo "<uviforecasthourred>"  .$darkskyhourlyuv."</uviforecasthourred>".$uvhigh ;}
			else if ($darkskyhourlyuv>=6){ echo "<uviforecasthourorange>"  .$darkskyhourlyuv."</uviforecasthourorange>".$uvnormal ;}
			else if ($darkskyhourlyuv>=3){ echo "<uviforecasthouryellow>"  .$darkskyhourlyuv."</uviforecasthouryellow>".$uvnormal ;}
			else if ($darkskyhourlyuv>=0.1){ echo "<uviforecasthourgreen>"  .$darkskyhourlyuv."</uviforecasthourgreen>".$uvnormal ;}
			else echo "<uviforecasthourgreen>"  .$darkskyhourlyuv."</uviforecasthourgreen>".$uvdark ;
			
      if ($hi++ == 0) break; };?>   
    </div></div>