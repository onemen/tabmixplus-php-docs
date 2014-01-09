<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus</title>
  <link rel="stylesheet" href="styles/tabmix.css" type="text/css"/>
</head>
<body>
<?php 
  include("common/header.php");
  include("$FOLDER/menu.php");

echo <<<html

  <div id="wrapcontent">
    <iframe name="$name" class="content-frame" src="viewpage.php?t=$topic&p=$page"
          marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>
  </div>

html;
?>

</body>
</html>
