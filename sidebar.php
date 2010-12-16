<!-- BIGGER 'SUBSCRIBE' ISH -->
<a href="/rss" onclick="pageTracker._trackEvent('subscribe', 'rss', 'feed-pill-whitebg.gif');"><img src="http://jamiedubs.com/images/feed-pill-whitebg.gif"></a>


<!-- ***** FAT LAB TWITTER ***** -->
<!--<script src="<?php bloginfo('template_directory') ?>/js/twitter.js" type="text/javascript" charset="utf-8"></script>-->
<script type="text/javascript" charset="utf-8">
getTwitters('twitter-fffffat', {
  id: 'fffffat',
  count: 3,
  enableLinks: true,
  ignoreReplies: true,
  clearContents: true,
  template: '<span>%text%</span> <a href="http://twitter.com/%user_screen_name%/statuses/%id%/">%time%</a>'
});
</script>

<h3><a href="http://twitter.com/fffffat" style="border: 0; text-decoration: none;" onclick="pageTracker._trackEvent('socmedia', 'twitter', 'pink');"><img src="/images/twitter_icons_16.png" /> @fffffat</a></h3>
<div class="twitter-widget" id="twitter-fffffat"><em>Loading...</em></div>

<!-- **** Facebook liek button **** -->
<h3><a href="http://www.facebook.com/pages/FAT-Lab/116375168383207" onclick="pageTracker._trackEvent('socmedia', 'facebook_page', 'pink');">Facebook</a></h3>
<iframe style="border: 1px solid #eee; background-color: #f5f5f5; width: 220px; height: 80px; padding: 8px;" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F
%2Ffffff.at%2F&amp;layout=standard&amp;show_faces=true&amp;width=220&amp;action=like&amp;font=lucida+grande&amp;colorscheme=light" scrolling="no" frameborder="0" allowTra
nsparency="true" style="border:none; overflow:hidden; width:220px; height:80px"></iframe><br />



<!-- traffic from social websites (for individual posts only) -->
<?php if(function_exists('social_traffic')): ?>
<!--<h3>SOCIAL WEB TRAFFIC::</h3>-->
<?php social_traffic('<div id="social-traffic">%s</div>'); ?>
<?php endif; ?>


<!-- popular this week -->
<?php if ( function_exists('WPPP_show_popular_posts')) :?>
  <!-- popular posts lately -->
  <h3>Popular This Week::</h3>
  <?php 
    // show=posts
    WPPP_show_popular_posts( "title=&number=8&days=8&format=<a href='%post_permalink%' title='%post_title_attribute%'>%post_title%</a> (%post_views% views)" );
  ?>
<?php endif; ?>

<!-- today -->
<?php if ( function_exists('WPPP_show_popular_posts')) :?>
  <!-- popular posts lately -->
  <h3>Popular Today::</h3>
  <?php
    // show=posts
    WPPP_show_popular_posts( "title=&number=4&days=2&format=<a href='%post_permalink%' title='%post_title_attribute%'>%post_title%</a> (%post_views% views)" );
  ?>
<?php endif; ?>


<!-- popular this month via aiderss/postrank -->
<!--
<h3>Popular This Month::</h3>
<script type="text/javascript" src="http://api.postrank.com/static/widget-v2.js"></script>
<script type="text/javascript">
var options = {
	"feed_hash": "e9b44514b970e8c36bc14e793b92c20a",
	"num":        6 ,
	"theme":     "diy" 
};
new PostRankWidget(options);
</script>
-->

<!-- translations -->
<?php //if(function_exists("gltr_build_flags_bar")): ?>
<?php //jdubs: disabling for now based on some foreigner feedback re. machine translation being worse than just doing it in English ?>
<?php // also, Google throttles you pretty aggressively... frequenty downtime :\ --> ?>
<?php if(false): ?>
<h3>Auto-Translate</h3>
<div id="translations">
  <?php gltr_build_flags_bar(); ?>
</div>
<?php endif; ?>


<!-- email subscribe form -->
<form method="post" action="http://scripts.dreamhost.com/add_list.cgi">
   <input type="hidden" name="list" value="stuff" />
   <input type="hidden" name="domain" value="fffff.at" />
   <input type="hidden" name="stuff@fffff.at" value="1" />

   <h3>FAT Lab email newsletter:</h3>
   <input name="email" /><br />
   <input type="submit" name="submit" value="Sign Up Fool!" />
   <!--<input type="submit" name="unsub" value="Unsubscribe" />-->
</form>



<!-- tagcloud -->
<h3>TAGS::</h3>
<span class="cat"><ul>
<?php
/*
$opts = array('smallest' => 8, 'largest' => 15,
  'unit' => 'pt', 'number' => 80, 'format' => 'flat', 
  'orderby' => 'name', 'order' => 'ASC',
  'exclude' => '', 'include' => 'true');
*/
wp_tag_cloud('smallest=8&largest=15&number=80&order=ASC&format=flat');
?>
</ul></span>


<?php if ( function_exists('bdp_comments')) :?>	
  <!-- recent comments -->
  <h3><b>FOLLOW</b> / YOUR COMMENTS</h3>
  <ul> 
    <?php bdp_comments('5'); ?>
  </ul>
<?php endif; ?>
	

	
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>
        <?php endif; ?>


<img src="http://fffff.at/images/copyleft_drips_sm.jpg" alt="Feeds" />

        
</div><!-- end sidebar2 -->

<div id="sidebar">
        
	 <!--
         <img src="http://fffff.at/images/crown_sm.jpg" />
        <br>
        <a href="<?php bloginfo('rss2_url'); ?>"></a>
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p><?php bloginfo('description'); ?></p></br></br>
        -->

       

		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
                <?php //wp_list_pages('sort_column=menu_order&title_li='); ?>
                <?php //wp_list_pages('title_li=<h3>Inside</h3>'); ?>

                <li><h3>Search</h3></li>
		<li><?php include (TEMPLATEPATH . '/searchform.php'); ?><br/><br/></li>


		<!-- navigation -->
		<p style="font-size: 2em; font-style:bold;">
			<a href="http://fffff.at/about">About</a><br><br>
			<a href="http://fffff.at/fuckflickr">Photos</a><br><br>
			<a href="http://fffff.at/chat">IRC Chat</a><br><br>
			<a href="http://fffff.at/people">People</a><br><br>
                        <a href="http://fffff.at/category/projects">Projects</a><br><br>
			<!--<a href="http://fffff.at/category/events/">Events</a><br><br>-->
                        <a href="http://fffff.at/fucktwitter">MicroBlog</a><br><br>
                        <a href="http://soup.fffff.at">Soup</a><br><br>

			<!-- 'downloads' is kind of an ambigious category... FIXME /jdubs -->
			<!-- removing a couple of minimally used and never visited categories nov 16th 2008 -jdubs -->
			<!--<a href="http://fffff.at/category/downloads">Downloads</a><br><br>-->
			<a href="http://fffff.at/store/">Store</a><br><br>
                        <!--<a href="http://fffff.at/category/music">Music</a><br><br>-->
			<!--<a href="http://fffff.at/category/classes">Classes</a><br><br>-->
			<!--<a href="http://fffff.at/support">Donate</a><br><br>-->
			<a href="http://fffff.at/contact">Contact</a><br><br>
		

		</p>
		
		
                <!-- Tokyo FAT LINK  -->
                <a href="http://tokyo.fffff.at">Tokyo F.A.T.</a>:<br><img src="http://fffff.at/fuckflickr//data/MISC/tkyfffffat_banner_200px.jpg" />

		<!-- some twitter shit -->
<!--		<li id="twitter"><h3>AGENT UPDATES</h3>-->
<?php //$peeps = array('jamiew', 'tobimcfly', 'agoasi', 'gleuch', 'fi5e'); ?>
<?php $peeps = array(); //DISABLED atm, twitter being funky ?>
<?php foreach($peeps as $peep): ?>
<div id="twitter-<?php print $peep ?>"></div>
<script type="text/javascript">
getTwitters('twitter-<?php print $peep ?>', { 
  id: '<?php print $peep ?>', 
  count: 1, 
  enableLinks: true, 
  ignoreReplies: true, 
  clearContents: true,
  template: '<strong><a href="http://twitter.com/%user_screen_name%/"><?php print $peep ?></a></strong>: "%text%" <a href="http://twitter.com/%user_screen_name%/statuses/%id%/">%time%</a>'
});
</script>
<?php endforeach; ?>
</li>
	

		<!--
		<li><h3>Archives</h3>
				<ul>
				<?php// wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php //wp_list_bookmarks('title_before=<h3>&title_after=</h3>'); ?>
				<?php } ?>
                 -->
			
<li>Copyfree and in the Public Domain; 2007-<?php print date('Y') ?> by <?php bloginfo('name'); ?>. No rights reserved.<br/>
<br>
<br>

<link rel="alternate" type="application/rss+xml" title="F.A.T. RSS Feed" href="http://feeds2.feedburner.com/fffff/feed" />

<!-- this shit is 404 now /jdubs -->
<!-- yo it's back! /slam -->
<small><a href="http://samtravisewen.com/">Sam Travis Ewen</a></small>

			
			<?php endif; ?>
		</ul>


</div><!-- end sidebar -->
