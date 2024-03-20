<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="container">
        <nav>
            <ul>
                <li>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </li>
            </ul>
            <ul>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-principal',
                    'container'      => 'li',
                    'container_class'=> 'menu-container',
                    'menu_class'     => 'menu-items',
                ) );
                ?>
            </ul>
        </nav>
    </header>