<?php include('includes/components/cookie.php'); ?>
<?php wp_footer(); ?>
<footer class="gray_background">
    <div class="container-fluid footer_container">
        <div class="row">
            <div class="col-12">
                <div class="footer_text text">
                    <?php the_field('footer_text', 'options'); ?>
                    <div class="footer_social">
                        <a rel="noreferrer" target="_blank" href="<?php the_field('facebook_link', 'options'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook">
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('instagram_link', 'options'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram">

                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('linked_in_link', 'options'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.svg" alt="linkedin">
                        </a>
                        <a rel="noreferrer" target="_blank" href="<?php the_field('pinterest_link', 'options'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/pinterest.svg" alt="pinterest">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $cookieButton = get_field('cookie_policy_link', 'options'); ?>
    <?php $privacyButton = get_field('privacy_policy_link', 'options'); ?>
    <?php if ($cookieButton || $privacyButton) : ?>
        <div class="bottom_privacy">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="privacy_holder">
                            <?php if ($cookieButton) : ?>
                                <a target="<?php echo $cookieButton['target']; ?>" href="<?php echo $cookieButton['url']; ?>"><?php echo $cookieButton['title']; ?></a>
                            <?php endif; ?>
                            <?php if ($privacyButton) : ?>
                                <a target="<?php echo $privacyButton['target']; ?>" href="<?php echo $privacyButton['url']; ?>"><?php echo $privacyButton['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</footer>
</body>

</html>