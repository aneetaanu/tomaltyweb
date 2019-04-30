<?php
/*************************Services**********************/
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Services', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'All Services', 'twentythirteen' ),
        'view_item'           => __( 'View Services', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Services', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Services', 'twentythirteen' ),
        'update_item'         => __( 'Update Services', 'twentythirteen' ),
        'search_items'        => __( 'Search services', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Services', 'twentythirteen' ),
        'description'         => __( 'Services news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'   => 'dashicons-admin-tools',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Services', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/



add_action( 'init', 'custom_post_type', 0 );

 
       



/***************************end********************/


/**************************testimonial*************/
 function testimonial_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonial', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Testimonial', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'twentythirteen' ),
        'all_items'           => __( 'All Testimonial', 'twentythirteen' ),
        'view_item'           => __( 'View Testimonial', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Testimonial', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Testimonial', 'twentythirteen' ),
        'update_item'         => __( 'Update Testimonial', 'twentythirteen' ),
        'search_items'        => __( 'Search Testimonial', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Testimonial', 'twentythirteen' ),
        'description'         => __( 'Testimonial news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'   => 'dashicons-testimonial',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Testimonial', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'testimonial_type', 0 );

/*********************End*************************************/

/*********************Our Doctors*******************************/
function doctor_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Our Doctors', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Our Doctors', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Our Doctors', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Our Doctors', 'twentythirteen' ),
        'all_items'           => __( 'All Our Doctors', 'twentythirteen' ),
        'view_item'           => __( 'View Our Doctors', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Our Doctors', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Our Doctors', 'twentythirteen' ),
        'update_item'         => __( 'Update Our Doctors', 'twentythirteen' ),
        'search_items'        => __( 'Search Our Doctors', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Our Doctors', 'twentythirteen' ),
        'description'         => __( 'Our Doctors news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'   => 'dashicons-plus-alt',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Our Doctors', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'doctor_type', 0 );
/**************************end***********************************************************/