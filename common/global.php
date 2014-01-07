<?php
  include("version_data.php");
  $topic;
  $_self = $_SERVER["PHP_SELF"];
  if (isset($_GET[t]))
    $topic = $_GET[t];
  else if (strpos($_self, "changelog") > 0)
    $topic = 1;
  else if (strpos($_self, "troubleshooting") > 0)
    $topic = 2;

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
  default:
    $uri = $_SERVER["REQUEST_URI"];
    die ("Error: Unknown topic $uri, can't load this page<br>");
  } 

  $PATH = substr($_self, 0, strpos($_self, "support"))."support";
  include("header.php");
?>
