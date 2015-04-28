<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
      </section>
    </div>
  </section>

  <section id="foot"><?php // footer starts here ?>
    <footer>
      <div class="container">
        <div class="copy"><?php echo $config['foot_info']; ?></div>
        <nav class="options">
          <ul>
            <li class="print"><a href="javascript:window.print();"><?php echo $lang['print']; ?></a></li>
            <?php if( isset( $_SERVER['HTTP_REFERER'] ) && strstr( $_SERVER['HTTP_REFERER'], dirname( $_SERVER['SCRIPT_NAME'] ) ) ){ ?><li class="back"><a href="javascript:history.back();"><?php echo $lang['back']; ?></a></li><?php } ?>
          </ul>
        </nav>
      </div>
    </footer>
  </section>
</div>
<section id="powered">
  <div class="container">
    <!-- 
      Read the license before you change the footer
      www.opensolution.org/licenses.html
    -->
    <a href="http://opensolution.org/"><img src="templates/<?php echo $config['skin']; ?>/img/powered.png" alt="Script logo" width="192" height="26" /></a>
  </div>
</section>
</body>
</html>