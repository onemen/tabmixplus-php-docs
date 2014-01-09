      <div id="title" class="th" align="center">Changes in Version 0.4.0.3</div>
      <div class="content-body evenbg">
        <div class="topic">
          <h4>0.4.0.3pre.120719a</h4>
          <ul>
            <li>Fixed: Dbl-click on the tabbar after closing tab with the button was blocked.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120707a</h4>
          <ul>
            <li>Fixed: Override position relative for selected tab when the tabbar is on the bottom. relative position causing corrupted look.</li>
            <li>Fixed: Incompatibility with Searchbar Autosizer.</li>
            <li>Fixed: Incorrect number of tabs in the warning when closing window with tabs and "Prevent last tab from closing" is on.</li>
            <li>Fixed: Hide close tab button on last tab when address is about:newtab. [Firefox 12+]</li>
            <li>Fixed: Follow up <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=763468>bug 763468</a> - Use about:privatebrowsing for new tabs opened in private browsing mode.<br/>
             Tabmix.newTabURL don't return the current BROWSER_NEW_TAB_URL.</li>
            <li>Fixed: When Firefox starts by opening external link and there are hidden tabs in groups, Tabmix Session manager doesn't select the external link tab.</li>
            <li>Fixed: Prevent Firefox from setting max-width on tabs when tabbar is in vertical mode, Incompatibility with TreeStyleTabs extension.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120627a</h4>
          <ul>
            <li>Fixed: Change in Firefox 14+ (<a href=https://bugzilla.mozilla.org/show_bug.cgi?id=730629>bug 730629</a>) broke Tabmix option to open new tab for "links to other sites".</li>
            <li>Fixed: Changes in Firefox 15+ (<a href=https://bugzilla.mozilla.org/show_bug.cgi?id=730629>bug 749628</a>) broke Tabmix middle-click on bookmark.</li>
            <li>Added: New option for Auto Reload - "Reload a tab regardless of its address" at Tabmix options > Events > Tab Features (default: true).</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120622a</h4>
          <ul>
            <li>Fixed: Incompatibility with classic compact theme & extension. (0.4.0.3pre.120620a)</li>
            <li>Fixed: Incompatibility with TreeStyleTabs extension. (0.4.0.3pre.120620a)</li>
            <li>Back-out: Handle left-clicks on links in Facebook.com. (0.4.0.3pre.120618a)</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120620a</h4>
          <ul>
            <li>Fixed: Prevents window flicker at start-up when layers.acceleration.disabled is false.</li>
            <li>Fixed: Tabs order reversed when Firefox restore last session. Aurora 15+</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120618a</h4>
          <ul>
            <li>Fixed: Update our start-up function to work after changes from <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=731926>bug 731926</a> - Refactor init/shutdown functions in browser.js. Firefox 16+</li>
            <li>Fixed: Handle left-clicks on links in Facebook.com.</li>
            <li>Fixed: "Open Links in New Tabs" doesn't appear in context menu on XML pages, when <b>a</b> is inside &lt;li&gt;&lt;p&gt;,<br/> &lt;li&gt;&lt;p&gt;&lt;a href='foo'&gt;FOO&lt;/a&gt;&lt;/p&gt;&lt;/li&gt;.</li>
            <li>Fixed: Incompatibility with FaviconizeTab, make sure to update multi-row view after faviconize.toggle.</li>
            <li>Fixed: Incompatibility with MouseControl extension MouseControl.newTab move tab again after Tabmix move it.</li>
            <li>Fixed: Incompatibility with TabLang extension, TabLang replace gBrowser.swapBrowsersAndCloseOther.</li>
            <li>Fixed: Get about:newtab sites title from bookmark when extensions.tabmix.titlefrombookmark is true.</li>
            <li>Fixed: When selecting different tab fast with the mouse sometimes original onxblmousedown can call gBrowser.tabContainer._selectNewTab function before our mousedown can prevent it.</li>
            <li>Added: Tabmix Options > Tab opening, UI for the new preference - browser.search.context.loadInBackground - to open search result from "Context menu search for" in background tab. Firefox 13+</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.3pre.120518a</h4>
          <ul>
            <li>Fixed: "Rename this tab regardless of its address" doesn't work unless you reset it while the panel is open.</li>
            <li>Fixed: Don't set about:newtab and about:blank as unread after session restore or reload.</li>
          </ul>
        </div>

      </div>
