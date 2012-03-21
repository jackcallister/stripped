<?php get_header(); ?>
			
  <section>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article>

        	<header>

        		<h1><?php the_title(); ?></h1>
            
            </header>

            <?php the_content(); ?>

        </article>

    <?php endwhile; endif; ?>

  </section> <!-- end section -->
				
<?php get_sidebar(); ?>
	
<?php get_footer(); ?>