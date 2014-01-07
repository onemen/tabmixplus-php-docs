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
  else {
    die ("Error: Unknown file $uri, can't load this page<br>");
  }
?>
  </div>
