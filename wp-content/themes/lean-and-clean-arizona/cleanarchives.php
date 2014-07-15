<?php
/*
Template Name: Clean Archives
*/
?>

<?php get_header(); ?>



<div id="lowercontent">

<div id="blog">

<ul>

<li>
    <h1>Browse the Archives</h1>
<p>It may take a bit for all the entries to load. If you just want to search for something, try using the search bar.</p>

	<?php srg_clean_archives(); ?>

</li>

</ul>

</div><!-- end blog -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
