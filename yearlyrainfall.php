<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');?>
<div class="maxtemp"><?php echo '
<svg id="i-info" viewBox="0 0 32 32" width="3" height="3" fill="#eb6c20" stroke="#eb6c20" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg>
	 
<maxtemptitle>Monthly</maxtemptitle> Rainfall';?> 
<?php echo "<maxtempspan>",$weather["rain_year"]." ".$weather["rain_units"]."  <lowtempsuptemp>";?>
</div>

<div class="lowtemp"><?php echo '
<svg id="i-info" viewBox="0 0 32 32" width="3" height="3" fill="#067883" stroke="#067883" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg>

<lowtemptitle>Yearly</lowtemptitle> Rainfall';?> 
<?php echo "<lowtempspan>",$weather["rain_month"]." ".$weather["rain_units"]."  <lowtempsuptemp>";?>
</div>



$weather["rain_month"]         
	$weather["rain_year"]        
	$weather["rain_units"]       