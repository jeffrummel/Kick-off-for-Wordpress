<?php
/**
 * @package WordPress
 * @subpackage HTML5-Kickoff
 */
?>

  <footer class="clearfix test">
      <p>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.

      </p>
  </footer>
</div> <!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."_/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."_/js/script.js") ?>

  <?php wp_footer(); ?>

</body>
</html>
