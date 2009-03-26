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
<?php
	global $cmts, $cmt_ID, $comment_anchor, $comment_background, $YATCP_MAX_COMMENT_DEPTH, $YATCP_EXCLUDE_TRACKBACKS;
?>

<?php if ($cmts) : ?>

	<?php if ($comment_depth <= $YATCP_MAX_COMMENT_DEPTH) : ?>
	<ol class="yatcp_commentlist">
	<?php endif; ?>
	<?php foreach ($cmts[$cmt_ID] as $comment) : ?>
		<?php // skip trackbacks for now 
			//if( get_comment_type() != 'comment') return;
		?>

		<li class="<?php echo $comment_background; ?> bubble" id="comment-<?php comment_ID() ?>">
			<blockquote>
			<?php if ($comment->comment_approved == '0') : ?>
			<p><em><?php _e('Your comment is awaiting moderation.', 'yatcp'); ?></em></p>
			<?php endif; ?>
			<?php comment_text() ?>
			</blockquote>
                       <div class="authorline">                        
			<cite>
			<?php echo sprintf(__('%s on %s at %s', 'yatcp'), get_comment_author_link(), get_comment_date(__('d.m.Y', 'yatcp')), get_comment_time(__('H:i', 'yatcp')));?>
                        <?php if(strcmp($comment->comment_type, '') == 0 || !$YATCP_EXCLUDE_TRACKBACKS): ?>                         
			(<a href="<?php echo $comment_anchor;?>" onclick="document.forms.commentform.elements.comment_parent.value=<?php comment_ID()?>;"><?php _e('Reply', 'yatcp'); ?></a>)
			<?php edit_comment_link('edit','',''); ?>
                        <?php endif; ?>
                        <?php yatcp_print_comment_warning($comment_depth);?>
			</cite>
                        </div>

		<?php if ($comment_depth >= $YATCP_MAX_COMMENT_DEPTH) : ?>
		</li>
		<?php endif; ?>
			<div class="comment-content">
			<?php
				if(!count(yatcp_find_comments($comment))==0){
					$olddepth = $comment_depth;
					yatcp_show_comments($comment, $comment_depth, $comment_background); 
					$comment_depth = $olddepth;
				} 
			?>
			</div>
		<?php if ($comment_depth < $YATCP_MAX_COMMENT_DEPTH) : ?>
		</li>
		<?php endif; ?>

	<?php /* Changes every other comment to a different class */
	  //Only change Background for Toplevel comments, nested ones should keep the background
	  if($comment_depth == 0){	
		if ('alt' == $comment_background){ 
			$comment_background = 'even';
		}
		else{ 
			$comment_background = 'alt';
		}
	  }
	?>

	<?php endforeach; /* end for each comment */ ?>

	<?php if ($comment_depth <= $YATCP_MAX_COMMENT_DEPTH) : ?>
	</ol>
	<?php endif; ?>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', 'yatcp'); ?></p>

	<?php endif; ?>
<?php endif; ?>
