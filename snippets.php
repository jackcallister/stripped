<!-- Admin menus -->
<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container' => '' )); ?>

<!-- The loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>

<!-- Get posts function -->
<?php 			
	$myposts = get_posts( array(
	'post_type'	    =>		'page',
	'post_parent'   =>    $post->ID,
	'numberposts'   =>		-1,
	'orderby'       => 		'post_date',
	'order'         => 		'DESC'
	));	
?>

<!-- Iterate through each item in the myposts object -->
<?php foreach( $myposts as $mypost ) { ?>
<?php } ?>

<!-- Display content from mypost object -->
<?php echo $mypost->ID; ?>
<?php echo $mypost->post_title; ?>
<?php echo $mypost->post_content; ?>
<?php echo get_permalink($mypost->ID );?>
<?php echo get_the_post_thumbnail( $mypost->ID, 'thumbnail'); ?>

<?php foreach ( $mypost as $index => $post ) { ?>
	
	<?php if($index == 0){ // Do stuff if first post } ?>

<?php } ?>

<!-- Featured image -->
<?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumbnail'); ?>
<?php } ?>

<!-- Sidebar -->
<?php if ( is_sidebar_active('sidebar') ) {
	dynamic_sidebar('sidebar');
}?>

<!-- Advanced custom fields -->

<!-- Get text input -->
<?php echo get_field('field name', $post->ID); ?>

<!-- Use the options page -->
<?php echo get_field('field name', 'options'); ?>

<!-- Checker box -->
<?php
	if(get_field('true_false')){ echo "do something"; } else { echo "do something else"; }
?>

<!-- Retrieve repeater field options -->
<?php while(the_repeater_field('repeater')): ?>
    <?php the_sub_field('option'); ?>
<?php endwhile; ?>

<!-- Retrieve gallery images -->
<?php while(the_repeater_field('gallery')): ?>
	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>" />
<?php endwhile; ?>

<!-- Timthumb (ACF) -->

<img src="<?php bloginfo('template_url')?>/functions/timthumb.php?src=<?php the_field('featured_image', $blog_post->ID);?>&h=200&w=260&zc=1" alt="" />

<!-- Conditional page options -->
<?php if ( is_front_page() ) { } ?> 
<?php if ( !is_page() ) { } ?> 