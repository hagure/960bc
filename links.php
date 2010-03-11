<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<!-- The class "grid_7" restricts the div to 7 columns wide -->
<div id="content" class="grid_12">

<h3>Links:</h3>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>

</div><!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
