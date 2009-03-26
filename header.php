<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

        <!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/applesearch.js"></script>
        <script type="text/javascript">window.onload = function () { applesearch.init(); }</script>-->

	<!-- twitter loader -->
	<script type="text/javascript" src="http://twitterjs.googlecode.com/files/twitter-1.11.1.js" />

	<?php wp_head(); ?>
</head>
<body>

	<a name="top"></a>
<div id="wrapper">
	<div id="header">
		<!-- ************************************ -->
		<!-- dope iheaders go here -->
		<?php 
		$title = "FAT LAB: free art & technology / hacking in the public domain / notorious R&D"; 
		$images = array(	
			//'http://fffff.at/images/FATLAB.gif', 
			//"http://fffff.at/theme/images/biggie.jpg", 
			//"http://fffff.at/images/fffffat_banner.jpg",
			"http://fffff.at/images/fffffat_banner_2.jpg"
			);
		shuffle($images);
		?>
		<a href="<?php echo get_option('home'); ?>/" title="<?php print $title ?>">
		<!-- ************************************ -->
		<img src="<?php print $images[0]; ?>" alt="<?php print $title ?>" title="<?php print $title ?>" />
		<!-- *********************************** -->
		</a>

	</div><!-- end header -->

