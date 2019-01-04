<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: Swedish
Translation By : Mats Ahlklo, metzallo@gmail.com 2017-01-12, 10:27
Developed By: Brian Underdown/Erik M Madsen
January  2017
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day = date("l");
$day2 = date("l", time()+86400);
$daynum = date("j");
$monthtrans = date("F");
$year = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "sv_SE.UTF-8");
$lang = array();

// Menu

$lang['Till'] = 'Till ';
$lang['Settings'] = 'Inställningar';
$lang['Layout'] = 'Byta layout';
$lang['Lighttheme'] = 'Ljust tema';
$lang['Darktheme'] = 'Mörkt tema';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Metriskt (C)';
$lang['UKmetric'] = 'UK (MPH - Metriskt) ';
$lang['Scandinavia'] = 'Scandinavien (M/S)';

$lang['Worldwideearthquakes'] = 'Jordskalv världen runt';
$lang['Toggle'] = 'Växla till fullskärm ';
$lang['Contactinfo'] = 'Station & kontakt Info';
$lang['Templateinfo'] = 'Template information';
$lang['language'] = 'Välj språk';
$lang['Weatherstationinfo'] = 'Weather Station Info';
$lang['Webdesigninfo'] = 'Template Info';


//temperature
$lang['Temperature'] = 'Temperatur';
$lang['Feelslike'] = 'Känns som';
$lang['Humidity'] = 'Fuktighet';
$lang['Dewpoint'] = 'Daggpunkt';
$lang['Trend'] = 'Trend ';
$lang['Heatindex'] = 'Värme index';
$lang['Windchill'] = 'Kyleffekt ';
$lang['Tempfactors'] = 'Temp faktor';
$lang['Nocautions'] = 'No Cautions';
$lang['Wetbulb'] = 'Wet Bulb';
$lang['dry'] = '& Dry';
$lang['verydry'] = '& Very Dry';


//new feature temperature feels
$lang['FreezingCold'] = 'Freezing Cold';
$lang['FeelingVeryCold'] = 'Feeling Very Cold';
$lang['FeelingCold'] = 'Feeling Cold';
$lang['FeelingCool'] = 'Feeling Cool';
$lang['FeelingComfortable'] = 'Feeling Comfortable ';
$lang['FeelingWarm'] = 'Feeling Warm';
$lang['FeelingHot'] = 'Feeling Hot';
$lang['FeelingUncomfortable'] = 'Feeling Uncomfortable';
$lang['FeelingVeryHot'] = 'Feeling Very Hot';
$lang['FeelingExtremelyHot'] = 'Feeling Extremely Hot';


//wind
$lang['Windspeed'] = 'Vind hast.';
$lang['Gust'] = 'Vind stöt';
$lang['Direction'] = 'Vind riktn.';
$lang['Gusting'] = 'Gusting at';
$lang['Blowing'] = 'Blowing at';
$lang['Wind'] = 'Wind';

$lang['Calm'] = 'Stiltje';
$lang['Lightair'] = 'Nästan siltje';
$lang['Lightbreeze'] = 'Lätt bris';
$lang['Gentelbreeze'] = 'Måttlig bris';
$lang['Moderatebreeze'] = 'Frisk bris';
$lang['Freshbreeze'] = 'Styv bris';
$lang['Strongbreeze'] = 'Hård bris';
$lang['Neargale'] = 'Styv kuling';
$lang['Galeforce'] = 'Hård kuling';
$lang['Stronggale'] = 'Halv storm';
$lang['Storm'] = 'Storm';
$lang['Violentstorm'] = 'Svår storm';
$lang['Hurricane'] = 'Orkan';

// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Calm Conditions';
$lang['LightBreezeattimes'] = 'Light Breeze at times ';
$lang['MildBreezeattimes'] = 'Mild Breeze at times ';
$lang['ModerateBreezeattimes'] = 'Moderate Breeze at times';
$lang['FreshBreezeattimes'] = 'Fresh Breeze at times';
$lang['StrongBreezeattimes'] = 'Strong Breeze at times';
$lang['NearGaleattimes'] = 'Near Gale at times';
$lang['GaleForceattimes'] = 'Gale Force at times';
$lang['StrongGaleattimes'] = 'Strong Gale at times';
$lang['StormConditions'] = 'Stormy Conditions';
$lang['ViolentStormConditions'] = 'Violent Storm Conditions';
$lang['HurricaneConditions'] = 'Hurricane Conditions';


$lang['Avg'] = '<span2> Medelv. </span2>';

//wind direction compass
$lang['Northdir'] = 'Rakt <span>nordlig<br></span>';
$lang['NNEdir'] = 'Nord Nord <br><span>Ost</span>';
$lang['NEdir'] = 'Nord <span> Ost<br></span>';
$lang['ENEdir'] = 'Ost Nord<br><span>Ost</span>';
$lang['Eastdir'] = "Rakt <span> Ostlig<br></span>";
$lang['ESEdir'] = 'Ost Syd<br><span>Ost</span>';
$lang['SEdir'] = 'Syd <span> Ost</span>';
$lang['SSEdir'] = 'Syd Syd<br><span>Ost</span>';
$lang['Southdir'] = 'Rakt <span> Sydlig</span>';
$lang['SSWdir'] = 'Syd Syd<br><span>Väst</span>';
$lang['SWdir'] = 'Syd <span> Väst</span>';
$lang['Westdir'] = 'Rakt <span>västlig<br></span>';
$lang['WSWdir'] = 'Väst Syd<br><span>Västst</span>';
$lang['Westdir'] = 'Rakt <span> Väst</span>';
$lang['WNWdir'] = 'Väst Nord<br><span>Väst</span>';
$lang['NWdir'] = 'Nord <span> Västst</span>';
$lang['NWNdir'] = 'Nord Nord<br><span>Väst</span>';




//wind direction avg
$lang['North'] = 'N';
$lang['NNE'] = 'NNO';
$lang['NE'] = 'NO';
$lang['ENE'] = 'ONO';
$lang['East'] = 'O ';
$lang['ESE'] = 'OSO';
$lang['SE'] = 'SO';
$lang['SSE'] = 'SSO';
$lang['South'] = 'S';
$lang['SSW'] = 'SSV';
$lang['SW'] = 'SV';
$lang['WSW'] = 'VSV';
$lang['West'] = 'V';
$lang['WNW'] = 'VNV';
$lang['NW'] = 'NV';
$lang['NWN'] = 'NVN';

//rain
$lang['raintoday'] = 'Nederbörd idag';
$lang['Rate'] = 'Intensitet';
$lang['Rainfall'] = 'Regn';
$lang['Precip'] = 'Nederb.'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Regn';
$lang['Heavyrain'] = 'Heavy Rain';


//sun -moon-daylight-darkness
$lang['Sun'] = 'Sol';
$lang['Moon'] = 'Måne';
$lang['Sunrise'] = 'Sol uppgång';
$lang['Sunset'] = 'Sol nedgång';
$lang['Moonrise'] = 'Måne upp ';
$lang['Moonset'] = 'Måne ner';
$lang['Night'] = 'Natt ';
$lang['Day'] = 'Dag';
$lang['Nextnewmoon'] = 'Nästa ny måne';
$lang['Nextfullmoon'] = 'Nästa full måne';
$lang['Luminance'] = 'Luminans';
$lang['Moonphase'] = 'Månfas';
$lang['Estimated'] = 'Uppskattad';
$lang['Daylight'] = 'Dagsljus';
$lang['Darkness'] = 'mörker';
$lang['Daysold'] = 'Dagar gammal';
$lang['Belowhorizon'] = 'under<br>horisonten';
$lang['Mintill'] = '<br>min. till';
$lang['Minago'] = ' min. sedan';
$lang['Hrs'] = ' timmar';
$lang['Min'] = ' min.';
$lang['TotalDarkness'] = 'Totalt mörker';
$lang['TotalDaylight'] = 'Totalt ljus';
$lang['Below'] = 'is below the horizon';

$lang['Newmoon'] = 'Nymåne';
$lang['Waxingcrescent'] = 'Tillt. halvmåne 1 kvart.';
$lang['Firstquarter'] = 'Halvmåne 1 kvart.';
$lang['Waxinggibbous'] = 'Tillt. halvmåne 2 kvart.';
$lang['Fullmoon'] = 'Fullmåne';
$lang['Waninggibbous'] = 'Avt. halvmåne 3 kvart.';
$lang['Lastquarter'] = 'Halvmåne 3 kvart.';
$lang['Waningcrescent'] = 'Avt. halvmåne 4 kvart.';


//trends

$lang['Falling'] = 'Fallande';
$lang['Rising'] = 'Stigande';
$lang['Steady'] = 'Stabilt';
$lang['Rapidly'] = 'Snabb';
$lang['Temp'] = 'Temp.';


//Solar-UV

//uv
$lang['Nocaution'] = 'Ingen <color>åtgärd</color> behövs';
$lang['Wearsunglasses'] = 'Använd <color>solglasögon</color> vid ljusa dagar';
$lang['Stayinshade'] = 'Stanna i skuggan mitt på dagen när <color>solen</color> är som starkast';
$lang['Reducetime'] = 'Minska tiden i <color>solen</color> mellan 10 och 16 ';
$lang['Minimize'] = '<color>sun</color> exposure between 10am-4pm ';
$lang['Trytoavoid'] = 'Try to avoid <color>sun</color> exposure between 10am-4pm ';

//solar

$lang['Poor'] = 'Ingen <color> <br>solstrålning</color>';
$lang['Low'] = 'Låg <br><color>solstrålning</color>';
$lang['Moderate'] = 'Måttlig <br><color>solstrålning</color>';
$lang['Good'] = 'Hög <br><color>solstrålning</color>';
$lang['Solarradiation']= 'Solstrålning';



//current sky
$lang['Currentsky'] = 'Nuvarande förhållanden';
$lang['Currently'] = 'För närvarande';
$lang['Cloudcover'] = 'Molnigt';

//Notifications
$lang['Nocurrentalert'] = 'Inga väder varningar';
$lang['Windalert'] = 'Vind stöt';
$lang['Tempalert'] = 'Hög temperatur';
$lang['Heatindexalert'] = 'Värme Index varning ';
$lang['Windchillalert'] = 'Kyleffekts varning, vind';
$lang['Dewpointalert'] = 'Obehaglig luftfukt.';
$lang['Dewpointcolderalert'] = 'Daggpunkt känns kallare';
$lang['Feelslikecolderalert'] = 'Känns kallare';
$lang['Feelslikewarmeralert'] = 'Känns varmare';
$lang['Rainratealert'] = 'mm/t<span> regn';

//Earthquake Notifications
$lang['Regional'] = 'Regionala jordbävningar';
$lang['Significant'] = 'Större jordbävningar';
$lang['Nosignificant'] = 'Inga större jordbävningar';


//Main page
$lang['Barometer'] = 'Barometer';
$lang['UVSOLAR'] = 'UV | Sol data';
$lang['Earthquake'] = 'Jordskalvs data';
$lang['Daynight'] = 'Dagsljus och natt info.';

$lang['Location'] = 'Plats ';
$lang['Hardware'] = 'Hårdvara';
$lang['Rainfalltoday'] = 'Nederbörd idag';
$lang['Windspeed'] = 'Vind hast.';
$lang['Winddirection'] = 'Vind riktning';
$lang['Measured'] = 'Uppmätt idag';
$lang['Forecast'] = 'Väderprognos';
$lang['Forecastahead'] = 'Väderprognos 10 dagar';
$lang['Forecastsummary'] = 'Väderprognos 2 dagar';
$lang['WindGust'] = 'Vind hastighet | Stöt';

$lang['Hourlyforecast'] = 'Prognos per timme ';
$lang['Significantearthquake'] = 'Betydliga jordbävningar';
$lang['Regionalearthquake'] = 'Regionala jordbävningar';
$lang['Average'] = 'Genomsnitt';
$lang['Notifications'] = 'Väder larm';
$lang['Indoor'] = 'Inomhus';
$lang['Today'] = 'I dag';
$lang['Tonight'] = 'I Natt';
$lang['Tomorrow'] = 'I morgon';
$lang['Tomorrownight'] = 'i morgon natt';
$lang['Updated'] = 'Uppdaterad';
$lang['Meteor'] 		 = 'Meteor Shower Info';
$lang['WeatherStationNotifications'] = 'Weather Station Notifications';  
$lang['Firerisk'] = 'Fire Risk'; 
$lang['Localtime'] 	= 'Local Time';  
$lang['Nometeor'] = 'No Meteor Showers';
$lang['LiveWebCam'] = 'WebCam'; 
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Weatherstation'] = 'Weather Station';
$lang['Cloudbase'] = 'Cloudbase';
$lang['uvalert'] = 'Caution High UVINDEX';
$lang['Rainbow'] = 'Rainbow';
$lang['Windy'] = 'Windy';

$lang['Max'] = 'Max';
$lang['Min'] = 'Min';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Moderate Earthquake';
$lang['MinorE'] = 'Minor Earthquake';
$lang['StrongE'] = 'Strong Earthquake';
$lang['RegionalE'] = 'Regional';

//extras
$lang['SunPosition'] = 'Sun Position';
$lang['Conditions'] = 'Conditions';
$lang['Cloudbase Height'] = 'Cloudbase Height';
$lang['Station'] = 'Station';


$lang['Detailed Forecast'] = 'Detailed Forecast';
$lang['Summary Outlook'] = 'Summary';
//Air Quality
$lang['Hazordous']= 'Hazardous Conditions';
$lang['VeryUnhealthy']= 'Very Unhealthy';
$lang['Unhealthy']= 'Unhealthy Air Quality';
$lang['UnhealthyFS']= 'Unhealthy For Some';
$lang['Moderate']= 'Moderate Air Quality ';
$lang['Good']= 'Good Air Quality ';
?>