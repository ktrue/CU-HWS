<?php include_once('livedata.php');header('Content-type: text/html; charset=utf-8');?>       
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo $weather["time"];
$weather["cloudbase3"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) * 1000 /2.4444) ;
?></div>
  <div class="weather34-aqi-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php  //air quality	
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
	
	if ($aqiweather["aqi"]>301){echo '<div class="bar bar-inner1000" style="max-height:90px; height: ';echo $aqiweather["aqi"]/4;}	
	else if ($aqiweather["aqi"]>201){echo '<div class="bar bar-inner700" style="max-height:90px; height: ';echo $aqiweather["aqi"]/4;}	
	else if ($aqiweather["aqi"]>151){echo '<div class="bar bar-inner600" style="max-height:90px; height: ';echo $aqiweather["aqi"]/3;}	
	else if ($aqiweather["aqi"]>101){echo '<div class="bar bar-inner400" style="max-height:90px; height: ';echo $aqiweather["aqi"]/3;}
	else if ($aqiweather["aqi"]>=51){echo '<div class="bar bar-inner200" style="max-height:90px; height: ';echo $aqiweather["aqi"]/3;}
	else if ($aqiweather["aqi"]>=10){echo '<div class="bar bar-inner1" style="background:rgba(144, 177, 42, 0.6);max-height:90px; height: ';echo $aqiweather["aqi"]/1.25;}
	else if ($aqiweather["aqi"]>=0){echo '<div class="bar bar-inner1" style="background:rgba(144, 177, 42, 0.6);max-height:90px; height: ';echo $aqiweather["aqi"]+1;}	
	?>px;"></div></div></div>
 <div class="weather34solarrate"><span><?php
  if ($aqiweather["aqi"]==0)	echo  "<greyuv>",number_format($aqiweather["aqi"],1) , "</greyuv><solarwm2> AQI</solarwm2>";
  else if ($aqiweather["aqi"]>=301)	echo  "<purpleuv>",number_format($aqiweather["aqi"],1), "</purpleuv><solarwm2> AQI</solarwm2>";		
  else if ($aqiweather["aqi"]>=201)	echo  "<purpleuv>",number_format($aqiweather["aqi"],1), "</purpleuv><solarwm2> AQI</solarwm2>";	
  else if ($aqiweather["aqi"]>=151)	echo  "<reduv>",number_format($aqiweather["aqi"],1), "</reduv><solarwm2> AQI</solarwm2>";
  else if ($aqiweather["aqi"]>=101)	echo  "<orangeuv>",number_format($aqiweather["aqi"],1), "</orangeuv><solarwm2> AQI</solarwm2>";	
  else if ($aqiweather["aqi"]>=51)	echo  "<yellow>",number_format($aqiweather["aqi"],1), "</yellow><solarwm2> AQI</solarwm2>";
  else if ($aqiweather["aqi"]>=0)	echo  "<greenuv>",number_format($aqiweather["aqi"],1), "</greenuv><solarwm2> AQI</solarwm2>";
?></div>

<div class="weather34i-cloud-bar">
<div class="bar bar-1" style="height:100px;max-height:100px;"> 
<?php //cloudbase weather34
echo '<div class="bar bar-inner" style="max-height:90px;height: ';echo $weather["cloudbase3"]/100;?>px;">
</div></div></div>
<div class="weather34icloud">
<?php  if ($cloudbase=="feet"){ echo  "",$weather["cloudbase3"], "<br><span>Feet</span>";}
 else if ($cloudbase=="metres"){echo  "",round($weather["cloudbase3"]*0.3048,0), "<br><span>Meters</span>";}?>
</span></div></div>

<div class="weather34-solarrate1-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php // solar radiation	 
	if ($weather["solar"]>1000){echo '<div class="bar bar-inner1000" style="max-height:90px;height: ';echo $weather["solar"]/14;}	
	else if ($weather["solar"]>700){echo '<div class="bar bar-inner700" style="max-height:90px;height: ';echo $weather["solar"]/12;}	
	else if ($weather["solar"]>600){echo '<div class="bar bar-inner600" style="max-height:90px;height: ';echo $weather["solar"]/12;}	
	else if ($weather["solar"]>400){echo '<div class="bar bar-inner400" style="max-height:90px;height: ';echo $weather["solar"]/12;}
	else if ($weather["solar"]>=1){echo '<div class="bar bar-inner1" style="max-height:90px;height: ';echo $weather["solar"]/12;}		
	else if ($weather["solar"]>=0){echo '<div class="bar bar-inner1" style="max-height:90px;height: ';echo $weather["solar"]+1;}	
	?>px;">	
    </div></div>    
  </div> <div class="weather34uvrate"><span><?php 
 if ($weather["solar"]>1000){echo  "<purpleuv>",$weather["solar"], "</purpleuv><solarwm2> Wm/<sup>2</sup></solarwm2>";}
	else if ($weather["solar"]>500){echo  "<reduv>",$weather["solar"], "</reduv><solarwm2> Wm/<sup>2</sup></solarwm2>";}
	else if ($weather["solar"]>300){echo  "<orangeuv>",$weather["solar"], "</orangeuv><solarwm2> Wm/<sup>2</sup></solarwm2>";}
	else if ($weather["solar"]>=100){echo  "<yellow>",$weather["solar"], "</yellow><solarwm2> Wm/<sup>2</sup></solarwm2>";}
	else if ($weather["solar"]>=0){echo  "<greenuv>",$weather["solar"], "</greenuv><solarwm2> Wm/<sup>2</sup></solarwm2>";}	
?> </span></div>
