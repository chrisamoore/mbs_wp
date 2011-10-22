<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="last-modified" content="Tue Mar 16 16:22:54 PDT 2010" /><!-- DATE_RFC850 and DATE_RSS -->
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
			wp_title( '|', true, 'right' );		
			// Add the blog name.
			bloginfo( 'name' );
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'Modern Builders Supply' ), max( $paged, $page ) );
		?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/ico" />

		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="Christopher Moore at StudioConover, Original By Bruno Correia" />
		<meta name="keywords" content="brick, block, san diego, builders supply, interlocking pavers, manufactured stone, natural, stone, retaining walls, bbqs, fireplaces, mortar, sealer
"/>

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
 
		<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
		<script type="text/javascript">
			google.load('jquery', '1.4');
		</script>
		<script type="text/javascript">
		$(function(){
			$('#contanier').css({
		      /* 'background-color': 'transparent', */
		      'background-image': 'url(<?php bloginfo(''); ?>/images/other/modern-facility.jpg)',
		      'background-repeat': 'no-repeat'
		      });
	
		});//END Doc Ready
		</script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox/fancybox/jquery.easing-1.3.pack.js"></script>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
    			
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle/jquery.cycle.lite.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.functions.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.color.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.url.js" type="text/javascript"></script>
		
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				
</head>
<body>
<div id="expand-bg"><img src="<?php bloginfo('template_directory'); ?>/images/other/background.jpg" alt="" /></div>
<div id="wrapper">		
		<div id="header">
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/other/modern-logo.png" alt="modern builders supply" /></a><?php get_search_form(); ?>
		</div>
		<div id="contanier">
			<?php include 'navigation.php'; ?>		
			<div id="phone">
			 	<p>Call 760 591 4570</p>
			</div>
			<?php get_sidebar();?>