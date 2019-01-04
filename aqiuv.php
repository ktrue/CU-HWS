<?php include_once('livedata.php');header('Content-type: text/html; charset=utf-8');?>       
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo $weather["time"];
$weather["cloudbase3"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) * 1000 /2.4444) ;
?></div>
  <span style="font-size:0">
  <div class="weather34-aqi-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 	//weather34 air quality  
if ($purpleairhardware=='yes'){$json_string             = file_get_contents("jsondata/purpleair.txt");}
else if ($purpleairhardware=='no'){$json_string         = file_get_contents("jsondata/aqi.txt");}
$parsed_json=json_decode($json_string);

if ($purpleairhardware=='yes'){$aqiweather["aqi"]=$parsed_json->{'results'}[1]->{'PM2_5Value'};}	
else if ($purpleairhardware=='no'){$aqiweather["aqi"]=$parsed_json->{'data'}->{'aqi'};}
	
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
?></span>
</div>
<div class="weather34i-cloud-bar">
<div class="bar bar-1" style="height:100px;max-height:100px;"> 
<?php //cloudbase weather34
echo '<div class="bar bar-inner" style="max-height:90px;height: ';echo $weather["cloudbase3"]/100;?>px;">
</div></div></div>
<div class="weather34icloud">
<?php  if ($cloudbase=="feet"){ echo  "",$weather["cloudbase3"], "<br><span>Feet</span>";}
 else if ($cloudbase=="metres"){echo  "",round($weather["cloudbase3"]*0.3048,0), "<br><span>Meters</span>";}?>
</span></div></div>
<div class="weather34-uvrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php //weather underground hourly UV forecast
$hi = 0;
      foreach ($darkskyhourlyCond as $cond) {     
            
			$darkskyhourlyuv = $cond['uvIndex'];
			
			  if ($hi++ == 0) break; 
}	if ($darkskyhourlyuv>10){echo '<div class="bar bar-inner10" style="height: ';}	
	else if ($darkskyhourlyuv>8){echo '<div class="bar bar-inner8" style="height: ';}	
	else if ($darkskyhourlyuv>5){echo '<div class="bar bar-inner5" style="height: ';}	
	else if ($darkskyhourlyuv>=3){echo '<div class="bar bar-inner3" style="height: ';}	
	else if ($darkskyhourlyuv>=0){echo '<div class="bar bar-inner" style="height: ';}	
	echo $darkskyhourlyuv*8+1;?>px;">
    </div></div></div>
 <div class="weather34uvrate"><span><?php 
 if ($darkskyhourlyuv>10){echo  "<purpleuv>",$darkskyhourlyuv, "</purpleuv><solarwm2> UVI</solarwm2>";}
	else if ($darkskyhourlyuv>8){echo  "<reduv>",$darkskyhourlyuv, "</reduv><solarwm2> UVI</solarwm2>";}
	else if ($darkskyhourlyuv>5){echo  "<orangeuv>",$darkskyhourlyuv, "</orangeuv><solarwm2> UVI</solarwm2>";}
	else if ($darkskyhourlyuv>=3){echo  "<yellow>",$darkskyhourlyuv, "</yellow><solarwm2> UVI</solarwm2>";}
	else if ($darkskyhourlyuv>=0){echo  "<greenuv>",$darkskyhourlyuv, "</greenuv><solarwm2> UVI</solarwm2>";}	
?>
 </span></div>