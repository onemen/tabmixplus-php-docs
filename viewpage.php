<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus</title>
  <link rel="stylesheet" href="styles/tabmix.css" type="text/css"/>
  <script type="text/javascript" src="scripts/update.js"></script>
</head>
<body class="innerFrame">
<?php include("common/header.php"); ?>
  <div id="center">
<?php
  include("$FOLDER/menu.php");
  $filename = "$FOLDER/data/$_GET[p].php";
  if (file_exists($filename))
    include($filename);
  else
    echo "<div class='content-frame'>File $filename not found<div>";
?>
  </div>
</body>
</html>
