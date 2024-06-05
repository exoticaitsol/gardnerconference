<?php
get_header();
$current_category = get_queried_object();
$event_section = get_field('event_section', 'category_' . $current_category->term_id);
$wedding_events = get_field('wedding_events', 'category_' . $current_category->term_id);
$event_booking_section = get_field('event_booking_section', 'category_' . $current_category->term_id);
$event_vanue_section = get_field('event_vanue_section', 'category_' . $current_category->term_id);
$event_vanue_section_2 = get_field('event_vanue_section_2', 'category_' . $current_category->term_id);
$perfect_event_section = get_field('perfect_event_section', 'category_' . $current_category->term_id);
$vanue_section = get_field('vanue_section', 'category_' . $current_category->term_id);
$direction_section = get_field('direction_section', 'category_' . $current_category->term_id);  
$gardner_confrence_section = get_field('gardner_confrence_section', 'category_' . $current_category->term_id);  
?>
<section class="events-sec">
    <div class="container">
        <div class="main-events-sontent">
            <div class="events-txt-sec">
                <h4>Home - Events - <span><?= $current_category->name;?></span></h4>
                <h2><?= $current_category->name;?></h2>
                <h3><?= !empty($event_section['heading']) ? $event_section['heading'] : '';?></h3>
                <p> <?= !empty($event_section['sub_heading']) ? $event_section['sub_heading'] : '';?></p>
                <a href="<?= $event_section['button_url']['url']; ?>"
                    class="theme_btn"><?= $event_section['button_name']; ?></a>
            </div>
            <div class="right-events-images">
                <div class="right-events-main_img">
                    <img src="<?= !empty($event_section['image']) ? $event_section['image']['url'] : '';?>"
                        caption="<?= !empty($event_section['image']) ? $event_section['image']['caption'] : '' ?>"
                        alt="<?= !empty($event_section['image']) ? $event_section['image']['alt'] : '' ?>"
                        width="<?= !empty($event_section['image']) ? $event_section['image']['width'] : '' ?>"
                        height="<?= !empty($event_section['image']) ? $event_section['image']['height'] : '' ?>"
                        title="<?= !empty($event_section['image']) ? $event_section['image']['title'] : '' ?>"
                        description="<?= !empty($event_section['image']) ? $event_section['image']['description'] : '' ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ($wedding_events['hide_section'] == 0  ) {?>
<section class="wedding-events">
    <div class="container">
        <div class="wedding-content-sec">
            <?php 
            foreach ( ['event_content_list_1', 'event_content_list_2', 'event_content_list_3'] as $key => $evnts) {
                ?>
            <div class="main-txt-wedding">
                <h2><?= !empty($wedding_events[$evnts]['number']) ? $wedding_events[$evnts]['number'] : '';?></h2>
                <h3><?= !empty($wedding_events[$evnts]['heading']) ? $wedding_events[$evnts]['heading'] : '';?></h3>
                <p><?= !empty($wedding_events[$evnts]['text']) ? $wedding_events[$evnts]['text'] : '';?></p>
            </div>
            <?php  }  ?>
        </div>
    </div>
</section>
<?php } ?>
<?php
if($current_category->slug == 'trending_events_slider-events' || $current_category->term_id == 30){
    $slider_section = get_field('trending_events_slider', 'category_' . $current_category->term_id); ?>
<section class="image-events-sec">
    <div class="container">
        <div class="perfrct-heading">
        <h2><?= !empty($slider_section['heading']) ? $slider_section['heading'] : '';?></h2>
        </div>
        <div class="imaeg-slider-main-section">

            <?php foreach ($slider_section['event_slider_list']as $key => $event_slider_list) {
                $event_slider_url = get_field('event_slider_url' ,$event_slider_list->ID);
                // echo '<pre>'; print_r($event_slider_url );die();
                ?>
                <div class="slider-imaege-div">
                    <a href="<?= $event_slider_url['url']; ?>">
                    <div class="slider-event-image">
                        <img src="<?= get_the_post_thumbnail_url($event_slider_list);?>" alt="">
                    </div>
                    <div class="slider-content">
                        <h4><?= (strlen($event_slider_list->post_title) > 25) ? substr($event_slider_list->post_title, 0,25) . '...' : $event_slider_list->post_title;?></h4>
                        <p><?= $event_slider_list->post_content;?></p>
                    </div>
                    </a>
                </div>
            <?php  } ?>
        </div>
    </div>
</section>

<?php } ?>
<section class="book-day-sec-1">
    <div class="container">
        <div class="book-day-sec">
            <div class="main-book-content">
                <h2><?= !empty($event_booking_section['title']) ? $event_booking_section['title'] : '';?></h2>
                <?= !empty($event_booking_section['paragraph']) ? $event_booking_section['paragraph'] : '';?>
                <a href="<?= $event_booking_section['button_url']['url']; ?>"
                    class="theme_btn"><?= $event_booking_section['button_name']; ?></a>
            </div>
            <div class="main-book-img image-color">
                <img src="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['url'] : '';?>"
                    caption="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['caption'] : '' ?>"
                    alt="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['alt'] : '' ?>"
                    width="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['width'] : '' ?>"
                    height="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['height'] : '' ?>"
                    title="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['title'] : '' ?>"
                    description="<?= !empty($event_booking_section['image']) ? $event_booking_section['image']['description'] : '' ?>">
            </div>
        </div>
    </div>
</section>
<section class="book-day-sec-2">
    <div class="container">
        <div class="book-day-sec">

            <div class="main-book-img">
                <img src="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['url'] : '';?>"
                    caption="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['caption'] : '' ?>"
                    alt="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['alt'] : '' ?>"
                    width="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['width'] : '' ?>"
                    height="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['height'] : '' ?>"
                    title="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['title'] : '' ?>"
                    description="<?= !empty($event_vanue_section['image']) ? $event_vanue_section['image']['description'] : '' ?>">
            </div>
            <div class="main-book-content">
                <h2><?= !empty($event_vanue_section['heading']) ? $event_vanue_section['heading'] : '';?></h2>
                <p><?= !empty($event_vanue_section['paragraph']) ? $event_vanue_section['paragraph'] : '';?></p>
                <p><?= !empty($event_vanue_section['paragraph_2']) ? $event_vanue_section['paragraph_2'] : '';?></p>
                <a href="<?= $event_vanue_section['button_url']['url']; ?>"
                    class="theme_btn"><?= $event_vanue_section['button_name']; ?></a>
            </div>
        </div>
    </div>
</section>
<section class="book-day-sec-3">
    <div class="container">
        <div class="book-day-sec">
            <div class="main-book-content">
                <h2><?= !empty($event_vanue_section_2['heading']) ? $event_vanue_section_2['heading'] : '';?></h2>
                <p><?= !empty($event_vanue_section_2['paragraph']) ? $event_vanue_section_2['paragraph'] : '';?></p>
                <a href="<?= $event_vanue_section_2['button_url']['url']; ?>"
                    class="theme_btn"><?= $event_vanue_section_2['button_name']; ?></a>
            </div>
            <div class="main-book-img">
                <img src="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['url'] : '';?>"
                    caption="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['caption'] : '' ?>"
                    alt="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['alt'] : '' ?>"
                    width="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['width'] : '' ?>"
                    height="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['height'] : '' ?>"
                    title="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['title'] : '' ?>"
                    description="<?= !empty($event_vanue_section_2['image']) ? $event_vanue_section_2['image']['description'] : '' ?>">
            </div>
        </div>
    </div>
</section>
<section class="perfect-events-sec">
    <div class="container">
        <div class="perfrct-heading">
            <h2><?= !empty($perfect_event_section['heading']) ? $perfect_event_section['heading'] : '';?></h2>
        </div>
        <div class="main-perfect-content">
            <?php if (!empty($perfect_event_section['event_planner'])){
            foreach ($perfect_event_section['event_planner'] as $key => $event_planner) {
                // echo '<pre>'; print_r( $event_planner);
                ?>
            <div class="main-step-1123">
                <div class="main-txt-perfect">
                    <h2><?= $key +1 ;?></h2>
                </div>
                <div class="main-txt-step">
                    <h3><?= $event_planner->post_title ;?></h3>
                    <p><?= wp_strip_all_tags($event_planner->post_content); ?></p>
                </div>
            </div>
            <?php  } } ?>

        </div>

    </div>
</section>
<?php if ($vanue_section['hide_section'] == 0  ) {?>
    <section class="venues-wedding-sec" >
        <div class="container">
            <div class="hedaing-venuse">
                <h2> <?= !empty($vanue_section['heading']) ? $vanue_section['heading'] : '';?></h2>
            </div>
            <div class="venues-inner">
                <div class="main-1-velue">
                    <?php if (!empty($vanue_section['vanue_post_list'])){ 
                    foreach ($vanue_section['vanue_post_list'] as $key => $vanue_post_list) {
                        if (has_post_thumbnail($vanue_post_list)) {
                            $thumbnail_url = get_the_post_thumbnail_url($vanue_post_list);
                        }
                    ?>
                        <div class="venues-box">
                            <div class="venues-txt-img">
                                <img src="<?= $thumbnail_url; ?>" alt>
                            </div>
                            <div class="overlay-venues">
                                <p><?= $vanue_post_list->post_title;?></p>
                            </div>
                        </div>
                    <?php  } }?>

                </div>
            </div>
        </div>
    </section>
<?php }?>
<?php if ($direction_section['hide_section'] == 0  ) {?>
<section class="derection-sec">
    <div class="container">
        <div class="derection-pareking">
            <div class="derection-box">
                <h2><?= !empty($direction_section['heading']) ? $direction_section['heading'] : '';?></h2>
            </div>
            <?php if (!empty($direction_section['direction_list'])){
                foreach ($direction_section['direction_list'] as $key => $direction_list) {
                    ?>
            <div class="derection-content-box">
                <img src="<?= !empty($direction_list['image']) ? $direction_list['image']['url'] : '';?>"
                    caption="<?= !empty($direction_list['image']) ? $direction_list['image']['caption'] : '' ?>"
                    alt="<?= !empty($direction_list['image']) ? $direction_list['image']['alt'] : '' ?>"
                    width="<?= !empty($direction_list['image']) ? $direction_list['image']['width'] : '' ?>"
                    height="<?= !empty($direction_list['image']) ? $direction_list['image']['height'] : '' ?>"
                    title="<?= !empty($direction_list['image']) ? $direction_list['image']['title'] : '' ?>"
                    description="<?= !empty($direction_list['image']) ? $direction_list['image']['description'] : '' ?>">
                <h3><?= !empty($direction_list['heading']) ? $direction_list['heading'] : '';?></h3>
            </div>
            <?php }  }
            ?>
        </div>
    </div>
</section>
<?php }?>
<section class="gardner-confrence">
    <div class="container">
        <div class="confrence-box">
            <div class="main-left-images-gardner">
                <div class="main-book-img-2">
                    <img src="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['url'] : '';?>"
                        caption="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['caption'] : '' ?>"
                        alt="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['alt'] : '' ?>"
                        width="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['width'] : '' ?>"
                        height="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['height'] : '' ?>"
                        title="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['title'] : '' ?>"
                        description="<?= !empty($gardner_confrence_section['image']) ? $gardner_confrence_section['image']['description'] : '' ?>">
                </div>
            </div>
            <div class="main-txt-gardner">
                <div class="gardner-right-hading">
                    <h2><?= !empty($gardner_confrence_section['heading']) ? $gardner_confrence_section['heading'] : '';?>
                    </h2>
                    <h5><?= !empty($gardner_confrence_section['subheading']) ? $gardner_confrence_section['subheading'] : '';?>
                    </h5>
                    <p><?= !empty($gardner_confrence_section['paragraph_1']) ? $gardner_confrence_section['paragraph_1'] : '';?>
                    </p>
                    <p><?= !empty($gardner_confrence_section['paragraph_2']) ? $gardner_confrence_section['paragraph_2'] : '';?>
                    </p>
                </div>
                <a href="<?= $gardner_confrence_section['button_url']['url']; ?>"
                    class="theme_btn"><?= $gardner_confrence_section['button_name']; ?></a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
