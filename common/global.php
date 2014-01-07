<?php
  include("version_data.php");
  $_self = $_SERVER["PHP_SELF"];
  if (strpos($_self, "changelog") > 0) {
    $FOLDER = "/changelog";
    $TITLE = "Change Log";
    $name = "tabmix-changelog-content";
    $page = $LATEST;
  }
  else if (strpos($_self, "troubleshooting") > 0) {
    $FOLDER = "/troubleshooting";
    $TITLE = "Troubleshooting";
    $name = "tabmix-troubleshooting-content";
    $page = "tabmix-does-not-work";
  }
  else {
    echo "Error: Unknown path $_self, can't find images<br>";
  }
  $PATH = substr($_self, 0, strpos($_self, $FOLDER));
  include("header.php");
?>
