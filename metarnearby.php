<?php include('metar34get.php');
$locationinfo='<svg id="i-location2" viewBox="0 0 32 32" width="15px" height="15px" fill="none" stroke="rgba(255, 124, 57, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
<circle cx="16" cy="11" r="4" /><path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" /></svg>';
$alert="<svg id='firealert' viewBox='0 0 32 32' width='18px' height='18px' fill='none' stroke='rgba(255, 124, 57, 1.000)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
<path d='M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25' /></svg>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Metar Aviation Weather Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;
background: #1a1d21; background: -moz-linear-gradient(top, #1a1d21 0%, #1a1d21 95%, #1a1d21 95%, rgba(41, 43, 46,1) 10%); background: -webkit-linear-gradient(top, #1a1d21 0%,#1a1d21 95%,#1a1d21 95%,rgba(41, 43, 46,1) 10%); 
background: linear-gradient(to bottom, #1a1d21 0%,#1a1d21 9%,#1a1d21 95%,rgba(41, 43, 46,1) 10%); background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:rgba(230, 161, 65, 1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}
.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.lotempraw{font-size:12px;font-family:weathertext;line-height:11px;margin-top:5px;}
purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:13px;float:right;position:absolute;left:135px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}.hitemp{color:#aaa;font-size:13px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}.hitemp span2{color:#aaa;font-size:1.1em;margin-left:4px;}
.hitempy{background:rgba(61, 64, 66, 0.8);color:#aaa;font-size:12px;width:240px;padding:1px;border-radius:4px;margin-top:2px;margin-left:0;padding-left:3px;}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:10px;bottom:2px;}
.metar34compass1>.metar34compass-line1,.metar34compass>.metar34compass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,00);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,00)}
.metar34compass1>.metar34compass-line1,.solarcircle4{-webkit-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%}
.text1,.windvalue1{font-family:weathertext,Arial;font-size:22px}
.windseparator{color:rgba(57,61,64,1)}
.text1,.windvalue1{color:#aaa}
.windirection1{width:100%;margin:60px 0 0 85px}
.metar34compass1{position:absolute;width:150px;height:150px;text-align:center;top:30px;margin-left:140px;z-index:1}
.text1{z-index:10;text-align:center;margin:55px 0 auto}
.metar34compass1>.metar34compass-line1{position:absolute;z-index:10;left:25px;top:25px;bottom:25px;-o-border-radius:100%;border-radius:100%;border-left:8px solid rgba(95,96,97,.5);border-top:8px solid rgba(95,96,97,.8);border-right:8px solid rgba(95,96,97,.5);border-bottom:8px solid rgba(95,96,97,.8);margin:auto}
.thearrow1:before{width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-3px;border:2px solid #fff;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.metar34compass1>.windirectiontext1{display:block;text-align:center;color:#aaa;font-family:Arial,sans-serif;font-weight:600;line-height:12px;font-size:11px;z-index:10;margin:0 0 auto}
.windirectiontext1 span{color:#9aba2f}
.thearrow2{-webkit-transform:rotate(<?php echo $metar34windir;?>deg);-moz-transform:rotate(<?php echo $metar34windir;?>deg);-o-transform:rotate(<?php echo $metar34windir;?>deg);-ms-transform:rotate(<?php echo $metar34windir;?>deg);transform:rotate(<?php echo $metar34windir;?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:RGBA(255,121,58,1.00) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:before{content:'';width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-5px;border:2px solid RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
spancalm{postion:relative;font-family:weathertext,Arial;font-size:26px;}.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Metar Aviation Weather Data  <?php echo $metar34stationid ," ", $metar34stationname;?>"></div>
   
<section class="weather34cards"><div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php	// temp 	
	if ($tempunit=='C' &&  $metar34temperaturec >30)  {
	echo "<red>",$metar34temperaturec  . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34temperaturec >18)  {
	echo "<orange>",$metar34temperaturec  . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34temperaturec >10)  {
	echo "<green>",$metar34temperaturec  . "</value>";} 		
	else if ($tempunit=='C' &&  $metar34temperaturec >=-50) {
	echo "<blue>",$metar34temperaturec  . "</value>";}		
	//f
	if ($tempunit=='F' && $metar34temperaturef>90)  {
	echo "<red>",$metar34temperaturef. "</value>";} 	
	else if ($tempunit=='F' &&$metar34temperaturef>65)  {
	echo "<orange>",$metar34temperaturef. "</value>";} 	
	else if ($tempunit=='F' &&$metar34temperaturef>50)  {
	echo "<green>",$metar34temperaturef. "</value>";} 		
	else if ($tempunit=='F' &&$metar34temperaturef>=1) {
	echo "<blue>",$metar34temperaturef. "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]," Temp";
?></span> 

  
   <div class="weather34-uvrate-bar"> 	
 <svg iopacity="0.8"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($metar34temperaturec>38){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($metar34temperaturec>35){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($metar34temperaturec>30){echo " rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($metar34temperaturec>27){echo " rgba(255, 69, 1,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($metar34temperaturec>25){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($metar34temperaturec>20){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($metar34temperaturec>18){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($metar34temperaturec>15){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($metar34temperaturec>12){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($metar34temperaturec>=10){echo " rgba(254, 255, 3,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($metar34temperaturec>=5){echo " rgba(4, 255, 170,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($metar34temperaturec>-50){echo "rgba(0, 153, 170, 1)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
  
  
  
  
  
	 
 <div class="lotemp">
<?php //dewpoint
	if ($tempunit=='C' &&  $metar34dewpointc>30)  {
	echo "<red>",$metar34dewpointc . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34dewpointc>18)  {
	echo "<orange>",$metar34dewpointc . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34dewpointc>10)  {
	echo "<green>",$metar34dewpointc . "</value>";} 		
	else if ($tempunit=='C' &&  $metar34dewpointc>=-50) {
	echo "<blue>",$metar34dewpointc . "</value>";}		
	//f
	if ($tempunit=='F' && $metar34dewpointf>90)  {
	echo "<red>",$metar34dewpointf . "</value>";} 	
	else if ($tempunit=='F' && $metar34dewpointf>65)  {
	echo "<orange>",$metar34dewpointf . "</value>";} 	
	else if ($tempunit=='F' && $metar34dewpointf>50)  {
	echo "<green>",$metar34dewpointf . "</value>";} 		
	else if ($tempunit=='F' && $metar34dewpointf>=1) {
	echo "<blue>",$metar34dewpointf . "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]," Dewpoint";
?>
<div class="lotemp"><yellow><?php echo $metar34humidity ,"</yellow><sup><unit>% <sup><unit> Humidity"; 	?></sup></unit></span></div>
<div class="icon"><img src=css/icons/temp34.svg width=25px></div></div></div>
<div class="weather34card__count-container">  <div class="weather34card__count-text"> </div> </div><div class="weather34card__stuff-container">            
<div class="weather34card__stuff-text"></div></div>
<actual>Temperature</actual>
</div></div></div> </div>      
<div class="weather34card weather34card--earthquake2">  <div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<?php //kmh
if ($tempunit=='C'){echo "<yellow>",$metar34windspeedkmh  . "</yellow>";echo "<sup><unit> KM/H</sup></unit>";}	
else if ($tempunit=='F'){echo "<orange>",$metar34windspeedmph  . "</value>";echo "<sup><unit> MPH</sup></unit>";}?>
</span></div></span> 
<div class="lotemp">
<?php //mph
if ($tempunit=='C'){echo "<orange>",$metar34windspeedmph  . "</value>";echo "<sup><unit> MPH</sup></unit><br>";}	
else if ($tempunit=='F'){echo "<orange>",$metar34windspeedkmh  . "</value>";echo "<sup><unit> KM/H</sup></unit><br>";}?>
<?php //mph
echo "<green>",$metar34windspeedkts."</value>";echo "<sup><unit> KTS</sup></unit><br>";?>    
<div class="metar34compass1"><div class="metar34compass-line1"><div class="thearrow2"></div></div>
<div class="text1"><div class="windvalue1" id="windvalue"><?php 
if( $metar34windir==0){echo "<spancalm>Calm</spancalm>";}else echo $metar34windir,"&deg;";?></div></div>
<div class="windirectiontext1">
<?php 
if($metar34windir<=11.25){echo "Due <span>North<br></span>";}
else if($metar34windir<=33.75){echo "North North <br><span>East</span>";}
else if($metar34windir<=56.25){echo "North <span> East<br></span>";}
else if($metar34windir<=78.75){echo "East North<br><span>East</span>";}
else if($metar34windir<=101.25){echo "Due <span> East<br></span>";}
else if($metar34windir<=123.75){echo "East South<br><span>East</span>";}
else if($metar34windir<=146.25){echo "South <span> East</span>";}
else if($metar34windir<=168.75){echo "South South<br><span>East</span>";}
else if($metar34windir<=191.25){echo "Due <span> South</span>";}
else if($metar34windir<=213.75){echo "South South<br><span>West</span>";}
else if($metar34windir<=236.25){echo "South <span> West</span>";}
else if($metar34windir<=258.75){echo "West South<br><span>West</span>";}
else if($metar34windir<=281.25){echo "Due <span> West</span>";}
else if($metar34windir<=303.75){echo "West North<br><span>West</span>";}
else if($metar34windir<=326.25){echo "North <span> West</span>";}
else if($metar34windir<=348.75){echo "North North<br><span>West</span>";}
else{echo "Due <span> North</span>";}?>
</div></div>  </div>
<div class="weather34card__count-container"> <div class="weather34card__count-textuv"><span class="weather34card__count-text--bigs"> </div>
</div><br>
 <div class="weather34card__stuff-container">
<actual>Wind Speed</actual>
<div class="icon"><img src=css/icons/gust.svg width=20px></div>
</section>
<section class="weather34cards">
<div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div></div> <?php 	echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='118px' height='91px' >";	
?></span> <div class="hitemp">
<?php //min year 
 echo '<uppercase>',$sky_desc.'</uppercase> '; ?>
<div class="lotemp">
<div class="hitemp">Pressure <green> <?php echo $metar34pressuremb ," </green>(hPa)"; 	?> - <green><?php echo $metar34pressurehg ," </green>(in)"; 	?></span></div>
<div class="hitemp">Visibility <yellow> <?php echo $metar34vismiles  ," </yellow>(mi)"; 	?> - <yellow><?php echo $metar34viskm  ," </yellow>(km)"; 	?></span></div>
<div class="icon"><img src=css/icons/clear.svg width=45px></div></div> </div> </div>
<div class="weather34card__count-container"><div class="weather34card__count-textuv"><span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>
<actual>Current Conditions</actual></div></div></div></div>
<div class="weather34card weather34card--earthquake2">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div><?php echo $metar34stationid ; ?>
</span> <div class="hitemp"><?php echo "Location <yellow>",$metar34stationname  ;?></yellow> <green><?php echo $airport1dist. "</green>(".$distanceunit.")"?> 
 <div class="lotempraw">
<?php //metar raw
echo "<sup><unit>Metar :<greyuv>" .$metar34raw."</greyuv>";?>
</div>
<div class="hitemp">
<?php //update timestamp
date_default_timezone_set($tz);$date = $metar34time;$date=str_replace('@', ' ', $date);
$date=str_replace('Z', ' ', $date);$date1 = strtotime($date) + 60*60*$UTC;echo date('D jS F H:i a ',$date1);
?> </div></div></div></div>
<div class="weather34card__count-container">
<div class="weather34card__count-textuv">
<span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>           
<actual>Airport</actual>
<div class="icon"><img src=css/icons/airport.svg width=40px></div>
</section>
<div class="provided">   
&nbsp;
Metar Aviation API Data Provided by <a href="https://www.checkwx.com/" title="https://www.checkwx.com/" target="_blank">https://www.checkwx.com/</a> <?php echo $info;?> PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>