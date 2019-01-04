<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 
 //weather34 temperture indoor celsius
 
 if ($weather["temp_units"]=='C' && $weather["tempydmax"]>30){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><red>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;} 

 else if ($weather["temp_units"]=='C' && $weather["tempydmax"]>18){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><orange>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["tempydmax"]>10){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><green>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["tempydmax"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><blue>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 //weather34 fahrenheit
if ($weather["temp_units"]=='F' && $weather["tempydmax"]>90){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><red>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='F' && $weather["tempydmax"]>65){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><orange>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["tempydmax"]>47){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><green>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["tempydmax"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><blue>", $weather["tempydmax"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmaxtime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
?>
</div></div>
<div class="yesterdaymin">
<?php 
 //weather34 temperture indoor celsius
 if ($weather["temp_units"]=='C' && $weather["tempydmin"]>30){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><red>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='C' && $weather["tempydmin"]>18){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><orange>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["tempydmin"]>10){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><green>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='C' && $weather["tempydmin"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><blue>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 //weather34 fahrenheit
 if ($weather["temp_units"]=='F' && $weather["tempydmin"]>90){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><red>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}

 else if ($weather["temp_units"]=='F' && $weather["tempydmin"]>80){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><orange>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["tempydmin"]>47){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><green>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
 
 else if ($weather["temp_units"]=='F' && $weather["tempydmin"]>-50){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><blue>", $weather["tempydmin"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf."<yesterdaytimemax> ".$weather["tempydmintime"]."</yesterdaytimemax></spaneindoortemp> </div><div class='yesterdaytempword'> Temp</div>" ;}
?>
</div>