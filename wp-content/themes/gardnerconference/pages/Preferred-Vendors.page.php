<?php /* Template Name: Preferred Vendors  Template */
get_header();
$banner_section = get_field('banner_section');
$preferred_vendors_section = get_field('preferred_vendors_section');
// echo '<pre>'; print_r($preferred_vendors_section);die();
?>
<?php if ($banner_section['hide_section'] == 0  ) {?>
<section class="anout-banner">
    <div class="main-banner-1234">
    <img src="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['url'] : '';?>"
            caption="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['caption'] : '' ?>"
            alt="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['alt'] : '' ?>"
            width="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['width'] : '' ?>"
            height="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['height'] : '' ?>"
            title="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['title'] : '' ?>"
            description="<?= !empty($banner_section['banner_image']) ? $banner_section['banner_image']['description'] : '' ?>">
    </div>
    <div class="main-about-content">
    <h2><?= !empty($banner_section['heading']) ? $banner_section['heading'] : '';?></h2>
    </div>
</section>
<?php }?>
<?php if ($preferred_vendors_section['hide_section'] == 0  ) {?>
<section class="perfect-events-sec preferred_vendors_section">
    <div class="container">
        <div class="perfrct-heading">
        <h2><?= !empty($preferred_vendors_section['heading']) ? $preferred_vendors_section['heading'] : '';?></h2>
        </div>
        <div class="main-perfect-content">
        <?php foreach ($preferred_vendors_section['vendor_list'] as $key => $vendor_list) {  $business_section = get_field('business_section', 'category_' . $vendor_list->term_id);$array = [ 'post_type' => 'vendor',  'order' => 'ASC', 'orderby' => 'title', 'posts_per_page' => -1, 'tax_query' =>  [ [ 'taxonomy' => $vendor_list->taxonomy,'field' => 'slug','terms' => $vendor_list->name,  ]]];
            $travel_with_catagories = new WP_Query($array); ?>
            <div class="main-step-1123">
                <div class="title-step">
                <div class="main-txt-perfect">
                        <h2><?= $key+1;?></h2>
                        <!-- <a href="<?= $business_section['company_url']['url']; ?>">
                            <h2><?= $key+1;?></h2></a> -->
                    </div>
                    <div class="main-txt-step">
                        <h3><?= $vendor_list->name;?></h3>
                        <!-- <h3><a href="<?= $business_section['company_url']['url']; ?>"><?= $vendor_list->name;?></a></h3> -->
                    </div>
            </div>
                <div class="catagory-list-section">
                <ul class="catagory_list">
                    <?php
                    if( $travel_with_catagories->have_posts() ) :   while( $travel_with_catagories->have_posts() ): $travel_with_catagories->the_post(); 
                    $vendor_section = get_field('vendor_section');
                    ?>
                    <li><a href="<?= $vendor_section['business_url']['url']; ?>"><?= get_the_title();?></a></li>
                    <?php endwhile;  endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
</section>
<?php }?>
<?php
    get_footer();
?>