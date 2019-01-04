<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 
 //weather34 temperture indoor celsius
 
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><red>", $weather["windmmax"] ;
echo "<spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windmmaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; 

 
 
 
?>
</div></div>
<div class="yesterdaymin">
<?php 
 //weather34 temperture indoor celsius
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>2018</div><red>", $weather["windymax"] ;
 echo "<spanewind> ".$weather["wind_units"]."<windyeartimemax> ".$weather["windymaxtime2"]."</windyeartimemax></spanewind> </div><div class='yesterdaytempword'> Gust</div>" ; 

?>
</div>