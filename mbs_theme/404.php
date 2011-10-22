<?php
/**
 * The template for displaying 404 pages (Not Found).
 */
get_header(); ?>
	<div id="container">
		<div id="content" role="main">
			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Uh... I think you are lost', 'twentyten' ); ?></p>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer(); ?>