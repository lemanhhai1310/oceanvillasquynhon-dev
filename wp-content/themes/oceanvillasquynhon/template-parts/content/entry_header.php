<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(), 'full')); ?>
<div uk-scrollspy="target: .anima; repeat: false; cls: animate; delay: 100" uk-parallax="bgy: -200" class="accommodation__banner uk-light uk-height-viewport uk-flex uk-flex-middle uk-flex-center lazy uk-background-blend-overlay uk-background-norepeat uk-background-fixed uk-background-center-center uk-background-cover" style="background-color: rgba(0, 0, 0, 0.5);" data-src="<?php echo $feat_image ?>" uk-img="loading: eager">
    <h1 class="accommodation__banner__title anima"><?php the_title(); ?></h1>
    <div uk-parallax="target: .accommodation__banner; start: 70vh; end: 70vh; easing: 0;opacity: 1,0;" class="accommodation__scroll uk-position-bottom-center uk-position-medium">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <path d="M8.62496 10.875L14.625 21.9C14.7 22.05 14.925 22.05 15 21.9L21.075 10.95C21.15 10.8 21 10.575 20.775 10.65L18.45 11.7C18.225 11.775 16.275 12.675 14.775 13.275C13.275 12.6 11.475 11.775 11.175 11.625L8.84996 10.575C8.77496 10.5 8.54996 10.725 8.62496 10.875Z" fill="white"/>
            <path d="M26.025 15C26.025 21.075 21.075 26.025 15 26.025C8.925 26.025 3.975 21.075 3.975 15C3.975 8.925 8.925 3.975 15 3.975C21.075 3.975 26.025 8.925 26.025 15ZM27 15C27 8.4 21.6 3 15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15Z" fill="white"/>
        </svg>
    </div>
</div>