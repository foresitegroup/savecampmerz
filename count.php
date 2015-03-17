<?php
$PageTitle = "Counter";
include "header.php";

$file = "count.txt";

if (file_exists($file)) {
	$fp = fopen("$file", "r+");
	flock($fp, 1);
	$count = fgets($fp, 4096);
	fclose($fp);
} else {
	echo "Can't find file, check '\$file'<BR>";
}
?>

<br>
<h2>The SaveCampMerz Site has been visited <?php echo $count; ?> times.</h2>

<?php include "footer.php" ; ?>