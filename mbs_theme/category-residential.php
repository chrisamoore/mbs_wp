<?php
/**
 *	Template Name: Residential
 */
get_header(); ?>
<div id="content">
	<p>
		<?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?> 
	</p>
	<?php $recent = new WP_Query(); ?>
	<?php $recent->query('cat=25&showposts=100'); ?>
	<?php while($recent->have_posts()) : $recent->the_post(); ?>
		<ul>
			<li>
				<a rel="collection" class="fancybox" href="#big" title="<?php the_title();?>">
					<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" width="196" height="116" title="<?php the_title(); ?>"class="products" />
				</a>
				<span><?php the_title();?></span>
			</li>
	   </ul>
	   <div id="big" style="display:none;"><img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"class="products" />
		</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>


