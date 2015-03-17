<?
$PageTitle = "2014 Camp Merz Gallery";
include "header.php";
?>

<h1>2014 Camp Merz Gallery</h1>
<div id="gallery">
  <?php
  $main_dir = "images/gallery-2014";

  $files = scandir($main_dir);
  foreach($files as $file) {
    // Ignore non-files
    if ($file == "." || $file == "..") continue;

    // Put results into an array
    $results[] = $main_dir . "/" . $file;
  }

  natcasesort($results);

  foreach($results as $result) {
    echo "<a href=\"$result\" class=\"fancybox\" rel=\"gallery2014\"><img src=\"$result\" alt=\"\"></a>\n";
  }
  ?>
</div>

<? include "footer.php"; ?>