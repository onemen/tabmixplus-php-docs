    <div class="content-frame">
      <div id="title" class="th" align="center">Changes in Version 0.4.0.2</div>
      <div class="content-body evenbg">
        <div class="topic">
          <h4>0.4.0.2pre.120507a</h4>
          <ul>
            <li>Added: New style for unloaded tabs.</li>
            <li><br\></li>
            <li>Fixed: Multi-row isn't working properly in Firefox 12+ when there is no close button on the tabs.</li>
            <li>Fixed: Get title for unloaded tab from SessionStore.</li>
            <li>Fixed: Compact Menu 2 v4.3.1 blocking loadOverlay from loading Rename tab panel.</li>
            <li>Fixed: When browser.preferences.instantApply is false some setting isn't updating without restart. (Regression from 120416a)</li>
            <li>Fixed: Don't treat user defined new tab page as blank tab.</li>
            <li>Fixed: New tab button don't stay after last tab in Firefox 12+ with some themes.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.2pre.120417a</h4>
          <ul>
            <li>Fixed: Fix regression from 120416a build that broke Linux and OS X, "gfx.direct2d.disabled" exist only in windows.</li>
            <li>Fixed: Handle keypress RETURN on Rename panel.</li>
            <li>Fixed: Update tabs title immediately when user changes extensions.tabmix.titlefrombookmark, and when adding, removing or changing title on bookmarks.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.2pre.120416a <span style="color:red">Not working on Linux and OS X</span></h4>
          <ul>
            <li>Fixed: Incompatibility with treeStyleTab extension, scroll on tabs doesn't work.</li>
            <li>Fixed: Reorder buttons for MacOS & Linux on option dialog and rename tab panel.</li>
            <li>Fixed: Cancel slide-show when user set extensions.tabmix.disableF8Key to true.</li>
            <li>Fixed: Add instant apply capability to Tabmix options dialog. Instant apply enable according to operating system or when browser.preferences.instantApply is true.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.2pre.120407b</h4>
          <ul>
            <li>Fixed: Tab-bar height (in multi-row) don't reduced after all tabs in a row were closed, empty row left opened.</li>
            <li>Fixed: Can't restore session when starting Firefox after exit last session from private browsing mode.</li>
            <li>Changed: Tabmix option "Allow scrolling to select tabs" - replaced with radio options "Change selected tab" and "Scroll all tabs" (default), also one can hold Shift while scrolling to switch between these options. Make the option to "Inverse scroll direction" applying to both options.</li>
            <li>Added: New options for scrolling on single row "When scrolling show part of next out-of-sight tab", extra 50 pixel is adding to each scroll distance but no more than 70% of the next out-of-sight tab when close button is visible on tab 50% otherwise.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.0.2pre.120330a</h4>
          <ul>
            <li>Changed: Rename tab panel have a new look.</li>
            <li>Fixed: Change "Load on new tabs" default to New Tab Page (extensions.tabmix.loadOnNewTab.type = 4) [Firefox 12+]<br/>
          <span style="color:red; text-decoration: underline"><b>Important</b></span><br/>
          Starting with Firefox 12, Tabmix default for Events/New Tabs > <b>"Load on new tabs"</b> and Events/Tab Closing > <b>"When I close last tab replace it with"</b> options changed to New Tab Page.
          When you update Firefox to v.12, it resets Tabmix option to New Tab Page and you have to make your selection again.
          You have few options if you had the Blank Page option selected previously:
          <ul>
            <li>use the New Tab Page for new tabs.</li>
            <li>use the New Tab Page but disable it by clicking on the button on the upper right corner,
            this will turn the New Tab Page into blank page for new tabs.
            (or setting browser.newtabpage.enabled to false)</li>
            <li>set Tabmix to load Blank Page.</li>
            <li>set Tabmix to load New Tab Page and set the address to about:blank.</li>
          </ul></li>
            <li>Fixed: Mouse wheel scroll on multi-rows is too fast with mousewheel.withnokey.action=1 or
                    mousewheel.withnokey.numlines = 23, mousewheel.withnokey.sysnumlines = false.</li>
            <li>Fixed: Session Manager fails to restore groups correctly [Firefox 11+] </li>
            <li>Fixed: Inconsistency with new tab foreground\background by using middle-click or ctrl-click with or without Shift.<br/>
                       Shift key should always inverse new tab focus option when applying with middle-click or ctrl-click.</li>
            <li>Fixed: When user press Ctrl+Tab twice quickly, the tabs popup menu is duplicated.</li>
            <li>Fixed: View Image context menu opens image in current tab even when <b>Force to open in new tab</b> is <b>All Links</b>.</li>
            <li>Fixed: Add important to tab-text color rules, fix incompatibility with ColorfulTabs.</li>
          </ul>
        </div>

      </div>
    </div>
