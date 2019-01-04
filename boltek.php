<?php include('common.php');include('shared.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);$software    = 'Meteobridge <span>Hardware</span>';
$designedfor    = '<br>For Meteobridge';
//weather34 simple boltek and nextstorm reader
$bolteklivedata= $boltekfile;
	$file_live = file_get_contents($bolteklivedata);
	$boltek = explode( ',',$file_live);
	$boltek["strikestoday"]   = $boltek[15]; //overall total strikes since midnight 
	$boltek["closestrikes"]   = $boltek[26]; // close current strikes
	$boltek["closestrikessincemidnight"]   = $boltek[17]; //close since midnight
	$boltek["diststrikes"]   = $boltek[7];	//close by distance km or mi
	$boltek["strikesbearing"]   = $boltek[6];	
	$boltek["strikesbearing1"]   = $boltek[6];//bearing	
	$boltek["laststrike"] = $boltek[6]; // last strike time 
	$boltek["laststrikedistance"] = round($boltek[7],0); // last strike distance 
	$boltek["laststrikedistanceclose"] = round($boltek[7],0); //close by distance	
	$boltek["strikedistanceunit"] = $boltek[52]; //default chosen unit 0==km or 1==mi
	//lets output the units to miles or kilometers
	if ($boltek["strikedistanceunit"]=='1'){$boltek["strikedistanceunit"]='mi';}
	if ($boltek["strikedistanceunit"]=='0'){$boltek["strikedistanceunit"]='km';}
	
	//direction	
	if ($boltek["strikesbearing1"]>=0 && $boltek["strikesbearing1"]<35){$boltek["strikesbearing1"]='North';}
	if ($boltek["strikesbearing1"]>=35 && $boltek["strikesbearing1"]<85){$boltek["strikesbearing1"]='NE';}
	if ($boltek["strikesbearing1"]>=85 && $boltek["strikesbearing1"]<120){$boltek["strikesbearing1"]='East';}
	if ($boltek["strikesbearing1"]>=120 && $boltek["strikesbearing1"]<170){$boltek["strikesbearing1"]='SE';}
	if ($boltek["strikesbearing1"]>=170 && $boltek["strikesbearing1"]<210){$boltek["strikesbearing1"]='South';}
	if ($boltek["strikesbearing1"]>=210 && $boltek["strikesbearing1"]<260){$boltek["strikesbearing1"]='SW';}
	if ($boltek["strikesbearing1"]>=260 && $boltek["strikesbearing1"]<300){$boltek["strikesbearing1"]='West';}
	if ($boltek["strikesbearing1"]>=300 && $boltek["strikesbearing1"]<350){$boltek["strikesbearing1"]='NW';}
	if ($boltek["strikesbearing1"]>=350 && $boltek["strikesbearing1"]<361){$boltek["strikesbearing1"]='North';}
	
?>
<body>

<?php 
 //weather34 temperture indoor celsius 
 if ($boltek["closestrikes"]>=1){
 echo "<div class=\"circleindoortemp\"><orange>", $boltek["closestrikes"] ;
 echo "  <spaneboltek><orange>&nbsp;  ".$lightningstike2."</orange>   Nearby</spaneboltek> </div> " ; } 
 //weather34 temperture indoor celsius
 else echo "<div class=\"circleindoortemp\"><orange>" .$boltek["closestrikessincemidnight"]."  <spaneboltek><orange>&nbsp; ".$lightningstike2."</orange> Today</spaneboltek> </div> " ;  
?>


</div>
<div class="homeindoorhum">
<?php 
if ($boltek["closestrikes"]>=1){
echo "<spanboltekdist>Distance:<orange> " .round($boltek["laststrikedistanceclose"],0)." </orange> ".$boltek["strikedistanceunit"]."</spanboltekdist>";
}
else echo "<spanboltekdist>Detected At:<orange> " .round($boltek["laststrikedistance"],0)."  </orange>".$boltek["strikedistanceunit"]."</spanboltekdist>";
?></div>

<div class="homeindoorfeels">
<?php 
//weather34 celsius
echo "<spanbolteklast>Direction: <orange>" .$boltek["strikesbearing"]." &deg;</orange> " .$boltek["strikesbearing1"]."</spanbolteklast>";

?></div>