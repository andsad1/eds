<div class="fixed-gallery">
    <?php while (have_rows('gallery')) : the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
        <?php $ratio = ($image['width'] / $image['height']); ?>
        <?php $imageClass = $ratio <= 1 ? 'vertical' : 'horizontal'; ?>
        <?php if ($image) : ?>
            <a class="fixed-gallery__image <?php echo $imageClass; ?>" href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                <img class="lazy" src="<?php echo $image['sizes']['medium']; ?>" data-src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
            </a>
        <?php endif; ?>
    <?php endwhile; ?>
</div>