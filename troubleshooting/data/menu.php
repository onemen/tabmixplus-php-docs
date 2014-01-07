    <div class="menu-frame">
      <div class="th" align="center">Table of Contents</div>
      <div class="menu-body">
        <div class="inner-box">
<?php
  $page = "$data/viewpage.php?page";
  $target = 'target="tabmix-troubleshooting-content"';
echo <<<html
          <p><a href="$page=tabmix-does-not-work" $target>Tab Mix Plus does not work properly</a></p>
          <p><a href="$page=how-to-post" $target>How to post about a problem</a></p>
          <p><a href="$page=problem-after-update" $target>Problem after update</a></p>
          <p><a href="$page=preferences-wont-save" $target>Preferences won't save</a></p>
          <p><a href="$page=conflict-with-other-extension" $target>Conflict with other extension</a></p>

html;
?>
        </div>
      </div>
    </div>
