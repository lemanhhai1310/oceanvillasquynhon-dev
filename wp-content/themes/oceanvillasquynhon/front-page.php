<?php get_header(); ?>

<?php
$file = get_field('video');
if( $file ): ?>
<!--Video-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
        <li>
            <video class="lazy-video" poster="<?= get_theme_file_uri('/assets/images/banner.png') ?>" data-src="<?php echo $file['url']; ?>" autoplay loop muted playsinline uk-cover></video>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>

<!--    <div class="uk-position-cover">-->
<!--        <a href="" class="uk-position-center"><img class="lazy" data-src="--><?php //= get_theme_file_uri('/assets/images/Playbtn.png') ?><!--" alt=""></a>-->
<!--    </div>-->

</div>
<!--/Video-->
<?php endif; ?>

<?php if( have_rows('about') ): ?>
<?php while( have_rows('about') ): the_row(); ?>
<!--About-->
<div class="uk-section-large">
    <div class="uk-container">
        <div class="uk-child-width-1-2@l uk-flex-middle" uk-grid>
            <div>
                <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
                    <?php if (get_sub_field('title')): ?>
                    <h2 class="width-298px home__about__title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('desc')): ?>
                    <div class="width-366px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
                    <?php endif; ?>

                    <?php if (get_sub_field('button_text')): ?>
                    <a href="" class="home__about__link uk-link-toggle"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--/About-->
<?php endwhile; ?>
<?php endif; ?>

<?php
$query = new WP_Query(array(
    'post_type' => 'room',
));
if ($query->have_posts()): ?>
<!--Our Rooms-->
<div class="uk-section-large uk-section-muted">
    <?php if( have_rows('rooms') ): ?>
    <?php while( have_rows('rooms') ): the_row(); ?>
    <?php if (get_sub_field('title')): ?>
    <div class="uk-container">
        <h2 class="uk-text-center home__room__title"><?php the_sub_field('title'); ?></h2>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>

    <div class="item-64px uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true; autoplay: true;">

        <ul class="uk-slider-items uk-grid uk-grid-small uk-grid-30-l" uk-grid>
            <?php while ($query->have_posts()){ $query->the_post(); ?>
            <li class="uk-width-3-4 uk-width-auto@s">
                <div class="width-410px">
                    <div class="uk-cover-container">
                        <?php
                        if(has_post_thumbnail(get_the_ID())){
                            echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'uk-cover', 'uk-cover' =>'') );
                        }else{
                            $base_url = get_bloginfo('template_directory');
                            echo '<img src="'.$base_url.'/assets/images/noimage.jpg" alt="" uk-cover>';
                        }
                        ?>
                        <canvas width="410" height="525"></canvas>
                    </div>
                    <div class="item-28px">
                        <h4 class="home__room__title1"><a href="" class="uk-link-toggle"><?php the_title(); ?></a></h4>
                        <div class="item-16px home__room__txt"><?= get_the_excerpt(); ?></div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <?php if( have_rows('rooms') ): ?>
    <?php while( have_rows('rooms') ): the_row(); ?>
    <?php if (get_sub_field('button_text')): ?>
    <div class="uk-container item-64px uk-text-center">
        <a href="<?php echo get_the_permalink(pll_get_post(13));?>" class="uk-button uk-button-default home__room__btn"><?php the_sub_field('button_text'); ?></a>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<!--/Our Rooms-->
<?php endif; wp_reset_postdata(); ?>

<!---->
<div class="uk-section-large">
    <div class="uk-container">
        <?php if( have_rows('offer') ): ?>
        <?php while( have_rows('offer') ): the_row(); ?>

        <?php if (get_sub_field('title')): ?>
        <h2 class="home__about__title uk-text-center"><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>


        <div class="item-60px" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-grid-small uk-grid-30-l" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img1.png'),
                            ),
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img2.png'),
                            ),
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img3.png'),
                            ),
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img1.png'),
                            ),
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img2.png'),
                            ),
                            array(
                                'img' => get_theme_file_uri('/assets/images/offer/img3.png'),
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <li>
                            <div class="uk-cover-container">
                                <img class="lazy" data-src="<?= $v['img'] ?>" alt="" uk-cover="">
                                <canvas width="384" height="240"></canvas>
                            </div>
                            <div class="item-16px">
                                <h4 class="home__room__title1"><a href="" class="uk-link-toggle">VILLA Forest Wellness Pool Villa</a></h4>
                                <div class="item-12px home__room__txt">Experience the vibrant sights and sounds of the lush Mayan jungle.</div>
                                <?php if (get_sub_field('button_text')): ?>
                                <div class="item-32px">
                                    <a href="" class="uk-button uk-button-default home__room__btn"><?php the_sub_field('button_text'); ?></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('dining') ): ?>
        <?php while( have_rows('dining') ): the_row(); ?>
        <div class="uk-child-width-1-2@l uk-flex-middle item-132px" uk-grid>
            <div>
                <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
                    <?php if (get_sub_field('title')): ?>
                    <h2 class="width-298px home__about__title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('desc')): ?>
                    <div class="width-366px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
                    <?php endif; ?>

                    <?php if (get_sub_field('button_text')): ?>
                    <a href="" class="home__about__link uk-link-toggle"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="uk-flex-first@l">
                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!--/-->

<?php if( have_rows('experiences') ): ?>
<?php while( have_rows('experiences') ): the_row(); ?>
<?php
$image = get_sub_field('image');
?>
<!--Experience-->
<div class="home__experience__section uk-light uk-section-large uk-background-norepeat uk-background-cover uk-background-center-center" style="--path-to-image: url(<?= (!empty( $image )) ? esc_url($image['url']) : '' ?>)">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-auto">
                <div class="width-500px uk-flex uk-flex-column home__experience__boxFlex">
                    <?php if (get_sub_field('title')): ?>
                    <h2 class="home__experience__title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('desc')): ?>
                    <div class="home__experience__txt"><?php the_sub_field('desc'); ?></div>
                    <?php endif; ?>

                    <?php if (get_sub_field('button_text')): ?>
                    <div><a href="" class="home__experience__btn uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Experience-->
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('highlights') ): ?>
<?php while( have_rows('highlights') ): the_row(); ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
            <?php if (get_sub_field('title')): ?>
            <h2 class="width-298px home__about__title"><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('desc')): ?>
            <div class="width-708px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<div class="uk-grid-collapse uk-child-width-expand@l uk-light" uk-grid>
    <div>
        <div class="uk-cover-container">
            <img class="lazy" data-src="<?= get_theme_file_uri('/assets/images/hl1.png') ?>" alt="" uk-cover="">
            <canvas width="960" height="1284"></canvas>
        </div>
    </div>
    <div>
        <div class="uk-cover-container">
            <img class="lazy" data-src="<?= get_theme_file_uri('/assets/images/hl2.png') ?>" alt="" uk-cover="">
            <canvas width="960" height="1284"></canvas>
            <div class="home__hightlights__overlay uk-text-center uk-position-cover uk-card uk-card-body uk-flex uk-flex-middle uk-flex-center">
                <h3 class="home__hightlights__title">Four-Bedroom Pool Residence</h3>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-cover-container">
            <img class="lazy" data-src="<?= get_theme_file_uri('/assets/images/hl3.png') ?>" alt="" uk-cover="">
            <canvas width="960" height="1284"></canvas>
        </div>
    </div>
</div>

<?php if( have_rows('location') ): ?>
<?php while( have_rows('location') ): the_row(); ?>
<div class="home__location__section uk-background-norepeat uk-background-center-left uk-section uk-background-image@l" style="" data-src="<?= get_theme_file_uri('/assets/images/Layer1.png') ?>" uk-img>
    <div class="uk-container">
        <div class="uk-flex-right@l" uk-grid>
            <div class="uk-width-1-2@l">
                <?php if (get_sub_field('title')): ?>
                <h3 class="home__location__title"><?php the_sub_field('title'); ?></h3>
                <?php endif; ?>

                <?php if( have_rows('location_repeater') ): ?>
                <div class="uk-child-width-1-2 item-36px" uk-grid>
                    <?php while( have_rows('location_repeater') ): the_row(); ?>
                    <div>
                        <div class="home__location__name"><?php the_sub_field('name'); ?></div>
                        <div class="item-4px home__location__value"><?php the_sub_field('value'); ?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>