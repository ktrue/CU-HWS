<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: PORTUGUESE
Translation By :  Jorge Mota
Developed By: Brian Underdown/Erik M Madsen
November 2016
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
setlocale(LC_TIME, "pt_PT");
$lang = array();

// Menu

$lang['Till'] = 'a ';
$lang['Settings'] = 'Definições';
$lang['Layout'] = 'Mudar Esquema';
$lang['Lighttheme'] = 'Tema Claro';
$lang['Darktheme'] = 'Tema Escuro';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Métrico (C)';
$lang['UKmetric'] = 'UK (MPH - Metric) ';
$lang['Scandinavia'] = 'Scandinavia(M/S)';

$lang['Worldwideearthquakes'] = 'Terramotos';
$lang['Toggle'] = 'Ecrã Completo ';
$lang['Contactinfo'] = 'Estação & Contactos';
$lang['Templateinfo'] = 'Contribuintes';
$lang['language'] = 'Selecionar Língua';
$lang['Weatherstationinfo'] = 'Info da Estação';
$lang['Webdesigninfo'] = 'Info Template';
$lang['Contact'] = 'Contactos';


//temperature
$lang['Temperature'] = 'Temperatura';
$lang['Feelslike'] = 'Sente-se';
$lang['Humidity'] = 'Humidade';
$lang['Dewpoint'] = 'Ponto de Orvalho';
$lang['Trend'] = 'tendência ';
$lang['Heatindex'] = 'Indíce de Calor';
$lang['Windchill'] = 'Windchill ';
$lang['Tempfactors'] = 'Fatores Temp';
$lang['Nocautions'] = 'Sem cuidados especiais';
$lang['Wetbulb'] = 'Wet Bulb';
$lang['dry'] = '& Seco';
$lang['verydry'] = '& Muito Seco';
//new feature temperature feels
$lang['FreezingCold'] = 'Frio Glaciar';
$lang['FeelingVeryCold'] = 'Sente-se Muito Frio';
$lang['FeelingCold'] = 'Sente-se Frio';
$lang['FeelingCool'] = 'Sente-se Frio';
$lang['FeelingComfortable'] = 'Sente-se Confortável ';
$lang['FeelingWarm'] = 'Sente-se Morno';
$lang['FeelingHot'] = 'Sente-se Quente';
$lang['FeelingUncomfortable'] = 'Sente-se Desconfortável';
$lang['FeelingVeryHot'] = 'Sente-se Muito Quente';
$lang['FeelingExtremelyHot'] = 'Sente-se Extremamente Quente';



//wind
$lang['Windspeed'] = 'Velocidade Vento';
$lang['Gust'] = 'Rajada';
$lang['Direction'] = 'Direção';
$lang['Gusting'] = 'Rajada de';
$lang['Blowing'] = 'Sopra a';
$lang['Wind'] = 'Vento';

$lang['Calm'] = 'Calmo';
$lang['Lightair'] = 'Pouco Vento';
$lang['Lightbreeze'] = 'Brisa Ligeira ';
$lang['Gentelbreeze'] = 'Brisa Suave';
$lang['Moderatebreeze'] = 'Brisa Moderada';
$lang['Freshbreeze'] = 'Brisa Fresca';
$lang['Strongbreeze'] = 'Brisa Forte';
$lang['Neargale'] = 'Vendaval Próximo';
$lang['Galeforce'] = 'Força do Vendaval';
$lang['Stronggale'] = 'Vendaval Forte';
$lang['Storm'] = 'Tempestade';
$lang['Violentstorm'] = 'Tempestade Violenta';
$lang['Hurricane'] = 'Furacão';

// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Condições Calmas';
$lang['LightBreezeattimes'] = 'Brisa Ligeira ocasional ';
$lang['MildBreezeattimes'] = 'Brisa Moderada ocasional ';
$lang['ModerateBreezeattimes'] = 'Brisa Moderada ocasional';
$lang['FreshBreezeattimes'] = 'Brisa Fresca ocasional';
$lang['StrongBreezeattimes'] = 'Briza Forte ocasional';
$lang['NearGaleattimes'] = 'Vendaval próximo ocasional';
$lang['GaleForceattimes'] = 'Força de Vendaval ocasional';
$lang['StrongGaleattimes'] = 'Vendaval Forte ocasional';
$lang['StormConditions'] = 'Condições de Tempestade';
$lang['ViolentStormConditions'] = 'Condições de Tempestada Violenta';
$lang['HurricaneConditions'] = 'Condições de Furacão';


$lang['Avg'] = '<span2> Avg: </span2>';

//wind direction compass
$lang['Northdir'] = 'De <span>Norte<br></span>';
$lang['NNEdir'] = 'Norte Norte <br><span>Este</span>';
$lang['NEdir'] = 'Norte <span> Este<br></span>';
$lang['ENEdir'] = 'Este Norte<br><span>Este</span>';
$lang['Eastdir'] = "De <span> Este<br></span>";
$lang['ESEdir'] = 'Este Sul<br><span>Este</span>';
$lang['SEdir'] = 'Sul <span> Este</span>';
$lang['SSEdir'] = 'Sul Sul<br><span>Este</span>';
$lang['Southdir'] = 'De <span> Sul</span>';
$lang['SSWdir'] = 'Sul Sul<br><span>Oeste</span>';
$lang['SWdir'] = 'Sul <span> Oeste</span>';
$lang['Westdir'] = 'De <span>Oeste<br></span>';
$lang['WSWdir'] = 'Oeste Sul<br><span>Oeste</span>';
$lang['Westdir'] = 'Due <span> Oeste</span>';
$lang['WNWdir'] = 'Oeste Norte<br><span>Oeste</span>';
$lang['NWdir'] = 'Norte <span> Oeste</span>';
$lang['NWNdir'] = 'Norte Norte<br><span>Oeste</span>';




//wind direction avg
$lang['North'] = 'Norte';
$lang['NNE'] = 'NNE';
$lang['NE'] = 'NE';
$lang['ENE'] = 'ENE';
$lang['East'] = 'Este ';
$lang['ESE'] = 'ESE';
$lang['SE'] = 'SE';
$lang['SSE'] = 'SSE';
$lang['South'] = 'Sul';
$lang['SSW'] = 'SSO';
$lang['SW'] = 'SO';
$lang['WSW'] = 'OSO';
$lang['West'] = 'Oeste';
$lang['WNW'] = 'ONO';
$lang['NW'] = 'NO';
$lang['NWN'] = 'NON';

//rain
$lang['raintoday'] = 'Precipitação Hoje';
$lang['Rate'] = 'Rácio';
$lang['Rainfall'] = 'Precipitação';
$lang['Precip'] = 'precip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Precipitação';
$lang['Heavyrain'] = 'Chuva Forte';
$lang['Flooding'] = 'Possível Inundação';
$lang['Rainbow'] = 'Rainbow';
$lang['Windy'] = 'Windy';

//sun -moon-daylight-darkness
$lang['Sun'] = 'Sol';
$lang['Moon'] = 'Lua';
$lang['Sunrise'] = 'Nascer do Sol';
$lang['Sunset'] = 'Por do Sol';
$lang['Moonrise'] = 'Nascer da Lua ';
$lang['Moonset'] = 'Por da Lua';
$lang['Night'] = 'Noite ';
$lang['Day'] = 'Dia';
$lang['Nextnewmoon'] = 'Próxima Lua Nova';
$lang['Nextfullmoon'] = 'Próxima Lua Cheia';
$lang['Luminance'] = 'Luminância';
$lang['Moonphase'] = 'Fase da Lua';
$lang['Estimated'] = 'Estimado';
$lang['Daylight'] = 'Luz do Dia';
$lang['Darkness'] = 'Escuridão';
$lang['Daysold'] = 'Dias';
$lang['Belowhorizon'] = 'abaixo do<br>horizonte';
$lang['Mintill'] = '<br>mins till';
$lang['Minago'] = ' mins atrás';
$lang['Hrs'] = ' hrs';
$lang['Mins'] = ' min';
$lang['TotalDarkness'] = 'Duração Noite';
$lang['TotalDaylight'] = 'Duração Dia';
$lang['Below'] = 'está abaixo do horizonte';

$lang['Newmoon'] = 'Lua Nova';
$lang['Waxingcrescent'] = 'Quarto Crescente';
$lang['Firstquarter'] = 'Primeiro Quarto';
$lang['Waxinggibbous'] = 'Lua';
$lang['Fullmoon'] = 'Lua Cheira';
$lang['Waninggibbous'] = 'Quarto Minguante';
$lang['Lastquarter'] = 'Último Quarto';
$lang['Waningcrescent'] = 'Crescente Minguante';


//trends

$lang['Falling'] = 'Em Queda';
$lang['Rising'] = 'A Subir';
$lang['Steady'] = 'Estável';
$lang['Rapidly'] = 'Rapidamente';
$lang['Temp'] = 'Temp';


//Solar-UV

//uv
$lang['Nocaution'] = 'Sem <color>precauções</color> necessárias';
$lang['Wearsunglasses'] = 'Colocar <color>óculos de sol</color> nos dias solarengos';
$lang['Stayinshade'] = 'Coloque-se à sombra próximo do meio dia quando o <color>sol</color> está forte';
$lang['Reducetime'] = 'Reduza o tempo de exposição ao <color>sol</color> entre as 10 e as 16Hrs ';
$lang['Minimize'] = 'exposição ao <color>sol</color> entre as 10 e as 16Hrs ';
$lang['Trytoavoid'] = 'Tente evitar a exposição ao <color>sol</color> entre as 10 e as 16Hrs ';

//solar

$lang['Poor'] = 'Pouca<color> <br>Radiação</color>';
$lang['Low'] = 'Baixa <br><color>Radiatiação</color>';
$lang['Moderate'] = 'Radiação <br><color>Moderada</color>';
$lang['Good'] = 'Radiação <br><color>Boa</color>';
$lang['Solarradiation']= 'Radiação Solar';


//current sky
$lang['Currentsky'] = 'Condições actuais';
$lang['Currently'] = 'Actualmente';
$lang['Cloudcover'] = 'Céu Encoberto';

//Notifications
$lang['Nocurrentalert'] = 'Sem Alertas Meteorológicos';
$lang['Windalert'] = 'Rajada de';
$lang['Tempalert'] = 'Temperatura Alta';
$lang['Heatindexalert'] = 'Aviso de Índice de Calor ';
$lang['Windchillalert'] = 'Aviso de Windchill ';
$lang['Dewpointalert'] = 'Humidade desconfortável';
$lang['Dewpointcolderalert'] = 'Ponto de Orvalho sente-se frio';
$lang['Feelslikecolderalert'] = 'Sente-se Frio';
$lang['Feelslikewarmeralert'] = 'Sente-se Calor';
$lang['Rainratealert'] = 'Precipitação<span> por/hr ';
$lang['Fireriskalert'] = 'Aviso de Risco de Incêndio';

//Earthquake Notifications
$lang['Regional'] = 'Terramoto Regional';
$lang['Significant'] = 'Terramoto Importante';
$lang['Nosignificant'] = 'Terramoto não Significativo';


//Main page
$lang['Barometer'] = 'Barômetro';
$lang['UVSOLAR'] = 'UV-Solar';
$lang['Earthquake'] = 'Dados de Terramotos';
$lang['Daynight'] = 'Dia & Noite Info';
$lang['SunPosition'] = 'Sun Position';
$lang['Azimuth'] = 'Azimuth';
$lang['Elevation'] = 'Elevation';
$lang['Location'] = 'Localização ';
$lang['Hardware'] = 'Hardware';
$lang['Rainfalltoday'] = 'Precipitação Hoje';
$lang['Windspeed'] = 'Velocidade Vento';
$lang['Winddirection'] = 'Direção Vento';
$lang['Measured'] = 'Registado Hoje';
$lang['Forecast'] = 'Previsão';
$lang['Forecastahead'] = 'Próxima Previsão';
$lang['Forecastsummary'] = 'Sumário da Previsão';
$lang['WindGust'] = 'Vento | Rajada';

$lang['Hourlyforecast'] = 'Previsão Horária ';
$lang['Significantearthquake'] = 'Terramoto Importante';
$lang['Regionalearthquake'] = 'Terramoto Regional';
$lang['Average'] = 'Média';
$lang['Notifications'] = 'Alerta de Notificações';
$lang['Indoor'] = 'Interior';
$lang['Today'] = 'Hoje';
$lang['Tonight'] = 'Esta Noite';
$lang['Tomorrow'] = 'Amanhã';
$lang['Tomorrownight'] 		 = 'Amanhã à Noite';
$lang['Updated'] 		 = 'Actualizado';
$lang['Meteor'] 		 = 'Chuva de Meteoritos Info';
$lang['WeatherStationNotifications'] = 'Notificações';   
$lang['Firerisk'] = 'Risco de Incêndio'; 
$lang['Localtime'] = 'Hora Local';
$lang['Nometeor'] = 'Sem Chuva de Meteoritos';
$lang['LiveWebCam'] = 'Live Web Cam';
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Weatherstation'] = 'Estação Meteorológica';
$lang['Cloudbase'] = 'Base das Nuvens';
$lang['uvalert'] = 'Atenção - Alto UVINDEX';
$lang['Rainbow'] = 'Arco Íris';
$lang['Windy'] = 'Ventoso';
$lang['Max'] = 'Max';
$lang['Min'] = 'Min';
//other
$lang['FullWxsimForecast'] = 'Indstillinger';
$lang['LiveWebcamimagesofWeatherstationSauwerd'] = 'Skift Layout';
$lang['EuropeanWeathernetworkForecast'] = 'Light Theme1';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Terramoto Moderado';
$lang['MinorE'] = 'Terramoto Ligeiro';
$lang['StrongE'] = 'Terramoto Forte';
$lang['RegionalE'] = 'Regional';

//extras
$lang['SunPosition'] = 'Posição do Sol';
$lang['Azimuth'] = 'Azimute';
$lang['Elevation'] = 'Elevação';
$lang['Conditions'] = 'Condições';
$lang['Cloudbase Height'] = 'Base das Nuvens';
$lang['Station'] = 'Estação';
$lang['Detailed Forecast'] = 'Previsão Detalhada';
$lang['Summary Outlook'] = 'Sumário';

//Air Quality
$lang['Hazordous']= 'Condições Perigosas';
$lang['VeryUnhealthy']= 'Muito prejudicial à saúde';
$lang['Unhealthy']= 'Qualidade do ar não saudável';
$lang['UnhealthyFS']= 'Não saudável para alguns';
$lang['Moderate']= 'Qualidade do Ar Moderada ';
$lang['Good']= 'Qualidade do Ar Boa ';
?>