<?php
/**
 *	Template Name: Slate Roofing
 */
get_header(); ?>
<div id="content">
	<p>
		<?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?> 
	</p>
	<?php $recent = new WP_Query(); ?>
	<?php $recent->query('cat=15&showposts=100'); ?>
	<?php while($recent->have_posts()) : $recent->the_post(); ?>
		<ul>
			<li>
				<a rel="collection" href="<?php the_permalink() ?>" title="<?php the_title();?>">
					<style>
							
						</style>
					<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" width="196" height="116" title="<?php the_title(); ?>"class="products" />
				</a>
				<span><?php the_title();?></span>
			</li>
	   </ul>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>