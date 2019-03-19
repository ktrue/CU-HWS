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
   'dk' => 'lang.dk.php|dk|da|da|"danish.utf8","da_DK.utf8"',
//dutch
   'nl' => 'lang.nl.php|nl|nl|nl|"dutch.utf8","nl_NL.utf8"',
//brazilian/south america
   'br' => 'lang.br.php|br|pt|pt|"portugues.utf8","pt_BR.utf8"',
//argentine
   'ar' => 'lang.ar.php|ar|es|es|"spanish.utf8","es_ES.utf8"',
//polish
   'pl' => 'lang.pl.php|pl|pl|pl|"polish.utf8","pl_PL.utf8","polish_pol.utf8"',
//german
   'dl' => 'lang.dl.php|dl|de|de|"german.utf8","de_DE.utf8"',
//italian
   'it' => 'lang.it.php|it|it|it|"italian.utf8","it_IT.utf8"',
//spanish
   'sp' => 'lang.sp.php|sp|es|es|"spanish.utf8","es_ES.utf8"',
//catalan 
   'cat' => 'lang.cat.php|cat|ca|ca|"catalan.utf8", "ca_ES.utf8"',
//french  
   'fr' => 'lang.fr.php|fr|fr|fr|"french.utf8", "fr_FR.utf8"',
//greek  
   'gr' => 'lang.gr.php|gr|el|el|"el_GR.utf8","el_GR","greek.utf8"',
//turkish  
   'tr' => 'lang.tr.php|tr|tr|tr|"turkish.utf8","tr_TR.utf8"',
//swedish 
   'sw' => 'lang.sw.php|sv|sv|sv|"swedish.utf8","sv_SE.utf8"',
//Suomi (finnish) 
   'fi' => 'lang.fi.php|fi|fi|fi|"finnish.utf8","fi_FI.utf8","suomi.utf8"',

);

if(!isset($LanguageList[$lang])) { // Assume English if language not in current list
	$lang = 'en';
}
// Set the template options
list ($lang_file,$lang_flag,$lang_option,$language,$lang_locale) = explode('|',$LanguageList[$lang]);
setlocale(LC_TIME,$lang_locale);


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

//path to language files
if ( file_exists("languages/$lang_file") ) {
  include_once("languages/$lang_file") ;
} else {
	include_once ("languages/lang.en.php");
}
?>