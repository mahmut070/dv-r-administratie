<div class="slider-top">
	<div class="Slider"> <!-- Dit is de slider in de onderkant header -->

<?php
				
				$args = array(
					'post_type' => 'slides', 
					'posts_per_page'=>999
				);
				$slides = new WP_Query( $args );
				$num = count($slides);
				$counter = 0;
				if( $slides->have_posts() ) {
					while( $slides->have_posts() ) {
						$slides->the_post(); 
						$counter++;
						?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
							  $image_url = $image[0];
						?>
						<img src="<?php echo $image_url; ?>" >

						<?php
					}
				}
			?>

	</div>   <!-- einde slider van de onderkant header -->  
		
	<div class="u-gridContainer">
		<div class="u-gridRow">
			 <div class="slider-inhoud">
				<h5>Betrokken en flexibel</h5>
			</div>
		</div>
	</div>
</div>