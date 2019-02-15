<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: FINNISH - SUOMI
Translation By :  Timo Kiiveri - veikkola-weather.com
Developed By: Brian Underdown/Erik M Madsen
November 2016
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
setlocale(LC_TIME, 'finnish.utf8','fi_FI.utf8','suomi.utf8');
$day = date("l");
$day2 = date("l", time()+86400);
$daynum = date("j");
$monthtrans = date("F");
$year = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
$lang = array();

// Menu

$lang['Till'] = ' ';
$lang['Settings'] = 'Asetukset';
$lang['Layout'] = 'Vaihda ulkoasu';
$lang['Lighttheme'] = 'Vaalea teema';
$lang['Darktheme'] = 'Tumma teema';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Metrinen (C)';
$lang['UKmetric'] = 'UK (MPH - Metrinen) ';
$lang['Scandinavia'] = 'Skandinavinen (m/s)';

$lang['Worldwideearthquakes'] = 'World Wide Earthquakes';
$lang['Toggle'] = 'Toggle Fullscreen ';
$lang['Contactinfo'] = 'Station & Contact Info';
$lang['Templateinfo'] = 'Contributors';
$lang['language'] = 'Valitse kieli';
$lang['Weatherstationinfo'] = 'Weather Station Info';
$lang['Webdesigninfo'] = 'Template Info';


//temperature
$lang['Temperature'] = 'Lämpötila';
$lang['Feelslike'] = 'Tuntuu kuin';
$lang['Humidity'] = 'Kosteus';
$lang['Dewpoint'] = 'Kastepiste';
$lang['Trend'] = 'Muutos';
$lang['Heatindex'] = 'Tukaluus';
$lang['Windchill'] = 'Hyytävyys';
$lang['Tempfactors'] = 'Temp Factors';
$lang['Nocautions'] = 'No Cautions';
$lang['Wetbulb'] = 'Märkält';
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
$lang['Windspeed'] = 'Wind Speed';
$lang['Gust'] = 'Puuska';
$lang['Direction'] = 'Suunta';
$lang['Gusting'] = 'Gusting at';
$lang['Blowing'] = 'Blowing at';
$lang['Wind'] = 'Tuuli';
$lang['Windrun'] = 'Tuulen matka';

$lang['Calm'] = 'Tyyntä';
$lang['Lightair'] = 'Heikkoa tuulta';
$lang['Lightbreeze'] = 'Heikkoa tuulta';
$lang['Gentelbreeze'] = 'Kohtalaista tuulta';
$lang['Moderatebreeze'] = 'Kohtalaista tuulta';
$lang['Freshbreeze'] = 'Navakkaa tuulta';
$lang['Strongbreeze'] = 'Navakkaa tuulta';
$lang['Neargale'] = 'Kovaa tuulta';
$lang['Galeforce'] = 'Kovaa tuulta';
$lang['Stronggale'] = 'Myrsky';
$lang['Storm'] = 'Myrsky';
$lang['Violentstorm'] = 'Myrsky';
$lang['Hurricane'] = 'Hirmumyrsky';

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


$lang['Avg'] = '<span2> Avg: </span2>';

//wind direction compass
$lang['Northdir'] = '<span>Pohjoinen<br></span>';
$lang['NNEdir'] = '<span>Pohjoiskoillinen</span>';
$lang['NEdir'] = '<span>Koillinen<br></span>';
$lang['ENEdir'] = '<span>Itäkoillinen</span>';
$lang['Eastdir'] = '<span>Itä<br></span>';
$lang['ESEdir'] = '<span>Itäkaakko</span>';
$lang['SEdir'] = '<span>Kaakko</span>';
$lang['SSEdir'] = '<span>Eteläkaakko</span>';
$lang['Southdir'] = '<span>Etelä</span>';
$lang['SSWdir'] = '<span>Etelälounas</span>';
$lang['SWdir'] = '<span>Lounas</span>';
$lang['WSWdir'] = '<span>Länsilounas<br></span>';
$lang['Westdir'] = '<span>Länsi</span>';
$lang['WNWdir'] = '<span>Länsiluode</span>';
$lang['NWdir'] = '<span>Luode</span>';
$lang['NWNdir'] = '<span>Pohjoisluode</span>';




//wind direction avg
$lang['North'] = 'Pohjoinen';
$lang['NNE'] = 'PKO';
$lang['NE'] = 'KO';
$lang['ENE'] = 'IKO';
$lang['East'] = 'Itä';
$lang['ESE'] = 'IKA';
$lang['SE'] = 'KA';
$lang['SSE'] = 'EKA';
$lang['South'] = 'Etelä';
$lang['SSW'] = 'ELO';
$lang['SW'] = 'LO';
$lang['WSW'] = 'LLO';
$lang['West'] = 'Länsi';
$lang['WNW'] = 'LLU';
$lang['NW'] = 'LU';
$lang['NWN'] = 'PLU';

//rain
$lang['raintoday'] = 'sademäärä tänään';
$lang['Rate'] = 'mm/h';
$lang['Rainfall'] = 'Sade';
$lang['Precip'] = 'Sade'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Sade';
$lang['Heavyrain'] = 'Rankkasade';
$lang['Flooding'] = 'Tulvan vaara';
$lang['Almanac'] = 'Almanakka';
$lang['Lasthour'] = 'Ed. tunti';
$lang['Yesterday'] = 'Eilen';

//sun -moon-daylight-darkness
$lang['Sun'] = 'Aurinko';
$lang['Moon'] = 'Kuu';
$lang['Sunrise'] = 'Nousu';
$lang['Sunset'] = 'Lasku';
$lang['Moonrise'] = 'Nousu';
$lang['Moonset'] = 'Lasku';
$lang['Night'] = 'Night ';
$lang['Day'] = 'Day';
$lang['Nextnewmoon'] = 'Uusikuu';
$lang['Nextfullmoon'] = 'Täysikuu';
$lang['Luminance'] = 'Valaistuna';
$lang['Moonphase'] = 'Moonphase';
$lang['Estimated'] = 'Aika';
$lang['Daylight'] = 'Valoisa';
$lang['Darkness'] = 'Pimeys';
$lang['Daysold'] = 'Days Old';
$lang['Belowhorizon'] = 'below<br>horizon';
$lang['Mintill'] = '<br>mins till';
$lang['Minago'] = ' mins ago';
$lang['Hrs'] = ' hr';
$lang['Mins'] = ' min';
$lang['TotalDarkness'] = 'Total Darkness';
$lang['TotalDaylight'] = 'Total Daylight';
$lang['Below'] = 'is below the horizon';
$lang['Tillsunset'] = 'auringon laskuun';
$lang['Tillsunrise'] = 'auringon nousuun';

$lang['Newmoon'] = 'Uusikuu';
$lang['Waxingcrescent'] = 'Kasvava sirppi';
$lang['Firstquarter'] = 'Ensimmäinen neljännes';
$lang['Waxinggibbous'] = 'Kasvava kupera kuu';
$lang['Fullmoon'] = 'Täysikuu';
$lang['Waninggibbous'] = 'Vähenevä kupera kuu';
$lang['Lastquarter'] = 'Viimeinen neljännes';
$lang['Waningcrescent'] = 'Vähenevä sirppi';


//trends

$lang['Falling'] = 'Laskee';
$lang['Rising'] = 'Nousee';
$lang['Steady'] = 'Vakaa';
$lang['Rapidly'] = 'nopeasti';
$lang['Temp'] = 'Temp';


//Solar-UV

//uv
$lang['Nocaution'] = 'No <color>caution</color> required';
$lang['Wearsunglasses'] = 'Wear <color>sunglasses</color> on bright days';
$lang['Stayinshade'] = 'Stay in the shade near midday when the <color>sun</color> is strongest';
$lang['Reducetime'] = 'Reduce time in the <color>sun</color> between 10am-4pm ';
$lang['Minimize'] = '<color>sun</color> exposure between 10am-4pm ';
$lang['Trytoavoid'] = 'Try to avoid <color>sun</color> exposure between 10am-4pm ';

//solar

$lang['Poor'] = 'Poor<color> <br>Radiation</color>';
$lang['Low'] = 'Low <br><color>Radiation</color>';
$lang['Moderate'] = 'Moderate <br><color>Radiation</color>';
$lang['Good'] = 'Good <br><color>Radiation</color>';
$lang['Solarradiation']= 'Solar Radiation';


//current sky
$lang['Currentsky'] = 'Viimeisimmät havainnot';
$lang['Currently'] = 'Currently';
$lang['Cloudcover'] = 'Cloud Cover';

//Notifications
$lang['Nocurrentalert'] = 'No Current Weather Alerts';
$lang['Windalert'] = 'Wind Gusts at';
$lang['Tempalert'] = 'High Temperature';
$lang['Heatindexalert'] = 'Heat Index Caution ';
$lang['Windchillalert'] = 'Windchill Caution';
$lang['Dewpointalert'] = 'Uncomfortable humidity';
$lang['Dewpointcolderalert'] = 'Dewpoint Feeling Colder';
$lang['Feelslikecolderalert'] = 'Feels Colder';
$lang['Feelslikewarmeralert'] = 'Feels Warmer';
$lang['Rainratealert'] = 'per/hr<span> Rainfall ';
$lang['Fireriskalert'] = 'Fire Risk Warning';

//Earthquake Notifications
$lang['Regional'] = 'Regional Earthquake';
$lang['Significant'] = 'Significant Earthquake';
$lang['Nosignificant'] = 'No Significant Earthquakes';


//Main page
$lang['Barometer'] = 'Ilmanpaine';
$lang['UVSOLAR'] = 'UV-Solar';
$lang['Earthquake'] = 'Earthquake Data';
$lang['Daynight'] = 'Daylight & Night Info';

$lang['Location'] = 'Sijainti';
$lang['Hardware'] = 'Laitteisto';
$lang['Rainfalltoday'] = 'Sademäärä tänään';
$lang['Windspeed'] = 'Tuuli';
$lang['Winddirection'] = 'Tuulen suunta';
$lang['Measured'] = 'Measured Today';
$lang['Forecast'] = 'Sääennuste';
$lang['Forecastahead'] = 'Forecast Ahead';
$lang['Forecastsummary'] = 'Sääennuste';
$lang['WindGust'] = 'Tuulen nopeus | Puuska';

$lang['Hourlyforecast'] = 'Tuntiennuste';
$lang['Significantearthquake'] = 'Significant Earthquake';
$lang['Regionalearthquake'] = 'Regional Earthquake';
$lang['Average'] = 'Keskituuli';
$lang['Notifications'] = 'Notifications Alert';
$lang['Indoor'] = 'Indoor';
$lang['Today'] = 'Tänään';
$lang['Tonight'] = 'Tonight';
$lang['Tomorrow'] = 'Huomenna';
$lang['Tomorrownight'] 		 = 'Tomorrow Night';
$lang['Updated'] 		 = 'Päivitetty';
$lang['Meteor'] 		 = 'Meteoriparvet';
$lang['WeatherStationNotifications'] = 'Notifications';   
$lang['Firerisk'] = 'Fire Risk'; 
$lang['Localtime'] = 'Local Time';
$lang['Nometeor'] = 'Ei meteoriparvia';
$lang['LiveWebCam'] = 'Live-kamera';
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Weatherstation'] = 'Sääasema';
$lang['Cloudbase'] = 'Cloudbase';
$lang['uvalert'] = 'Caution High UVINDEX';
$lang['Rainbow'] = 'Rainbow';
$lang['Windy'] = 'Windy';
$lang['Max'] = 'Max';
$lang['Min'] = 'Min';
//other
$lang['FullWxsimForecast'] = 'Indstillinger';
$lang['LiveWebcamimagesofWeatherstationSauwerd'] = 'Skift Layout';
$lang['EuropeanWeathernetworkForecast'] = 'Light Theme1';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Moderate Earthquake';
$lang['MinorE'] = 'Minor Earthquake';
$lang['StrongE'] = 'Strong Earthquake';
$lang['RegionalE'] = 'Regional';

//extras
$lang['SunPosition'] = 'Auringonnousu ja -lasku';
$lang['Azimuth'] = 'Atsimuutti';
$lang['Elevation'] = 'Korkeus';
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