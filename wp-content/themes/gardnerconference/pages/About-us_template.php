<?php /* Template Name: About Us  Template */
get_header();
$banner_section = get_field('banner_section');
$about_us_main_section = get_field('about_us_main_section');
$who_we_are_section  = $about_us_main_section['who_we_are_section'];
$our_mission  = $about_us_main_section['our_mission'];
$vision_section  = $about_us_main_section['vision_section'];
$goals_section  = $about_us_main_section['goals_section'];
$about_overlay_section = get_field('about_overlay_section');
?>
<section class="anout-banner">
    <div class="main-banner-1234">
        <img src="<?= !empty($banner_section['image']) ? $banner_section['image']['url'] : '';?>"
            caption="<?= !empty($banner_section['image']) ? $banner_section['image']['caption'] : '' ?>"
            alt="<?= !empty($banner_section['image']) ? $banner_section['image']['alt'] : '' ?>"
            width="<?= !empty($banner_section['image']) ? $banner_section['image']['width'] : '' ?>"
            height="<?= !empty($banner_section['image']) ? $banner_section['image']['height'] : '' ?>"
            title="<?= !empty($banner_section['image']) ? $banner_section['image']['title'] : '' ?>"
            description="<?= !empty($banner_section['image']) ? $banner_section['image']['description'] : '' ?>">
    </div>
    <div class="main-about-content">
        <h2><?= !empty($banner_section['heading']) ? $banner_section['heading'] : '';?></h2>
    </div>
</section>
<section class="anout-main-sec">
    <div class="container">
        <div class="who-we-are">
            <div class="hoe-content">
                <h2><?= !empty($who_we_are_section['heading']) ? $who_we_are_section['heading'] : '';?></h2>
                <h5><?= !empty($who_we_are_section['subheading']) ? $who_we_are_section['subheading'] : '';?></h5>
                <p><?= !empty($who_we_are_section['paragraph_1']) ? $who_we_are_section['paragraph_1'] : '';?></p>
                <p><?= !empty($who_we_are_section['paragraph_2']) ? $who_we_are_section['paragraph_2'] : '';?> </p>
            </div>
            <div class="hoe-content">
                <img src="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['url'] : '';?>"
                    caption="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['caption'] : '' ?>"
                    alt="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['alt'] : '' ?>"
                    width="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['width'] : '' ?>"
                    height="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['height'] : '' ?>"
                    title="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['title'] : '' ?>"
                    description="<?= !empty($who_we_are_section['image']) ? $who_we_are_section['image']['description'] : '' ?>">
            </div>
        </div>
        <div class="about-heading">
            <h5><?= !empty($who_we_are_section['paragraphp_3']) ? $who_we_are_section['paragraphp_3'] : '';?>
            </h5>
        </div>
        <div class="who-we-are">
            <div class="hoe-content">
                <img src="<?= !empty($our_mission['image']) ? $our_mission['image']['url'] : '';?>"
                    caption="<?= !empty($our_mission['image']) ? $our_mission['image']['caption'] : '' ?>"
                    alt="<?= !empty($our_mission['image']) ? $our_mission['image']['alt'] : '' ?>"
                    width="<?= !empty($our_mission['image']) ? $our_mission['image']['width'] : '' ?>"
                    height="<?= !empty($our_mission['image']) ? $our_mission['image']['height'] : '' ?>"
                    title="<?= !empty($our_mission['image']) ? $our_mission['image']['title'] : '' ?>"
                    description="<?= !empty($our_mission['image']) ? $our_mission['image']['description'] : '' ?>">
            </div>
            <div class="hoe-content">
                <h2><?= !empty($our_mission['heading']) ? $our_mission['heading'] : '';?></h2>
                <h4><?= !empty($our_mission['paragraph']) ? $our_mission['paragraph'] : '';?></h4>
            </div>
        </div>
        <div class="who-we-are">
            <div class="hoe-content">
                <h2><?= !empty($vision_section['heading']) ? $vision_section['heading'] : '';?></h2>
                <p><?= !empty($vision_section['paragraph']) ? $vision_section['paragraph'] : '';?></p>
                <h2><?= !empty($goals_section['heading']) ? $goals_section['heading'] : '';?></h2>
                <?= !empty($goals_section['paragraph']) ? $goals_section['paragraph'] : '';?>
            </div>
            <div class="hoe-content">
                <img src="<?= !empty($vision_section['image']) ? $vision_section['image']['url'] : '';?>"
                    caption="<?= !empty($vision_section['image']) ? $vision_section['image']['caption'] : '' ?>"
                    alt="<?= !empty($vision_section['image']) ? $vision_section['image']['alt'] : '' ?>"
                    width="<?= !empty($vision_section['image']) ? $vision_section['image']['width'] : '' ?>"
                    height="<?= !empty($vision_section['image']) ? $vision_section['image']['height'] : '' ?>"
                    title="<?= !empty($vision_section['image']) ? $vision_section['image']['title'] : '' ?>"
                    description="<?= !empty($vision_section['image']) ? $vision_section['image']['description'] : '' ?>">
            </div>
        </div>
    </div>
</section>
<section class="overlay-effect"
    style="background-image: url(<?= !empty($about_overlay_section['background_image']) ? $about_overlay_section['background_image'] : '';?>);">
    <div class="container">
        <div class="main-content">
            <h2><?= !empty($about_overlay_section['heading']) ? $about_overlay_section['heading'] : '';?></h2>
            <?= !empty($about_overlay_section['paragraph']) ? $about_overlay_section['paragraph'] : '';?>
            <h3><?= !empty($about_overlay_section['sub_paragreph']) ? $about_overlay_section['sub_paragreph'] : '';?>
            </h3>
        </div>
    </div>
</section>
<?php
get_footer();
?>