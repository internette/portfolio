<?php get_header(); ?>
<div id="container">
<div id="gallery-carousel">
 <?php the_content(); ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); 