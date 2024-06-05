<?php /* Template Name: Contact  Us  Template */
get_header();
$contact_us_form_section = get_field('contact_us_form_section');
$contact_us_address_section = get_field('contact_us_address_section');
$contact_us_map_section = get_field('contact_us_map_section');
// echo '<pre>'; print_r($contact_us_address_section);die();
?>
<?php if ($contact_us_form_section['hide_section'] == 0  ) {?>
    <section class="contect">
        <div class="container">
            <section class="home_services">
                <div class="container">
                    <div class="contect-heading">
                        <h3><?= !empty($contact_us_form_section['titile']) ? $contact_us_form_section['titile'] : '';?></h2>
                    </div>
                    <div class="main-form">
                        <div class="form-image">
                        <img src="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['url'] : '';?>" caption="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['caption'] : '' ?>"alt="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['alt'] : '' ?>"width="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['width'] : '' ?>"height="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['height'] : '' ?>"title="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['title'] : '' ?>"description="<?= !empty($contact_us_form_section['image']) ? $contact_us_form_section['image']['description'] : '' ?>">
                        </div>
                        <div class="form-content">
                            <div class="form-content">
                                <?= do_shortcode(!empty($contact_us_form_section['contact_us_short_code']) ? $contact_us_form_section['contact_us_short_code'] : '');?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
<?php }?>
<?php if ($contact_us_address_section['hide_section'] == 0  ) {?>
<section class="contect-address-section">
    <div class="contect-addres">
        <div class="container">
            <div class="main-contect-col-addres">
                <div class="first-mail-col">
                    <h2><img src="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['url'] : '';?>"caption="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['caption'] : '' ?>"alt="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['alt'] : '' ?>"width="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['width'] : '' ?>" height="<?= !empty($contact_us_address_section['image']) ? $contact_us_address_section['email_icon']['height'] : '' ?>" title="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['title'] : '' ?>"description="<?= !empty($contact_us_address_section['email_icon']) ? $contact_us_address_section['email_icon']['description'] : '' ?>"></h2>
                    <a href="mailto:<?= get_theme_mod( 'email_address' );?>"><?= get_theme_mod( 'email_address' );?></a>
                </div>
                <div class="first-mail-col">
                <h2><img src="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['url'] : '';?>"caption="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['caption'] : '' ?>"alt="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['alt'] : '' ?>"width="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['width'] : '' ?>" height="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['height'] : '' ?>" title="<?= !empty($contact_us_address_section['phone_icon']) ? $contact_us_address_section['phone_icon']['title'] : '' ?>"description="<?= !empty($contact_us_address_section['image']) ? $contact_us_address_section['phone_icon']['description'] : '' ?>"></h2>
                    <a  href="tel:<?= get_theme_mod( 'website_phone_number_1' );?>"><?= get_theme_mod( 'website_phone_number_1' );?></a>
                </div>
                <div class="first-mail-col">
                <h2><img src="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['url'] : '';?>"caption="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['caption'] : '' ?>"alt="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['alt'] : '' ?>"width="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['width'] : '' ?>" height="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['height'] : '' ?>" title="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['title'] : '' ?>"description="<?= !empty($contact_us_address_section['location_icon']) ? $contact_us_address_section['location_icon']['description'] : '' ?>"></h2>
                    <a target ="_blank" href="<?= get_theme_mod( 'site_address_link' );?>" target='_blank'><?= get_theme_mod( 'website_site_Address' );?></a>
                </div>
            </div>
        </div>
        </div>
</section>
<?php }?>
<?php if ($contact_us_map_section['hide_section'] == 0  ) {?>
<section class="map_coontent">
<?= !empty($contact_us_map_section['google_map_short_code']) ? $contact_us_map_section['google_map_short_code'] : '';?>
</section>
<?php }?>
<?php
get_footer();
?>