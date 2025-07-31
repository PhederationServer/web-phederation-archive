<!DOCTYPE html>
<html>
  <head>
    <title>Phedran&apos;s Phederation 10 Years Screenshots</title>
    <link rel="stylesheet" href="../styles.css" />
  </head>
  <body>
    <h1>Phedran&apos;s Phederation 10 Years Screenshots</h1>

<?php
  $dirname = "phedran-1";

  $filelist = scandir($dirname, SCANDIR_SORT_ASCENDING);
  
  foreach($filelist as $filename)
  {
    if (substr($filename, 0, 2) == "20")
    {
      echo "<p align=\"center\"><strong>" . $filename . "</strong></p>";
      echo "<p align=\"center\"><a href=\"" . $dirname . "/" . $filename . "\" target=\"_blank\"><img src=\"" . $dirname . "/" . $filename . "\" class=\"screenshot\" /></a></p>";
    }
  }
?>

  </body>
</html>
