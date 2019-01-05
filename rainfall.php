<?php include_once('livedata.php');?><div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  

<div class="rainannual1">
<div class="almanac">Almanac</div>
<?php echo date('Y'),"<br>";echo "<rainblue>",$weather["rain_year"],"</rainblue>";
if($weather["rain_units"]=="mm"){echo "&nbsp;<raingrey>".$weather["rain_units"]."</raingrey><br>";}
else echo " <grey>in</grey><br>";?>
<?php echo date('M'),"<br>";echo "<rainblue>",$weather["rain_month"],"</rainblue>";
if($weather["rain_units"]=="mm"){echo "&nbsp;<raingrey>".$weather["rain_units"]."</raingrey>";}
else echo " <grey>in</grey>";?>
<br>
<?php echo "Last Hour<br>";echo "<rainblue>",$weather["rain_lasthour"],"</rainblue>";
if($weather["rain_units"]=="mm"){echo "&nbsp;<raingrey>".$weather["rain_units"]."</raingrey>";}
else echo " <grey>in</grey>";?>
<br>
<?php echo "Yesterday<br>";echo "<rainblue>",$weather["rainydmax"],"</rainblue>";
if($weather["rain_units"]=="mm"){echo "&nbsp;<raingrey>".$weather["rain_units"]."</raingrey>";}
else echo " <grey>in</grey>";?>
</div>

<div class="weather34i-rairate-bar">
 <div id="raincontainer">
  <div id="weather34rainbeaker">
    <div id="weather34rainwater" style="height:<?php 
	if ($weather["rain_units"] =='mm' && $weather["rain_today"]){	
	echo $weather["rain_today"]*2.5+1;}	
	else if ($weather["rain_units"] =='in' && $weather["rain_today"]){	
	echo $weather["rain_today"]*25.4*2.5;}	
	?>px;">      
    </div></div></div>	
</div>    
 <div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)." &nbsp;<smallrainunit> ".$weather["rain_units"];}
else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)." <smallrainunit>&nbsp; ".$weather["rain_units"];}
else if ($weather["rain_units"] =='mm'){echo '<div class=raintoday1>'.number_format($weather["rain_today"],1)." <smallrainunit>&nbsp; ".$weather["rain_units"];}
?></smallrainunit></div></div>
<div class="rainconverter">
<?php 
	if ($weather["rain_units"] =='in'){	
	echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*25.400013716,1)."<smallrainunit>mm";}	
	else if ($weather["rain_units"] =='mm'){	
	echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*0.0393701,2)."<smallrainunit>in";}	
	?>
</span></div></div>
<div class="weather34-rrrate-bar">
<svg id="weather34 rain rate svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["rain_rate"]>=22){echo " rgba(237, 73, 71, 0.8)";}else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.8){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["rain_rate"]>=20){echo " rgba(237, 73, 71, 0.8)";}else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.78){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["rain_rate"]>=18){echo " rgba(237, 73, 71, 0.8)";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.70){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["rain_rate"]>=16){echo " rgba(237, 73, 71, 0.8)";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.62){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["rain_rate"]>14){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.55){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["rain_rate"]>12){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.47){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["rain_rate"]>10){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.39){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["rain_rate"]>8){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.31){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["rain_rate"]>6){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.23){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["rain_rate"]>4){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.15){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["rain_rate"]>2){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0.07){echo " #00a4b4";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["rain_rate"]>0){echo " #00a4b4";} else if ($weather["rain_units"] =='in' && $weather["rain_rate"]>0){echo " #00a4b4";}else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
 </div></div></div>
 <div class="weather34rainrate"><span> 
<?php echo "<div class=maxcirclerain><div class=rainratesmall>Rate</div>".number_format($weather["rain_rate"],2);?> </span></div>
<?php echo "<div class=maxcirclerain><div class=rainratesmall>Rate</div>".number_format($weather["rain_rate"],2);?> </span></div>
