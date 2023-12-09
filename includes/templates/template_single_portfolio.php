<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main class="single_portfolio">
            <div class="container-fluid">
                <?php $thumb = get_field('main_big_image'); ?>
                <?php if ($thumb) : ?>
                    <img class="main_img lazy" src="<?php echo $thumb['sizes']['medium']; ?>" data-src="<?php echo $thumb['sizes']['very_big']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="portfolio_gray gray_background">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <div class="portfolio_text">
                        <div class="text-justify text">
                            <?php the_field('left_content'); ?>
                        </div>
                        <div class="text-justify text">
                            <?php the_field('right_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $layout = get_field('gallery_layout'); ?>
            <div class="large_container">
                <?php if ($layout === "fixed") : ?>
                    <?php include('fixed_gallery.php'); ?>
                <?php else : ?>
                    <?php include('masonry_gallery.php'); ?>
                <?php endif; ?>
                <div class="portf-info">
                    <div class="portf-info__row">
                        <strong>TYPE</strong>
                        <span>
                            <?php get_field('type') ? the_field('type') : "-" ?>
                        </span>
                    </div>
                    <div class="portf-info__row">
                        <strong>YEAR</strong>
                        <span>
                            <?php get_field('year') ? the_field('year') : "-" ?>
                        </span>
                    </div>
                    <div class="portf-info__row">
                        <strong>LOCATION</strong>
                        <span><?php get_field('location') ? the_field('location') : "-" ?></span>
                    </div>
                </div>
            </div>
        </main>
    <?php
    endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>