<?php /* Template Name: Furniture */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main id="our_process">
            <div class="container-fluid">
                <?php $thumb = get_field('main_image'); ?>
                <?php if ($thumb) : ?>
                    <img class="main_img lazy designs_image" src="<?php echo $thumb['sizes']['medium']; ?>" data-src="<?php echo $thumb['sizes']['very_big']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <?php $posts = array(
                'numberposts' => -1,
                'post_type' => 'furniture',
                'nopaging' => true
            ); ?>
            <?php $postsQuery = new WP_Query($posts); ?>
            <?php if ($postsQuery->have_posts()) : ?>
                <div class="large_container">
                    <div class="row">
                        <div class="col-12 design_text">
                            <h1 class="ddown-arrow"><?php the_title(); ?></h1>
                            <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php include('includes/templates/furniture_gallery.php'); ?>
                </div>
            <?php endif; ?>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>