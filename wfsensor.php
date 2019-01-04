<?php error_reporting(0);include('settings.php');
$section = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/device/'.$weatherflowdairID.'?api_key='.$somethinggoeshere.'');file_put_contents('jsondata/weatherflow1.txt',$section);
$section = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/device/'.$weatherflowdskyID.'?api_key='.$somethinggoeshere.'');file_put_contents('jsondata/weatherflow3.txt',$section);
$section1 = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'');file_put_contents('jsondata/weatherflow.txt',$section1);
if(file_exists('jsondata/weatherflow2.txt')&&time()- filemtime('jsondata/weatherflow2.txt')<900)
{sleep(0);}else{sleep(1);
$url='https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'';$json=file_get_contents($url);
$wfcachefile=fopen("jsondata/weatherflow2.txt","w");fwrite($wfcachefile,$json);fclose($wfcachefile);}
?>


<?php include('livedata2.php');
header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<?php 
 //weatherflow air temperature
 if ($weather["temp_units"]=='C' && $weatherflow['temperature']<=10){echo "<div class=\"circleindoortemp\"><blue>", $weatherflow['temperature'] ;echo "&deg; </blue><spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } 
 else if ($weather["temp_units"]=='C' && $weatherflow['temperature']<=24){echo "<div class=\"circleindoortemp\">", $weatherflow['temperature'] ;echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } 
 else if ($weather["temp_units"]=='C' && $weatherflow['temperature']>26){ echo "<div class=\"circleindoortemphot\">", $weatherflow['temperature'];echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } 
 else if ($weather["temp_units"]=='C' && $weatherflow['temperature']>24){ echo "<div class=\"circleindoortempwarm\">", $weatherflow['temperature'];echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; }  
 //fahrenheit
 if ($weather["temp_units"]=='F' && $weatherflow['temperature']<=50){echo "<div class=\"circleindoortemp\"><blue>", $weatherflow['temperature'] ;echo "&deg; </blue><spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }
 else if ($weather["temp_units"]=='F' && $weatherflow['temperature']<=70){echo "<div class=\"circleindoortemp\">", $weatherflow['temperature'] ;echo "&deg; <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }
 else if ($weather["temp_units"]=='F' && $weatherflow['temperature']>80){echo "<div class=\"circleindoortemphot\">", $weatherflow['temperature'];echo "&deg; <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }
 else if ($weather["temp_units"]=='F' && $weatherflow['temperature']>70){echo "<div class=\"circleindoortempwarm\">", $weatherflow['temperature'];echo "&deg; <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }  
?>

</div>
<div class="homeindoorfeels" style="margin-top:-28px;">
<?php //weatherflow air humidity
echo "<spanhomeindoorhumtitle>Humidity </spanhomeindoorhumtitle><orange>" .$weatherflow['humidity']."%"?>

<br>
<?php  //weatherflow air dewpoint/wetbulb
//celsius dewpoint
if ($weather["temp_units"]=='C')
echo "<spanfeelstitle>Dewpoint <orange>" .$weatherflow['dewpoint']. " </blue> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";
//fahrenheit dewpoint
else if ($weather["temp_units"]=='F')
echo "<spanfeelstitle>Dewpoint <orange>" .$weatherflow['dewpoint']. "</blue> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";
?>



<br>
<?php 
//weatherflow air celsius windchill,heatindex,feels
//windchill
$a='';
if ($weather["temp_units"]=='C' && $weather["windchill2"]==$a)
echo "<spanfeelstitle><blue></spanfeelstitle>";
else if ($weather["temp_units"]=='C' && $weather["windchill2"]<4)
echo "<spanfeelstitle>Wind Chill <blue>" .$weather["windchill2"]. " </blue> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";
//heatindex
else if ($weather["temp_units"]=='C' && $weather["heat_index2"]>=27)
echo "<spanfeelstitle>Heat Index <orange>" .$weather["heat_index2"]. " </blue> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";
//feel
else if ($weather["temp_units"]=='C' && $weather["temp_feel2"]<10)
echo "<spanfeelstitle>Feels <blue>" .$weather["temp_feel2"]. "</blue> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";

else if ($weather["temp_units"]=='C' && $weather["temp_feel2"]>20)
echo "<spanfeelstitle>Feels <orange>" .$weather["temp_feel2"]. "</orange> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";

else if ($weather["temp_units"]=='C' && $weather["temp_feel2"]>10)
echo "<spanfeelstitle>Feels <green>" .$weather["temp_feel2"]. "</green> &deg; </spanfeelstitle>  ".$weatherunitcsmall."";

//weatherflow air air celsius windchill,heatindex,feels
//windchill

$a='';
if ($weather["temp_units"]=='F' && $weather["windchill2"]==$a)
echo "<spanfeelstitle><blue></spanfeelstitle>";

else if ($weather["temp_units"]=='F' && $weather["windchill2"]<40)
echo "<spanfeelstitle>Wind Chill <blue>" .$weather["windchill2"]. " </blue> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";
//heatindex
else if ($weather["temp_units"]=='F' && $weather["heat_index2"]>=80.6)
echo "<spanfeelstitle>Heat Index <orange>" .$weather["heat_index2"]. " </blue> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";
//feel
else if ($weather["temp_units"]=='F' && $weather["temp_feel2"]<43)
echo "<spanfeelstitle>Feels <blue>" .$weather["temp_feel2"]. "</blue> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";

else if ($weather["temp_units"]=='F' && $weather["temp_feel2"]>60)
echo "<spanfeelstitle>Feels <green>" .$weather["temp_feel2"]. "</green> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";

else if ($weather["temp_units"]=='F' && $weather["temp_feel2"]>43)
echo "<spanfeelstitle>Feels <orange>" .$weather["temp_feel2"]. "</orange> &deg; </spanfeelstitle>  ".$weatherunitfsmall."";

?>
</div>