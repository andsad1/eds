<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main id="about_us">
            <?php $smallThumb = get_the_post_thumbnail_url(get_the_id(), 'medium'); ?>
            <?php $thumb = get_the_post_thumbnail_url(get_the_id(), 'very_big'); ?>
            <?php if ($thumb) : ?>
                <img class="main_img lazy" src="<?php echo $smallThumb; ?>" data-src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="container about_content">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h1><?php the_title(); ?></h1>
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>