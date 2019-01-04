<?php include('settings.php');include('livedata.php');
error_reporting(0); 

	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 EARTHQUAKES LISTING: 7th Feb 2018   	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>

<?php //current eqlist
date_default_timezone_set($TZ);
//$json_string=file_get_contents('http://earthquake-report.com/feeds/recent-eq?json');
$json_string=file_get_contents('jsondata/eqnotification.txt');
$parsed_json=json_decode($json_string,true);
$magnitude = array();
$eqtitle = array();
$depth = array();
$time = array();
$lati = array();
$longi = array();
$eventime = array();
for ($i = 0; $i < 100; $i++) {
	$magnitude[$i]=$parsed_json{$i}{'magnitude'};
	$eqtitle[$i]=$parsed_json{$i}['title'];
	$depth[$i]=$parsed_json{$i}['depth'];
	$time[$i]=$parsed_json{$i}['date_time'];
	$lati[$i]=$parsed_json{$i}['latitude'];
	$longi[$i]=$parsed_json{$i}['longitude'];
	$eventime[$i]=date($timeFormatShort, strtotime($time[$i]) );
	$eqdist[$i] = round(distance($lat, $lon, $lati[$i], $longi[$i])) ;
}
$eqalert='<svg id="i-activity" viewBox="0 0 32 32" width="52" height="52" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg>';
$eqalert6='<svg id="i-activity" viewBox="0 0 32 32" width="28" height="28" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>weather34 Last 5 Significant & Regional Earthquakes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;
background: #1a1d21; background: -moz-linear-gradient(top, #1a1d21 0%, #1a1d21 95%, #1a1d21 95%, rgba(41, 43, 46,1) 10%); background: -webkit-linear-gradient(top, #1a1d21 0%,#1a1d21 95%,#1a1d21 95%,rgba(41, 43, 46,1) 10%); 
background: linear-gradient(to bottom, #1a1d21 0%,#1a1d21 9%,#1a1d21 95%,rgba(41, 43, 46,1) 10%); background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:19rem;height:16.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;
font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-text--big{font-size:4rem;font-weight:200;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:11px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37, 41, 45, 0.6);border:solid RGBA(156, 156, 156, 0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}
.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}
.weather34card--earthquakelast:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}
.weather34card--earthquakelast:before {content: "";position: absolute;top: 0px;right: 0px;background: 0;width:0;height:0;border-style:solid;border-width: 0 30px 30px 0;border-color:transparent #d65b4a transparent transparent;}
blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a;}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}
a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:10px;float:right;color:#aaa}
.nosig{font-size:16px;text-align:center;line-height:17px;margin-top:5px;}magnitude{font-size:12px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Last 5 Minor to Significant & Regional Earthquakes"></div> 
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($magnitude[0]>=7){echo "<purple>",$magnitude[0],"</purple>";}
				else if($magnitude[0]>=5.8){echo "<red6>",$magnitude[0],"</red6>";}
				else if($magnitude[0]>=5){echo "<red>",$magnitude[0],"</red>";}
				else if($magnitude[0]>=4){echo "<orange>",$magnitude[0],"</orange>";}
				else if($magnitude[0]>=2){echo "<green>",$magnitude[0],"</orange>";}				
				?></span> magnitude
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[0]<1300)  {
	echo "<green>*Regional</green> <time><span> ".$eventime[0]."</time></span><br>";
	echo $eqtitle[0];
	} 
	else if ($magnitude[0]>7)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>5.7)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>5.2)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
	
	else if ($magnitude[0]>4)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>3)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
	
	else if ($magnitude[0]>2)  {
	echo "<time><span>",$eventime[0] ,"</time></span><br>";
	echo $eqtitle[0] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php
			
if ($windunit == 'mph' && $eqdist[0]<200) {
		echo $locationinfo; echo round($eqdist[0]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[0]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[0]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[0]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[0] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php 
				if($magnitude[1]>=7){echo "<purple>",$magnitude[1],"</purple>";}
				else if($magnitude[1]>=5.8){echo "<red6>",$magnitude[1],"</red6>";}
				else if($magnitude[1]>=5){echo "<red>",$magnitude[1],"</red>";}
				else if($magnitude[1]>=4){echo "<orange>",$magnitude[1],"</orange>";}
				else if($magnitude[1]>=2){echo "<green>",$magnitude[1],"</orange>";}
				
				?></span> magnitude
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[1]<1300)  {
	echo "<green>*Regional</green> <time><span> ".$eventime[1]."</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	
	
	else if ($magnitude[1]>7)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>5.7)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>5.2)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	else if ($magnitude[1]>4)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>3)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
	
	else if ($magnitude[1]>2)  {
	echo "<time><span>",$eventime[1] ,"</time></span><br>";
	echo $eqtitle[1] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[1]<200) {
		echo $locationinfo; echo round($eqdist[1]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[1]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[1]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[1]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[1] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake3">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($magnitude[2]>=7){echo "<purple>",$magnitude[2],"</purple>";}
				else if($magnitude[2]>=5.8){echo "<red6>",$magnitude[2],"</red6>";}
				else if($magnitude[2]>=5){echo "<red>",$magnitude[2],"</red>";}
				else if($magnitude[2]>=4){echo "<orange>",$magnitude[2],"</orange>";}
				else if($magnitude[2]>=2){echo "<green>",$magnitude[2],"</orange>";}
				
				?></span> magnitude
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[2]<1300)  {
	echo "<green>*Regional</green> <time><span> ".$eventime[2]."</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	
	
	else if ($magnitude[2]>7)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>5.7)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>5.2)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	else if ($magnitude[2]>4)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>3)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
	
	else if ($magnitude[2]>2)  {
	echo "<time><span>",$eventime[2] ,"</time></span><br>";
	echo $eqtitle[2] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[2]<200) {
		echo $locationinfo; echo round($eqdist[2]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[2]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[2]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[2]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[2] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
</section>
  
<!---weather34 earthquakes 2nd row---->
  

    <section class="weather34cards">
    <div class="weather34card weather34card--earthquake1">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($magnitude[3]>=7){echo "<purple>",$magnitude[3],"</purple>";}
				else if($magnitude[3]>=5.8){echo "<red6>",$magnitude[3],"</red6>";}
				else if($magnitude[3]>=5){echo "<red>",$magnitude[3],"</red>";}
				else if($magnitude[3]>=4){echo "<orange>",$magnitude[3],"</orange>";}
				else if($magnitude[3]>=2){echo "<green>",$magnitude[3],"</orange>";}
				
				?></span> magnitude
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[3]<1300)  {
	echo "<green>*Regional</green> <time><span> ".$eventime[3]."</time></span><br>";
	echo $eqtitle[3];
	} 
	
	
	
	
	else if ($magnitude[3]>7)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>5.7)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>5.2)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
	
	else if ($magnitude[3]>4)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>3)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
	
	else if ($magnitude[3]>2)  {
	echo "<time><span>",$eventime[3] ,"</time></span><br>";
	echo $eqtitle[3] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[3]<200) {
		echo $locationinfo; echo round($eqdist[3]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[3]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[3]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[3]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[3] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php 
				if($magnitude[4]>=7){echo "<purple>",$magnitude[4],"</purple>";}
				else if($magnitude[4]>=5.8){echo "<red6>",$magnitude[4],"</red6>";}
				else if($magnitude[4]>=5){echo "<red>",$magnitude[4],"</red>";}
				else if($magnitude[4]>=4){echo "<orange>",$magnitude[4],"</orange>";}
				else if($magnitude[4]>=2){echo "<green>",$magnitude[4],"</orange>";}
				
				?></span> magnitude
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[4]<1300)  {
	echo "<green>*Regional</green> <time><span> ".$eventime[4]."</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	
	
	else if ($magnitude[4]>7)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>5.7)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>5.2)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	else if ($magnitude[4]>4)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>3)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
	
	else if ($magnitude[4]>2)  {
	echo "<time><span>",$eventime[4] ,"</time></span><br>";
	echo $eqtitle[4] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[4]<200) {
		echo $locationinfo; echo round($eqdist[4]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[4]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[4]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[4]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[4] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquakelast">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<?php //weather34 last 100 of greater than 6 if exist
if($magnitude[100]>=5.7){echo "<red>",$magnitude[100],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[99]>=5.7){echo "<red>",$magnitude[99],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[98]>=5.7){echo "<red>",$magnitude[98],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[97]>=5.7){echo "<red>",$magnitude[97],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[96]>=5.7){echo "<red>",$magnitude[96],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[95]>=5.7){echo "<red>",$magnitude[95],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[94]>=5.7){echo "<red>",$magnitude[94],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[93]>=5.7){echo "<red>",$magnitude[93],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[92]>=5.7){echo "<red>",$magnitude[92],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[91]>=5.7){echo "<red>",$magnitude[91],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[90]>=5.7){echo "<red>",$magnitude[90],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[89]>=5.7){echo "<red>",$magnitude[89],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[88]>=5.7){echo "<red>",$magnitude[88],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[87]>=5.7){echo "<red>",$magnitude[87],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[86]>=5.7){echo "<red>",$magnitude[86],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[85]>=5.7){echo "<red>",$magnitude[85],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[84]>=5.7){echo "<red>",$magnitude[84],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[83]>=5.7){echo "<red>",$magnitude[83],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[82]>=5.7){echo "<red>",$magnitude[82],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[81]>=5.7){echo "<red>",$magnitude[81],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[80]>=5.7){echo "<red>",$magnitude[80],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[79]>=5.7){echo "<red>",$magnitude[79],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[78]>=5.7){echo "<red>",$magnitude[78],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[77]>=5.7){echo "<red>",$magnitude[77],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[76]>=5.7){echo "<red>",$magnitude[76],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[75]>=5.7){echo "<red>",$magnitude[75],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[74]>=5.7){echo "<red>",$magnitude[74],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[73]>=5.7){echo "<red>",$magnitude[73],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[72]>=5.7){echo "<red>",$magnitude[72],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[71]>=5.7){echo "<red>",$magnitude[71],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[70]>=5.7){echo "<red>",$magnitude[70],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[69]>=5.7){echo "<red>",$magnitude[69],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[68]>=5.7){echo "<red>",$magnitude[68],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[67]>=5.7){echo "<red>",$magnitude[67],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[66]>=5.7){echo "<red>",$magnitude[66],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[65]>=5.7){echo "<red>",$magnitude[65],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[64]>=5.7){echo "<red>",$magnitude[64],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[63]>=5.7){echo "<red>",$magnitude[63],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[62]>=5.7){echo "<red>",$magnitude[62],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[61]>=5.7){echo "<red>",$magnitude[61],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[60]>=5.7){echo "<red>",$magnitude[60],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[59]>=5.7){echo "<red>",$magnitude[59],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[58]>=5.7){echo "<red>",$magnitude[58],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[57]>=5.7){echo "<red>",$magnitude[57],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[56]>=5.7){echo "<red>",$magnitude[56],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[55]>=5.7){echo "<red>",$magnitude[55],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[54]>=5.7){echo "<red>",$magnitude[54],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[53]>=5.7){echo "<red>",$magnitude[53],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[52]>=5.7){echo "<red>",$magnitude[52],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[51]>=5.7){echo "<red>",$magnitude[51],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[50]>=5.7){echo "<red>",$magnitude[50],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[49]>=5.7){echo "<red>",$magnitude[49],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[48]>=5.7){echo "<red>",$magnitude[48],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[47]>=5.7){echo "<red>",$magnitude[47],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[46]>=5.7){echo "<red>",$magnitude[46],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[45]>=5.7){echo "<red>",$magnitude[45],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[44]>=5.7){echo "<red>",$magnitude[44],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[43]>=5.7){echo "<red>",$magnitude[43],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[42]>=5.7){echo "<red>",$magnitude[42],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[41]>=5.7){echo "<red>",$magnitude[41],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[40]>=5.7){echo "<red>",$magnitude[40],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[39]>=5.7){echo "<red>",$magnitude[39],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[38]>=5.7){echo "<red>",$magnitude[38],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[37]>=5.7){echo "<red>",$magnitude[37],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[36]>=5.7){echo "<red>",$magnitude[36],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[35]>=5.7){echo "<red>",$magnitude[35],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[34]>=5.7){echo "<red>",$magnitude[34],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[33]>=5.7){echo "<red>",$magnitude[33],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[32]>=5.7){echo "<red>",$magnitude[32],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[31]>=5.7){echo "<red>",$magnitude[31],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[30]>=5.7){echo "<red>",$magnitude[30],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[29]>=5.7){echo "<red>",$magnitude[29],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[28]>=5.7){echo "<red>",$magnitude[28],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[27]>=5.7){echo "<red>",$magnitude[27],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[26]>=5.7){echo "<red>",$magnitude[26],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[25]>=5.7){echo "<red>",$magnitude[25],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[24]>=5.7){echo "<red>",$magnitude[24],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[23]>=5.7){echo "<red>",$magnitude[23],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[22]>=5.7){echo "<red>",$magnitude[22],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[21]>=5.7){echo "<red>",$magnitude[21],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[20]>=5.7){echo "<red>",$magnitude[20],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[19]>=5.7){echo "<red>",$magnitude[19],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[18]>=5.7){echo "<red>",$magnitude[18],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[17]>=5.7){echo "<red>",$magnitude[17],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[16]>=5.7){echo "<red>",$magnitude[16],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[15]>=5.7){echo "<red>",$magnitude[15],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[14]>=5.7){echo "<red>",$magnitude[14],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[12]>=5.7){echo "<red>",$magnitude[13],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[11]>=5.7){echo "<red>",$magnitude[11],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[10]>=5.7){echo "<red>",$magnitude[10],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[9]>=5.7){echo "<red>",$magnitude[9],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[8]>=5.7){echo "<red>",$magnitude[8],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[7]>=5.7){echo "<red>",$magnitude[7],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[6]>=5.7){echo "<red>",$magnitude[6],"</red><magnitude> ".$eqalert6."</magnitude>";}
else if($magnitude[5]>=5.7){echo "<red>",$magnitude[5],"</red><magnitude> ".$eqalert6."</magnitude>";}
				else {
	echo "<div class=nosig>No Additional Major or Earlier <red6>Significant</red6> Events 
	</div>";	
	} //end last 100 ?></span> 
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
				<?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
// weather34 EQ Latest earthquake last 100 	
if ($magnitude[100]>5.7) {
echo "<time><span>",$eventime[100] ,"</time></span><br>";
echo $eqtitle[100] ;
}
else if ($magnitude[99]>5.7) {
echo "<time><span>",$eventime[99] ,"</time></span><br>";
echo $eqtitle[99] ;
}
else if ($magnitude[98]>5.7) {
echo "<time><span>",$eventime[98] ,"</time></span><br>";
echo $eqtitle[98] ;
}
else if ($magnitude[97]>5.7) {
echo "<time><span>",$eventime[97] ,"</time></span><br>";
echo $eqtitle[97] ;
}
else if ($magnitude[96]>5.7) {
echo "<time><span>",$eventime[96] ,"</time></span><br>";
echo $eqtitle[96] ;
}
else if ($magnitude[95]>5.7) {
echo "<time><span>",$eventime[95] ,"</time></span><br>";
echo $eqtitle[95] ;
}
else if ($magnitude[94]>5.7) {
echo "<time><span>",$eventime[94] ,"</time></span><br>";
echo $eqtitle[94] ;
}
else if ($magnitude[93]>5.7) {
echo "<time><span>",$eventime[93] ,"</time></span><br>";
echo $eqtitle[93] ;
}
else if ($magnitude[92]>5.7) {
echo "<time><span>",$eventime[92] ,"</time></span><br>";
echo $eqtitle[92] ;
}
else if ($magnitude[91]>5.7) {
echo "<time><span>",$eventime[91] ,"</time></span><br>";
echo $eqtitle[91] ;
}
else if ($magnitude[90]>5.7) {
echo "<time><span>",$eventime[90] ,"</time></span><br>";
echo $eqtitle[90] ;
}
else if ($magnitude[89]>5.7) {
echo "<time><span>",$eventime[89] ,"</time></span><br>";
echo $eqtitle[89] ;
}
else if ($magnitude[88]>5.7) {
echo "<time><span>",$eventime[88] ,"</time></span><br>";
echo $eqtitle[88] ;
}
else if ($magnitude[87]>5.7) {
echo "<time><span>",$eventime[87] ,"</time></span><br>";
echo $eqtitle[87] ;
}
else if ($magnitude[86]>5.7) {
echo "<time><span>",$eventime[86] ,"</time></span><br>";
echo $eqtitle[86] ;
}
else if ($magnitude[85]>5.7) {
echo "<time><span>",$eventime[85] ,"</time></span><br>";
echo $eqtitle[85] ;
}
else if ($magnitude[84]>5.7) {
echo "<time><span>",$eventime[84] ,"</time></span><br>";
echo $eqtitle[84] ;
}
else if ($magnitude[83]>5.7) {
echo "<time><span>",$eventime[83] ,"</time></span><br>";
echo $eqtitle[83] ;
}
else if ($magnitude[82]>5.7) {
echo "<time><span>",$eventime[82] ,"</time></span><br>";
echo $eqtitle[82] ;
}
else if ($magnitude[81]>5.7) {
echo "<time><span>",$eventime[81] ,"</time></span><br>";
echo $eqtitle[81] ;
}
else if ($magnitude[80]>5.7) {
echo "<time><span>",$eventime[80] ,"</time></span><br>";
echo $eqtitle[80] ;
}
else if ($magnitude[79]>5.7) {
echo "<time><span>",$eventime[79] ,"</time></span><br>";
echo $eqtitle[79] ;
}
else if ($magnitude[78]>5.7) {
echo "<time><span>",$eventime[78] ,"</time></span><br>";
echo $eqtitle[78] ;
}
else if ($magnitude[77]>5.7) {
echo "<time><span>",$eventime[77] ,"</time></span><br>";
echo $eqtitle[77] ;
}
else if ($magnitude[76]>5.7) {
echo "<time><span>",$eventime[76] ,"</time></span><br>";
echo $eqtitle[76] ;
}
else if ($magnitude[75]>5.7) {
echo "<time><span>",$eventime[75] ,"</time></span><br>";
echo $eqtitle[75] ;
}
else if ($magnitude[74]>5.7) {
echo "<time><span>",$eventime[74] ,"</time></span><br>";
echo $eqtitle[74] ;
}
else if ($magnitude[73]>5.7) {
echo "<time><span>",$eventime[73] ,"</time></span><br>";
echo $eqtitle[73] ;
}
else if ($magnitude[72]>5.7) {
echo "<time><span>",$eventime[72] ,"</time></span><br>";
echo $eqtitle[72] ;
}
else if ($magnitude[71]>5.7) {
echo "<time><span>",$eventime[71] ,"</time></span><br>";
echo $eqtitle[71] ;
}
else if ($magnitude[70]>5.7) {
echo "<time><span>",$eventime[70] ,"</time></span><br>";
echo $eqtitle[70] ;
}
else if ($magnitude[69]>5.7) {
echo "<time><span>",$eventime[69] ,"</time></span><br>";
echo $eqtitle[69] ;
}
else if ($magnitude[68]>5.7) {
echo "<time><span>",$eventime[68] ,"</time></span><br>";
echo $eqtitle[68] ;
}
else if ($magnitude[67]>5.7) {
echo "<time><span>",$eventime[67] ,"</time></span><br>";
echo $eqtitle[67] ;
}
else if ($magnitude[66]>5.7) {
echo "<time><span>",$eventime[66] ,"</time></span><br>";
echo $eqtitle[66] ;
}
else if ($magnitude[65]>5.7) {
echo "<time><span>",$eventime[65] ,"</time></span><br>";
echo $eqtitle[65] ;
}
else if ($magnitude[64]>5.7) {
echo "<time><span>",$eventime[64] ,"</time></span><br>";
echo $eqtitle[64] ;
}
else if ($magnitude[63]>5.7) {
echo "<time><span>",$eventime[63] ,"</time></span><br>";
echo $eqtitle[63] ;
}
else if ($magnitude[62]>5.7) {
echo "<time><span>",$eventime[62] ,"</time></span><br>";
echo $eqtitle[62] ;
}
else if ($magnitude[61]>5.7) {
echo "<time><span>",$eventime[61] ,"</time></span><br>";
echo $eqtitle[61] ;
}
else if ($magnitude[60]>5.7) {
echo "<time><span>",$eventime[60] ,"</time></span><br>";
echo $eqtitle[60] ;
}
else if ($magnitude[59]>5.7) {
echo "<time><span>",$eventime[59] ,"</time></span><br>";
echo $eqtitle[59] ;
}
else if ($magnitude[58]>5.7) {
echo "<time><span>",$eventime[58] ,"</time></span><br>";
echo $eqtitle[58] ;
}
else if ($magnitude[57]>5.7) {
echo "<time><span>",$eventime[57] ,"</time></span><br>";
echo $eqtitle[57] ;
}
else if ($magnitude[56]>5.7) {
echo "<time><span>",$eventime[56] ,"</time></span><br>";
echo $eqtitle[56] ;
}
else if ($magnitude[55]>5.7) {
echo "<time><span>",$eventime[55] ,"</time></span><br>";
echo $eqtitle[55] ;
}
else if ($magnitude[54]>5.7) {
echo "<time><span>",$eventime[54] ,"</time></span><br>";
echo $eqtitle[54] ;
}
else if ($magnitude[53]>5.7) {
echo "<time><span>",$eventime[53] ,"</time></span><br>";
echo $eqtitle[53] ;
}
else if ($magnitude[52]>5.7) {
echo "<time><span>",$eventime[52] ,"</time></span><br>";
echo $eqtitle[52] ;
}
else if ($magnitude[51]>5.7) {
echo "<time><span>",$eventime[51] ,"</time></span><br>";
echo $eqtitle[51] ;
}
else if ($magnitude[50]>5.7) {
echo "<time><span>",$eventime[50] ,"</time></span><br>";
echo $eqtitle[50] ;
}
else if ($magnitude[49]>5.7) {
echo "<time><span>",$eventime[49] ,"</time></span><br>";
echo $eqtitle[49] ;
}
else if ($magnitude[48]>5.7) {
echo "<time><span>",$eventime[48] ,"</time></span><br>";
echo $eqtitle[48] ;
}
else if ($magnitude[47]>5.7) {
echo "<time><span>",$eventime[47] ,"</time></span><br>";
echo $eqtitle[47] ;
}
else if ($magnitude[46]>5.7) {
echo "<time><span>",$eventime[46] ,"</time></span><br>";
echo $eqtitle[46] ;
}
else if ($magnitude[45]>5.7) {
echo "<time><span>",$eventime[45] ,"</time></span><br>";
echo $eqtitle[45] ;
}
else if ($magnitude[44]>5.7) {
echo "<time><span>",$eventime[44] ,"</time></span><br>";
echo $eqtitle[44] ;
}
else if ($magnitude[43]>5.7) {
echo "<time><span>",$eventime[43] ,"</time></span><br>";
echo $eqtitle[43] ;
}
else if ($magnitude[42]>5.7) {
echo "<time><span>",$eventime[42] ,"</time></span><br>";
echo $eqtitle[42] ;
}
else if ($magnitude[41]>5.7) {
echo "<time><span>",$eventime[41] ,"</time></span><br>";
echo $eqtitle[41] ;
}
else if ($magnitude[40]>5.7) {
echo "<time><span>",$eventime[40] ,"</time></span><br>";
echo $eqtitle[40] ;
}
else if ($magnitude[39]>5.7) {
echo "<time><span>",$eventime[39] ,"</time></span><br>";
echo $eqtitle[39] ;
}
else if ($magnitude[38]>5.7) {
echo "<time><span>",$eventime[38] ,"</time></span><br>";
echo $eqtitle[38] ;
}
else if ($magnitude[37]>5.7) {
echo "<time><span>",$eventime[37] ,"</time></span><br>";
echo $eqtitle[37] ;
}
else if ($magnitude[36]>5.7) {
echo "<time><span>",$eventime[36] ,"</time></span><br>";
echo $eqtitle[36] ;
}
else if ($magnitude[35]>5.7) {
echo "<time><span>",$eventime[35] ,"</time></span><br>";
echo $eqtitle[35] ;
}
else if ($magnitude[34]>5.7) {
echo "<time><span>",$eventime[34] ,"</time></span><br>";
echo $eqtitle[34] ;
}
else if ($magnitude[33]>5.7) {
echo "<time><span>",$eventime[33] ,"</time></span><br>";
echo $eqtitle[33] ;
}
else if ($magnitude[32]>5.7) {
echo "<time><span>",$eventime[32] ,"</time></span><br>";
echo $eqtitle[32] ;
}
else if ($magnitude[31]>5.7) {
echo "<time><span>",$eventime[31] ,"</time></span><br>";
echo $eqtitle[31] ;
}
else if ($magnitude[30]>5.7) {
echo "<time><span>",$eventime[30] ,"</time></span><br>";
echo $eqtitle[30] ;
}
else if ($magnitude[29]>5.7) {
echo "<time><span>",$eventime[29] ,"</time></span><br>";
echo $eqtitle[29] ;
}
else if ($magnitude[28]>5.7) {
echo "<time><span>",$eventime[28] ,"</time></span><br>";
echo $eqtitle[28] ;
}
else if ($magnitude[27]>5.7) {
echo "<time><span>",$eventime[27] ,"</time></span><br>";
echo $eqtitle[27] ;
}
else if ($magnitude[26]>5.7) {
echo "<time><span>",$eventime[26] ,"</time></span><br>";
echo $eqtitle[26] ;
}
else if ($magnitude[26]>5.7) {
echo "<time><span>",$eventime[26] ,"</time></span><br>";
echo $eqtitle[26] ;
}
else if ($magnitude[25]>5.7) {
echo "<time><span>",$eventime[25] ,"</time></span><br>";
echo $eqtitle[25] ;
}
else if ($magnitude[24]>5.7) {
echo "<time><span>",$eventime[24] ,"</time></span><br>";
echo $eqtitle[24] ;
}
else if ($magnitude[23]>5.7) {
echo "<time><span>",$eventime[23] ,"</time></span><br>";
echo $eqtitle[23] ;
}
else if ($magnitude[22]>5.7) {
echo "<time><span>",$eventime[22] ,"</time></span><br>";
echo $eqtitle[22] ;
}
else if ($magnitude[21]>5.7) {
echo "<time><span>",$eventime[21] ,"</time></span><br>";
echo $eqtitle[21] ;
}
else if ($magnitude[20]>5.7) {
echo "<time><span>",$eventime[20] ,"</time></span><br>";
echo $eqtitle[20] ;
}
else if ($magnitude[19]>5.7) {
echo "<time><span>",$eventime[19] ,"</time></span><br>";
echo $eqtitle[19] ;
}
else if ($magnitude[18]>5.7) {
echo "<time><span>",$eventime[18] ,"</time></span><br>";
echo $eqtitle[18] ;
}
else if ($magnitude[17]>5.7) {
echo "<time><span>",$eventime[17] ,"</time></span><br>";
echo $eqtitle[17] ;
}
else if ($magnitude[16]>5.7) {
echo "<time><span>",$eventime[16] ,"</time></span><br>";
echo $eqtitle[16] ;
}
else if ($magnitude[15]>5.7) {
echo "<time><span>",$eventime[15] ,"</time></span><br>";
echo $eqtitle[15] ;
}
else if ($magnitude[14]>5.7) {
echo "<time><span>",$eventime[14] ,"</time></span><br>";
echo $eqtitle[14] ;
}
else if ($magnitude[13]>5.7) {
echo "<time><span>",$eventime[13] ,"</time></span><br>";
echo $eqtitle[13] ;
}
else if ($magnitude[12]>5.7) {
echo "<time><span>",$eventime[12] ,"</time></span><br>";
echo $eqtitle[12] ;
}
else if ($magnitude[11]>5.7) {
echo "<time><span>",$eventime[11] ,"</time></span><br>";
echo $eqtitle[11] ;
}
else if ($magnitude[10]>5.7) {
echo "<time><span>",$eventime[10] ,"</time></span><br>";
echo $eqtitle[10] ;
}
else if ($magnitude[9]>5.7) {
echo "<time><span>",$eventime[9] ,"</time></span><br>";
echo $eqtitle[9] ;
}
else if ($magnitude[8]>5.7) {
echo "<time><span>",$eventime[8] ,"</time></span><br>";
echo $eqtitle[8] ;
}
else if ($magnitude[7]>5.7) {
echo "<time><span>",$eventime[7] ,"</time></span><br>";
echo $eqtitle[7] ;
}
else if ($magnitude[6]>5.7) {
echo "<time><span>",$eventime[6] ,"</time></span><br>";
echo $eqtitle[6] ;
}
else if ($magnitude[5]>5.7) {
echo "<time><span>",$eventime[5] ,"</time></span><br>";
echo $eqtitle[5] ;
}

else {
echo $eqalert;
}
}
?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container" style="background:0;" >
            
            <red6><?php echo $alert ;?> Alert Area</red6>
        </div>
        </div>
    </div>
</section> 
<div class="provided">   
<a href="http://earthquake-report.com" title="Earthquake-Report.com" target="_blank">Data © <?php echo date('Y');?> Earthquake-Report.com</a>
&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a>
<updated>               
 <?php echo '<svg viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>';
; echo " Last Updated: ".date("H:i:s",filemtime('jsondata/kindex.txt'));?>
</updated></div>
</body>
</html>