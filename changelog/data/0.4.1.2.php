<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Changes in Version 0.4.1.2</title>
  <link rel="stylesheet" href="../../styles/tabmix.css" type="text/css"/>
  <script type="text/javascript" src="../../scripts/update.js"></script>
</head>
<body class="innerFrame">
  <?php include("../../common/global.php"); ?>
    <div class="content-frame">
      <div class="th" align="center">Changes in Version 0.4.1.2</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.1.2pre.131019a2</h4>
          <ul>
            <li>Fixed: <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=900910>Bug 900910</a> broke Tabmix on Firefox 25.0b9. [Firefox 25]</li>
            <li>Fixed: Update "Recently Closed Windows" code after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=926928>bug 926928</a> landed. [Firefox 27]</li>
            <li>Fixed: Shortcuts that was disabled from Tabmix Options > Menu > Shortcuts are enabled again after Firefox start.</li>
            <li>Fixed: Tab panel on main option window is not fully visible on PaleMoon 24.</li>
            <li>Fixed: Two close button are visible on the current tab (with ColorfulTabs installed).</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.2pre.131013a1</h4>
          <ul>
            <li>Fixed: Session restore not always working when restoring to existing window.</li>
            <li>Fixed: Links in my.yahoo.com not opening in new tab.</li>
            <li>Fixed: Selected tab not always visible when entering overflow, after session restore, exit print preview, etc...</li>
            <li>Fixed: Multi-row is broken when download link open new tab a the end.</li>
            <li>Fixed: Incompatibility with InstantFox - address bar url not opening a new tab.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.2pre.131006a2</h4>
          <ul>
            <li>Fixed: Don't open new tab when the link protocol is not http, https or about.</li>
            <li>Fixed: New option to hide "autoreload", "protected", "locked" icons on pinned tabs.</li>
            <li>Fixed: Use "Close Tabs to the Right" and "Close Tabs to the Left" in our options window.</li>
            <li>Fixed: Last tab is visible instead of selected tab isn't visible when Firefox starts with many tabs.</li>
            <li>Fixed: Automatically close blank tab if it was opened by a link that start download a file, when "Prevent blank tabs when downloading files" is on. 2nd try, fixed - some download open twice, some download canceled.</li>
            <li>Fixed: Buttons on Clear History when Firefox close dialog are not visible, Don't add our Tabmix's checkbox to a row that already have 2 items.</li>
            <li>Fixed: Don't change default behavior for links that point to exiting frame in the current page.</li>
            <li>Fixed: Incompatibility with MR Tech's Toolkit 6.0.4 - when Firefox starts all the tabs from last session are blank.</li>
            <li>Fixed: Firefox crashed when last session contained non-ASCII text.</li>
            <li>Backed out: Change from 0.4.1.1pre.130722a - Show warning about closing tabs when closing Firefox with Firefox > Quit (goQuitApplication) if there is only one browser window.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.2pre.130929a</h4>
          <ul>
            <li>Fixed: Replace "Close Right Tabs" to "Close Tabs to the Right" in tab context menu.</li>
            <li>Fixed: Pinned tabs removed when Firefox starts without restoring tabs and windows.</li>
            <li>Fixed: Incompatibility with InstantFox.</li>
            <li>Fixed: Correctly handle non-ASCII text in Shortcuts preference.</li>
            <li>Fixed: Automatically close blank tab if it was opened by a link that start download a file, when "Prevent blank tabs when downloading files" is on.</li>
            <li>Added: option to sync Tabmix preferences, enable it in Tabmix Options > Preferences button. the preferences only sync if you enabled sync in Firefox Options.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.2pre.130918a</h4>
          <ul>
            <li>Fixed: Incompatibility with OmniSideBar extension.</li>
            <li>Fixed: Missing label "Undo Close Tab" in main context menu with build 130914a.</li>
            <li>Fixed: Session manager open the home page after the restored session when Firefox starts. [Firefox 24.]</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.2pre.130914a</h4>
          <ul>
            <li>Fixed: Other extensions can cause delay to some of the events Tabmix uses for initialization.</li>
            <li>Fixed: Don't load duplicate tabs from "Open Links in New Tabs".</li>
            <li>Fixed: Incompatibility with PrivateTab extension.</li>
            <li>Fixed: Add an option to disable mouse scroll on tabbar completely.</li>
            <li>Fixed: Ctrl+Shift+T no longer opening new tabs when using Firefox Aurora 25.0a2 from 2013-09-12+.</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
