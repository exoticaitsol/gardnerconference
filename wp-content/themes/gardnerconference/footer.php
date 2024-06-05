<footer>
    <?php
    $insta_image = wp_get_attachment_image_src(get_theme_mod( 'insta_image' ), 'full' );
    $facebook_image = wp_get_attachment_image_src(get_theme_mod( 'facebook_image' ), 'full' );
    $twitter_image = wp_get_attachment_image_src(get_theme_mod( 'twitter_image' ), 'full' );

    ?>
    <section class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="txt-footer">
                    <h3><?= get_theme_mod( 'footer_section_1' );?></h3>
                    <p><?= get_theme_mod( 'about_us_description' );?></p>
                </div>
                <div class="txt-footer">
                <h3><?= get_theme_mod( 'footer_section_2' );?></h3>
                    <?php  wp_nav_menu(array('theme_location' => 'About us', 'menu' => 'About us', 'container' => 'ul', 'container_class' => 'about-menu', 'menu_class' => 'menu_navbar_set_test',));  ?>
                </div>
                <div class="txt-footer">
                <h3><?= get_theme_mod( 'footer_section_3' );?></h3>
                    <p><a target ="_blank" href="mailto:<?= get_theme_mod( 'email_address' );?>"><?= get_theme_mod( 'email_address' );?></a></p>
                    <h3><?= get_theme_mod( 'footer_section_4' );?></h3>
                    <p> <a  target ="_blank" href="<?= get_theme_mod( 'site_address_link' );?>" target='_blank'><?= get_theme_mod( 'website_site_Address' );?></a></p>
                    <h3><?= get_theme_mod( 'footer_section_5' );?></h3>
                    <p><a href="tel:<?= get_theme_mod( 'website_phone_number_1' );?>">Event Venue: <?= get_theme_mod( 'website_phone_number_1' );?></a></p>
                    <p><a href="tel:<?= get_theme_mod( 'website_phone_number_2' );?>">Hotel : <?= get_theme_mod( 'website_phone_number_2' );?></a></p>
                </div>
                <div class="txt-footer">
                <h3><?= get_theme_mod( 'footer_section_6' );?></h3>
                    <div class="footer-image">
                        <a target ="_blank" href="<?= get_theme_mod( 'insta_url' );?>"> <img src="<?= $insta_image[0];?>" alt=""></a>
                        <a target ="_blank" href="<?= get_theme_mod( 'facebook_url' );?>"> <img src="<?= $facebook_image[0];?>" alt=""></a>
                        <a  target ="_blank" href="<?= get_theme_mod( 'twitter_url' );?>"> <img src="<?= $twitter_image[0];?>" alt=""></a>
                    </div>
                    <h3><?= get_theme_mod( 'footer_section_7' );?></h3>
                    <div class="legel-menu">
                        <?php  wp_nav_menu(array('theme_location' => 'Legal Information', 'menu' => 'Legal Information', 'container' => 'nav', 'container_class' => ' legal-information-menu', 'menu_class' => 'menu_legel',));  ?>
                    </div>
                    <!-- <a href="">Privacy Policy</a>
                    <a href="">Terms and Condition</a> -->
                </div>
            </div>
        </div>
    </section>

</footer>


<?php wp_footer(); ?>
</body>
</html>