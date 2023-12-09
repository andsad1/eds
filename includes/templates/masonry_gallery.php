<div class="masonry-gallery">
    <?php while (have_rows('gallery')) : the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
        <?php if ($image) : ?>
            <a class="masonry-gallery__image" href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                <img class="lazy" src="<?php echo $image['sizes']['medium']; ?>" data-src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
            </a>
        <?php endif; ?>
    <?php endwhile; ?>
</div>