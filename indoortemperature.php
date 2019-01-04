<?php include('livedata.php');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<br />

<div class="tempindoorconverter">
<?php //chuck
if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>30){echo "<div class=tempconvertercirclered>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>25){echo "<div class=tempconvertercircleorange>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp_indoor"])>18){echo "<div class=tempconvertercircleyellow>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' &&  anyToC($weather["temp_indoor"])>10){echo "<div class=tempconvertercirclegreen>".anyToC($weather["temp_indoor"])."&deg;C" ;}
else if($weather["temp_units"]=='F' && anyToC($weather["temp_indoor"])<10){echo "<div class=tempconvertercircleblue>".anyToC($weather["temp_indoor"])."&deg;C" ;}

else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>30){echo "<div class=tempconvertercirclered>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>25){echo "<div class=tempconvertercirclerange>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>18){echo "<div class=tempconvertercircleyellow>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp_indoor"])>10){echo "<div class=tempconvertercirclegreen>".anyToF($weather["temp_indoor"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' && anyToC($weather["temp_indoor"])<10){echo "<div class=tempconvertercircleblue>".anyToF($weather["temp_indoor"])."&deg;F" ;}
?></div></div>

<div class="weather34-humidityindoor">
<svg id="weather34 humidity bar svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["humidity_indoor"]==100){echo "rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["humidity_indoor"]>=90){echo " rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>=80){echo " rgba(0, 110, 184,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>70){echo " rgba(18, 122, 161,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>60){echo " rgba(38, 139, 127,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>50){echo " rgba(38, 139, 127,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>45){echo " rgba(77, 170, 74,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>40){echo " rgba(110, 182, 57,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>30){echo " rgba(141, 186, 51,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>20){echo " rgba(177, 190, 44,  0.8)";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>10){echo " rgba(214, 195, 38,  0.7)";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["humidity_indoor"]>0){echo " rgba(248, 199, 32, 0.6)";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg></div></div></div>
 <div class="weather34indoorhumrate"><span> 
 <?php echo "<div class=maxcirclehum><div class=rainratesmall>";
 if($weather["temp_humidity_trend"] >0)echo '<spanindoortemprising><oorange>&nbsp;'.$risingsymbol.' </spanindoortemprising> ';
else if($weather["temp_humidity_trend"] <0)echo '<spanindoortempfalling><oblue>&nbsp; '.$fallingsymbol.' </spanindoortempfalling> ';
else if($weather["temp_humidity_trend"] ==0)echo '<spanindoortempfalling><ogreen>&nbsp; '.$steadysymbol.' </spanindoortempfalling> '; 
 echo "</div>".number_format($weather["humidity_indoor"],0),"%";?> 
 </div>
 
</div></div><div class="weather34humidityword">Humidity</div>
<div class="weather34-feelslikeindoor">  
	<svg id="weather34 feels like bar svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"])>35){echo " rgba(195, 144, 212, 0.5)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"])>=34){echo " rgba(239, 102, 101, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=33){echo " rgba(239, 102, 101, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=32){echo " rgba(239, 102, 101, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=31){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=28){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=24){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >=20){echo " rgba(230, 161, 65, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >16){echo " rgba(144, 177, 42, 0.9)";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >12){echo " rgba(144, 177, 42, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >10){echo " rgba(144, 177, 42, 0.7)";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if (anyToC($weather["temp_indoor_feel"]) >0){echo " rgba(2, 148, 164,0.8)";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
  
 </div>
<div class="weather34feelsrate"><span> 
 <?php echo "<div class=maxcirclehum><div class=rainratesmall>";
 if($weather["temp_indoor_trend"] >0)echo '<spanindoortemprising><oorange>&nbsp;'.$risingsymbol.' </spanindoortemprising> ';
else if($weather["temp_indoor_trend"]<0)echo '<spanindoortempfalling><oblue>&nbsp; '.$fallingsymbol.' </spanindoortempfalling> ';
else if($weather["temp_indoor_trend"] ==0)echo '<spanindoortempfalling><ogreen>&nbsp; '.$steadysymbol.' </spanindoortempfalling> '; 
 echo "</div>".number_format($weather["temp_indoor_feel"],1),"&deg;";?>
 
 </div></div>
<div class="weather34feelsword">Feels Like</div>
 </span></div>
<div class="indoortrendhouse1">
<?php //temperture indoor alert
echo "Indoor"?></oorange>
</div>  
<div class="indoorhomesvg1">
<svg id="weather34 indoor house" width="128pt" height="128pt" viewBox="0 0 475 497" version="30092018" fill="currentcolor">
<path d=" M 211.42 96.39 C 219.31 93.33 229.02 94.82 235.24 100.72 C 248.26 113.57 261.09 126.66 274.50 139.11 C 274.67 130.74 274.26 122.36 274.67 114.00 C 275.00 106.78 281.80 100.82 288.94 100.98 C 299.32 101.01 309.70 100.99 320.08 100.99 C 328.19 101.00 335.21 108.86 334.03 116.97 C 333.93 143.01 334.05 169.04 333.97 195.07 C 333.94 196.71 333.92 198.57 335.39 199.65 C 345.35 209.34 355.26 219.08 365.19 228.80 C 368.20 231.79 371.69 234.49 373.60 238.39 C 376.82 244.35 376.98 251.89 373.92 257.95 C 370.54 265.08 362.95 270.12 355.02 270.16 C 348.03 270.32 341.04 270.18 334.05 270.20 C 333.91 304.45 334.07 338.71 333.96 372.96 C 257.99 372.94 182.01 372.95 106.04 372.96 C 105.93 338.71 106.09 304.45 105.95 270.20 C 98.96 270.18 91.96 270.32 84.98 270.16 C 76.81 270.07 68.98 264.78 65.78 257.28 C 62.30 249.81 63.74 240.43 69.22 234.29 C 97.88 205.26 127.47 177.17 156.23 148.23 C 169.74 134.74 183.40 121.40 197.03 108.04 C 201.58 103.90 205.47 98.61 211.42 96.39 M 210.66 108.63 C 196.77 122.41 182.90 136.21 168.90 149.88 C 139.19 178.84 110.04 208.38 80.23 237.23 C 77.80 239.59 75.27 242.13 74.35 245.50 C 72.16 252.29 77.88 260.06 84.97 260.31 C 95.24 260.46 105.53 260.38 115.81 260.31 C 115.81 294.66 115.67 329.00 115.70 363.35 C 185.23 363.42 254.77 363.42 324.31 363.35 C 324.33 329.00 324.19 294.66 324.20 260.31 C 334.14 260.42 344.09 260.38 354.04 260.37 C 357.75 260.43 361.45 258.63 363.66 255.64 C 367.05 251.37 366.91 244.85 363.13 240.86 C 350.32 228.69 337.96 216.05 325.35 203.68 C 323.83 202.61 324.21 200.65 324.11 199.06 C 324.19 172.02 324.09 144.98 324.17 117.95 C 324.12 115.98 324.22 113.74 322.84 112.16 C 320.96 110.54 318.31 110.92 316.03 110.83 C 307.33 110.92 298.63 110.79 289.94 110.88 C 287.54 110.71 284.49 112.24 284.71 115.00 C 284.50 131.07 284.78 147.14 284.59 163.22 C 280.42 159.80 276.82 155.78 272.94 152.06 C 258.16 137.50 243.58 122.74 228.68 108.30 C 223.87 103.44 215.31 103.67 210.66 108.63 Z" /><path  d=" M 138.23 285.20 C 138.85 285.82 138.85 285.82 138.23 285.20 Z" /><path d=" M 141.13 289.24 C 144.43 289.45 139.58 292.30 141.13 289.24 Z" /><path d=" M 142.14 292.22 C 142.76 292.84 142.76 292.84 142.14 292.22 Z" /><path d=" M 141.21 294.42 C 142.54 294.64 142.77 295.37 141.89 296.61 C 140.56 296.40 140.33 295.67 141.21 294.42 Z" /><path d=" M 140.24 298.22 C 140.86 298.84 140.86 298.84 140.24 298.22 Z" /><path d=" M 133.21 300.21 C 133.83 300.83 133.83 300.83 133.21 300.21 Z" /><path d=" M 138.21 300.20 C 138.83 300.82 138.83 300.82 138.21 300.20 Z" />
</svg>
</div>

<div class="indoorhomevalue1">
<?php //temperture indoor celsius
 if (anyToC($weather["temp_indoor"]) >30){echo "<indoorred1>",$weather["temp_indoor"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if (anyToC($weather["temp_indoor"]) >24){echo "<indoororange1>",$weather["temp_indoor"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if (anyToC($weather["temp_indoor"]) >20){echo "<indooryellow1>",$weather["temp_indoor"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if (anyToC($weather["temp_indoor"]) >15){ echo "<indoorgreen1>", $weather["temp_indoor"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if (anyToC($weather["temp_indoor"]) >0){ echo "<indoorblue1>", $weather["temp_indoor"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
?>
</div></smalluvunit>
<div class="weather34indoorword">Temperature</div></div></div>