<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <main id="contact">
            <div class="container-fluid">
                <div class="contact_row">
                    <div class="contacts_left">
                        <?php $image = get_field('main_image'); ?>
                        <?php if ($image) : ?>
                            <img class="contacts-image lazy" data-src="<?php echo $image['sizes']['big']; ?>" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <img class="ddown only-mobile" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                    </div>
                    <div class="contacts_right">
                        <div class="contact_holder">
                            <?php while (have_rows('contact')) : the_row(); ?>
                                <div class="one_contact">
                                    <h2><?php the_sub_field('name'); ?></h2>
                                    <div class="contact_line">
                                        <a href="tel: <?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
                                    </div>
                                    <div class="contact_line">
                                        <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <div class="one_contact">
                                <?php the_field('address'); ?>
                            </div>
                        </div>
                        <div class="contact_form_holder">
                            <h1 class="contant_heading text-center"><?php the_title(); ?></h1>
                            <?php echo do_shortcode('[contact-form-7 id="422" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    endwhile;
endif; ?>
<?php get_footer(); ?>