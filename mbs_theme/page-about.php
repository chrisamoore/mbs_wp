<?php
/*
 *	Template Name: About
 */
get_header();
?>
	<div id="content">
	<div class="left about">
		  <h2>About Us</h2>
		  <p><?php the_field('Content'); ?></p>
      <div class="address"> <!-- http://microformats.org -->
        <div class="left vcard">          
          <div class="org"><?php the_field('title'); ?></div>          
          <div class="adr">
            <div class="street-address"><?php the_field('Address'); ?></div>
            <span class="locality"><?php the_field('City'); ?></span>, <span class="region"><?php the_field('State'); ?></span>, <span class="postal-code"><?php the_field('Zip'); ?></span>
          </div>          
        </div>
        <div class="left"> 
		<?php if(get_field('hours')): ?>
			 <?php while(the_repeater_field('hours')): ?>
			 	<?php echo the_sub_field('daystime');?><br/>
			 <?php endwhile; ?>
		<?php endif; ?>	
        </div>
      </div><!-- end address -->
		  </div><!-- end left -->
		  
		  <div class="right slideshow">
		  		<?php if(get_field('images')): ?>
			    <?php while(the_repeater_field('images')): ?>
			       <img src="<?php echo the_sub_field('image');?>" alt=""/>
			    <?php endwhile; ?>
		 	<?php endif; ?>	
		  </div> 
	</div><!-- end content -->

<?php get_footer(); ?>