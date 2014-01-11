<?php
  include("version_data.php");

  $topic = $_GET[t];
  switch ($topic) {
  case 1:
    $FOLDER = "changelog";
    $TITLE = "Change Log";
    $name = "tabmix-changelog-content";
    $page = $LATEST;
    break;
  case 2:
    $FOLDER = "troubleshooting";
    $TITLE = "Troubleshooting";
    $name = "tabmix-troubleshooting-content";
    $page = "tabmix-does-not-work";
    break;
  case 3:
    $FOLDER = "help";
    $TITLE = "Help";
    $name = "tabmix-help-content";
    $page = "links";
    break;
  default:
    $uri = $_SERVER["REQUEST_URI"];
    die ("Error: Unknown topic $uri, can't load this page<br>");
  }
  $_self = $_SERVER["PHP_SELF"];
  $PATH = substr($_self, 0, strpos($_self, "support"))."support";

  $innerFrame = "";
  $viewPage = false;
  $filename = "";
  if (strpos($_SERVER["REQUEST_URI"], "viewpage") > -1) {
    $innerFrame = "innerFrame";
    $viewPage = true;
    $filename = "$FOLDER/data/$_GET[p].php";
  }

  include("template.html");
?>
