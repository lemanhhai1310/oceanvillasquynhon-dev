<?php
/* Template name: Accommodation */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<?php if( have_rows('our_rooms') ): ?>
<?php while( have_rows('our_rooms') ): the_row(); ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
            <?php if (get_sub_field('title')): ?>
            <h2 class="width-388px home__about__title"><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('desc')): ?>
            <div class="width-708px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $images = get_sub_field('gallery');
    if( $images ): ?>
    <div class="item-74px uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true">

        <ul class="uk-slider-items uk-grid" uk-grid>
            <?php foreach( $images as $image ): ?>
            <li class="uk-width-3-4">
                <div class="uk-cover-container">
                    <img class="lazy uk-width" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                    <canvas width="1240" height="640"></canvas>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
    <?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('included') ): ?>
<?php while( have_rows('included') ): the_row(); ?>
<div class="uk-section accommodation__include__section">
    <div class="uk-container">
        <?php if (get_sub_field('title')): ?>
        <h2 class="uk-text-center accommodation__include__title"><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>

        <?php if( have_rows('included_repeater') ): ?>
        <div class="item-60px width-960px uk-margin-auto">
            <div class="uk-child-width-1-2 uk-child-width-1-3@l uk-child-width-1-4@l uk-grid-small uk-grid-30-l" uk-grid>
                <?php while( have_rows('included_repeater') ): the_row();  ?>
                <div>
                    <div class="uk-flex-middle uk-grid-12" uk-grid>
                        <div class="uk-width-auto">
                            <div class="accommodation__include__box uk-cover-container uk-border-rounded">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <?php
                                    $image = get_sub_field('image');
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size );
                                    }
                                    ?>
                                </div>
                                <canvas width="40" height="40"></canvas>
                            </div>
                        </div>
                        <?php if (get_sub_field('name')): ?>
                        <div class="uk-width-expand">
                            <div class="accommodation__include__txt"><?php the_sub_field('name'); ?></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>


<?php
$query = new WP_Query(array(
    'post_type' => 'room',
));
if ($query->have_posts()): ?>
<div class="uk-section uk-section-muted">
    <div class="uk-container uk-padding-remove">
        <?php
        $num = 1;
        while ($query->have_posts()){ $query->the_post(); ?>
        <div class="accommodation__room__card uk-card item-44px uk-card-body uk-border-rounded uk-background-default">
            <div uk-grid>
                <?php
                $images = get_field('gallery');
                if( $images ): ?>
                <div class="uk-width-auto@l <?= ($num%2==0) ? 'uk-flex-last@l' : '' ?>">
                    <div class="accommodation__room__card__slider uk-border-rounded uk-overflow-hidden width-540px uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 540:442;autoplay: true;finite: true;">

                        <ul class="uk-slideshow-items">
                            <?php foreach( $images as $image ): ?>
                            <li>
                                <img class="lazy accommodation__room__card__slider__img" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="accommodation__room__card__slider__label uk-position-bottom-left">1/4</div>

                        <div class="uk-position-bottom-right uk-flex">
                            <a class="accommodation__room__card__slider__slidenav accommodation__room__card__slider__slidenav--prev" href uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="accommodation__room__card__slider__slidenav accommodation__room__card__slider__slidenav--next" href uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>

                    </div>
                </div>
                <?php endif; ?>
                <div class="uk-width-expand">
                    <h3 class="accommodation__room__card__title"><?php the_title(); ?></h3>
                    <?php if( have_rows('option') ): ?>
                    <?php while( have_rows('option') ): the_row(); ?>
                    <ul class="accommodation__room__card__option uk-list item-42px">
                        <?php if (get_sub_field('size')): ?>
                        <li class="size"><?php the_sub_field('size'); ?></li>
                        <?php endif; ?>

                        <?php if (get_sub_field('max_guests')): ?>
                        <li class="max_guests"><?php the_sub_field('max_guests'); ?></li>
                        <?php endif; ?>

                        <?php if (get_sub_field('views')): ?>
                        <li class="views"><?php the_sub_field('views'); ?></li>
                        <?php endif; ?>

                        <?php if (get_sub_field('bed')): ?>
                        <li class="bed"><?php the_sub_field('bed'); ?></li>
                        <?php endif; ?>
                    </ul>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="item-36px">
                        <ul class="accommodation__room__card__tab uk-subnav uk-subnav-pill uk-grid-12" uk-switcher>
                            <?php if (get_field('description')): ?>
                            <li><a href="#">Description</a></li>
                            <?php endif; ?>

                            <?php if (get_field('facilities')): ?>
                            <li><a href="#">Facilities</a></li>
                            <?php endif; ?>
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <?php if (get_field('description')): ?>
                            <li class="accommodation__room__card__desc">
                                <?php the_field('description'); ?>
                            </li>
                            <?php endif; ?>

                            <?php if (get_field('facilities')): ?>
                            <li class="accommodation__room__card__desc">
                                <?php the_field('facilities'); ?>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="item-40px">
                        <a href="" class="uk-button uk-button-default home__room__btn">
                            <?php
                            $current_lang = pll_current_language();
                            switch ($current_lang) {
                                case "en":
                                    echo "Book Now";
                                    break;
                                default:
                                    echo "Đặt phòng";
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $num++; } ?>
    </div>
</div>
<?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>