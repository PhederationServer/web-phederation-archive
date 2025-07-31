<?php

function GetImgurUrl($id)
{
  //return "https://i.imgur.com/" . $id . ".png";
  return "https://imgur.com/" . $id;
}

function RenderServer($data)
{
  if ($data["number"] != "01")
  {
    echo "      <tr>";
    echo "        <td colspan=\"13\">&nbsp;</td>";
    echo "      </tr>";
  }
  echo "      <tr>";
  echo "        <th class=\"col01\">&#35;</th>";
  echo "        <th class=\"col02\">Update</th>";
  echo "        <th class=\"col03\">Update Name</th>";
  echo "        <th class=\"col04\">Start Date</th>";
  echo "        <th class=\"col05\">File Date</th>";
  echo "        <th class=\"col06\">Duration</th>";
  echo "        <th class=\"col07\">Version</th>";
  echo "        <th class=\"col08\">Size</th>";
  echo "        <th class=\"col09\">Seed</th>";
  echo "        <th class=\"col10\">Spawn</th>";
  echo "        <th class=\"col11\">Nether</th>";
  echo "        <th class=\"col12\">Biome</th>";
  echo "        <th class=\"col13\">Full</th>";
  echo "      </tr>";
  echo "      <tr>";
  echo "        <td class=\"col01\">" . $data["number"] . "</td>";
  echo "        <td class=\"col02\">" . $data["update"] . "</td>";

  if ($data["urlUpdate"] == "")
  {
    echo "        <td class=\"col03\">" . $data["updateName"] . "</td>";
  } else {
    echo "        <td class=\"col03\"><a href=\"" . $data["urlUpdate"] . "\" target=\"_blank\">" . $data["updateName"] . "</a></td>";
  }

  echo "        <td class=\"col04\">" . $data["dateStart"] . "</td>";
  echo "        <td class=\"col05\">" . $data["dateFile"] . "</td>";
  echo "        <td class=\"col06\">" . $data["duration"] . "</td>";

  if ($data["urlVersion"] == "")
  {
    echo "        <td class=\"col07\">" . $data["version"] . "</td>";
  } else {
    echo "        <td class=\"col07\"><a href=\"" . $data["urlVersion"] . "\" target=\"_blank\">" . $data["version"] . "</a></td>";
  }

  echo "        <td class=\"col08\">" . $data["size"] . "</td>";
  echo "        <td class=\"col09\">" . $data["seed"] . "</td>";

  if ($data["imgSpawn"] == "")
  {
    echo "        <td class=\"col10\">&nbsp;</td>";
  } else {
    echo "        <td class=\"col10\"><a href=\"" . $data["imgSpawn"] . "\" target=\"_blank\" title=\"Spawn\"><i class=\"fa-solid fa-image\"></i></a></td>";
  }

  if ($data["imgNether"] == "")
  {
    echo "        <td class=\"col10\">&nbsp;</td>";
  } else {
    echo "        <td class=\"col11\"><a href=\"" . $data["imgNether"] . "\" target=\"_blank\" title=\"Nether\"><i class=\"fa-solid fa-image\"></i></a></td>";
  }

  if ($data["imgBiome"] == "")
  {
    echo "        <td class=\"col12\">&nbsp;</td>";
  } else {
    echo "        <td class=\"col12\"><a href=\"" . $data["imgBiome"] . "\" target=\"_blank\" title=\"Biome\"><i class=\"fa-solid fa-image\"></i></a></td>";
  }

  if ($data["imgFull"] == "")
  {
    echo "        <td class=\"col13\">&nbsp;</td>";
  } else {
    echo "        <td class=\"col13\"><a href=\"" . $data["imgFull"] . "\" target=\"_blank\" title=\"Full\"><i class=\"fa-solid fa-image\"></i></a></td>";
  }

  echo "      </tr>";
  echo "      <tr>";
  echo "        <td class=\"col01links\" colspan=\"2\">";

  if ($data["download"] != "")
  {
    echo "          <a href=\"downloads/" . $data["download"] . "\" target=\"_blank\" title=\"Download\"><i class=\"fa-solid fa-download\"></i></a>";
  }

  if ($data["bluemap"] != "")
  {
    echo "          <a href=\"https://bluemap.phederation.davepusey.uk/#" . $data["bluemap"] . "\" target=\"_blank\" title=\"BlueMap\"><i class=\"fa-solid fa-map-location-dot\"></i></a>";
  }

  echo "        </td>";
  echo "        <td class=\"col03notes\" colspan=\"11\">" . $data["notes"] . "</td>";
  echo "      </tr>";
}

?>
