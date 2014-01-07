  <div id="center">
<?php
  $data = strpos($_self, "data") > -1 ? "." : "data";
  include("$data/menu.php");

  if ($data == "data") {
echo <<<html
    <iframe name="$name" class="content-frame" src="data/viewpage.php?page=$page"
          marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>

html;
  }
  else {
    $filename = "$_GET[page].php";
    if (file_exists($filename)) {
      include($filename);
    }
    else  {
      echo "<div class='content-frame'>File $filename not found<div>";
    }
  }
?>
  </div>