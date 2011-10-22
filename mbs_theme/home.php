<?php get_header();	?>
<script type="text/javascript">
		    		$(function(){
		    			var x = '<?php bloginfo('template_directory'); ?>';
			    		$('#contanier').css({
					      'background-color': 'transparent',
					      'background-image': 'url('+ x +'/images/other/modern-facility.jpg)',
					      'background-repeat': 'no-repeat' 
					      });
					    $('#header a').remove();
			    	});//END Doc Ready
		    	</script>
<?php if (have_posts()) : ?>
<?php else : ?>
<?php endif; ?>
		</div><!-- end contanier -->
			<div class="home">
				<h1>Welcome to Modern Builders Supply, Inc.</h1>
				<p>Whether you are a Developer, Builder, Architect, Designer, Masonry Contractor or Homeowner, this is where you'll find the best masonry products and the most personable and knowledgeable associates in San Diego County.</p>
			</div><!-- end home -->		
<?php get_footer();	?>	