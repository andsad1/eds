<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_text text">
                    <?php the_field('footer_text', 'options'); ?>
                    <div class="footer_social">
                        <a rel="noreferrer" target="_blank" href="<?php the_field('facebook_link', 'options'); ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('instagram_link', 'options'); ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('linked_in_link', 'options'); ?>">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('pinterest_link', 'options'); ?>">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('houzz_link', 'options'); ?>">
                            <i class="fab fa-houzz"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>