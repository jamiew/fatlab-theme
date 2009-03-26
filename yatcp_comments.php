<?php
 		/*
		Copyright 2007  Joachim Praetorius (yatcp@organisiert.net)

    YATCP is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation using version 2 of the License.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
		*/
?>

<?php // Do not delete these lines
	if ('yatcp_comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
							echo ('<p class="nocomments">'.__('This post is password protected. Enter the password to view comments.').'<p>');
							return;
            }
        }
?>

<!-- You can start editing here. -->
	<h3 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments') );?></h3> 
	<?php yatcp_show_comments();?>
	<?php if ('open' == $post->comment_status) : ?>
		<h3 id="respond"><?php _e('Leave a comment')?></h3>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p><?php _e('Sorry, you must be logged in to post a comment.');?> <a href="<?php echo get_option('siteurl');?>/wp-login.php?redirect_to=<?php the_permalink();?>"><?php _e('Login');?></a>
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			
			<?php if($user_ID): ?>
				<p><?php _e('Logged in as', 'yatcp');?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Logout')?>"><?php _e('Logout')?> &raquo;</a></p>
			<?php else: ?>
				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
				<label for="author"><small><?php _e('Name');?> <?php if ($req) _e('(required)'); ?></small></label></p>

				<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
				<label for="email"><small><?php _e('E-Mail:'); _e('(not displayed)', 'yatcp'); if ($req) _e("(required)"); ?></small></label></p>

				<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label for="url"><small><?php _e('Website:');?></small></label></p>
			<?php endif; ?>

			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
			<?php do_action('comment_form', $post->ID); ?>
			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Save');?>" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
			</form>
		<?php endif; // If registration required and not logged in ?>
	<?php else: //comments open? ?>
		<p><?php _e('Sorry, the comment form is closed at this time.');?></p>
	<?php endif; // If Comments are open ?>
