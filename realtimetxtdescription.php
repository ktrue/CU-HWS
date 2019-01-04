List of fields in the file aligned for homeweather station template
original found at http://wiki.sandaysoft.com/a/Realtime.txt

Field #	Example	Description	Equivalent Webtags we deduct 1 number to align template so it is different from the original at http://wiki.sandaysoft.com/a/Realtime.txt
1	19/08/09 16:03:45	time(always hh:mm:ss as per computer system)	<#timehhmmss>
2	8.4	outside temperature	<#temp>
3	84	relative humidity	<#hum>
4	5.8	dewpoint	<#dew>
5	24.2	wind speed (average)	<#wspeed>
6	33.0	latest wind speed reading	<#wlatest>
7	261	wind bearing (degrees)	<#bearing>
8	0.0	current rain rate (per hour)	<#rrate>
9	1.0	rain today	<#rfall>
10	999.7	barometer (The sea level pressure)	<#press>
11	W	current wind direction (compass point)	<#currentwdir>
12	6	wind speed (beaufort)	<#beaufortnumber>
13	km/h	wind units - m/s, mph, km/h, kts	<#windunit>
14	C	temperature units - degree C, degree F	<#tempunitnodeg>
15	hPa	pressure units - mb, hPa, in	<#pressunit>
16	mm	rain units - mm, in	<#rainunit>
17	146.6	wind run (today)	<#windrun>
18	+0.1	pressure trend value (The average rate of pressure change over the last three hours)	<#presstrendval>
19	85.2	monthly rainfall	<#rmonth>
20	588.4	yearly rainfall	<#ryear>
21	11.6	yesterday's rainfall	<#rfallY>
22	20.3	inside temperature	<#intemp>
23	57	inside humidity	<#inhum>
24	3.6	wind chill	<#wchill>
25	-0.7	temperature trend value (The average rate of change in temperature over the last three hours)	<#temptrend>
26	10.9	today's high temp	<#tempTH>
27	12:00	time of today's high temp (hh:mm)	<#TtempTH>
28	7.8	today's low temp	<#tempTL>
29	14:41	time of today's low temp (hh:mm)	<#TtempTL>
30	37.4	today's high wind speed (of average as per choice)	<#windTM>
31	14:38	time of today's high wind speed (average) (hh:mm)	<#TwindTM>
32	44.0	today's high wind gust	<#wgustTM>
33	14:28	time of today's high wind gust (hh:mm)	<#TwgustTM>
34	999.8	today's high pressure	<#pressTH>
35	16:01	time of today's high pressure (hh:mm)	<#TpressTH>
36	998.4	today's low pressure	<#pressTL>
37	12:06	time of today's low pressure (hh:mm)	<#TpressTL>
38	1.8.7	Cumulus Versions (the specific version in use)	<#version>
39	819	Cumulus build number	<#build>
40	36.0	10-minute high gust	<#wgust>
41	10.3	Heat index	<#heatindex>
42	10.5	Humidex	<#humidex>
43	13	UV Index	<#UV>
44	0.2	evapotranspiration today	<#ET>
45	14	solar radiation W/m2	<#SolarRad>
46	260	10-minute average wind bearing (degrees)	<#avgbearing>
47	2.3	rainfall last hour	<#rhour>
48	3	The number of the current (Zambretti) forecast as per Strings.ini.	<#forecastnumber>
49	1	Flag to indicate that the location of the station is currently in daylight (1 = yes, 0 = No)	<#isdaylight>
50	1	If the station has lost contact with its remote sensors "Fine Offset only", a Flag number is given (1 = Yes, 0 = No)	<#SensorContactLost>
51	NNW	Average wind direction	<#wdir>
52	2040	Cloud base	<#cloudbasevalue>
53	ft	Cloud base units	<#cloudbaseunit>
54	12.3	Apparent temperature	<#apptemp>
55	11.1	Sunshine hours so far today	<#SunshineHours>
56	420.1	Current theoretical max solar radiation	<#CurrentSolarMax>
57	1	Is it sunny? 1 if the sun is shining, otherwise 0 (above or below threshold)	<#IsSunny>
