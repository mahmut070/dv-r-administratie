<?php
	
	$args = array(
		'post_type' => 'diensten', 
		'posts_per_page'=>999
	);
	$diensten = new WP_Query( $args );
	$num = count($diensten);
	$counter = 0;
	if( $diensten->have_posts() ) {
		while( $diensten->have_posts() ) {
			$diensten->the_post(); 
			$counter++;
			?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	  		$image_url = $image[0];
			?>

			<div class="u-gridCol4 box">
					<img src="<?php echo $image_url; ?>" >
				    <h5><?php the_title(); ?></h5>
					<?php the_content(); ?>
					<a href="<?php the_field('link'); ?>">Lees meer</a>
			</div>


			<?php
		}
	}
?>