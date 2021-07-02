<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<div class="card mb-3">
	<div class="card-body d-flex justify-content-center aling-itens-center aling-midle">

		<?php if(has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
		<?php endif; ?>

		<div class="card-content">
			<h1><?php the_title(); ?></h1>

			<?php the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>">Ver detalhes</a>
		</div>

	</div>
</div>

<?php endwhile; else: endif; ?>