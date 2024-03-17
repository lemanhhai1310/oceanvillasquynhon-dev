<?php
/* Template name: Contact Us */
get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>

<div class="home__location__section uk-flex uk-flex-middle uk-background-norepeat uk-background-center-left uk-background-image@l" style="" data-src="<?= get_theme_file_uri('/assets/images/Layer1.png') ?>" uk-img>
    <div class="uk-width uk-section">
        <div class="uk-container">
            <div class="uk-flex-right@l" uk-grid>
                <div class="uk-width-1-2@l">
                    <form>
                        <fieldset class="uk-fieldset">

                            <legend class="contact__form__legend uk-legend">Get in touch</legend>

                            <div class="uk-margin">
                                <input class="contact__form__input uk-input uk-form-large" type="text" placeholder="Name" aria-label="Name">
                            </div>
                            <div class="uk-margin">
                                <input class="contact__form__input uk-input uk-form-large" type="email" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="uk-margin">
                                <input class="contact__form__input uk-input uk-form-large" type="tel" placeholder="Phone number" aria-label="Phone number">
                            </div>


                            <div class="uk-margin">
                                <textarea class="contact__form__input uk-textarea uk-form-large" rows="5" placeholder="Please write your inquiry here" aria-label="Please write your inquiry here"></textarea>
                            </div>

                            <div class="uk-margin">
                                <button class="contact__form__btn uk-button uk-button-primary uk-button-large uk-width">Send message</button>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>