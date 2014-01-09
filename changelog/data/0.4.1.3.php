    <div class="content-frame">
      <div id="title" class="th" align="center">Changes in Version 0.4.1.3</div>
      <div class="content-body evenbg">
        <div class="topic">
          <h4>0.4.1.3pre.131218a2</h4>
          <ul>
            <li>Added: New option to set gradient color on tabs by applying different color to top and bottom, new option to hide RGB fields.
            <br/>(Tabmix Options > Display > Tab > Customize Styles...)</li>
            <li>Fixed: <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=931891>Bug 931891</a> screws up middle-click/closed tab and breaks right click on page content. [Firefox 27.0b2]</li>
            <li>Fixed: Properly disable toggle FLST (Find Last Selected Tab) and tab slide show shortcuts, fix notification label to much the shortcuts.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131209a1</h4>
          <ul>
            <li>Fixed: [Australis] Update our styles for tabs background color to work with Australis on Mac OS X and Linux. [Firefox 28+]</li>
            <li>Fixed: Fix multi-row background color on tabbar in Mac OS X.</li>
            <li>Fixed: Unread Style only apply to new tabs after first load.</li>
            <li>Fixed: Can't closed tab with show-over button, TypeError: tabContainer.tabbrowser is undefined.</li>
            <li>Fixed: Some compatibility issues with TreeStyleTab.
              <ul>
                <li>Fixed: Can't use close button on tab with vertical TreeStyleTab. [Nightly 28+]</li>
                <li>Fixed: Fix tab progress top margin when tabbar is vertical by TreeStyleTab. [Nightly 28+]</li>
                <li>Fixed: Disable our background colors when treeStyleTabs installed.</li>
              </ul>
            </li>
            <li>Fixed: History Recently Closed Tabs popup flicker on Linux Ubuntu.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131204a1</h4>
          <ul>
            <li>Fixed: [Australis] Update our styles for tabs background color to work with Australis on Windows. [Firefox 28+]</li>
            <li>Fixed: Throbber is missing since dev-build 131123a1. [Firefox 28+]</li>
            <li>Fixed: New tab open at the end with latest Nightly since <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=943820>bug 943820</a> landed. [Firefox 28+]</li>
            <li>Fixed: Options > Menu > Shortcuts is broken on OS X and Nightly with Australis when some of the shortcuts are in use by other extensions or Firefox.</li>
            <li>Fixed: Don't block "YouTube Center Settings" when Greasemonkey installed.</li>
            <li>Fixed: [Australis] Remove horizontal orient from buttons that are in in Australis new buttons panel. [Firefox 28+]</li>
            <li>Fixed: [Australis] Closed tabs and closed windows buttons are disabled in Australis new buttons panel. [Firefox 28+]</li>
            <li>Fixed: Disabling Tabmix on popup messed up main context menu.</li>
            <li>Fixed: [Australis] Update tab-progress margin for Windows. [Firefox 28+]</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131123a1</h4>
          <ul>
            <li>Fixed: Selected tab messed-up after bug 940262 landed on Nightly (Australis). [Firefox 28]</li>
            <li>Fixed: Click options on tab bar not working on Nightly (Australis). [Firefox 28]</li>
            <li>Fixed: Set Tabmix buttons height to 24px on Nightly (Australis). [Firefox 28]</li>
            <li>Fixed: Fix multi-row scroll buttons height on Windows with Nightly (Australis) [Firefox 28]</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131116a1</h4>
          <ul>
            <li>Fixed: Focus urlbar when Firefox starts with a blank tab, by Tabmix Session manager.</li>
            <li>Fixed: Tree Style Tab extension "Bookmark this Tree" is broken.</li>
            <li>Fixed: Remove blank tab that open the "Launch Application" dialog.</li>
            <li>Fixed: Auto reload state not restored after crash with Tabmix Session Manager.</li>
            <li>Fixed: Restored auto reload not starts for pending tabs.</li>
            <li>Fixed: Build-in SessionStore don't restore Tabmix tab attributes for lock, protect, user name and auto reload <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=905049>(bug 905049)</a>, Firefox 25+.</li>
            <li>Fixed: Links from youtube.com open in the same tab.</li>
            <li>Fixed: Show last 6 custom times in "Reload Tab Every" menu.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131110a1</h4>
          <ul>
            <li>Fixed: New tab button disappeared after tab closed when tabs are in multi-row.</li>
            <li>Fixed: Add option to "Mouse clicking" options not to use Tabmix command and use Firefox default or other extension.</li>
            <li>Fixed: Some shortcuts doesn't work when disabling few shortcuts in Tabmix > menu > shortcuts.</li>
            <li>Fixed: Duplicated tab always shows last page of the tabs history [Firefox 25].</li>
            <li>Removed: support for Firefox 11.0-17.0.</li>
          </ul>
        </div>

        <div class="topic">
          <h4>0.4.1.3pre.131027a3</h4>
          <ul>
            <li>Fixed: Firefox closed when session restore starts with pinned tabs [Firefox 25].</li>
            <li>Fixed: Session don't fully restored when one of the tabs title contain ][.</li>
            <li>Fixed: <a href=https://bugzilla.mozilla.org/show_bug.cgi?id=928335>Bug 928335</a> broke Tabmix on Nightly. [Firefox 27+]</li>
          </ul>
        </div>
        </div>
      </div>
