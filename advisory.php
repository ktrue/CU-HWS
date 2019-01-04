 <?php include('livedata.php');date_default_timezone_set($TZ);?><div class="eqcirclehomeregional"><div class="eqtexthomeregional">
<?php     
//WEATHER34 lightning
if ($weather["lightningtimeago"]>1 && $weather["lightningtimeago"]<0){echo "<div class=\"alertcircle\"><orange>", number_format($weather["lightningkm"],0) ,"</orange><suplight>km</suplight>"; 
 echo "<spanelightning> Lightning Strike Nearby <br><span style='margin-top:-25px;display:block;font-size:11px;'>Possible Storm Approaching</span>
  <div class='orangealerticon'> ".$newalert." </spanelightning></div></div>" ;}     
  ///WEATHER34 freezing //celsius
 else if ($weather["temp_units"]=='C' && $weather["temp"]<=0 && $weather["dewpoint"]<=0){echo "<div class=\"alertcircle\"><oblue>", number_format($weather["dewpoint"],1),"<smallicon><oblue> ", $weatherunitc ,"</oblue></smallicon>";  
 echo "<spanefreezing> Caution <span>Dewpoint</<spanefreezing><heatindex>Below Freezing</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 

  else if ($weather["temp_units"]=='F' && $weather["temp"]<=32 && $weather["dewpoint"]<=32){echo "<div class=\"alertcircle\"><oblue>", number_format($weather["dewpoint"],1),"<smallicon><oblue> ", $weatherunitf ,"</oblue></smallicon>";  
 echo "<spanefreezing> Caution <span>Dewpoint</<spanefreezing><heatindex>Below Freezing</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 

 ///WEATHER34 fire risk//celsius
 else if ($weather["temp_units"]=='C' && ($weather["humidity"]<=40) && ($weather["temp"]>=27)){echo "<div class=\"alertcircle\"><orange>", number_format($weather["temp"],1),"</orange><smallicon><orange> ", $weatherunitc ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Fire Risk</<spanelightning><heatindex>Possible</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 
//WEATHER34 fire risk // fahrenheit
 else if ($weather["temp_units"]=='F' && ($weather["humidity"]<=40) && ($weather["temp"]>=80.6)){echo "<div class=\"alertcircle\"><orange>", number_format($weather["temp"],1),"</orange><smallicon><orange> ", $weatherunitf ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Fire Risk</<spanelightning><heatindex>Possible</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;}   
  
 ///WEATHER34 aurora
 else if ($kp>=5){echo "<div class=\"alertcircle\"><orange>", number_format($kp,1) ,"</orange><sup><span style='font-size:10px;'> kp</sup>"; 
 echo "<spanelightning><darkgrey> Aurora</darkgrey> <orange>Viewing Possible</orange>
 <span style='margin-top:-25px;display:block;font-size:11px;'> <orange>144 MHz</orange> <darkgrey>Radio Aurora Possible</spanelightning> </span> </div> " ;}
  //weather34 darksky alerts rain,snow  
  else if ($darkskydayIcon=='snow')
  {echo '<div class="homeweatheralert"><noalert><talert>Expect <blue>Snow Showers</blue><br> This Week <div class="orangealerticon1">&nbsp;&nbsp; '.$snowalert.' </spanelightning></div></div></div>';}   
  else if ($darkskydayIcon=='rain'){echo '<div class="homeweatheralert"><noalert><talert>Expect <blue>Rain Showers</blue><br> This Week <div class="orangealerticon1">&nbsp;&nbsp; '.$rainalert.' </spanelightning></div></div></div>';} 
 //WEATHER34 solar eclipse events and no alerts
 else {echo '<div class="homeweatheralert" style="margin-left:25px;"><noalert>', $eclipse_default.'';} ?></noalert></div></div>