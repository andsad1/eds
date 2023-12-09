<div class="fixed-gallery">
    <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
        <?php $image = get_field('image'); ?>
        <?php $ratio = ($image['width'] / $image['height']); ?>
        <?php $imageClass = $ratio <= 1 ? 'vertical' : 'horizontal'; ?>
        <?php if ($image) : ?>
            <a class="fixed-gallery__image <?php echo $imageClass; ?>" href="<?php the_permalink(); ?>">
                <img class="lazy" src="<?php echo $image['sizes']['medium']; ?>" data-src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
            </a>
        <?php endif; ?>
    <?php endwhile; ?>
</div>