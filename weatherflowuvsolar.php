<?php 
//weather34 weatherflow uv module 27th September 2018 //

include_once('livedata.php');header('Content-type: text/html; charset=utf-8');
include_once('weatherflow.php');
?>

<div class="updatedtime"><span><?php if(file_exists($file1)&&time()- filemtime($file1)>900)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo date($timeFormat,$weatherflow["time"]);?></div>
<div class="solaricon"><?php if($weatherflow["solar"]<1){echo $uvdark ;} else echo $uvnormal;?></div><div class="solaricon1"><?php if($weatherflow["solar"]<1){echo $uvdark ;} else echo $uvnormal;?></div>
<div class="weather34solarword">Solar Radiation </div><div class="weather34solarvalue"><div class="weather34solarvalue1"><span>

<?php if ($weatherflow["solar"]==0){ echo "<div class=circlelux><span>".$nosun."</span></div>";}else echo "<div class=circlelux><span>W/m&sup2</span>".$weatherflow["solar"];?></span></div></div></div>

   <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weatherflow["solar"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weatherflow["solar"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weatherflow["solar"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weatherflow["solar"]>700){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weatherflow["solar"]>600){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weatherflow["solar"]>500){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weatherflow["solar"]>400){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weatherflow["solar"]>300){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weatherflow["solar"]>200){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weatherflow["solar"]>100){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weatherflow["solar"]>50){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weatherflow["solar"]>0){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>

<div class="weather34uvpyramid">
<svg id="weather34 uvindex pyramid module" width="100pt" height="100pt" viewBox="0 0 980 792" version="27 Sep 2018">
<path fill="<?php if ($weatherflow["uv"]>=11){echo 'rgba(116, 100, 192, 0.8)';}	else echo 'currentcolor';?>" d=" M 394.17 49.10 C 458.08 48.90 522.01 48.99 585.92 49.06 C 589.55 57.30 594.93 64.39 598.17 72.85 C 601.66 76.94 603.46 82.25 605.95 87.01 C 528.65 86.97 451.34 87.04 374.03 86.97 C 380.77 74.37 386.86 61.39 394.17 49.10 Z" />
<path fill="<?php if ($weatherflow["uv"]>=10){echo 'rgba(116, 100, 192, 0.8)';}	else echo 'currentcolor';?>" d=" M 365.36 103.21 C 448.45 102.86 531.56 102.87 614.65 103.20 C 618.01 109.63 621.86 115.83 624.49 122.62 C 628.78 128.60 631.63 135.53 635.15 141.92 C 538.38 142.05 441.62 142.06 344.85 141.92 C 348.40 135.23 351.34 128.01 355.89 121.92 C 358.38 115.35 361.97 109.32 365.36 103.21 Z" />
<path fill="<?php if ($weatherflow["uv"]>=9){echo 'rgba(237, 73, 71, 0.8)';} else echo 'currentcolor';?>"d=" M 336.08 158.04 C 438.69 157.99 541.30 157.93 643.91 158.07 C 648.49 167.73 654.44 176.70 658.49 186.62 C 661.14 190.43 663.71 194.47 665.13 198.93 C 548.38 199.05 431.62 199.05 314.87 198.92 C 321.04 184.87 329.43 171.89 336.08 158.04 Z" />
<path fill="<?php if ($weatherflow["uv"]>=8){echo 'rgba(237, 73, 71, 0.8)';} else echo 'currentcolor';?>" d=" M 306.28 215.17 C 428.76 214.89 551.28 214.88 673.75 215.18 C 682.09 230.39 689.68 245.75 698.02 260.98 C 559.35 261.01 420.67 261.02 282.00 260.97 C 290.25 245.78 298.01 230.35 306.28 215.17 Z" />
<path fill="<?php if ($weatherflow["uv"]>=7){echo '#ff8841';} else echo 'currentcolor';?>" d=" M 273.33 277.19 C 417.80 276.86 562.31 276.91 706.77 277.16 C 715.16 293.95 724.34 310.34 733.02 326.99 C 571.02 327.01 409.02 327.02 247.03 326.98 C 255.55 310.16 264.54 293.84 273.33 277.19 Z" />
<path fill="<?php if ($weatherflow["uv"]>=6){echo '#ff8841';} else echo 'currentcolor';?>" d=" M 238.32 343.18 C 406.12 342.88 573.96 342.88 741.75 343.18 C 747.04 352.67 751.46 362.64 756.99 372.00 C 760.56 380.21 766.14 387.46 769.13 395.93 C 583.06 396.05 396.98 396.05 210.91 395.93 C 219.12 377.94 229.43 360.88 238.32 343.18 Z" />
<path fill="<?php if ($weatherflow["uv"]>=5){echo '#ff8841';} else echo 'currentcolor';?>"d=" M 201.31 412.18 C 393.79 411.86 586.31 411.91 778.78 412.15 C 786.97 430.19 797.63 447.15 806.12 464.93 C 595.39 465.05 384.65 465.04 173.92 464.94 C 182.32 447.09 192.76 430.04 201.31 412.18 Z" />
<path fill="<?php if ($weatherflow["uv"]>=4){echo 'rgba(237, 167, 8, 0.8)';} else echo 'currentcolor';?>" d=" M 165.17 481.10 C 381.75 480.90 598.33 481.00 814.91 481.05 C 822.14 494.55 829.45 508.01 836.33 521.71 C 839.46 527.32 843.00 532.83 845.13 538.93 C 608.38 539.05 371.62 539.05 134.86 538.92 C 138.62 529.13 144.48 520.39 149.05 510.99 C 154.83 501.25 159.22 490.74 165.17 481.10 Z" />
<path fill="<?php if ($weatherflow["uv"]>=3){echo 'rgba(237, 167, 8, 0.8)';} else echo 'currentcolor';?>" d=" M 125.36 555.16 C 368.45 554.89 611.55 554.89 854.64 555.16 C 857.46 560.61 860.95 565.93 863.17 571.85 C 867.36 577.00 869.52 583.57 872.56 589.48 C 877.07 594.10 877.62 601.36 881.96 606.05 C 884.38 610.97 887.32 615.73 889.13 620.93 C 623.06 621.05 356.98 621.05 90.91 620.93 C 94.59 610.88 100.90 602.01 105.31 592.28 C 110.35 586.23 111.63 577.81 116.82 571.85 C 119.04 565.93 122.54 560.61 125.36 555.16 Z" />
<path fill="<?php if ($weatherflow["uv"]>=2){echo 'rgba(146, 177, 42, 0.8)';} else echo 'currentcolor';?>" d=" M 81.31 637.18 C 353.79 636.86 626.31 636.91 898.78 637.16 C 906.01 653.63 915.67 668.54 923.22 684.82 C 927.18 690.19 930.08 696.53 932.10 702.93 C 637.39 703.05 342.67 703.04 47.96 702.93 C 49.21 696.12 53.57 689.92 57.16 684.13 C 64.21 667.89 74.16 653.32 81.31 637.18 Z" />
<path fill="<?php if ($weatherflow["uv"]>0){echo 'rgba(146, 177, 42, 0.8)';} else echo 'currentcolor';?>" d=" M 37.24 719.17 C 147.49 718.78 257.75 719.11 368.00 719.00 C 559.56 719.13 751.13 718.75 942.69 719.19 C 954.83 742.74 967.22 766.17 980.00 789.39 L 980.00 792.00 L 0.00 792.00 L 0.00 789.37 C 12.76 766.16 25.41 742.86 37.24 719.17 Z" />
</svg>
</div>
 <div class="weather34iuvrate"><?php 
 if ($weatherflow["uv"]>=10){echo  "<uv10>",number_format($weatherflow["uv"] ,1),"</<uv10>";}
	else if ($weatherflow["uv"]>=8){echo "<uv8>",number_format($weatherflow["uv"],1), "</<uv8>";}
	else if ($weatherflow["uv"]>=5){echo "<uv5>",number_format($weatherflow["uv"],1), "</uv5>";}
	else if ($weatherflow["uv"]>=3){echo "<uv3>",number_format($weatherflow["uv"],1), "</uv3>";}
	else if ($weatherflow["uv"]>=1){echo  "<uv0>",number_format($weatherflow["uv"],1), "</uv0>";}
	else if ($weatherflow["uv"]>0){echo  "<uv0>",number_format($weatherflow["uv"],1), "</uv0>";}
	else if ($weatherflow["uv"]==0){echo "<uv0>",number_format($weatherflow["uv"],0), "</uv0>";}
?>
 </span>
 </div><div class=uvspan>  &nbsp;&nbsp;&nbsp;UVINDEX</div></div>  
 
 
 <div class="weather34luxword">Brightness</div>
 <?php $lux = number_format($weatherflow["solar"]/0.0084555,0, '.', '');?>
    <div class="weather34luxvalue"><span><?php  
	if ($weatherflow["solar"]==0){ echo "<div class=circlelux>".$nosun."</div>";}
	else if ($lux>99999) {echo "<div class=circlelux><span>Lux</span>".number_format($lux/1000,0). "K";}	
	else echo "<div class=circlelux><span>Lux</span>".$lux;?> 
</span>
</div></div></div>
 
 <div class="weather34-luxrate-bar"> 
<svg id="weather34 lux rate svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($lux>110000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($lux>90000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($lux>80000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($lux>70000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($lux>60000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($lux>50000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($lux>40000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($lux>30000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($lux>20000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($lux>10000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($lux>5000){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($lux>0){echo " #ff8841";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
 </div>