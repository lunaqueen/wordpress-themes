<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="header-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header_menu', // 使用在 functions.php 中注册的菜单位置
            'menu_id'        => 'header-menu', // 菜单容器的 ID
            'menu_class'     => 'header-menu', // 菜单容器的类名
            'container'      => 'div',         // 包裹菜单的 HTML 标签
            'container_class'=> 'menu-container', // 包裹菜单的类名
            'fallback_cb'    => false,         // 如果没有菜单则不显示
        ));
        ?>
    </nav>
</header>
