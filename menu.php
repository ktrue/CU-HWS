<!-- begin menu.php 30-Mar-2019 -->
<header style="z-index:auto">
<h1><ogreyh1><?php echo $stationName;?>&nbsp; Home &#8226; Weather &#8226; Station </ogreyh1></h1>
<button class="button right"></button><div class='w34logo'>
<?php if($units!='us'){echo' <a  class="menucolor" href="./?units=us">'.$weatherunitfmenu.'</a>';}
else if($units!='metric'){echo' <a  class="menucolor" href="./?units=metric">'.$weatherunitcmenu.'</a>';}
else echo' <a class="menucolor" href="./?units=metric">Units</a>';?></div>
 <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
  <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
    <span class="weather34spinner weather34cross part-1"></span>
    <span class="weather34spinner weather34horizontal"></span>
    <span class="weather34spinner weather34cross part-2"></span>    
  </label>
<div id="weather34sidebarMenu">
<br /><br /><br />
<ul class="weather34sidebarMenuInner">
<li><a href="#">ADMIN</a></li>
<li><a href="easyweathersetup.php" target="_blank" title="WEATHERSTATION SETTINGS PAGE"><?php echo $weather34settingsicon; echo " ",$lang['Settings']; ?> </a></li> 
<li><a href="#">USER PREFERENCES</a></li>
<li><a href="index.php" title="WEATHERSTATION HOME PAGE"> <?php echo $weather34homeicon; echo ' Home'; ?> </a></li>  
<li><a href="<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>">
<?php echo $arrow34icon; if($theme=='dark'){echo' Light Theme';} else { echo' Dark Theme';}?></a></li>
<li><a href="#">UNITS</a></li>
<?php if($units!='us'){
	echo '<li> <a href="./?units=us"> '.$arrow34icon.'  Non Metric  '.$weatherunitfm.'</a></li>  ';}
	if($units!='metric'){
	echo '<li> <a href="./?units=metric"> '.$arrow34icon.' Metric '.$weatherunitcm.'</a></li>  ';}
	if($units!='uk'){
	echo '<li> <a href="./?units=uk">  '.$arrow34icon.' UK ( MPH)  '.$weatherunitcm.'</a></li> ';}
	if($units!='scandinavia'){
	echo '<li> <a href="./?units=scandinavia"> '.$arrow34icon.' M/S  '.$weatherunitcm.'</a></li>';}?>

<li><a href="#">EXTRAS</a></li>
<?php if($weatherflowoption=="yes"){ echo "<li><a href=https://staging.smartweather.weatherflow.com/map/".$lat."/".$lon."/".$weatherflowmapzoom." data-featherlight=iframe>". $locationinfo." Weatherflow Map </a></li>" ;}
?>
<li><!-- webcam --> <a href="webcam.php" data-featherlight="iframe" title="WEATHERSTATION WEBCAM"> <?php echo $webcam34icon;?> Web Cam </a></li>  
<li><!-- info --> <a href="bio.php" data-featherlight="iframe" title="Contact WEATHERSTATION Info"> <?php echo $svgmailmenu;?> Contact Info</a></li>  

<!-- languages --> 
<?php if($languages=="yes") echo '<li><a href="">
   
   '.$arrow34icon,' '.$lang["language"], '</a></li>','
     
	<li>
  <span class="languages34">
  <a href="index.php?lang=en"><img src="img/flags/en.svg"  alt="English" title="English" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=dk"><img src="img/flags/dk.svg"  alt="Danish" title="Danish" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=gr"><img src="img/flags/gr.svg"  alt="Greek" title="Greek" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=it"><img src="img/flags/it.svg"  alt="Italian" title="Italian" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  alt="French" title="French" width="25" height="25"></a>&nbsp;
  </span>
  <span class="languages34">    
  <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  alt="German" title="German" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  alt="Dutch" title="Dutch" width="25" height="25"></a>&nbsp; 
  <a href="index.php?lang=cat"><img src="img/flags/cat.svg" alt="Catalan" title="Catalan" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  alt="Spanish" title="Spanish" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=tr"><img src="img/flags/tr.svg"  alt="Turkish" title="Turkish" width="25" height="25"></a>&nbsp;
  </span>
  <span class="languages34">    
  <a href="index.php?lang=pl"><img src="img/flags/pl.svg"  alt="Polish" title="Polish" width="25" height="25"></a>&nbsp;
  <a href="index.php?lang=mi"><img src="img/flags/mi.svg"  alt="Maori" title="Maori" width="25" height="25"></a>&nbsp; 
  <a href="index.php?lang=fi"><img src="img/flags/fi.svg"  alt="Finnish" title="Finnish" width="25" height="25"></a>&nbsp; 
  <a href="index.php?lang=sw"><img src="img/flags/sw.svg"  alt="Swedish" title="Swedish" width="25" height="25"></a>&nbsp;
  </span></li>
';  ?>
<?php //do not remove this and if so no support is given and your domain will be blacklisted it is not much to ask //?>
     <li><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><?php echo $info;?> Designed by weather34.com</a>
     </li>
     <li><a href="https://github.com/ktrue/CU-HWS" title="Maintained on GitHub.com by Saratoga-weather.org"
     target="_blank"><?php echo $info;?> Download Cumulus HWS template</a>
     </li> 
 </ul>
 </div>
</header>
<!-- end menu.php -->  
