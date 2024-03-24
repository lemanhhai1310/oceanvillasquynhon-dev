<?php
/* Template name: Contact Us */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<div class="home__location__section" style="">
    <div class="uk-container uk-container-expand-left">
        <div class="uk-container-item-padding-remove-left">
            <div class="uk-flex-middle uk-grid-collapse uk-grid-133-l" uk-grid>
                <div class="uk-width-auto@l">
                    <img src="<?= get_theme_file_uri('/assets/images/Layer1-edit.png') ?>" alt="">
                </div>
                <div class="uk-width-expand">
                    <div class="uk-padding-small uk-padding-remove-right">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>