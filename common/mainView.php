<?php
  include("version_data.php");

  $FOLDER = $TITLE = $name = $page = "";
  function setVars($_folder = "", $_page = "") {
    global $FOLDER, $name, $page;
    $FOLDER = $_folder;
    $name = "tabmix-$_folder-content";
    $page = $_GET[p] ? $_GET[p] : $_page;
  }
  
  $topic = $_GET[t];
  switch ($topic) {
  case 1:
    $TITLE = "Change Log";
    setVars("changelog", $LATEST);
    break;
  case 2:
    $TITLE = "Troubleshooting";
    setVars("troubleshooting", "tabmix-does-not-work");
    break;
  case 3:
    $TITLE = "Help";
    setVars("help", "links");
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
    $filename = "$FOLDER/data/$page.html";
  }

  include("main.html");
?>
