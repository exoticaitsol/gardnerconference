<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title> <?php wp_title('', true, '');?> </title>
</head>

<body>
    <header>
        <div class="top_bar_header">
            <?php
                $custom_logo_url = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full' );
                $location_image = wp_get_attachment_image_src(get_theme_mod( 'location_image' ), 'full' );
                $email_image = wp_get_attachment_image_src(get_theme_mod( 'email_image' ), 'full' );
                $phone_image = wp_get_attachment_image_src(get_theme_mod( 'phone_image' ), 'full' );
            ?>
            <ul>
                <li>
                    <a href="<?= get_theme_mod( 'site_address_link' );?>" target='_blank'>
                        <span>
                            <img src="<?= $location_image[0];?>" alt="">
                        </span>
                        <p><?= get_theme_mod( 'website_site_Address' );?></p>

                    </a>
                </li>
                <li>
                    <a href="tel:<?= get_theme_mod( 'website_phone_number_1' );?>">
                        <span> <img src="<?= $phone_image[0];?>" alt=""></span>
                        <p> <?= get_theme_mod( 'website_phone_number_1' );?></p>

                    </a>
                </li>
                <li>
                    <div class="google-translate">
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                    <!-- <a href="">
                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flag.png"
                                alt=""></span>
                        <p> English</p>

                    </a> -->
                </li>
            </ul>
        </div>
        <div class="main_header">
            <div class="container-main">
                <div class="header_logo">
                    <a href="<?= site_url();?>">
                        <img src="<?= esc_url( $custom_logo_url[0] );?>" caption="<?= get_bloginfo( 'name' );?>"
                            alt="<?= get_bloginfo( 'name' );?>" width="274" height="40"
                            title="<?= get_bloginfo( 'name' );?>" description="<?= get_bloginfo( 'name' );?>">
                    </a>
                </div>
                <div class="nav-bar">
                    <nav>
                        <?php  wp_nav_menu(array('theme_location' => 'Header Menu', 'menu' => 'Header Menu', 'container' => 'ul', 'container_class' => 'header-menu', 'menu_class' => 'menu_navbar_set',));  ?>

                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
    jQuery(document).ready(function($) {

        jQuery(".hamburger").click(function() {
            jQuery(this).toggleClass("is-active");
            jQuery("ul#menu-top-menu").toggleClass("is-active");
        });



        var arrow = "<span class='arrow'><i class='fa fa-angle-down'></i></span>";

        var li_list = document.querySelectorAll('li.menu-item-has-children');
        for (var i = 0; i < li_list.length; i++) {
            li_list[i].innerHTML += arrow; // += concatenates to the LI
        }

        jQuery("span.arrow").click(function() {
            // Toggle the active class for the clicked arrow
            jQuery(this).toggleClass("is-active");

            // Find the specific submenu relative to the clicked arrow and toggle its active class
            jQuery(this).closest("li").find("ul.sub-menu").toggleClass("is-active");

            // Hide other open submenus
            jQuery("ul.sub-menu").not(jQuery(this).closest("li").find("ul.sub-menu")).removeClass(
                "is-active");
        });


        // jQuery("span.arrow").click(function () {
        //     jQuery(this).toggleClass("is-active");
        //     jQuery("ul.sub-menu").toggleClass("is-active");
        //   });

        // function twentytwentyoneExpandSubMenu(button) {
        //         var submenu = button.nextElementSibling; // Get the submenu

        //         // Toggle the 'active' class on the submenu
        //         if (submenu.classList.contains('active')) {
        //             submenu.classList.remove('active');
        //         } else {
        //             submenu.classList.add('active');
        //         }

        //         // Update the aria-expanded attribute of the button
        //         var expanded = submenu.classList.contains('active');
        //         button.setAttribute('aria-expanded', expanded);
        //     }

    });
    </script>