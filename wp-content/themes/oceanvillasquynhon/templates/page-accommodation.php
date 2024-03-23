<?php
/* Template name: Accommodation */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<?php if( have_rows('our_rooms') ): ?>
<?php while( have_rows('our_rooms') ): the_row(); ?>
<div class="uk-section">
    <div class="uk-container">
        <div uk-scrollspy="cls: uk-animation-slide-bottom-small; repeat: false; delay: 100" class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
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
    <div class="item-74px uk-position-relative uk-visible-toggle" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: false; delay: 100" tabindex="-1" uk-slider="center: true">

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
        <div class="item-60px uk-margin-auto">
            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-30-l" uk-grid>
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
    <div class="uk-container uk-padding-remove" uk-scrollspy="target: .anima; repeat: false; cls: animate; delay: 100">
        <script>
            function indexInParent(node) {
                var children = node.parentNode.childNodes;
                var num = 0;

                for (var i=0; i<children.length; i++) {
                    if (children[i]==node) return num;
                    if (children[i].nodeType==1) num++;
                }

                return -1;
            }
        </script>
        <?php
        $num = 1;
        while ($query->have_posts()){ $query->the_post(); ?>
        <div class="accommodation__room__card anima uk-card item-44px uk-card-body uk-border-rounded uk-background-default">
            <div uk-grid>
                <?php
                $images = get_field('gallery');
                if( $images ): ?>
                <div class="uk-width-auto@l <?= ($num%2==0) ? 'uk-flex-last@l' : '' ?>">
                    <div id="slideshow-<?= $num ?>" class="accommodation__room__card__slider uk-border-rounded uk-overflow-hidden width-540px uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 540:442;autoplay: true;finite: true;">

                        <ul class="uk-slideshow-items">
                            <?php foreach( $images as $image ): ?>
                            <li>
                                <img class="lazy accommodation__room__card__slider__img" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" uk-cover>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="accommodation__room__card__slider__label uk-position-bottom-left">
                            1/4
                        </div>

                        <div class="uk-position-bottom-right uk-flex">
                            <a class="accommodation__room__card__slider__slidenav accommodation__room__card__slider__slidenav--prev" href uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="accommodation__room__card__slider__slidenav accommodation__room__card__slider__slidenav--next" href uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>

                    </div>
                    <script>
                        UIkit.util.on('#slideshow-<?= $num ?>', 'itemshown', function() {
                            var $items = this.getElementsByClassName('uk-slideshow-items');
                            var $activeItem = $items[0].getElementsByClassName('uk-active');
                            console.log('$activeItem',$activeItem);

                            var index = indexInParent($activeItem[0]);

                            console.log('#slideshow-<?= $num ?>',index+1);
                            var $length = $items[0].getElementsByTagName('li').length;
                            console.log('$length',$length);

                            var $label = this.getElementsByClassName('accommodation__room__card__slider__label');
                            console.log('$label',$label);
                            this.getElementsByClassName('accommodation__room__card__slider__label').outerText = "New text!";
                        });
                    </script>
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
                            <li>
                                <a href="#">
                                    <?php
                                    $current_lang = pll_current_language();
                                    switch ($current_lang) {
                                        case "en":
                                            echo "Description";
                                            break;
                                        default:
                                            echo "Mô tả";
                                    }
                                    ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (get_field('facilities')): ?>
                            <li>
                                <a href="#">
                                    <?php
                                    $current_lang = pll_current_language();
                                    switch ($current_lang) {
                                        case "en":
                                            echo "Facilities";
                                            break;
                                        default:
                                            echo "Tiện nghi";
                                    }
                                    ?>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <?php if (get_field('description')): ?>
                            <li class="accommodation__room__card__desc">
                                <p class="add-read-more show-less-content"><?php echo strip_tags(get_field('description')); ?></p>
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
<script>
    jQuery(function ($) {
        function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 300;
            // Text to show when text is collapsed
            var readMoreTxt = " ...<?= (pll_current_language() == "vi") ? 'Xem thêm' : 'Read more' ?>";
            // Text to show when text is expanded
            var readLessTxt = " <?= (pll_current_language() == "vi") ? 'Thu gọn' : 'Read less' ?>";


            //Traverse all selectors with this class and manipulate HTML part to show Read More
            $(".add-read-more").each(function () {
                if ($(this).find(".first-section").length)
                    return;

                var allstr = $(this).text();
                if (allstr.length > carLmt) {
                    var firstSet = allstr.substring(0, carLmt);
                    var secdHalf = allstr.substring(carLmt, allstr.length);
                    var strtoadd = firstSet + "<span class='second-section'>" + secdHalf + "</span><span class='read-more'  title='Click to Show More'>" + readMoreTxt + "</span><span class='read-less' title='Click to Show Less'>" + readLessTxt + "</span>";
                    $(this).html(strtoadd);
                }
            });

            //Read More and Read Less Click Event binding
            $(document).on("click", ".read-more,.read-less", function () {
                $(this).closest(".add-read-more").toggleClass("show-less-content show-more-content");
            });
        }

        AddReadMore();
    });
</script>
<?php get_footer(); ?>