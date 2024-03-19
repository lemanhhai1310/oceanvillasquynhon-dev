<?php get_header(); ?>

<?php
$file = get_field('video');
if( $file ): ?>
<!--Video-->
<div id="video" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

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
    <div uk-parallax="target: #video; start: 70vh; end: 70vh; easing: 0;opacity: 1,0;" class="accommodation__scroll uk-position-bottom-center uk-position-medium">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <path d="M8.62496 10.875L14.625 21.9C14.7 22.05 14.925 22.05 15 21.9L21.075 10.95C21.15 10.8 21 10.575 20.775 10.65L18.45 11.7C18.225 11.775 16.275 12.675 14.775 13.275C13.275 12.6 11.475 11.775 11.175 11.625L8.84996 10.575C8.77496 10.5 8.54996 10.725 8.62496 10.875Z" fill="white"/>
            <path d="M26.025 15C26.025 21.075 21.075 26.025 15 26.025C8.925 26.025 3.975 21.075 3.975 15C3.975 8.925 8.925 3.975 15 3.975C21.075 3.975 26.025 8.925 26.025 15ZM27 15C27 8.4 21.6 3 15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15Z" fill="white"/>
        </svg>
    </div>
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
                    <div class="uk-cover-container">
                        <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                        <canvas width="620" height="764"></canvas>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--/About-->
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('rooms') ): ?>
<?php while( have_rows('rooms') ): the_row(); ?>

<!--Our Rooms-->
<div class="uk-section-large uk-section-muted">

    <?php if (get_sub_field('title')): ?>
    <div class="uk-container">
        <h2 class="uk-text-center home__room__title"><?php the_sub_field('title'); ?></h2>
    </div>
    <?php endif; ?>

    <?php
    $query = new WP_Query(array(
        'post_type' => 'room',
    ));
    if ($query->have_posts()): ?>
    <div class="item-64px uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true; autoplay: true;">

        <ul class="uk-slider-items uk-grid uk-grid-small uk-grid-30-l" uk-grid>
            <?php while ($query->have_posts()){ $query->the_post(); ?>
            <li class="uk-width-3-4 uk-width-auto@s">
                <div class="width-410px">
                    <div class="uk-cover-container">
                        <?php
                        $base_url = get_bloginfo('template_directory');
                        $featured_img_url = $base_url.'/assets/images/noimage.jpg';

                        if(has_post_thumbnail()){
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        }

                        $thumbnail_id = get_post_meta( get_the_ID(), '_thumbnail_id', true );
                        $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
                        if(! $img_alt){
                            $img_alt = get_the_title();
                        }
                        ?>
                        <img class="lazy" data-src="<?= $featured_img_url ?>" alt="<?= $img_alt ?>" uk-cover="">
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
    <?php endif; wp_reset_postdata(); ?>

    <?php if (get_sub_field('button_text')): ?>
    <div class="uk-container item-64px uk-text-center">
        <a
            href="<?php
            $button_link = get_sub_field('button_link');
            if ($button_link){
                $permalink = get_permalink( $button_link->ID );
                echo $permalink;
            }
            ?>"
            class="uk-button uk-button-default home__room__btn">
            <?php the_sub_field('button_text'); ?>
        </a>
    </div>
    <?php endif; ?>
</div>
<!--/Our Rooms-->
<?php endwhile; ?>
<?php endif; ?>

<!---->
<div class="uk-section-large">
    <div class="uk-container">
        <?php if( have_rows('offer') ): ?>
        <?php while( have_rows('offer') ): the_row(); ?>

        <?php if (get_sub_field('title')): ?>
        <h2 class="home__about__title uk-text-center"><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>

        <?php
        $query = new WP_Query(array(
            'post_type' => 'offer',
        ));
        if ($query->have_posts()): ?>
        <div class="item-60px" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-grid-small uk-grid-30-l" uk-grid>
                        <?php while ($query->have_posts()){ $query->the_post(); ?>
                        <li>
                            <div class="uk-cover-container uk-border-rounded">
                                <?php
                                $base_url = get_bloginfo('template_directory');
                                $featured_img_url = $base_url.'/assets/images/noimage.jpg';

                                if(has_post_thumbnail()){
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                }

                                $thumbnail_id = get_post_meta( get_the_ID(), '_thumbnail_id', true );
                                $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
                                if(! $img_alt){
                                    $img_alt = get_the_title();
                                }
                                ?>
                                <img class="lazy" data-src="<?= $featured_img_url ?>" alt="<?= $img_alt ?>" uk-cover="">
                                <canvas width="384" height="240"></canvas>
                            </div>
                            <div class="item-16px" style="padding-bottom: 1px;">
                                <h4 class="home__room__title1"><a href="" class="uk-link-toggle"><?php the_title(); ?></a></h4>
                                <div class="item-12px home__room__txt"><?php the_excerpt_limited( 100 ); ?></div>
                                <?php if (get_sub_field('button_text')): ?>
                                <div class="item-32px">
                                    <a
                                        href="<?php
                                        $button_link = get_sub_field('button_link');
                                        if ($button_link){
                                            $permalink = get_permalink( $button_link->ID );
                                            echo $permalink;
                                        }
                                        ?>"
                                        class="uk-button uk-button-default home__room__btn">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php } ?>
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
        <?php endif; wp_reset_postdata(); ?>

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
                    <a
                        href="<?php
                        $button_link = get_sub_field('button_link');
                        if ($button_link){
                            $permalink = get_permalink( $button_link->ID );
                            echo $permalink;
                        }
                        ?>"
                        class="home__about__link uk-link-toggle">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="uk-flex-first@l">
                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <div class="uk-cover-container">
                        <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                        <canvas width="620" height="764"></canvas>
                    </div>
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

<?php if( have_rows('gallery') ): ?>
<div class="uk-grid-collapse uk-child-width-expand@l uk-light" uk-grid>
    <?php while( have_rows('gallery') ): the_row(); ?>
        <div>
            <div class="uk-cover-container uk-inline-clip uk-transition-toggle">
                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="" />
                <?php endif; ?>
                <canvas width="960" height="1284"></canvas>

                <?php if (get_sub_field('name')): ?>
                <div class="home__hightlights__overlay uk-transition-fade uk-text-center uk-position-cover uk-card uk-card-body uk-flex uk-flex-middle uk-flex-center">
                    <h3 class="home__hightlights__title"><?php the_sub_field('name'); ?></h3>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>


<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('location') ): ?>
<?php while( have_rows('location') ): the_row(); ?>
<div class="home__location__section uk-flex uk-flex-middle uk-background-norepeat uk-background-center-left uk-background-image@l" style="" data-src="<?= get_theme_file_uri('/assets/images/Layer1.png') ?>" uk-img>
    <div class="uk-width uk-section">
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
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>