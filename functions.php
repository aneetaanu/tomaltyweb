<?php ob_start(); 
include_once('lib/widget/widget.php');
include_once('lib/widget/social-widget.php');
//include_once('lib/breadcrumbs/breadcrumbs.php');
include('lib/post/post_types.php');
include('lib/shortcode/shortcode.php');
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' ) ) {

require_once( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' );

}
if ( !isset( $redux_owd ) && file_exists( dirname(__FILE__) . '/redux-framework/sample/barebones-config.php' ) ) {
require_once( dirname(__FILE__) . '/redux-framework/sample/sample-config.php' );
}




function register_my_menus() {
  register_nav_menus(
    array(
      'header_menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'secondary_menu' => __('Secondary menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );

/***************************widgets register*****************************/



function your_widget(){	
	register_sidebar(array( 
    'name' => 'footer-one',
    'id' => 'footer-one', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));

	
	register_sidebar(array( 
    'name' => 'footer-two',
    'id' => 'footer-two', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));
register_sidebar(array( 
    'name' => 'footer-three',
    'id' => 'footer-three', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));
register_sidebar(array( 
    'name' => 'footer-four',
    'id' => 'footer-four', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));	
	register_sidebar(array( 
    'name' => 'footer-five',
    'id' => 'footer-five', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));
	register_sidebar(array( 
    'name' => 'footer-six',
    'id' => 'footer-six', // I also added the ID but doesn't work 
    'before_widget' => '<div id="%1$s" class="omc-footer-widget %2$s">',    
    'after_widget' => '</div>', 
    'before_title' => '<h4>',   
    'after_title' => '</h4>'   
));	
	
	
	
}

add_action( 'widgets_init', 'your_widget' );
/*****************************end******************************/

function my_acf_settings_capability( $path ) {

    return 'administrator';

}

add_filter('acf/settings/capability', 'my_acf_settings_capability');