<?php /* Template Name: Home Page Template */

get_header();

$home_slider_section = get_field('home_slider_section');
$about_us_section_1 = get_field('about_us_section')['about_us_section_1'];
$about_us_section_2 = get_field('about_us_section')['about_us_section_2'];
$event_section = get_field('event_section');
// echo '<pre>'; print_r($event_section);die();
$booking_section = get_field('booking_section');
$services_post = $booking_section['booking_section_2']['services_post'];
$home__services_contact_section = get_field('home__services_contact_section');
$testonomail_section = get_field('testonomail_section');
// echo '<pre>'; print_r($testonomail_section);die();
$faq_section = get_field('faq_section');
$google_map_section = get_field('google_map_section');
$email_subscribe_section = get_field('email_subscribe_section');
?>

<section class="banner-slider123">
    <?php foreach ($home_slider_section['slider_post_list'] as $key => $slider_post_list): ?>
    <?php 
        $slider_section = get_field('slider_section', $slider_post_list->ID);
        $thumbnail_url = get_the_post_thumbnail_url($slider_post_list->ID);

        ?>
    <slider class="hero_sec">
        <div class="banner-slider">
            <img src="<?= esc_url($thumbnail_url);?>" alt="<?= esc_attr($slider_post_list->post_title);?>">
        </div>
        <div class="banner-txt">
            <?= !empty($slider_section['paragraph_1']) ? "<p>{$slider_section['paragraph_1']}</p>" : ''; ?>
            <?= !empty($slider_post_list->post_title) ? "<h1>{$slider_post_list->post_title}</h1>" : ''; ?>
            <?= !empty($slider_post_list->post_content) ? "<p>{$slider_post_list->post_content}</p>" : ''; ?>
            <div class="banner-btn">
                <a href="<?= $slider_section['button_url']; ?>"
                    class="theme_btn"><?= $slider_section['button_name']; ?></a>
                <p> <?= !empty($slider_section['call_action_']) ? $slider_section['call_action_'] : '';?></p>
            </div>
        </div>
    </slider>
    <?php endforeach; ?>
</section>

<section class="home_about">
    <div class="main-about">
        <div class="about_img">
            <img src="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['url'] : '';?>"
                caption="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['caption'] : '' ?>"
                alt="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['alt'] : '' ?>"
                width="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['width'] : '' ?>"
                height="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['height'] : '' ?>"
                title="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['title'] : '' ?>"
                description="<?= !empty($about_us_section_1['image']) ? $about_us_section_1['image']['description'] : '' ?>">
        </div>
        <div class="about_content">
            <h2><?= $about_us_section_1['heading'];?> </h2>
            <h5><?= $about_us_section_1['paragraph_1'];?></h5>
            <p><?= $about_us_section_1['paragraph_2'];?></p>
            <a href="<?= $about_us_section_1['button_url']['url']; ?>"
                class="theme_btn_two"><?= $about_us_section_1['button_name']; ?></a>
            <div class="about_img_two">
                <img src="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['url'] : '';?>"
                    caption="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['caption'] : '' ?>"
                    alt="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['alt'] : '' ?>"
                    width="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['width'] : '' ?>"
                    height="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['height'] : '' ?>"
                    title="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['title'] : '' ?>"
                    description="<?= !empty($about_us_section_2['image']) ? $about_us_section_2['image']['description'] : '' ?>">
                <div class="main-about-txt">
                    <h2><?= $about_us_section_2['heading'];?></h2>
                    <p><?= $about_us_section_2['paragraph'];?></p>
                    <a href="<?= $about_us_section_2['button_url']['url']; ?>"
                        class="theme_btn"><?= $about_us_section_2['button_name']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------Event Section------------------------------------->
<section class="home_events">
    <div class="events-headeing">
        <h2><?= $event_section['heading'];?></h2>
    </div>
    <div class="events_txt">
        <?php
    foreach ( ['event_catagory_list_1', 'event_catagory_list_2', 'event_catagory_list_3'] as $key => $category) {
        ?>
        <div class="main_img">
            <?php 
            foreach ($event_section[$category] as $key => $current_category) {
                $event_catagory_group = get_field('catagories_images', 'category_' . $current_category->term_id);
                ?>
                <a href="<?= esc_url(get_category_link($current_category->term_id));?>">
            <div class="event-img4">
                <img src="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['url'] : '';?>"
                    caption="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['caption'] : '' ?>"
                    alt="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['alt'] : '' ?>"
                    width="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['width'] : '' ?>"
                    height="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['height'] : '' ?>"
                    title="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['title'] : '' ?>"
                    description="<?= !empty($event_catagory_group['image']) ? $event_catagory_group['image']['description'] : '' ?>">
                <div class="hover-content">
                    <h3><?= $current_category->name; ?></h3>
                </div>
            </div>
            </a>
            <?php
            }

            ?>

        </div>
        <?php
    }
        ?>
    </div>

</section>

<section class="home_booking_sec">
    <div class="container">
        <div class="main-booking-content">
            <div class="heading-book">
                <h2><?= $booking_section['heading'];?></h2>
                <h4><?= $booking_section['sub_heading'];?></h4>
                <?= remove_unwanted_p_tags($booking_section['paragraph']);?>
                <a href="<?= $booking_section['button_url']['url']; ?>"
                    class="theme_btn"><?= $booking_section['button_name']; ?></a>
            </div>
            <div class="booking-image-list">
                <div class="bookin-image">
                    <img src="<?= !empty($booking_section['image']) ? $booking_section['image']['url'] : '';?>"
                        caption="<?= !empty($booking_section['image']) ? $booking_section['image']['caption'] : '' ?>"
                        alt="<?= !empty($booking_section['image']) ? $booking_section['image']['alt'] : '' ?>"
                        width="<?= !empty($booking_section['image']) ? $booking_section['image']['width'] : '' ?>"
                        height="<?= !empty($booking_section['image']) ? $booking_section['image']['height'] : '' ?>"
                        title="<?= !empty($booking_section['image']) ? $booking_section['image']['title'] : '' ?>"
                        description="<?= !empty($booking_section['image']) ? $booking_section['image']['description'] : '' ?>">
                </div>
                <div class="bookin-image">
                    <img src="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['url'] : '';?>"
                        caption="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['caption'] : '' ?>"
                        alt="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['alt'] : '' ?>"
                        width="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['width'] : '' ?>"
                        height="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['height'] : '' ?>"
                        title="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['title'] : '' ?>"
                        description="<?= !empty($booking_section['image_1']) ? $booking_section['image_1']['description'] : '' ?>">
                </div>
            </div>
   
            
            
        </div>
        <div class="sant_rooms">
            <div class="main-sant">
                <h2><?=$booking_section['booking_section_2']['heading'];?></h2>
                <p><?=$booking_section['booking_section_2']['paragraph'];?></p>
                <a href="<?= $booking_section['booking_section_2']['button_url']['url']; ?>"
                    class="theme_btn"><?= $booking_section['booking_section_2']['button_name']; ?></a>
            </div>

            <?php
                foreach ($services_post as $key => $services) {
                   ?>
            <div class="sant-content-main">
                <h3><?= $services->post_title;?></h3>
                <p><?= $services->post_content;?></p>
                <div class="hover-sant">
                    <h2>0<?= $key + 1;?></h2>
                </div>
            </div>

            <?php 
                }
            ?>
        </div>

    </div>
</section>
<section class="home_services">
    <div class="container">
        <div class="main-form">
            <div class="form-image">
                <img src="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['url'] : '';?>"
                    caption="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['caption'] : '' ?>"
                    alt="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['alt'] : '' ?>"
                    width="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['width'] : '' ?>"
                    height="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['height'] : '' ?>"
                    title="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['title'] : '' ?>"
                    description="<?= !empty($home__services_contact_section['image']) ? $home__services_contact_section['image']['description'] : '' ?>">
            </div>
            <div class="form-content">
                <h2><?= $home__services_contact_section['heading'];?></h2>
                <div class="form-content">
                    <?= do_shortcode('[contact-form-7 id="e8fb72d" title="Home Page Contact Form"]');?>
                </div>
                <!-- -->
            </div>
        </div>
    </div>
</section>
<section class="home_textimonial"
    style="background-image: url(<?= $testonomail_section['background_banner_image'];?>); width: 100%; background-repeat: no-repeat; background-size: cover; height: 100%;">
    <div class="main-testimonial">
        <div class="testimonials-content">
            <h2><?= $testonomail_section['heading'];?></h2>
        </div>
        <div class="image-testimonials">
            <div class="content-reviews">
                <img src="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['url'] : '';?>"
                    caption="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['caption'] : '' ?>"
                    alt="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['alt'] : '' ?>"
                    width="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['width'] : '' ?>"
                    height="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['height'] : '' ?>"
                    title="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['title'] : '' ?>"
                    description="<?= !empty($testonomail_section['content_reviews_image']) ? $testonomail_section['content_reviews_image']['description'] : '' ?>">
            </div>
            <div class="content-reviews">
                <h4><?= $testonomail_section['subheading'];?></h4>
            </div>

        </div>
        <div class="slider-testimonials">
            <?php
            foreach ($testonomail_section['testimonial_list'] as $key => $testimonial_list) { 
                $testonomails_section = get_field('testonomails_section' , $testimonial_list->ID);
                $featured_image_url = get_the_post_thumbnail_url($testimonial_list);

                ?>
                    <div class="slider-content-123">
                    <p><?= $testimonial_list->post_content;?>
                    </p>
                    <div class="client">
                        <div class="image-client">
                        <?php $title = $testimonial_list->post_title;
                         
                        //  echo $title;
                       $split_title = str_split($title);
                       echo $split_title[0];
                        ?>
                            <!-- <img src="<?php// echo $featured_image_url;?>" alt=""> -->
                        </div>
                        <div class="image-client">
                            <h4><?= $testimonial_list->post_title;?></h4>
                            <p> <?= !empty($testonomails_section['client_degisnation']) ? $testonomails_section['client_degisnation'] : '';?></p>
                        </div>
                    </div>
                </div>
            <?php  }  ?>

           

        </div>
    </div>
    </div>
</section>
<section class="main-faq-section">
    <div class="container">
        <div class="faq-heading">
            <h2><?= $faq_section['title'];?></h2>
        </div>
        <div class="main-accrdion">
            <div class="accordion">
                <?php foreach ($faq_section['faq_post_list_1'] as $key => $faq_post_list_1) { ?>
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">
                            <?= $faq_post_list_1->post_title;?> </span><span class="icon"
                            aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p><?= $faq_post_list_1->post_content;?></p>
                    </div>
                </div>
                <?php  } ?>
            </div>
            <div class="accordion">
                <?php  foreach ($faq_section['faq_post_list_2'] as $key => $faq_post_list_1) {  ?>
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">
                            <?= $faq_post_list_1->post_title;?> </span><span class="icon"
                            aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p><?= $faq_post_list_1->post_content;?></p>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
    </div>
</section>
<section class="home_map">
    <div class="google-map">
        <?= $google_map_section['google_map_html'];?>
    </div>
</section>
<section class="home_subcribe">
    <div class="sub-image" style="background-image: url(<?= $email_subscribe_section['backgrond_image'];?>);">
        <div class="sub-content">
            <div class="sub-heading-9">
                <h2><?= $email_subscribe_section['heading'];?></h2>
            </div>
            <div class="email-template-form">
                <?= do_shortcode($email_subscribe_section['contact_form_short_code']);?>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();
?>