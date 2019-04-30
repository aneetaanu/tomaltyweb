<?php
/*
*
Template Name: Home Page
*/ get_header(); ?>
<div id="main" class="homepage">
<div class="content">
<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
    <?php the_content(); ?>
<?php } } ?>
</div>
</div>
<?php get_footer(); ?>