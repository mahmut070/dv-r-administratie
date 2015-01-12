<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

<div class="space">
</div>

<?php include_once('slider.php'); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8 blog-area">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
					</article>
				<?php endwhile; endif; ?>


                <article>
                    <?php 
                    $temp = $wp_query; $wp_query= null;
                    $wp_query = new WP_Query(); $wp_query->query('showposts=999' . '&paged='.$paged);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	                    <div class="blog">
	                        <p><span><?php the_time('d-m-Y'); ?> : </span> <?php the_title(); ?></p>
	                        <a href="<?php the_permalink(); ?>" >Lees verder</a>
	                     </div>
                    <?php endwhile; ?>
                </article>

               	<button class="show-all">Laat alles zien</button>

			</div>

			<div class="u-gridCol4">
				<div class="nieuws-box">
					<h2 class="nieuws-title">Nieuws</h2>

		                <article>
		                    <?php 
		                    $temp = $wp_query; $wp_query= null;
		                    $wp_query = new WP_Query(); $wp_query->query('showposts=999' . '&paged='.$paged);
		                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			                    <div class="blog-sidebar">
			                        <p class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></p>
			                        <a href="<?php the_permalink(); ?>" >Lees verder</a>
								</div>
		                    <?php endwhile; ?>
		                </article>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>