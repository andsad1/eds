<section id="portf_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portf_row">
                    <div class="portf_item">
                        <?php $firstLink = get_field('first_design_link'); ?>
                        <a target="<?php echo $firstLink['target']; ?>" href="<?php echo $firstLink['url']; ?>">
                            <?php $firstImage = get_field('firsti_design_image'); ?>
                            <?php if ($firstImage) : ?>
                                <div class="portf_image_holder">
                                    <img class="portf_image" src="<?php echo $firstImage['sizes']['large']; ?>" />
                                </div>
                            <?php endif; ?>
                            <h3>
                                <?php the_field('first_design_text'); ?>
                            </h3>
                        </a>
                    </div>
                    <div class="portf_item">
                        <?php $secondLink = get_field('second_design_link'); ?>
                        <a target="<?php echo $secondLink['target']; ?>" href="<?php echo $secondLink['url']; ?>">
                            <?php $secondImage = get_field('second_design_image'); ?>
                            <?php if ($secondImage) : ?>
                                <div class="portf_image_holder">
                                    <img class="portf_image" src="<?php echo $secondImage['sizes']['large']; ?>" />
                                </div>
                            <?php endif; ?>
                            <h3>
                                <?php the_field('second_design_text'); ?>
                            </h3>
                        </a>
                    </div>
                    <div class="portf_item">
                        <?php $thirdLink = get_field('third_design_link'); ?>
                        <a target="<?php echo $thirdLink['target']; ?>" href="<?php echo $thirdLink['url']; ?>">
                            <?php $thirdImage = get_field('third_design_image'); ?>
                            <?php if ($thirdImage) : ?>
                                <div class="portf_image_holder">
                                    <img class="portf_image" src="<?php echo $thirdImage['sizes']['large']; ?>" />
                                </div>
                            <?php endif; ?>
                            <h3>
                                <?php the_field('third_design_text'); ?>
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="ddown" src="<?php bloginfo('template_url'); ?>/assets/img/ddown.svg" alt="editdesignstudio">
</section>