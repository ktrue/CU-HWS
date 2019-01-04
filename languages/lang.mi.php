<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: Maori (New Zealand)
Translation By : Jennifer L. Caughey (http://wairoa.net/weather/)
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
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
setlocale(LC_TIME, "mi-NZ");
$lang = array();

// Menu

$lang['Settings'] = 'Tautuhinga';
$lang['Layout'] = 'Tahora Whakaka';
$lang['Lighttheme'] = 'Kaupapa te Marama';
$lang['Darktheme'] = 'Kaupapa Pango';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Metric (C)';
$lang['UKmetric'] = 'UK (MPH - Metric) ';
$lang['Scandinavia'] = 'Scandinavia(M/S)';

$lang['Worldwideearthquakes'] = 'Ru ao Whanui';
$lang['Toggle'] = 'Whakawhiti ki Tonu Mata ';
$lang['Contactinfo'] = 'Teihana & Whakapa';
$lang['Templateinfo'] = 'Tatauira';
$lang['language'] = 'Te Reo';
$lang['Weatherstationinfo'] = 'Teihana Huarere';
$lang['Webdesigninfo'] = 'Tatauira';
$lang['Contact'] = 'Imera';

//temperature
$lang['Temperature'] = 'Pamahana';
$lang['Feelslike'] = 'Penei';
$lang['Humidity'] = 'Takawai';
$lang['Dewpoint'] = 'Tomairangi';
$lang['Trend'] = 'Ahuatanga ';
$lang['Heatindex'] = 'Kupu tohu i te hahana';
$lang['Windchill'] = 'Matao Hau ';
$lang['Tempfactors'] = 'Ahuatanga pamahana';
$lang['Nocautions'] = 'Kahore Matohi';
$lang['Wetbulb'] = 'Puramu Wet';
$lang['dry'] = '& Maroke';
$lang['verydry'] = '& Maroke Rawa';


//new 03-03-2017 feature temperature feels
$lang['FreezingCold'] = 'Tino Makariri';
$lang['FeelingVeryCold'] = 'Manawarau Matao';
$lang['FeelingCold'] = 'Makariri';
$lang['FeelingCool'] = 'Hauhau';
$lang['FeelingComfortable'] = 'Haneanea ';
$lang['FeelingWarm'] = 'Mahana';
$lang['FeelingHot'] = 'Wera';
$lang['FeelingUncomfortable'] = 'Manawarau';
$lang['FeelingVeryHot'] = 'Rawa Wera';
$lang['FeelingExtremelyHot'] = 'Tino Wera';

// new 03-03-2017 new Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Marino';
$lang['LightBreezeattimes'] = 'Hau Marama ';
$lang['MildBreezeattimes'] = 'Hau Ngawari ';
$lang['ModerateBreezeattimes'] = 'Hau Ngawari';
$lang['FreshBreezeattimes'] = 'Tino Hauhau';
$lang['StrongBreezeattimes'] = 'Te Hau Kaha';
$lang['NearGaleattimes'] = 'Te Hau Kaha';
$lang['GaleForceattimes'] = 'Hau Awha Kaha ';
$lang['StrongGaleattimes'] = 'Hau Awha';
$lang['StormConditions'] = 'Awha';
$lang['ViolentStormConditions'] = 'Tupuhi Tutu';
$lang['HurricaneConditions'] = 'Tupuhi Huripari';

//wind
$lang['Windspeed'] = 'Hau Tere';
$lang['Gust'] = 'Hau parara';
$lang['Direction'] = 'Aronga';
$lang['Gusting'] = 'Te hau pupuhi i';
$lang['Blowing'] = 'Te hau pupuhi i';
$lang['Wind'] = 'Hau';

$lang['Calm'] = 'Marino';
$lang['Lightair'] = 'Hau Marama';
$lang['Lightbreeze'] = 'Hau Ngawari ';
$lang['Gentelbreeze'] = 'Hau Ngawari';
$lang['Moderatebreeze'] = 'Hau Ngawari';
$lang['Freshbreeze'] = 'Tino Hauhau';
$lang['Strongbreeze'] = 'Te Hau Kaha';
$lang['Neargale'] = 'Te Hau Kaha';
$lang['Galeforce'] = 'Hau Awha';
$lang['Stronggale'] = 'Awha';
$lang['Storm'] = 'Tupuhi';
$lang['Violentstorm'] = 'Tupuhi Tutu';
$lang['Hurricane'] = 'Tupuhi Huripari';

$lang['Avg'] = '<span2>Waweenga:</span2>';

//wind direction compass
$lang['Northdir'] = 'Hauraro';
$lang['NNEdir'] = 'Rangaranga <br><span>Te muri</span>';
$lang['NEdir'] = 'Whakarua';
$lang['ENEdir'] = 'Whakauru';
$lang['Eastdir'] = 'Marangai';
$lang['ESEdir'] = 'Mawake';
$lang['SEdir'] = 'Patokatoka';
$lang['SSEdir'] = 'Tonga Ma<br><span>Rawhiti</span>';
$lang['Southdir'] = 'Tonga';
$lang['SSWdir'] = 'Tonga<br><span>Hawi</span>';
$lang['SWdir'] = 'Hauauru <br><span> Ma Tonga</span>';
$lang['Westdir'] = 'Uru';
$lang['WSWdir'] = 'Kapekape';
$lang['WNWdir'] = 'Tapatapa<br><span>Atiu</span>';
$lang['NWdir'] = 'Mauru';
$lang['NWNdir'] = 'Tuku Uta';

//wind direction avg
$lang['North'] = 'Hauraro';
$lang['NNE'] = 'NNE';
$lang['NE'] = 'NE';
$lang['ENE'] = 'ENE';
$lang['East'] = 'Marangai ';
$lang['ESE'] = 'ESE';
$lang['SE'] = 'SE';
$lang['SSE'] = 'SSE';
$lang['South'] = 'Tonga';
$lang['SSW'] = 'SSW';
$lang['SW'] = 'SW';
$lang['WSW'] = 'WSW';
$lang['West'] = 'Uru';
$lang['WNW'] = 'WNW';
$lang['NW'] = 'NW';
$lang['NWN'] = 'NWN';

//rain
$lang['raintoday'] = 'Ua akuanei';
$lang['Rate'] = 'Te kaha o te ua';
$lang['Rainfall'] = 'Hekenga Marangai';
$lang['Precip'] = 'Ua'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Ua';
$lang['Heavyrain'] = 'Awha';

//sun -moon-daylight-darkness
$lang['Sun'] = 'Ra';
$lang['Moon'] = 'Marama';
$lang['Sunrise'] = 'Te whitinga o te ra';
$lang['Sunset'] = 'Tonga o te ra';
$lang['Moonrise'] = 'Marama Panaki ';
$lang['Moonset'] = 'Marama Te';
$lang['Night'] = 'Po ';
$lang['Day'] = 'Ra';
$lang['Nextnewmoon'] = 'Te Marama hou';
$lang['Nextfullmoon'] = 'Marama Rakaunui';
$lang['Luminance'] = 'Turama';
$lang['Moonphase'] = 'Marama Pakeke';
$lang['Estimated'] = 'Awhiwhiwhi';
$lang['Daylight'] = 'Awatea';
$lang['Darkness'] = 'Te po';
$lang['Daysold'] = 'Nga Ra';
$lang['Belowhorizon'] = 'paewai o te moana<br>i raro';
$lang['Mintill'] = '<br>meneti noa';
$lang['Minago'] = ' miniti ki muri';
$lang['Hrs'] = ' hrs';
$lang['Min'] = ' min';
$lang['TotalDarkness'] = 'Potangotango';
$lang['TotalDaylight'] = 'Awatea';
$lang['Below'] = 'ko raro te pae';

$lang['Newmoon'] = 'Te Marama hou';
$lang['Waxingcrescent'] = 'Ka hua Te Marama';
$lang['Firstquarter'] = 'Tuatahi Koata';
$lang['Waxinggibbous'] = 'Hua Marama';
$lang['Fullmoon'] = 'Marama Rakaunui';
$lang['Waninggibbous'] = 'Roku Marama';
$lang['Lastquarter'] = 'Te Koata Whakamutunga';
$lang['Waningcrescent'] = 'Roku Marama';

//trends

$lang['Falling'] = 'Heke';
$lang['Rising'] = 'Rerenga';
$lang['Steady'] = 'Tina';
$lang['Rapidly'] = 'Tere';
$lang['Temp'] = 'Pmahana';

//Solar-UV

//uv
$lang['Nocaution'] = 'Kahore matohi';
$lang['Wearsunglasses'] = 'Whakamahi mohiti i runga i nga ra kanapa';
$lang['Stayinshade'] = 'Noho i roto i te atarangi i te poutumarotanga, ka ko kaha te ra';
$lang['Reducetime'] = 'Iti iho te wā i roto i te ra i waenganui i 10am - 4pm ';
$lang['Minimize'] = 'Ra te rongo i waenganui i 10am - 4pm ';
$lang['Trytoavoid'] = 'Tamata ki te karo i te ra te rongo i waenganui i 10am - 4pm ';

//solar

$lang['Poor'] = 'Rehu<color> <br>Puhihi</color>';
$lang['Low'] = 'Papaku <br><color>Puhihi</color>';
$lang['Moderate'] = 'Tuahuru <br><color>Puhihi</color>';
$lang['Good'] = 'Pai <br><color>Puhihi</color>';
$lang['Solarradiation']= 'Ra Puhihi';

//current sky
$lang['Currentsky'] = 'Here o naianei';
$lang['Currently'] = 'O naianei';
$lang['Cloudcover'] = 'Kapua Takere';

//Notifications
$lang['Nocurrentalert'] = 'Kahore matohi huarere o naianei';
$lang['Windalert'] = 'Te hau pupuhi i';
$lang['Tempalert'] = 'Pamahana teitei';
$lang['Heatindexalert'] = 'Kupu tohu i te hahana ';
$lang['Windchillalert'] = 'Puhuka - Tupato';
$lang['Dewpointalert'] = 'Takawai - Manawarau';
$lang['Dewpointcolderalert'] = 'Tomairangi - Tupato';
$lang['Feelslikecolderalert'] = 'Makariri ake';
$lang['Feelslikewarmeralert'] = 'Mahana ake';
$lang['Rainratealert'] = 'te kahe o te ua ia<span> haora';

//Earthquake Notifications
$lang['Regional'] = 'Ru Rohe';
$lang['Significant'] = 'Te ru o Te Whenua';
$lang['Nosignificant'] = 'No nga ru o nui';

//Main page
$lang['Barometer'] = 'Barometer';
$lang['UVSOLAR'] = 'UV | Ra Raraunga';
$lang['Earthquake'] = 'Te ru o Te Whenua';
$lang['Daynight'] = 'Awatea & Te po Info';

$lang['Location'] = 'Tauwahi ';
$lang['Hardware'] = 'Pumaro';
$lang['Rainfalltoday'] = 'Ua akuanei';
$lang['Windspeed'] = 'Tere Hau';
$lang['Winddirection'] = 'Aronga Hau';
$lang['Measured'] = 'Whanganga i tenei ra';
$lang['Forecast'] = 'Tohu huarere';
$lang['Forecastahead'] = 'Tohu Huarere';
$lang['Forecastsummary'] = 'Nga mokauoka Huarere';
$lang['WindGust'] = 'Tere Hau | Hau parara';

$lang['Hourlyforecast'] = 'Tohu Huarere Haora';
$lang['Significantearthquake'] = 'Te ru o Te Whenua';
$lang['Regionalearthquake'] = 'Ru Rohe';
$lang['Average'] = 'Waweenga';
$lang['Notifications'] = 'Matohi Huarere';
$lang['Indoor'] = 'Roto';
$lang['Today'] = 'Tenei ra';
$lang['Tonight'] = 'Po';
$lang['Tomorrow'] = 'Apopo';
$lang['Tomorrownight'] 		 = 'Po Apopo';
$lang['Updated'] 		 = 'Whakahangai';
$lang['Meteor'] 		 = 'Rongo Meteor';
$lang['WeatherStationNotifications'] = 'Matohi Teihana Huarere';  
$lang['Firerisk'] = 'Morea Ahi';  
$lang['Localtime'] = 'Wa rohe'; 
$lang['Nometeor'] = 'No Rongo Meteor';
$lang['LiveWebCam'] = 'WebCam'; 
$lang['Online'] = 'Ipurangi';
$lang['Offline'] = 'Tuimotu';
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