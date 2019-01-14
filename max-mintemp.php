<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?>
<div class="topmin">

<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>30){echo "<topred1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>=24){echo "<toporange1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>=18){echo "<topyellow1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>=6){ echo "<topgreen1>", $weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>-50){ echo "<topblue1>", $weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 
 if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>86){echo "<topred1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>=75){echo "<toporange1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>=64){echo "<topyellow1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>=42.8){ echo "<topgreen1>", $weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>-50){ echo "<topblue1>", $weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 ?>
</div></smalluvunit>
<div class="minword">Hi</div></div>
<div class="mintimedate">Today
</div>  
<div class="yearwordbig">Temp</div>

<div class="topmax">
<?php //temperture max year celsius
 if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>30){echo "<topred1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=24){echo "<toporange1>",$weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=18){echo "<topyellow1>",$weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=6){ echo "<topgreen1>", $weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50){ echo "<topblue1>", $weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 
 if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>86){echo "<topred1>",$weather["temp_today_high"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=75){echo "<toporange1>",$weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=64){echo "<topyellow1>",$weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=42.8){ echo "<topgreen1>", $weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>-50){ echo "<topblue1>", $weather["tempymax"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }

?>
</div></smalluvunit>
<div class="maxword">Min</div></div>
<div class="maxtimedate">Today</oorange></div> 



