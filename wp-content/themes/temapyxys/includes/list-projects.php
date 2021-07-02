<?php 

	$args = [
		'post_type' => 'projects',
	];

	$query = new WP_query($args);

?>

<?php if( $query->have_posts() ): ?>
	<?php while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="row item-project d-flex justify-content-center align-items-center align-middle">
			<div class="col-6 img-project px-0">
			<?php if(has_post_thumbnail()): ?>
				<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="w-100 py-2">
			<?php endif; ?>
			</div>
			<div class="col-6 text-project px-5">
				<h5 class="project-title mt-3"><?php echo the_title(); ?></h5>
				<?php echo the_content(); ?>
				<div class="text-left mt-5"><span class="mais"><svg width="22" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.354 4.354a.5.5 0 000-.708L18.172.464a.5.5 0 10-.707.708L20.293 4l-2.828 2.828a.5.5 0 10.707.708l3.182-3.182zM0 4.5h21v-1H0v1z" fill="currentcolor"></path></svg> Ver projeto completo</span></div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>