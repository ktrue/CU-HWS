<?php
#
# Program: make-eqlist.php
#
# Purpose: get USGS Earthquake list and format like the old (defunct) 
#      https://earthquake-report.com/feeds/recent-eq?json feed provided
#
# Author: Ken True - Saratoga-weather.org
#
# Version 1.00 - 30-Nov-2021 - Initial release
#
$USGS_URL = 'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojson';

$outfile = 'eqnotification.txt';  # resides in the ./jsondata/ directory of CU-HWS
global $Status;
/*
  expected $outfile JSON format:
	
	[
  {
    "title": "Moderate earthquake -  Nikol'skoye, Russia - January 3, 2019",
    "magnitude": "4.3",
    "location": " Nikol'skoye, Russia",
    "depth": "10",
    "latitude": "55.0294",
    "longitude": "164.661",
    "date_time": "2019-01-03T17:56:42+00:00",
    "link": "https://earthquake-report.com/2019/01/03/moderate-earthquake-nikolskoye-russia-january-3-2019/"
  },
  {
    "title": "Minor earthquake - Ionian Sea - January 3, 2019",
    "magnitude": "3.1",
    "location": "IONIAN SEA",
    "depth": "6",
    "latitude": "37.3",
    "longitude": "20.66",
    "date_time": "2019-01-03T18:42:03+00:00",
    "link": "https://earthquake-report.com/2019/01/03/minor-earthquake-ionian-sea-january-3-2019-2/"
  },
  ...
	]
	
From USGS JSON:

{
  "type": "FeatureCollection",
  "metadata": {
    "generated": 1638289710000,
    "url": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojson",
    "title": "USGS Magnitude 4.5+ Earthquakes, Past Week",
    "status": 200,
    "api": "1.10.3",
    "count": 97
  },
  "features": [
    {
      "type": "Feature",
      "properties": {
        "mag": 4.7,
        "place": "Izu Islands, Japan region",
        "time": 1638286871295,
        "updated": 1638289617040,
        "tz": null,
        "url": "https://earthquake.usgs.gov/earthquakes/eventpage/us6000g7ww",
        "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/us6000g7ww.geojson",
        "felt": null,
        "cdi": null,
        "mmi": null,
        "alert": null,
        "status": "reviewed",
        "tsunami": 0,
        "sig": 340,
        "net": "us",
        "code": "6000g7ww",
        "ids": ",us6000g7ww,",
        "sources": ",us,",
        "types": ",origin,phase-data,",
        "nst": null,
        "dmin": 2.85,
        "rms": 0.36,
        "gap": 92,
        "magType": "mb",
        "type": "earthquake",
        "title": "M 4.7 - Izu Islands, Japan region"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          142.2848,
          31.1773,
          10
        ]
      },
      "id": "us6000g7ww"
    },
  ...
*/

if(isset($_GET['force']) or !file_exists($outfile) or
   (file_exists($outfile) and (time() - filemtime($outfile) > 1800))) {
#  fetch fresh copy		 
	  $rawJSON = file_get_contents($USGS_URL);
		$JSON = json_decode($rawJSON,true);
		if(isset($JSON['metadata']['status']) and $JSON['metadata']['status'] == '200') {
			# got data.. process. 
			$newEQlist = array();
			
			foreach ($JSON['features'] as $i => $EQ) {
				$Q = array();  # assembly for new quake data
/*
    "title": "Moderate earthquake -  Nikol'skoye, Russia - January 3, 2019",
    "magnitude": "4.3",
    "location": " Nikol'skoye, Russia",
    "depth": "10",
    "latitude": "55.0294",
    "longitude": "164.661",
    "date_time": "2019-01-03T17:56:42+00:00",
    "link": "https://earthquake-report.com/2019/01/03/moderate-earthquake-nikolskoye-russia-january-3-2019/"
*/

  			$Q['title'] = $EQ['properties']['title']. ' - ' . gmdate('Y-m-d',$EQ['properties']['time']/1000);
  			$Q['magnitude'] = $EQ['properties']['mag'];
				$Q['location']  = $EQ['properties']['place'];
				$Q['depth']     = $EQ['geometry']['coordinates'][2];
				$Q['latitude']  = $EQ['geometry']['coordinates'][1];
				$Q['longitude'] = $EQ['geometry']['coordinates'][0];
				$Q['date_time'] = gmdate('c',$EQ['properties']['time']/1000);
				$Q['link']      = $EQ['properties']['url'];
				
				$newEQlist[] = $Q;
			}
		 
		 $newJSON = json_encode($newEQlist,
		    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
		 file_put_contents($outfile,$newJSON);
		 
		} # end gotdata
	 } # end need file refresh.

# end make-eqlist.php