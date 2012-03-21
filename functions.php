<?php
	
	require_once("functions/custom-post-type.php");

	// Add RSS links to <head> section

	automatic_feed_links();
	
	// Register a sidebar
	
	if (function_exists('register_sidebar')) {
	
		register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
		));
	
	}

	// Custom post type icon

	add_action( 'admin_head', 'cpt_icons' );
	function cpt_icons() {
    ?>

    <style type="text/css" media="screen">
    #menu-posts-custom .wp-menu-image {
		background: url(<?php bloginfo('template_url') ?>/images/ruler--pencil.png) no-repeat 6px -17px !important;
    }
	#menu-posts-custom:hover .wp-menu-image, #menu-posts-custom.wp-has-current-submenu .wp-menu-image {
        background-position:6px 7px!important;
    }
    
    </style>
    <?php
    }
	
	// Add editor styles
	
	add_editor_style('editor-styles.css'); 

	add_filter( 'show_admin_bar', '__return_false' );
	define('EMPTY_TRASH_DAYS', 1 );

	// Remove the comments from Edit Pages

	function custom_post_columns($defaults) {
	  unset($defaults['comments']);
	  return $defaults;
	}

	add_filter('manage_posts_columns', 'custom_post_columns');

	function custom_pages_columns($defaults) {
	  unset($defaults['comments']);
	  return $defaults;
	}

	add_filter('manage_pages_columns', 'custom_pages_columns');

	// Customise the footer

	function modify_footer_admin () {
	  echo 'Created by the nifty folk at <a href="http://uprise.co.nz">Uprise</a>.';
	}

	add_filter('admin_footer_text', 'modify_footer_admin');

	// Custom logos

	function custom_logo() {
	  echo '<style type="text/css">
	    #header-logo { background-image: url('.get_bloginfo('template_directory').'/images/wp-logo.png) !important; }
	    </style>';
	}

	add_action('admin_head', 'custom_logo');

	function custom_login_logo() {
	  echo '<style type="text/css">
	    h1 a { background-image:url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; }
	    </style>';
	}

	add_action('login_head', 'custom_login_logo');
	
	// Remove dashboard widgets from the admin area //

	function remove_dashboard_widgets(){
	  global$wp_meta_boxes;
	  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	}
	
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
	
	// Add custom functions
