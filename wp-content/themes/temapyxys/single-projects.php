<?php get_header(); ?>

<div class="container">

	<?php if(has_post_thumbnail()): ?>
		<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="w-100 py-1">
	<?php endif; ?>
	
	<h1><?php the_title(); ?></h1>

	<?php get_template_part('includes/section', 'projects'); ?>

</div>


<?php get_footer(); ?>