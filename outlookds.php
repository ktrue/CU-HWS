<?php
// 31-Jan-2019 - added DarkSky multilanguage support - ktrue
error_reporting(E_ALL);
include_once('settings.php');
include_once('common.php');
include_once('livedata.php');
ini_set('default_charset','UTF-8');
header('Content-type: text/html; charset=UTF-8');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	OUTLOOK DARKSKY WEATHER FORECAST: May 2018					 	                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo "${stationName}";?> <?php echo 'Forecast' ;
		$rainsvg= '<svg id="weather34 raindrop" x="0px" y="0px" viewBox="0 0 512 512" width="8px" fill="#01a4b5" stroke="#01a4b5" stroke-width="3%"><g><g><path d="M348.242,124.971C306.633,58.176,264.434,4.423,264.013,3.889C262.08,1.433,259.125,0,256,0	c-3.126,0-6.079,1.433-8.013,3.889c-0.422,0.535-42.621,54.287-84.229,121.083c-56.485,90.679-85.127,161.219-85.127,209.66
			C78.632,432.433,158.199,512,256,512c97.802,0,177.368-79.567,177.368-177.369C433.368,286.19,404.728,215.65,348.242,124.971z
			 M256,491.602c-86.554,0-156.97-70.416-156.97-156.97c0-93.472,123.907-263.861,156.971-307.658
			C289.065,70.762,412.97,241.122,412.97,334.632C412.97,421.185,342.554,491.602,256,491.602z"/></g></g><g>
	<g><path d="M275.451,86.98c-1.961-2.815-3.884-5.555-5.758-8.21c-3.249-4.601-9.612-5.698-14.215-2.45
			c-4.601,3.249-5.698,9.613-2.45,14.215c1.852,2.623,3.75,5.328,5.688,8.108c1.982,2.846,5.154,4.369,8.377,4.369
			c2.012,0,4.046-0.595,5.822-1.833C277.536,97.959,278.672,91.602,275.451,86.98z"/></g></g><g>	<g>
		<path d="M362.724,231.075c-16.546-33.415-38.187-70.496-64.319-110.213c-3.095-4.704-9.42-6.01-14.126-2.914
			c-4.706,3.096-6.01,9.421-2.914,14.127c25.677,39.025,46.9,75.379,63.081,108.052c1.779,3.592,5.391,5.675,9.148,5.675
			c1.521,0,3.064-0.342,4.517-1.062C363.159,242.241,365.224,236.123,362.724,231.075z"/>
	</g></svg>';
	
	$snowflakesvg= '<svg id="weather34 snowflake" x="0px" y="0px" viewBox="0 0 34.875 34.876"  width="8px" fill="#01a4b5" stroke="#01a4b5" stroke-width="3%"><g><path d="M32.916,24.087c-0.181-0.635-0.598-1.161-1.173-1.481c-1.062-0.592-2.462-0.25-3.179,0.697l-5.193-2.998l4.025-1.078
		c0.268-0.072,0.425-0.348,0.354-0.613s-0.346-0.426-0.611-0.354l-4.992,1.336l-3.707-2.14l3.71-2.142l4.989,1.336
		c0.043,0.012,0.087,0.017,0.13,0.017c0.221,0,0.423-0.147,0.481-0.371c0.07-0.267-0.087-0.541-0.354-0.612l-4.022-1.078
		l5.197-3.001c0.463,0.624,1.183,1.015,1.972,1.015l0,0c0.417,0,0.833-0.108,1.2-0.312c1.119-0.625,1.553-1.996,1.046-3.148
		c-0.031-0.071-0.054-0.143-0.092-0.212c-0.128-0.229-0.301-0.423-0.492-0.594c-0.766-0.68-1.942-0.874-2.867-0.36
		c-0.979,0.546-1.43,1.663-1.193,2.704l-5.271,3.044l1.079-4.026c0.07-0.267-0.088-0.541-0.354-0.612
		c-0.267-0.07-0.54,0.087-0.612,0.354l-1.338,4.992l-3.709,2.14v-4.282l3.652-3.652c0.195-0.195,0.195-0.512,0-0.707
		c-0.194-0.195-0.512-0.195-0.707,0l-2.945,2.946V4.876c1.124-0.231,1.972-1.228,1.972-2.419c0-1.192-0.851-2.19-1.977-2.42
		c0,0.008,0.005,0.015,0.005,0.023v0.012C17.778,0.03,17.612,0,17.439,0c-0.174,0-0.34,0.03-0.501,0.072V0.059
		c0-0.008,0.004-0.015,0.005-0.023c-1.125,0.23-1.974,1.228-1.974,2.419c0,1.19,0.846,2.186,1.969,2.418v6.02l-2.946-2.945
		c-0.195-0.195-0.512-0.195-0.707,0c-0.195,0.195-0.195,0.512,0,0.707l3.653,3.652v4.282l-3.708-2.141l-1.338-4.992
		c-0.072-0.267-0.345-0.424-0.612-0.354c-0.267,0.071-0.425,0.346-0.354,0.612l1.079,4.026l-5.271-3.044
		C6.97,9.654,6.519,8.538,5.54,7.991c-0.92-0.512-2.1-0.319-2.865,0.361C2.483,8.523,2.31,8.717,2.181,8.947
		C2.143,9.015,2.12,9.088,2.089,9.158c-0.506,1.151-0.073,2.522,1.047,3.148c0.367,0.204,0.782,0.312,1.2,0.312
		c0.789,0,1.51-0.392,1.972-1.015l5.197,3.001l-4.022,1.078c-0.268,0.071-0.425,0.346-0.354,0.612
		c0.061,0.224,0.263,0.371,0.482,0.371c0.043,0,0.086-0.005,0.13-0.017l4.989-1.336l3.708,2.142l-3.707,2.14l-4.992-1.336
		c-0.265-0.072-0.541,0.088-0.612,0.354c-0.07,0.269,0.087,0.541,0.354,0.613l4.025,1.078l-5.193,2.998
		c-0.717-0.947-2.119-1.287-3.179-0.697c-0.575,0.32-0.992,0.849-1.173,1.481c-0.158,0.56-0.105,1.14,0.126,1.666
		c0.031,0.069,0.055,0.144,0.093,0.211c0.128,0.229,0.298,0.425,0.485,0.599c0.451,0.418,1.041,0.67,1.673,0.67
		c0.418,0,0.833-0.107,1.2-0.312c0.576-0.319,0.993-0.849,1.173-1.481c0.115-0.406,0.113-0.824,0.021-1.224l5.271-3.043
		l-1.077,4.021c-0.07,0.269,0.088,0.541,0.354,0.613c0.043,0.012,0.087,0.018,0.13,0.018c0.221,0,0.423-0.147,0.482-0.371
		l1.335-4.988l3.709-2.143v4.281l-3.653,3.652c-0.195,0.195-0.195,0.512,0,0.707c0.195,0.195,0.512,0.195,0.707,0l2.946-2.945v6.021
		c-1.124,0.23-1.972,1.229-1.972,2.419s0.851,2.188,1.977,2.42c0-0.008,0.995-0.022,0.995-0.022c0,0.008,1.969-0.662,1.969-2.396
		c0-1.189-0.846-2.188-1.969-2.418v-6.021l2.945,2.945c0.099,0.1,0.227,0.146,0.354,0.146s0.257-0.049,0.354-0.146
		c0.195-0.193,0.195-0.512,0-0.707l-3.651-3.652v-4.281l3.709,2.142l1.335,4.988c0.061,0.223,0.263,0.37,0.481,0.37
		c0.043,0,0.086-0.004,0.131-0.016c0.267-0.072,0.425-0.348,0.354-0.613l-1.076-4.021l5.271,3.043
		c-0.093,0.4-0.095,0.816,0.021,1.223c0.18,0.635,0.598,1.162,1.173,1.482c0.367,0.204,0.782,0.312,1.2,0.312
		c0.632,0,1.223-0.252,1.673-0.67c0.188-0.174,0.356-0.369,0.484-0.6c0.038-0.066,0.062-0.141,0.093-0.211
		C33.021,25.229,33.073,24.646,32.916,24.087z M29.823,8.87c0.22-0.122,0.466-0.186,0.714-0.186c0.269,0,0.523,0.073,0.747,0.203
		c0.222,0.131,0.409,0.319,0.538,0.551c0.042,0.076,0.074,0.155,0.102,0.234c0.229,0.661-0.038,1.413-0.669,1.765
		c-0.219,0.122-0.465,0.186-0.713,0.186l0,0c-0.433,0-0.83-0.196-1.105-0.514c-0.064-0.075-0.13-0.151-0.181-0.24
		c-0.125-0.224-0.178-0.467-0.179-0.708C29.076,9.644,29.339,9.139,29.823,8.87z M5.621,10.869
		c-0.049,0.088-0.107,0.169-0.175,0.243c-0.443,0.497-1.225,0.659-1.824,0.326c-0.632-0.353-0.898-1.104-0.67-1.766
		c0.027-0.079,0.06-0.158,0.102-0.234c0.13-0.232,0.316-0.42,0.539-0.551c0.224-0.13,0.479-0.203,0.747-0.203
		c0.248,0,0.495,0.064,0.714,0.186C5.536,9.14,5.802,9.644,5.8,10.162C5.798,10.4,5.746,10.645,5.621,10.869z M5.75,25.165
		c-0.106,0.378-0.354,0.69-0.697,0.882c-0.22,0.122-0.467,0.188-0.715,0.188c-0.267,0-0.523-0.072-0.747-0.203
		c-0.222-0.131-0.408-0.319-0.538-0.553c-0.043-0.074-0.074-0.152-0.103-0.232c-0.099-0.283-0.111-0.588-0.028-0.883
		c0.107-0.379,0.355-0.69,0.698-0.883c0.219-0.123,0.465-0.188,0.714-0.188c0.432,0,0.829,0.195,1.105,0.514
		c0.064,0.075,0.13,0.151,0.18,0.24c0.123,0.221,0.178,0.463,0.18,0.707C5.8,24.893,5.789,25.029,5.75,25.165z M18.908,32.458
		c0,0.634-0.406,1.17-0.97,1.376h-1c-0.564-0.205-0.972-0.742-0.972-1.376s0.406-1.171,0.972-1.376
		c0.156-0.057,0.323-0.094,0.499-0.094c0.177,0,0.344,0.037,0.501,0.095C18.5,31.288,18.908,31.824,18.908,32.458z M17.439,3.927
		c-0.177,0-0.344-0.036-0.501-0.094c-0.563-0.206-0.969-0.742-0.969-1.376c0-0.634,0.404-1.17,0.969-1.376
		c0.157-0.058,0.324-0.094,0.501-0.094c0.176,0,0.343,0.036,0.499,0.093c0.563,0.205,0.972,0.742,0.972,1.376
		c0,0.634-0.407,1.171-0.972,1.376C17.782,3.892,17.615,3.927,17.439,3.927z M31.923,25.244c-0.027,0.08-0.061,0.158-0.103,0.234
		c-0.13,0.231-0.326,0.414-0.554,0.541c-0.438,0.244-0.992,0.278-1.445,0.025c-0.342-0.189-0.59-0.504-0.697-0.882
		c-0.038-0.136-0.05-0.272-0.049-0.41c0.001-0.245,0.057-0.487,0.18-0.708c0.05-0.089,0.114-0.165,0.18-0.238
		c0.275-0.318,0.674-0.516,1.104-0.516c0.249,0,0.495,0.062,0.714,0.188c0.344,0.19,0.59,0.504,0.698,0.881
		C32.037,24.656,32.023,24.96,31.923,25.244z"/></g></svg>';			
		?> </title>
		
		<style>		
.darkskyforecasting{float:left;display:block;margin-right:0;width:40%;border-radius:4px;margin:2px;margin-top:5px;font-family:Arial;margin-left:5px;height:200px;padding:5px;background-color:rgba(253, 166, 16, 1.000);border:1px solid rgba(153,155,156,0.3);color:#aaa;font-size:12px;color:#aaa;font-family:Arial;line-height:12px}darkskyweekday{position:absolute;margin:3px;background-color:rgba(253, 166, 16, 1.000);text-align:center;padding:5px;color:#aaa;font-family:Arial;font-size:11px;margin-bottom:20px;border-radius:4px;font-size:12px;color:#aaa;font-family:Arial;line-height:15px}darkskytemphi{margin-top:5px;font-size:13px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}darkskytemphi span{font-size:13px;color:#aaa}darkskytemplo{margin-top:5px;font-size:13px;color:#00a4b4;font-family:Arial}darkskytemplo span{font-size:13px;color:#aaa;font-family:Arial}darkskysummary{font-size:12px;color:#aaa;font-family:Arial;line-height:11px}darkskywindspeed{font-size:12px;color:#aaa;font-family:Arial;line-height:11px}.darkskywindspeedicon{position:absolute;font-size:11px;color:#aaa;font-family:Arial;line-height:11px;margin-top:-55px;margin-left:67px}.darkskywindgust{position:absolute;font-size:11px;color:#aaa;font-family:Arial;line-height:11px;margin-top:-55px;margin-left:97px}.darkskydiv{position:relative;width:700px;overflow:hidden!important;height:360px;float:none;margin-left:2%;margin-top:5px}

.darkskyforecastinghome{
float:left;display:inline;margin-right:0;width:21%;border-radius:4px;margin:5px;font-family:Arial;margin-left:0;height:160px;padding:5px;
background: rgba(29, 32, 34, 1.000);
background: linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 1.000) 11%,rgba(29, 32, 34, 1.000) 100%,rgba(229, 77, 11, 0) 0%);
background: -webkit-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 1.000) 11%,rgba(29, 32, 34, 1.000) 100%,rgba(229, 77, 11, 0) 0%);
background: -moz-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 1.000) 11%,rgba(29, 32, 34, 1.000) 100%,rgba(229, 77, 11, 0) 0%);
background: -o-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 1.000) 11%,rgba(29, 32, 34, 1.000) 100%,rgba(229, 77, 11, 0) 0%);
border:0;color:#aaa;overflow:hidden!important;margin-bottom:5px;border:solid 1px #444;border-bottom:solid 1px #444;border-top:1px solid rgba(97, 106, 114, 1.000);}
.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:11px;margin:0;background:0;margin-bottom:12px;}
.darkskyforecasthome darkskytemphihome{font-size:12px;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemphihome span{font-size:12px;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome{font-size:12px;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome span{font-size:12px;color:#01a4b5;font-family:Arial}.darkskyforecasthome darkskytempwindhome{font-size:11px;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span{font-size:12px;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span2{font-size:12px;color:#aaa;font-family:Arial;line-height:10px;margin-top:3px}.darkskyiconcurrent img{position:relative;width:80px;margin-top:-50px;margin-left:0;margin-bottom:-10px;margin-right:0;padding-right:0;float:left}.darkskynexthours{line-height:12px}.darkskynexthours span2{line-height:12px}body{line-height:11px}grey{color:#aaa}blue1{color:#01a4b5;text-transform:capitalize}orange1{color:#ff8841}green{color:rgba(144,177,42,1)}a{font-size:10px;color:#aaa;text-decoration:none!important;font-family:arial}.forecastupdated{position:absolute;font-size:10px;color:#aaa;font-family:arial;bottom:25px;float:right;margin-left:575px}	
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:0;width:103%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:5px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo "${stationName} \n";?> Forecast "></div>
		<div style="position:absolute;width:725px;background:none;margin:0 auto;margin-left:7%;margin-top:5px;">
			
        <br>
		<script src="js/jquery.js"></script>
		 <div class="darkskyforecasthome">
		<div class="darkskydiv">
<?php
	print "<!-- language='$language' darkskyCond = ".count($darkskyCond)." entries. -->\n";
	foreach ($darkskydayCond as $cond) {
		$darkskydayTime = $cond['time'];
		$darkskydaySummary = $cond['summary'];
		$darkskydayIcon = $cond['icon'];
		$darkskydayTempHigh = round($cond['temperatureMax']);
		$darkskydayTempLow = round($cond['temperatureMin']);
		$darkskydayWinddir = $cond['windBearing'];
		$darkskydayClouds = $cond['cloudCover']*100;
		$darkskydayHumidity = $cond['humidity']*100;
		$darkskydayUV = $cond['uvIndex'];
		$darkskydayPrecipProb = $cond['precipProbability']*100;

		if (isset($cond['precipType'])){
			$darkskydayPrecipType = $cond['precipType'];
		} else {
			$darkskydayPrecipType = '';
		}
		$darkskydayacumm=round($cond['precipAccumulation'],1);
		$darkskydayprecipIntensity = number_format($cond['precipIntensityMax'],1);         
					$darkskydayWindSpeed = round($cond['windSpeed'],0);
		$darkskydayWindGust = round($cond['windGust'],0);
		echo '<div class="darkskyforecastinghome">';  
		echo '<div class="darkskyweekdayhome">'.strftime("%a %b %e", $darkskydayTime).'</div>';  
		if ($darkskydayacumm>0 ){echo '<img src="css/darkskyicons/snow.svg" width="50"></img><br>';} 
		else if ($darkskydayIcon == 'partly-cloudy-night'){echo '<img src="css/darkskyicons/partly-cloudy-day.svg" width="50"></img><br>';}  
		else echo '<img src="css/darkskyicons/'.$darkskydayIcon.'.svg" width="50"></img><br>';	  
		
		echo '<darkskytemphihome><span><img src=css/icons/temp34.svg width=10px> '.$darkskydayTempHigh.'°<grey> | </grey></span></darkskytemphihome>';
		echo '<darkskytemplohome><span>'.$darkskydayTempLow.'° &nbsp;</span></darkskytemplohome>';  
		echo '<darkskytemplohome><grey> '.$sunlight.' UVI <orange1>'.$darkskydayUV.'</orange1></grey></darkskytemplohome><br>';  
		
		echo "<div class='darkskywindspeedicon'><img src = 'css/windicons/avgw.svg' width='30' style='-webkit-transform:rotate(".$darkskydayWinddir."deg);-moz-transform:rotate(".$darkskydayWinddir."deg);-o-transform:rotate(".$darkskydayWinddir."deg);transform:rotate(".$darkskydayWinddir."deg)'>					   
		 ";			
		 
	echo '';
	if ($darkskydayWinddir <15 ) echo $lang['North'];
	elseif ($darkskydayWinddir <45 ) echo $lang['NNE'];
	elseif ($darkskydayWinddir <90 ) echo $lang['ENE'];
	elseif ($darkskydayWinddir <110 ) echo $lang['East'];
	elseif ($darkskydayWinddir <150 )  echo $lang['SE'];
	elseif ($darkskydayWinddir <170 )  echo $lang['SSE'];
	elseif ($darkskydayWinddir <190 ) echo $lang['South'];
	elseif ($darkskydayWinddir <220 ) echo $lang['SSW'];
	elseif ($darkskydayWinddir <250 ) echo $lang['SW'];
	elseif ($darkskydayWinddir <270 ) echo $lang['West'];
	elseif ($darkskydayWinddir <300 ) echo $lang['NW'];
	elseif ($darkskydayWinddir <340 ) echo $lang['NWN'];
	elseif ($darkskydayWinddir <360 ) echo $lang['North'];
	echo  '</div>';					   	 
	echo "<div class='darkskywindgust'>".$darkskydayWindSpeed	." ".$windunit."</div>";
	echo '<br><darkskytempwindhome><span>'.$darkskydaySummary.' </darkskywindhome></span><br>';
	if ( $darkskydayacumm>0){
	echo ''.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow <blue1>&nbsp;'.$darkskydayacumm.'</blue1> cm</darkskywindhome><br></span>';}  
	
	else if ($darkskydayPrecipType='rain'){
	echo ''.$rainsvg.'&nbsp;<darkskytempwindhome><span>'.$lang['Rain'].' <blue1>&nbsp;'. $darkskydayprecipIntensity.'</blue1>'.$rainunit.'&nbsp;<blue1>'.$darkskydayPrecipProb.'</blue1>%</darkskywindhome></span>';}  
	 
	echo  '</div>';
}?>
 </div></div></div>                
                  
 <div style="position:absolute;bottom:5px;z-index:9999;font-weight:normal;font-size:10px;color:#aaa;text-decoration:none !important;float:right;font-family:arial;">
  
   &nbsp;&nbsp;data provided by <a href="https://darksky.net/about" title="https://darksky.net/about" target="_blank">DarkSky</a> -- <?php echo $info;?> <?php echo 'CSS/PHP scripts by weather34.com '.date('Y') ?></div>
  </body>
  </html>