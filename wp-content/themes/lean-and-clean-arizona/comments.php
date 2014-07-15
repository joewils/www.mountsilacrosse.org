<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here.-->

<a name="comments" id="comments"></a>
<div id="comments">
<?php if ($comments) : ?>
<h3>Recent Comments</h3>
 
<ul class="commentlist">
<?php foreach ($comments as $comment) : $comment_count++; ?>
	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
	
<p class="avatar"><?php 
   echo get_avatar( $comment, $size = '44', $default = 'images/gravatar.png' ); 
   ?></p>
   <p class="commentmeta"><?php comment_author_link() ?> said...</p>
			<span class="commentnumber"><?php echo $comment_count; ?></span>
	<?php if ($comment->comment_approved == '0') : ?>
	<em>Your comment is awaiting moderation.</em>
	<?php endif; ?>
	<div class="commenttext"><?php comment_text() ?></div>
<p class="commentdate"><?php comment_time('m/j/y g:i A') ?> | <a href="#comment-<?php comment_ID() ?>" title="Permalink to this comment">Comment Link</a> <?php edit_comment_link(); ?></p>
</li>


	<?php /* Changes every other comment to a different class */	
		if ('graybox' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'graybox';
	?>

	<?php endforeach; /* end for each comment */ ?>
	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>


<div id="reply">

<h3>Leave A Comment</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<ul class="sidelist">
<li>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></li>
</ul>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="emailaddress" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

 <?php // echo allowed_tags(); ?>

<p><textarea name="comment" id="comment" cols="50" rows="15" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>



