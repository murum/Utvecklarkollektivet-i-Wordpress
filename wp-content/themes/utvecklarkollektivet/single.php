<?php

get_header(); ?>

<?php if(have_posts()) : ?>
	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php echo the_title(); ?></h1>
	<?php endwhile; ?>
<?php endif; ?>
	
<?php get_footer(); ?>