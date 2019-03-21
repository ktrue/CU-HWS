<?php include('livedata.php');include('common.php');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<div class="tempcontainer">
<div class="maxdata"><?php 
if ($weather["temp_today_high"]<10){echo "&nbsp;".$weather["temp_today_high"]."&deg;\n";?> | <?php echo $weather["temp_today_low"]."&deg;";}
else if ($weather["temp_today_high"]>=10){echo $weather["temp_today_high"]."&deg;\n";?> | <?php echo $weather["temp_today_low"]."&deg;";}?>

</div>
<?php //weather34 sez lets make the temperature look nice 
if($weather["temp_units"]=='C' && $weather['temp']<=-10){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<=-5){echo '<div class=outsideminus>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<=0){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<=5){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<10){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<15){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<20){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<25){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<30){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<35){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<40){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<45){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='C' && $weather['temp']<100){echo '<div class=outside50>'.number_format($weather['temp'],1).'&deg;';}
//non metric
if($weather["temp_units"]=='F' && $weather['temp']<=14){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<=23){echo '<div class=outsideminus>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<=32){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<=41){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<50){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<59){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<68){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<77){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<86){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<95){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<104){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<113){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'&deg;';}
else if($weather["temp_units"]=='F' && $weather['temp']<212){echo '<div class=outside50>'.number_format($weather['temp'],1).'&deg;';}
?>
</div>
<div class="temptrendx">
<?php echo $weather["temp_trend"]." </span>\n";
//falling
if($weather["temp_trend"]<0){echo '<trendmovementfallingx><span>&nbsp;&nbsp;'.$lang['Trend'].'</span> '.$tempfallingsymbol.' '.number_format($weather["temp_trend"],1).'&deg;</trendmovementfallingx>';}
//rising
elseif($weather["temp_trend"]>0){echo '<trendmovementrisingx><span>&nbsp;&nbsp;'.$lang['Trend'].'</span> '.$temprisingsymbol.' '.number_format($weather["temp_trend"],1).'&deg;</trendmovementrisingx>';}
//steady
else echo '<trendmovementsteadyx>'.$lang['Trend'].' '.$steadysymbol.$lang['Steady'].'</trendmovementsteadyx>';?>
</span></div></div></div>
<div class="heatcircle">
<div class="heatcircle-content">
<?php  //heat-index/real feel
if(anyToC($weather["heat_index"])>=28||($showFeelsLike&&anyToC($weather["temp"])>28)){echo $lang['Heatindex']." <br><div class=tempconverter1><div class=tempconvertercirclered1>".$weather["heat_index"]."&deg;".$weather["temp_units"];;}




//windchill offline with real feel 
else if ($weather["temp_units"]=='C' && $weather["windchill"]<0){ echo $lang['Windchill']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather["windchill"]."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_feel"]>=28){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercirclered1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_feel"]>=15){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_feel"]>=10){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleyellow1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_feel"]<5 ){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_feel"]<10 ){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}

else if ($weather["temp_units"]=='F' && $weather["windchill"]<35){ echo $lang['Windchill']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather["windchill"]."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_feel"]>=90){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercirclered1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_feel"]>=64){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_feel"]>=50){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleyellow1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_feel"]<50 ){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather["temp_feel"]."&deg;".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_feel"]<40 ){ echo $lang['Feelslike']."<br><div class=tempconverter1><div class=tempconvertercircleblue1>".$weather['temp_feel']."&deg;".$weather["temp_units"];}



?></div></div></div>

<div class="heatcircle2">
<div class="heatcircle-content"><?php echo $lang['Wetbulb'];?><br />
<?php //wetbulb
if ($weather["temp_units"]=='C' &&  $wetbulbx>=18){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $wetbulbx<10){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $wetbulbx<18){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx."&deg;".$weather["temp_units"];}
//non metric wetbulb
if ($weather["temp_units"]=='F' && $wetbulbx >=64){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx ."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $wetbulbx <50){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx ."&deg;".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $wetbulbx <64){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>". $wetbulbx ."&deg;".$weather["temp_units"];}?>
</div></div></div></div>


<div class="heatcircle3">
<div class="heatcircle-content"><?php echo $lang['Humidity'];?>
<?php //humidity
if ($weather["humidity"]>90){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["humidity"];}
else if ($weather["humidity"]>85){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["humidity"];}
else if ($weather["humidity"]>60){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["humidity"];}
else if ($weather["humidity"]>40){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["humidity"];}
else if ($weather["humidity"]>=0){echo "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather["humidity"];}
?>%



<?php //humidity trend
if(array_key_exists("humidity_trend",$weather)){if($weather["humidity_trend"]>0){
echo '<rise>&nbsp;'.$risingsymbol.'</rise>';}
else if($weather["humidity_trend"]<0){
echo ' <fall>&nbsp;'.$fallingsymbol.'</fall>';}
else{ echo ''.$steadysymbol.'';}}?></span></div>
</div></div></div>
<div class="heatcircle4">
<div class="heatcircle-content"><?php echo $lang['Dewpoint'];?>
<?php //dewpoint
if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>20)){ echo  "<div class=tempconverter1><div class=tempconvertercirclered1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>15)){ echo  "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=10)){ echo  "<div class=tempconverter1><div class=tempconvertercirclegreen1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]<5)){ echo   "<div class=tempconverter1><div class=tempconvertercircleblue1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]<10)){ echo   "<div class=tempconverter1><div class=tempconvertercircleblue1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}

//non metric
if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>68)){ echo  "<div class=tempconverter1><div class=tempconvertercirclered1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>59)){ echo  "<div class=tempconverter1><div class=tempconvertercircleorange1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=50)){ echo  "<div class=tempconverter1><div class=tempconvertercirclegreen1>".$weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]<40)){ echo "<div class=tempconverter1><div class=tempconvertercircleblue1>". $weather['dewpoint'].'&deg;'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]<50)){ echo "<div class=tempconverter1><div class=tempconvertercircleblue1>". $weather['dewpoint'].'&deg;'.$weather["temp_units"];}
?>
<?php //dewpoint trend
if(array_key_exists("dewpoint_trend",$weather)){
if($weather["dewpoint_trend"]>0){
echo '<rise>&nbsp;' .$risingsymbol.'</rise>';}
else if($weather["dewpoint_trend"]<0){
echo '<fall>&nbsp;' .$fallingsymbol.'</fall>';}
else{ echo ''.$steadysymbol.' ';}}?></span></div>
</div></div></div></div>





<div class="tempconverter2">
<?php
//metric to f + humidex if greter than 25c
if($weather["temp_units"]=='F' &&  anyToC($weather["temp"])>30){echo "<div class=tempconvertercirclered>".anyToC($weather["temp"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp"])>25){echo "<div class=tempconvertercircleorange>".anyToC($weather["temp"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp"])>18){echo "<div class=tempconvertercircleyellow>".anyToC($weather["temp"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp"])>10){echo "<div class=tempconvertercirclegreen>".anyToC($weather["temp"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp"])<10){echo "<div class=tempconvertercircleblue>".anyToC($weather["temp"])."&deg;C" ;}

else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])>30){echo "<div class=tempconvertercirclered>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])>25){echo "<div class=tempconvertercircleorange>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])>18){echo "<div class=tempconvertercircleyellow>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])>10){echo "<div class=tempconvertercirclegreen>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' && anyToC($weather["temp"])<10){echo "<div class=tempconvertercircleblue>".anyToF($weather["temp"])."&deg;F" ;}
?></div>


</div></div></div>

