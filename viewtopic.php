<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus</title>
  <link rel="stylesheet" href="styles/tabmix.css" type="text/css"/>
</head>
<body>
<?php include("common/header.php"); ?>
  <div id="center">
<?php
  $root = ".";
  include("$FOLDER/data/menu.php");
echo <<<html
    <iframe name="$name" class="content-frame" src="common/viewpage.php?t=$topic&p=$page"
          marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>

html;
?>
  </div>

</body>
</html>
