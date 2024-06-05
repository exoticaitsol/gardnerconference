<?php /* Template Name: Event Page   Template */
get_header();
$event_section= get_field('event_section');
$wedding_events = get_field('wedding_events');
$content_list_1 =$wedding_events['event_content_list_1'];
$content_list_2 =$wedding_events['event_content_list_2'];
$content_list_3 =$wedding_events['event_content_list_3'];
$event_booking_section = get_field('event_booking_section');
$event_vanue_section = get_field('event_vanue_section');
$event_vanue_section2 = get_field('event_vanue_section_2');
$perfect_event_section = get_field('perfect_event_section');
$vanue_section = get_field('vanue_section');
$direction_section = get_field('direction_section');
$gardner_confrence_section = get_field('gardner_confrence_section');

?>
<section class="events-sec">
    <div class="container">
        <div class="main-events-sontent">
            <div class="events-txt-sec">
                <h4>Home - Events</h4>
                <h2>Weddings</h2>
                <h3> <?php echo $event_section['heading']; ?></h3>
                <p><?php echo $event_section['sub_heading']; ?></p>
                <a href="" class="theme_btn">Book Now</a>
            </div>
            <div class="right-events-images">
                <img src="<?php echo $event_section['image']; ?>" alt>
            </div>
        </div>
    </div>
</section>



<section class="wedding-events">
    <div class="container">
        <div class="wedding-content-sec">
            <div class="main-txt-wedding">
                <h2><?php echo $content_list_1['number']; ?></h2>
                <h3><?php echo $content_list_1['heading']; ?></h3>
                <p><?php echo $content_list_1['text']; ?></p>
            </div>
            <div class="main-txt-wedding">
                <h2><?php echo $content_list_2['number']; ?></h2>
                <h3><?php echo $content_list_2['heading']; ?></h3>
                <p><?php echo $content_list_2['text']; ?></p>
            </div>
            <div class="main-txt-wedding">
                <h2><?php echo $content_list_3['number']; ?></h2>
                <h3><?php echo $content_list_3['heading']; ?></h3>
                <p><?php echo $content_list_3['text']; ?></p>
            </div>
        </div>
    </div>
</section>


<section class="book-day-sec-1">
    <div class="container">
        <div class="book-day-sec">
            <div class="main-book-content">
                <h2><?php echo $event_booking_section['title']; ?></h2>

                <div class=""> <?php echo $event_booking_section['paragraph']; ?></div>

                <a href class="theme_btn">Book Now</a>
            </div>
            <div class="main-book-img image-color">
                <img src="<?php echo $event_booking_section['image']; ?>" alt>
            </div>
        </div>
    </div>
</section>

<section class="book-day-sec-2">
    <div class="container">
        <div class="book-day-sec">

            <div class="main-book-img">
                <img src="<?php echo $event_vanue_section['image1']; ?>" alt>
            </div>
            <div class="main-book-content">

                <h2><?php echo $event_vanue_section['heading']; ?></h2>
                <p><?php echo $event_vanue_section['paragraph']; ?></p>
                <a href class="theme_btn">Book Now</a>
            </div>
        </div>
    </div>
</section>


<section class="book-day-sec-3">
    <div class="container">
        <div class="book-day-sec">
            <div class="main-book-content">
                <h2><?php echo $event_vanue_section2['heading']; ?></h2>
                <p><?php echo $event_vanue_section2['paragraph']; ?></p>
                <a href class="theme_btn">Book Now</a>
            </div>
            <div class="main-book-img">
                <img src="<?php echo $event_vanue_section2['image']; ?>" alt>

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
<section class="venues-wedding-sec">
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

                <?php    } }?>



            </div>


        </div>
    </div>
</section>
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