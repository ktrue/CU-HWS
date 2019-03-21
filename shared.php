<?php include('weather34svgicons.php');
error_reporting(0); 
// Speed
function ktsTokmh(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(1.852*$weather[$field],1);
}

function ktsTomph(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(1.150779*$weather[$field],1);
}

function ktsToms(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.514444*$weather[$field],2);
}

function mphTokmh(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(1.609344*$weather[$field],1);
}

function mphTokts(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.868976*$weather[$field],1);
}

function mphToms(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.44704*$weather[$field],1);
}

function kmhTokts(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.5399568*$weather[$field],1);
}

function kmhTomph(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.621371*$weather[$field],1);
}

function kmhToms(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.2777778*$weather[$field],1);
}

function msTokmh(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(3.6*$weather[$field],1);
}

function msTokts(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = round((float)(1.943844*$weather[$field]), 1);
}

function msTomph(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(2.236936*$weather[$field], 1);
}

// Temperature
function cToF(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = cToFDirect($weather[$field]);
}

function fToC(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = fToCDirect($weather[$field]);
}

function cToFrel(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = round((float)(1.8*$weather[$field]), 1);
}

function fToCrel(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = round((float)(0.55555556*($weather[$field])), 1);
}

function fToCDirect($field){
	return round((float)(0.55555556*($field - 32)), 1);
}

function cToFDirect($field){
	return  number_format((float)$field*1.8 +32,1);
}

// Pressure
function mbToin(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = round((float)(0.02952999*$weather[$field]), 2);
}

function inTomb(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = round((float)(33.86388158*$weather[$field]), 2);
}

// Depth
function mmToin(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] = number_format(0.03937008*$weather[$field], 2);
}

function inTomm(&$weather, $field){
	if(!isset($weather[$field])) return;
	$weather[$field] =number_format(25.4*$weather[$field], 1);
}

// Calculates "real feel" heat index valid only at lower temperatures (up to 79 F)
function heatIndexLow($t, $rh) {
	// Assumes Fahrenheit
	return 0.5 * ($t + 61.0 + (($t - 68.0) * 1.2) + ($rh * 0.094));
}

// Calculates "real feel" heat index valid only at higher temperatures (beginning around 79-80 F), the traditional heat index formula
function heatIndexHigh($t, $rh) {
	// Assumes Fahrenheit
	$heatIndex = -42.379 + 2.04901523 * $t + 10.1433127*$rh - .22475441*$t*$rh - .00683783 *$t * $t - .05481717 * $rh * $rh + .00122874*$t*$t*$rh + .00085282 *$t * $rh *$rh - .00000199 *$t *$t *$rh * $rh;

	// Adjustment formula, adding or subtracting as much as a couple degrees at extreme ends of temperature/humidity ranges
	$a = 0;
	if ($rh < 13 && ($t >= 80 && $t <= 112)) {
		$a=((13 - $rh ) / 4) * sqrt((17-abs($t - 95))/17);
		$a = -$a;
	};
	if ($rh > 85 && ($t >= 80 && $t <= 87)) {
		$a=(($rh - 85)/10) * ((87 - $t) / 5);
	};

	$heatIndex += $a;
	return $heatIndex;
}

// Ruthfusz heat index formula
// http://www.wpc.ncep.noaa.gov/html/heatindex_equation.shtml
function heatIndex($temp, $rh) {
	global $weather;
	$t = anyToF($temp);

	// First try simple formula, valid when calculated heat index <= 79 degrees F
	$heatIndex = heatIndexLow($t, $rh);

	// If too warm, do the complicated formula instead
	if ($heatIndex >= 79)
	{
		$heatIndex = heatIndexHigh($t, $rh);
	}

	if ($weather["temp_units"] == 'C'){
		$heatIndex = fToCDirect($heatIndex);
	}

	return round($heatIndex, 1);
}

function getUpdatedString($datetime) {
	global $showDate, $dateFormat, $timeFormat;
	
	if ($showDate) {
		return '<div class="updatedtime"><span>' . date($dateFormat) . '</span><br />' . date($timeFormat) . '</div>';
	}
	else {
		return '<div class="updatedtime"><span>Updated</span><br />' . date($timeFormat) . '</div>';
	}
}

function anyToC($field){
	global $weather;
	if ($weather["temp_units"] == 'C'){
		return $field;
	} else {
		return fToCDirect($field);
	}
}

function anyToF($field){
	global $weather;
	if ($weather["temp_units"] == 'F'){
		return $field;
	} else {
		return cToFDirect ($field);
	}
}

function distance($lat, $lon, $lati, $longi) {
	$lat1 = deg2rad($lati);
	$lat2 = deg2rad($lat);
	$long1 = deg2rad($longi);
	$long2 = deg2rad($lon);

	// Great circle calculation uses the radius of earth, 6371 km
	return 6371 * acos(sin($lat1)*sin($lat2) + cos($lat1)*cos($lat2)*cos($long2-$long1));
}

function apparent_temperature($temp,$hum,$wind) {
	global $weather;
/* from http://www.bom.gov.au/info/thermal_stress/#atapproximation
About the formula for the apparent temperature
The formula for the AT used by the Bureau of Meteorology is an approximations of the value provided by a mathematical model of heat balance in the human body. It can include the effects of temperature, humidity, wind-speed and radiation. Two forms are given, one including radiation and one without. On this site we use the non-radiation version.

Version including the effects of temperature, humidity, and wind:
AT = Ta + 0.33×e - 0.70×ws - 4.00

Version including the effects of temperature, humidity, wind, and radiation:
AT = Ta + 0.348×e - 0.70×ws + 0.70×Q/(ws + 10) - 4.25

where:
Ta 	= Dry bulb temperature (°C)
e   = Water vapour pressure (hPa) [humidity]
ws  = Wind speed (m/s) at an elevation of 10 meters
Q   = Net radiation absorbed per unit area of body surface (w/m2)

The vapour pressure can be calculated from the temperature and relative humidity using the equation:
e = rh / 100 × 6.105 × exp ( 17.27 × Ta / ( 237.7 + Ta ) )
where:
rh 	= Relative Humidity [%]

Source: Norms of apparent temperature in Australia, Aust. Met. Mag., 1994, Vol 43, 1-16 

*/
  global $weather;
	switch ($weather["wind_units"]) {
	case 'kts':
	  $ws = round(0.514444*$wind,1);
		break;
	case 'km/h':
	  $ws = round(0.2777778*$wind,1);
		break;
	case 'mph':
	  $ws = round(0.44704*$wind,1);
		break;
	case 'm/s':
	  $ws = round($wind,1);
		break;
	default:
	  $ws = round($wind,1);
		break;
	}
	if($weather['temp_units'] !=='C') {
  	$Ta = round((float)(0.55555556*($temp - 32)), 1);
	} else {
		$Ta = $temp;
	}
		
	$e = $hum/100*6.105*exp(17.27*$Ta/(237.7+$Ta));
	$rfeel = round(($Ta + 0.33*$e - 0.70*$w - 4.00),1);
	
	if($weather['temp_units'] =='F') {
  	$rfeel = number_format((float)$rfeel*1.8 +32,1);
	}
	
  return($rfeel);
}
