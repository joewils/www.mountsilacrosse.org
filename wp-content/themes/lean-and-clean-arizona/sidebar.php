<div id="right">

<div id="spandiv">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>
        
<?php endif; ?>
</div>

<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>	
<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>	



</div> <!-- end right col -->
</div><!-- end lower content -->