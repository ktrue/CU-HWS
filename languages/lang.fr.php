<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: FRENCH
Translation By :  pncatte@free.fr
Developed By: Brian Underdown/Erik M Madsen
May 15th 2016
-----------------
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
setlocale(LC_TIME, "fr_FR.UTF-8");
$lang = array();




// Menu

$lang['Till'] = 'à ';
$lang['Settings'] = 'Paramètres';
$lang['Layout'] = 'Disposition';
$lang['Light Theme'] = 'Thème clair';
$lang['Darktheme'] = 'Thème foncé';
$lang['Nonmetric'] = 'Affichage température en (F) ';
$lang['Metric'] = 'Affichage température en (C)';
$lang['UKmetric'] = 'Affichage du vent en MPH ';
$lang['Scandinavia'] = 'Affichage du vent en M/S';

$lang['Worldwideearthquakes'] = 'Tremblement de terre';
$lang['Toggle'] = 'Basculer en plein écran ';
$lang['Contactinfo'] = 'Informations de contact';
$lang['Templateinfo'] = 'Contributeurs';
$lang['language'] = 'Choisir la langue';
$lang['Weatherstationinfo'] = 'Info de la station';
$lang['Webdesigninfo'] = 'Template Info';

//temperature
$lang['Temperature'] = 'Température';
$lang['Feelslike'] = 'Ressenti';
$lang['Humidity'] = 'Humidité';
$lang['Dewpoint'] = 'Point de rosée';
$lang['Trend'] = 'Tendance';
$lang['trend'] = 'Tendance:';
$lang['Heatindex'] = 'Indice de chaleur';
$lang['Windchill'] = 'Facteur vent ';
$lang['Tempfactors'] = 'Facteur temp.';
$lang['Nocautions'] = 'Aucune alerte';
$lang['Wetbulb'] = 'Humidex';
$lang['dry'] = '& Sec';
$lang['verydry'] = '& Très Sec';


//new feature temperature feels
$lang['FreezingCold'] = 'Ressenti froid glacial';
$lang['FeelingVeryCold'] = 'Ressenti très froid';
$lang['FeelingCold'] = 'Ressenti froid';
$lang['FeelingCool'] = 'Ressenti chaud';
$lang['FeelingComfortable'] = 'Ressenti agréable';
$lang['FeelingWarm'] = 'Ressenti tiède';
$lang['FeelingHot'] = 'Ressenti chaud ';
$lang['FeelingUncomfortable'] = 'Ressenti inconfortable';
$lang['FeelingVeryHot'] = 'Ressenti très chaud';
$lang['FeelingExtremelyHot'] = 'Ressenti extrèmement chaud';



//wind
$lang['Windspeed'] = 'Vitesse du vent';
$lang['Gust'] = 'Rafale';
$lang['Direction'] = 'Direction';
$lang['Gusting'] = 'Rafale de';
$lang['Blowing'] = 'Souffler à';
$lang['Wind'] = 'Vitesse';

$lang['Calm'] = 'Calme';
$lang['Lightair'] = 'Calme';
$lang['Lightbreeze'] = 'Légère brise ';
$lang['Gentelbreeze'] = 'Petite Brise';
$lang['Moderatebreeze'] = 'Jolie brise';
$lang['Freshbreeze'] = 'Bonne brise ';
$lang['Strongbreeze'] = 'Forte brise';
$lang['Neargale'] = 'Tempete proche';
$lang['Galeforce'] = 'Force du Vent';
$lang['Stronggale'] = 'Forte tempête';
$lang['Storm'] = 'Orage';
$lang['Violentstorm'] = 'Orage violent';
$lang['Hurricane'] = 'Ouragan';

// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Condition calme';
$lang['LightBreezeattimes'] = 'Légère brise par moment';
$lang['MildBreezeattimes'] = 'Légère brise à certains moment';
$lang['ModerateBreezeattimes'] = 'Brise modérée par moment';
$lang['FreshBreezeattimes'] = 'Fraiche brise par moment';
$lang['StrongBreezeattimes'] = 'Forte brise par momemt';
$lang['NearGaleattimes'] = 'Coup de vent par moment';
$lang['GaleForceattimes'] = 'Fort coup de vent par moment';
$lang['StrongGaleattimes'] = 'Vent fort par moment';
$lang['StormConditions'] = 'Conditions météorologiques violentes';
$lang['ViolentStormConditions'] = 'Conditions de violente tempête';
$lang['HurricaneConditions'] = 'Conditions pour un ouragan';


$lang['Avg'] = '<span2> Moy. : </span2>';

//wind direction compass
$lang['Northdir'] = 'Dir <span>Nord<br></span>';
$lang['NNEdir'] = 'Nord Nord <br><span>Est</span>';
$lang['NEdir'] = 'Nord <span> Est<br></span>';
$lang['ENEdir'] = 'Est Nord<br><span>Est</span>';
$lang['Eastdir'] = "Dir <span> Est<br></span>";
$lang['ESEdir'] = 'Est Sud<br><span>Est</span>';
$lang['SEdir'] = 'Sud <span> Est</span>';
$lang['SSEdir'] = 'Sud Sud<br><span>Est</span>';
$lang['Southdir'] = 'Dir <span> Sud</span>';
$lang['SSWdir'] = 'Sud Sud<br><span>Ouest</span>';
$lang['SWdir'] = 'Sud <span> Ouest</span>';
$lang['Westdir'] = 'Dir <span>Ouest<br></span>';
$lang['WSWdir'] = 'Ouest Sud<br><span>Ouest</span>';
$lang['Westdir'] = 'Dir <span> Ouest</span>';
$lang['WNWdir'] = 'Ouest Nord<br><span>Ouest</span>';
$lang['NWdir'] = 'Nord <span> Ouest</span>';
$lang['NWNdir'] = 'Nord Nord<br><span>Ouest</span>';




//wind direction avg
$lang['North'] = 'Nord';
$lang['NNE'] = 'NNE';
$lang['NE'] = 'NE';
$lang['ENE'] = 'ENE';
$lang['East'] = 'Est ';
$lang['ESE'] = 'ESE';
$lang['SE'] = 'SE';
$lang['SSE'] = 'SSE';
$lang['South'] = 'Sud';
$lang['SSW'] = 'SSO';
$lang['SW'] = 'SO';
$lang['WSW'] = 'OSO';
$lang['West'] = 'Ouest';
$lang['WNW'] = 'ONO';
$lang['NW'] = 'NO';
$lang['NWN'] = 'NNO';

//rain
$lang['raintoday'] = 'Précipitations';
$lang['Rate'] = 'Taux';
$lang['Rainfall'] = 'Précipitations';
$lang['Precip'] = 'précip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Pluie';
$lang['Heavyrain'] = 'Faible pluie';
$lang['Flooding'] = 'Inondation possible';



//sun -moon-daylight-darkness
$lang['Sun'] = 'Soleil';
$lang['Moon'] = 'Lune';
$lang['Sunrise'] = 'Lever du soleil';
$lang['Sunset'] = 'Coucher du soleil';
$lang['Moonrise'] = 'Lever de lune ';
$lang['Moonset'] = 'Coucher de lune';
$lang['Night'] = 'Nuit ';
$lang['Day'] = 'Le Jour';
$lang['Nextnewmoon'] = 'Prochaine nouvelle lune';
$lang['Nextfullmoon'] = 'Prochaine pleine lune';
$lang['Luminance'] = 'Luminance';
$lang['Moonphase'] = 'Ephémérides';
$lang['Estimated'] = 'Luminosité';
$lang['Daylight'] = 'du jour';
$lang['Darkness'] = 'restant';
$lang['Daysold'] = 'Jours précedents';
$lang['Belowhorizon'] = 'Sous l horizon';
$lang['Mintill'] = '<br>Jusqu à min:';
$lang['Minago'] = ' Il y a min:';
$lang['Hrs'] = ' Hrs';
$lang['Min'] = ' Min';
$lang['TotalDarkness'] = 'Obscurité totale';
$lang['TotalDaylight'] = 'Journée très ensoleillée';


$lang['SOLAR'] = 'SOLEIL';
$lang['Newmoon'] = 'Nouvelle lune';
$lang['Waxingcrescent'] = 'Montante';
$lang['Firstquarter'] = 'Premier quarter';
$lang['Waxinggibbous'] = 'Gibbeuse';
$lang['Fullmoon'] = 'Pleine lune';
$lang['Waninggibbous'] = 'Gibbeuse Décroissante';
$lang['Lastquarter'] = 'Dernier quartier';
$lang['Waningcrescent'] = 'Descendante';


//trends

$lang['Falling'] = 'Chute';
$lang['Rising'] = 'Hausse';
$lang['Steady'] = 'Stable';
$lang['Rapidly'] = 'Rapidement';
$lang['Temp'] = 'Temp.';


//Solar-UV

//uv
$lang['No Cautions'] = 'aucune alerte';
$lang['Nocaution'] = 'Faible<color> risque</color> à etre exposé ';
$lang['Wearsunglasses'] = 'Porter des <color> lunettes de soleil</color> ';
$lang['Stayinshade'] = 'Protéger vous <color> du </color> soleil';
$lang['Reducetime'] = 'Réduire son exposition au <color> soleil</color> entre 10H et 16H ';
$lang['Minimize'] = '<color>Vous pouvez vous</color> exposer entre 10H et 16 H ';
$lang['Trytoavoid'] = 'Eviter de vous <color> exposer</color> entre 10H et 16 H ';

//solar

$lang['Poor'] = 'Radiations<color><br>Faibles</color>';
$lang['Low'] = 'Radiations<color><br>Modérées<color>';
$lang['Moderate'] = 'Radiations<color><br>Fortes <br></color>';
$lang['Good'] = 'Radiations<color><br>Extrème <br></color>';
$lang['Solarradiation']= 'Radiations solaire';

//current sky
$lang['Currentsky'] = 'Conditions Actuelles';
$lang['Currently'] = 'Actuellement';
$lang['Cloudcover'] = 'Couverture nuageuse';



//Notifications
$lang['Nocurrentalert'] = 'Aucune Alerte météo ';
$lang['Windalert'] = 'Rafales de vent à';
$lang['Tempalert'] = 'Température maxi.';
$lang['Heatindexalert'] = 'Indice de chaleur elevé  ';
$lang['Windchillalert'] = 'Refroidissement éolien elevé ';
$lang['Dewpointalert'] = 'Humidité Inconfortable';
$lang['Dewpointcolderalert'] = 'Point de rosée bas';
$lang['Feelslikecolderalert'] = 'Ressenti plus froid';
$lang['Feelslikewarmeralert'] = 'Ressenti plus chaud';
$lang['Rainratealert'] = 'par/hr<span> Chute de pluie ';

//Earthquake Notifications
$lang['Regional'] = 'Tremblement de terre régionaux';
$lang['Significant'] = 'Tremblements de terre importants';
$lang['Nosignificant'] = 'Pas de tremblement de terre important';


//Main page
$lang['Barometer'] = 'Baromètre';
$lang['UVSOLAR'] = 'UV | Solaires';
$lang['Earthquakes'] = 'Autres tremblements de terre ';
$lang['Earthquake'] = 'TREMBLEMENTS DE TERRE ';
$lang['Daynight'] = 'Ephémérides';

$lang['Location'] = 'Location';
$lang['Hardware'] = 'Hardware';
$lang['Rainfalltoday'] = 'Précipitations';
$lang['Windspeed'] = 'Vitesse';
$lang['Winddirection'] = 'Direction du vent';
$lang['Measured'] = 'Mesuré ce jour';
$lang['Forecast'] = 'Prévisions';
$lang['Forecastahead'] = 'Prévisions à 10 jours ';
$lang['Forecastsummary'] = 'Prévisions à 2 jours';
$lang['WindGust'] = 'Rafale de vent';

$lang['Hourlyforecast'] = 'Prévisions horaires ';
$lang['Significantearthquake'] = 'Tremblements de terre importants';
$lang['Regionalearthquake'] = 'Tremblements de terre régionaux';
$lang['Average'] = 'Moyenne';
$lang['Notifications'] = 'Notifications des alertes';
$lang['Indoor'] = 'Intérieur';
$lang['Today'] = 'Du jour';
$lang['Tonight'] = 'Du soir';
$lang['Tomorrow'] = 'Demain';
$lang['Tomorrownight'] 	  = 'Demain soir';
$lang['Updated'] 		 = 'Mise à jour';
$lang['Meteor'] 		 = 'Pluie de météorites';
$lang['No Meteor Showers'] 		 = 'Aucune pluie de météorites';
$lang['WeatherStationNotifications'] = 'Notifications ';  
$lang['Firerisk'] = 'Risque de feux de forêts'; 
$lang['Localtime'] = 'Heure locale'; 
$lang['Nometeor'] = 'Pas de pluies de météorites';
$lang['LiveWebCam'] = 'Webcam'; 
$lang['Online'] = 'En ligne';
$lang['Offline'] = 'Hors ligne';
$lang['Weatherstation'] = 'Station méteo';
$lang['Cloudbase'] = 'Base des nuages';
$lang['uvalert'] = 'Caution UVINDEX Fort';
$lang['Rainbow'] = 'Arc en ciel';
$lang['Windy'] = 'Venteux';
$lang['Max'] = 'Max';
$lang['Min'] = 'Min';


//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Tremblement de terre modéré';
$lang['MinorE'] = 'Tremblement de terre mineur';
$lang['StrongE'] = 'Tremblement de terre fort';
$lang['RegionalE'] = 'Regionale';

//extras
$lang['SunPosition'] = 'Sun Position';
$lang['Conditions'] = 'Conditions';
$lang['Cloudbase Height'] = 'Base des nuages';
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