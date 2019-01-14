<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?>


<div class="topmin">


<?php //wind max month
 if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>60){echo "<topred1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>40){echo "<toporange1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>30){echo "<topyellow1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>10){ echo "<topgreen1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>0){ echo "<topblue1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 //wind  mph
 if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>40){echo "<topred1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>24){echo "<toporange1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>18){echo "<topyellow1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>6){ echo "<topgreen1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>-50){ echo "<topblue1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 //wind  ms
 if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>16.6){echo "<topred1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>11){echo "<toporange1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>8.3){echo "<topyellow1>",$weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>2.7){ echo "<topgreen1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>-50){ echo "<topblue1>", $weather["wind_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 
?>
</div></smalluvunit>

<div class="minword">Wind</div></div>

<div class="mintimedate">Max
</div>  
<div class="yearwordbig">Wind</div>

<div class="topmax">
<?php //wind max year
 if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed_max"]>60){echo "<topred1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed_max"]>40){echo "<toporange1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed_max"]>30){echo "<topyellow1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed_max"]>10){ echo "<topgreen1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed_max"]>0){ echo "<topblue1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 //wind mph
 if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed_max"]>40){echo "<topred1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed_max"]>24){echo "<toporange1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed_max"]>18){echo "<topyellow1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed_max"]>6){ echo "<topgreen1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed_max"]>-50){ echo "<topblue1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 //wind  ms
 if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed_max"]>16.6){echo "<topred1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed_max"]>11){echo "<toporange1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed_max"]>8.3){echo "<topyellow1>",$weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed_max"]>2.7){ echo "<topgreen1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed_max"]>-50){ echo "<topblue1>", $weather["wind_gust_speed_max"]." <smallwindunit>".$weather["wind_units"] ; }
 ?>
</div></smalluvunit>
<div class="maxword">Gust</div></div>
<div class="maxtimedate">Max
</div>  

 