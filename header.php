<!DOCTYPE html>
<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
		
	<title>
		<?php
			if ( is_home() ) { bloginfo('name'); echo ' - '; bloginfo('description'); }
			elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); echo ' - '; bloginfo('description'); }
			elseif (is_single() ) { single_post_title(); echo ' - '; bloginfo('description'); }
			elseif (is_page() ) { single_post_title(); echo ' - '; bloginfo('description'); }
			else { wp_title('',true); } 
		?>
	</title>
		
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

	<!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/vendor/js/html5shim.js"></script><![endif]-->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	<!--[if IE 8 ]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie/ie-8.css"/><![endif]--> 
	<!--[if IE 7 ]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie/ie-7.css"/><![endif]-->

	<script src="<?php bloginfo('template_url'); ?>/vendor/js/jquery-1.7.1.js"></script>

	<!--[if IE 8 ]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie8-fixes.js"></script> <![endif]-->
	<!--[if IE 7 ]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie7-fixes.js"></script> <![endif]-->

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_deregister_script('jquery'); ?>
		
	<?php wp_head(); ?>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</head>
	
<body <?php body_class(); ?>>

<div class="wrap">
		
	<header id="mast">
  	<h1><?php bloginfo('title'); ?></h1>
	</header>
  
	<nav>
	    <?php wp_nav_menu( array('menu' => 'Main', 'container' => '' )); ?> 
	</nav>
