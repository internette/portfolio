<?php get_header(); ?>
<div id="container">
<?php get_sidebar(); ?>
<div id="gallery-carousel">
<?php the_post(); ?>
<?php the_content(); ?>
</div>
</div>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); 