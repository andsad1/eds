<?php /* Template Name: About us */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main id="about_us">
            <div class="container-fluid">
                <?php $smallThumb = get_the_post_thumbnail_url(get_the_id(), 'medium'); ?>
                <?php $thumb = get_the_post_thumbnail_url(get_the_id(), 'very_big'); ?>
                <?php if ($thumb) : ?>
                    <img class="main_img main_img--no-hide lazy" src="<?php echo $smallThumb; ?>" data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php the_title(); ?></h1>
                        <div class="text about_us_intro">
                            <?php the_content(); ?>
                        </div>
                        <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                        <div class="about_us_columns">
                            <div class="text">
                                <?php the_field('left_content'); ?>
                            </div>
                            <div class="text">
                                <?php the_field('right_content'); ?>
                            </div>
                        </div>
                        <?php $badge = get_field('badge'); ?>
                        <?php if ($badge) : ?>
                            <img class="about_us_badge_image" src="<?php echo $badge['sizes']['medium']; ?>" alt="pro member" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>