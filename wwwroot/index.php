<!DOCTYPE html>
<html>
  <head>
    <title>Phederation Server Archive</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/fontawesome.css" />
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/solid.css" />
  </head>
  <body>
    <h1>Phederation Server Archive</h1>

    <table id="serverlist">

<?php
  require_once("inc/functions.inc.php");
  require_once("inc/worlds/world01.inc.php");
  require_once("inc/worlds/world02.inc.php");
  require_once("inc/worlds/world03a.inc.php");
  require_once("inc/worlds/world03b.inc.php");
  require_once("inc/worlds/world04a.inc.php");
  require_once("inc/worlds/world04b.inc.php");
  require_once("inc/worlds/world05.inc.php");
  require_once("inc/worlds/world06.inc.php");
  require_once("inc/worlds/world07.inc.php");
  require_once("inc/worlds/world08.inc.php");
  require_once("inc/worlds/world09.inc.php");
  require_once("inc/worlds/world10.inc.php");
  require_once("inc/worlds/world11.inc.php");
  require_once("inc/worlds/world12.inc.php");
  require_once("inc/worlds/world13.inc.php");
  require_once("inc/worlds/world14.inc.php");
  require_once("inc/worlds/skyblock.inc.php");

  RenderServer($data["world01"]);
  RenderServer($data["world02"]);
  RenderServer($data["world03a"]);
  RenderServer($data["world03b"]);
  RenderServer($data["world04a"]);
  RenderServer($data["world04b"]);
  RenderServer($data["world05"]);
  RenderServer($data["world06"]);
  RenderServer($data["world07"]);
  RenderServer($data["world08"]);
  RenderServer($data["world09"]);
  RenderServer($data["world10"]);
  RenderServer($data["world11"]);
  RenderServer($data["world12"]);
  RenderServer($data["world13"]);
  RenderServer($data["world14"]);
  RenderServer($data["skyblock"]);
?>

    </table>
    <p class="footer">Data gathering, research, and images by: Phedran<br />Web page and BlueMap configuration by: DP_Dave</p>
  </body>
</html>
