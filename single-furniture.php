<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <?php $images = get_field('gallery'); ?>
        <main class="single_portfolio">
            <section class="container-fluid furniture-top">
                <div class="hero_slider">
                    <?php foreach ($images as $image) : ?>
                        <div class="hero_slide">
                            <img class="hero_img lazy" src="<?php echo esc_url($image['sizes']['very_big']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <div class="container">
                <h1 class="single-furniture-tilte"><?php the_title(); ?></h1>
                <div class="furniture_row">
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="portf-info">
                        <div class="portf-info__row">
                            <strong>DIMESNSIONS</strong>
                            <span>
                                <?php get_field('dimensions') ? the_field('dimensions') : "-" ?>
                            </span>
                        </div>
                        <div class="portf-info__row">
                            <strong>MATERIALS AND FINISHES</strong>
                            <span><?php get_field('materials') ? the_field('materials') : "-" ?></span>
                        </div>
                        <div class="portf-info__row">
                            <strong>INFO SHEET</strong>
                            <?php $infoSheet = get_field('info_sheet'); ?>
                            <?php if ($infoSheet) : ?>
                                <a class="furniture_download" href="<?php echo $infoSheet['url']; ?>" download>Download <img src="<?php bloginfo('template_url'); ?>/assets/img/download.png" alt="editdesignstudio"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="furniture-button-holder">
                    <button id="enquire" class="main_button">ENQUIRE</button>
                </div>
                <div id="enquire-form" class="enquire-overlay">
                    <div class="enquire-form-holder contact_form_holder">
                        <button id="close-enquire">&#9587;</button>
                        <h1 class="contant_heading">ENQUIRE</h1>
                        <?php echo do_shortcode('[contact-form-7 id="422" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
            <script>
                jQuery(document).ready(function($) {
                    $('#enquire').click(function() {
                        $('#enquire-form').addClass('enquire-overlay--active');
                    });

                    $('#close-enquire').click(function() {
                        $('#enquire-form').removeClass('enquire-overlay--active');
                    });
                })
            </script>
        </main>
    <?php
    endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>