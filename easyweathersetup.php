<?php
if(!file_exists('settings1.php')) {copy('initial-settings1.php','settings1.php'); }
include('settings1.php');
 // HOMEWEATHERSTATION EASY SETUP AUGUST 2016 //
 // SIMPLE EASY PHP BASED AND CSS //
 // DEVELOPED BY BRIAN UNDERDOWN //
 // RELEASED NOVEMBER 2016 //
 // CU //

IF (ISSET($_POST["Submit"])) {
 
$string = '<?php 
$apikey = "'. $_POST["wuapi"]. '";
$weatherflowID = "'. $_POST["wfid"]. '";
$weatherflowdairID = "'. $_POST["wfairid"]. '";
$weatherflowdskyID = "'. $_POST["wfskyid"]. '";
$weatherflowoption   = "'. $_POST["weatherflowoption"]. '";
$weatherflowmapzoom   = "'. $_POST["weatherflowmapzoom"]. '";
$id = "'. $_POST["WUID"]. '";
$TZ = "'. $_POST["TZ"]. '";
$UTC = "'. $_POST["UTC"]. '";
$lon = '. $_POST["lon"]. ';
$lat = '. $_POST["lat"]. ';
$stationlocation = "'. $_POST["stationlocation"]. '";
$stationName = "'. $_POST["stationName"]. '";
$moonadj = "'. $_POST["moonadj"]. '";
$minmag = "'. $_POST["minmag"]. '";
$unit = "'. $_POST["unit"]. '";
$metric = '. $_POST["metric"]. ';
$elevation = "'. $_POST["elevation"]. '";

$purpleairID = "'. $_POST["purpleair"]. '";
$purpleairhardware   = "'. $_POST["purpleairhardware"]. '";
$darkskyunit   = "'. $_POST["darkskyunit"]. '";

$indoor = '. $_POST["indoor"]. ';
$uk = '. $_POST["uk"]. ';
$usa = '. $_POST["usa"]. ';
$scandinavia = '. $_POST["scandinavia"]. ';
$restoftheworld = '. $_POST["restoftheworld"]. ';
$windunit = "'. $_POST["windunit"]. '";
$distanceunit = "'. $_POST["distanceunit"]. '";
$tempunit = "'. $_POST["tempunit"]. '";
$rainunit  = "'. $_POST["rainunit"]. '";
$rainrate = "'. $_POST["rainrate"]. '";
$pressureunit  = "'. $_POST["pressureunit"]. '";
$livedataFormat = "'. $_POST["livedataFormat"]. '";
$livedata   = "'. $_POST["livedata"]. '";

$currentconditions   = "'. $_POST["currentconditions"]. '";
$boltekfile   = "'. $_POST["boltekfile"]. '";



$personalmessage   = "'. $_POST["personalmessage"]. '";
$extralinks   = "'. $_POST["extralinks"]. '";
$languages   = "'. $_POST["languages"]. '";

$dateFormat   = "'. $_POST["dateFormat"]. '";
$timeFormat    = "'. $_POST["timeFormat"]. '";
$timeFormatShort    = "'. $_POST["timeFormatShort"]. '";
$clockformat    = "'. $_POST["clockformat"]. '";

$showDate = '. $_POST["showDate"]. ';
$fireriskshow = '. $_POST["fireriskshow"]. ';
$position1   = "'. $_POST["position1"]. '";
$position2   = "'. $_POST["position2"]. '";
$position3   = "'. $_POST["position3"]. '";
$position4   = "'. $_POST["position4"]. '";
$position1title   = "'. $_POST["position1title"]. '";
$position2title   = "'. $_POST["position2title"]. '";
$position3title   = "'. $_POST["position3title"]. '";
$position4title   = "'. $_POST["position4title"]. '";
$temperaturemodule   = "'. $_POST["temperaturemodule"]. '";
$hardware   = "'. $_POST["hardware"]. '";
$email    = "'. $_POST["email"]. '";
$twitter   = "'. $_POST["twitter"]. '";
$showEqNotDaylight   = '. $_POST["showEqNotDaylight"]. ';
$notificationeq   = "'. $_POST["notificationeq"]. '";
$uvhardware    = "'. $_POST["uvhardware"]. '";
$theme1   = "'. $_POST["theme1"]. '";
$since    = "'. $_POST["since"]. '";

$db_host   = "'. $_POST["db_host"]. '";
$db_user    = "'. $_POST["db_user"]. '";
$db_pass  = "'. $_POST["db_pass"]. '";
$db_name   = "'. $_POST["db_name"]. '";

$metarapikey ="'. $_POST["metarapikey"]. '";

$metar   = "'. $_POST["metar"]. '";
$icao1   = "'. $_POST["icao1"]. '";
$airport1   = "'. $_POST["airport1"]. '";
$airport1dist   = "'. $_POST["airport1dist"]. '";

$notifications = "'. $_POST["notifications"]. '";
$sunoption = "'. $_POST["sunoption"]. '";
$weatherhardware   = "'.$_POST["weatherhardware"]. '";
$davis   = "'.$_POST["davis"]. '";
$sunpositionbearing = "'. $_POST["sunpositionbearing"]. '";
$cloudbase   = "'. $_POST["cloudbase"]. '";
$hemisphere   = "'. $_POST["hemisphere"]. '";

$defaultlanguage   = "'.$_POST["defaultlanguage"]. '";
$language    = "'.$_POST['language']. '";
$password    = "'.$_POST['password']. '";
$https    = "'.$_POST['https']. '";
$flag   = "'.$_POST["flag"]. '";
?>';
 
$fp = FOPEN("settings1.php", "w") or die("Unable to open settings1.php file check file permissions !");
FWRITE($fp, $string);
FCLOSE($fp);
 
}
?>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<style> <!---cleaned and minified at http:http://refresh-sf.com --->
body{font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#777;background:white}h1{color:rgba(0, 154, 171, 1.000);font-size:24px;margin-bottom:10px;font-weight:bold;margin:10px 0}h2{color:rgba(0, 154, 171, 1.000);font-size:20px;margin-bottom:10px;font-weight:bold;margin:10px 0}h3{color:#ccc;font-size:14px;margin-bottom:20px;font-weight:bold;margin:20px 0}.weathersetuptitle{font-size:18px;text-align:center;font-weight:200;font-family:Arial,Helvetica,sans-serif;padding:5px;border:0;background:rgba(67, 58, 80, 1.000);border-radius:5px;color:#fff;width:600px;margin:0 auto;border:0;border:1px solid #777}.theframe1{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:0px solid #777;margin:0 auto;margin-top:10px;margin-bottom:10px;width:1024px;background:0;padding:5px;border-radius:4px}.theframe{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:5px solid rgba(24, 25, 27, 0.2);margin:0 auto;margin-top:10px;margin-bottom:10px;width:960px;background:white;padding:5px;border-radius:4px}.weatheroptions{margin:5px;padding:10px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #e9ebf1;width:75%}.weatheroptionssidebar{margin:1px;margin-top:-5px;margin-bottom:-5px;margin-left:-5px;padding:5px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #f6f8fc;width:200px;position:relative;float:right;margin:5px;color:#777}.weatheroptionssidebarbottom{margin:1px;margin-top:-145px;margin-left:200px;padding:5px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #f6f8fc;width:200px;position:relative;float:right;color:#777}.weatherbottominfo{position:absolute;font-size:12px;color:#777;padding:3px;margin-top:3px}.weatherbottomwarning{position:absolute;font-size:12px;color:#777;padding:3px;margin-top:7px}.weatheroptions .button{background:rgba(240,94,64,1);border-radius:4px;padding:5px;font-size:16px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;-webkit-appearance:none}.weatheroptions .choose{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:160px;max-width:400px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .choose1{background:rgba(24, 25, 27, 0.8);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:130px;outline:0;-webkit-appearance:none}.weatheroptions .choose2{background:rgba(0, 154, 171, 1.000);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:100px;outline:0;-webkit-appearance:none}.weatheroptions .chooseapi{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:300px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .personal{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:99%;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .stationvalue{background:rgba(0, 154, 171, 1.000);border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weatheroptions .stationvalue1{background:#777;border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weathersectiontitle{background:#777;border-radius:4px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;margin:5px;display:inline-block;-webkit-appearance:none}.weatheroptions a{font-size:14px;color:rgba(0, 154, 171, 1.000);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}a{font-size:14px;color:rgba(0, 154, 171, 1.000);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}#weatherpopupcontainer{width:960px;margin:auto;padding:30px}p{margin-bottom:20px;line-height:24px}#hover{position:fixed;background:white;width:100%;height:100%;opacity:.6}#weatherpopup{position:fixed;width:600px;height:320px;background:white;left:50%;top:25%;border-radius:5px;padding:60px 0;margin-left:-320px;margin-top:-100px;text-align:center;border:1px solid #e9ebf1;border-bottom:23px solid rgba(40,39,39,0.7);color:#fff;padding:10px}.weatherpopupbottom{margin-top:55px;padding:10px;float:left;color:#fff;position:absolute;font-size:11px}#close{position:absolute;background:white;color:#fff;right:-10px;top:-10px;border-radius:50%;width:30px;height:30px;line-height:30px;text-align:center;font-size:14px;font-weight:bold;font-family:'Arial',Arial,sans-serif;cursor:pointer}body{background:white}.seperator{width:700px;border-top:1px #ddd dotted;margin-top:5px;padding:10px}*{box-sizing:border-box}*:focus{outline:0}.login{margin:0 auto;width:300px;background-color:none}a{font-size:12px;text-transform:none;text-decoration:none;color:#2095a7}a:hover{color:#7bbb28}.login-screen{background-color:none;padding:20px;border-radius:5px;margin:0 auto}.app-title{text-align:center;color:#ccc;background-color:none}.login-form{text-align:center;background-color:none}.control-group{margin-bottom:10px}input{text-align:center;background-color:#777;border:2px solid transparent;border-radius:3px;font-size:16px;font-weight:200;padding:10px 0;width:250px;transition:border .5s;color:#fff;border:2px solid rgba(0, 154, 171, 1.000);box-shadow:none;margin:0 auto;margin-top:10px}input:focus{border:2px solid rgba(0, 154, 171, 1.000);box-shadow:none}.btn{border:2px solid transparent;background:rgba(0, 154, 171, 1.000);color:#fff;font-size:16px;line-height:25px;padding:10px 0;text-decoration:none;text-shadow:none;border-radius:3px;box-shadow:none;transition:.25s;display:block;width:150px;margin:10px;text-align:center;-webkit-appearance:none}.btn:hover{background-color:rgba(0, 154, 171, 1.000)}.login-link{font-size:12px;color:#444;display:block;margin-top:12px}.loginformarea{margin:0 auto;text-align:center}orange{color:rgba(236, 87, 27, 1.000)}green{color:rgba(67, 58, 80, 1.000)}blue{color:rgba(67, 58, 80, 1.000)}img{border-radius:4px;}white{color:#fff}.input-button,.modal-button{font-size:18px;padding:10px 40px}.input-block input,.input-button,.modal-button{font-family:Arial,sans-serif;border:1px solid #ccc;}.icon-button,.input-block input,.input-button,.modal-button{outline:0;cursor:pointer}.modal-button{color:#7d695e;border-radius:5px;background:rgba(230, 232, 239, 1.000);width:120px;text-align:center}.modal-button:hover{border-color:rgba(255,255,255,.2);background:rgba(144,177,42,1);color:#f8f8f8}.input-button{color:#7d695e;border-radius:5px;background:#fff}.input-button:hover{background:rgba(144,177,42,1);color:#fff}.input-label{font-size:11px;text-transform:uppercase;font-family:Arial,sans-serif;font-weight:600;letter-spacing:.7px;color:#8c7569;}.input-block{display:flex;flex-direction:column;padding:10px 10px 8px;border:1px solid #ddd;border-radius:4px;margin-bottom:20px;}.input-block input{color:#fff;font-size:18px;padding:10px 40px;border-radius:5px;background:rgba(144,177,42,1)}.input-block input::-webkit-input-placeholder{color:#ccc;opacity:1}.input-block input:-ms-input-placeholder{color:#ccc;opacity:1}.input-block input::-ms-input-placeholder{color:#ccc;opacity:1}.input-block input::placeholder{color:#ccc;opacity:1}.input-block:focus-within{border-color:#8c7569}.input-block:focus-within .input-label{color:rgba(140,117,105,.8)}.icon-button{position:absolute;right:10px;top:12px;width:32px;height:32px;background:0;padding:0}

</style>
<script src="js/jquery.js"></script>
 </head>
        
    <body>
       
    

        
<div class="loginformarea">
<?php 
	//lets secure the homeweatherstation easy setup ///
function showForm($error="LOGIN"){ 
?> <?php echo $error; ?> 
  
  <div class= "login_screen" style="width:60%;max-width:600px;margin:0 auto;color:rgba(24, 25, 27, 1.000);border:solid 1px grey;padding:10px;border-radius:4px;">  <?php echo 'Your Current PHP version is  : ' . phpversion(), ' <br>(PHP 5.6 or higher PHP 7+ is  advised if you are not already using these versions)'; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd" > 
   Enter Your Password For Cumulus Setup Screen Below
<center> <div class="modal-buttons">
     <input name="passwd" type="password" class="input-button"/>  <input type="submit" name="submit_pwd" value="Login " class="modal-button" /> 
         </form> 
     </center>
      <?php echo "2015-" ;?><?php echo date('Y');?> &copy;</a> WEATHER34 CUMULUS DASHBOARD W34-CU</span></span></span>
      <br><br>
        


 

      
<?php    
} 
?>
</div>


  <div span style="width:auto;margin:0 auto;text-align:center;color:#fff;background:0;font-family:arial;padding:20px;border-radius:4px;"> 
<?php 
$Password = $password; 
if (isset($_POST['submit_pwd'])){    $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';  
   if ($pass != $Password) { 
      showForm("Dashboard CUMULUS EASY SETUP"); 
      exit();      
   } 
} else { 
   showForm("Dashboard CUMULUS EASY SETUP"); 
   exit(); 
} 
?>


</div>
<div span style="width:400px;margin:0 auto;margin-top:10px;text-align:center;color:#fff;background:rgba(24, 25, 27, 0.8);font-family:arial;padding:20px;border-radius:4px;"> 
<img src='img/easyweathersetupweather34.svg' width='220px'><br>
Welcome you have logged into the WEATHER34 CUMULUS setup screen <?php echo date("M jS Y H:i"); ?>
</span>
</div>
</div></div>
</div></div>
<div class="theframe1">
<div class="theframe">
 
<p>
<form action="" method="post" name="install" id="install">
<div class="weatheroptionssidebar">
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Please setup and password protect this page for later use it is for your privacy and protection.
<br>

<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>


<br><br><br><br>





<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Database uses the standard PHP connection strings for mySqli,you need to have database setup on server prior to using this feature.This feature currently only supports WS1001/CUMULUS with direct server upload.



<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check username password 





</div>



<br><br><br><br><br><br>




<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Setup the default language 
<img src="img/languages.png"  title="weather34 languages" style="margin-top:5px;-webkit-border-radius:4px;border-radius:4px;padding:5px;border:solid 1px #aaa">

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check languages 
</div>


</div>

<p>

<div class="weatheroptions">
  <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Setup Unique Easysetup Password</div><p>

  
  <div class= "stationvalue">  Set Easysetup Password it is for your privacy & protection</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="password" type="password" id="password" value="<?php echo $password ;?>" class="choose">

   
   </div>
   




<div class="weatheroptions">
  <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Database (Used for WS1001/CUMULUS users only at present)</div><p>

<div class= "stationvalue">  Database Host</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="db_host" type="text" id="db_host" value="<?php echo $db_host ;?>" class="choose">
  
  <div class= "stationvalue">  Database Username</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_user" type="text" id="db_user" value="<?php echo $db_user ;?>" class="choose">
  <p>
  
  <div class= "stationvalue">  Database Password</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_pass" type="password" id="db_pass" value="<?php echo $db_pass ;?>" class="choose">
  
  <div class= "stationvalue">  Database Name</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_name" type="text" id="db_name" value="<?php echo $db_name ;?>" class="choose">
  
   </div>
   
   
   
   <p>
   
   <p>


   <div class="weatheroptions">
<div class= "weathersectiontitle">
Choose the default Language to display and use..</div>


<p>
      <div class= "stationvalue"> 
      Template Language (lowercase)</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="defaultlanguage"></label>
        <select id="defaultlanguage" name="defaultlanguage" class="choose1">           
           <option><?php echo $defaultlanguage ;?></option>
            <option>en</option>
           <option>can</option>  
           <option>cat</option>             
           <option>dk</option>
           <option>dl</option>
           <option>fi</option>  
           <option>fr</option>             
           <option>gr</option>
           <option>it</option> 
           <option>nl</option>   
           <option>no</option>  
           <option>pl</option> 
           <option>sk</option>
           <option>sp</option>                        
           <option>sw</option> 
           <option>tr</option> 
           <option>us</option>   
        </select>
        <br><br>
    

<br>

 <div class= "stationvalue"> 
      Your Country Flag</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="flag"></label>
        <select id="flag" name="flag" class="choose1">           
           <option><?php echo $flag ;?></option>
           <option>aus</option>
           <option>en</option>
           <option>can</option>  
           <option>cat</option>             
           <option>dk</option>
           <option>dl</option>
           <option>fi</option>  
           <option>fr</option>             
           <option>gr</option>
           <option>iom</option>
           <option>ire</option>
           <option>it</option>             
           <option>ni</option> 
           <option>no</option>
           <option>nl</option>
           <option>nz</option>  
           <option>pl</option> 
           <option>sa</option>
           <option>scot</option>
           <option>sk</option>
           <option>sp</option>                        
           <option>sw</option> 
           <option>tr</option> 
           <option>us</option>
           <option>wal</option>     
        </select>
        <br><br>
    <div class= "stationvalue">DARK SKY Forecast Language  full list here <a href="https://darksky.net/dev/docs" title="https://darksky.net/dev/docs" target="_blank"><white>https://darksky.net/dev/docs</white></a></div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>

 <label name="language"></label>
      <select id="language" name="language" class="choose1">
           <option><?php echo $language ;?></option>
           <option>en</option>
           <option>bg</option>
           <option>bs</option>
           <option>ca</option> 
           <option>da</option>            
           <option>de</option>
           <option>el</option> 
           <option>es</option>  
           <option>fi</option>
           <option>fr</option>
           <option>hu</option>   
           <option>it</option>
           <option>nl</option>
           <option>pl</option>          
           <option>sv</option>
           <option>tr</option> 
          
            
                   
                  
            
        </select> 
  </div>
   
      
   <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Software 

     <br /><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Cumulus 
     
    

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check path to data file 
</div>


</div>

   <p>


   <div class="weatheroptions">
<div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Cumulus Software Path to Data file</div><p>
      <div class= "stationvalue">Data Type</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
 <label name="livedataFormat"></label>
        <select id="livedataFormat" name="livedataFormat" class="choose1">
           <option ><?php echo $livedataFormat ;?></option>  
            <option>cumulus</option>
          
           
        </select>
            
        
        </p>
        
    <div class= "stationvalue">Your Path to data file</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><br>

  <input name="livedata" type="text" id="livedata" value="<?php echo $livedata ;?>" class="chooseapi">
       
	<strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg></strong><span style="color:#777;"> Cumulus path example: http://yourdomain/realtime.txt</span><br>
	
    <br>
    <span style="color:#00A4B4">
    <strong> <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> getting the path correct is essential for live realtime data display</strong></span>
<p>
  </div>
   <div class="weatheroptions">
   <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Do You Use Davis Hardware </div><p>
      <div class= "stationvalue"> 
     If Davis Hardware Select Yes</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="davis"></label>
        <select id="davis" name="davis" class="choose1">           
           <option><?php echo $davis ;?></option>
           <option>Yes</option>
           <option>No</option>
          </select>
        <br><br>
    


           
  <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Which Weather Station Hardware</div><p>
      <div class= "stationvalue"> 
     Which Hardware Do You Own (Brand)</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="weatherhardware"></label>
        <select id="weatherhardware" name="weatherhardware" class="chooseapi">           
           <option><?php echo $weatherhardware ;?></option>
           <option>Davis&reg; Vantage Pro2&#8482;</option>
           <option>Davis&reg; Vantage Pro2 Plus&#8482;</option> 
           <option>Davis&reg; Vantage Pro2 Plus+FARS&#8482;</option>
           <option>Davis&reg; Vantage Pro2 FARS&#8482;</option>
           <option>Davis&reg; Vantage Pro2 Solar&#8482;</option>
           <option>Davis&reg; Vantage Pro2 UV&#8482;</option> 
           <option>Davis&reg; Vantage Vue&#8482;</option>
           <option>Davis&reg; Envoy8x&#8482;</option>
           <option>Davis&reg; Cabled Vantage Pro2&#8482;</option>  
           <option>Davis&reg; Cabled Vantage Pro2 Plus&#8482;</option>  
           <option>Davis&reg; Envoy8x&#8482;</option>  
           <option>Davis&reg; Envoy8x&#8482;</option>
           <option>Davis&reg; Vantage Pro1&#8482;</option>
           <option>Davis&reg; Vantage Pro1+Solar/UV&#8482;</option>
           <option>Davis&reg; Vantage Pro1+Solar/UV/FARS&#8482;</option>
           <option>Davis&reg; Vantage Pro1+FARS&#8482;</option>   
           <option>Davis&reg; Cabled Vantage Pro1&#8482;</option>           
           <option>Davis&reg; Cabled Vantage Pro1+Solar/UV&#8482;</option>
           <option>Davis&reg; Cabled Vantage Pro1+Solar/UV/FARS&#8482;</option> 
           <option>Davis&reg; Cabled Vantage Pro1+FARS&#8482;</option>              
           <option>Oregon WMR-88</option>
           <option>Oregon WMR-100</option>
           <option>Oregon WMR-200</option>
           <option>Oregon WMR-180</option>
           <option>Oregon WMR-928</option>
           <option>Oregon WMR-918</option>
           <option>Oregon WMR-968</option>  
           <option>Fine Offset WH1080</option>
           <option>Ambient Offset WH1080</option>
           <option>Maplin WH1080</option> 
           <option>La Crosse</option> 
           <option>Instromet</option>        
           
           
        </select>
          

<br>
       
</p></div>
  <div class="weatheroptions">

  <br><br>
  <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>
*New Metar option for current ICON weather conditions + Darksky Option</strong><br>
</div><p>
    
       <div class= "stationvalue"><strong>Options</strong></div> 
    <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" /></svg>
      
      <label name="currentconditions"></label>
        <select id="currentconditions" name="currentconditions" class="chooseapi">
           <option ><?php echo $currentconditions ;?></option>  
                   
                     <option>currentconditionsmetar34.php</option>  
                     <option>currentconditionsds.php</option>       
             
        </select>
      <br>          
      <br>
      
      
      
   
     
    
     <span style="color:#777">
    
     <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#01a4b4" stroke="#01a4b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <span style="color:rgba(0, 154, 171, 1.000);">currentconditionsmetar34.php</span> uses Nearby Metar Aviation Weather Options must get API key and insert into option near bottom of this setup screen<BR>
     <br>
     <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#01a4b4" stroke="#01a4b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <span style="color:rgba(0, 154, 171, 1.000);">currentconditionsds.php</span> uses DarkSky must get API key and insert into option near bottom of this setup screen<BR></strong></span></span>
     
<p>
  
  
  
  
 
    
     
<p>
  </div>
  
  
  

   

 
 <div class="weatheroptions">
<div class= "weathersectiontitle">
<svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <circle cx="16" cy="11" r="4" />
    <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
</svg>

Location Details <strong>try and keep these short dont include full country try a short code</strong></div><p>
<div class= "stationvalue">  Station Location</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="stationlocation" type="text" id="stationlocation" value="<?php echo $stationlocation ;?>" class="choose">
  
  
<div class= "stationvalue">  Station Name</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="stationName" type="text" id="stationName" value="<?php echo $stationName ;?>" class="choose">
   </div>
   
 <br>
   <div class="weatheroptionssidebar">Here is the area where you set your Lat/Lon with timezone + UTC offset , for timezone you can check
   <a href="http://php.net/manual/en/timezones.php" title="http://php.net/manual/en/timezones.php" target="_blank"> the official php timezone documented page</a>
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

<strong>Lat/Lon Example</strong><br>
<strong>Lat</strong> 54.00000  <strong>Lon</strong> -22.00000<br><br>

<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg><strong>UTC</strong> <br>
<strong>utc</strong> offset use single number  like -2,-4,1,2,3,4 etc <br>do not use -01,0-04,01 ,02,03, 04 etc <br>


</div>
   
   
   </div>
   <p>  
   
<div class="weatheroptions">
<div class= "stationvalue">TIMEZONE</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

 
 <input name="TZ" type="text" id="TZ" value="<?php echo $TZ ;?>" class="choose"> 
 
 
 <div class= "stationvalue">UTC Offset</div> 
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

<input name="UTC" type="text" id="UTC" value="<?php echo $UTC ;?>" class="choose">
    
 
 
    
<p>
	<div class= "stationvalue">Latitude</div>
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="lat" type="text" id="lat" value="<?php echo $lat ;?>" class="choose"> 
    
   <div class= "stationvalue">Longitude</div>
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="lon" type="lon" id="TZ" value="<?php echo $lon ;?>" class="choose"> 
     <br>  
   <div class= "stationvalue">Elevation</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="elevation" type="text" id="elevation" value="<?php echo $elevation ;?>" class="choose"> 
    
   
    
    
</div>

  <p>
  
   <p><br>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Here you can set (2 choices)the default theme dark or light option <br />
   and set the default display unit
   
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check unit(s)

</p>
 </div></div>
    





   
   
   <p>       
 
<div class="weatheroptions">
  
  <div class= "weathersectiontitle">
  <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Set the Units you wish to display controls unit switching & color theme also show/disable notifications</div><p>
  
  <label name="unit"></label>
  <div class= "stationvalue">Units</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="unit" name="unit" class="choose1">
        	<option><?php echo $unit ;?></option>
            <option>metric</option>
            <option>english</option>
        </select>
        
        <label name="metric"></label>
        <div class= "stationvalue">Metric</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="metric" name="metric" class="choose1">
            <option <?php if($metric=="false") echo "selected"; ?> >false</option>
            <option <?php if($metric=="true") echo "selected"; ?> >true</option>
            </select>
       <span style="color:#777;"> set: <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> true=metric , <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> false=non metric</span>
  
   <p>
    
     <div class= "stationvalue"> Default Theme </div>
        <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        
        <label name="theme1"></label>
        <select id="theme1" name="theme1" class="choose1">
            <option><?php echo $theme1 ;?></option>
            <option>dark</option>
            <option>light</option>
           
        </select>
        <span style="color:#777;"> set: <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#25292D" stroke="#25292D" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> dark, <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F05E40" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> light</span>
  <p>
     
     <div class= "stationvalue">   
   Notifications</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="rgba(86, 95, 103, 1.000)" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="notifications" name="notifications" class="choose1">
         <option><?php echo $notifications ;?></option>
            <option>yes</option>
            <option>no</option>
                 
            
        </select>
        <span style="color:rgba(86, 95, 103, 1.000);">
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(102, 188, 199, 1.000)" stroke="rgba(102, 188, 199, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> yes to show notifications 
	 <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> no to disable</strong><br>

</span></p></p></div>
    
    <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> In this area only select one as true , it converts the charts to display units same as main page

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

only set one as true
</div>

</div>
   <p>       
 
    
<div class="weatheroptions">
       <div class= "weathersectiontitle">
       
       <svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <circle cx="16" cy="11" r="4" />
    <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
</svg>
       Tell us where your are so we can convert the charts. very important  set only one box to true set all others false (important to set each option do not leave blank !!)
    </div>     <p>
        <label name="uk"></label>
        <div class= "stationvalue">Are you in the UK</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="uk" name="uk" class="choose1">
            <option <?php if($uk=="false") echo "selected"; ?> >false</option>
            <option <?php if($uk=="true") echo "selected"; ?> >true</option>           
        </select>
        
        <label name="usa"></label>
        <div class= "stationvalue">Are you in the USA</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="usa" name="usa" class="choose1">
            <option <?php if($usa=="false") echo "selected"; ?> >false</option>
            <option <?php if($usa=="true") echo "selected"; ?> >true</option>
        </select>
        <P>
        <label name="scandinavia"></label>
        <div class= "stationvalue">Are you in Scandinavia</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="scandinavia" name="scandinavia" class="choose1">
            <option <?php if($scandinavia=="false") echo "selected"; ?> >false</option>
            <option <?php if($scandinavia=="true") echo "selected"; ?> >true</option>            
        </select>
       
         <label name="restoftheworld"></label>
        <div class= "stationvalue">Are you not in any of others</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="restoftheworld" name="restoftheworld" class="choose1">
            <option <?php if($restoftheworld=="false") echo "selected"; ?> >false</option>
            <option <?php if($restoftheworld=="true") echo "selected"; ?> >true</option>
        </select>
    
   </div>
   
   
   <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Set the units for the main page display and modules it is connected to the 
   unit selector in the menu
   
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

double check again
</div>
   
   </div>
   <p>  
   
   
<div class="weatheroptions">
    <div class= "weathersectiontitle">
    <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
    Set the Units to display in the main template</div> 
    <p>
    <label name="windunit"></label>
    <div class= "stationvalue">Wind Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="windunit" name="windunit" class="choose1">
       <option><?php echo $windunit ;?></option>
           <option>km/h</option>
            <option>mph</option>            
            <option>m/s</option>
            <option>kts</option>
            
        </select>
        
        <label name="tempunit"></label>
        <div class= "stationvalue">Temperature Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="tempunit" name="tempunit" class="choose1">
        <option><?php echo $tempunit ;?></option>
            <option>C</option>
            <option>F</option>
            
        </select>
        <br><br>
        <label name="rainunit"></label>
        <div class= "stationvalue">Rain Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="rainunit" name="rainunit" class="choose1">
         <option><?php echo $rainunit ;?></option>
            <option>mm</option>
            <option>in</option>
            
            
        </select>
        
       
        <label name="rainrate"></label>
        <div class= "stationvalue">Rain Rate (per Hr/Min)</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="rainrate" name="rainrate" class="choose1">
        <option><?php echo $rainrate ;?></option>
            <option>/h</option>
            <option>/m</option>
            
        </select>
        <br><br>
        <label name="pressureunit"></label>
        <div class= "stationvalue">Barometer Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="pressureunit" name="pressureunit" class="choose1">
         <option><?php echo $pressureunit ;?></option>
            <option>mb</option>
            <option>hPa</option>
            <option>inHg</option>
           
        </select>
        
        <br><br>
        
        <label name="distanceunit"></label>
        <div class= "stationvalue">Distance unit measured miles or kilometres</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="distanceunit" name="distanceunit" class="choose1">
        <option><?php echo $distanceunit ;?></option>
            <option>mi</option>
            <option>km</option>
            
        </select>
        
        
        
    </div>
    
    
   <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
General template settings with options to choose which type of module to display ,basic station information 

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

your nearly there :-) keep going<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Make sure you have a <strong><span style="color:#F8712E;"><a href="https://www.wunderground.com/weather/api" title="https://www.wunderground.com/weather/api" target="_blank">Weather Underground Developer API KEY</a></span></strong> ..

<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Options to use UVINDEX forecast data if you <strong>DO NOT</strong> have UVINDEX hardware ..
<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Moonset offset times can be adjusted here to align with your location it is measured in hours ,please adjust by hours to correct the output you may have to adjust when clocks move with annually daylight saving times ..
</div>

</div>
   
   
   <p>      
       
<div class="weatheroptions">
   <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
   Other Template Settings also allows you to fine tune some data display outputs
    </div>
    
    <p>
    
    <div class= "stationvalue"><svg id="i-lock" viewBox="0 0 32 32" width="22" height="22" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 9 9 5 16 5 23 5 23 9 23 15 M16 20 L16 23" />
    <circle cx="16" cy="24" r="1" />
</svg> Do you have a HTTPS Certified Secure site ? (be trusted,be smart)</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="https"></label>
        <select id="https" name="https" class="choose1">  
            <option><?php echo $https ;?></option>        
            <option>yes</option>
            <option>no</option>            
        </select><br>
       <strong> <span style="color:#00A4B4;">options</span></strong><br>
        <span style="color:rgba(67, 58, 80, 1.000);"><strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> yes</strong></span> <span style="color:#777;"> if you <span style="color:rgba(67, 58, 80, 1.000);">HAVE</span><strong><span style="color:#777"> https://</span><br>
        <strong><span style="color:#BD6451"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> no</span></strong> <span style="color:#777;">use if you do</span> <strong><span style="color:#BD6451"> NOT </span>have</strong></span> <span style="color:#777;"> https://<br>
        </span>
      <P> 
    
    
    
    
    <div class= "stationvalue">Hardware</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="hardware" type="text" id="hardware" value="<?php echo $hardware ;?>" class="choose">  
<p>  



    <div class= "stationvalue">Email</div> 
    
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="email" type="text" id="email" value="<?php echo $email ;?>" class="choose">
    <div class= "stationvalue">Twitter Name</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="twitter" type="text" id="twitter" value="<?php echo $twitter ;?>" class="choose">
    <p>
    <div class= "stationvalue">Year your weather station was installed</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="since" type="text" id="since" value="<?php echo $since ;?>" class="choose">
   
    
   <div class="seperator"></div>
  
  
  
  
  <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Solar & UV Hardware ,Cloudbase,Earthquake or Web Cam option</span> <br>   
<br>  
<div class= "stationvalue">   
   Set Cloudbase to use Feet or Metres for module options below</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="cloudbase" name="cloudbase" class="choose1">
         <option><?php echo $cloudbase ;?></option>
            <option>feet</option>
            <option>metres</option> 
        </select>
<br><br>
       <div class= "stationvalue"> Do you have UV/SOLAR Hardware? Or Web Cam?</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="uvhardware"></label>
        <select id="uvhardware" name="uvhardware" class="choose">  
            <option><?php echo $uvhardware ;?></option>              
            <option>webcamsmall.php</option>
            <option>eq.php</option>              
            <option>weatherflowuvsolar.php</option>
            <option>weather34uvsolar.php</option>
            <option>solaruvds.php</option>
            <option>indoortemperature.php</option>
           
        </select><br>
        <strong> <span style="color:#00A4B4;">options</span></strong><br>
        
     <strong><svg id="i-eye" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
    <circle cx="17" cy="15" r="1" /><circle cx="16" cy="16" r="6" /><path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" />
</svg><span style="color:#777"> webcamsmall.php if you have <strong><span style="color:#777"> webcam</strong> <span style="color:#777;"> use the optional web cam script <br>(need to add url web cam image to webcamsmall.php) <br><br></span></span>

<strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F75C46" stroke="#F75C46" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777"> eq.php if you want <strong><span style="color:#777"> earthquake </strong> <span style="color:#777;"> information <br> <br></span></span>
    
     
     
    <br>
  <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F75C46" stroke="#F75C46" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777"> New option <span style="color:rgba(67, 58, 80, 1.000)">weather34uvsolar.php</span> if you have solar and uv hardware  <strong><span style="color:#777">  **note you must have uv/solar radiation sensor!!!<br><br></span></span>

 <br>
  <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F75C46" stroke="#F75C46" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777"> New design and option October 2018 <span style="color:rgba(67, 58, 80, 1.000)">indoortemperature.php </span>Indoor Temperature <strong><span style="color:#777">  <br><br></span></span>
     
     <br>
  <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F75C46" stroke="#F75C46" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777"> September 3rd 2018 New option <span style="color:rgba(67, 58, 80, 1.000)">weatherflowuvsolar.php </span>Weatherflow Hardware only if you want to use UV/Solar Data <strong><span style="color:#777">  <br><br></span></span>
     
     <br>
  <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#F75C46" stroke="#F75C46" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777"> September 30th 2018 New option <span style="color:rgba(67, 58, 80, 1.000)">solaruvds.php </span>uses darksky forecast UV and you must have solar radiation hardware <strong><span style="color:#777">  <br><br></span></span>

<div class="seperator"></div>
  
  
  
  
  
  <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Options for Top Row 4 Modules <span style="color:#777;"></span> <br>   
       <div class= "stationvalue"> Position 1 Fixed</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="position1"></label>
        <select id="position1" name="position1" class="choose">  
          <option><?php echo $position1 ;?></option> 
          <option>weather34clock.php</option>
            
            </select>
        
        <div class= "stationvalue"> Position 1 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position1title"></label>
        <input name="position1title" type="text" id="position1title" value="<?php echo $position1title ;?>" class="choose"> 
        
        
        
        <br>
        
        <div class= "stationvalue"> Position 2 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position2"></label>
        <select id="position2" name="position2" class="choose">  
            <option><?php echo $position2 ;?></option>        
            <option>cumulus-sunshine.php</option>           
            <option>max-mintemp.php</option>
            <option>max-minwind.php</option>
            <option>rainfallf-year-month.php</option>            
            <option>earthquake.php</option>            
            <option>boltek.php</option> 
            <option>wflightning.php</option> 
            </select>
        
        
        <div class= "stationvalue"> Position 2 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position2title"></label>
       <input name="position2title" type="text" id="position2title" value="<?php echo $position2title ;?>" class="choose"> 
              
        <br>
        
        <div class= "stationvalue"> Position 3 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        
        <label name="position3"></label>
        <select id="position3" name="position3" class="choose">  
            <option><?php echo $position3 ;?></option>        
            <option>cumulus-sunshine.php</option>            
            <option>max-mintemp.php</option>
            <option>max-minwind.php</option>
            <option>rainfallf-year-month.php</option>
            <option>homeindoor.php</option> 
            <option>earthquake.php</option>             
            <option>boltek.php</option> 
            <option>wflightning.php</option> 
           
            </select>
     <div class= "stationvalue"> Position 3 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position3title"></label>
        <input name="position3title" type="text" id="position3title" value="<?php echo $position3title ;?>" class="choose"> 
        
        <br>
        
        
        <div class= "stationvalue"> Position 4 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position4"></label>
        <select id="position4" name="position4" class="choose">  
            <option><?php echo $position4 ;?></option>        
             <option>advisory.php</option>
            
            
            </select>
               
        
        
        <div class= "stationvalue"> Position 4 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position4title"></label>
       <input name="position4title" type="text" id="position4title" value="<?php echo $position4title ;?>" class="choose"> 
           
            
        </select>
        <br>
        <strong> <span style="color:#00A4B4;">options</span></strong><br>
        <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(236, 87, 27, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> cumulus-sunshine.php</span> if you <span style="color:rgba(67, 58, 80, 1.000)">USE</span> CUMULUS software</span><br>
     
       <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> weather34clcok.php</span> Daily <span style="color:rgba(67, 58, 80, 1.000)">Local</span> Time<br></span>
       
       <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(236, 87, 27, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> max-mintemp.php</span> Daily <span style="color:rgba(67, 58, 80, 1.000)">MAX-MIN</span> Temperatures<br></span>
     <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> max-minwind.php</span> Daily <span style="color:rgba(67, 58, 80, 1.000)">MAX-MIN</span> Wind<br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> rainfallf-year-month.php</span> Totals <span style="color:rgba(67, 58, 80, 1.000)">YEARLY-MONTHLY</span> Rainfall<br></span>
     
       <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> homeindoor.php</span> Current <span style="color:rgba(67, 58, 80, 1.000)">INDOOR</span> Temperature/Humidity<br></span>
     
       <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(236, 87, 27, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> *<span style="color:#F75C46;">English only NEW 27TH March 2018</span> advisory.php</span> Station <span style="color:rgba(67, 58, 80, 1.000)">WEATHER</span> ALERTS<br>
      <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> homenotification.php</span> Station <span style="color:rgba(67, 58, 80, 1.000)">WEATHER</span> ALERTS<br>
     
       <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> earthquake.php</span> Latest<span style="color:rgba(67, 58, 80, 1.000)"> EARTHQUAKE</span> ALERT<br>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(236, 87, 27, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> boltek.php</span> Latest<span style="color:rgba(67, 58, 80, 1.000)"> Nexstorm Lightning Network based on your NSrealtime.txt</span> <br>
     <span style="color:rgba(236, 87, 27, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(236, 87, 27, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> wflightning.php</span> Lightning<span style="color:rgba(67, 58, 80, 1.000)"> if you have weatherflow hardware</span> 
       
       
        <br></span></span>
        
        
        
        <br>
     
     <div class="seperator"></div>
     
     
     
     <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Moonrise/set  option</span> <br>   
    
   
   <div class= "stationvalue">   
   Fine Tune the Moonrise/Set *if needed or leave as default if unsure</div> 
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="moonadj" type="text" id="moonadj" value="<?php echo $moonadj ;?>" class="choose"> 
<br>
        <strong> <span style="color:#00A4B4;">adjust the moonrise/set to your location in hours </span></strong><br><br>
        
        
         <div class= "stationvalue">   
   Reverse the moonphase for southern hemisphere (i.e. Australia etc..)</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="hemisphere" name="hemisphere" class="choose1">
         <option><?php echo $hemisphere ;?></option>
            <option>0</option>
            <option>180</option>
                 
            
        </select>
<br><br>
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> <span style="color:#F75C46;">set to 0 for Northern hemisphere</span></strong><br>
         <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
    <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> <span style="color:#00A4B4;">set to 180 for Southern hemisphere (180 degrees reversed)</span></strong><br>
       
         <div class= "stationvalue">Sunposition Bearing </div> 
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

<input name="sunpositionbearing" type="text" id="sunpositionbearing" value="<?php echo $sunpositionbearing ;?>" class="choose">
    
 
 <br>
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> This allows you to fine tune the sun position to be relative to your location . values can be negative i.e -10,-60,-100,-150 and so on  mostly those in northern latitudes used a negative or for southern hemisphere values from 0 - 300 in testing 100 was good for Australia ,200 or more for USA just experiment </strong><br>
    
<p>

  
     <div class= "stationvalue">   
   Sun Position Module</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="rgba(86, 95, 103, 1.000)" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="sunoption" name="sunoption" class="choose1">
         <option><?php echo $sunoption ;?></option>
            <option>sun1.php</option>
            <option>sun2.php</option>
            <option>sun3.php</option>
            
                 
            
        </select>
       <br>
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> Three options:<br>sun1.php works universal at all latitudes with less info,<br>sun2.php is for northern hemisphere only and has additional info<br>sun3.php is a new port from Wim's pwsWD sun_block.php script and should work for either hemisphere. </strong><br>

<p>
        
     <div class="seperator"></div>
     
     
     
     <span style="color:#F75C46;"><svg id="i-activity" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg> Earthquake options</span><br>
 
  <div class= "stationvalue"> Earthquake Minimum Magnitude</div> 
  <label name="minmag" ></label>
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="minmag" name="minmag" class="choose1">
         <option><?php echo $minmag ;?></option>
            <option>3</option>
            <option>4</option>
             <option>5</option>
              <option>6</option>
               <option>7</option>            
            
        </select>
     <br><br>
   <div class= "stationvalue">Show Earthquake module?</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="showEqNotDaylight"></label>
        <select id="showEqNotDaylight" name="showEqNotDaylight" class="choose1">
            <option>false</option>
            <option>true</option>
           
            
        </select>
     <P>   
     
     <div class= "stationvalue">Show Earthquake Notifications?</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="notificationeq"></label>
        <select id="notificationeq" name="notificationeq" class="choose1" >
            <option><?php echo $notificationeq ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
        <strong> <span style="color:#00A4B4;">Allows you to turn off earthquake notifications</span></strong><br>
        
     
       <div class="seperator"></div>
    
    
    
    
     <span style="color:#F75C46;"><svg id="i-clock" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <circle cx="16" cy="16" r="14" />
    <path d="M16 8 L16 16 20 20" />
</svg> Time format options</span><br>
     <div class= "stationvalue">Set the Date Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="dateFormat"></label>
        <select id="dateFormat" name="dateFormat" class="choose1">
            <option><?php echo $dateFormat ;?></option>
            <option>d-m-Y</option>
            <option>m-d-Y</option> 
            <option>Y-m-d</option> 
            
        </select>
        
       
        <div class= "stationvalue">Set the Main Clock Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="clockformat"></label>
        <select id="clockformat" name="clockformat" class="choose1">
            <option><?php echo $clockformat ;?></option>
            <option>24</option>
            <option>12</option> 
        </select>  
       
        
        
        <br><br>
      
     <div class= "stationvalue">Set the Time Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="timeFormat"></label>
        <select id="timeFormat" name="timeFormat" class="choose1">
            <option><?php echo $timeFormat ;?></option>
             <option>H:i:s</option>
             <option>g:i:s a</option>
              <option>g:i:s</option>
            </select>
          
        &nbsp;
        
        <div class= "stationvalue">Set the Short Time Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="timeFormatShort"></label>
        <select id="timeFormatShort" name="timeFormatShort" class="choose1">
            <option><?php echo $timeFormatShort ;?></option>
            <option>H:i</option>
            <option>g:i</option> 
            
           
        </select>
        
         &nbsp;<br><br>
        
        
        
        <span style="color:#777;font-weight:600;">Date format<br></span>
        <span style="color:#00A4B4;font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> d-m-Y <span style="color:#777;">for DAY MONTH YEAR format (12-03-2017)</span></span><br> 
        <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> m-d-Y <span style="color:#777;">for MONTH DAY YEAR format (03-12-2017)</span></span><br> 
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
      <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> m-d-Y <span style="color:#777;">for YEAR MONTH DAY format (2017-12-03)</span></span><br> 
     <br>
         
     
     <span style="color:#777;font-weight:600;">Main Clock format<br></span>
        <span style="color:#00A4B4;font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> 24 <span style="color:#777;">Main Clock output example 17:32:12 </span></span><br> 
        <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> 12 <span style="color:#777;">Main Clock output example 5:32:12 pm</span></span><br> <br>
     
      <span style="color:#777;font-weight:600;">Time format<br></span>
       <span style="color:#00A4B4;font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> H:i:s <span style="color:#777;"> 17:34:22 format</span> </span><br> 
       
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i:s a <span style="color:#777;"> 05:34:22 am format</span></span><br> 
     
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i:s  <span style="color:#777;"> 05:34:22 format</span></span><br> <br>
     
     
      <span style="color:#777;font-weight:600;">Short Time format used for Sunrise/Set & Moonrise/Set areas<br></span>      
      <span style="color:#00A4B4;font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> H:i <span style="color:#777;">17:34 format</span></span><br> 
      
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i a  <span style="color:#777;">05:34 am format</span></span><br> 
     
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i   <span style="color:#777;">05:34 format</span></span><br> 
     
     <br>
        
        <div class= "stationvalue">show updated date & time </div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="showDate"></label>
        <select id="showDate" name="showDate" class="choose1">
            <option>false</option>              
        </select><br>
     <span style="color:#777;font-weight:600;">options<br></span>
    
     <span style="color:#00A4B4;font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> false = </span> <span style="color:#777;font-weight:normal;">not used as of 27th April 2017 always false</span>
     
     <div class="seperator"></div>
     
     
       
     <span style="color:#F75C46;"><svg id="i-menu" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
</svg> Menu options</span><br>
     <div class= "stationvalue">Display Extra links in Menu</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   
   <label name="extralinks"></label>
        <select id="extralinks" name="extralinks" class="choose1" >
            <option><?php echo $extralinks ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
         <strong> <span style="color:#00A4B4;">options</span></strong><br>
        <span style="color:#777;"><strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> No</strong> use if do <span style="color:#BD6451">NOT HAVE</span> external links to use<br>
        <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Yes</strong> use if you do <span style="color:rgba(67, 58, 80, 1.000)"> HAVE</span> <span style="color:#777;">  external links to use<br>
        </span></span>
        <br>
        
        <div class= "stationvalue">Display Languages in Menu</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
        
        
         <label name="languages"></label>
        <select id="languages" name="languages" class="choose1" >
            <option><?php echo $languages ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
         <strong> <span style="color:#00A4B4;">options</span></strong><br>
        <span style="color:#777;"><strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> No</strong> use if you do <span style="color:#BD6451">NOT WANT</span> languages selection<br>
        <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Yes</strong> use if you do <span style="color:rgba(67, 58, 80, 1.000)"> WANT</span> <span style="color:#777;"> languages selection<br>
        </span></span>
     
     
    
    <div class="seperator"></div>
 <span style="color:#F75C46;"><svg version="1.1" id="Layer_1" x="0px" y="0px"
	 width="12px" height="12px" viewBox="224.419 99.761 584.098 771.733"
	 style="enable-background:new 224.419 99.761 584.098 771.733;" xml:space="preserve">
<path style="fill:rgba(0, 154, 171, 1.000);stroke:#ccc;stroke-width:0.0938;" d="M536.9,99.9c6.8,5.2,12.7,11.6,19.2,17.2
	c58.7,55.4,112.5,116.6,155.8,184.9c41.9,66.1,74.101,139.2,88.4,216.4c7.899,42.3,10.5,85.699,5.899,128.5
	C804.1,664.8,801,682.7,795.3,699.8c-8,24.8-18.5,48.9-32.9,70.7C750,789.3,734.5,806.1,716.6,819.7
	C696.9,834.6,674.4,845.5,651,853c-29.101,9.3-59.601,13.9-90,16.4c-36.301,2.699-72.801,3.199-109-1.4c-41-5.1-81.7-16-118.2-35.7
	c-33.8-18.2-63.5-44.899-82.6-78.5C229.1,715.4,221.8,669.9,225.3,626c3.6-46.5,18.4-91.6,38-133.7c17-36.2,37.8-70.5,60.899-103.1
	c19.7-27.6,40.9-54.1,64.101-78.9c0.399-0.3,1.2-1,1.7-1.3c-0.4,20.9,1.6,41.9,7.6,62c6.1,20.5,16.4,39.8,30.1,56.3
	c0.801,1,1.4,2.4,2.9,2.601c29.7-22.3,57.8-47.3,79.7-77.4C533,321.4,548.199,285,554,246.9C561.699,197.6,555.1,146.3,536.9,99.9z"
	/></svg> Show Firerisk</span><br>
<div class= "stationvalue">

Show fire risk level or feels like icon</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<label name="fireriskshow"></label>
        <select id="fireriskshow" name="fireriskshow" class="choose1">
            <option <?php if($fireriskshow=="false") echo "selected"; ?> >false</option>
            <option <?php if($fireriskshow=="true") echo "selected"; ?> >true</option>           
        </select><br>
     <span style="color:#777;">options<br></span>
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(67, 58, 80, 1.000)" stroke="rgba(67, 58, 80, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> true= shows firerisk chance in percentage value </span>
     <span style="color:#00A4B4;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> false= shows feels like icon</span>
    
    
     <div class="seperator"></div>
    
    <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> Footer Message</span><br>
 
    
 <div class= "stationvalue">
Set a short personal message that appears in the footer </div>
 <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<br> <span style="color:#777;">write a short message below</span>
    <input name="personalmessage" type="text" id="personalmessage" value="<?php echo $personalmessage ;?>" class="personal">

    <br> <br>
    
    <div class="seperator"></div>
    
    
     <span style="color:#F75C46;"> <img src="img/wunderground1.svg" width="100" /> <img src="img/darksky.svg" width="100" /> options</span> <br> 
     <div class= "stationvalue"> <img src="img/wunderground.svg" width="100" /> STATION ID  for PWS Historical Charts</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="WUID" type="text" id="WUID" value="<?php echo $id ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your <strong>weather underground</strong> station id example in capitals <strong>ISTANBUL161</strong></span>
    <p>
    
        <div class= "stationvalue">
<img src="img/darksky.svg" width="100" /> DarkSky API Key  for forecast Data </div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="wuapi" type="text" id="wuapi" value="<?php echo $apikey ;?>" class="chooseapi">
<br> <span style="color:#777;">enter your <strong>DarkSky</strong> <strong>API key</strong> this is the most common mistake made be careful when cut and paste often an hidden space is either inserted before or after causing the <strong>API key</strong> to fail. </span>
<P>

    <div class= "stationvalue">
<img src="img/darksky.svg" width="100" /> DarkSky API UNITS *important</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <label name="darkskyunit"></label>
        <select id="darkskyunit" name="darkskyunit" value="<?php echo $darkskyunit ;?>" class="choose1" >
          <option><?php echo $darkskyunit ;?></option>
            <option>ca</option> 
            <option>uk2</option>
             <option>us</option>
             <option>si</option>
            </select>

<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>CA</green> same as si, windSpeed km/h</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>UK2</green>  same as si,windSpeed mph</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>US</green> Imperial units (NON METRIC)</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>SI</green> units</span>
 <center> <span style="color:rgba(0, 154, 171, 1.000);">*IMPORTANT</span> NEW DARKSKY API (uses old script originally used in  2016) requires personal API KEY(MAY 30TH 2018) available via 
     <a href="https://darksky.net/dev/docs" title="https://darksky.net/dev/docs" target="_blank"> https://darksky.net/dev/docs</a></center>  
<P>

       
         <div class="seperator"></div>
    
    <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> *new 12th June 2018</span><span style="color:#777;"> Indoor Sensor optional module choose false if you have Purple Air Quality Hardware below or false if you want to display moonphase info</span> <br>  

<div class= "stationvalue">Indoor Sensor</div>    

     <label name="indoor"></label>
        <select id="indoor" name="indoor" class="choose1" >
           <option <?php if($indoor=="false") echo "selected"; ?> >false</option>
            <option <?php if($indoor=="true") echo "selected"; ?> >true</option>  
            </select>

<br>

 
    <div class="seperator"></div>
<span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Option for Temperature Module<span style="color:rgba(86, 95, 103, 1.000);"> <br>   
       <div class= "stationvalue"> No Options </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="rgba(86, 95, 103, 1.000)" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="temperaturemodule"></label>
        <select id="temperaturemodule" name="temperaturemodule" class="choose">  
          <option><?php echo $temperaturemodule ;?></option> 
            <option>temperature.php</option>  
            <option>temperaturein.php</option>        
           
           </select>
           <br></span>
           <span style="color:rgba(86, 95, 103, 1.000);">
           <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> *option temperature.php default without indoor temperature displayed<br>
         
    
    
    

   <p> 
        
    <div class="seperator"></div> 
    
       <span style="color:#F75C46;"> <img src=img/purpleair.svg width=25px > PURPLE AIR QUALITY INDEX option <BR>
     * <span style="color:#777;">IMPORTANT TO NOTE <span style="color:#F75C46;">FOR PURPLE AIR OWNERS ONLY</span> </span></span> <br> 
    
    
    
        
    <div class= "stationvalue"> <img src=img/purpleair.svg width=25px > Do you have Purple Air Quality Hardware (yes or no) </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="purpleairhardware" type="text" id="purpleairhardware" value="<?php echo $purpleairhardware ;?>" class="choose"> 
    <br> <span style="color:#777;">enter yes or no(lowercase)</span>
    <P>
    
    
    <div class= "stationvalue"> Purple Air ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="purpleair" type="text" id="purpleair" value="<?php echo $purpleairID ;?>" class="choose"> 
    
    
    
    
    
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:#777;">enter your <strong>PurpleAir </strong> station id example <strong><span style="color:rgba(0, 154, 171, 1.000);"> 1200</strong></span></span>
    
    
        
    
   
    
    
     
    <p><br>
    <div class="seperator"></div>
    
      
    <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> Nearby Metar Aviation Weather Options 
    
    <div class= "stationvalue">
Check<b>WX</b> Metar API KEY you need to sign up here for free API key <a href="https://www.checkwx.com/signup" title="https://www.checkwx.com/signup" target="_blank"><span style="color:#fff;">https://www.checkwx.com/signup</a> </div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="metarapikey" type="text" id="" value="<?php echo $metarapikey ;?>" class="chooseapi">
<br> <span style="color:#777;">enter your <strong>CheckWx</strong> <strong>API key</strong> this is the most common mistake made be careful when cut and paste often an hidden space is either inserted before or after causing the <strong>API key</strong> to fail. This key is important for displaying nearby metar data.</span>
<P>

  
<div class= "stationvalue"> Display Nearby Metar (yes or no) *English Only </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="metar" type="text" id="metar" value="<?php echo $metar ;?>" class="choose"> 
    <br> <span style="color:#777;">enter yes or no(lowercase) *note it only supports english language</span>
    
    <br> <br> 
    <div class= "stationvalue"> ICAO Code for  Metar Station 1  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="icao1" type="text" id="icao1" value="<?php echo $icao1 ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your nearby METAR stations  For example station 1 <span style="color:#F75C46;">LTBA</span> in capitals
    <br> <br> 
    
    <div class= "stationvalue"> ICAO Location  for  Metar Station 1  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="airport1" type="text" id="airport1" value="<?php echo $airport1 ;?>" class="choose"> 
     <br> <span style="color:#777;">enter your nearby METAR station 1 location for example <span style="color:#F75C46;">Istanbul,Turkey</span>
        <br> <br> 
    
    
    <div class= "stationvalue"> ICAO Aprox Distance  for  Metar Station 1 from your location  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="airport1dist" type="text" id="airport1dist" value="<?php echo $airport1dist ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your nearby METAR stations distance for example <span style="color:#F75C46;">26</span> or <span style="color:#F75C46;">5</span> do not enter any letters km or m 
    
    
    
    
    
    <p>
    
     <div class="seperator"></div>
    
    
    
     <span style="color:#F75C46;"> <img src="img/wflogo.svg" width="200px"/> <br>*API Data Only limited to 1 minute intervals</span> <br> 


<div class= "stationvalue">Do you have Weatherflow Station</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="weatherflowoption"></label>
        <select id="weatherflowoption" name="weatherflowoption" class="choose1" >
            <option><?php echo $weatherflowoption ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
        <strong> Select <span style="color:rgba(24, 25, 27, 0.8);">Yes</span> or <span style="color:rgba(0, 154, 171, 1.000);">No</span></strong><br>
        

    
    
    <br> 
     <div class= "stationvalue"> Weather-Flow STATION ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wfid" type="text" id="wfid" value="<?php echo $weatherflowID ;?>" class="choose"> 
    
    <br>
     <div class= "stationvalue"> Weather-Flow Device AIR ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wfairid" type="text" id="wfairid" value="<?php echo $weatherflowdairID ;?>" class="choose"> 
    <br>
    
    <div class= "stationvalue"> Weather-Flow Device SKY ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wfskyid" type="text" id="wfskyid" value="<?php echo $weatherflowdskyID ;?>" class="choose"> 
    <br>
     <br>
    <div class= "stationvalue">
Weatherflow Map Zoom</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <label name="weatherflowmapzoom"></label>
        <select id="weatherflowmapzoom" name="weatherflowmapzoom" value="<?php echo $weatherflowmapzoom ;?>" class="choose1" >
          <option><?php echo $weatherflowmapzoom ;?></option>
            <option>5</option> 
            <option>6</option>
             <option>7</option>
             <option>8</option>
             <option>9</option>
             <option>10</option>
             <option>11</option>
            </select>


    
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:rgba(24, 25, 27, 0.8);">enter your <strong>WeatherFlow </strong> station id example <strong><span style="color:rgba(24, 25, 27, 0.8);"> 1200</strong></span></span>
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:rgba(24, 25, 27, 0.8);">enter your <strong>WeatherFlow </strong> Device AIR ID example<strong><span style="color:rgba(24, 25, 27, 0.8);"> 1985</strong></span></span>
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:rgba(24, 25, 27, 0.8);">enter your <strong>WeatherFlow </strong> Device SKY ID example<strong><span style="color:rgba(24, 25, 27, 0.8);"> 1986</strong></span></span>

<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>Select Map Zoom level</green> 5-11</span>

    
    <p>
    
        
<P>


    


<div class="seperator"></div>
    
    
     <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Nexstorm Lightning your path to your data file NSRealtime.txt</span> <br> 
     <div class= "stationvalue">Nexstorm lightning Path url NSRealtime!</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="boltekfile" type="text" id="boltekfile" value="<?php echo $boltekfile ;?>" class="chooseapi"> 
    <br> <span style="color:#777;">enter your <strong>direct url path to your  </strong> Nexstorm data file <strong>http://www.yoursite.com/NSRealtime.txt</strong></span>
    <p>
    
        
<P>

    
       </div>
   
<div class="weatheroptions">

    <input type="submit" name="Submit" value="Save Configuration" class="button"><p><span style="color:#777;font-size:12px;padding:5px;line-height:16px;">
  <svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" /> </svg> Click "save configuration" if everything looks ok and dont forget to set the password.</span>
  





  </div>
  
  
 
   <p>
   <div class="weatheroptionssidebarbottom"><svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
</svg>
click save if everything looks ok above and dont forget to set the password.


<div class="weatherbottominfo">
<svg id="i-info" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(0, 154, 171, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>

now check the weather 
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>
</div>
</div>
   
    <span style="font-size:12px;color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> CUMULUS DASHBOARD EASY SETUP &copy; 2015-<?php echo date('Y');?> Dashboard <span style="color:rgba(67, 58, 80, 1.000);">CU</span>-<span style="color:rgba(0, 154, 171, 1.000);">AUG 30th 2018</span></span>

 
</form></div> 
</div>