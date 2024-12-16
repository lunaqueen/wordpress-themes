<?php
function my_custom_theme_setup() {
    // 注册菜单
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'my-custom-theme'),
    ));

    // 添加主题支持
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_custom_theme_setup');

// 加载资源文件
function my_custom_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('seasonal-effects', get_template_directory_uri() . '/js/seasonal_effects.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
