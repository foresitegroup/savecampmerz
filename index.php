<?
$PageTitle = "";
include "header.php";
?>

<div id="fireworks">
  <h1>Jim Butterfield (1932-2015)<br><div style="font-size: 80%; line-height: 1.2em; padding: 0 1em;">Thank you for your years of dedication in preserving the legacy of Frank Merz in the establishment of Camp Merz.</div></h1>
</div>
<!-- <div class="cycle-slideshow" data-cycle-timeout="6000" data-cycle-speed="1500">
  <img src="images/slide1.jpg" alt="">
  <img src="images/slide2.jpg" alt="">
  <img src="images/slide3.jpg" alt="">
  <img src="images/slide4.jpg" alt="">
</div> -->

<?php
$file = "count.txt";

if (file_exists($file)) {
  $fp = fopen("$file", "r+");
  flock($fp, 1);
  $count = fgets($fp, 4096);
  $count += 1; 
  fseek($fp,0);
  fputs($fp, $count);
  flock($fp, 3);
  fclose($fp);
} else {
  echo "Can't find file, check '\$file'<BR>";
}
?>

<?php include "footer.php"; ?>