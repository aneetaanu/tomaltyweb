<?php
/*
*
Template Name: Testimonials
*/ get_header(); ?>
<div class="sub-navigation-container">
		<ul id="sub-navigation">
	<li class="appointment"><a href="request-appointment.php">Request an Appointment</a>
	<ul>
		<li class="noIcon"><a href="locations.php">Office Locations</a></li>
		<li class="noIcon"><a href="refer-a-friend.php">Refer a Friend</a></li>
		<li class="noIcon"><a href="post-appointment-survey.php">Post Appointment Survey</a></li>
	</ul>
	</li>
	<li class="directions"><a href="locations.php">Get Directions</a></li>
	<li class="write"><a href="write-review.php">Write a Review</a>
	<ul>
		<li class="google"><a href="https://plus.google.com/111247435049830732022/posts" target="_blank">Google</a></li>
		<li class="healthgrades"><a href="http://www.healthgrades.com/group-directory/florida-fl/boynton-beach/tomalty-dental-care-at-the-canyon-town-center-boynton-beach-fl-ycc6wt" target="_blank">Health Grades</a></li>
		<li class="yelp"><a href="http://www.yelp.ca/biz/tomalty-dental-care-boynton-beach-6" target="_blank">Yelp</a></li>
		<li class="facebook"><a href="https://www.facebook.com/TomaltyDentalCare" target="_blank">Facebook</a></li>
		<li class="insiderpages"><a href="http://www.insiderpages.com/b/15241739085/tomalty-dental-care-boynton-beach" target="_blank">Insider Pages</a></li>
		<li class="superpages"><a href="http://www.superpages.com/bp/Palm-Beach-FL/Tomalty-Dental-Care-Y8480575.htm" target="_blank">Super Pages</a></li>
		<li class="angiesList"><a href="http://my.angieslist.com/angieslist/Review/1536071?id=1536071" target="_blank">Angie's List</a></li>
	</ul>
	</li>
	<li class="perks"><a href="patient-perks.php">Patient Perks</a></li>
</ul>

	</div>
    <div id="main">
		<div class="stack">
        <div class="col-4 side">
        <?php get_template_part('sidebar-testimonial-template'); ?>
        </div>
        <?php global $post; ?>
        <div class="col-8 content">
        <?php while(have_posts()) { the_post(); ?>
        		<?php the_content(); ?>
        <?php } ?>
        <section id="testimonials">
      <?php $args = array('post_type'=>'testimonial','posts_per_page'=>-1);
      $query = new wp_query($args);
      while($query->have_posts()) { $query->the_post();
      ?>
      <div class="testimonial-item">
<div class="testimonial-text"><?php the_content(); ?></div>
<h4 class="testimonial-sender">- <?php the_title(); ?></h4>
</div>

      <?php } ?>
      </section>
</div>
</div>
</div>
<?php get_footer(); ?>