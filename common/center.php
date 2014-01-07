  <div id="center">
<?php
  if (strpos($_self, "index.php") > -1) {
    include("data/menu.php");
echo <<<html
    <iframe name="$name" class="content-frame" src="../common/viewpage.php?t=$topic&p=$page"
          marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>

html;
  }
  else if (strpos($_self, "viewpage.php") > -1) {
    include("../$FOLDER/data/menu.php");
    $filename = "../$FOLDER/data/$_GET[p].php";
    if (file_exists($filename)) {
      include($filename);
    }
    else  {
      echo "<div class='content-frame'>File $filename not found<div>";
    }
  }
  else {
    die ("Error: Unknown file $uri, can't load this page<br>");
  }
?>
  </div>
