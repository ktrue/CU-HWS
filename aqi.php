<?php include('common.php');include('shared.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);$software    = 'Meteobridge <span>Hardware</span>';
error_reporting(0);
$designedfor    = '<br>AQI For Meteobridge';
//weather34 simple AQI top module
if ($purpleairhardware=='yes'){
	
function pm25_to_aqi($pm25){
	if ($pm25 > 500.5) {
	  $aqi = 500;
	} else if ($pm25 > 350.5 && $pm25 <= 500.5 ) {
	  $aqi = map($pm25, 350.5, 500.5, 400, 500);
	} else if ($pm25 > 250.5 && $pm25 <= 350.5 ) {
	  $aqi = map($pm25, 250.5, 350.5, 300, 400);
	} else if ($pm25 > 150.5 && $pm25 <= 250.5 ) {
	  $aqi = map($pm25, 150.5, 250.5, 200, 300);
	} else if ($pm25 > 55.5 && $pm25 <= 150.5 ) {
	  $aqi = map($pm25, 55.5, 150.5, 150, 200);
	} else if ($pm25 > 35.5 && $pm25 <= 55.5 ) {
	  $aqi = map($pm25, 35.5, 55.5, 100, 150);
	} else if ($pm25 > 12 && $pm25 <= 35.5 ) {
	  $aqi = map($pm25, 12, 35.5, 50, 100);
	} else if ($pm25 > 0 && $pm25 <= 12 ) {
	  $aqi = map($pm25, 0, 12, 0, 50);
	}
	return $aqi;
}
function map($value, $fromLow, $fromHigh, $toLow, $toHigh){
    $fromRange = $fromHigh - $fromLow;
    $toRange = $toHigh - $toLow;
    $scaleFactor = $toRange / $fromRange;

    // Re-zero the value within the from range
    $tmpValue = $value - $fromLow;
    // Rescale the value to the to range
    $tmpValue *= $scaleFactor;
    // Re-zero back to the to range
    return $tmpValue + $toLow;
}	
	
// Aqi 
$json_string             = file_get_contents("jsondata/purpleair.txt");
$parsed_json             = json_decode($json_string);
//$aqiweather["aqi"]       = $parsed_json->{'results'}[1]->{'PM2_5Value'};
$aqiweather["aqi"]       = number_format(pm25_to_aqi(($parsed_json->{'results'}[0]->{'PM2_5Value'} + $parsed_json->{'results'}[1]->{'PM2_5Value'}) / 2),1);
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'results'}[1]->{'LastSeen'};
$aqiweather["time"]      = date("F jS D H:i",$aqiweather["time2"]);
$aqiweather["city"]      = $parsed_json->{'results'}[0]->{'ID'};
$aqiweather["label"]     = $parsed_json->{'results'}[0]->{'Label'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}


}

else if ($purpleairhardware=='no'){
$json_string             = file_get_contents("jsondata/aqi.txt");
$parsed_json             = json_decode($json_string);
$aqiweather["aqi"]       = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'aqius'};
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'ts'};
$aqiweather["time"]      = date('D jS F G:i', strtotime($aqiweather["time2"]));
$aqiweather["city"]      = $parsed_json->{'data'}->{'city'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}
}
?>

<body>
<div class="yesterdaymax">
<?php 
 //weather34 AQI
 
 if ($aqiweather["aqi"]>=301){echo "<div class=\"circleaqimaroon\"><aqiimage1><img src='css/aqi/darkmask.svg' width=52px ></aqiimage1><circleaqimaroonvalue>", $aqiweather["aqi"] ;
 echo "</circleaqimaroonvalue></div>" ;}

 else if ($aqiweather["aqi"]>=201){echo "<div class=\"circleaqipurple\"><aqiimage1><img src='css/aqi/darkmask.svg' width=52px ></aqiimage1><circleaqipurplevalue>", $aqiweather["aqi"] ;
 echo "</circleaqipurplevalue></div>" ;}
 
 else if ($aqiweather["aqi"]>=151){echo "<div class=\"circleaqired\"><aqiimage1><img src='css/aqi/darkmask.svg' width=52px ></aqiimage1><circleaqiredvalue>", $aqiweather["aqi"] ;
 echo "</circleaqiredvalue></div>" ;}
 
 else if ($aqiweather["aqi"]>=101){echo "<div class=\"circleaqiorange\"><aqiimage1><img src='css/aqi/ushdark.svg' width=52px ></aqiimage1><circleaqiorangevalue>", $aqiweather["aqi"] ;
 echo "</circleaqiredvalue></div>" ;}
 
 else if ($aqiweather["aqi"]>=51){echo "<div class=\"circleaqiyellow\"><aqiimage1><img src='css/aqi/moddark.svg' width=52px ></aqiimage1><circleaqiyellowvalue>", $aqiweather["aqi"] ;
 echo "</circleaqiyellowvalue></div>" ;}
 
 else if ($aqiweather["aqi"]>=0){echo "<div class=\"circleaqigreen\"><aqiimage1><img src='css/aqi/gooddark.svg' width=52px ></aqiimage1><circleaqigreenvalue>", $aqiweather["aqi"] ;
 echo "</circleaqigreenvalue></div>" ;}
 
?>
</div></div>

<div class="aqilocation">
<?php 
if ($aqiweather["aqi"]>=301){echo " <aqimaroon>HAZARDOUS<span2> &nbsp;&nbsp;Life Threatening ".$alert."</span2></aqimaroon><span>Air Quality</span></aqigreen>" ; }

else if ($aqiweather["aqi"]>=201){echo " <aqipurple>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERY </aqipurple> <span2>UNHEALTHY ".$alert."</span2><span>Air Quality</span></aqigreen>" ; }

else if ($aqiweather["aqi"]>=151){echo " <aqired>&nbsp;UNHEALTHY<span2> &nbsp;Health Warnings ".$alert."</span2></aqired><span>Air Quality</span></aqigreen>" ; }

else if ($aqiweather["aqi"]>=101){echo " <aqiorange>&nbsp;&nbsp;UNHEALTHY<span2>&nbsp;&nbsp;Sensitive Groups</span2><span>Air Quality</span></aqigreen>" ; }

else if ($aqiweather["aqi"]>=51){echo " <aqiyellow>&nbsp;&nbsp;&nbsp;MODERATE<span2> Air Quality</span></aqiyellow></aqigreen>" ; }

else if ($aqiweather["aqi"]>=0){echo " <aqigreen>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GOOD<span2> Satisfactory</span2></aqigreen><span>Air Quality</span></aqigreen>" ; }

else echo "Offline";
?>
 

