<?php /* Template Name: Residential */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main class="residential">
            <div class="container-fluid">
                <?php $thumb = get_field('main_image'); ?>
                <?php if ($thumb) : ?>
                    <img class="main_img lazy designs_image" src="<?php echo $thumb['sizes']['medium']; ?>" data-src="<?php echo $thumb['sizes']['very_big']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 design_text">
                        <h1 class="ddown-arrow"><?php the_title(); ?></h1>
                        <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php $posts = array(
                    'numberposts' => -1,
                    'post_type' => 'residential',
                    'nopaging' => true
                ); ?>
                <?php $postsQuery = new WP_Query($posts); ?>
                <?php if ($postsQuery->have_posts()) : ?>
                    <div class="design-block-row">
                        <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
                            <?php $thumb = get_the_post_thumbnail_url(get_the_id(), 'medium_large'); ?>
                            <?php if ($thumb) : ?>
                                <a class="design-block__permalink" href="<?php the_permalink(); ?>">
                                    <div class="design-block__image-holder">
                                        <img class="design-block__background" src="<?php echo $thumb; ?>" />
                                    </div>
                                    <h3 class="design-block__heading"><?php the_title(); ?></h3>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <div class="design-download__holder">
                    <a href="" class="design-download">DOWNLOAD OUR RESIDENTIAL BROCHURE</a>
                </div>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>