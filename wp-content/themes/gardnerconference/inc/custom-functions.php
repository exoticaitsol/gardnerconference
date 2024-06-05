<?php

// Register the  Nave menu un the  to admin area
function wpb_custom_new_menu(){
register_nav_menus(
    array(
      'header-menu' => __( 'header-menu' ),
      'about-menu' => __( 'about-menu' ),
      'legal-information-menu' => __( 'legal-information-menu' ),
    )
  );
}


function create_custome_post_type() {
  $custom_post_array = [
    [
        'name'=>'Events',
        'singular_name'=>'events',
        'slug'=>'events',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'=>'dashicons-calendar-alt',
        'menu_position'=>5,
        'post_type_name'=>'events',
        'menu_catagories'=>1,
        'catagory_name'=>'event_catagories'
    ],    [
        'name'=>'Services',
        'singular_name'=>'services',
        'slug'=>'services',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-welcome-widgets-menus', // Menu icon
        'menu_position'=>5,
        'post_type_name'=>'services',
        'menu_catagories'=>null,
        'catagory_name'=>'services_catagories'
    ],[
        'name'=>'Slider',
        'singular_name'=>'slider',
        'slug'=>'slider',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-menus', // Menu icon
        'menu_position'=>5,
        'post_type_name'=>'slider',
        'menu_catagories'=>1,
        'catagory_name'=>'slider_catagories'
    ],[
        'name'=>'faqs',
        'singular_name'=>'faqs',
        'slug'=>'faqs',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-menus', // Menu icon
        'menu_position'=>5,
        'post_type_name'=>'faqs',
        'menu_catagories'=>null,
        'catagory_name'=>'faqs_catagories'
    ],[
        'name'=>'Vendor',
        'singular_name'=>'vendor',
        'slug'=>'faqs',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-menus', // Menu icon
        'menu_position'=>5,
        'post_type_name'=>'vendor',
        'menu_catagories'=>1,
        'catagory_name'=>'vendorcatagories'
    ],[
        'name'=>'event-planner',
        'singular_name'=>'eventplanner',
        'slug'=>'eventplanner',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'             => 'dashicons-businessman',        'menu_position'=>5,
        'post_type_name'=>'eventplanner',
        'menu_catagories'=>null,
        'catagory_name'=>'faqs_catagories'
    ],[
        'name'=>'Testonomails',
        'singular_name'=>'testonomails',
        'slug'=>'testonomails',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'             => 'dashicons-businessman',        'menu_position'=>5,
        'post_type_name'=>'Testonomails',
        'menu_catagories'=>null,
        'catagory_name'=>'testonomails_catagories'
      ]
];
foreach ($custom_post_array as $key => $value) {
  $postlabels = array(
      'name'                  => _x($value['name'], 'Post Type General Name', 'text_domain'),
      'singular_name'         => _x($value['name'], 'Post Type Singular Name', 'text_domain'),
      'menu_name'             => __($value['name'], 'text_domain'),
      'name_admin_bar'        => __($value['name'], 'text_domain'),
      'archives'              => __($value['name'].' Archives', 'text_domain'),
      'attributes'            => __(''.$value['name'].' Attributes', 'text_domain'),
      'parent_item_colon'     => __('Parent '.$value['name'].'', 'text_domain'),
      'all_items'             => __('All '.$value['name'].'', 'text_domain'),
      'add_new_item'          => __('Add New '.$value['name'].'', 'text_domain'),
      'add_new'               => __('Add New', 'text_domain'),
      'new_item'              => __('New '.$value['name'].'', 'text_domain'),
      'edit_item'             => __('Edit '.$value['name'].'', 'text_domain'),
      'update_item'           => __('Update '.$value['name'].'', 'text_domain'),
      'view_item'             => __('View '.$value['name'].'', 'text_domain'),
      'view_items'            => __('View '.$value['name'].'', 'text_domain'),
      'search_items'          => __('Search '.$value['name'].'', 'text_domain'),
      'not_found'             => __('Not found in '.$value['name'].'', 'text_domain'),
      'featured_image'        => __('Featured Image for '.$value['name'].'', 'text_domain'),
      'set_featured_image'    => __('Set featured image for '.$value['name'].'', 'text_domain'),
      'insert_into_item'      => __('Insert into '.$value['name'].'', 'text_domain'),
      'uploaded_to_this_item' => __('Uploaded to this '.$value['name'].'', 'text_domain'),
      'items_list'            => __(''.$value['name'].' list', 'text_domain'),
      'items_list_navigation' => __(''.$value['name'].' list navigation', 'text_domain'),
      'filter_items_list'     => __('Filter '.$value['name'].' list', 'text_domain'),
  );
  $Postargs = array(
      // 'label'                 => __(''.$value['name'].'', 'text_domain'),
      'label'                 => __( 'Parabnet', 'text_domain' ),

      'description'           => __(''.$value['name'].' posts', 'text_domain'),
      'labels'                => $postlabels,
      'supports'           => $value['supports'],
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         =>  $value['menu_position'],
      'menu_icon'             => $value['menu_icon'], // You can choose a different icon from Dashicons
      'show_in_admin_bar'     => true,
      'rewrite'       => array('slug' => $value['slug']),
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
  );
  register_post_type($value['post_type_name'], $Postargs);
  //
  if ($value['menu_catagories']) {
       $catagories_labels = array(
      'name'                       => _x(''.$value['name'].' Categories', 'Taxonomy General Name', 'text_domain'),
      'singular_name'              => _x(''.$value['name'].' Category', 'Taxonomy Singular Name', 'text_domain'),
      'menu_name'                  => __('Categories', 'text_domain'),
      'all_items'                  => __('All '.$value['name'].' Categories', 'text_domain'),
      'parent_item'                => __('Parent '.$value['name'].' Category', 'text_domain'),
      'parent_item_colon'          => __('Parent '.$value['name'].' Category:', 'text_domain'),
      'new_item_name'              => __('New  '.$value['name'].' Category Name', 'text_domain'),
      'add_new_item'               => __('Add '.$value['name'].' New Category', 'text_domain'),
      'edit_item'                  => __('Edit '.$value['name'].' Category', 'text_domain'),
      'update_item'                => __('Update '.$value['name'].' Category', 'text_domain'),
      'view_item'                  => __('View '.$value['name'].' Category', 'text_domain'),
      'popular_items'              => __('Popular Categories in '.$value['name'].'', 'text_domain'),
      'search_items'               => __('Search Categories in '.$value['name'].'', 'text_domain'),
      'not_found'                  => __('Not Found in '.$value['name'].'', 'text_domain'),
      'no_terms'                   => __('No '.$value['name'].' categories', 'text_domain'),
      'items_list'                 => __(''.$value['name'].' Categories list', 'text_domain'),
      'items_list_navigation'      => __(''.$value['name'].' Categories list navigation', 'text_domain'),
  );
      $catagoriesargs = array(
      'labels'                     => $catagories_labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
  );
  register_taxonomy($value['catagory_name'], array($value['post_type_name']), $catagoriesargs);
  }
}
}


function Trusting_Widget() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'F', 'twentytwentyone' ),
            'id'            => 'Trusting',
            'description'   => esc_html__( 'Add widgets here to appear in your social.', 'twentytwentyone' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ),
    );
}
add_action( 'widgets_init', 'Trusting_Widget' );

add_action('init', function () {
wpb_custom_new_menu();
create_custome_post_type();
// Create_customn_Widget_in_Wordpress();

});

// Step 1: Define function to add customizer settings
function custom_theme_customizer_settings($wp_customize) {
    // Add section for site identity (if it doesn't exist already)
    $wp_customize->get_section('title_tagline')->title = __('Site Identity', 'your-theme-textdomain');


// Define an array of settings and controls
$customizer_fields = array(
    array(
        'setting_id' => 'custom_logo',
        'control_args' => array(
            'label'     => __('Site Logo', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 5,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),
    array(
        'setting_id' => 'footer_section_1',
        'control_args' => array(
            'label'     => __('Footer Section 1 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'about_us_description',
        'control_args' => array(
            'label'     => __('About Us Description', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'textarea',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'footer_section_2',
        'control_args' => array(
            'label'     => __('Footer Section 2 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'footer_section_3',
        'control_args' => array(
            'label'     => __('Footer Section 3 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'footer_section_4',
        'control_args' => array(
            'label'     => __('Footer Section 4 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'location_image',
        'control_args' => array(
            'label'     => __('Location Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 10,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),   array(
        'setting_id' => 'website_site_Address',
        'control_args' => array(
            'label'     => __('Site Address', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ),    array(
        'setting_id' => 'site_address_link',
        'control_args' => array(
            'label'     => __('Site Address Link', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'url',
            'priority'  => 30,
        ),
    ),
    array(
        'setting_id' => 'email_image',
        'control_args' => array(
            'label'     => __('email Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 40,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),

    array(
        'setting_id' => 'email_address',
        'control_args' => array(
            'label'     => __('email Address', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'email',
            'priority'  => 50,
        ),
    ),
    array(
        'setting_id' => 'footer_section_5',
        'control_args' => array(
            'label'     => __('Footer Section 5 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'phone_image',
        'control_args' => array(
            'label'     => __('phone Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 60,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),


    array(
        'setting_id' => 'website_phone_number_1',
        'control_args' => array(
            'label'     => __('Website Phone Number 1', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'tel',
            'priority'  => 80,
        ),
        
    ),
    array(
        'setting_id' => 'website_phone_number_2',
        'control_args' => array(
            'label'     => __('Website Phone Number 2', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'tel',
            'priority'  => 90,
        ),
        
    ),
    array(
        'setting_id' => 'footer_section_6',
        'control_args' => array(
            'label'     => __('Footer Section 6 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 20,
        ),
    ), 
    array(
        'setting_id' => 'insta_image',
        'control_args' => array(
            'label'     => __('Insta Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 100,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),
    array(
        'setting_id' => 'insta_url',
        'control_args' => array(
            'label'     => __('Insta url', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 110,
            'type'      => 'url',
        ),
    ),    array(
        'setting_id' => 'facebook_image',
        'control_args' => array(
            'label'     => __('facebook Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 120,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),
    array(
        'setting_id' => 'facebook_url',
        'control_args' => array(
            'label'     => __('facebook url', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 130,
            'type'      => 'url',
        ),
    ),
    array(
        'setting_id' => 'twitter_image',
        'control_args' => array(
            'label'     => __('twitter Image', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 140,
            'mime_type' => 'image', // Only allow image mime types
        ),
    ),
    array(
        'setting_id' => 'twitter_url',
        'control_args' => array(
            'label'     => __('twitter url', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'priority'  => 150,
            'type'      => 'tel',
        ),
    ),
    array(
        'setting_id' => 'footer_section_7',
        'control_args' => array(
            'label'     => __('Footer Section 7 Heading', 'your-theme-textdomain'),
            'section'   => 'title_tagline',
            'type'      => 'text',
            'priority'  => 160,
        ),
    ),
);

// Loop through the settings array and add settings and controls dynamically
foreach ($customizer_fields as $field) {
    // Add setting
    $wp_customize->add_setting($field['setting_id'], array(
        'default'           => '',
        'sanitize_callback' => ($field['setting_id'] === 'site_address_link') ? 'esc_url_raw' : 'sanitize_textarea_field',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, $field['setting_id'], $field['control_args']));
}

}
add_action('customize_register', 'custom_theme_customizer_settings');





?>