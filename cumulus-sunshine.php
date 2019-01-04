<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');$software    = 'Cumulus <span>Software</span>';$designedfor    = '<br>For Cumulus';?>
<div class="cumulussunshine"><?php echo 'Sunshine';?> 
<?php echo "<cumulussunshinespan>",$weather["sunshine"]."</cumulussunsunespan> <cumulussunshinesuptemp>  hrs  </cumulussunshinesuptemp>\n";?>
</div>


<div class="cumulusisitsunny">Is it sunny?<cumulusisitsunnyspan> <?php 


if ($weather["sunny"] == 1){ echo '<iconcoloryes> <svg width="40px" height="40px" viewBox="0 0 80 80" >
<g>
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 39.64 0.00 L 41.31 0.00 C 41.33 5.71 41.32 11.42 41.32 17.12 L 39.63 17.11 C 39.63 11.41 39.62 5.70 39.64 0.00 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 16.10 16.98 C 16.24 16.53 16.52 15.62 16.66 15.17 C 19.14 17.77 21.90 20.12 24.16 22.93 L 24.22 24.76 C 21.28 22.43 18.61 19.76 16.10 16.98 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 57.12 22.70 C 59.46 20.12 62.00 17.73 64.43 15.23 C 64.57 15.69 64.85 16.60 65.00 17.05 C 62.64 19.64 60.09 22.05 57.62 24.53 C 57.49 24.07 57.24 23.16 57.12 22.70 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 37.38 20.49 C 47.18 18.72 57.45 25.69 59.71 35.32 C 63.05 46.90 53.07 60.05 40.98 59.85 C 31.01 60.35 21.71 51.99 20.85 42.09 C 19.52 32.00 27.36 21.93 37.38 20.49 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 0.00 39.35 C 5.81 38.87 11.63 39.18 17.45 39.03 C 17.48 39.52 17.53 40.50 17.55 40.98 C 11.70 41.02 5.85 41.09 0.00 40.80 L 0.00 39.35 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 63.55 39.05 C 69.03 39.12 74.52 38.95 80.00 39.29 L 80.00 40.78 C 74.49 41.10 68.97 41.04 63.45 40.98 C 63.47 40.49 63.52 39.53 63.55 39.05 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 16.06 63.80 C 18.46 61.10 21.00 58.52 23.81 56.23 C 23.96 56.56 24.27 57.22 24.43 57.55 C 21.96 60.34 19.23 62.90 16.61 65.55 C 16.47 65.11 16.20 64.24 16.06 63.80 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 57.33 57.26 L 57.90 56.49 C 60.41 58.89 62.95 61.28 65.20 63.93 L 64.79 65.34 C 61.81 63.25 59.47 60.42 56.92 57.86 L 57.33 57.26 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 39.63 62.92 L 41.32 62.91 C 41.32 68.61 41.32 74.30 41.32 80.00 L 39.64 80.00 C 39.62 74.31 39.63 68.61 39.63 62.92 Z" />
</g>
</svg><iconcoloryes>
';}
else {echo ' <iconcolorno><svg width="40px" height="40px" viewBox="0 0 80 80" fill="currentcolor" stroke="currentcolor">
<g>
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 39.64 0.00 L 41.31 0.00 C 41.33 5.71 41.32 11.42 41.32 17.12 L 39.64 17.13 C 39.63 11.42 39.62 5.71 39.64 0.00 Z" />
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 39.64 62.89 L 41.32 62.90 C 41.32 68.60 41.32 74.30 41.32 80.00 L 39.64 80.00 C 39.62 74.30 39.63 68.59 39.64 62.89 Z" />
</g>
<g>
<path fill="currentcolor" stroke="currentcolor" opacity="1.00" d=" M 51.06 23.23 C 55.65 18.54 60.31 13.94 64.88 9.23 C 66.21 10.68 67.58 12.09 68.95 13.51 C 64.38 17.99 59.89 22.57 55.36 27.09 C 54.96 27.49 54.56 27.89 54.16 28.29 C 45.68 36.78 37.20 45.27 28.73 53.77 C 28.43 54.05 27.84 54.63 27.54 54.92 C 23.72 58.88 19.65 62.62 16.03 66.77 C 14.73 65.29 13.35 63.88 11.92 62.54 C 15.86 58.62 19.78 54.66 23.71 50.72 C 24.16 50.27 24.61 49.82 25.06 49.36 C 33.28 41.12 41.45 32.83 49.69 24.61 C 50.15 24.15 50.61 23.69 51.06 23.23 Z" />
</g>
<g id="#c7c7c7e2">
<path fill="#c7c7c7" opacity="0.89" d=" M 15.92 15.94 L 16.99 15.70 C 19.65 17.84 22.19 20.40 24.32 23.09 L 24.11 24.64 C 21.09 22.50 18.63 19.68 16.06 17.05 L 15.92 15.94 Z" />
</g>
<g id="#b9b9b8d2">
<path fill="#b9b9b8" opacity="0.82" d=" M 21.50 34.37 C 23.63 27.35 29.86 21.71 37.14 20.56 C 41.92 19.48 46.86 20.96 51.06 23.23 C 50.61 23.69 50.15 24.15 49.69 24.61 C 42.68 20.60 33.20 21.65 27.66 27.67 C 21.96 33.28 21.36 42.50 25.06 49.36 C 24.61 49.82 24.16 50.27 23.71 50.72 C 20.79 45.85 19.92 39.84 21.50 34.37 Z" />
</g>
<g id="#bebebdd7">
<path fill="#bebebd" opacity="0.84" d=" M 54.16 28.29 C 54.56 27.89 54.96 27.49 55.36 27.09 C 58.39 30.66 60.41 35.25 60.19 40.00 C 60.52 48.86 53.78 57.19 45.25 59.22 C 39.12 61.04 32.29 59.04 27.54 54.92 C 27.84 54.63 28.43 54.05 28.73 53.77 C 32.40 56.12 36.52 58.23 41.01 57.95 C 49.97 57.76 58.13 49.99 58.22 40.93 C 58.62 36.33 56.74 31.98 54.16 28.29 Z" />
</g>
<g id="#cdcccce8">
<path fill="#cdcccc" opacity="0.91" d=" M 0.00 39.45 C 3.27 38.70 6.64 39.06 9.96 38.98 C 12.88 39.10 16.04 38.44 18.67 40.07 C 12.72 42.01 6.18 40.71 0.00 40.81 L 0.00 39.45 Z" />
</g>
<g id="#d2d2d2ee">
<path fill="#d2d2d2" opacity="0.93" d=" M 63.54 39.06 C 69.02 39.03 74.53 38.77 80.00 39.32 L 80.00 40.65 C 74.52 41.37 68.96 40.94 63.45 40.95 C 63.47 40.47 63.52 39.53 63.54 39.06 Z" />
</g>
<g id="#bdbdbdd7">
<path fill="#bdbdbd" opacity="0.84" d=" M 56.66 56.76 C 60.36 57.08 62.16 61.21 64.89 63.35 C 64.98 63.84 65.14 64.84 65.22 65.33 C 61.71 63.47 58.57 60.24 56.66 56.76 Z" />
</g>
</svg><iconcolorno>

' ;}?></span>
</div>
