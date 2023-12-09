<div class="design_slider">
    <?php while (have_rows('gallery')) : the_row(); ?>
        <?php $img = get_sub_field('image'); ?>
        <div class="design_slide">
            <div class="design_slider_holder">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $img['sizes']['big']; ?>" alt="<?php echo $img['title']; ?>">
                </a>
                <div class="design_slide_text">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_field('sub_title'); ?></h4>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>