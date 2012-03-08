<?php
/**
* @package WordPress
* @subpackage HTML5-Kickoff
*/
		// require head_top
		require_once('_/inc/head_top.php');
		
		?>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<?php
			// require head_bottom
			require_once('_/inc/head_bottom.php');
		?>


  <div id="container" class="clearfix">

    <header role="banner">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    </header>
