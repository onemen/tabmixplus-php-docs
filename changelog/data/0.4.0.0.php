<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content=""/>
  <title>Tab Mix Plus - Changes in Version 0.4.0</title>
  <link rel="stylesheet" type="text/css" href="../../styles/tabmix.css"/>
  <script type="text/javascript" src="../../scripts/update.js"></script>
</head>
<body class="innerFrame">
  <?php include("../../common/header.php"); ?>
  <div id="center">
    <iframe name="tabmix-changelog-menu" class="menu-frame" src="menu.html"
            marginheight="0" marginwidth="0" scrolling="no" frameborder="0">
    </iframe>
    <div class="content-frame">
      <div class="th" align="center">Changes in Version 0.4.0</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.0pre.120207a</h4>
          <ul>
            <li>Fixed: Incompatibility with Custom Buttons extension.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.120204a</h4>
          <ul>
            <li>Fixed: Disable drag tab feature on tab close button as in default Firefox.</li>
            <li>Fixed: Incompatibility with <a href=https://addons.mozilla.org/en-US/firefox/addon/instantfox/>instantfox</a>.</li>
            <li>Fixed: Enter and Alt+Enter both open address in new tab in Firefox 10+.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.120130a</h4>
          <ul>
            <li>Fixed: Links radio is always selected when Tabmix options opened, event when different panel is visible.</li>
            <li>Fixed: Incompatibility with Auto Complete extensions [Firefox 4.0 - 9.0]</li>
            <li>Fixed: Update Tabmix to work with the new about:newtab [Firefox 12.0] In Tabmix Options > Events > New Tabs
                 <br/>set Load on new tabs to: New Tab Page/User Location set Address/Location to about:newtab</li>
           </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.120118a</h4>
          <ul>
            <li>Fixed: Can't update Boolean radiogroups in the option window (Drop indicator, Merge only current window with last focused).</li>
            <li>Fixed: Can't scroll horizontal tab bar by one tab.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.120114a</h4>
          <ul>
            <li>Fixed: Unable to detach tab when tab bar on bottom of the screen and I drop a tab to the content above the tab bar.</li>
            <li>Fixed: Override ColorfulTabs css rules that brake multy-row and dragging tabs.</li>
            <li>Fixed: Shift + enter in the address bar shouldn't opens new Firefox window. [Firefox 10.0+]</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.120102a</h4>
          <ul>
            <li>Fixed: Incompatibility with FoxTab, new tabs always open at the end, even when the preference is to "open new tab next to current one".</li>
            <li>Fixed: Links with onclick that starts with "javascript:" are broken.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111223a</h4>
          <ul>
            <li>Fixed: Don't set max-height on list all tabs popup.</li>
            <li>Fixed: Follow up to <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=707672>bug 707672</a> - openUILink[In] behavior should not be determined by browser.tabs.loadBookmarksInBackground.</li>
            <li>Fixed: Set max version to 12.0a1.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111220a</h4>
          <ul>
            <li>Fixed: Issue with Google Calendar, Tabmix.contentAreaClick.GoogleComLink don't identify http://www.google.com/calendar/render.</li>
            <li>Fixed: Update TabmixConvertSession to match changes in Session manager extension.</li>
            <li>Fixed: Can't set opacity to 0 in customize style dialog.</li>
            <li>Fixed: Tabs with url label have minimum width.</li>
            <li>Fixed: With TreeStyleTabs and vertical tabbar, new tab button is collapsed when TST enter overflow, it cause infinite loop of overflow/underflow.</li>
            <li>Added: New setting "Focus content when loading non-blank page" in closing last tab section. extensions.tabmix.selectLocationBar.afterLastTabClosed default true.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111215a</h4>
          <ul>
            <li>Fixed: Tools > Session Manager doesn't work in Ubuntu 11.10 when global menu is on.</li>
            <li>Fixed: Right Scroll box moves to left side in Ubuntu after tabbar changed to "tabs on top".</li>
            <li>Fixed: User can't open Tabmix preference file on OS X, if it was saved without ".txt" extension.</li>
            <li>Fixed: Images are hidden in Tabmix preference window on Ubuntu.</li>
            <li>Fixed: Tabs are hidden after print preview when tabbar is below content (windows XP).</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111209a</h4>
          <ul>
            <li>Fixed: Multi Row malfunction in Linux.</li>
            <li>Fixed: Unintended left margin, on the tabbar with pinned tabs, after switching scroll button position from Tabmix options dialog.</li>
            <li>Fixed: Close other tabs move the pointed tab to first position also when some protected tabs didn't closed.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111208a</h4>
          <ul>
            <li>Fixed: Ctrl-tab don't work properly after tabs opened in the background.</li>
            <li>Fixed: Window is sometimes transparent at start-up for s split second.</li>
            <li>Fixed: Multi-row not always change height after window re-sized.</li>
            <li>Fixed: Multi-row not always change height after tab closed.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111206b</h4>
          <ul>
            <li>Added: New option to turn smooth scroll on and off Options > Display > TabBar (form about:config: toolkit.scrollbox.smoothScroll).</li>
            <li>Fixed: Position all pinned tabs on one row.</li>
            <li>Fixed: middle-click functionality is broken If TMP_extensionsCompatibility.onDelayedStartup failed to run.
          Tabmix.isGMEnabled is undefined.</li>
            <li>Fixed: Tabmix is not Initialized properly when Gmail-manager call master password before start. multi-row messed-up.</li>
            <li>Fixed: Tabmix disturb pop-ups windows initialization.</li>
            <li>Fixed: Multi-row scroll up is faster than scroll down.</li>
            <li>Fixed: Dragging tab over right scroll buttons doesn't scroll.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111129a</h4>
          <ul>
            <li>Fixed: Update locals from http://www.babelzilla.org (preference without translation are in English).</li>
            <li>Fixed: Multi-row tababr have empty row when exiting tabs-in-title.</li>
            <li>Fixed: Session manager is not restoring existing saved session on start-up when save on exit is turn off.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111128a</h4>
          <ul>
            <li>Fixed: Empty row or missing row when toggling Tabs on Top status.</li>
            <li>Fixed: sometimes tabs not entering to multi-row when tab bar on title and tabs are flex
            (tab width fits tab title is off).</li>
            <li>Fixed: backout rename TMP_BrowserOpenTab to Tabmix.browserOpenTab
            It is causing incompatibility with speed-dial, fast dial and TabGgroupManager.</li>
            <li>Fixed: Add option to turn off Bug 465086 changes. In Mouse Gestures:
            When closing a tab, other tabs should not resize until cursor leaves tab toolbar.</li>
            <li>Fixed: tabs will not resize themselves automatically when going from more than 1 row of tabs to a single row.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111127a</h4>
          <ul>
            <li>Fixed: Session manager mishandle Unicode characters in URLs.</li>
            <li>Fixed: Problem with tab on bottom of the screen, when the tabbar is hidden at start-up.</li>
            <li>Fixed: Typo break middle-click on url bar history popup.</li>
            <li>Fixed: Middle-click on links not always work.</li>
            <li>Fixed: Fast-Dial compatibility update - Fast Dial no longer shows up when opening new (blank) tab.</li>
            <li>Fixed: shift-click on link should open the link in new window. alt-click should open Save As dialog.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.0pre.111126a</h4>
          <ul>
            <li>New: Implement smooth scroll.</li>
            <li>Remove support for Firefox 3.5 - 3.6.x.</li>
            <li><br\></li>
            <li>Fixed: Tabmix tab list ensure selected tab is visible in the list, highlight visible tabs (like Firefox 7.0+) and set maximum height.</li>
            <li>Fixed: Ctrl-Tab not working well when new tab open in the background after session restore.</li>
            <li>Fixed: Menus in Google.ru open in new tab.</li>
            <li>Fixed: Incompatibility with Webmail Notifier, tab open in the background even if Tabmix setting is to open tabs in foreground.</li>
            <li>Fixed: When using single window mode clicking on Firefox icon not focus the current window when it is minimized.</li>
            <li>Fixed: Clean drag&drop handler, fix after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=465186>Bug 465186</a> - When detaching a tab, open the new window at the drop location landed.</li>
            <li>Fixed: TreeStyleTab compatibility update.</li>
            <li>Fixed: TabGroupManager compatibility update.</li>
            <li>Fixed: VerticalTabs compatibility update.</li>
            <li>Fixed: Add comment in option dialog when treeStyleTab or VerticalTab are installed.</li>
            <li>Fixed: Session manager mishandle Unicode characters in URLs.</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
