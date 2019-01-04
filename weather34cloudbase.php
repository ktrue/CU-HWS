<?php include_once('livedata.php');header('Content-type: text/html; charset=utf-8');?>




<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo $weather["time"];?></div>

<?php 
$weather["cloudbase1"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /4.4) ;
$weather["cloudbase2"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /4.4*0.3048) ;
$weather["cloudbase3"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /2.4444) ;
$weather["cloudbase4"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /2.4444*0.3048) ; 
$weather["cloudbase5"] = round(($weather["temp"] - $weather["dewpoint"] ) *412) ; 
$weather["cloudbase6"] = round(($weather["temp"] - $weather["dewpoint"] ) *412)*0.3048; 
$weather["cloudbaseformula"] = $weather["temp"] - $weather["dewpoint"]  *412*0.000868055446194 ; 
$weather["cloudbase"] = round(($weather["temp"] - $weather["dewpoint"] ) *412*0.000868055446194) ; 

//echo $weather["cloudbase3"];
?>


  <div class="weather34-solarrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 	 
	if ($weather["solar"]>1000){echo '<div class="bar bar-inner400" style="height: ';echo $weather["solar"]/14;}	
	else if ($weather["solar"]>=100){echo '<div class="bar bar-inner400" style="height: ';echo $weather["solar"]/12;}
	else if ($weather["solar"]>=1){echo '<div class="bar bar-inner400" style="height: ';echo $weather["solar"]/10;}		
	else if ($weather["solar"]>=0){echo '<div class="bar bar-inner1" style="height: ';echo $weather["solar"]+1;}	
	?>px;"></div></div></div>
    
 <div class="weather34solarrate"><span><?php echo "";
	if ($weather["solar"]==0)
	echo  "<greyuv>",number_format($weather["solar"] ,0), "</greyuv><solarwm2> W/m&sup2</solarwm2>";
	else if ($weather["solar"]>=1)
	echo  "<orangeuv>",$weather["solar"], "</orangeuv><solarwm2> W/m&sup2</solarwm2>";
?></span>
</div></div>

<div class="weather34-luxrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php 
	$lux = number_format($weather["solar"]/0.0084555,0, '.', '');
	if ($lux>=0){echo '<div class="bar bar-inner5" style="max-height:90px;height: ';	
	echo $lux/700+0.7;}?>px;">
    </div></div></div>
 <div class="weather34luxrate"><span><?php 
 $b="--";if($lux==$b){$lux = "N/A" ;}
echo "<luxrate> ",$lux,'<span> Lux</span> </luxrate>';  
?> </span></div>

<div class="weather34i-uvrate-bar">

    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php //cloudbase
	
	if ($units=="us"){echo '<div class="bar bar-inner" style="background:rgba(0, 154, 171, 0.6);max-height:90px;height: ';	
	echo $weather["cloudbase3"]/100*0.3048;}
	
	else if ($weather["cloudbase3"]){echo '<div class="bar bar-inner" style="background:rgba(0, 154, 171, 0.6);max-height:90px;height: ';	
	echo $weather["cloudbase3"]/100;}?>px;">
    </div></div></div>
 <div class="weather34iuvrate"><?php 
 
 if($units=="us"){ echo  "<oblue>", round($weather["cloudbase1"]*0.3048,0), "<br><span>Metres</span></purpleuv>";}
 
 else if ($weather["cloudbase3"]>0){echo  "<oblue>",$weather["cloudbase3"], "<br><span>Feet</span></purpleuv>";}
	
?>
 </span></div>  