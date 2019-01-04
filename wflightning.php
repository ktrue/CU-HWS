<?php include('settings.php');include('shared.php');date_default_timezone_set($TZ);header('Content-type: text/html; charset=utf-8');error_reporting(0);?>
<body>
<?php 
    //weatherflow sky + air  
$file1 = 'jsondata/weatherflow.txt';
$url = $file1;
$content = file_get_contents($url);
$json = json_decode($content, true);    
foreach($json['obs'] as $item)
//foreach($json['station_units'] as $item2) 
{

   $weatherflow['lastlightningtime']  = $item['lightning_strike_last_epoch'];
   $weatherflow['lightningdistance']  = $item['lightning_strike_last_distance'];
   $weatherflow['lightning']  = $item['lightning_strike_count'];
   $weatherflow['lightning3hr']  = $item['lightning_strike_count_last_3hr'];
}
 //weather34 temperture indoor celsius 
 echo "<div class='circleindoortemp' >" .$weatherflow["lightning3hr"]."<spaneboltek style='margin-left:20px;'><orange >".$lightningstike2." Strikes <span style=font-size:10px;>Last 3 hours</orange></spaneboltek> </div> " ;  

?></span>


</div>
<div class="homeindoorfeels" style="margin-left:55px;margin-top:-10px;color:rgba(37, 38, 43, 1.000);font-size:13px">
<?php 
if ($windunit == 'mph'){echo "<spanfeelstitle><dark>Last Distance At:<orange> " .number_format($weatherflow['lightningdistance']*0.621371,1). "  </orange>mi";}

else  echo "<spanfeelstitle><dark>Last Distance At:<orange> " .$weatherflow['lightningdistance']. "  </orange>km";
?><br>

<?php 
//weather34 celsius
echo "<spanfeelstitle><dark>Last Detected: <orange> ".date('jS M H:i',$weatherflow['lastlightningtime'])." </orange> ";

?></div>