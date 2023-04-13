<!DOCTYPE html>
<?php // Code base from "currentconditionsmetar34davis"  ?>
<title>weather34 current conditions</title>
<style>
    uppercase {
        text-transform: capitalize;
    }
</style>
<?php include('metar34get.php'); // Unpack "jsondata/metar34.txt"
error_reporting(0);
$result = date_sun_info(time(), $lat, $lon);
$suns2 = date('G.i', $result['sunset']);
$sunr2 = date('G.i', $result['sunrise']);
$sunrisehour = date('G', $result['sunrise']);
$sunsethour = date('G', $result['sunset']);
$twighlight_begin = date('G:i', $result['civil_twilight_begin']);
$twighlight_end = date('G:i', $result['civil_twilight_end']);
$now = date('G.i');
?>
<div class="updatedtimecurrent">
    <?php $forecastime = filemtime('jsondata/metar34.txt');
    $weather34wuurl = file_get_contents("jsondata/metar34.txt");
    if (filesize('jsondata/metar34.txt') < 10) {
        echo  $online;
    } else echo $online, "";
    echo " ",    date($timeFormat, $forecastime);    ?></div>
<div class="darkskyiconcurrent">
    <span1>
        <?php
        //homeweatherstation weather34 current conditions using hardware values
        //rain-weather34
        if ($weather["rain_rate"] > 0 && $weather["wind_speed_avg"] > 15) {
            echo "<img rel='prefetch' src='css/icons/windyrain.svg' width='60px' height='55px' alt='weather34 windy rain icon'>";
        } else if ($weather["rain_rate"] > 10) {
            echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 heavy rain icon'>";
        } else if ($weather["rain_rate"] > 0) {
            echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 rain icon'>";
        } else if ($weather["rain_rate2"] > 10) {
            echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 heavy rain icon'>";
        } else if ($weather["rain_rate2"] > 0) {
            echo "<img rel='prefetch' src='css/icons/rain.svg' width='70px' height='60px' alt='weather34 rain icon'>";
        }
        //fog-weather34
        else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $now > $suns2 && $weather["temp"] > 5) {
            echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='70px' height='60px' alt='weather34 fog icon'>";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $now < $sunr2 && $weather["temp"] > 5) {
            echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='70px' height='60px' alt='weather34 fog icon'>";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $weather["temp"] > 5) {
            echo "<img rel='prefetch' src='css/icons/fog.svg' width='70px' height='60px' alt='weather34 fog'>";
        }
        //windy moderate
        else if ($weather["wind_speed_avg"] >= 15 && $now > $suns2 && $sky_icon == 'clear') {
            echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        } else if ($weather["wind_speed_avg"] >= 15 && $now < $sunr2 && $sky_icon == 'clear') {
            echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        } else if ($weather["wind_speed_avg"] >= 15 && $sky_icon == 'clear') {
            echo "<img rel='prefetch' src='css/icons/windyclear.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        }
        //windy moderate
        else if ($weather["wind_speed_avg"] >= 15 && $now > $suns2) {
            echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        } else if ($weather["wind_speed_avg"] >= 15 && $now < $sunr2) {
            echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        } else if ($weather["wind_speed_avg"] >= 15) {
            echo "<img rel='prefetch' src='css/icons/windy.svg' width='70px' height='60px' alt='weather34 windy icon'>";
        }
        //metar with darksky fallback
        else if (filesize('jsondata/metar34.txt') < 160) {
            if ($now > $suns2) {
                echo "<img rel='prefetch' src='css/darkskyicons/nt_" . $darkskycurIcon . ".svg'width='70px' height='60px' alt='weather34 darksky night icon'>";
            } else if ($now < $sunr2) {
                echo "<img rel='prefetch' src='css/darkskyicons/nt_" . $darkskycurIcon . ".svg'width='70px' height='60px' alt='weather34 darksky after midnight icon'>";
            } else echo "<img rel='prefetch' src='css/darkskyicons/" . $darkskycurIcon . ".svg'width='70px' height='60px' alt='weather34 darksky current icon'>";
        } else echo "<img rel='prefetch' src='css/icons/" . $sky_icon . "' width='70px' height='60px'>";
        ?>
</div>
<div class="darkskysummary"><span>
        <?php echo '';
                
        echo "<ored> " . $metar34stationname . "</ored><br>";

        //rain-weather34
        if ($weather["rain_rate"] > 0 && $weather["wind_speed_avg"] > 15) {
            echo "Rain Showers";
            echo '<br>';
            echo "Windy Conditions";
        } else if ($weather["rain_rate"] >= 20) {
            echo "Heavy Rain";
            echo '<br>';
            echo "Flooding Possible";
        } else if ($weather["rain_rate"] >= 10) {
            echo "Heavy Rain";
            echo '<br>Showers';
        } else if ($weather["rain_rate"] >= 5) {
            echo "Moderate Rain";
            echo '<br>Showers';
        } else if ($weather["rain_rate"] >= 1) {
            echo "Steady Rain";
            echo '<br>Showers';
        } else if ($weather["rain_rate"] > 0) {
            echo "Light Rain";
            echo '<br>Showers';
        }
        //fog-weather34
        else if ($weather["temp"] - $weather["dewpoint"] < 0.5  && $now > $suns2 && $weather["temp"] > 5) {
            echo "Misty Fog<br>Conditions " . $alert . "";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.5  && $now < $sunr2 && $weather["temp"] > 5) {
            echo "Misty Fog<br>Conditions " . $alert . "";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.5  && $weather["temp"] > 5) {
            echo "Misty Fog<br>Conditions " . $alert . "";
        }
        //misty-weather34
        else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $now > $suns2 && $weather["temp"] > 5) {
            echo "Fog Hazy<br>Conditions";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $now < $sunr2 && $weather["temp"] > 5) {
            echo " Misty Hazy<br>Conditions";
        } else if ($weather["temp"] - $weather["dewpoint"] < 0.8  && $weather["temp"] > 5) {
            echo "Misty Hazy<br>Conditions";
        }
        //windy-weather34
        else if ($weather["wind_speed_avg"] >= 40) {
            echo "Strong Wind " . $alert . "<br>Conditions";
        } else if ($weather["wind_speed_avg"] >= 30) {
            echo "Very Windy " . $alert . "<br>Conditions";
        } else if ($weather["wind_speed_avg"] >= 22) {
            echo "Moderate Wind <br>Conditions";
        } else if ($weather["wind_speed_avg"] >= 15) {
            echo "Breezy <br>Conditions";
        } else if (filesize('jsondata/metar34.txt') < 160) {
            echo "<uppercase>", $darkskycurSummary, "<br>Conditions</uppercase>";
        }
        //metar conditions
        else echo '<uppercase>', $sky_desc . '</uppercase><br>';
        ?>
    </span></div>
<!-- HOME WEATHER STATION Data-->
<div class="darkskynexthours">
    <?php //weather34 average station data
    
    if ($rainunit == "mm"){
        echo "Visibility <oblue> " . $metar34visibility . " m </oblue>";
    }
    else{
        echo "Visibility <oblue> " . $metar34visibilitymiles . " miles </oblue>";
    }

    echo "<br><ored>$stationlocation</ored>";
    echo  "<br>Average Wind Speed last hour ";

    if ($weather["wind_speed_avg"] >= 30) {
        echo "<ored>" . $weather["wind_speed_avg"] . " " . $windunit. "</ored> ";
    } else {
        echo "<oblue>" . $weather["wind_speed_avg"]. " " . $windunit . "</oblue>";
    }
    echo "<br>Rainfall Last Hour <oblue> " . $weather["rain_lasthour"]. " " . $rainunit . "</oblue> ";

    ; ?> 
    </div>
</div>
</div>
