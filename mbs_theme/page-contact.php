<?php
/*
 *	Template Name: Contact
 */
get_header();
?>
<div id="content" class="contact">
	 <h2>Contact</h2>
	 <p><?php the_field('content'); ?></p>
	 <div id="gmap">
      	<?php echo do_shortcode("[mappress mapid='1']"); ?>
     </div>
     <div class="address"> <!-- http://microformats.org -->
        <div class="left vcard">          
          <div class="org"><?php the_field('title'); ?></div>          
          <div class="adr">
            <div class="street-address"><?php the_field('address'); ?></div>
            <span class="locality"><?php the_field('city'); ?></span>, <span class="region"><?php the_field('state'); ?></span>, <span class="postal-code"><?php the_field('zip'); ?></span>
          </div>          
        </div>
       <div class="left"> 
		<?php if(get_field('hours')): ?>
			 <?php while(the_repeater_field('hours')): ?>
			 	<?php echo the_sub_field('daystime');?><br/>
			 <?php endwhile; ?>
		<?php endif; ?>	
        </div>
          <div class="right">
            Phone: <?php the_field('phone'); ?><br />
            Email: <a href="<?php the_field('email'); ?>">Customer Service</a>
          </div>
        </div>
</div><!-- end content -->
<?php get_footer(); ?>