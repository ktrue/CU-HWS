<?php include_once('common.php');include_once('livedata.php');
# includes barometer units issue fix from lightmaster https://www.wxforum.net/index.php?topic=36011.0
# fix deprecated curly brace addressing in array
header('Content-type: text/html; charset=utf-8');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer"]*50.6;}?>deg);}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.6;}?>deg);}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.6;}?>deg);}
</style>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<div class='barometermax'>
<?php echo '<div class=barometerorange>Max ('.$weather["thb0seapressmaxtime"].')<br><span>',$weather["barometer_max"],'&nbsp;',$weather["barometer_units"],' </span></div>';?></div>
<div class='barometermin'>
<?php echo '<div class=barometerblue>Min ('.$weather["thb0seapressmintime"].')<br><span>',$weather["barometer_min"],'&nbsp;',$weather["barometer_units"],' </span></div>';?></div>

<div class="barometertrend2">
<?php  echo "Trend";
if ($weather["barometer_trend"] > 20  && $weather["barometer_trend"] < 100)  {echo '<rising><rise> '.$risingsymbol.' </rise><span>';echo number_format($weather["barometer_trend"],2), '</rising><units> ';echo $weather["barometer_units"], '</units>';}
else if ($weather["barometer_trend"] < 0) {
echo '<falling><fall> '.$fallingsymbol.'</fall><span> '; echo number_format($weather["barometer_trend"],2), '</falling><units> ';echo $weather["barometer_units"], '</units>';}
else if ($weather["barometer_trend"] > 0 && $weather["barometer_trend"] < 100) {
echo '<rising><rise> '.$risingsymbol.' </rise><span>';echo number_format($weather["barometer_trend"],2), '</rising><units> ';echo $weather["barometer_units"], '</units>';}	  
else echo '<ogreen> '.$steadysymbol.'</ogreen><steady><ogreen>Steady</ogreen></steady></div>';?>
</div>

<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php if ($weather["barometer_trend"]>20){echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';}
else if ($weather["barometer_trend"] < 0) {
echo '<div class="pressuretext"> <oblue>'.$lang['Falling'].'</oblue> <fall> '.$fallingsymbol.'</fall></div>';}
else if ($weather["barometer_trend"] > 0) {
echo '<div class="pressuretext"> <oorange>'.$lang['Rising'].'</orange> <rise> '.$risingsymbol.' </rise></div>';}
else echo '<div class="pressuretext"> <ogreen>'.$lang['Steady'].'</ogreen> </div>';?>
<?php echo "<darkgrey>".$weather["barometer"],"</darkgrey>&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>

<div class="barometerconverter">
<?php echo "";
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo "<div class=barometerconvertercircleblue>" .number_format($weather["barometer"]*0.029529983071445,2),"<smallrainunit>inHg</smallrainunit>";}
else if ($weather["barometer_units"]=='inHg'){echo "<div class=barometerconvertercircleblue>".round($weather["barometer"]*33.863886666667,1),"<smallrainunit>hPa</smallrainunit>";}
?></div></div>
</span>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo "<weather34-barometerlimitmin>950</weather34-barometerlimitmin><weather34-barometerlimitmax>1050</weather34-barometerlimitmax>";}
else echo "<weather34-barometerlimitminf>28</barometerlimitminf><weather34-barometerlimitmaxf>31</weather34-barometerlimitmaxf>";?></div></div>

<?php // Pop up Notification 

    if ($notifications == 'yes') {

        $notificationText = "";

        if ($weather["uv"] >= 8) {                          //WEATHER34 pure css UV-Index above 8 pop up alert 
            $notificationText = $notificationText."<notifyorange> UV Index </notifyorange><br>".$weather["uv"]." Reduce Sun Exposure<br>";
        }

        if (anyToC($weather["heat_index"])>=30) {           //WEATHER34 pure css temperature heat index above 30c/84F  pop up alert 
            $notificationText = $notificationText."<notifyorange> Heat Index </notifyorange><br>Heat Exhaustion ".$weather["heat_index"]."&deg".$weather["temp_units"]."<br>";
        }

        if ($weather["wind_gust_speed"] * $toKnots > 34) {  //WEATHER34 pure css wind gusts of 40kmh to Gale Force pop up alert 
            $notificationText = $notificationText."<notifyorange>Wind Gusts</notifyorange><br>Strong gust ".$weather["wind_gust_speed"]." ".$weather["wind_units"]."<br>";
        }

        if (anyToC($weather["temp"]) < 0) {                 //WEATHER34 pure css temperature  below 0c/32F  pop up alert
            $notificationText = $notificationText."<notifyorange>Temperature</notifyorange><br>Below Freezing ".$weather["temp"]." &deg".$weather["temp_units"]."<br>";
        } else  {                                           // If not temp is below 0 check if dewpoint is near
            if (anyToC($weather["dewpoint"]) < 1) {         //WEATHER34 pure css near freezing dewpoint below 0c/32F pop up alert 
                if (anyToC($weather["dewpoint"]) < 0) { 
                    $notificationText = $notificationText."<notifyorange>Dewpoint</notifyorange><br>Below Freezing ".$weather["dewpoint"]." &deg".$weather["temp_units"]."<br>";    
                } 
                else {
                    $notificationText = $notificationText."<notifyorange>Dewpoint</notifyorange><br>Near Freezing ".$weather["dewpoint"]." &deg".$weather["temp_units"]."<br>";    
                }
            }
        }

        date_default_timezone_set($TZ);                     //earthquakes magnitude 6+
        $json_string = file_get_contents('jsondata/eqnotification.txt');
        $parsed_json = json_decode($json_string, true);
        $magnitude = array();
        $eqtitle = array();
        $depth = array();
        $time = array();
        $lati = array();
        $longi = array();
        $eventime = array();
        for ($i = 0; $i < 6; $i++) {                        // Just check the 6 newest measures  
            $magnitude[$i] = $parsed_json[$i]['magnitude'];
            $eqtitle[$i] = $parsed_json[$i]['title'];
            $depth[$i] = $parsed_json[$i]['depth'];
            $time[$i] = $parsed_json[$i]['date_time'];
            $lati[$i] = $parsed_json[$i]['latitude'];
            $longi[$i] = $parsed_json[$i]['longitude'];
            $eventime[$i] = date($timeFormatShort, strtotime($time[$i]));
            $eqdist[$i] = round(distance($lat, $lon, $lati[$i], $longi[$i]));
            if ($magnitude[$i] >= 6.5){
                $notificationText = $notificationText."<notifyorange>Earthquake</notifyorange><br>".$eqtitle[$i]." ".$eventime[$i];
                break;
            }
        }

        if ($notificationText != "") { ?>
                <div id="weather34lightningdialog-notify">
                <div class="weather34lightningdialog-box">
                    <div class="weather34lightningbackground-alert"></div>
                        <div class="header">
                            <div class="weather34lightningbackground-alert"></div>
                            <div class="weather34lightningcontents">
                                <div class="left"><?php echo $notification ?> Notification</div>
                                <div class="right"><?php echo date("D H:i") ?></div>
                            </div>
                        </div>
                    <div class="weather34lightningcontents weather34lightningmain-content">
                        <?php echo  $notificationText; ?>
                    </div>
            <?php ; 
        }
    } 
?>
