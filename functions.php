<?php

function outlive_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'outlive'),
    ));

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'outlive_theme_setup');