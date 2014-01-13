      <div id="title" class="th" align="center">Session - Start/Exit</div>
      <div class="content-body evenbg">
        <div class="topic">
          <img src="help/images/TMPSessionStartExit.jpg" alt="image">
          Controls Firefox� built-in Session Restore, Session Manager and
          Crash Recovery features
        </div>

        <div class="topic">
          <ul>
            <li>Use Firefox's� built-in Session Restore Feature - when checked
            Firefox's� Session Restore feature will be in effect</li>
            <li class="default">Enable Session Manager</li>
            <li class="default">Enable Crash Recovery</li>
          </ul>
          <p class="comment indent">
            <b><u>Note</u></b>:<br> Sessions are stored in the <b>session.rdf</b> file
            in your profile folder. A backup of this file is stored in the
            <b>sessionbackups</b> folder in your profile folder. If your session becomes
            corrupt and you are unable to restore that session, copy one of
            the backup files (tabmix_sessions-yyyy-mm-dd.rdf) from the backup
            folder to your profile folder, rename the file to <b>session. rdf</b>.
          </p>
          <p class="comment indent">
            For a full range of sessions managing features, you can use
            <a href="https://addons.mozilla.org/en-US/firefox/addon/session-manager/">
            Session Manager extension</a> which is created specifically for that
            purpose.<br> When Session Manager extension installed, Tab Mix Plus
            turns its own session manager off. Your existing sessions will be converted
            to SM format. This two extensions work well together without any
            known problems.<br><br>
            <b><u>IMPORTANT!</u></b> If you uninstall or disable Session Manager extension,
            Tab Mix Plus will revert back to its file which will not have the sessions
            saved with Session Manager extension.
          </p>

        </div>

        <div class="topic">
          <h3>Start/Exit</h3>
          When browser Starts (select one option):
          <ul>
            <li>Restore</li>
            <li>Ask Before Restoring</li>
            <li class="default">Dont Restore</li>
          </ul>
          When Browser Exits (select one option):
          <ul>
            <li class="default">Save Session</li>
            <li>Ask before Saving</li>
            <li>Dont Save</li>
          </ul>
        </div>

        <div class="topic">
          Tab Mix Plus saves two types of session, sessions saved by the user and history sessions.<br>
          Current version save only two history session: Last Session and Previous to Last.<br>
          Startup Session (select a session):
          <ul>
            <li class="default">Last session</li>
            <li>Previous to last</li>
            <li style="margin-top: 6px;">Choose another if empty (when checked you will be prompted to
            select another session)</li>
          </ul>
        </div>

        <div class="topic">
          When not restoring on start:
          <ul>
            <li class="default">Show my home page</li>
            <li>Show a blank page</li>
          </ul>
        </div>

        <div class="topic container">
          <img src="help/images/TMPSessionRestore1.jpg" alt="image">
          <a name="restore"></a><h3>Restore</h3>
         When Restoring Sessions:
          <ul>
            <li class="default">Overwrite existing windows
              <ul>
                <li class="default">And tabs</li>
                <li class="default">Save windows in closed windows list</li>
              </ul>
            </li>
            <li>Join multiple windows into one</li>
            <li>Reload all tabs</li>
          </ul>
        </div>

        <div class="topic container">
          <img src="help/images/TMPSessionPreserve1.jpg" alt="image">
          <a name="preserve"></a><h3>Preserve</h3>
          Preserve Tabs:
          <ul>
            <li class="default">History</li>
            <li class="default">Permissions</li>
            <li class="default">Protected Status</li>
            <li class="default">Lock Status</li>
            <li class="default">Scroll and Text Size</li>
          </ul>
        </div>

        <div class="topic">
          Preserve Windows:
          <ul>
            <li class="default">Selected Tab</li>
            <li>Closed Tab list</li>
          </ul>
        </div>

      </div>
