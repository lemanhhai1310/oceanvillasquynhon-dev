<?php
/* Template name: Offer */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>
<div class="uk-section">
    <div class="uk-container">
        <?php
        $args = array(
            'taxonomy' => 'category-offer',
        );
        $cats = get_categories($args);
        //var_dump($cats);
        $cat_slug = [];
        ?>
        <?php if (!empty($cats)): ?>
        <div uk-filter="target: .js-filter">

            <div class="uk-flex uk-flex-center">
                <div class="offer__navFilter">
                    <ul class="uk-subnav uk-subnav-pill uk-flex-center uk-margin-remove-bottom">
                        <li class="uk-active" uk-filter-control>
                            <a href="#">
                                <?php
                                $current_lang = pll_current_language();
                                switch ($current_lang) {
                                    case "en":
                                        echo "All";
                                        break;
                                    default:
                                        echo "Tất cả";
                                }
                                ?>
                            </a>
                        </li>
                        <?php
                        foreach ($cats as $cat):
                            array_push($cat_slug, $cat->slug); ?>
                            <li uk-filter-control="[data-slug='<?php echo $cat->slug; ?>']"><a href="#"><?php echo $cat->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <?php
            $query = new WP_Query(array(
                'post_type' => 'offer',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category-offer',
                        'field' => 'slug',
                        'terms' => $cat_slug,
                    )
                ),
            ));
            if ($query->have_posts()): ?>
            <ul class="js-filter uk-child-width-1-1 uk-grid-84-l item-64px" uk-grid>
                <?php while ($query->have_posts()){ $query->the_post(); ?>

                <?php
                $id = get_the_ID();
                $terms = wp_get_post_terms($id, 'category-offer');
                ?>
                <li data-slug="<?php echo $terms[0]->slug; ?>" class="uk-inline-clip uk-transition-toggle">
                    <div class="uk-grid-44-l" uk-grid uk-height-match=".my-height">
                        <div class="uk-width-auto@l">
                            <div class="width-540px uk-border-rounded uk-overflow-hidden">
                                <div class="uk-cover-container uk-background-muted my-height">
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
                                    <img class="lazy uk-transition-scale-up uk-transition-opaque" data-src="<?= $featured_img_url ?>" alt="<?= $img_alt ?>" uk-cover="">
                                    <canvas width="540" height="322"></canvas>
                                    <div class="uk-position-bottom offer__overlay"></div>
                                    <button id="btn-<?php echo $terms[0]->slug; ?>" class="offer__btnView uk-button uk-button-default uk-position-bottom-right uk-position-small" type="button" uk-toggle="target: #toggle-usage-<?php echo $terms[0]->slug; ?>; animation: uk-animation-fade; queued: true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M6.90075 8.69998L11.7007 17.52C11.7607 17.64 11.9407 17.64 12.0007 17.52L16.8607 8.75998C16.9207 8.63998 16.8007 8.45998 16.6207 8.51998L14.7607 9.35998C14.5807 9.41998 13.0207 10.14 11.8207 10.62C10.6207 10.08 9.18075 9.41998 8.94075 9.29998L7.08075 8.45998C7.02075 8.39998 6.84075 8.57998 6.90075 8.69998Z" fill="white"/>
                                            <path d="M20.8204 12C20.8204 16.86 16.8604 20.82 12.0004 20.82C7.14039 20.82 3.18039 16.86 3.18039 12C3.18039 7.14002 7.14039 3.18002 12.0004 3.18002C16.8604 3.18002 20.8204 7.14002 20.8204 12ZM21.6004 12C21.6004 6.72002 17.2804 2.40002 12.0004 2.40002C6.72039 2.40002 2.40039 6.72002 2.40039 12C2.40039 17.28 6.72039 21.6 12.0004 21.6C17.2804 21.6 21.6004 17.28 21.6004 12Z" fill="white"/>
                                        </svg>
                                        <?php
                                        $current_lang = pll_current_language();
                                        switch ($current_lang) {
                                            case "en":
                                                echo "View detail";
                                                break;
                                            default:
                                                echo "Xem chi tiết";
                                        }
                                        ?>
                                    </button>
                                </div>
                                <div class="offer__contentBox uk-card uk-card-body" hidden id="toggle-usage-<?php echo $terms[0]->slug; ?>"><?php the_content(); ?></div>
                                <script>

                                    UIkit.util.on('#toggle-usage-<?php echo $terms[0]->slug; ?>', 'show', function () {
                                        // do something
                                        console.log('#toggle-usage-<?php echo $terms[0]->slug; ?> show');
                                        document.querySelector("#btn-<?php echo $terms[0]->slug; ?>").classList.add('open');
                                    });
                                    UIkit.util.on('#toggle-usage-<?php echo $terms[0]->slug; ?>', 'hide', function () {
                                        // do something
                                        console.log('#toggle-usage-<?php echo $terms[0]->slug; ?> hide');
                                        document.querySelector("#btn-<?php echo $terms[0]->slug; ?>").classList.remove('open');
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-flex uk-flex-column my-height">
                                <div class="uk-flex-auto">
                                    <h2 class="accommodation__room__card__title"><?php the_title(); ?></h2>
                                    <p class="accommodation__room__card__desc item-32px"><?= get_the_excerpt(); ?></p>
                                </div>
                                <div class="item-40px">
                                    <a href="" class="uk-button uk-button-default home__room__btn">
                                        <?php
                                        $current_lang = pll_current_language();
                                        switch ($current_lang) {
                                            case "en":
                                                echo "Book Your Stay";
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
                </li>
                <?php } ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>

        </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>