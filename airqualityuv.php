<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');
// 34 Aqi 
if ($purpleairhardware=='yes'){
	
function pm25_to_aqi($pm25){
	if ($pm25 > 500.5) {
	  $aqi = 500;
	} else if ($pm25 > 350.5 && $pm25 <= 500.5 ) {
	  $aqi = map($pm25, 350.5, 500.5, 400, 500);
	} else if ($pm25 > 250.5 && $pm25 <= 350.5 ) {
	  $aqi = map($pm25, 250.5, 350.5, 300, 400);
	} else if ($pm25 > 150.5 && $pm25 <= 250.5 ) {
	  $aqi = map($pm25, 150.5, 250.5, 200, 300);
	} else if ($pm25 > 55.5 && $pm25 <= 150.5 ) {
	  $aqi = map($pm25, 55.5, 150.5, 150, 200);
	} else if ($pm25 > 35.5 && $pm25 <= 55.5 ) {
	  $aqi = map($pm25, 35.5, 55.5, 100, 150);
	} else if ($pm25 > 12 && $pm25 <= 35.5 ) {
	  $aqi = map($pm25, 12, 35.5, 50, 100);
	} else if ($pm25 > 0 && $pm25 <= 12 ) {
	  $aqi = map($pm25, 0, 12, 0, 50);
	}
	return $aqi;
}
function map($value, $fromLow, $fromHigh, $toLow, $toHigh){
    $fromRange = $fromHigh - $fromLow;
    $toRange = $toHigh - $toLow;
    $scaleFactor = $toRange / $fromRange;

    // Re-zero the value within the from range
    $tmpValue = $value - $fromLow;
    // Rescale the value to the to range
    $tmpValue *= $scaleFactor;
    // Re-zero back to the to range
    return $tmpValue + $toLow;
}	
	
// Aqi 
$json_string             = file_get_contents("jsondata/purpleair.txt");
$parsed_json             = json_decode($json_string);
//$aqiweather["aqi"]       = $parsed_json->{'results'}[1]->{'PM2_5Value'};
$aqiweather["aqi"]       = number_format(pm25_to_aqi(($parsed_json->{'results'}[0]->{'PM2_5Value'} + $parsed_json->{'results'}[1]->{'PM2_5Value'}) / 2),1);
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'results'}[1]->{'LastSeen'};
$aqiweather["time"]      = date("F jS D H:i",$aqiweather["time2"]);
$aqiweather["city"]      = $parsed_json->{'results'}[0]->{'ID'};
$aqiweather["label"]     = $parsed_json->{'results'}[0]->{'Label'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}


}

else if ($purpleairhardware=='no'){
$json_string             = file_get_contents("jsondata/aqi.txt");
$parsed_json             = json_decode($json_string);
$aqiweather["aqi"]       = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'aqius'};
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'ts'};
$aqiweather["time"]      = date('D jS F G:i', strtotime($aqiweather["time2"]));
$aqiweather["city"]      = $parsed_json->{'data'}->{'city'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Air Quality Index - UV-Index </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}

section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}
.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}
.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:31rem;height:14.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}
.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}
.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100;}

.weather34cardguide{width:27rem;height:200px;background:RGBA(37, 41, 45, 0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px;}

.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100;}


.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}
.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center;}
.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:230px;float:left;font-size:11px;text-align:left;margin-left:-50px;line-height:12px;margin-top:4px;}
.weather34card__count-text--big{font-size:30px;font-weight:200;font-family:'weathertext',sans-serif}
.weather34card__count-text--bigs{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;}
weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;}
.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37, 41, 45, 0);border:solid RGBA(156, 156, 156, 0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px;}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a;}darkred{color:#f47264}value{color:#fff}yellow{color:#c1b01e}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}
a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right;}

.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;top:8px}
.weather34-solarrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/aqirulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57, 61, 64, 1.00);border-bottom:5px solid RGBA(57, 61, 64, 1.00);border-top:3px solid RGBA(57, 61, 64, 1.00);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}
.weather34-solarrate-bar .bar-1{height:100px;max-height:100px}
.weather34-solarrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164, 117, 203, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211, 93, 78, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211, 93, 78, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(255, 124, 57, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner200{shape-rendering:crispEdges;background:RGBA(221, 181, 73, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(154, 186, 47, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal;}
.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;}solarwm2{font-size:10px;font-weight:normal;}


.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:240px;margin-top:3px}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/uvrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57, 61, 64, 1.00);border-bottom:5px solid RGBA(57, 61, 64, 1.00);border-top:3px solid RGBA(57, 61, 64, 1.00);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128, 105, 152, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:RGBA(174, 81, 82, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:RGBA(219, 118, 96, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:RGBA(221, 181, 73, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:RGBA(143, 177, 42, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal;}
.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal;}purpleuv{color:#a475cb;}reduv{color:#d65b4a;}orangeuv{color:#ff8841;}greenuv{color:#9aba2f;}greyuv{color:#aaa;}
.uvsun{position:absolute;top:10px;margin-left:100px;}.sunfade{opacity:0.8;}
</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $info ;?> Air Quality Index - UV-Index<green> <?php
			
	
	echo $locationinfo, " ", $aqilocation;
	?></green></p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php
	
	// KP INDEX
	
	if ($aqiweather["aqi"]>301)  {
	echo "<purple>",$aqiweather['aqi'] . "</value>";	} 
	
	
	else if ($aqiweather["aqi"]>=201) {
	echo "<purple>",$aqiweather['aqi'] . "</value>";}	 	
	
	
	else if ($aqiweather["aqi"]>=151) {
	
	echo "<red>",$aqiweather['aqi'] . "</value>";	} 
	
		
	else if ($aqiweather["aqi"]>=101) {
	
	echo "<orange>",$aqiweather['aqi'] . "</value>";	} 
	
	else if ($aqiweather["aqi"]>=51) {
	
	echo "<yellow>",$aqiweather['aqi'] . "</value>";	} 
	
	else if ($aqiweather["aqi"]>0) {
	
	echo "<green>",$aqiweather['aqi'] . "</value>";	}
	
	
	else {
	echo "Air Quality Index<br><span style='font-size:13px; font-family:arial;font-weight: 600'>---</span><br></aqivalue>";
	echo $aqilocation,"</aqivalue1><value>N/A</value>";}


?></span> 
<div class="weather34-solarrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 	 
	if ($aqiweather["aqi"]>250){echo '<div class="bar bar-inner1000" style="height: ';echo $aqiweather["aqi"]/4;}	
	else if ($aqiweather["aqi"]>200){echo '<div class="bar bar-inner700" style="height: ';echo $aqiweather["aqi"]/4;}	
	else if ($aqiweather["aqi"]>150){echo '<div class="bar bar-inner600" style="height: ';echo $aqiweather["aqi"]/3;}	
	else if ($aqiweather["aqi"]>100){echo '<div class="bar bar-inner400" style="height: ';echo $aqiweather["aqi"]/3;}
	else if ($aqiweather["aqi"]>=50){echo '<div class="bar bar-inner200" style="height: ';echo $aqiweather["aqi"]/3;}
	//else if ($aqiweather["aqi"]>=1){echo '<div class="bar bar-inner1" style="height: ';echo $aqiweather["aqi"]/3;}		
	else if ($aqiweather["aqi"]>=0){echo '<div class="bar bar-inner1" style="height: ';echo $aqiweather["aqi"]+1;}	
	?>px;"></div></div></div>
 Air Quality Index 
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";

	if ($kp>=301)  {
	echo "<purple> Air Quality</purple><br>";
	echo 'Hazardous Health alert ! ';
	} 
	
	else if ($aqiweather["aqi"]>201)  {
	echo "<purple> Air Quality</purple><br>";
	echo 'Very Unhealthy Health Warnings';
	} 
	
	
	else if ($aqiweather["aqi"]>151)  {
	echo "<red> Air Quality</red><br>";
	echo 'Unhealthy For Everyone';
	} 
	
	else if ($aqiweather["aqi"]>101)  {
	echo "<orange> Air Quality</orange><br>";
	echo ' Unhealthy for Sensitive Groups';
	} 
	
	else if ($aqiweather["aqi"]>=51)  {
	echo "<yellow> Air Quality</yellow><br>";
	echo 'Moderate Acceptable ';
	} 
	
	else if ($aqiweather["aqi"]>0)  {
	echo "<green> Air Quality</green><br>";
	echo 'Good Considered Satisfactory ';
	} 


?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php
			
	
	echo $aqilocation;
	?></div>
        </div>
        
        
        
        
        
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="weather34-uvrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php
 $hi = 0;
      foreach ($darkskyhourlyCond as $cond) {     
            
			$darkskyhourlyuv = $cond['uvIndex'];
			
			  if ($hi++ == 0) break; 
}	if ($darkskyhourlyuv>=10){echo '<div class="bar bar-inner10" style="height: ';}	
	else if ($darkskyhourlyuv>=8){echo '<div class="bar bar-inner8" style="height: ';}	
	else if ($darkskyhourlyuv>=5){echo '<div class="bar bar-inner5" style="height: ';}	
	else if ($darkskyhourlyuv>=3){echo '<div class="bar bar-inner3" style="height: ';}	
	else if ($darkskyhourlyuv>=0){echo '<div class="bar bar-inner" style="height: ';}	
	echo $darkskyhourlyuv*8+1;?>px;">
    </div></div></div>
 
            
            
            
               <?php //34 aqi ozone script

if ($darkskyhourlyuv>=10) echo "<purple>",$darkskyhourlyuv; 
else if ($darkskyhourlyuv >=8) echo "<purple>",$darkskyhourlyuv; 
else if ($darkskyhourlyuv >=5) echo "<red>",$darkskyhourlyuv; 
else if ($darkskyhourlyuv >=3) echo "<yellow>",$darkskyhourlyuv; 
else if ($darkskyhourlyuv >=0) echo "<green>",$darkskyhourlyuv; 

?></span> UV-INDEX
<div class="uvsun"><?php
	if ($darkskyhourlyuv>=7){echo "<img src=css/icons/uvstrong.svg width=60px>";}	
	else if ($darkskyhourlyuv>=2){echo "<img src=css/icons/clear.svg width=60px>";}		
	else if ($darkskyhourlyuv>=1){echo "<div class='sunfade'><img src=.css/icons/clear.svg width='60px'></div>";}	
	else echo "<img src=css/icons/nosunuv.svg width=60px>";
	?></div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";

	if ($darkskyhourlyuv>=10)  {
	echo "<purple><br><br> Extra Protection </purple><br>";
	echo 'Avoid being outside during midday hours!
Make sure you seek a shaded area! <orange>Sunscreen</orange> and wear a hat ,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.';
	} 
	
	else if ($darkskyhourlyuv>=8)  {
	echo "<red><br><br> Extra Protection ", $alert,"</red><br>";
	echo 'Avoid being outside during midday hours!
Make sure you seek a shaded area! Wear <orange>Sunscreen</orange> and hat ,<orange>wear sunglasses</orange>.';
	} 
	
	
	else if ($darkskyhourlyuv>=5)  {
	echo "<orange><br><br> Protection Required ", $alert,"</orange><br>";
	echo 'Seek shadea area during midday hours!
Use sunscreen and a hat for protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.';
	} 
	
	else if ($darkskyhourlyuv>=3)  {
	echo "<yellow><br><br> Protection Required ", $alert,"</yellow><br>";
	echo ' During midday hours! Use sunscreen,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.';
	} 
	
	else if ($darkskyhourlyuv>=1)  {
	echo "<green><br><br> No Cautions Required</green><br>";
	echo 'Safe for all skin types ,when <orange>sun</orange> approaches low horizon,<orange>wear sunglasses</orange>.';
	} 
	
	else if ($darkskyhourlyuv==0)  {
	echo "<green><br><br> No Caution Required</green><br>";
	echo 'The <orange>sun</orange> may be low on the horizon,obscured or below the horizon due to darkness hours.';
	
	} 


?>

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
            
            
       
</section>







<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;line-height:12px;">
             
	<?php echo $info ;?> <orange>Guide</orange><br>
<green>0-50</green> = <quiet>Good</quiet> Air quality is considered satisfactory</quiet> <br>
<yellow>50-100</yellow> = Moderate <quiet> Air quality is acceptable</quiet> <br>
<orange>100-150</orange> = Unhealthy for Sensitive Groups<quiet></quiet><br>
<red>150-200</red> = Unhealthy <quiet> Everyone may begin to <br>experience health effects</quiet> <br>
<purple>200-300</purple> = Very Unhealthy <quiet> Health warnings of <br>emergency conditions.</quiet> <br>
<darkred>300+</darkred> =  Hazardous <quiet> Health alert ! </quiet><br>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	</div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;">
           <?php echo $info ;?> <orange>Guide</orange><br>
<green>0-3</green> = Safe.<br>
<yellow>3-5</yellow> = Caution Required.<br>
<orange>6-8</orange> = Fair Skin types Protect yourself.<br>
<red>8-10</red> = Fair to Dark Skin Risk high sun burn risk.<br>
<purple>10+</purple> = High Risk  All Skin types very dangerous.<br>
  </div>
  
       
</section>




<div class="provided">   
<a href="https://www.airvisual.com/api" title="https://www.airvisual.com/api" target="_blank">AQI Data Provided by https://www.airvisual.com/api</a> / <a href="https://www.wunderground.com" title="https://www.wunderground.com" target="_blank">UV Data Provided by https://www.wunderground.com</a>
&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>