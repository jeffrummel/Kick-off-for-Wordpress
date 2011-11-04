<?php
	/**
	 * @package WordPress
	 * @subpackage HTML5-Kickoff
	 */

	// Remove Auto Paragraph for excerpt & Add for Content
	remove_filter( 'the_excerpt', 'wpautop' );
	add_filter('the_content', 'wpautop');
	
	// Control the Excerpt Length
	function Kickoff_excerpt_length( $length ) {
		return 40;
	}
	add_filter( 'excerpt_length', 'Kickoff_excerpt_length' );
	
	// Remove remove unsupported rel's for happy HTML5
	add_filter( 'the_category', 'add_nofollow_cat' );
	function add_nofollow_cat( $text ) {
		$text = str_replace('rel="category tag"', "", $text);
		return $text;
	}

	// Remove Image Sizes from Mark-Up for fluid grid compatibility
	function remove_image_dim_attr($html) {
       $html=preg_replace( '/width=(["\'])(.*?)\1/', '', $html );
       $html=preg_replace( '/height=(["\'])(.*?)\1/', '', $html );
       return $html;
   }
   add_filter( 'get_image_tag','remove_image_dim_attr' );
   add_filter( 'image_send_to_editor','remove_image_dim_attr' );
   add_filter( 'post_thumbnail_html','remove_image_dim_attr' );
   
	// Theme Support - Menus
	
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
				'primary' => __( 'Top Menu', 'Kickoff' ),
				'secondary' => __( 'Side Menu', 'Kickoff' ),
				'tertiary' => __( 'Footer Menu', 'Kickoff' ),
				'quaternary' => __( 'Sub Menu', 'Kickoff')
			)
		);
	}	
	add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
	function prefix_nav_menu_args($args = ''){
	    $args['container'] = false;
	    return $args;
	}
	
	
	// Theme Support - Sidebars
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Main Sidebar',
    		'id'   => 'main-sidebar',
    		'description'   => 'Main Sidebar used throughout the site',
			'before_widget' => '<section>',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
    	));
    }
   
	// Theme Support - Thumbnail
	add_theme_support('post-thumbnails');
	

	// Custom Styles identified by Post ID
	function customstyle() {
	    global $post;
	    if (is_single()) {
	        $currentID = $post->ID;
	        $serverfilepath = TEMPLATEPATH.'/_/css/style-'.$currentID.'.css';
	        $publicfilepath = get_bloginfo('template_url');
	        $publicfilepath .= '/_/css/style-'.$currentID.'.css';
	        if (file_exists($serverfilepath)) {
	            echo "<link rel='stylesheet' type='text/css' href='$publicfilepath' media='screen' />"."\n";
	        }
	    }
	}
	add_action('wp_head', 'customstyle');
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
	// Custom Functions for CSS/Javascript Versioning
	$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
	$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

	// Add ?v=[last modified time] to style sheets
	function versioned_stylesheet($relative_url, $add_attributes=""){
	  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
	}

	// Add ?v=[last modified time] to javascripts
	function versioned_javascript($relative_url, $add_attributes=""){
	  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
	}

	// Add ?v=[last modified time] to a file url
	function versioned_resource($relative_url){
	  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
	  $file_version = "";

	  if(file_exists($file)) {
	    $file_version = "?v=".filemtime($file);
	  }

	  return $relative_url.$file_version;
	}
?>