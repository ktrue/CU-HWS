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
</smalluvunit></div>
<div class="minword"><?php echo $lang['Today'];?></div>
</div>
<div class="mintimedate"><?php echo $lang['Max'];?></div>  
<div class="yearwordbig"  style="margin-top: 20px !important;"><img src="css/icons/temp34.svg" alt="temperature icon" width="26" height="60"/></div>

<div class="topmax">
<?php //temperture max year celsius
 if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>30){echo "<topred1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>=24){echo "<toporange1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>=18){echo "<topyellow1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>=6){ echo "<topgreen1>", $weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>-50){ echo "<topblue1>", $weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 
 if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>86){echo "<topred1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>=75){echo "<toporange1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>=64){echo "<topyellow1>",$weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>=42.8){ echo "<topgreen1>", $weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>-50){ echo "<topblue1>", $weather["temp_today_low"]  ;echo "&deg;<smalluvunit>".$weather["temp_units"] ; }

?>
</smalluvunit></div>
<div class="maxword"><?php echo $lang['Today'];?></div>
</div>
<div class="maxtimedate"><?php echo $lang['Min'];?></oorange></div> 
