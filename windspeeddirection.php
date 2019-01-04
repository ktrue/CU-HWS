<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE WIND SPEED/DIRECTION MODULE 2015-2018  							   #
	# 	                                                                                               #
	#   https://www.weather34.com 	 updated 30-09-2018                                                #
	####################################################################################################
include_once('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?> 
<style>.thearrow2{-webkit-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction"];?>deg);transform:rotate(<?php echo $weather["wind_direction"];?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:RGBA(255,121,58,1) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}
.thearrow2:before{content:'  o o o';color:rgba(255, 124, 57, 1);font-family:Arial, Helvetica, sans-serif;font-size:6px;width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-5px;border:2px solid RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.thearrow1{-webkit-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);position:absolute;z-index:150;top:0;left:50%;margin-left:-5px;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:0s;-moz-transition-duration:0s;-o-transition-duration:0s;-ms-transition-duration:0s;transition-duration:0s;background:0}
.thearrow1:after{content:'';position:absolute;text-align:left;left:50%;font-size:8px;top:0;width:0;height:0;-webkit-border-radius:0;border-radius:0;border-left:6px solid transparent;border-right:6px solid transparent;border-top:9px solid rgb(144, 177, 42);border-bottom:0;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;background:0}
.thearrow1:before{content:'  o o o o';color:rgb(144, 177, 42);font-family:Arial, Helvetica, sans-serif;font-size:4px;width:1px;height:1px;position:absolute;z-index:1;left:3px;top:-4px;border:2px dotted RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.avgw{ width:27px; height:27px;	margin-left:35px;-webkit-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);}spancalm{postion:relative;font-family:weathertext,Arial;font-size:26px;}</style>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div> 

<div class="windrun">
<?php 
if($weather["wind_run"] && $weather["wind_units"]=='mph'){echo '<windrun> Wind Run<br></windrun><span>',$weather["wind_run"],'</span>mi','  ';}
else if($weather["wind_run"] && $weather["wind_units"]=='km/h'){echo '<windrun>Wind Run<br></windrun><span>',$weather["wind_run"],'</span>km','  ';}
else if($weather["wind_run"] && $weather["wind_units"]=='m/s'){echo '<windrun>Wind Run<br></windrun><span>',number_format($weather["wind_run"],1),'</span>km','  ';}?>
</windrun>
</div>
<br />
<div class="windicons1">
<?php echo $weather["wind_speed"]."</windgust> \n";
if($weather["wind_speed"]*$toKnots==0){echo $wind0kts;}else if($weather["wind_speed"]*$toKnots<2.5){echo $wind2kts;}else if($weather["wind_speed"]*$toKnots<7.5){echo $wind7kts;}
else if($weather["wind_speed"]*$toKnots<12.5){echo $wind12kts;}else if($weather["wind_speed"]*$toKnots<17.5){echo $wind17kts;}else if($weather["wind_speed"]*$toKnots<22.5){echo $wind22kts;}
else if($weather["wind_speed"]*$toKnots<27.5){echo $wind27kts;}else if($weather["wind_speed"]*$toKnots<32.5){echo $wind32kts;}else if($weather["wind_speed"]*$toKnots<37.5){echo $wind37kts;}
else if($weather["wind_speed"]*$toKnots<42.5){echo $wind42kts;}else if($weather["wind_speed"]*$toKnots<47.5){echo $wind47kts;}else if($weather["wind_speed"]*$toKnots<52.5){echo $wind52kts;}
else if($weather["wind_speed"]*$toKnots<57.5){echo $wind57kts;}else if($weather["wind_speed"]*$toKnots<62.5){echo $wind62kts;}else if($weather["wind_speed"]*$toKnots<300){echo $wind102kts;}
else if($weather["wind_speed"]*$toKnots<107.5){echo $wind107kts;}?></div>
<div class="beaufort1">
<?php
// Wind phrases from Beaufort scale
if($weather["wind_speed"]*$toKnots<0.57){echo '&nbsp;&nbsp;',$lang['Calm'];}
else if($weather["wind_speed"]*$toKnots<2.99){echo '&nbsp;',$lang['Lightair'];}
else if($weather["wind_speed"]*$toKnots<6.42){echo '&nbsp;',$lang['Lightbreeze'];}
else if($weather["wind_speed"]*$toKnots<10.64){echo '&nbsp;',$lang['Gentelbreeze'];}
else if($weather["wind_speed"]*$toKnots<15.51){echo '&nbsp;',$lang['Moderatebreeze'];}
else if($weather["wind_speed"]*$toKnots<22.5){echo '&nbsp;',$lang['Freshbreeze'];}
else if($weather["wind_speed"]*$toKnots<26.93){echo '&nbsp;',$lang['Strongbreeze'];}
else if($weather["wind_speed"]*$toKnots<33.38){echo '&nbsp;',$lang['Neargale'];}
else if($weather["wind_speed"]*$toKnots<40.27){echo '&nbsp;',$lang['Galeforce'] ;}
else if($weather["wind_speed"]*$toKnots<47.58){echo '&nbsp;',$lang['Stronggale'];}
else if($weather["wind_speed"]*$toKnots<55.29){echo '&nbsp;','&nbsp;',$lang['Storm'];}
else if($weather["wind_speed"]*$toKnots<63.37){echo '&nbsp;',$lang['Violentstorm'];}
else {echo '&nbsp;',$lang['Hurricane'];}?>
</div>
<div class="windspeedvalues">
<div class ="windspeedvalue">
<?php // wind speed & units
echo $weather["wind_speed"];?>
<div class="windunitidspeed">
<?php //default chosen units 
echo $weather["wind_units"]; ?> 
</div>
</div>
<div class="windgustvalue">
<?php 
if ($weather["wind_gust_speed"]>=45){echo "<windred>",number_format($weather["wind_gust_speed"],1),"</span>";}else if ($weather["wind_gust_speed"]>=35){echo "<windorange>",number_format($weather["wind_gust_speed"],1),"</span>";}
else if ($weather["wind_gust_speed"]>=30){echo "<windgreen>",number_format($weather["wind_gust_speed"],1),"</span>";}else echo number_format($weather["wind_gust_speed"],1);?>
<div class="windunitidgust">
<?php if ($weather["wind_gust_speed"]>=45){echo "<windred> &nbsp;&nbsp;&nbsp; " .$alert;}else if ($weather["wind_gust_speed"]>=35){echo "<windorange> &nbsp;&nbsp;&nbsp;  " .$alert;}
else echo $weather["wind_units"];?>
</div></span></div></div>

<?php if (array_key_exists("wind_speed_max", $weather)) { ?>

<div class="windspeedtrend1">
<?php echo "<span> Max </span>"."<max><b>".number_format($weather["wind_gust_speed_max"],1)."</max></b>"."<supmb> ".$weather["wind_units"]."</supmb> <br>Gust (".$weather["maxgusttime"].")";?></div>
<div class="windconverter"><?php 
if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]>=50){echo "<div class=windconvertercirclered1>".number_format($weather["wind_gust_speed"]*0.621371,1)." <smallrainunit>mph</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]>=35){echo "<div class=windconvertercircleorange1>".number_format($weather["wind_gust_speed"]*0.621371,1)." <smallrainunit>mph</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=5){echo "<div class=windconvertercircleblue1>".number_format($weather["wind_gust_speed"]*0.621371,1)." <smallrainunit>mph</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<35){echo "<div class=windconvertercirclegreen1>".number_format($weather["wind_gust_speed"]*0.621371,1)." <smallrainunit>mph</smallrainunit>";}

else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]>=50){echo "<div class=windconvertercirclered1>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." <smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]>=35){echo "<div class=windconvertercircleorange1>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." <smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=5){echo "<div class=windconvertercircleblue1>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." <smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<35){echo "<div class=windconvertercirclegreen1>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." <smallrainunit>kmh</smallrainunit>";}
?></div></div>


<?php } else if (array_key_exists("wind_speed_trend", $weather)) {
if ($weather["wind_speed_trend"] <> 0) { ?>
<div class="windspeedtrend1">
<?php if ($weather["wind_speed_trend"] > 0) echo "+";
echo $weather["wind_speed_trend"] . "<supmb> " . "<max>". $weather["wind_units"] ."</max>" . "</supmb> <br> ".$lang['Windspeed']."";?></div>
<?php }
if ($weather["wind_gust_speed_trend"] <> 0) { ?>
<div class="gustspeedtrend1">
<?php if ($weather["wind_gust_speed_trend"] > 0) echo "+";
 echo $weather["wind_gust_speed_trend"] . "<supmb> " . "<max>". $weather["wind_units"] ."</max>" . "</supmb> <br> ".$lang['Gust']." ";?></div>
<?php }
} ?>
<div class="homeweathercompass1"><div class="homeweathercompass-line1"><div class="thearrow2"></div><div class="thearrow1"></div></div>
 <div class="text1">  
  <div class="windvalue1" id="windvalue"><?php if( $weather["wind_speed"]==0){echo "<spancalm>",$lang['Calm'],"</spancalm>";}else echo $weather["wind_direction"],'&deg;';?></div>
 </div>
 <div class="windirectiontext1">
  <?php
  //weather34 wind direction value output   
  if($weather["wind_direction"]<=11.25){echo $lang['Northdir'] ;}
  else if($weather["wind_direction"]<=33.75){echo $lang['NNEdir'];}
  else if($weather["wind_direction"]<=56.25){echo $lang['NEdir'];}
  else if($weather["wind_direction"]<=78.75){echo $lang['ENEdir'];}
  else if($weather["wind_direction"]<=101.25){echo $lang['Eastdir'];}
  else if($weather["wind_direction"]<=123.75){echo $lang['ESEdir'];}
  else if($weather["wind_direction"]<=146.25){echo $lang['SEdir'];}
  else if($weather["wind_direction"]<=168.75){echo $lang['SSEdir'];}
  else if($weather["wind_direction"]<=191.25){echo $lang['Southdir'];}
  else if($weather["wind_direction"]<=213.75){echo $lang['SSWdir'];}
  else if($weather["wind_direction"]<=236.25){echo $lang['SWdir'];}
  else if($weather["wind_direction"]<=258.75){echo $lang['WSWdir'];}
  else if($weather["wind_direction"]<=281.25){echo $lang['Westdir'];}
  else if($weather["wind_direction"]<=303.75){echo $lang['WNWdir'];}
  else if($weather["wind_direction"]<=326.25){echo $lang['NWdir'];} 
  else if($weather["wind_direction"]<=348.75){echo $lang['NWNdir'];}
   else {echo $lang['Northdir'];}
?>
 </div>
</div>