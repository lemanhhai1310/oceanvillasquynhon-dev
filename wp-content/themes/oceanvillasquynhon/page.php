<?php get_header(); ?>
<?php get_template_part('template-parts/content/entry_header'); ?>
<article class="uk-article uk-section">
    <div class="uk-container">
        <?php the_content(); ?>
    </div>
</article>
<?php get_footer(); ?>