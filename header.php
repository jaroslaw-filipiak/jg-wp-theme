<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();
$is_home = is_front_page() || is_home();

?>
<!doctype html>
<html <?php language_attributes(); ?> class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/svg+xml" href="<?php echo $theme_dir ?>/logo.svg" />

    <!-- global styles -->
    <link rel="stylesheet" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/swiper-bundle.css">

    <!-- pricing -->
    <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/modulepreload-polyfill.js">

    <!-- front page -->
    <?php if (is_front_page() || is_home()) : ?>
        <script type="module" crossorigin src="<?php echo get_theme_file_uri() ?>/dist/js/main.js"></script>

        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/swiper-bundle.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/accordion.min.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/clamp.js">

    <?php endif; ?>

    <!-- about page template -->
    <?php if (is_page_template('page-templates/about.php')) : ?>
        <script type="module" crossorigin src="<?php echo get_theme_file_uri() ?>/dist/js/about.js"></script>

        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/modulepreload-polyfill.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/swiper-bundle.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/accordion.min.js">

    <?php endif; ?>

    <!--  contact page template -->
    <?php if (is_page_template('page-templates/contact.php')) : ?>
        <script type="module" crossorigin src="<?php echo get_theme_file_uri() ?>/dist/js/contact.js"></script>

        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/modulepreload-polyfill.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/swiper-bundle.js">
    <?php endif; ?>

    <!--  landings -->
    <?php if (is_page_template('page-templates/landing-websites.php') || is_page_template('page-templates/landing-projects.php') || is_page_template('page-templates/landing-logo.php')) : ?>
        <script type="module" crossorigin src="<?php echo get_theme_file_uri() ?>/dist/js/websites.js"></script>

        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/pricing-module.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/global-module.js">
        <link rel="stylesheet" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/global-module.css">
    <?php endif; ?>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <header>
        <!-- top bar fixed h60px mobile -->
        <?php get_template_part('partials/global/topbar'); ?>

        <!-- sidemenu -->
        <?php get_template_part('partials/global/sidemenu'); ?>

    </header>

    <section class="content dark:text-light flex items-start justify-start relative <?php echo $is_home ? 'pt-[50px]' : 'pt-[60px] lg:pt-[128px]' ?> ">

        <!-- aside -->
        <?php get_template_part('partials/global/aside'); ?>

        <!-- pt conditionally -->
        <main class="<?php echo $is_home ? 'pt-[93px] lg:pt-[171px] z-50 w-full max-w-[100vw] overflow-hidden' : 'z-50 w-full main-not-homepage' ?>">

            <!-- breadcrumbs -->
            <?php $is_home ? null : get_template_part('partials/global/breadcrumbs'); ?>