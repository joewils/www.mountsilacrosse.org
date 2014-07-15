<?php get_header(); ?>



<div id="lowercontent">

<div id="blog">

<ul id="articles">
<?php //if (have_posts()) : ?>
		
<?php //while (have_posts()) : the_post(); ?>
				
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li>				
<h2><?php the_title(); ?></h2>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</li>
<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>



</ul>

</div><!-- end blog -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
