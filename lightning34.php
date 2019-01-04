<?php include('livedata.php');date_default_timezone_set($TZ);?>
<div class="updatedtime"><span><?php if(file_exists($livedata2)&&time()- filemtime($livedata2)>300)echo $offline. '<offline> Offline </offline>';else echo $online; echo " ",$weather["time"];?></div>
<?php
//weather34 timeago lightning
$lightningseconds = $weather["lightningtimeago"];
function convert($lightningseconds){
$weather34timeago = "";
$days = intval(intval($lightningseconds) / (3600*24));
$hours = (intval($lightningseconds) / 3600) % 24;
$minutes = (intval($lightningseconds) / 60) % 60;
$seconds = (intval($lightningseconds)) % 60;
if($days> 1){$weather34timeago .= "$days Days ";}
else {if($days< 1){$weather34timeago .= "$days Day ";}
if($hours > 0){$weather34timeago .= "$hours hr ";}
if($minutes > 0){$weather34timeago .= "$minutes min ";}}
//if ($seconds > 0){$weather34timeago .= "$seconds seconds";}
return $weather34timeago;
}

?>
<body>
<?php //weatherflow air lightning sensor current day
$weather["lightningmax"]	=str_replace(',',' ',$weather["lightningmax"]);
echo "<div class=\"circlewflightningtoday1\"><div class='wftemp1'>Today</div><lorange1>", $weather["lightningmax"] ;echo "</div> " ; ?>
</div>
<div class="lightningstrikes1"><?php  echo "Strikes"?></div>
<div class="homeindoorfeels1">
Strikes Recorded
<?php //weatherflow air lightning month current
echo "<lightningannualx>".date('M Y').":<lorange> " .str_replace(",","",$weather["lightningmonth"])." </lorange></lightningannual>";?>

<?php  //weatherflow air lightning year current
echo "<lightningannualx1>".date('Y').":<lorange> " .str_replace(",","",$weather["lightningyear"])." </lorange>";?>

<?php 
if ($lightningseconds <61 ){ echo "<timeago>Last Strike Detected<br> <agolightning>Now ";}
else if ($lightningseconds >=61 ) echo "<timeago>Last Strike Detected<br> <agolightning>", convert($lightningseconds)," ago";?>

</div>