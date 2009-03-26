<?php get_header(); ?>
<div class="post">
<div class="entry">
<p class="slogan"><?php bloginfo('description'); ?></p><br/>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
			<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <div class="postmetadata" style="margin: -8px 0 0 0; padding: 0; color: #777;">
                         by <span class="cat"><?php the_author_posts_link(); ?></span>
			 </div>

			<div class="content"><?php the_content(); ?></div>

			<p class="postmetadata">
			  Posted by <?php the_author_posts_link(); ?> on <?php the_time('m.d.y') ?> to <span class="cat"><?php the_tags('',', ') ?></span>. 
			  <big><a href="<?php comments_link(); ?>"><?php comments_number('No comments yet','One comment','% comments'); ?></a></big>.
		          <?php edit_post_link('Edit', '', ''); ?>
			</p>
			<br /><br />
	<?php endwhile; ?>
<?php endif; ?>	

<div class="navigation">
	<div class="alignleft"><?php previous_posts_link('&laquo; Newer') ?></div>
	<div class="alignright"><?php next_posts_link('Older &raquo;') ?></div>
</div> <!-- end navigation -->
</div> <!-- end entry -->
</div> <!-- end post -->

<div id="sidebar2">
	<h1>Welcome to <?php bloginfo('name'); ?></h1>
	<p class="description">
The Free Art and Technology (F.A.T.) Lab is an organization dedicated to enriching the public domain through the research and development of creative technologies and media. Release early, often and with rap music. This is Notorious R&D.<br>
<br>
The contents of the site are all in the public domain. You may enjoy, use, modify, snipe about and republish all F.A.T. media and technologies as you see fit.</p>
	</p>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
