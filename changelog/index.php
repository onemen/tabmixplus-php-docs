<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Change Log</title>
  <link rel="stylesheet" href="../styles/tabmix.css" type="text/css"/>
</head>
<body>
<?php
  include("../common/global.php");
  $filename = "./data/$LATEST.php";
  if(!file_exists($filename)) {
    die ("<div class='content-frame'>File $filename not found<div>");
  }
  else  {
    echo '<iframe name="tabmix-changelog-content" class="content-frame" src="'.$filename.'"
            marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>';
  }
?>
  </div>

</body>
</html>
