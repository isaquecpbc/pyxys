<?php 

	$taxonomies = get_object_taxonomies( array( 'post_type' => 'services' ) );

	$args = [
		'post_type' => 'services',
	];

	$query = new WP_query($args);

?>

<div class="row mt-3" id="list-aplications">

	<?php foreach( $taxonomies as $taxonomy ) : ?>   
		<?php $terms = get_terms( $taxonomy ); ?>
			<?php foreach( $terms as $term ) : ?>
				<div class="col-12">
					<p class="aplication mb-0"><?php echo $term->name; ?></p>
				</div>
			<?php endforeach; ?>
	<?php endforeach; ?>

</div>