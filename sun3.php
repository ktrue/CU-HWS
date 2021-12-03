<?php
$scrpt_vrsn_dt  = 'sun3.php|00|2019-01-24|';  # first version
# 
# weather34 template for use with Cumulus->realtime.txt
# original version by BRIAN UNDERDOWN 2015-2016-2017-2018
# updated as sun_block.php by Wim van der Kuil http://wd34.weather-template.com/ for pwsWD 10-Jan-2019
# back-adapted for Cumulus CU-HWS as sun3.php by Ken True - 13-Jan-2019
# 24-Jan-2019 - fixed sun position filled circle for all browsers - ktrue
# 
if (isset($_REQUEST['sce']) && strtolower($_REQUEST['sce']) == 'view' ) {
   $filenameReal = __FILE__;    #               display source of script if requested so
   $download_size = filesize($filenameReal);
   header('Pragma: public');
   header('Cache-Control: private');
   header('Cache-Control: no-cache, must-revalidate');
   header("Content-type: text/plain");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header('Connection: close');
   readfile($filenameReal);
   exit;}
#
if (!isset ($stck_lst)) {$stck_lst = '';}
$stck_lst      .= basename(__FILE__).' ('.__LINE__.') version =>'.$scrpt_vrsn_dt.PHP_EOL;       // save list of loaded scrips;
#
$scrpt          = 'livedata.php';  
$stck_lst      .= basename(__FILE__).' ('.__LINE__.') include_once =>'.$scrpt.PHP_EOL;
include_once $scrpt; 

$scrpt          = 'common.php'; 
$stck_lst      .= basename(__FILE__).' ('.__LINE__.') include_once =>'.$scrpt.PHP_EOL;
include_once $scrpt; 

if(!function_exists('lang')) {
	// shim function if not running in template set
	function lang($input) { 
		global $lang;
		if(isset($lang[$input])){
			 return ($lang[$input]); 
		} else {
			return($input);
		}
	}
}
# icons from Wim's w34_shared.php for use in this script
$sunricon ='<svg id="weather34 sunrise" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" ><g>
<path fill="#ff8841" d="M32,2.8c-16,0-29.1,13-29.2,29h58.4C61.1,15.8,48,2.8,32,2.8z"/><path class="st1" d="M32,2C15.5,2,2,15.5,2,32s13.5,30,30,30c16.5,0,30-13.5,30-30S48.5,2,32,2z M61.6,32
c0,16.4-13.3,29.6-29.6,29.6C15.6,61.6,2.4,48.4,2.4,32c0-0.1,0-0.2,0-0.2C2.5,15.5,15.7,2.4,32,2.4c16.3,0,29.5,13.1,29.6,29.4 C61.6,31.8,61.6,31.9,61.6,32z"/></g></svg>';
$sunsicon ='<svg id="weather34 sunset" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" ><g>	
<path fill="#d86858" d="M32,61.2c16.1,0,29.2-13.1,29.2-29.2c0-0.1,0-0.2,0-0.2H2.8c0,0.1,0,0.2,0,0.2C2.8,48.1,15.9,61.2,32,61.2z"/>	<path class="st1" d="M32,2C15.5,2,2,15.5,2,32s13.5,30,30,30c16.5,0,30-13.5,30-30S48.5,2,32,2z M61.6,32
c0,16.4-13.3,29.6-29.6,29.6C15.6,61.6,2.4,48.4,2.4,32c0-0.1,0-0.2,0-0.2C2.5,15.5,15.7,2.4,32,2.4c16.3,0,29.5,13.1,29.6,29.4	C61.6,31.8,61.6,31.9,61.6,32z"/></g></svg>';
$sunlight="<svg version='1.1' id='weather34 daylight' x='0px' y='0px' width='12' height='12' fill='#ff8841' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'>
<g><path  fill='#ff8841' d='M270.3,500c0,126.9,102.8,229.7,229.7,229.7S729.7,626.9,729.7,500c0-126.9-102.8-229.7-229.7-229.7S270.3,373.1,270.3,500z'/><path d='M500,193.8c16.8,0,30.6-13.8,30.6-30.6V40.6c0-16.8-13.8-30.6-30.6-30.6c-16.8,0-30.6,13.8-30.6,30.6v122.5C469.4,180,483.2,193.8,500,193.8z'/><path d='M500,806.3c-16.8,0-30.6,13.8-30.6,30.6v122.5c0,16.8,13.8,30.6,30.6,30.6c16.8,0,30.6-13.8,30.6-30.6V836.9C530.6,820,516.8,806.3,500,806.3z'/><path d='M959.4,469.4H836.9c-16.8,0-30.6,13.8-30.6,30.6c0,16.8,13.8,30.6,30.6,30.6h122.5c16.8,0,30.6-13.8,30.6-30.6C990,483.2,976.2,469.4,959.4,469.4z'/><path d='M193.8,500c0-16.8-13.8-30.6-30.6-30.6H40.6C23.8,469.4,10,483.2,10,500c0,16.8,13.8,30.6,30.6,30.6h122.5C180,530.6,193.8,516.8,193.8,500z'/><path d='M239.7,284.1c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2c12.3-12.3,12.3-30.6,0-42.9l-87.3-87.3c-12.3-12.3-30.6-12.3-42.9,0s-12.3,30.6,0,42.9L239.7,284.1z'/><path d='M760.3,715.9c-12.3-12.3-30.6-12.3-42.9,0s-12.3,30.6,0,42.9l87.3,87.3c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2c12.3-12.3,12.3-30.6,0-42.9L760.3,715.9z'/><path d='M738.9,291.8c7.7,0,15.3-3.1,21.4-9.2l87.3-87.3c12.3-12.3,12.3-30.6,0-42.9s-30.6-12.3-42.9,0l-88.8,87.3c-12.3,12.3-12.3,30.6,0,42.9C722,288.7,729.7,291.8,738.9,291.8z'/><path d='M239.7,715.9l-87.3,87.3c-12.3,12.3-12.3,30.6,0,42.9c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2l87.3-87.3c12.3-12.3,12.3-30.6,0-42.9C271.8,705.2,251.9,705.2,239.7,715.9z'/></g>
</svg>";
$sundown='<svg x="0px" y="0px" fill="#d86858" width="12.5px" height="12.5px" viewBox="0 0 363.5 363.5" style="enable-background:new 0 0 363.5 363.5;">
<g>	<g>	<path d="M181.7,86.05c5.701,0,9.6-3.8,9.6-9.6v-38.2c0-5.7-3.8-9.6-9.6-9.6c-5.8,0-9.6,3.8-9.6,9.6v38.2 C172.2,82.25,176,86.05,181.7,86.05z"/>
<path d="M283.1,122.45l26.8-26.8c3.801-3.8,3.801-9.6,0-13.4c-3.8-3.8-9.6-3.8-13.399,0l-26.8,26.8c-3.801,3.8-3.801,9.6,0,13.4 C273.5,126.25,279.3,126.25,283.1,122.45z"/>
<path d="M76.5,219.95h210.399c0-3.8,0-5.699,0-9.6c0-57.4-47.8-105.2-105.2-105.2s-105.2,47.8-105.2,105.2 C76.5,214.25,76.5,216.15,76.5,219.95z"/>
<path d="M306.1,210.45c0,5.7,3.8,9.601,9.601,9.601h38.199c5.7,0,9.601-3.8,9.601-9.601c0-5.8-3.8-9.6-9.601-9.6H315.7 C311.8,200.85,306.1,206.55,306.1,210.45z"/>
<path d="M353.899,258.25H237.2l-23,19.1l-34.4,28.7l-30.6-28.7l-22.9-19.1H9.6c-3.8,0-9.6,3.8-9.6,9.6s5.7,9.6,9.6,9.6h105.2 l66.9,57.4l66.9-57.4h105.2c5.7,0,9.6-3.8,9.6-9.6S359.6,258.25,353.899,258.25z"/>
<path d="M80.4,122.45c3.8,3.8,9.6,3.8,13.4,0c3.8-3.8,3.8-9.6,0-13.4L67,82.25c-3.8-3.8-9.6-3.8-13.4,0c-3.8,3.8-3.8,9.6,0,13.4 L80.4,122.45z"/>
<path d="M9.6,219.95h38.2c3.8,0,9.6-3.8,9.6-9.6c0-3.8-3.8-9.601-9.6-9.601H9.6c-5.7,0-9.6,5.7-9.6,9.601 C0.1,216.15,3.9,219.95,9.6,219.95z"/></g>
</svg>';
$offline='<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';
$online='<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';
$sunposicon="<svg version='1.1' id='weather34 sun position icon' x='0px' y='0px' width='16' height='16' fill='currentcolor' viewBox='0 0 1000 1000' enable-background='new 0 0 1000 1000' xml:space='preserve'>
<g><path  fill='currentcolor' d='M270.3,500c0,126.9,102.8,229.7,229.7,229.7S729.7,626.9,729.7,500c0-126.9-102.8-229.7-229.7-229.7S270.3,373.1,270.3,500z'/><path d='M500,193.8c16.8,0,30.6-13.8,30.6-30.6V40.6c0-16.8-13.8-30.6-30.6-30.6c-16.8,0-30.6,13.8-30.6,30.6v122.5C469.4,180,483.2,193.8,500,193.8z'/><path d='M500,806.3c-16.8,0-30.6,13.8-30.6,30.6v122.5c0,16.8,13.8,30.6,30.6,30.6c16.8,0,30.6-13.8,30.6-30.6V836.9C530.6,820,516.8,806.3,500,806.3z'/><path d='M959.4,469.4H836.9c-16.8,0-30.6,13.8-30.6,30.6c0,16.8,13.8,30.6,30.6,30.6h122.5c16.8,0,30.6-13.8,30.6-30.6C990,483.2,976.2,469.4,959.4,469.4z'/><path d='M193.8,500c0-16.8-13.8-30.6-30.6-30.6H40.6C23.8,469.4,10,483.2,10,500c0,16.8,13.8,30.6,30.6,30.6h122.5C180,530.6,193.8,516.8,193.8,500z'/><path d='M239.7,284.1c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2c12.3-12.3,12.3-30.6,0-42.9l-87.3-87.3c-12.3-12.3-30.6-12.3-42.9,0s-12.3,30.6,0,42.9L239.7,284.1z'/><path d='M760.3,715.9c-12.3-12.3-30.6-12.3-42.9,0s-12.3,30.6,0,42.9l87.3,87.3c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2c12.3-12.3,12.3-30.6,0-42.9L760.3,715.9z'/><path d='M738.9,291.8c7.7,0,15.3-3.1,21.4-9.2l87.3-87.3c12.3-12.3,12.3-30.6,0-42.9s-30.6-12.3-42.9,0l-88.8,87.3c-12.3,12.3-12.3,30.6,0,42.9C722,288.7,729.7,291.8,738.9,291.8z'/><path d='M239.7,715.9l-87.3,87.3c-12.3,12.3-12.3,30.6,0,42.9c6.1,6.1,13.8,9.2,21.4,9.2s15.3-3.1,21.4-9.2l87.3-87.3c12.3-12.3,12.3-30.6,0-42.9C271.8,705.2,251.9,705.2,239.7,715.9z'/></g>
</svg>";


$result         = date_sun_info(time(), $lat, $lon);  #echo '<!-- '.time().' '.print_r($result,true)." -->\n";
$nextday        = time() + 24*60*60;
$result2        = date_sun_info($nextday,$lat, $lon); # echo '<pre>'.print_r($result2,true);

$light          = $result['sunset'] - $result['sunrise'];
$daylight       = gmdate('H:i',$light);
$dark           = 24*60*60 - $light;
$daydark        = gmdate('H:i',$dark);
$nextrise       = $result['sunrise'];
$now            = time();
if ($now > $nextrise)
     {  $nextrise       = date('H:i',$result2['sunrise']);
        $nextrisetxt    = lang('Tomorrow');}
else {  $nextrisetxt    = lang('Today');
        $nextrise       = date('H:i',$nextrise);} 
$nextset        = $result['sunset'];
if ($now > $nextset)
     {  $nextset        = date('H:i',$result2['sunset']);
        $nextsettxt     = lang('Tomorrow');}
else {  $nextsettxt     = lang('Today');
        $nextset        = date('H:i',$nextset);} 
$firstrise      =   $result['sunrise'];
$secondrise     =   $result2['sunrise'];    
$firstset       =   $result ['sunset']; 

if ($now < $firstrise) 
    {   $time   = $firstrise - $now;
        $hrs    = gmdate ('G',$time);
        $min    = gmdate ('i',$time);
        $txt    = lang('Till').' '.lang('Sunrise');}
elseif ($now < $firstset)
    {   $time   = $firstset - $now;
        $hrs    = gmdate ('G',$time);
        $min    = gmdate ('i',$time);
        $txt    = lang('Till').' '.lang('Sunset');}
else {  $time   = $secondrise - $now;
        $hrs    = gmdate ('G',$time);
        $min    = gmdate ('i',$time);
        $txt    = lang('Till').' '.lang('Sunrise');}

function get_azimuth ()
    {   global $lat, $lon, $TZ,$azimuth,$elevation ;
        include_once('azimuth.php');
        $azimuth        = round($sunazi[25],2);
        $elevation      = round($sunpos[25],2); }
        
$azimuth=$elevation=0;
get_azimuth ();

?>
<style>
.daylightvalue1:before {content: "";}
</style>
<div class="updatedtime"><?php echo $online.' '.date($timeFormat).PHP_EOL; ?>
</div>
<div class="daylightmoduleposition" > 
<?php
echo '
<div class="sunlightday">'
        .$sunlight
        .' <strongnumbers> '.$daylight.'</strongnumbers> '
        .lang('Hrs')
        .'<br /><period>'.lang('TotalDaylight').'</period>
</div>
<div class="sundarkday">
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
        <circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" />
</svg>
<strongnumbers> '.$daydark.'</strongnumbers> '
        .lang('Hrs')
        .'<br> <period>'.lang('TotalDarkness').'</period>
</div>
<div class="sunriseday">'
        .lang('Sunrise').' '
        .$sunricon
        .'<br>&nbsp;&nbsp;'
        .$nextrisetxt
        .'<strongnumbers> '.$nextrise.'</strongnumbers>
</div>
<div class="sunsetday">'
        .$sunsicon.' '
        .lang('Sunset')
        .'<br>'
        .$nextsettxt
        .'<strongnumbers> '.$nextset.'</strongnumbers>
</div>
<div class="sundialcontainerdiv" >
<div id="sundialcontainer" class=sundialcontainer>
<canvas id="myCanvas" width="135" height="135"
style="padding: 0px; margin: 10px; border: 0px;  position: relative; display: inline-block; width: 135px; height: 135px;
background: transparent; ">
</canvas>
</div>
<div class="daylightvalue1" ><hrs>'.lang('Hrs').'</hrs>
<hours>'.$hrs.'</hours> <minutes>'.$min.'</minutes> <br><period>'.$txt.'</period>
<min>'.lang('Mins').'</min>
<div class="azimuth">'  .lang('Azimuth')  .' <orange> '.$azimuth.'</orange>&deg;</div>
<div class="elevation">'.lang('Elevation').' <orange> '.$elevation.' </orange>&deg;</div>
</div>
</div> 
</div> 
'; 
$d_crcl = 24*60/2;  #canvas circle = 2PI for 24 hours. 1PI => 12 hrs * 60 min
function clc_crcl ($integer)
     {  global $d_crcl ;
        $h      = (int) date ('H',$integer);
        $m      = (int) date ('i',$integer);
        $calc   = $m + $h*60;   ####  ADD check for 24 hours dark / light
        $calc   = (float) 0.5 + ($calc / $d_crcl );
        if ($calc > 2.0) { $calc = $calc - 2;}
        return round ($calc,5);
		}
function clc_sun ($integer)
     {  global $d_crcl ;
        $h      = (int) date ('H',$integer);
        $m      = (int) date ('i',$integer);
        $calc   = $h + $m/60;
				$calc   = ($calc/24)*360; # hrs to angle in degrees
        return round ($calc,5);
		}

$start  = clc_crcl ($result['sunrise']);
$end    = clc_crcl ($result['sunset']);
$pos    = clc_crcl ($now);
$sundegrees = clc_sun  ($now); # returns angle to us for sun circle
#
if ($now > $result['sunset'] || $now < $result['sunrise'] ) 
     {  $sn_clr = '#B6B6B6';}
else {  $sn_clr = '#FF8940';}
echo '
<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
// draw hours text
ctx.fillStyle = "#FF8940";
ctx.textAlign = "center";
ctx.font = "8px Arial";
ctx.fillText("24", 63, 128);
ctx.textAlign = "right";
ctx.fillText("6",  6, 65);
ctx.textAlign = "left";
ctx.fillText("18",  120, 65);
ctx.textAlign = "center";
ctx.fillStyle = "#FF8940";
ctx.fillText("12", 63, 8);

// draw background circle
ctx.beginPath();
ctx.arc(63, 65, 55, 0, 2 * Math.PI);
ctx.lineWidth = 3;
ctx.strokeStyle = "#3D4042";
ctx.stroke();

// draw daylight arc
ctx.beginPath();
ctx.arc(63, 65, 55, '.$start.' * Math.PI, '.$end.' * Math.PI);
ctx.lineWidth = 3;
ctx.lineCap = "round";
ctx.strokeStyle = "#FF8940";
ctx.stroke();

// draw sun circle at position
var radius = 55;
var point_size = 6;
var center_x = 63;
var center_y = 65;

function drawSun(angle,distance,fill){
	var x = center_x + radius * Math.sin(-angle*Math.PI/180) * distance;
	var y = center_y + radius * Math.cos(-angle*Math.PI/180) * distance;

	ctx.beginPath();
	ctx.fillStyle = fill;
	ctx.strokeStyle = fill;
	ctx.arc(x, y, point_size, 0, 2 * Math.PI);
	ctx.fill();
}

drawSun('.$sundegrees.',1.0,"'.$sn_clr.'");

</script> 
';
