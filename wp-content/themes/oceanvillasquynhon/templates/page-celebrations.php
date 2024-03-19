<?php
/* Template name: Celebrations */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<?php if( have_rows('celebrate_with_us') ): ?>
<?php while( have_rows('celebrate_with_us') ): the_row(); ?>
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
            <?php if (get_sub_field('title')): ?>
                <h2 class="width-388px home__about__title"><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('desc')): ?>
                <div class="width-740px home__about__desc home__about__divider"><?php the_sub_field('desc'); ?></div>
            <?php endif; ?>

            <?php if (get_sub_field('button_text')): ?>
                <div class="uk-text-center">
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
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('the_venue') ): ?>
<?php while( have_rows('the_venue') ): the_row(); ?>
<div class="uk-section">
    <div class="uk-container">
        <?php if (get_sub_field('title')): ?>
            <h2 class="uk-text-center home__room__title"><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>

        <?php
        $query = new WP_Query(array(
            'post_type' => 'the-venue',
        ));
        if ($query->have_posts()): ?>
        <div class="item-64px uk-child-width-1-3@l" uk-grid>
            <?php while ($query->have_posts()){ $query->the_post(); ?>
            <div>
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
                    <canvas width="384" height="525"></canvas>
                </div>
                <div class="item-28px">
                    <h4 class="home__room__title1"><a href="" class="uk-link-toggle"><?php the_title(); ?></a></h4>
                    <div class="item-12px celebrations__content"><?= get_the_content(); ?></div>
                    <div class="item-8px home__room__txt"><?= get_the_excerpt(); ?></div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>

        <?php if (get_sub_field('button_text')): ?>
            <div class="item-64px uk-text-center">
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
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('celebrations') ): ?>
<?php
$num = 1;
while( have_rows('celebrations') ): the_row(); ?>
<div class="uk-section <?= ($num%2==0) ? '' : 'uk-section-muted' ?>">
    <div class="uk-container">
        <div class="uk-child-width-1-2@l uk-flex-middle item-132px" uk-grid>
            <div class="<?= ($num%2==0) ? '' : 'uk-flex-last@l' ?>">
                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                <div class="uk-cover-container">
                    <img class="lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover="">
                    <canvas width="620" height="764"></canvas>
                </div>
                <?php endif; ?>
            </div>
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
        </div>
    </div>
</div>
<?php $num++; endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>