<?php
include_once('settings1.php');
date_default_timezone_set($TZ);
//translations for HOMEWEATHERSTATION TEMPLATE UPDATED 2nd November added set locale
/* mb_ functions not used - ktrue - 11-Jan-2019
  $language set to DarkSky language (doesn't always match $lang in the scripts)
Simplified the settings for language selection via array lookup - ktrue 19-Mar-2019
*/
if(isSet($_GET['lang']))
{
	$lang = $_GET['lang'];
	
	// GET the session  set the cookie
	$_SESSION['lang'] = $lang;
	
	setcookie("lang", $lang, time() +3600);
}
else if(isSet($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = $defaultlanguage;
}

$LanguageList = array(
// lang => langfile,langflag,langoption,language,locale
//english uk	
   'en' => 'lang.en.php|en|en|en|"en_EN"',
//canada english 
   'can' => 'lang.can.php|can|en|en|"en_CA"',
//english	us
   'us' => 'lang.us.php|us|en|en|"en_US"',
//danish
   'dk' => 'lang.dk.php|dk|da|da|danish.UTF-8,da_DK.UTF-8',
//dutch
   'nl' => 'lang.nl.php|nl|nl|nl|dutch.UTF-8,nl_NL.UTF-8',
//brazilian/south america
   'br' => 'lang.br.php|br|pt|pt|portugues.UTF-8,pt_BR.UTF-8',
//argentine
   'ar' => 'lang.ar.php|ar|es|es|spanish.UTF-8,es_ES.UTF-8',
//maori 
   'mi' => 'lang.mi.php|mi|mi|en|maori.UTF-8,mi_MI.UTF-8',
//polish
   'pl' => 'lang.pl.php|pl|pl|pl|polish.UTF-8,pl_PL.UTF-8,polish_pol.UTF-8',
//german
   'dl' => 'lang.dl.php|dl|de|de|german.UTF-8,de_DE.UTF-8',
//italian
   'it' => 'lang.it.php|it|it|it|italian.UTF-8,it_IT.UTF-8',
//spanish
   'sp' => 'lang.sp.php|sp|es|es|spanish.UTF-8,es_ES.UTF-8',
//catalan 
   'cat' => 'lang.cat.php|cat|ca|ca|catalan.UTF-8,ca_ES.UTF-8',
//french  
   'fr' => 'lang.fr.php|fr|fr|fr|french.UTF-8,fr_FR.UTF-8',
//greek  
   'gr' => 'lang.gr.php|gr|el|el|el_GR.UTF-8,el_GR,greek.UTF-8',
//turkish  
   'tr' => 'lang.tr.php|tr|tr|tr|turkish.UTF-8,tr_TR.UTF-8',
//swedish 
   'sw' => 'lang.sw.php|sv|sv|sv|swedish.UTF-8,sv_SE.UTF-8',
//Suomi (finnish) 
   'fi' => 'lang.fi.php|fi|fi|fi|finnish.UTF-8,fi_FI.UTF-8,suomi.UTF-8',

);

if(!isset($LanguageList[$lang])) { // Assume English if language not in current list
	$lang = 'en';
}
// Set the template options
list ($lang_file,$lang_flag,$lang_option,$language,$lang_locale) = explode('|',$LanguageList[$lang]);
setlocale(LC_TIME,explode(',',$lang_locale));


 $WClanguages = array(  // our language codes v.s. lang:LL codes for JSON to TWC/WU API
  'ar' => 'es-ES',
	'bg' => 'bg-BG',
	'br' => 'pt-BR',
	'cs' => 'cs-CZ',
	'ca' => 'ca_ES',
	'ct' => 'ca-ES',
	'da' => 'da-DK',
	'dk' => 'da-DK',
	'de' => 'de-DE',
	'dl' => 'de-DE',
	'nl' => 'nl-NL',
	'el' => 'el-GR',
	'en' => 'en-US',
	'fi' => 'fi-FI',
	'fr' => 'fr-FR',
	'it' => 'it-IT',
	'he' => 'he-IL',
	'hu' => 'hu-HU',
	'mi' => 'mi-MI',
	'no' => 'no-NO',
	'pl' => 'pl-PL',
	'pt' => 'pt-PT',
	'ro' => 'ro-RO',
	'es' => 'es-ES',
	'se' => 'sv-SE',
	'si' => 'sl-SI',
	'sk' => 'sk-SK',
	'sv' => 'sv-SE',
	'sr' => 'sr-RS',
	'tr' => 'tr-TR',
  );

if(isset($WClanguages[$language])) {
	$wuapilang = $WClanguages[$language];
} else {
	$wuapilang = 'en-US';
}

$Modules = array(
# module => legend|index
'advisory.php' => '',
'airqualitymodule.php' => '',
'airqualitysolar.php' => '',
'airqualityuv.php' => '',
'aqi.php' => '',
'aqisolar.php' => '',
'aqiuv.php' => '',
'aurora.php' => '',
'azimuth.php' => '',
'barometer.php' => '',
'bio.php' => '',
'boltek.php' => '',
'cam.php' => '',
'cumulus-sunshine.php' => '',
'cumulusindoor.php' => '',
'currentconditionsds.php' => '',
'currentconditionsmetar34.php' => '',
'currentconditionsmetar34davis.php' => '',
'diags.php' => '',
'dsuvindex.php' => '',
'earthquake.php' => '',
'easyweathersetup.php' => '',
'eq.php' => '',
'eqlist.php' => '',
'forecast3ds.php' => '',
'forecast3wu.php' => '',
'forecastdshour.php' => '',
'homeindoor.php' => '',
'index.php' => '',
'indoortemperature.php' => '',
'lightning34.php' => '',
'livedata.php' => '',
'max-mintemp.php' => '',
'max-minwind.php' => '',
'menu.php' => '',
'metar34get.php' => '',
'metarnearby.php' => '',
'meteorshowers.php' => '',
'mooninfo.php' => '',
'moonphase.php' => '',
'outlookds.php' => '',
'outlookwu.php' => '',
'purpleair.php' => '',
'rainfall.php' => '',
'rainfallf-year-month.php' => '',
'rainfallf-year-month1.php' => '',
'realtimetxtdescription.php' => '',
'solaralmanac.php' => '',
'solaruvds.php' => '',
'stationinfo.php' => '',
'sun1.php' => '',
'sun2.php' => '',
'sun3.php' => '',
'tempalmanac.php' => '',
'temperature.php' => '',
'temperaturein.php' => '',
'temperatureyear.php' => '',
'tempyesterday.php' => '',
'updater.php' => '',
'uvalmanac.php' => '',
'uvindex.php' => '',
'uvindexds.php' => '',
'uvindexwf.php' => '',
'uvsolar.php' => '',
'uvsolarbri.php' => '',
'weather34clock.php' => '',
'weather34cloudbase.php' => '',
'weather34svgicons.php' => '',
'weather34uvsolar.php' => '',
'weatherflow.php' => '',
'weatherflowuvsolar.php' => '',
'webcam.php' => '',
'webcamsmall.php' => '',
'wflightning.php' => '',
'wfsensor.php' => '',
'windalmanac.php' => '',
'windgustyear.php' => '',
'windspeeddirection.php' => '',
'windy-radar.php' => '',
'windyesterday.php' => '',
'yearlyrainfall.php' => '',
'chartswu/humidity.php' => '',
'chartswu/monthlybarometer.php' => '',
'chartswu/monthlyrainfall.php' => '',
'chartswu/monthlytemperature.php' => '',
'chartswu/monthlywindspeedgust.php' => '',
'chartswu/todaybarometer.php' => '',
'chartswu/todayrainfall.php' => '',
'chartswu/todaysolar.php' => '',
'chartswu/todaytemperature.php' => '',
'chartswu/todaywinddirection.php' => '',
'chartswu/todaywindspeedgust.php' => '',
'chartswu/yearlybarometer.php' => '',
'chartswu/yearlyrainfall.php' => '',
'chartswu/yearlytemperature.php' => '',
'chartswu/yearlywindspeedgust.php' => '',

);

$ModuleLinks = array(
# 'script' => array('legend' => 'linkedmodule')
'temperature.php' => array(
  'YEAR' => 'chartswu/yearlytemperature.php',
	'MONTH'=> 'chartswu/monthlytemperature.php',
	'TODAY'=> 'chartswu/todaytemperature.php',
	),
'barometer.php' => array(
  'YEAR' => 'chartswu/yearlybarometer.php',
	'MONTH'=> 'chartswu/monthlybarometer.php',
	'TODAY'=> 'chartswu/todaybarometer.php',
  ),
'windspeeddirection.php' => array(
  'YEAR' => 'chartswu/yearlywindspeedgust.php',
	'MONTH'=> 'chartswu/monthlywindspeedgust.php',
	'TODAY'=> 'chartswu/todaywindspeedgust.php',
  ),
'rainfall.php' => array(
  'YEAR' => 'chartswu/yearlyrainfall.php',
	'MONTH'=> 'chartswu/monthlyrainfall.php',
	'TODAY'=> 'chartswu/todayrainfall.php',
 ),
);

//path to language files
if ( file_exists("languages/$lang_file") ) {
  include_once("languages/$lang_file") ;
} else {
	include_once ("languages/lang.en.php");
}

# End of common.php