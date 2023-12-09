<?php if (have_rows('main_images')) : ?>
    <section class="container-fluid hero_section">
        <div class="hero_slider">
            <?php while (have_rows('main_images')) : the_row(); ?>
                <?php $mainImage = get_sub_field('image'); ?>
                <?php if ($mainImage) : ?>
                    <div class="hero_slide">
                        <img class="hero_img lazy" src="<?php echo $mainImage['sizes']['medium']; ?>" data-src="<?php echo $mainImage['sizes']['very_big']; ?>" alt="edit design studio">
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>