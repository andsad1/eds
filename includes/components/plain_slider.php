<?php if (have_rows('gallery')) : ?>
<div class="journal_slider">
    <?php while (have_rows('gallery')) : the_row(); ?>
        <?php $img = get_sub_field('image'); ?>
        <img class="lazy" src="<?php echo $img['sizes']['medium']; ?>" data-src="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['title']; ?>">
    <?php endwhile; ?>
</div>
<?php endif; ?>