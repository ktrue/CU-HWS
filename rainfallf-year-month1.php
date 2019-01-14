<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?>
<div class="hometemperatureindoor">
<?php 


 //rain year
 
 if ($weather["temp_units"]=='C' && $weather["rain_year"]>=1000){echo "<div class=\"circlerainyear\"><rainc>", round($weather["rain_year"],0) ;
 echo " </rainc>
 <spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".date('Y')."
 </spanwindtitle>

 
 </div> " ;} 
 
 
 
 else if ($weather["temp_units"]=='C' && $weather["rain_year"]>=0){echo "<div class=\"circlerainyear\"><rainc>", number_format($weather["rain_year"],1) ;
 echo " </rainc>
 <spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".date('Y')."
 </spanwindtitle>

 
 </div> " ;} 
 
 
 //fahrenheit
 else if ( $weather["rain_year"]>=1000){echo "<div class=\"circlerainyear\"><rainf>", round($weather["rain_year"],0) ;
 echo " </rainf>
 <spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".date('Y')."
 </spanwindtitle>

 
 </div> " ;} 
 
 
 else if ( $weather["rain_year"]>=0){echo "<div class=\"circlerainyear\"><rainf>", number_format($weather["rain_year"],1) ;
 echo " </rainf>
 <spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".date('Y')."
 </spanwindtitle>

 
 </div> " ;} 
 
?>



<?php 


 //rain month
 
  if ($weather["temp_units"]=='C' && $weather["rain_month"]>=100){echo "<div class=\"circlerainmonth\"><rainc>", number_format((float)$weather["rain_month"],1) ;
 echo " </rainc>
<spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".strftime(" %b")."
 </spanwindtitle>
 </div> " ;} 
 
 
 else if ($weather["temp_units"]=='C' && $weather["rain_month"]>=0){echo "<div class=\"circlerainmonth\"><rainc>", number_format($weather["rain_month"],1) ;
 echo " </rainc>
<spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".strftime(" %b")."
 </spanwindtitle>
 </div> " ;} 
 
 
 //fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["rain_month"]>=0){echo "<div class=\"circlerainmonth\"><rainf>", number_format($weather["rain_month"],1) ;
 echo "</rainf> 
 <spanmaxwind>
". $weather["rain_units"]."
</spanmaxwind>
 <spanwindtitle>
 ".strftime(" %b")."
 </spanwindtitle>
 </div> " ;} 
 
?>
</div>






