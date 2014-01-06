<?php
/*
///XXX call getPath also from  ondex.php - move it to common and rename it and make it also add the propper menu
improve it to detect automaticly the call path
*/
/*
$self = $_SERVER["PHP_SELF"];
echo "PHP_SELF: " .$_SERVER["PHP_SELF"]. "<br>";

 $pos = strpos($self, "/changelog");
echo "strpos $pos<br>";
echo "substr ". substr($self, 0, $pos) . "<br>";
*/
  function getPath($name) {
/*
    $PATH = str_ireplace("/changelog/data/$name.php", "", $_SERVER['SCRIPT_NAME']);
    $FOLDER = "/changelog";
    $TITLE = "Change Log";
    include("../../common/header.php");
*/
  }
///  global $PATH, $FOLDER, $TITLE;
  $FOLDER = "/changelog";
  $TITLE = "Change Log";
  $self = $_SERVER["PHP_SELF"];
  $PATH = substr($self, 0, strpos($self, $FOLDER));
/*
echo "PATH: $PATH<br>";
echo "FOLDER: $FOLDER<br>";
echo "TITLE: $TITLE<br>";
*/
  $root = strpos($self, "data") > 0 ? "../.." : "..";

///  include("../../common/header.php");
  include("header.php");

echo "LATEST: $LATEST<br>";

?>
