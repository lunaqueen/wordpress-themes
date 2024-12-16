<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/seasonal_effects.js"></script>
</head>
<body>
    <header>
        <nav>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_id' => 'header-menu',
                    'container' => 'ul'
                ));
            ?>
        </nav>
    </header>
