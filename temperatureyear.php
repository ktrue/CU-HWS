<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 
 //weather34 temperture min year
 
if ($weather["temp_units"]=='C' && $weather["tempymin"]>15){
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><yellow>", $weather["tempymin"] ;
echo "</yellow><spanewind2><blue> ".$weatherunitc."</blue><windyeartimemax> ".$weather["tempymintime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; } 
 
else if ($weather["temp_units"]=='C' && $weather["tempymin"]>10){
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><ogreen>", $weather["tempymin"] ;
echo "</ogreen><spanewind2><blue> ".$weatherunitc."</blue><windyeartimemax> ".$weather["tempymintime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }

else if ($weather["temp_units"]=='C' && $weather["tempymin"]>-50){
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oblue>", $weather["tempymin"] ;
echo "</oblue><spanewind2><blue> ".$weatherunitc."</blue><windyeartimemax> ".$weather["tempymintime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }


if ($weather["temp_units"]=='F'){
echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Min</div><oblue>", $weather["tempymin"] ;
echo "</oblue><spanewind2><blue> ".$weatherunitf."</blue><windyeartimemax> ".$weather["tempymintime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }

 
 
?>
</div></div>
<div class="yesterdaymin">
<?php 
 //weather34 temperture max year
 if ($weather["temp_units"]=='C' && $weather["tempymax"]>30){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ored>", $weather["tempymax"] ;
 echo "</ored><spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }
 
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>20){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><oorange>", $weather["tempymax"] ;
 echo "</oorange><spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }
 
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>15){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><yellow>", $weather["tempymax"] ;
 echo "</yellow><spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }
 
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>10){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ogreen>", $weather["tempymax"] ;
 echo "</ogreen><spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }
 
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><blue>", $weather["tempymax"] ;
 echo "<spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }

if ($weather["temp_units"]=='F'){
 echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>Max</div><ored>", $weather["tempymax"] ;
 echo "</oblue><spanewind2><orange> ".$weatherunitc."</orange><windyeartimemax> ".$weather["tempymaxtime2"]."</windyeartimemax></spanewind2> </div><div class='yesterdaytempword'> Temp</div>" ; }

?>
</div>