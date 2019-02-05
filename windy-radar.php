<?php 
  include('livedata.php');
	include('common.php');
  include('settings1.php');
  error_reporting(0);
  header('Content-type: text/html;charset=UTF8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
<style>body {
    background: rgba(30, 31, 35, 1.000);
}

.weather34darkbrowser {
    position: relative;
    background: 0;
    width: 103.3%;
    max-height: 30px;
    margin: auto;
    margin-top: -15px;
    margin-left: -20px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    padding-top: 45px;
    background-image: radial-gradient(circle, #EB7061 6px, transparent 8px), radial-gradient(circle, #F5D160 6px, transparent 8px), radial-gradient(circle, #81D982 6px, transparent 8px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), linear-gradient(to bottom, rgba(59, 60, 63, 0.4) 40px, transparent 0);
    background-position: left top, left top, left top, right top, right top, right top, 0 0;
    background-size: 50px 45px, 90px 45px, 130px 45px, 50px 30px, 50px 45px, 50px 60px, 100%;
    background-repeat: no-repeat, no-repeat
}

.weather34darkbrowser[url]:after {
    content: attr(url);
    color: #aaa;
    font-size: 14px;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    padding: 2px 15px;
    margin: 11px 50px 0 90px;
    border-radius: 3px;
    background: rgba(97, 106, 114, 0.3);
    height: 20px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif
}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="windy.com Radar for <?php echo $stationlocation;?>"></div>     
<iframe width="790" height="370" src="https://embed.windy.com/embed2.html?lat=<?php echo $lat;?>&amp;lon=<?php echo $lon;?>&amp;zoom=7&amp;level=surface&amp;overlay=radar&amp;menu=&amp;message=&amp;marker=&amp;calendar=&amp;pressure=&amp;type=map&amp;location=coordinates&amp;detail=&amp;detailLat=<?php echo $lat;?>&amp;detailLon=<?php echo $lon; ?>&amp;metricWind=<?php echo $windunit; ?>&amp;metricTemp=%C2%B0<?php echo $tempunit;?>&amp;radarRange=-1" frameborder="0" scrolling="no"></iframe>
<div class="weather34browser-footer">
<span style="position:absolute;color:#aaa;font-size:10px;font-family:arial;padding-top:5px;margin-left:30px;display:block;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
Radar/Map provided by Windy.com</span>
<div class="weather34browser-footerlogo"><a href="https://github.com/ktrue/CU-HWS" title="github.com/ktrue/CU-HWS" target="_blank"><img src="img/weatherlogo34.svg" width="35"</img></a></div>
</div>

</body>
</html>