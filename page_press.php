<?php /* Template Name: Press */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main class="press">
            <div class="container">
                <h1 class="ddown-arrow">Press</h1>
                <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                <div class="press_row">
                    <?php while (have_rows('press')) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="nofollow">
                            <article class="press_item">
                                <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
                                <h3><?php the_sub_field('title'); ?></h3>
                            </article>
                        </a>
                    <?php endwhile; ?>
                </div>
                <h1 class="awards_h1 ddown-arrow">Awards</h1>
                <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                <div class="awards_row">
                    <?php while (have_rows('awards')) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="nofollow">
                            <article class="awards_item">
                                <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
                                <h3><?php the_sub_field('title'); ?></h3>
                            </article>
                        </a>
                    <?php endwhile; ?>
                </div>
                <h1 class="people_h1">People we Collaborate with</h1>
                <div class="text text-center">
                    <?php the_field('collaborate_text'); ?>
                </div>
                <div class="people_collaborate">
                    <?php while (have_rows('collaborate_people')) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="nofollow">
                            <?php the_sub_field("name"); ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>