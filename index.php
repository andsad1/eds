<?php /* Template Name: Pagrindinis */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main>
            <?php include('includes/sections/hero_section.php'); ?>
            <?php include('includes/sections/about_us_section.php'); ?>
            <div class="gray_background home_gray">
                <?php include('includes/sections/portf_section.php'); ?>
                <?php include('includes/sections/our_work_section.php'); ?>
            </div>
            <?php include('includes/sections/instagram_section.php'); ?>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>