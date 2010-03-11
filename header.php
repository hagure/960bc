<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="FSK4RhOLDI-s6bDo0Gg-lcJPZKbiLhQi_SwulfjmTak" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<! Dynamic Title Tag Optimized for Search Engine Visibility -->
<title><?php if (is_front_page()) {
		bloginfo('description');
		} elseif (is_search()) {
		bloginfo('name');?> &raquo; Search Results for: <?php echo wp_specialchars($s, 1);
		} else {
		wp_title('',true); ?> &#8212; <?php bloginfo('name');
		} ?></title>


<!-- These two lines call the css files essential for the 960 grid system - DO NOT REMOVE!! -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Conditional comments for IE. Use ie7.css and ie6.css for custom css for Internet Explorer version 7 and 6 if necessary. -->
	<!--[if IE 7]>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_directory'); ?>/ie7.css );
	</style>
	<![endif]-->	
	<!--[if IE 6]>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_directory'); ?>/ie6.css );
	</style>
	<![endif]-->	
	<!-- <script src="http://localhost:8888/wp-kochyan/js/drawer.js" type="text/javascript"></script> -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

	<script language="javascript" type="text/javascript">

		jQuery(document).ready(function() {
			jQuery('#productstab').click(function(){

				var parentItem = jQuery(this).parent();

				if (parseInt(parentItem.css('marginLeft')) < 0)
				{
					parentItem.animate({
						marginLeft: 0
					}, 300);
				}
				else
				{
					parentItem.animate({
						marginLeft: -226
					}, 300);
				}

			});
			
			jQuery('').click(function())
		});

	</script>

	
<!-- uncomment the following style to view the grid as a background image -->
	<!-- <style type="text/css" media="all">
	.container_12
	{
		background: #fff url(<?php bloginfo('stylesheet_directory'); ?>/images/12_col.gif) repeat-y;
	}
	.container_16
	{
		background: #fff url(<?php bloginfo('stylesheet_directory'); ?>/images/16_col.gif) repeat-y;
	}
	</style> -->

	
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>	



<?php wp_head(); ?>


</head>
<body>
	<!-><div id="search">
		<?php echo gold_shpcrt_search_form(); ?>
		<br />
		<?php echo nzshpcrt_shopping_basket(); ?>
	</div> <!-- end search -->
	
	<div id="header">
		<!-- skip to content and navigation links - these are hidden with screen reader friendly css for accessibility -->
		<div id="skip">
			<p><a href="#content" title="skip to main content">skip to main content</a></p>
			<p><a href="#navigation" title="skip to navigation">skip to main menu</a></p>
		</div><!-- end skip -->
	
		<div id="headerimg">
			<h2><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
			<a href="<?php echo get_option('home'); ?>/">
				<img src="/images/logo.jpg" alt="logo" />
			</a>
			<p class="description">
				<?php bloginfo('description'); ?>
			</p>	
		</div><!-- end headerimg -->
		
		<div id="header-navi">
			<div id="navigation" >
				<ul>
					<li id="navi-home"><a href="./">Home</a></li>
					<li id="navi-about"><a href="./about">About Us</a></li>
					<li id="navi-events"><a href="./events">Upcoming Shows</a></li>
					<li id="navi-shipping"><a href="./shipping">Shipping</a></li>
					<li id="navi-wholesale"><a href="./wholesale">Wholesale Buyers</a></li>
					<li id="navi-contact"><a href="./contact">Contact Us</a></li>
				</ul>
			</div> <!-- end navigation -->
		
				<ul id="categories">
					<li id="navi-ancient"><a href="./immaculate-ancient-beads">Immaculate Ancient Beads</a></li>
					<li id="navi-new"><a href="./about">Exquisite <br/>New Beads</a>
						<ul>
							<li>Antigorite</li>
							<li>Dangger Emerald</li>
							<li>Fluorite</li>
							<li>Jasper</li>
							<li>Lapis Lazuli</li>
							<li>Turquoise</li>					
						</ul>
					</li>
					<li id="navi-roman"><a href="./events">Ancient Roman Glass</a></li>
					<li id="navi-tribal"><a href="./shipping">Tribal Adornments</a>
						<ul>
							<li>Cuffs</li>
							<li>Earrings</li>
							<li>Necklaces</li>
							<li>Pendants</li>
							<li>Rings</li>
						</ul>
					</li>
					<li id="navi-bellydance"><a href="./wholesale">Belly Dance Beautifiers</a>
						<ul>
							<li>Belts</li>
							<li>Chokers</li>
							<li>Cuffs</li>
							<li>Headpieces</li>
							<li>Necklaces</li>
						</ul>
					</li>
					<li id="navi-kv"><a href="./kochyan-valley-designs">Kochyan Valley Designs</a></li>
				</ul>
		</div>
		<!-- class="grid_3 prefix_3" -->
	
		
		
		<div id="scrolltop"></div>
	
		<!-- <div id="productsc">
				<div id="products">
					<div id="productstab">
						<span>Products</span>
					</div>
					<?php echo show_cats_brands(); ?>
				</div>
			</div>		 -->
	</div><!-- end header -->
	

	
	

	
