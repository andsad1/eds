<section id="about_us_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_field('our_work_heading'); ?></h2>
                <div class="text">
                    <?php the_field('our_work_text'); ?>
                </div>
                <?php $workLink = get_field('our_work_link'); ?>
                <?php if ($workLink) : ?>
                    <div class="main_button_holder">
                        <a target="<?php echo $workLink['target']; ?>" class="main_button" href="<?php echo $workLink['url']; ?>">
                            <?php echo $workLink['title']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>