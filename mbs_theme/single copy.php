<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="content">
<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			<div class="manufacturer">
			<style>
					.logo{
						float: left;
						clear: none;
					}
					.description{
						float: right;
						clear: none;
						padding: 0px;
						padding-left: 0px;
					}
				</style>
					<img src="<?php the_field('Logo'); ?>" title="<?php the_title();?>" class="logo"/>
					<img src="<?php the_field('image'); ?>" title="<?php the_title();?>" class="logo"/>
					<div class="description" style="float:left; clear :none"> 
						<?php the_field('Description'); ?>
						<p><br/>Visit <a href="<?php the_field('Website'); ?>"/><?php the_title();?></a> or contact a Modern Builders Supply representative for more information.</p>							
						<!-- Check DB for Brochure -->
							<?php $key = 'brochure';
							 $value = (get_post_meta($post->ID, $key));
							if($value[0]== !Null):?>
								<div class="download">
									<a href="<?php the_field('Brochure'); ?>"/>Download Brochure PDF</a>
								</div>
							<?php else : ?>
							<?php endif ;?>
						<!-- Check DB for Brochure -->
					</div>					
			</div>
			
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
