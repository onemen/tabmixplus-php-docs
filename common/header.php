  <div id="wrapheader">
    <div id="logodesc">
      <table cellspacing="0" width="100%">
        <tbody><tr>
          <td>
<?php
        echo '<a href="' . $PATH . $FOLDER . '/index.php">';
        echo '<img src="' . $PATH . 'styles/images/tabmix_logo.gif" alt="" title="" height="60" width="75"/></a>';
?>
          </td>
          <td width="100%" align="center">
            <h1>Tab Mix Plus</h1>
<?php
        echo "<span class='gen'>$TITLE</span>";
?>
          </td>
          <td>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-top: 31px;" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick"/>
              <input type="hidden" name="hosted_button_id" value="BZWMH5PS56GAW"/>
<?php
        echo '<input title="Donate to Tab Mix Plus" type="image" class="radio" src="' . $PATH . 'styles/images/donate.gif" name="submit" alt="PayPal - The safer, easier way to pay online!"/>';
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
        <?php include("menu.php"); ?>
      </td></tr>
      </table>
    </div>

    <div id="wrapright">
      <div class="th" align="center">Downloads</div>
      <div class="download-box">
        <div class="inner-box">
<?php
        include("version_data.php");
        echo "<p><a href='https://addons.mozilla.org/en-US/firefox/addon/tab-mix-plus/'>Current Version $VERSION</a></p>";
        echo "<p><a href='https://addons.mozilla.org/en-us/firefox/addon/tab-mix-plus/versions/'>Latest Development Build $DEVBUILD</a></p>";
?>
          <p><a href="http://tmp.garyr.net/dev-builds/">Older Development Builds</a></p>
          <p>You can download
            <a href="https://bitbucket.org/onemen/tabmixplus" style="color:blue">source code</a> or
            <a href="https://bitbucket.org/onemen/tabmixplus/downloads" style="color:blue">latest</a> working version at any time.
          </p>
        </div>
      </div>
    </div>
  </div>
