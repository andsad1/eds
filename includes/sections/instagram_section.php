<section id="instagram_section">
    <div class="container-fluid">
        <?php if (get_field('instagram_heading') && get_field('instagram_link')) : ?>
            <a href="<?php the_field('instagram_link'); ?>" target="_blank" class="follow_link">
                <img class="follow_link_logo" src="<?php bloginfo('template_url'); ?>/assets/img/dark_logo.jpg" alt="editdesignstudio logo">
                <?php the_field('instagram_heading'); ?></a>
        <?php endif; ?>
        <?php echo do_shortcode('[insta-gallery id="1"]'); ?>
    </div>
</section>