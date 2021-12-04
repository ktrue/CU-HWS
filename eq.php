<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');

//current eq
date_default_timezone_set($TZ);
//$json_string=file_get_contents('http://earthquake-report.com/feeds/recent-eq?json');
$json_string=file_get_contents('jsondata/eqnotification.txt');
$parsed_json=json_decode($json_string,true);
$magnitude=$parsed_json[0]['magnitude'];
$title=$parsed_json[0]['title'];
$eqtitle=$parsed_json[0]['location'];
$depth=$parsed_json[0]['depth'];
$time1=$parsed_json[0]['date_time'];
$lati=$parsed_json[0]['latitude'];
$longi=$parsed_json[0]['longitude'];
$eventime=date( $dateFormat . " " . $timeFormatShort, strtotime("$time1") );
$shorttime=date( $timeFormatShort, strtotime("$time1") );
$magnitude1=$parsed_json[1]['magnitude'];
$eqtitle1=$parsed_json[1]['location'];
$depth1=$parsed_json[1]['depth'];
$time2=$parsed_json[1]['date_time'];
$lati2=$parsed_json[1]['latitude'];
$longi2=$parsed_json[1]['longitude'];
$eventime1=date( $dateFormat . " " . $timeFormatShort, strtotime("$time2") );
?>
<?php
// CALCULATE THE DISTANCE OF LATEST EARTHQUAKE //
// de LOCATION OF HOMEWEATHER STATION //
// Brian Underdown July 28th 2016 //
$eqdist;
if ($weather["wind_units"] == 'mph') {
	$eqdist = round(distance($lat, $lon, $lati, $longi) * 0.621371) . " mi";
} else {
	$eqdist = round(distance($lat, $lon, $lati, $longi)) . " km";
}
  ?>
  <?php
// CALCULATE THE DISTANCE OF 2nd EARTHQUAKE //
// de LOCATION OF HOMEWEATHER STATION //
// Brian Underdown February 2017 //
$eqdist2;
if ($weather["wind_units"] == 'mph') {
	$eqdist2 = round(distance($lat, $lon, $lati2, $longi2) * 0.621371) . " mi";
} else {
	$eqdist2 = round(distance($lat, $lon, $lati2, $longi2)) . " km";
}
  ?>
<div class="updatedtimecurrent">
<span><?php 
$updated=filemtime('jsondata/eqnotification.txt');
echo  $online, " ",date($timeFormat, $updated);?></span>
 </div>

<br /><br /><div style="height:10px;"></div>

<!-- EQ homeweather station earthquakes now with color values 27th July 2016--> 
<?php
echo " \n";
// EQ Latest earthquake 
if ($magnitude <= 0) {
    echo "<div class=\"eq03\">${magnitude}<uvi></uvi></div><div class=\"eqtext\">  $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude <= 1) {
    echo "<div class=\"eq03\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude <= 2) {
    echo "<div class=\"eq03\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude <= 3) {
    echo "<div class=\"eq03\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude <= 4.2) {
    echo "<div class=\"eq03\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from $stationlocation</div>";
} else if ($magnitude <= 5) {
    echo "<div class=\"eq45\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude<= 6) {
    echo "<div class=\"eq5\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
} else if ($magnitude <= 10) {
    echo "<div class=\"eq08\">${magnitude}<uvi></uvi></div><div class=\"eqtext\"> $eqtitle <br><color>$eventime</color><br><depth>Depth:$depth km</depth><br>
	Epicenter: <color>$eqdist</color>  from  $stationlocation</div>";
}

?> </span>

<?php echo "";
//eq2 previous earthquake
if ($magnitude1 <1){echo "";}
else if ($magnitude1 <=4.5){echo "<div class=\"eqcircle1\">${magnitude1}<br><span><green>MINOR</green></span></div><div class=\"eqtext1\"> $eqtitle1 <br><colortext>$eventime1</colortext>
 Epicenter: <color>$eqdist2</color><br>
 $stationlocation</div>";}
else if ($magnitude1 <=6){echo "<div class=\"eqcircle2\">${magnitude1}<br><span><orange>MODERATE</orange></span></div><div class=\"eqtext1\"> $eqtitle1 <br><colortext>$eventime1</colortext> Epicenter: <color>$eqdist2</color><br>
 $stationlocation</div>";}
else if ($magnitude1 <=10){echo "<div class=\"eqcircle3\">${magnitude1}<br><span><red>MAJOR</red></span></div><div class=\"eqtext1\"> $eqtitle1 <br><colortext>$eventime1</colortext> Epicenter: <color>$eqdist2</color><br>
 $stationlocation</div>";}
?>
