# Home Weather Station weather website template for Cumulus/Cumulus MX

This repository contains the current version of Brian Underdown's Home Weather Station weather website template set.
Brian's main website is https://weather34.com/homeweatherstation/index.html
In January, 2019, Brian has asked others to distribute/maintain his code for other weather station software,
and is only supporting Meteobridge/Meteobridge NANO-SD versions of the HWS template.

This version requires Cumulus software (either Cumulus 1.9.4 Windows or Cumulus MX) for data feeds for the conditions 
from your personal weather station.  Cumulus and Cumulus MX software is available from the Cumulus Wiki at https://cumuluswiki.wxforum.net/a/Software  Cumulus 1.9.4 is *not maintained* but still functional on Windows systems.
Cumulus MX is supported and maintained by Mark Crossley at https://github.com/mcrossley/CumulusMX

# Setup

* Setup Cumulus/CumulusMX to upload realtime.txt to your weather website.
* Download the .zip of the distribution.
* Unzip to the document root of your website.
* Browse to http://your.website/easyweathersetup.php
* There is no initial password when the page prompts the first time -- just press LOGIN to enter the page.
* ***IMPORTANT*** set a password in the screen for future use -- your browser can remember it. This will 
make future updates reasonably secure so only you can do the updates to the configuration.
* Make setting entries in the easyweathersetup.php page and SAVE.  The next time you run it, use the password you set in the step above.
* Repeat running easyweathersetup.php until the main screen appears as you like it.

# License

Copyright (c) 2016-2018 by Brian Underdown (https://weather34.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Template”), to deal in the Template without restriction, including without limitation the rights to, can use, can not copy without prior permission, can modify for personal use, can use and publish for personal use ,can not distribute without prior permission, can not sublicense without prior permission, and can not sell copies of the Template, and subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Template.

THE TEMPLATE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE TEMPLATE OR THE USE OR OTHER DEALINGS IN THE TEMPLATE.

Attribution-NonCommercial 4.0 International based on a work at https://weather34.com/homeweatherstation

# Non-Cumulus versions Available

Alternative versions listed below are not maintained by weather34 in any way -- only the Cumulus version receives css updates

* **Weewx Version** available via  download and more info supported by Ian Millard ( https://www.claydonsweather.org.uk/ )
https://github.com/steepleian/weather34-Home-Weatherstation-Template-WeeWX-adapted

* **Weatherflow API Version** **Discontinued** Please use meteobridge version if you have a meteobridge product, it offers more versatile options over the API and faster updates and better history/chart outputs or alternatively try the version for Weather Display below by Wim van der Kuil

* **Raspberry Pi Python Weatherflow console version** available via here supported download via by Peter Davis ( Weatherflow Forum )
https://github.com/peted-davis/WeatherFlow_PiConsole

* **Davis WeatherLink version** by Mats Ahlklo supports WL 2.0 details here
http://pysselilivet.blogspot.com/2017/01/install-weather34-with-weatherlink.html

* **ATMOCOM Version** for Ambient WS-2902 Osprey,Ventus W830, MiSol, ChiliTec, PanTech, Froggit WH3000, Ambient WS-8478 Falcon, Bresser,FOSHK HP-3500 series info here
https://atmocom.com/Demo-weather-data

* **Weather Display version** by Wim van der Kuil  Now Available via 
https://wd34.weather-template.com/

## Brian's note
A note from Brian 2-Jan-2019 (quoted from [here](https://www.wxforum.net/index.php?topic=29817.msg366998#msg366998)):

>Features and appearance may vary across these versions and requests for additions should go to the individual maintaining these.. there are two other versions not quite ready for release but are based on using the Rasperry Pi.

>The only supported (by weather34) versions are [Meteobridge](https://www.meteobridge.com/wiki/index.php/Home) and the current running beta for [Meteobridge NANO-SD](https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD). 
These versions are rich in features and additional features are added when time permits 
(a lot was added to the beta version in December 2018 it now supports 150 types of data variables,
whole array of chart data for those with lots historical data with more to come). 

>The current Meteobridge NANO-SD beta version has lots of historical options and almanac pop ups for various data.
You will also find a version maintained by Meteobridge developer (Boris) built into the NANO-SD product which doesn't require a web server as it merely runs inside the Meteobridge NANO-SD control panel.

