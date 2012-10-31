<?php
	/**
	 * @package WordPress
	 * @subpackage HTML5-Kickoff
	 */

if(!function_exists('kickoff_setup')) {
	// Control the Excerpt Length in words
	function Kickoff_excerpt_length( $length ) {
		return 40;
	}
	add_filter( 'excerpt_length', 'Kickoff_excerpt_length' );
	
	// Remove Auto Paragraph for excerpt & Add for Content
	remove_filter( 'the_excerpt', 'wpautop' );
	add_filter('the_content', 'wpautop');
	
	// Theme Support - Thumbnail
	add_theme_support('post-thumbnails');
	
	// Remove unsupported rel's for happy HTML5
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
	    $args['container'] = 'nav';
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
		remove_action( 'wp_head', 'feed_links' );
		remove_action( 'wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'parent_post_rel_link');
		remove_action( 'wp_head', 'start_post_rel_link');
		remove_action( 'wp_head', 'adjacent_posts_rel_link');
		remove_action( 'wp_head', 'wp_generator');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
}

// Custom jQuery Load

function load_jquery() {
if (!is_admin()) {
        
       wp_deregister_script('jquery'); // deregister jQuery
       // register it again, this time with no file path
       wp_register_script('jquery', '', FALSE, '1.7.1'); 
	   // re-register jQuery with no file path
       wp_enqueue_script('jquery');
   }
}
 
add_action('template_redirect', 'load_jquery');
	
/**
 * Returns a "Continue Reading" link for excerpts
 */
function h5bp_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'h5bp' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and h5bp_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function h5bp_auto_excerpt_more( $more ) {
	return ' &hellip;' . h5bp_continue_reading_link();
}
add_filter( 'excerpt_more', 'h5bp_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function h5bp_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= h5bp_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'h5bp_custom_excerpt_more' );
	
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