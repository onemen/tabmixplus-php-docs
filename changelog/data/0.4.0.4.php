<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Changes in Version 0.4.0.4</title>
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
      <div class="th" align="center">Changes in Version 0.4.0.4</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.0.4pre.121231a</h4>
          <ul>
            <li>Fixed: Don't break Firefox when other extension change build-in function before us.</li>
            <li>Fixed: Update compatibility with X-notifier (aka WebMail Notifier) 2.9.13+.</li>
            <li>Fixed: When the option to "Middle-click or Control-click opens items in current tab" is enable, Ctrl-click on bookmarks & history menu item doesn't open the item address in the current tab.</li>
            <li>Fixed: Session manager breaks restart-less extensions Add-on initialization.</li>
            <li>Fixed: First aid after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=818800>bug 818800</a> Remove the global private browsing service in per-window PB.[Firefox 20.0]</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.4pre.121222b</h4>
          <ul>
            <li>Fixed: Open tab from bookmarks can stay in the background <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=768442>Bug 768442.</a> [Firefox 18+]</li>
            <li>Fixed: Incompatibility with AVG 2013 Security Toolbar.</li>
            <li>Fixed: Incompatibility with IE Tab V2 4.12.6.1.</li>
            <li>Fixed: Import/Export Tabmix setting doesn't work on Firefox 4.0-17.0.1 with version 0.4.0.4pre.121214a.</li>
            <li>Fixed: Firefox fails to start properly when few window open at once in single windows mode.</li>
            <li>Fixed: In Linux: last tab is flicker when hovering with the mouse over it, when close button on tab is visible only when hovering.</li>
            <li>Fixed: when new tab button is after last tab and we are in multi-row with only 1 tab in last row the button can flicker when selecting different tab if panorama was activated before.</li>
            <li>Fixed: Duplicate tab to new window is not working is some cases.</li>
            <li>Fixed: Middle click on a link not working when location.href is undefined.</li>
            <li>Fixed: Dragging tab to the tab-bar margin area (extra space on both tab-bar sides) can break Firefox.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.4pre.121214a</h4>
          <ul>
            <li>Fixed: Update compatibility with TreesStyleTabs and TabGroups manager.</li>
            <li>Fixed: Warn when closing window with multitabs doesn't work in Firefox 17+, <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=737792>(bug 737792).</a></li>
            <li>Fixed: Links from About Firefox window not working on Mac OS.</li>
            <li>Fixed: Can't open Tabmix's options window <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=769101>(bug 769101),</a>Firefox 18+.</li>
            <li>Fixed: Tabmix not compatible with 12/12/12 Nightly.</li>
            <li>Fixed: Some links opens twice <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=607280>(bug 607280),</a>Firefox 19+.</li>
            <li>Fixed: Encrypted Google's "Show search tools", open options in new tab. [Firefox 14+]</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0.4pre.120724a</h4>
          <ul>
            <li>Fixed:  Follow up <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=761723>bug 761723</a> implement toString of function objects by saving source. [Firefox 17+]</li>
            <li>Fixed: Google's "Show search tools", open options in new tab. [Firefox 14+]</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
