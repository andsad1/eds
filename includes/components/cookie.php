<?php if (!$_COOKIE['asfhffdkgLrFASf']) : ?>
    <div id="cookie">
        <div class="row cookie_row">
            <div class="col-12 col-md-9 cookies-text">
                <?php the_field('cookies_pop_up_text', 'option'); ?>
            </div>
            <div class="col-12 col-md-3 cookie_button_holder">
                <button class="close-cookies">
                    <?php the_field('pop_up_button_text', 'option'); ?>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>