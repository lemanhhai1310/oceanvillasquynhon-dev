<?php
/* Template name: Dining */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<?php if( have_rows('culinary') ): ?>
<?php while( have_rows('culinary') ): the_row(); ?>
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
            <?php if (get_sub_field('title')): ?>
            <h2 class="width-388px home__about__title"><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('desc')): ?>
            <div class="width-740px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('restaurant') ): ?>
<?php
$num = 1;
while( have_rows('restaurant') ): the_row(); ?>
<div class="uk-section <?= ($num%2==0) ? 'uk-section-muted' : '' ?>">
    <div class="uk-container">
        <div class="uk-child-width-1-2@l" uk-grid>
            <div class="<?= ($num%2==0) ? '' : 'uk-flex-last@l' ?>">
                <?php
                $image = get_sub_field('image');
                if( !empty($image) ): ?>
                <div class="uk-cover-container uk-border-rounded">
                    <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                    <canvas width="600" height="440"></canvas>
                </div>
                <?php endif; ?>
            </div>
            <div>
                <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-left">
                    <?php if (get_sub_field('title')): ?>
                    <h2 class="home__about__title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>


                    <div class="dining__boxFlexColumn uk-flex uk-flex-column">
                        <?php if (get_sub_field('content')): ?>
                        <div class="dining__content">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <?php endif; ?>

                        <?php if (get_sub_field('button_text')): ?>
                        <div><a href="" class="dining__linkMenu uk-link-toggle"><?php the_sub_field('button_text'); ?></a></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $num++; endwhile; ?>
<?php endif; ?>

<?php if( have_rows('our_kitchen_team') ): ?>
<?php while( have_rows('our_kitchen_team') ): the_row(); ?>
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
                    <?php if (get_sub_field('title')): ?>
                        <h2 class="width-298px home__about__title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('desc')): ?>
                        <div class="width-432px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="uk-width-auto@l">
                <?php
                $images = get_sub_field('gallery');
                if( $images ): ?>
                <div class="dining__boxImage uk-position-relative width-715px">
                    <?php
                    $num = 1;
                    foreach( $images as $image ): ?>
                    <div class="item-16px dining__boxImage__item">
                        <div class="uk-cover-container">
                            <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                            <?php
                            switch ($num) {
                                case "1":
                                    echo '<canvas width="398" height="322"></canvas>';
                                    break;
                                case "2":
                                    echo '<canvas width="364" height="240"></canvas>';
                                    break;
                                case "3":
                                    echo '<canvas width="318" height="407"></canvas>';
                                    break;
                            }
                            ?>
                        </div>
                    </div>
                    <?php $num++; endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php
$images = get_field('gallery');
if( $images ): ?>
<div class="uk-section uk-section-muted" uk-lightbox="animation: slide">
    <div uk-slider="center: true">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

            <ul class="uk-slider-items uk-grid-8" uk-grid>
                <?php foreach( $images as $image ): ?>
                <li class="uk-width-3-4 uk-width-auto@l">
                    <div class="uk-cover-container uk-inline-clip uk-transition-toggle">
                        <img class="lazy uk-transition-scale-up uk-transition-opaque" data-src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                        <canvas width="354" height="440"></canvas>
                        <a href="<?php echo esc_url($image['url']); ?>" data-caption="<?php echo esc_html($image['caption']); ?>" class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.8" cx="22.4407" cy="22.4409" r="20" transform="rotate(-7.50411 22.4407 22.4409)" fill="#00ACAB"/>
                                <path d="M31.8729 21.6111C31.6942 21.3667 27.4371 15.6265 21.9999 15.6265C16.5627 15.6265 12.3054 21.3667 12.1269 21.6109C11.9577 21.8427 11.9577 22.1572 12.1269 22.3891C12.3054 22.6335 16.5627 28.3737 21.9999 28.3737C27.4371 28.3737 31.6942 22.6335 31.8729 22.3893C32.0423 22.1575 32.0423 21.8427 31.8729 21.6111ZM21.9999 27.055C17.9949 27.055 14.5261 23.2452 13.4992 21.9996C14.5247 20.753 17.9863 16.9451 21.9999 16.9451C26.0048 16.9451 29.4733 20.7544 30.5006 22.0005C29.4751 23.2471 26.0135 27.055 21.9999 27.055Z" fill="white"/>
                                <path d="M22 18.0439C19.8187 18.0439 18.0439 19.8187 18.0439 22C18.0439 24.1813 19.8187 25.9561 22 25.9561C24.1813 25.9561 25.9561 24.1813 25.9561 22C25.9561 19.8187 24.1813 18.0439 22 18.0439ZM22 24.6374C20.5457 24.6374 19.3627 23.4543 19.3627 22C19.3627 20.5457 20.5457 19.3627 22 19.3627C23.4543 19.3627 24.6374 20.5457 24.6374 22C24.6374 23.4543 23.4543 24.6374 22 24.6374Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>