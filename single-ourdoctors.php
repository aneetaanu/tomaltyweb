<?php get_header(); ?>
<?php get_template_part('innerpage_secondary_menu'); ?>

    <div id="main">
		<div class="stack">
        <div class="col-4 side">
        <?php get_template_part('sidebar-doctor-template'); ?>
        </div>
        
        <div class="col-8 content staffPage">
<?php if(have_posts()) {?>
<?php while(have_posts()) { the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php if(get_field('sub_field')) { echo '<h2>'.get_field('sub_field').'</h2>';} ?>
  <div class="row">
  <div class="">
    <?php the_content(); ?>
    </div>
    
<?php } ?>
<?php }  ?>
</div>
</div>
</div>
<?php get_footer(); ?>