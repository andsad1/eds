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