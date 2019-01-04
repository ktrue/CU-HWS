<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 
 //weather34 temperture indoor celsius
 
 if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>27){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ored>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><ored> ".$weatherunitc."</ored><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>15){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><oorange>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><oorange> ".$weatherunitc."</oorange><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>10){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ogreen>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><ogreen> ".$weatherunitc."</ogreen><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><blue>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><oblue> ".$weatherunitc."</oblue><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 //weather34 fahrenheit
if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>90){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ored>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><ored> ".$weatherunitf."</ored><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>65){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><oorange>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><oorange> ".$weatherunitf."</oorange><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>47){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ogreen>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><ogreen> ".$weatherunitf."</ogreen><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><oblue>", $weather["temp_today_high"] ;
 echo "&deg;  <spaneindoortemp><oblue> ".$weatherunitf."</oblue><yesterdaytimemax> ".$weather["maxtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
?>


</div></div>



<div class="yesterdaymin">
<?php 
 //weather34 temperture indoor celsius
 if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>27){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><ored>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><ored> ".$weatherunitc."</ored><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>15){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oorange>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><oorange> ".$weatherunitc."</oorange><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>10){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><ogreen>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><ogreen> ".$weatherunitc."</ogreen><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oblue>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><oblue> ".$weatherunitc."</oblue><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 //weather34 fahrenheit
 if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>90){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><ored>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><ored> ".$weatherunitf."</ored><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>65){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oorange>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><oorange> ".$weatherunitf."</oorange><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>47){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><ogreen>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><ogreen> ".$weatherunitf."</ogreen><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oblue>", $weather["temp_today_low"] ;
 echo "&deg;  <spaneindoortemp><oblue> ".$weatherunitf."</oblue><yesterdaytimemax> ".$weather["lowtemptime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
?>
</div>
