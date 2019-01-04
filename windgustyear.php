<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 
 //weather34 current month wind gust 
if ($weather["windmmax"]>60){ 
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ored>", $weather["windmmax"] ;
echo "</ored><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windmmaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }
 
else if ($weather["windmmax"]>40){ 
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><oorange>", $weather["windmmax"] ;
echo "</oorange><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windmmaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }

else if ($weather["windmmax"]>-1){ 
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><yellow>", $weather["windmmax"] ;
echo "</yellow><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windmmaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }
 

?>
</div></div>
<div class="yesterdaymin">
<?php 
 //weather34 year wind gust
 
 if ($weather["windymax"]>60){ 
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>2018</div><ored>", $weather["windymax"] ;
 echo "</ored><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windymaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }
 
 else if ($weather["windymax"]>40){ 
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>2018</div><oorange>", $weather["windymax"] ;
 echo "</oorange><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windymaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }
 
 else if ($weather["windymax"]>-1){ 
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><yellow>", $weather["windymax"] ;
 echo "</yellow><spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windymaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; }
 
 
 
?>
</div>