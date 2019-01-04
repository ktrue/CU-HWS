<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 											   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');
include('common.php');
header('Content-type: text/html; charset=utf-8');?>
<?php 
// homeweatherstation sun & moon information kind of a unique approach  // updated september 4th 2016 //
//homeweatherstation calculate sunrise/set times and differences
		//date_default_timezone_set($TZ);
        $result = date_sun_info( time(), $lat, $lon );	
		// homeweatherstation sun hours graphic beta August 8th 2016//
		$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat,$lon, $rise_zenith, $UTC);
		$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);
		$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, $rise_zenith, $UTC);
		$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);		
		$suns2 =date( 'G.i', $result['sunset'] );
		$sunr2 =date( 'G.i', $result['sunrise']  );
		$sunrisehour =date( 'G', $result['sunrise'] );
		$sunsethour =date( 'G', $result['sunset'] );
		$now  =date('G.i');
		//$diff3 = $now - $sunr ;	// alternative hours from		
		$diff4 = $suns2 - $sunr2 ; // hours of daylight
		//$diff5 = $suns - $now ; // alternative hours till				    	
        // homeweatherstation to sunset	(1)
        $startdate1=$now; 
        $enddate1=$suns; 
        $diff=strtotime($enddate1)-strtotime($startdate1); 
        $temp=$diff/86400; 
        $days1=floor($temp);  $temp=24*($temp-$days1); 
        $hours1=floor($temp);  $temp=60*($temp-$hours1); 
        $minutes1=floor($temp);  $temp=60*($temp-$minutes1);
        $seconds1=floor($temp); 		
		 // homeweatherstation from sunrise	(2)
        $startdate2=$sunr; 
        $enddate2=$now; 
        $diff=strtotime($enddate2)-strtotime($startdate2); 
        $temp=$diff/86400; 
        $days2=floor($temp);  $temp=24*($temp-$days2); 
        $hours2=floor($temp);  $temp=60*($temp-$hours2); 
        $minutes2=floor($temp);  $temp=60*($temp-$minutes2);
        $seconds2=floor($temp); 		
		 // homeweatherstation to sunrise after (00:00) midnight (3)	
        $startdate3=$now; 
        $enddate3=$sunr; 
        $diff=strtotime($enddate3)-strtotime($startdate3); 
        $temp=$diff/86400; 
        $days3=floor($temp);  $temp=24*($temp-$days3); 
        $hours3=floor($temp);  $temp=60*($temp-$hours3); 
        $minutes3=floor($temp);  $temp=60*($temp-$minutes3);
        $seconds3=floor($temp); 		
		 // homeweatherstation daylight (4)	
        $startdate4=$sunr; 
        $enddate4=$suns; 
        $diff=strtotime($enddate4)-strtotime($startdate4); 
        $temp=$diff/86400; 
        $days4=floor($temp);  $temp=24*($temp-$days4); 
        $hours4=floor($temp);  $temp=60*($temp-$hours4); 
        $minutes4=floor($temp);  $temp=60*($temp-$minutes4);
		$seconds4=floor($temp); 		
		// homeweatherstation daylight (5)	
        $startdate5=$suns; 
        $enddate5=$sunr; 
        $diff=strtotime($enddate5)-strtotime($startdate5); 
        $temp=$diff/86400; 
        $days5=floor($temp);  $temp=24*($temp-$days5); 
        $hours5=floor($temp);  $temp=60*($temp-$hours5); 
        $minutes5=floor($temp);  $temp=60*($temp-$minutes5);
		$seconds5=floor($temp);		
		// homeweatherstation daylight (6)	
        $startdate6=$now; 
        $enddate6=$sunr; 
        $diff=strtotime($enddate6)-strtotime($startdate6); 
        $temp=$diff/86400; 
        $days6=floor($temp);  $temp=24*($temp-$days6); 
        $hours6=floor($temp);  $temp=60*($temp-$hours6); 
        $minutes6=floor($temp);  $temp=60*($temp-$minutes6);
		$seconds6=floor($temp); 		
		// includes conversions added 21st Aug 2016
        $minutesdarkness = sprintf("%02d", $minutes5);
        $minutesdaylight = sprintf("%02d",$minutes4);
        $minutesdayleft = sprintf("%02d",$minutes1);
        $minutesdarkleft = sprintf("%02d",$minutes3);
        $minutesagosunrise = sprintf("%02d",$minutes2);			
		// drive the pie with daylight hours 6th september 2016	
        $dayl1 =$hours4 ;
        $dayl2 =$minutesdaylight;
        $dayl3 = '.' ;
        $daylighthourstoday= $dayl1.$dayl3 .$dayl2 ;
        // drive the pie with darkness hours 6th september 2016			
        $dark1 =$hours5 ;
        $dark2 =$minutesdarkness;
        $dark3 = '.' ;
        $darkhourstonight= $dark1.$dark3 .$dark2 ; 				
		// end homeweatherstation calculations		 
?>
<?php 
$meteor_default="No Meteor Showers";
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 1),"event_title"=>"Quadrantids","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Quadrantids peak","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5),"event_title"=>"Quadrantids","event_end"=>mktime(23, 59, 59, 1, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 9),"event_title"=>"Approaching Lyrids","event_end"=>mktime(23, 59, 59, 4, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 21),"event_title"=>"Lyrids peak","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 5, 5),"event_title"=>"ETA Aquarids","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 20),"event_title"=>"Approaching Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 27),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 28),"event_title"=>"Delta Aquarids peak","event_end"=>mktime(23, 59, 59, 7, 29),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 1),"event_title"=>"Perseids Aug 1st-24th","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Perseids peak","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 14),"event_title"=>"Perseids passed","event_end"=>mktime(23, 59, 59, 8, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 7),"event_title"=>"Draconids peak","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 20),"event_title"=>"Orionids peak","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 4),"event_title"=>"South Taurids peak","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 11),"event_title"=>"North Taurids peak","event_end"=>mktime(23, 59, 59, 11, 11),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17),"event_title"=>"Leonids peak","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13),"event_title"=>"Geminids peak","event_end"=>mktime(23, 59, 59, 12, 14),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 17),"event_title"=>"Ursids 17th-25th","event_end"=>mktime(23, 59, 59, 12, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 21),"event_title"=>"Ursids peak","event_end"=>mktime(23, 59, 59, 12, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 23),"event_title"=>"Ursids 17th-25th","event_end"=>mktime(23, 59, 59, 12, 25),);
$meteorNow=time();
$meteorOP=false;
foreach ($meteor_events as $meteor_check) {
    if ($meteor_check["event_start"]<=$meteorNow&&$meteorNow<=$meteor_check["event_end"]) {
        $meteorOP=true;
        $meteor_default=$meteor_check["event_title"];
    }
};?>

<div class="moonphasemoduleposition">
<div class="moonrise1">
<svg id="i-chevron-top" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff9350" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
    <path d="M30 20 L16 8 2 20" />
</svg>
  <?php echo $lang['Moonrise'];?> <div class="nextmoonrise"><strongnumbers>
<?php  echo  date($timeFormatShort,$MoonRise ),"\n";?></strongnumbers></div> 
</div>
 <div class="mooncircle1"><div id='mooncircleinner'></div><luminance1>
 <?php echo $lang['Luminance'];?></luminance1>
 
 
<?php  // moon phase for homeweather station //
$date="";$time="";$tzone="$TZ </span>" ;do_phase($date,$time,$tzone);
function do_phase($date,$time,$tzone){
$moondata=phase(strtotime($date.' '.$time.' '.$tzone));
$MoonIllum=$moondata[1];$MoonIllum=round($MoonIllum,2);$MoonIllum*=100;
if($MoonIllum==0){$phase="New Moon";}
if($MoonIllum==100){$phase="Full Moon";}
print"$MoonIllum%\n";}?>

<div class="moonphase">
<?php // homeweatherstation create an instance of the age of moon
$moon = new MoonPhase();
$moonage =round($moon->age(),2);
echo "";
$day = date('l jS F Y');
if($day===date("l jS F Y",strtotime('2018-1-31'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2018-2-15'))){echo 'Partial Solar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2018-7-13'))){echo 'Partial Solar <oorange>Eclipse</oorange>>';}
else if($day===date("l jS F Y",strtotime('2018-7-27'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2018-7-28'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2018-8-11'))){echo 'Partial Solar <oorange>Eclipse</oorange>';}

else if($day===date("l jS F Y",strtotime('2019-1-5'))){echo 'Solar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-1-6'))){echo 'Solar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-1-20'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-1-21'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-7-2'))){echo 'Solar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-7-16'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-7-17'))){echo 'Lunar <oorange>Eclipse</oorange>';}
else if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Solar <oorange>Eclipse</oorange>';}

else if($moonage<1.84566) echo $lang['Newmoon'];
else if($moonage<5.53699)echo $lang['Waxingcrescent'];
else if($moonage<9.22831)echo $lang['Firstquarter'];
else if($moonage<13.91963) echo $lang['Waxinggibbous'];
else if($moonage<16.61096)echo $lang['Fullmoon'];
else if($moonage<20.302228)echo $lang['Waninggibbous'];
else if($moonage<23.99361)echo $lang['Lastquarter'];
else if($moonage<28.68493)echo $lang['Waningcrescent'];
else echo $lang['Newmoon'];
?></span>
</div>



<div class "moonposition" style="font-size:16px;line-height:20px;padding-top:2px;-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);">
<?php echo $moon = moon_posit($months, $days, $years);?>
</span></div>
</div>


<div class="fullmoon1">
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#aaa" stroke="#aaa" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg>
<?php echo $lang['Nextfullmoon'];?>	<br /> <div class="nextfullmoon"><strongnumbers>
<?php  // homeweatherstation fullmoon info output 18th Aug
$now1 = time();
$moon1 = new MoonPhase();
echo "";
if ($now1 < $moon1->full_moon()) {echo date($dateFormat, $moon1->full_moon() );}
//else {echo date($dateFormat, $moon1->next_full_moon() );}
else echo date( $dateFormat, $moon1->next_full_moon() );
?></strongnumbers></div>

 </span>
</div>


<div class="newmoon1">
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /> <path d="M6 6 L26 26" /></svg>
<?php echo $lang['Nextnewmoon'];?> <div class="nextnewmoon"><strongnumbers>
<?php // homeweatherstation create an instance of the next new moon
$moon = new MoonPhase();
$nextnewmoon = date( $dateFormat, $moon->next_new_moon() );
//$nextnewmoon = date( 'jS-M', $moon->next_new_moon() );
echo "$nextnewmoon";
?></strongnumbers></div>

 </span>
</div>
<div class="moonset1">
<svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#f26c4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
    <path d="M30 12 L16 24 2 12" /></svg>
<?php echo $lang['Moonset']?><div class="nextmoonset"><strongnumbers>
<?php echo  date($timeFormatShort,$MoonSet ),"\n";?></strongnumbers></span> 

</div></div>
<div class="meteorshower"><svg xmlns='http://www.w3.org/2000/svg' width='12px' height='12px' viewBox='0 0 16 16'><path fill='currentcolor' d='M0 0l14.527 13.615s.274.382-.081.764c-.355.382-.82.055-.82.055L0 0zm4.315 1.364l11.277 10.368s.274.382-.081.764c-.355.382-.82.055-.82.055L4.315 1.364zm-3.032 2.92l11.278 10.368s.273.382-.082.764c-.355.382-.819.054-.819.054L1.283 4.284zm6.679-1.747l7.88 7.244s.19.267-.058.534-.572.038-.572.038l-7.25-7.816zm-5.68 5.13l7.88 7.244s.19.266-.058.533-.572.038-.572.038l-7.25-7.815zm9.406-3.438l3.597 3.285s.094.125-.029.25c-.122.125-.283.018-.283.018L11.688 4.23zm-7.592 7.04l3.597 3.285s.095.125-.028.25-.283.018-.283.018l-3.286-3.553z'/></svg>
<?php // homeweather station simple meteor shower output of major shower events  august 18 2016 beetlejuice //
echo $meteor_default;?>
</div>
