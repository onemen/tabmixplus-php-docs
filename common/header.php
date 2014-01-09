<?php
  include("version_data.php");

  $topic = $_GET[t];
  switch ($topic) {
  case 1:
    $FOLDER = "changelog";
    $TITLE = "Change Log";
    $name = "tabmix-changelog-content";
    $page = $LATEST;
    break;
  case 2:
    $FOLDER = "troubleshooting";
    $TITLE = "Troubleshooting";
    $name = "tabmix-troubleshooting-content";
    $page = "tabmix-does-not-work";
    break;
  default:
    $uri = $_SERVER["REQUEST_URI"];
    die ("Error: Unknown topic $uri, can't load this page<br>");
  }
  $_self = $_SERVER["PHP_SELF"];
  $PATH = substr($_self, 0, strpos($_self, "support"))."support";
?>
  <div id="wrapheader">
    <div id="logodesc">
      <table cellspacing="0" width="100%">
        <tbody><tr>
          <td>
<?php
echo <<<html
            <a href="$PATH/viewtopic.php?t=$topic">
            <img src="$PATH/styles/images/tabmix_logo.gif" alt="" title="" height="60" width="75"/></a>

html;
?>
          </td>
          <td width="100%" align="center">
            <h1>Tab Mix Plus</h1>
<?php
echo <<<html
            <span class='gen'>$TITLE</span>
html;
?>
          </td>
          <td>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-top: 31px;" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick"/>
              <input type="hidden" name="hosted_button_id" value="BZWMH5PS56GAW"/>
<?php
echo <<<html
              <input title="Donate to Tab Mix Plus" type="image" class="radio" src="$PATH/styles/images/donate.gif" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
html;
?>
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
            </form>
          </td>
        </tr></tbody>
      </table>
    </div>

    <div id="menubar">
      <table width="100%" cellspacing="0">
      <tr><td class="gen top-menu" align="center">
        <?php include("top-menu.php"); ?>
      </td></tr>
      </table>
    </div>

    <div id="wrapright">
      <div class="th" align="center">Downloads</div>
      <div class="download-box">
        <div class="topic">
<?php
echo <<<html
          <p><a href='https://addons.mozilla.org/en-US/firefox/addon/tab-mix-plus/'>Current Version $VERSION</a></p>
          <p><a href='https://addons.mozilla.org/en-us/firefox/addon/tab-mix-plus/versions/'>Latest Development Build $DEVBUILD</a></p>
          <p><a href="http://tmp.garyr.net/dev-builds/">Older Development Builds</a></p>
          <p>You can download
            <a href="https://bitbucket.org/onemen/tabmixplus" style="color:blue">source code</a> or
            <a href="https://bitbucket.org/onemen/tabmixplus/downloads" style="color:blue">latest</a> working version at any time.
          </p>

html;
?>
        </div>
      </div>
    </div>
  </div>
