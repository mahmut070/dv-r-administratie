<?php get_header(); ?>
<div class="space">
</div>

<div class="slider-top">
	<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg" >
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider2.jpg" >
	</div>   <!-- einde slider van de onderkant header -->  
		
	<div class="u-gridContainer">
		<div class="u-gridRow">
			 <div class="slider-inhoud">
				<h5>Betrokken en flexibel</h5>
			</div>
		</div>
	</div>
</div>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<p><?php the_time('d-m-Y'); ?></p>

						<div>
							<?php the_content(); ?>
						</div>
					</article>
					

				<?php endwhile; else: ?>

					<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

				<?php endif; ?>

			</div>

			<div class="u-gridCol4">
				<div class="nieuws-box">
					<h2 class="nieuws-title">Nieuws</h2>

		                <article>
		                    <?php 
		                    $temp = $wp_query; $wp_query= null;
		                    $wp_query = new WP_Query(); $wp_query->query('showposts=999' . '&paged='.$paged);
		                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		                        <p class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></p>
		                        <a href="<?php the_permalink(); ?>" >Lees verder</a>

		                    <?php endwhile; ?>
		                </article>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>