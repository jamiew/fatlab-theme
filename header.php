<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/twitter-1.13.js"></script>

	<!-- jdubs optimizely a/b tests -->
	<script src="//cdn.optimizely.com/js/1834055.js"></script>

	<?php wp_head(); ?>
</head>
<body>

<?php 
	// this enables live theme switching for dev site development
	// see: http://inspectelement.com/tutorials/create-a-wordpress-theme-development-environment/
	
	if ( is_user_logged_in() ) : ?>

	<div id="devbar" class="live">

		<p>You are <a href="http://fffff.at/wp-admin/">logged in</a> and this is the Live Site</p>

		<a href="<?php pageURL(); ?>?theme=FFFFFAT+Thematic+Child+Theme">Switch to Dev</a>

	</div>

<?php else : ?>

	<?php /* Nothing here */ ?>

<?php endif; ?>



	<a name="top"></a>
<div id="wrapper">
	<div id="header">
		<!-- ************************************ -->
		<!-- dope iheaders go here -->
		<?php 
		// image randomizer -- add to the images array (don't forget commas if needed!)
		$title = "FAT LAB: free art & technology / hacking in the public domain / notorious R&D"; 
                $images = array(	
			//'http://fffff.at/images/FATLAB.gif', 
			//"http://fffff.at/theme/images/biggie.jpg", 
			//"http://fffff.at/images/fffffat_banner.jpg",
			//"http://fffff.at/images/fffffat_banner_2.jpg",
			//"http://fffff.at/images/fffffat_banner_4_new_logo.jpg"
			//"http://fffff.at/images/fffffat_banner_5_wide.jpg"
			"http://fffff.at/images/fffffat_banner_5_normal.jpg"
			);
		shuffle($images);
		?>

		<a href="<?php echo get_option('home'); ?>/" title="<?php print $title ?>">
		<!-- ************************************ -->
		<img src="<?php print $images[0]; ?>" alt="<?php print $title ?>" title="<?php print $title ?>" />
		<!-- *********************************** -->

                <!--TEMP FUCK GOOGLE WEEK HACK-->
		<!--
                <img src="http://fffff.at/fuckflickr/data/TM10/fuck-google-logo.gif" width="500"/>
                <img src="http://ni9e.com/photos/data/graffiti-analysis-paris/spacer.png" width="200" />
		<img src="http://fffff.at/fuckflickr/data/TM10/thumb/FAT-NBC-logo.jpg" width="200" />
		-->



		</a>

	</div><!-- end header -->

