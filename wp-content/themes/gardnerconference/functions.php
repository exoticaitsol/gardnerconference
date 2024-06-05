
<?php 
include(dirname(__FILE__) . "/inc/custom-functions.php");
function custom_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

function add_the_custom_css_and_js() {
    wp_enqueue_style('custom-css',  get_stylesheet_directory_uri() . '/assets/css/style.css',array(),time(), 'all' );
    wp_enqueue_style('slick',  get_stylesheet_directory_uri() . '/assets/plugins/slick-1.8.1/slick/slick.css',array(),time(), 'all' );
    wp_enqueue_style('slick-theme',  get_stylesheet_directory_uri() . '/assets/plugins/slick-1.8.1/slick/slick-theme.css',array(),time(), 'all' );
    wp_enqueue_style('jquery-uicss',  get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.css',array(),time(), 'all' );

    wp_enqueue_style('custom-media-css',  get_stylesheet_directory_uri() . '/assets/css/media-style.css',array(),time(), 'all' );
    wp_enqueue_script('jquery');
    wp_enqueue_script('gtranslate',  get_stylesheet_directory_uri() . '/assets/plugins/gtranslate/widgets/js/dwf.js?defer','1.0',['jquery'], true );
    wp_enqueue_script('slick.min.js',  get_stylesheet_directory_uri() . '/assets/plugins/slick-1.8.1/slick/slick.min.js?defer','1.0',['jquery'], true );
    wp_enqueue_script('jquery-uijs',  get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'),'1.0', true );
    wp_enqueue_script('inputmask-js',  get_stylesheet_directory_uri() . '/assets/plugins/inputmask/jquery.inputmask.min.js', array('jquery'),'1.0', true );
    wp_enqueue_script('main.js',  get_stylesheet_directory_uri() . '/assets/js/main.js',['jquery'],time(), true );
}

add_action('wp_enqueue_scripts', 'add_the_custom_css_and_js' , 10);



    // Add a filter to wp_nav_menu_items
    function add_custom_li_to_menu($items, $args) {
        if ($args->theme_location == 'Header Menu') {
            $home_url = site_url('contact-us');
            $custom_li .= '<li><a href="' . $home_url . '" class="theme_btn content_btn">Book Now</a></li>';
            $custom_li .= '<li><a href="' . $home_url .'" class="theme_btn">Contact Us</a></li>';
            $items .= $custom_li;
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'add_custom_li_to_menu', 10, 2);

    // Remove unwanted <p> tags from WordPress content
function remove_unwanted_p_tags( $content ) {
    // Replace unwanted <p> tags with empty string
    $content = preg_replace( '/<p[^>]*>\s*<\/p>/', '', $content );
    
    return $content;
}
add_filter( 'the_content', 'remove_unwanted_p_tags' );


add_action( 'edit_term', 'edit_term_callback' );

function edit_term_callback($term_id) {
$image = get_term_meta($term_id, 'term_image', true);

if(isset($_POST['category_custom_image_url']) ){

    if ($image) {
        update_term_meta($term_id, 'term_image', esc_url($_POST['category_custom_image_url']));
    } else {
        add_term_meta($term_id, 'term_image', esc_url($_POST['category_custom_image_url']));
    }
}
}

function isNotEmptyArray($array) {
    // echo '<pre>'; print_r($array);
    foreach ($array as $value) {
        if (is_array($value)) {
            if (!isNotEmptyArray($value)) {
                return 'false';
            }
        } elseif (!empty($value)) {
            return 'true';
        }
    }
    return 'false';
}


function add_active_class_to_menu_anchor($atts, $item, $args) {
    // Check if the current item is a menu item and has the 'current-menu-item' class
    if (in_array('menu-item', $item->classes) && in_array('current-menu-item', $item->classes)) {
        // Add the 'active' class to the anchor attributes
        $atts['class'] = 'active';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_active_class_to_menu_anchor', 10, 3);





?>
