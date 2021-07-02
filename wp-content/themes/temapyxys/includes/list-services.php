<?php 

	$args = [
		'post_type' => 'services',
	];

	$query = new WP_query($args);

?>

<div class="row">

<?php if( $query->have_posts() ): ?>
	<?php while( $query->have_posts() ) : $query->the_post(); ?>

	<div class="col-6">
		<div class="card w-100 h-100 cursor-pointer">
			<div class="card-header bg-white border-0"> 
				<div class="row">
					<div class="col-6 pt-md-3">
					<?php if(has_post_thumbnail()): ?>
						<div class="rounded-circle d-flex justify-content-center aling-itens-center align-middle img-service" style="background-color: <?php echo the_field('bg-icon-color'); ?>;">
							<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="w-100 py-2">
						</div>
					<?php endif; ?>
					</div>
					<div class="col-6 text-right pl-0">
						<span class="mais">Ver mais <svg width="37" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.354 4.354a.5.5 0 000-.708L33.172.464a.5.5 0 10-.707.708L35.293 4l-2.828 2.828a.5.5 0 10.707.708l3.182-3.182zM0 4.5h36v-1H0v1z" fill="currentcolor"></path></svg></span>
					</div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title mt-3"><?php echo the_title(); ?></h5>
				<p class="card-text mt-2"><?php echo strip_tags( get_the_excerpt() ); ?></p>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

</div>