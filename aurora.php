<?php include('shared.php');
// K-INDEX & SOLAR DATA FOR HOMEWEATHERSTATION TEMPLATE RADIO HAMS REJOICE :-) //
$str = file_get_contents('jsondata/kindex.txt');
$json = array_reverse(json_decode($str,false));
$kp =  $json[1][1];


	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 AURORA SUN INDEX: 25th January 2018   	                                           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>weather34 Radio Aurora Borealis and Sun Index Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family: "weathertext", Helvetica, Arial, sans-serif;
background:rgba(11, 12, 12, 0.4);background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family: "weathertext", Helvetica, Arial, sans-serif;width:400px
}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:31rem;height:14.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family: "weathertext", Helvetica, Arial, sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family: "weathertext", Helvetica, Arial, sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family: "weathertext", Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family: "weathertext", Helvetica, Arial, sans-serif;text-align:center}.weather34card__count-text--big{font-size:42px;font-weight:200;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:12px;font-family: "weathertext", Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}weather34card__count-text--bigsa{font-size:13px;font-family: "weathertext", Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}
.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family: "weathertext", Helvetica, Arial, sans-serif;text-align:center;font-size:1em}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family: "weathertext", Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family: "weathertext", Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:11px;bottom:7px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right;font-size:10px;font-family: "weathertext", Helvetica, Arial, sans-serif;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57,1)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/uvrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:rgba(128,105,152,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:rgba(208, 80, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(255,190,65,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(143,177,42,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Visual Aurora Borealis/Northern Lights and VHF Radio Aurora Indicators"></div>     


<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($kp>=7){echo "<purple>",number_format($kp,1),"</purple>";}else if($kp>=5.8){echo "<red6>",number_format($kp,1),"</red6>";}
				else if($kp>=5){echo "<red>",number_format($kp,1),"</red>";}else if($kp>=4){echo "<orange>",number_format($kp,1),"</orange>";}
				else if($kp>=0){echo "<green>",number_format($kp,1),"</orange>";}			
				?></span> KP-INDEX
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php echo " \n";if($kp>=9){echo "<red>G5 Geomagnetic Severe Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=8){echo "<red>G4 Geomagnetic Major Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=7){echo "<red>G3 Geomagnetic Major Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=6){echo "<red>G2 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=5){echo "<orange>G1 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=4){echo "<orange>Minor G1 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=3.5){echo "<green>Weak Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=0){echo "<green> Quiet No Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php if($kp>7){echo 'Excellent <br>Aurora Viewing Possible';}else if($kp>6){echo 'Mid to High Latitude <br>Aurora Viewing Possible';}else if($kp>4){echo 'High Latitude Aurora <br>Viewing Possible';}else if($kp>3.5){echo 'Weak High Latitude Aurora <br>Viewing Possible';}else{echo 'No Aurora Viewing';}echo "\n";?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php if($kp>=8.9){echo "<red>400</red>";}else if($kp>=7.9){echo "<red>208</red>";}else if($kp>=6.9){echo "<red>132</red>";}else if($kp>=6){echo "<red6>80</red6>";}else if($kp>=4.9){echo "<red>",number_format($kp*6,0),"</red>";}else if($kp>=3.9){echo "<orange>",number_format($kp*5,0),"</orange>";}else if($kp>=2.9){echo "<green>",number_format($kp*4,0),"</orange>";}else if($kp>=2){echo "<green>",number_format($kp*2,0),"</orange>";}else if($kp>=0){echo "<green>",number_format($kp*2,0),"</orange>";}?></span> A-INDEX
            </div>
            <div class="weather34-uvrate-bar" style="top:80px;">
   <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($kp>8.5){echo "rgba(116, 100, 192, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($kp>8){echo "rgba(116, 100, 192, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($kp>7.5){echo " rgba(116, 100, 192, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($kp>7){echo " rgba(116, 100, 192, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($kp>6.5){echo " rgba(237, 73, 71, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($kp>6){echo " rgba(237, 73, 71, 1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($kp>5.5){echo " rgba(255, 124, 57,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($kp>5){echo " rgba(255, 124, 57,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($kp>=3.5){echo " rgba(255, 124, 57,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($kp>=3){echo " rgba(115, 141, 38,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($kp>=2){echo " rgba(115, 141, 38,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($kp>0){echo " rgba(115, 141, 38,1)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</div></div>
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php echo " \n";if($kp>=9){echo "<red>G5 Severe Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=8){echo "<red>G4 Major Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=7){echo "<red>G3 Major Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=6){echo "<red>G2 Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=5){echo "<orange>G1 Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=4){echo "<orange>Minor G1 Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>=3.5){echo "<green>Weak Storm</span><br>";echo 'RADIO AURORA <orange>ACTIVE</orange>';}else if($kp>0){echo "<green>Quiet No Storms</span><br>";echo 'NOT ACTIVE';}?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php if($kp>7){echo 'Strong Radio Aurora <br>28-433MHZ Possible';}else if($kp>6){echo 'Mid-High Latitude Radio Aurora <br>28-144MHZ Possible';}else if($kp>5){echo 'Radio Aurora <br>50-144MHZ Possible';}else if($kp>=4){echo 'High Latitude Radio Aurora <br>50-144MHZ Possible';}else if($kp>=3.5){echo 'High Latitude Weak Radio Aurora <br>50-144MHZ Possible';}else{echo 'No Radio Aurora';}echo "\n";?></div>
        </div> 
       
</section>
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:12px;">
               <?php echo $info ;?> <orange>Guide</orange><br><green>KP-INDEX</green> figure provides a good indicator of viewing the <green>Aurora Borealis</green> or <green>Northern Lights</green> The greater the KP-Index the higher probability of viewing .The Estimated 3-hour Planetary Kp-index data is collected from ground-based magnetometers.
            </div>
         </div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:12px;">
               <?php echo $info ;?> <orange>Guide</orange><br><green>A-INDEX</green> is an indicator of possible enhanced VHF radio signal communication at a range of upto 1000 miles or more. During strong solar activity frequencies from 28 to 433MHZ or higher allowing radio communications to be possible at mid to high latitudes .
 <updated>               
 <?php echo '<svg viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>';
; echo " Last Updated: ".date("H:i:s",filemtime('jsondata/kindex.txt'));?>
</updated>
            </div>
        </div>
</section>


<div class="provided">   
<a href="https://services.swpc.noaa.gov" title="https://services.swpc.noaa.gov" target="_blank">Data Provided by https://services.swpc.noaa.gov</a>
&nbsp;
<?php echo $info?> CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>