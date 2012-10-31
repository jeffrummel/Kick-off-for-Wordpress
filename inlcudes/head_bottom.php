	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory, if you can: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>
	
	<!-- Wordpress Head Items -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
