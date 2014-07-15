<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?> &raquo; <?php bloginfo('description'); ?></title><link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('url'); ?>/feed/" />
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>
</head>
<body>


<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_id' => 'nav' ) ); ?>
<!--
<ul id="nav">
		<li><a <?php if (is_page('home')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/">Home</a></li>
		<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
		</ul>-->

<div id="container">

<div id="header">

<h2><?php bloginfo('description'); ?></h2>

</div><!-- end header -->