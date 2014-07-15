<?php get_header(); ?>



<div id="lowercontent">

<div id="blog">

<ul id="articles">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li><h2><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="meta"><?php the_time('F j, Y'); ?> // <a href="<?php comments_link(); ?>" class="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments', 'number Comments'); ?></a></p>
<p class="tagmeta"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in: <?php the_category(', ') ?></p>

<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</li> 
<?php endwhile; else: ?>
<?php endif; ?>
</ul>

</div><!-- end blog -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
