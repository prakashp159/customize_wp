<?php

/*

* This is our first theme.

*/

get_header();

?>

	<div class="container">

		

			
			<div class="site-content">

				<?php get_template_part('template-parts/home','featured') ?>
				<img src="<?php echo get_template_directory_uri() ?> /assets/img/banner.jpg" style="width: 300px">
		
		
		

				<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>
			    <h1> <?php the_title() ?> </h1>
			    <?php endwhile; ?>
				<?php endif;  ?>

				
			</div>

			
	


<?php
get_sidebar();
get_footer();

?>
