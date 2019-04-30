<?php get_header(); ?>
<?php get_template_part('innerpage_secondary_menu'); ?>
    <div id="main">
		<div class="stack">
        <div class="col-4 side">
        <?php get_template_part('sidebar-services-template'); ?>
        </div>
        
        <div class="col-8 content">
<?php if(have_posts()) {?>
<?php while(have_posts()) { the_post(); ?>
  <?php the_content(); ?>
        
<?php } ?>
<?php }  ?>
</div>
</div>
</div>
<?php get_footer(); ?>