      <div id="title" class="th" align="center">Changes in Version 0.4.0.5</div>
      <div class="content-body evenbg">
        <div class="topic">
          <h4>0.4.0.5pre.130223a</h4>
          <ul>
            <li>Fixed: Fix compatibility with TGM, regression from build 130210a.</li>
            <li>Fixed: Close All tabs function need to close all tabs only in the current group.</li>
            <li>Fixed: Don't override user defined tab title on start-up.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.5pre.130217a</h4>
          <ul>
            <li>Fixed: Incompatibility with Organize Search Engines.
            <li>Fixed: Incompatibility with QuietUrl 1.6.0.12.
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.5pre.130210a</h4>
          <ul>
            <li>Fixed: Many Tabmix functions doesn't work with Nightly build 2013-02-09. (Firefox 21.0a1).</li>
            <li>Fixed: Sync shortcuts preference with keyConfig extension when installed.</li>
            <li>Fixed: Progress bar on tab is not visible on Australis theme.</li>
            <li>Fixed: Can't drag tabs when scroll buttons on both side when i have at least one pinned tab.</li>
            <li>Fixed: Tabmix show warning about used key when the other command is disabled.</li>
            <li>Fixed: build 130201b broke Tabmix on Firefox 4.0-13.0.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.5pre.130201b</h4>
          <ul>
            <li>Added: New UI to control keyboard shortcuts. Tabmix Options > Menu > <a href=http://tmp.garyr.net/help/#Menu_-_Shortcuts>Shortcuts</a>.</li>
            <li>Fixed: Can't close tabs after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=821859>bug 821859</a> and <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=649654>bug 649654</a> landed. (Firefox 21.0+)</li>
            <li>Fixed: Can't drag tabs when scroll buttons on both side in RTL language.</li>
            <li>Fixed: Drag indicator is in the wrong place when there are pined tabs and tabs are in one row with scroll buttons on both sides.</li>
            <li>Fixed: Incompatibility with ColorfulTabs.</li>
            <li>Fixed: Checking wrong variables for Session Manager add-on.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.5pre.130120a</h4>
          <ul>
            <li>Added: New option to use the old dragging style with the drop indicator, or press alt when beginning the drag to temporarily use the drop indicator (for moving tab in or out of pinned tabs).[Firefox 17+]</li>
            <li>Fixed: Dragging background tab not working with build 130114a. [Firefox 17+]</li>
            <li>Fixed: Add-on manager extension link not working when the Add-on manager opened as a window.</li>
            <li>Fixed: Typo in build 130114a cause reopen tab to open at first place instead of last place.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.5pre.130114a</h4>
          <ul>
            <li>Fixed: Enable tab move (part 1 for single row). When dragging a tab within the tab strip, move it directly instead of displaying a drop indicator. (<a href=https://bugzilla.mozilla.org/show_bug.cgi?id=783282>Bug 783282</a>) Firefox 17.0+</li>
            <li>Fixed: Implement PER_WINDOW_PRIVATE_BROWSING for session manager. (Firefox 20+)</li>
            <li>Fixed: Implement PER_WINDOW_PRIVATE_BROWSING for merge windows. (Firefox 20+)</li>
            <li>Fixed: Tabmix can't load dynamic rules (for changing tab width  style etc..) when ColorfulTabs, Lazarus and Status-4-Evar installed.</li>
            <li>Fixed: When restoring window with many tabs by sessionStore the scroll buttons sometimes left in collapsed state.</li>
            <li>Fixed: Incompatibility with ImTranslator extension.</li>
            <li>Fixed: When using non-default New Tab Page address, focus moves to address bar on new tab even if the preference is to focus page content.</li>
            <li>Fixed: Remove debug alert that was left over in About Firefox.</li>
          </ul>
        </div>

      </div>
