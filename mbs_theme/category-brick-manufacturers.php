<?php
/**
 *	Template Name: Manufacturers
 */
get_header(); ?>
<div id="content">
<h2>Brick</h2>
<div id="disclaimer"><a href="/disclaimer.html">Color Disclaimer</a></div>
<p>Made primarily of clay and shale, brick is a classically attractive material that lasts a long time and needs practically no maintenance. Modern Builder Supply is proud to partner with the following manufacturers to make high quality brick easily attainable. Please note even though we may not currently carry every one of our manufacturer’s products, we will be able to get the material to meet your needs.</p>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php single_post_title(); ?>
			<div class="manufacturer">
				<div class="description"> <!-- ICON -->
					<?php the_content(); ?>	
				</div>
				<div class="download">
					<a href=""></a>
				</div>
			</div>
				
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
