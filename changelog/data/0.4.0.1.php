<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Changes in Version 0.4.0.1</title>
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
      <div class="th" align="center">Changes in Version 0.4.0.1</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.0.1pre.120313a</h4>
          <ul>
            <li>Fixed: Ctrl-Tab show the tab list popup on other screen on dual monitor.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.1pre.120308a</h4>
          <ul>
            <li>Fixed: Multi-row tab bar in full-screen mode, the bottom of the tab bar become visible when the number of rows increase, the top of the page will be cut off when when the number of rows decrease</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.1pre.120302a</h4>
          <ul>
            <li>Fixed: Tabmix.getSingleWindowMode is not a function, in sidebar, Library and other non browser windows.</li>
            <li>Fixed: Links from Set up Sync dialog opens tabs in new window even when in single window mode.</li>
            <li>Fixed: Incompatibility with url-fixer extension.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.1pre.120227a</h4>
          <ul>
            <li>Fixed: Update multi-row background when tabs on top in Mac.</li>
            <li>Fixed: Middle clicking on Go button opens in current tab instead of a new tab. regression from 0.4.0pre.120204a.</li>
            <li>Fixed: Incompatibility with side-tabs extension.</li>
            <li>Fixed: When closing last tab, the tab disappears and is not replaced with a new one (Firefox 4.0 - 5.0) regresed from 0.4.0pre.111220a.</li>
            <li>Fixed: Scroll wheel fails to scroll bookmarks menu on Linux.</li>
            <li>Fixed: Tabmix fails to enter multi-row on start-up when Internet Download Manager extension installed.</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
