<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Andrius Sadauskas">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--    Social sharing    -->
    <meta property="og:title" content="<?php is_front_page() ? bloginfo('name') : wp_title(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="desktop_header" class="container-fluid">
        <div class="header_holder row">
            <div class="logo_holder">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="editdesignstudio logo">
                </a>
            </div>
            <div class="header_inner_row">
                <div id="menu_burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="header_navigation">
                    <div class="close_header">
                        &#9587;
                    </div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Main Menu',
                    )); ?>
                </nav>
            </div>
        </div>
    </header>