<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Changes in Version 0.4.1.0</title>
  <link rel="stylesheet" type="text/css" href="../../styles/tabmix.css"/>
  <script type="text/javascript" src="../../scripts/update.js"></script>
</head>
<body class="innerFrame">
  <?php include("../../common/global.php"); ?>
  <div id="center">
    <iframe name="tabmix-changelog-menu" class="menu-frame" src="menu.html"
            marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <div class="content-frame">
      <div class="th" align="center">Changes in Version 0.4.1.0</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.1.0pre.130408a</h4>
          <ul>
            <li>Fixed: Session manager failed to restore after crash.</li>
            <li>Fixed: Incompatibility with colorfuletabs, can't set text color for tabs.</li>
            <li>Fixed: Firefox 23 Remove the ability to not "Always show the tab bar" (<a href=https://bugzilla.mozilla.org/show_bug.cgi?id=855370>bug 855370]</a>).</li>
            <li>Fixed: Update compatibility with Session manager extension version 0.8.</li>
            <li>Fixed: Warn about closing tabs not showing on last window and showing twice on other windows. (Firefox 20+)</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.6pre.130316a</h4>
          <ul>
            <li>Removed: Support for Firefox 4.0 - 10.0.</li>
            <li>Improved: Faster Options dialog, now using standard Firefox prefwindow.</li>
            <li>Fixed: Use loadInBackground when tab opens from text-link. Firefox 21+</li>
            <li>Fixed: Update support for Session manager extension version 0.8.</li>
            <li>Fixed: When in single window mode allow one normal window and one private window. (Firefox 20+)</li>
            <li>Fixed: When in single window mode, make sure that undoCloseWindow will open the closed window in the most recent non-private window. (Firefox 20+)</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
