<?php
/*
 *	Template Name: Affiliates
 */
get_header();
?>
 	<div id="content" class="affiliates">
		  <h2>Affiliates</h2>
		  <p><?php the_field('content');?></p>
		  <ul>
 	<?php if(get_field('affiliates')): ?>
			 <?php while(the_repeater_field('affiliates')): ?>
        		<li><a href="<?php echo the_sub_field('website');?>"><?php echo the_sub_field('affiliate');?></a></li>	
			 <?php endwhile; ?>
		</ul>
		<?php endif; ?>	
 </div>
<?php get_footer(); ?>
