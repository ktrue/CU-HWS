<?php
chdir(dirname(__FILE__));	
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016                                          #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: October 2016 
	# 	Third General Release: Febuary 2017  	                                                       #
	# 	Conversion.php Release: October 5th 2016  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('../settings.php');	
   // brian  says conversions now include switch for realtime conversions for canvasjs 2nd October 2016 //

####################################################################################################
// UK  to conversion WUDATACHARTS HOMEWEATHERSTATION      
####################################################################################################

if ($uk == true & $units == '' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';
$dewpointconv='parseFloat(rowData[2]';$windconv = "0.621371";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';
}

if ($uk == true & $units == 'uk' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';
$dewpointconv='parseFloat(rowData[2]';$windconv = "0.621371";$rainfallconv='1';$pressureinterval= "0.5";  $rainfallconvmm='10';
}


if ($uk == true & $units == 'scandinavia' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.44704";$rainfallconv='10';$pressureinterval= "0.5"; $rainfallconvmm='10';

}

if ($uk == true & $units == 'metric' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.621371";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';

}

if ($uk == true & $units == 'us' ) {
	
$pressureconv='0.0295299830714';$temperatureconvhi='parseFloat((rowData[1] *1.8) +32';$temperatureconvlo='parseFloat((rowData[3] *1.8) +32';$temperatureconv='parseFloat((rowData[1] *1.8) +32';
$dewpointconv='parseFloat((rowData[2] *1.8) +32';$windconv = "1";$rainfallconv='0.0393701';$pressureinterval= "0.5";  $rainfallconvmm='0.0393701';
}

####################################################################################################
// END UK  to conversion  2ND OCTOBER 2016...
####################################################################################################

####################################################################################################
// UK  to conversion WUDATACHARTS HOMEWEATHERSTATION      
####################################################################################################

if ($scandinavia == true & $units == '' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';
$dewpointconv='parseFloat(rowData[2]';$windconv = "0.277778";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';
}

if ($scandinavia == true & $units == 'uk' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';
$dewpointconv='parseFloat(rowData[2]';$windconv = "0.277778";$rainfallconv='1';$pressureinterval= "0.5";  $rainfallconvmm='10';
}


if ($scandinavia == true & $units == 'scandinavia' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.277778";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';

}

if ($scandinavia == true & $units == 'metric' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.277778";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';

}

if ($scandinavia == true & $units == 'us' ) {
	
$pressureconv='0.0295299830714';$temperatureconvhi='parseFloat((rowData[1] *1.8) +32';$temperatureconvlo='parseFloat((rowData[3] *1.8) +32';$temperatureconv='parseFloat((rowData[1] *1.8) +32';
$dewpointconv='parseFloat((rowData[2] *1.8) +32';$windconv = "0.44704";$rainfallconv='0.0393701';$pressureinterval= "0.5";  $rainfallconvmm='0.0393701';
}

####################################################################################################
// END UK  to conversion  2ND OCTOBER 2016...
####################################################################################################



####################################################################################################
// USA  to conversion WUDATACHARTS HOMEWEATHERSTATION      
####################################################################################################

if ($usa == true & $units == '' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "1";$rainfallconv='1';$pressureinterval= "0.5";  $rainfallconvmm='1';


}


if ($usa == true & $units == 'us' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "1";$rainfallconv='1';$pressureinterval= "0.5";  $rainfallconvmm='1';


}

if ($usa == true & $units == 'scandinavia' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';
$windconv = "0.277778";$rainfallconv='25.4';$pressureinterval= "0.5";    $rainfallconvmm='0.0393701';$rainfallconvmm='25.4';

}

if ($usa == true & $units == 'metric' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';$windconv = "1.60934";$rainfallconv='25.4';$pressureinterval= "0.5";    $rainfallconvmm='25.4';
}



if ($usa == true & $units == 'uk' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';
$windconv = "1";$rainfallconv='25.4';$pressureinterval= "0.5";    $rainfallconvmm='25.4';

}

####################################################################################################
// END USA  to conversion   2ND OCTOBER 2016...
####################################################################################################


####################################################################################################
// REST OF WORLD  to conversion WUDATACHARTS HOMEWEATHERSTATION  (metric)      
####################################################################################################

if ($restoftheworld == true & $units == '' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "1";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';
}



if ($restoftheworld == true & $units == 'us' ) {
	
$pressureconv='0.0295299830714';$temperatureconvhi='parseFloat((rowData[1] *1.8) +32';$temperatureconvlo='parseFloat((rowData[3] *1.8) +32';$temperatureconv='parseFloat((rowData[1] *1.8) +32';
$dewpointconv='parseFloat((rowData[2] *1.8) +32';$windconv = "0.621371";$rainfallconv='0.393701';$pressureinterval= "0.5";  $rainfallconvmm='0.393701';
}

if ($restoftheworld == true & $units == 'uk' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.621371";$rainfallconv='10';$pressureinterval= "0.5"; $rainfallconvmm='10';
}

if ($restoftheworld == true & $units == 'scandinavia' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "0.277778";$rainfallconv='10';$pressureinterval= "0.5";$rainfallconvmm='10';
}

if ($restoftheworld == true & $units == 'metric' ) {
	
$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';$dewpointconv='parseFloat(rowData[2]';
$windconv = "1";$rainfallconv='10';$pressureinterval= "0.5";  $rainfallconvmm='10';
}

####################################################################################################
// END REST OF WORLD  to conversion  2ND OCTOBER 2016...
####################################################################################################


####################################################################################################
// UK  to conversion WUDATACHARTS HOMEWEATHERSTATION      for warehamwx DEMBER 15 2016
####################################################################################################

//if ($uk == true & $units == '' ) {
	
//$pressureconv='33.8637526';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
//$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';$windconv = "0.621371";$rainfallconv='25.4';$pressureinterval= "0.5";  $rainfallconvmm='25.4';
//}

//if ($uk == true & $units == 'uk' ) {
	
//$pressureconv='33.8637526';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
//$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';$windconv = "0.621371";$rainfallconv='25.4';$pressureinterval= "0.5";  $rainfallconvmm='25.4';
//}


//if ($uk == true & $units == 'scandinavia' ) {
	
//$pressureconv='33.8637526';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
//$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';$windconv = "0.44704";$rainfallconv='25.4';$pressureinterval= "0.5";  $rainfallconvmm='25.4';

//}

//if ($uk == true & $units == 'metric' ) {
	
//$pressureconv='33.8637526';$temperatureconvhi='parseFloat((rowData[1]- 32) / 1.8';$temperatureconvlo='parseFloat((rowData[3]- 32) / 1.8';$temperatureconv='parseFloat((rowData[1]- 32) / 1.8';
//$dewpointconv='parseFloat((rowData[2]- 32) / 1.8';$windconv = "0.621371";$rainfallconv='25.4';$pressureinterval= "0.5";  $rainfallconvmm='25.4';

//}

//if ($uk == true & $units == 'us' ) {
//	$pressureconv='1';$temperatureconvhi='parseFloat(rowData[1]';$temperatureconvlo='parseFloat(rowData[3]';$temperatureconv='parseFloat(rowData[1]';
//$dewpointconv='parseFloat(rowData[2]';$windconv = "1";$rainfallconv='1';$pressureinterval= "0.5";  $rainfallconvmm='1';
//}

####################################################################################################
// END UK  to conversion  15 December 2016... FOR wareham wx
####################################################################################################

?>