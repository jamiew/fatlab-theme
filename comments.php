<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
<p class="nocomments">This post is password protected. Enter the password to view comments.
<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<h3 id="comments">COMMENTS</h3> 
<?php 
  /* comment count not accurate for trackback seperation */ 
  /* comments_number('BE THE FIRST TO COMMENT', 'ONE COMMENT', '% COMMENTS' ); */ ?>
<?php foreach ($comments as $comment) : ?>
	<?php $comment_type = get_comment_type(); ?>
	<?php if($comment_type == 'comment') { ?>
<div class="<?php echo $oddcomment; ?> bubble" id="comment-<?php comment_ID() ?>">
	<blockquote><?php comment_text() ?></blockquote>
	<cite><?php comment_author_link() ?> added these pithy words on <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('M d y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?>
	</cite> 
	<?php if ($comment->comment_approved == '0') : ?>
	  <em>Your comment is awaiting moderation.</em>
	<?php endif; ?>
</div>
	<?php /* Changes every other comment to a different class */
	  if ('alt' == $oddcomment) $oddcomment = '';
	  else $oddcomment = 'alt';
	?>
	<?php } else { $trackback = true; } /* End of is_comment statement */ ?>
<?php endforeach; /* end for each comment */ ?>
	

<!-- trackbacks -->
<?php if ($trackback == true) { ?>
  <h3 id="trackbacks">INCOMING LINKS</h3>
  <ol>
  <?php foreach ($comments as $comment) : ?>
    <?php $comment_type = get_comment_type(); ?>
    <?php if($comment_type != 'comment') { ?>
    <li><?php comment_author_link() ?></li>
    <?php } ?>
  <?php endforeach; ?>
</ol>
<?php } ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<h3 id="respond"><b>SPEAK</b> / ADD YOUR COMMENT</h3>

<!-- jdubs: some info about what kind of ish we allow in our comments -->
<blockquote>
URLs to images will be automatically displayed<br />
allowed HTML: <code>&lt;a href="..."&gt;, &lt;img src="..."&gt;, &lt;b&gt;, &lt;i&gt;, &lt;pre&gt;, &lt;code&gt;</code>
</blockquote>
<!-- end notes -->


<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.
</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>
	<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a>
	</p>

<?php else : ?>
	<p>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
		<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
	</p>
	<p>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
		<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label>
	</p>
	<p>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
		<label for="url"><small>Website</small></label>
	</p>

<?php endif; ?>
    <p><textarea name="comment" id="comment" tabindex="4"></textarea></p>
	<p>
		<input name="submit" type="image" style="width: 74px; height:24px;" src="<?php bloginfo('template_url'); ?>/images/speak.png" id="submit" tabindex="5" value="Submit Comment" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>
<?php do_action('comment_form', $post->ID); ?>
</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
