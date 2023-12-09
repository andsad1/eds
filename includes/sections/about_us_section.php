<section id="about_us_section" class="home_about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="ddown-arrow"><?php the_field('intro_heading'); ?></h1>
                <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
                <h3 class="about_us_h3">Welcome to our Design World</h3>
                <div class="text">
                    <?php the_field('intro_text'); ?>
                </div>
                <?php $introButton = get_field('intro_button'); ?>
                <?php if ($introButton) : ?>
                    <div class="main_button_holder">
                        <a target="<?php echo $introButton['target']; ?>" class="main_button" href="<?php echo $introButton['url']; ?>">
                            <?php echo $introButton['title']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>