<?php if (have_rows('clients')) : ?>
    <div class="clients_slider">
        <?php while (have_rows('clients')) : the_row(); ?>
            <div class="clients_slide">
                <?php $image = get_sub_field('client_image'); ?>
                <?php if ($image) : ?>
                    <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['title']; ?>">
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>