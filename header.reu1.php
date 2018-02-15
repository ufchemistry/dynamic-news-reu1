<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // Get Theme Options from Database
	$theme_options = dynamicnews_theme_options();
?>

<div id="wrapper" class="hfeed">
	
	<div id="header-wrap">
	
		<header id="header" class="container clearfix" role="banner">
<div class="nsfLogo"><img src="/wp-content/uploads/sites/25/2014/10/nsf_logo_93x93.gif" width="93" height="93" alt="NSF" /></div>

<div style="float:left; width:93px; height:93px"><img src="/wp-content/uploads/sites/25/2014/10/reu_logo_93x93.gif" width="93" height="93" alt="REU" /></div>
			<div id="logo" class="reulgLogo">

			
				<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<h1 class="site-title"><?php bloginfo('name'); ?></h1>
				</a>
				
			<?php // Display Tagline on header if activated
			if (( isset($theme_options['header_tagline'])) AND ($theme_options['header_tagline'])) { ?>			
				<h2 class="site-description"><?php echo bloginfo('description'); ?></h2>
			<?php
			}
			else {
			?>
				<h2 class="site-description" style="color:#666; font-size: 20px !important; font-weight:800 !important;"><?php bloginfo( 'description' ); ?></h2>
			<?php } #End if
			?>
			
			</div>
			<div id="header-content" class="clearfix">
				<?php locate_template('/inc/header-content.php', true); ?>
			</div>

		</header>
	
	</div>
	
	<div id="navi-wrap">
		<nav id="mainnav" class="container clearfix" role="navigation">
			<?php 
				// Get Navigation out of Theme Options
				wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_id' => 'mainnav-menu', 'echo' => true, 'fallback_cb' => 'dynamicnews_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
			?>
		</nav>
	</div>
	
	<?php // Display Custom Header Image
		dynamicnews_display_custom_header(); ?>
		