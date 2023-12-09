<?php /* Template Name: Process */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main id="our_process">
            <div class="container-fluid">
                <?php $mainImage = get_field('main_image'); ?>
                <?php if ($mainImage) : ?>
                    <img class="main_img" src="<?php echo $mainImage['sizes']['big']; ?>" alt="<?php echo $mainImage['title']; ?>" />
                <?php endif; ?>
            </div>
            <div class="container">
                <h1 class="ddown-arrow"><?php the_field('first_title'); ?></h1>
                <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                <div>
                    <?php the_field('services'); ?>
                </div>
                <div class="design_text">
                    <?php the_field('description'); ?>
                </div>
                <h1 class="ddown-arrow"><?php the_field('second_title'); ?></h1>
                <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                <?php if (have_rows('process_rows')) : ?>
                    <?php $counter = 0; ?>
                    <?php while (have_rows('process_rows')) : the_row(); ?>
                        <div class="process__row">
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($counter % 2 === 0) : ?>
                                <div class="process__content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                                <?php if ($image) : ?>
                                    <img class="process__image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>" />
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ($image) : ?>
                                    <img class="process__image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>" />
                                <?php endif; ?>
                                <div class="process__content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>