<?php
  $_self = $_SERVER["PHP_SELF"];
  if (strpos($_self, "changelog") > 0) {
    $FOLDER = "/changelog";
    $TITLE = "Change Log";
  }
  else if (strpos($_self, "troubleshooting") > 0) {
    $FOLDER = "/troubleshooting";
    $TITLE = "Troubleshooting";
  }
  else {
    echo "Error: Unknown path $_self, can't find images<br>";
  }
  $PATH = substr($_self, 0, strpos($_self, $FOLDER));
  include("header.php");

  $data = strpos($_self, "data") > -1 ? "." : "data";
  echo '  <div id="center">
';
  include("$data/menu.php");
?>
