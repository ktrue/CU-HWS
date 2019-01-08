<header style="z-index:auto"><!---start menu.php 23-02-2018--><h1><ogreyh1><?php echo $stationName;?>&nbsp; Home &#8226; Weather &#8226; Station </ogreyh1></h1>
<button class="button right"></button><div class='w34logo'><?php if($units!='us'){echo' <a  class="menucolor" href="./?units=us">'.$weatherunitfmenu.'</a>';}
else if($units!='metric'){echo' <a  class="menucolor" href="./?units=metric">'.$weatherunitcmenu.'</a>';}
else echo' <a class="menucolor" href="./?units=metric">Units</a>';?></div>
 <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
  <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
    <div class="weather34spinner weather34cross part-1"></div>
    <div class="weather34spinner weather34horizontal"></div>
    <div class="weather34spinner weather34cross part-2"></div>    
  </label>
 <div id="weather34sidebarMenu">
<ul class="weather34sidebarMenuInner">
<br /><br /><br />
<li><a href="#">ADMIN</a></li>
<li><a href="easyweathersetup.php" target="_blank" title="WEATHERSTATION SETTINGS PAGE"><?php echo $weather34settingsicon; echo " ",$lang['Settings']; ?> </a></li> 
<p>
<li><a href="#">USER PREFERENCES</a></li>
<li><a href="index.php" title="WEATHERSTATION HOME PAGE"> <?php echo $weather34homeicon; echo ' Home'; ?> </a></li>  
<li><a href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>><?php echo $arrow34icon;?><?php if($theme=='dark'){echo' Light Theme';}else{echo' Dark Theme';}?></a></li>
<p>
<li><a href="#">UNITS</a></li>
<?php if($units!='us'){
	echo '<li> <a  href="./?units=us"> '.$arrow34icon.'  Non Metric  '.$weatherunitfm.'</a><br />  ';}if($units!='metric'){
	echo '<li> <a  href="./?units=metric"> '.$arrow34icon.' Metric '.$weatherunitcm.'</a><br />  ';}if($units!='uk'){
	echo '<li> <a  href="./?units=uk">  '.$arrow34icon.' UK ( MPH)  '.$weatherunitcm.'</a><br /> ';}if($units!='scandinavia'){
	echo '<li> <a  href="./?units=scandinavia"> '.$arrow34icon.' M/S  '.$weatherunitcm.'</a>';}?>

<li><a href="#">EXTRAS</a></li>
<li>
<?php if($weatherflowoption=="yes"){ echo "<a href=https://staging.smartweather.weatherflow.com/map/".$lat."/".$lon."/".$weatherflowmapzoom." data-featherlight=iframe>". $locationinfo." Weatherflow Map </a></li>" ;}
else echo "";?>
<li><!---webcam---> <a href="cam.php" data-featherlight="iframe" title="WEATHERSTATION WEBCAM"> <?php echo $webcam34icon;?> Web Cam </a></li>  
<li><!--info---> <a href="bio.php" data-featherlight="iframe" title="Contact WEATHERSTATION Info"> <?php echo $svgmailmenu;?> Contact Info</a></li>  

<!---languages---> 
  <br>   <?php if($languages=="yes") echo '<li><a href="">
   
   '.$arrow34icon,' '.$lang["language"], '</a></li>','
     <br>
  <div class="languages34">
  <a href="index.php?lang=en"><img src="img/flags/en.svg"  title="English" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=dk"><img src="img/flags/dk.svg"  title="Danish" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=gr"><img src="img/flags/gr.svg"  title="Greek" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=it"><img src="img/flags/it.svg"  title="Italian" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  title="French" width="25px" height="25px"></a>&nbsp;
  </div>

  <div class="languages34">    
  <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  title="German" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  title="Dutch" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=cat"><img src="img/flags/cat.svg" title="Catalan" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  title="Spanish" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=tr"><img src="img/flags/tr.svg"  title="Turkish" width="25px" height="25px"></a>&nbsp;
  <br>
   <div class="languages34">    
  <a href="index.php?lang=pl"><img src="img/flags/pl.svg"  title="Polish" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=mi"><img src="img/flags/mi.svg"  title="Moari" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=sw"><img src="img/flags/sw.svg"  title="Swedish" width="25px" height="25px"></a>&nbsp;
  <br>
     '?>
     <?php //do not remove this and if so no support is given and your domain will be blacklisted it is not much to ask //?>
     <li><a href="https://weather34.com/homeweatherstation/"title="https://weather34.com/homeweatherstation/"target="_blank"><?php echo $info;?> Designed by weather34.com</a></li>
 </div>

</div></div></div></div></div></div></div></div></div></div></header>  
