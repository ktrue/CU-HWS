<?php include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	Home Enviroment Temperature | Humidity INDEX: 1st January 2019                                 #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Enviroment Temperature | Humidity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
body,section{padding:10px}.weather34title,body,html{font-family:weathertext,Helvetica,Arial,sans-serif}.weather34card,.weather34cardguide{position:relative;-webkit-box-orient:vertical;-webkit-box-direction:normal;color:#aaa}@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;background:rgba(11,12,12,.4);background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto}.weather34title{font-size:14px;font-weight:400;padding-top:3px;width:400px}.weather34cards{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:14.5rem;background-color:0;border-radius:4px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:11px;font-weight:400;padding:10px;border:1px solid #444}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:weathertext,sans-serif}.weather34card__count-container,.weather34card__count-text,.weather34card__weather34-guide,.weather34card__weather34-wrapper{font-family:weathertext,Helvetica,Arial,sans-serif}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:12px;font-weight:400;padding:5px;border:1px solid #444;line-height:13px}.weather34card__weather34-guide{width:3rem;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px}.weather34card__count-text{text-align:center}.weather34card__count-text--big{font-size:42px;font-weight:200;font-family:weathertext,sans-serif}.weather34card__count-text--bigs,.weather34card__stuff-container,time,time span,updated,weather34card__count-text--bigsa{font-family:weathertext,Helvetica,Arial,sans-serif}.weather34card__count-text--bigs{font-size:12px;font-weight:400;color:#aaa;text-align:center}weather34card__count-text--bigsa{font-size:13px;font-weight:400;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;text-align:center;font-size:1em}orange,time span{color:#ff8841}.provided,a{font-size:11px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:rgba(230,161,65,1)}purple{color:#916392}time{color:#aaa;font-weight:400}time span{font-weight:400}a{top:5px;margin-top:10px}.provided{position:absolute;color:#aaa;bottom:7px;text-decoration:none;margin-left:100px}updated{position:absolute;bottom:5px;float:right;font-size:10px}.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color:rgba(255,124,57,1)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}.weather34darkbrowser{position:relative;background:left top no-repeat,left top no-repeat;width:104%;max-height:30px;margin:-15px auto auto -20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:20px;box-sizing:border-box}.weather34uvrate,.weather34uvrate span{font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:400}.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/uvrulerw34.svg) no-repeat;width:37px;border:1px solid;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-uvrate-bar .bar-inner10,.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;width:100%;-webkit-border-radius:1px 1px 2px 2px}.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}.weather34-uvrate-bar .bar-inner10{background:rgba(128,105,152,.8);border:0}.weather34-uvrate-bar .bar-inner8{background:rgba(208,80,65,.8);border:0}.weather34-uvrate-bar .bar-inner3,.weather34-uvrate-bar .bar-inner5{-webkit-border-radius:1px 1px 2px 2px;shape-rendering:crispEdges;width:100%}.weather34-uvrate-bar .bar-inner5{background:rgba(255,124,57,.8);border:0}.weather34-uvrate-bar .bar-inner3{background:rgba(255,190,65,.7);border:0}.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(143,177,42,.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;width:20px;max-height:100px;line-height:10px}.weather34uvrate span{color:#777}indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{padding:5px}.indoorhomesvg1{margin-top:-22px;left:20px;color:rgba(53,56,58,1);margin-left:38px}.weather34indoorword{margin-left:127px;margin-top:42px}.indoortrendhouse1{position:absolute;margin-left:142px;margin-top:50px;font-size:.65rem;z-index:1;color:#fff}.indoorhomevalue1,.indoorhomevalue2{font-size:23px;padding-right:4px;padding-left:0}.indoorhomevalue1{position:relative;margin-top:-89px;left:0}.indoorhomesvg2{margin-top:-22px;left:53px;color:rgba(53,56,58,1);margin-left:-40px}.indoortrendhouse2{position:absolute;margin-left:195px;margin-top:25px}.indoorhomevalue2{position:relative;margin-top:-79px;left:0}.weather34indoortrend{margin-left:103px;margin-top:1.51rem;color:#aaa;font-size:.9rem;font-family:arial,system;position:absolute}indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:5.5rem;height:5.05rem;font-size:2.2rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:11px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:90px;top:-25px}indoorred1{background:rgba(211,93,78,1)}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Home Enviroment Temperature | Humidity"></div>     


<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="tempindoorconverter">
<?php //chuck
if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>30){echo "<div class=tempconvertercirclered>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>25){echo "<div class=tempconvertercircleorange>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp_indoor"])>18){echo "<div class=tempconvertercircleyellow>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>10){echo "<div class=tempconvertercirclegreen>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp_indoor"])<10){echo "<div class=tempconvertercircleblue>".anyToC($weather["temp_indoor"])."&deg;C" ;}

else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>30){echo "<div class=tempconvertercirclered>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>25){echo "<div class=tempconvertercirclerange>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>18){echo "<div class=tempconvertercircleyellow>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>10){echo "<div class=tempconvertercirclegreen>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' && anyToC($weather["temp_indoor"])<10){echo "<div class=tempconvertercircleblue>".anyToF($weather["temp_indoor"])."&deg;F" ;}
?></div></div>
               <div class="indoortrendhouse1">
<?php //temperture indoor alert
if (anyToC($weather["temp_indoor"]) >27){echo "<oorange>".$alert ;}?></oorange>
</div>  
<div class="indoorhomesvg1">
<svg id="weather34 indoor house" width="128pt" height="128pt" viewBox="0 0 475 497" version="30092018" fill="currentcolor">
<path d=" M 211.42 96.39 C 219.31 93.33 229.02 94.82 235.24 100.72 C 248.26 113.57 261.09 126.66 274.50 139.11 C 274.67 130.74 274.26 122.36 274.67 114.00 C 275.00 106.78 281.80 100.82 288.94 100.98 C 299.32 101.01 309.70 100.99 320.08 100.99 C 328.19 101.00 335.21 108.86 334.03 116.97 C 333.93 143.01 334.05 169.04 333.97 195.07 C 333.94 196.71 333.92 198.57 335.39 199.65 C 345.35 209.34 355.26 219.08 365.19 228.80 C 368.20 231.79 371.69 234.49 373.60 238.39 C 376.82 244.35 376.98 251.89 373.92 257.95 C 370.54 265.08 362.95 270.12 355.02 270.16 C 348.03 270.32 341.04 270.18 334.05 270.20 C 333.91 304.45 334.07 338.71 333.96 372.96 C 257.99 372.94 182.01 372.95 106.04 372.96 C 105.93 338.71 106.09 304.45 105.95 270.20 C 98.96 270.18 91.96 270.32 84.98 270.16 C 76.81 270.07 68.98 264.78 65.78 257.28 C 62.30 249.81 63.74 240.43 69.22 234.29 C 97.88 205.26 127.47 177.17 156.23 148.23 C 169.74 134.74 183.40 121.40 197.03 108.04 C 201.58 103.90 205.47 98.61 211.42 96.39 M 210.66 108.63 C 196.77 122.41 182.90 136.21 168.90 149.88 C 139.19 178.84 110.04 208.38 80.23 237.23 C 77.80 239.59 75.27 242.13 74.35 245.50 C 72.16 252.29 77.88 260.06 84.97 260.31 C 95.24 260.46 105.53 260.38 115.81 260.31 C 115.81 294.66 115.67 329.00 115.70 363.35 C 185.23 363.42 254.77 363.42 324.31 363.35 C 324.33 329.00 324.19 294.66 324.20 260.31 C 334.14 260.42 344.09 260.38 354.04 260.37 C 357.75 260.43 361.45 258.63 363.66 255.64 C 367.05 251.37 366.91 244.85 363.13 240.86 C 350.32 228.69 337.96 216.05 325.35 203.68 C 323.83 202.61 324.21 200.65 324.11 199.06 C 324.19 172.02 324.09 144.98 324.17 117.95 C 324.12 115.98 324.22 113.74 322.84 112.16 C 320.96 110.54 318.31 110.92 316.03 110.83 C 307.33 110.92 298.63 110.79 289.94 110.88 C 287.54 110.71 284.49 112.24 284.71 115.00 C 284.50 131.07 284.78 147.14 284.59 163.22 C 280.42 159.80 276.82 155.78 272.94 152.06 C 258.16 137.50 243.58 122.74 228.68 108.30 C 223.87 103.44 215.31 103.67 210.66 108.63 Z" /><path  d=" M 138.23 285.20 C 138.85 285.82 138.85 285.82 138.23 285.20 Z" /><path d=" M 141.13 289.24 C 144.43 289.45 139.58 292.30 141.13 289.24 Z" /><path d=" M 142.14 292.22 C 142.76 292.84 142.76 292.84 142.14 292.22 Z" /><path d=" M 141.21 294.42 C 142.54 294.64 142.77 295.37 141.89 296.61 C 140.56 296.40 140.33 295.67 141.21 294.42 Z" /><path d=" M 140.24 298.22 C 140.86 298.84 140.86 298.84 140.24 298.22 Z" /><path d=" M 133.21 300.21 C 133.83 300.83 133.83 300.83 133.21 300.21 Z" /><path d=" M 138.21 300.20 C 138.83 300.82 138.83 300.82 138.21 300.20 Z" />
</svg>
</div>



<div class="indoorhomevalue1">
<?php //temperture indoor celsius
 if (anyToC($weather["temp_indoor"]) >30){echo "<indoorred1>",$weather["temp_indoor"]  ;echo "&deg; " ; }
 else if (anyToC($weather["temp_indoor"]) >24){echo "<indoororange1>",$weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >20){echo "<indooryellow1>",$weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >15){ echo "<indoorgreen1>", $weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >0){ echo "<indoorblue1>", $weather["temp_indoor"]  ;echo "&deg;" ; }
?>
</div>

<div class="weather34indoortrend">
<?php 
if($weather["temp_indoor_trend"] >0)echo number_format($weather["temp_indoor_trend"],1).'&deg;&nbsp; '.$risingsymbol;
else if($weather["temp_indoor_trend"]<0)echo number_format($weather["temp_indoor_trend"],1).'&deg;&nbsp;'.$fallingsymbol;
else if($weather["temp_indoor_trend"] ==0)echo 'Steady'; 
?></div>

</div></div>
        
        
        
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <span style="position:absolute;margin-left:0;margin-top:30px;font-size:1.2em;color:#555;">Indoor Temperature</span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php 
			  if($weather["humidity_indoor"]<35){echo "<red>". $weather["humidity_indoor"]."</red>%";}
			  else if($weather["humidity_indoor"]<60){echo "<yellow>". $weather["humidity_indoor"]."</red>%";}
			  else if($weather["humidity_indoor"]<80){echo "<green>". $weather["humidity_indoor"]."</red>%";}
			  else if($weather["humidity_indoor"]<=100){echo "<blue>". $weather["humidity_indoor"]."</red>%";}
			  
			  ?></span> Humidity
            </div>
            <div class="weather34-uvrate-bar" style="top:80px;">
   <div class="weather34-solarrate-bar">
 <svg id="weather34 humidity bar svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["humidity_indoor"]==100){echo "rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["humidity_indoor"]>=90){echo " rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>=80){echo " rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>70){echo " rgba(18, 122, 161,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>60){echo " rgba(38, 139, 127,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>50){echo " rgba(38, 139, 127,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>45){echo " rgba(77, 170, 74,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>40){echo " rgba(110, 182, 57,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>30){echo " rgba(141, 186, 51,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>20){echo " rgba(177, 190, 44,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>10){echo " rgba(214, 195, 38,  0.7)";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>0){echo " rgba(248, 199, 32, 0.6)";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</div></div>
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
			 <?php if($weather["humidity_indoor"]<35){echo "<red>Humidity Air is Dry</red>";}
			  else if($weather["humidity_indoor"]<70){echo "<green>Humidity comfort is Good";}			 
			  else if($weather["humidity_indoor"]<=100){echo "<blue>Humidity is high <br>uncomfortable conditions";}?></span>
              <br>
              Feels Like
              <?php if(anyToC($weather["temp_indoor_feel"])>25){echo "<red>".$weather["temp_indoor_feel"]."</red>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>20){echo "<yellow>".$weather["temp_indoor_feel"]."</yellow>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>18){echo "<orange>".$weather["temp_indoor_feel"]."</orange>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>0){echo "<blue>".$weather["temp_indoor_feel"]."</blue>&deg;".$weather["temp_units"];}?>
              
              
              
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            
       
</section>
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
           <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:1.1rem;font-family:Arial, Helvetica, sans-serif;">
               <?php echo $info ;?> <orange>Guide</orange><p>
<strong>Long term Temperatures below <yellow>15&deg;C/59&deg;F</yellow> can cause </strong><br>
<?php echo $info ;?>Dampness<br>
<?php echo $info ;?>Risk of colds and respiratory illness<br><br>
<p>
<strong>Long term Temperatures above <red>25&deg;C/77&deg;F</red> can cause </strong><br>
<?php echo $info ;?>Risk of electrical items overheating<br>
<?php echo $info ;?>Sleep deprevation
            </div>
         </div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:1.1rem;font-family:Arial, Helvetica, sans-serif;">
               <?php echo $info ;?> <orange>Guide</orange><p>
<strong>Humidity below <red>35%</red> can cause </strong><br>
<?php echo $info ;?>Dry, itchy skin and hair<br>
<?php echo $info ;?>Risk of colds and respiratory illness<br><br>
<p>
<strong>Humidity above <red>80%</red> can cause </strong><br>
<?php echo $info ;?>Irritable feelings<br>
<?php echo $info ;?>Sleep deprevation

            </div>
        </div>
</section>


<div class="provided">  
&nbsp;
<?php echo $info?> CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>