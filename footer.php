<?php global $redux_demo; ?>
<footer>
  
	 <div class="stack">
		 <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
    <div class="col-6">
        
		
			  <?php dynamic_sidebar( 'footer-one' ); ?>
    
        </div><?php endif; ?>
   
    <div class="col-6">
      <div class="stack">
		  <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
        <div class="col-6 med-col-6 tab-col-6 mob-col-6">
         
			  <?php dynamic_sidebar( 'footer-two' ); ?>
        </div><?php endif; ?>
		
		    <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
		 <div class="col-6 med-col-6 tab-col-6 mob-col-6">
          <?php dynamic_sidebar( 'footer-three' ); ?>
        </div><?php endif; ?>
      </div>
      <div class="stack">
		  <?php if ( is_active_sidebar( 'footer-four' ) ) : ?>
        <div class="col-6 med-col-6 tab-col-6 mob-col-6">
          <?php dynamic_sidebar( 'footer-three' ); ?>
        </div><?php endif; ?>
		  <?php if ( is_active_sidebar( 'footer-four' ) ) : ?>
        <div class="col-6 med-col-6 tab-col-6 mob-col-6">
         <?php dynamic_sidebar( 'footer-four' ); ?>
        </div><?php endif; ?>
      </div>
      <div class="stack">
		   <?php if ( is_active_sidebar( 'footer-five' ) ) : ?>
        <div class="col-6 med-col-6 tab-col-6 mob-col-6">
           <?php dynamic_sidebar( 'footer-five' ); ?>
        </div><?php endif; ?>
		   <?php if ( is_active_sidebar( 'footer-six' ) ) : ?>
        
           <?php dynamic_sidebar( 'footer-six' ); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if($redux_demo['copy_rights'] !="") { ?>
    <p class="copyright"><?php echo $redux_demo['copy_rights']; ?></p>
    <?php } ?>
  </div>
	</div>

</footer>
<?php if($redux_demo['enable_disable']) { ?>
<ul id="social" style="left: -20px;">
<?php if($redux_demo['facebook_url'] !="") { ?>
		<li class="facebook"><a href="<?php echo $redux_demo['facebook_url']; ?>" target="_blank" title="Facebook"></a></li>
<?php } ?>        

<?php if($redux_demo['google_url'] !="") { ?>
		<li class="google"><a href="<?php echo $redux_demo['google_url']; ?>" target="_blank" title="Google"></a></li>
<?php } ?>        

<?php if($redux_demo['yelp_url'] !="") { ?>
		<li class="yelp"><a href="<?php echo $redux_demo['yelp_url']; ?>" target="_blank" title="Yelp"></a></li>
<?php } ?>        

<?php if($redux_demo['twitter_url'] !="") { //appointment_url ?>
		<li class="twitter"><a href="<?php echo $redux_demo['twitter_url']; ?>" target="_blank"></a></li>
<?php } ?>        

<?php if($redux_demo['appointment_url'] !="") { //appointment_url ?>
		<li class="appointment"><a href="<?php echo $redux_demo['appointment_url']; ?>" title="Request an Appointment"></a></li>
<?php } ?>                
<?php if($redux_demo['youtube_url'] !="") { //appointment_url ?>
		<li class="youtube"><a href="<?php echo $redux_demo['youtube_url']; ?>" target="_blank"></a></li>
<?php } ?>                        
</ul>
    <?php } ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script src="//cdn.letgroup.com/shared/scripts/jquery.migrate.js"></script> 
<script src="//cdn.letgroup.com/shared/scripts/jquery.touchSwipe.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.backstretch.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.carouFredSel.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.validate.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.form.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script> 

<script src="http://cdn.letgroup.com/shared/scripts/jquery.carouFredSel.js"></script> 
<script>
$("#features").carouFredSel({
items: { visible: 2, minimum: 2, }, width: 675, direction: "left",
prev :	{ button: ".back", key: "left" },
next :	{ button: ".next", key: "right" },
auto :	{ play : true, timeoutDuration: "2000" },
scroll : { items: 1, duration: 700, pauseOnHover: true }
});

jQuery(document).ready(function($) {
$("#slider13144").nivoSlider({ effect: "fade", controlNavThumbs: true, boxCol: 10, boxRow: 8, animSpeed:1000, pauseTime:4000, pauseOnHover: false });
});

</script> 

<?php wp_footer(); ?>

<script src="//cdn.letgroup.com/shared/scripts/nivo/jquery.nivo.slider.pack.js"></script>
<script src="//cdn.letgroup.com/shared/scripts/nivo/jquery.easing.js"></script>
<script src="//cdn.letgroup.com/shared/scripts/jquery.carouFredSel.js"></script>
<script src="//cdn.letgroup.com/shared/scripts/let-nivo-gallery.js"></script>
</body>
</html>