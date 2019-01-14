<?php 
//weather34 darksky uv module 19th September 2018 //
include_once('livedata.php');header('Content-type: text/html; charset=utf-8');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div> 
<div class="solaricon"><?php if($weather["solar"]<1){echo $uvdark ;} else echo $uvnormal;?></div><div class="solaricon1"><?php if($weather["solar"]<1){echo $uvdark ;} else echo $uvnormal;?></div>
<div class="weather34solarword">Solar Radiation </div><div class="weather34solarvalue"><div class="weather34solarvalue1"><span>

<?php if ($weather["solar"]==0){ echo "<div class=circlelux><span>".$nosun."</span></div>";}else echo "	<div class=circlelux><span>W/m&sup2</span>".$weather["solar"];?></span></div></div></div>

   <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solar"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solar"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solar"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solar"]>700){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solar"]>600){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solar"]>500){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solar"]>400){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solar"]>300){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solar"]>200){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solar"]>100){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solar"]>50){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solar"]>0){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>


 <div class="weather34luxword">Brightness</div>
 <?php $lux = number_format($weather["solar"]/0.0084555,0, '.', '');?>
    <div class="weather34luxvalue"><span><?php  
	if ($weather["solar"]==0){ echo "<div class=circlelux>".$nosun."</div>";}
	else if ($lux>99999) {echo "<div class=circlelux><span>Lux</span>".number_format($lux/1000,0). "K";}	
	else echo "<div class=circlelux><span>Lux</span>".$lux;?> 
</span>
</div></div></div>
 
 <div class="weather34-luxrate-bar"> 
<svg id="weather34 lux rate svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($lux>110000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($lux>90000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($lux>80000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($lux>70000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($lux>60000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($lux>50000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($lux>40000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($lux>30000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($lux>20000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($lux>10000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($lux>5000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($lux>0){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
 </div>




<?php $hi = 0;foreach ($darkskyhourlyCond as $cond) {$darkskyhourlyuv = $cond['uvIndex']; if ($hi++ == 0) break; }$weather["uv3"]=$darkskyhourlyuv ;?>
<div class="uvcontainer1"><?php 
if ($weather["uv3"]>10) {echo '<div class=uvtoday11>'.number_format($weather["uv3"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv3"]>8) {echo '<div class=uvtoday9-10>'.number_format($weather["uv3"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv3"]>5) {echo '<div class=uvtoday6-8>'.number_format($weather["uv3"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv3"]>3) {echo '<div class=uvtoday4-5>'.number_format($weather["uv3"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv3"]>=0) {echo '<div class=uvtoday1-3>'.number_format($weather["uv3"],1)."<smalluvunit> &nbsp;UVI";}

?></smallrainunit></div></div><div class="uvtrend">
<?php //temperture indoor alert
echo "UV INDEX"?></oorange>
</div>  
<div class="uvcaution"><?php 
if ($weather["uv3"]>10) {echo '&nbsp;Extreme UVI';}
else if ($weather["uv3"]>8) {echo 'Very High UVI';}
else if ($weather["uv3"]>5) {echo '&nbsp;&nbsp;&nbsp;&nbsp;High UVI';}
else if ($weather["uv3"]>3) {echo 'Moderate UVI';}
else if ($weather["uv3"]>=0) {echo '&nbsp;&nbsp;&nbsp;Low UVI';}
?></div>
 