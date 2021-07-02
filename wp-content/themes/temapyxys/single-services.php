<?php get_header(); ?>

<div class="container">

	<?php if(has_post_thumbnail()): ?>
		<div class="rounded-circle d-flex justify-content-center align-items-center align-middle" style="background-color: <?php echo the_field('bg-icon-color'); ?>; height: 50px; width: 50px;">
			<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="w-100 py-1">
		</div>
	<?php endif; ?>
	
	<h1><?php the_title(); ?></h1>

	<?php get_template_part('includes/section', 'services'); ?>

</div>


<?php get_footer(); ?>