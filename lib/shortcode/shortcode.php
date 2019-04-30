<?php 
add_action( 'vc_before_init', 'your_name_integrateWithVC' );
function your_name_integrateWithVC() {
 vc_map( array(
  "name" => __( "Menu", "my-text-domain" ),
  "base" => "menu",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Text", "my-text-domain" ),
  "param_name" => "foo",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 )
  )
 ) );
}

add_shortcode('menu','menu');
function menu(){
ob_start();
 wp_nav_menu(array('theme_location'=>'secondary_menu','container'=>false,'menu_class'=>'sub-navigation','menu_id'=>'sub-navigation')); 

return ob_get_clean();
}


//////////////////////////////////////////////////////////////

add_action( 'vc_before_init', 'your_name_home_page_widget' );
function your_name_home_page_widget() {
 vc_map( array(
  "name" => __( "Home Page Widget", "my-text-domain" ),
  "base" => "home_page_widget",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 
 array(
  "type" => "attach_image",
  "holder" => "div",
  "class" => "",
  "heading" => __( "box 1 Image", "my-text-domain" ),
  "param_name" => "box_1_img",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Heading", "my-text-domain" ),
  "param_name" => "heading_1",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url Title", "my-text-domain" ),
  "param_name" => "url_title_1",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url link", "my-text-domain" ),
  "param_name" => "url_link_1",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),///attach_image
 
 array(
  "type" => "attach_image",
  "holder" => "div",
  "class" => "",
  "heading" => __( "box 2 Image", "my-text-domain" ),
  "param_name" => "box_2_img",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Heading", "my-text-domain" ),
  "param_name" => "heading_2",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url Title", "my-text-domain" ),
  "param_name" => "url_title_2",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url link", "my-text-domain" ),
  "param_name" => "url_link_2",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),///attach_image
 
 array(
  "type" => "attach_image",
  "holder" => "div",
  "class" => "",
  "heading" => __( "box 3 Image", "my-text-domain" ),
  "param_name" => "box_3_img",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Heading", "my-text-domain" ),
  "param_name" => "heading_3",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url Title", "my-text-domain" ),
  "param_name" => "url_title_3",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url link", "my-text-domain" ),
  "param_name" => "url_link_3",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),///attach_image
 
 array(
  "type" => "attach_image",
  "holder" => "div",
  "class" => "",
  "heading" => __( "box 4 Image", "my-text-domain" ),
  "param_name" => "box_4_img",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Heading", "my-text-domain" ),
  "param_name" => "heading_4",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url Title", "my-text-domain" ),
  "param_name" => "url_title_4",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Url link", "my-text-domain" ),
  "param_name" => "url_link_4",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),///attach_image
 
  )
 ) );
}

add_shortcode('home_page_widget','home_page_widget');
function home_page_widget($atts){ 
   extract( shortcode_atts( array(
        'box_1_img' => '',
        'heading_1' => 'text',
        'url_title_1' =>'test',
        'url_link_1' => '#',

        'box_2_img' => '',
        'heading_2' => 'text',
        'url_title_2' =>'test',
        'url_link_2' => '#',

        'box_3_img' => '',
        'heading_3' => 'text',
        'url_title_3' =>'test',
        'url_link_3' => '#',

        'box_4_img' => '',
        'heading_4' => 'text',
        'url_title_4' =>'test',
        'url_link_4' => '#',
        
    ), $atts ) );
    ob_start();
  ?>
  <ul id="callouts">
  <?php if($box_1_img) { ?>
				<li class="one">
					<a href="<?php echo $url_link_1; ?>"><img src="<?php echo wp_get_attachment_url($box_1_img); ?>" alt=""></a>
					<h2><?php echo $heading_1; ?></h2>
					<p>
						<a href="<?php echo $url_link_1; ?>"><i class="icon"></i><?php echo $url_title_1; ?></a>
					</p>
				</li>
      <?php } ?>  
       <?php if($box_2_img) { ?>
				<li class="two">
					<a href="<?php echo $url_link_2; ?>"><img src="<?php echo wp_get_attachment_url($box_2_img); ?>" alt=""></a>
					<h2><?php echo $heading_2; ?></h2>
					<p>
						<a href="<?php echo $url_link_2; ?>"><i class="icon"></i><?php echo $url_title_2; ?></a>
					</p>
				</li>
      <?php } ?>  
       <?php if($box_3_img) { ?>
				<li class="three">
					<a href="<?php echo $url_link_3; ?>"><img src="<?php echo wp_get_attachment_url($box_3_img); ?>" alt=""></a>
					<h2><?php echo $heading_3; ?></h2>
					<p>
						<a href="<?php echo $url_link_3; ?>"><i class="icon"></i><?php echo $url_title_3; ?></a>
					</p>
				</li>
      <?php } ?>  
       <?php if($box_4_img) { ?>
				<li class="three">
					<a href="<?php echo $url_link_4; ?>"><img src="<?php echo wp_get_attachment_url($box_1_img); ?>" alt=""></a>
					<h2><?php echo $heading_4; ?></h2>
					<p>
						<a href="<?php echo $url_link_4; ?>"><i class="icon"></i><?php echo $url_title_4; ?></a>
					</p>
				</li>
      <?php } ?>  
				
				
				
			</ul>
  <?php 
  return ob_get_clean();
}

//////////////////////////////////////////////////////////// Slider

add_action( 'vc_before_init', 'your_name_slider_shrotcode' );
function your_name_slider_shrotcode() {
 vc_map( array(
  "name" => __( "custom slider", "my-text-domain" ),
  "base" => "slider_shrotcode",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 
 array(
  "type" => "attach_images",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Slider Images", "my-text-domain" ),
  "param_name" => "slider_img",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 )
 
  )
 ) );
}
add_shortcode('slider_shrotcode','slider_shrotcode');
function slider_shrotcode($atts){
extract( shortcode_atts( array(
        'slider_img' => '',      
    ), $atts ) );
ob_start();
$imgs = explode(',',$slider_img);
?>
<div class="slider-wrapper theme-default">
<div id="slider13144">
<!--Slide Images-->
<?php if(!empty($imgs)) { ?>
   <?php 
      foreach($imgs as $img_id) { 
     $data = wp_get_attachment_url($img_id);
    $image_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

    ?>
   <img src="<?php echo $data; ?>" alt="<?php echo $image_alt; ?>" data-thumb="<?php echo $data; ?>" />

   <?php } ?>
<?php } ?>

</div>
<!--Slide Captions-->
<!--Slide Pagination-->
<div class="pagination">
<span class="prev">Prev</span>
<span class="next">Next</span>
</div>
</div>
<?php 
return ob_get_clean();
}