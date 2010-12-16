<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
        <h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div class="postmetadata" style="margin: -8px 0 0 0; padding: 0; color: #777;">
          by <span class="cat"><?php the_author_posts_link(); ?></span>
        </div>


	<div class="entry">
	        
		<p style="display: none;"></p> <?php /* god i hate that yellow style, fake around it -jdubs */ ?>

		<div class="content"><?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></div>
				
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<br/>
	<div class="browse">
		<ul>
		  <li><b>BROWSE</b> / IN TIMELINE</li>
		  <li><?php previous_post_link('&laquo; %link'); ?></li>
		  <li><?php next_post_link('&raquo; %link'); ?></li>
		</ul>
		<ul>
	  	  <li><b>BROWSE</b> / TAGS
		  <span class="cat"><?php the_tags('', ', ', ''); ?></span>
	    	</ul>	
		<?php if ( false /* disabling for now */ && function_exists('related_posts')) :?>
		<ul>
			<li><b>BROWSE</b> / RELATED</li>
			<?php //related_posts(); ?>
			<?php related_posts(5, 0, '', '', '', ', ', false, false); ?>
		</ul>
		<?php endif; ?>
	</div>
			</div><!-- end entry -->
	
				<?php // threaded comments if activated -jdubs ?>
				<?php //if(function_defined('yatcp_comments_template')) yatcp_comments_template(); ?>
				<?php comments_template(); ?>

	<a href="#top" title="Return to Top"><img src="<?php bloginfo(template_directory); ?>/images/top.png" alt="Return to Top" width="20"/></a>

</div><!-- end post -->
<div id="sidebar2">
	<p class="postmetadata alt">
		<small>
			Posted by <?php the_author_posts_link(); ?> on <?php the_time('m.d.y') ?>
			to <?php the_tags(', ') ?>.
						<?php comments_rss_link('Subscribe'); ?> to follow comments on this post.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<?php comments_number('No comments yet.','One comment.','% comments.'); ?> <a href="#respond">Add your thoughts</a> or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
			Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
			You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
			Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>
		</small>
	</p>

	
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?><?php get_sidebar(); ?>

<?php get_footer(); ?>
