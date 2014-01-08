    <div class="content-frame">
      <div id="title" class="th" align="center">Changes in Version 0.4.1.1</div>
      <div class="content-body">
        <div class="changeset">
          <h4>0.4.1.1pre.130821b</h4>
          <ul>
            <li>Added: New preference Tabmix Options > Events > Tab Opening > Focus/Select tabs that open from: Other applications.<br\>
            (extensions.tabmix.loadExternalInBackground), this preference is instead of the change from build 130817a.</li>
            <li>Fixed: Ctrl+Shift+T (Ctrl+F12) broken at the newest Nightly 20130819, after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=904460>bug 904460</a> landed, reopens same tab again and again. (Firefox 26+)</li>
            <li>Fixed: Incompatibility with Fast Dial - Open new tabs next to current one doesn't work.</li>
            <li>Fixed: Incompatibility with MR Tech's Toolkit 6.0.4.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130817a</h4>
          <ul>
            <li>Fixed: Remove closed windows and tabs from the current session when user apply Clear Recent History > browsing history.</li>
            <li>Fixed: Change browser.tabs.loadDivertedInBackground to apply only for links open from external application.<br/>see Tabmix Options > Events > Tab Opening > Focus/Select tabs that open from: <b>Other applications</b>.</li>
            <li>Fixed: Update compatibility with sage extension version 1.5.2.</li>
            <li>Fixed: Try to get tab title form page address bookmark before checking address without hash part.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130809a</h4>
          <ul>
            <li>Fixed: 'Illegal value' when calling method: [nsISessionStore::getClosedTabCount] on Firefox 23-24 with version 0.4.1.1pre.130731a.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130731a</h4>
          <ul>
            <li>Fixed: Tabmix (Session Manager) fails after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=897253>bug 897253</a> landed. (Firefox 25+)</li>
            <li>Fixed: Reload Left Tabs and Reload Right Tabs uses _tPos instead of tab index in the visible tabs.</li>
            <li>Fixed: Incompatibility with Tile Tabs 10.0, Tabmix functions for changing tab title doesn't work.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130722a</h4>
          <ul>
            <li>Fixed: Update Tabmix code after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=887515>bug 887515</a> - add ability to restore multiple tabs, Ctrl+Shift+T undo last closing operation.(Firefox 25+).</li>
            <li>Fixed: Incompatibility with treeStyleTab extension - when New Tab Button is on the left.</li>
            <li>Fixed: Links from tvguide.com always open in current tab.</li>
            <li>Fixed: Don't override onclick function from links inside iFrame. Some links from iFrame don't open properly in new tab when the link have an onclick function.</li>
            <li>Fixed: Incompatibility with Speed Dial, when closing last tab the function TMP_BrowserOpenTab don't get the 2nd argument.</li>
            <li>Fixed: Respect bug489729 extension preference disable_detach_tab.</li>
            <li>Fixed: Show warning about closing tabs when closing firefox with Firefox > Quit (goQuitApplication) if there is only one browser window.</li>
            <li>Fixed: Multi-row doesn't work when Theme Font & Size Changer extension installed, Override the extension's css rule #TabsToolbar{height:26px !important;}.</li>
            <li>Fixed: Open links with a target attribute in current tab not always working.</li>
            <li>Fixed: Follow up <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=851001>bug 851001</a> - close icon changed for Australis.</li>
            <li>Fixed: Firefox Interface garbled after HTML5 Fullscreen when tabbar is on bottom of the screen.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130625a</h4>
          <ul>
            <li>Fixed: Update Tabmix code after <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=866880>bug 866880</a> - Implement "Close Tabs to the Right" as a built-in feature. (Firefox 24+)</li>
            <li>Fixed: Checkboxes doesn't work in Tabmix options window with some themes.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130522a</h4>
          <ul>
            <li>Fixed: Session restore overwriting TMP update information tab.</li>
            <li>Fixed: Don't hide windows without arguments in single window mode.</li>
          </ul>
        </div>

        <div class="changeset">
          <h4>0.4.1.1pre.130504b</h4>
          <ul>
            <li>Fixed: Startup session does not restored (assignment to undeclared variable i).</li>
            <li>Fixed: Can no longer scroll tab rows when dragging tabs (regressed by 0.4.0.5pre.130114a).</li>
            <li>Fixed: Checkbox in options>Display>Tab>Auto Reload doesn't work.</li>
            <li>Fixed: Checkboxes are invisible under FT DeepDark theme.</li>
            <li>Fixed: Importing old preference file break Tabmix.</li>
          </ul>
        </div>

      </div>
    </div>
