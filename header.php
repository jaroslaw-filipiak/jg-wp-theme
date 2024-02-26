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

    <!-- global styles -->
    <link rel="stylesheet" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/swiper-bundle.css">

    <!-- global scripts -->
    <script type="module" crossorigin src="<?php echo get_theme_file_uri() ?>/dist/js/main.js"></script>

    <!-- polyfills for pricing -->
    <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/modulepreload-polyfill.js">

    <!-- front page -->
    <?php if (is_front_page() || is_home()) : ?>

        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/swiper-bundle.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/accordion.min.js">
        <link rel="modulepreload" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/js/clamp.js">
        <link rel="stylesheet" crossorigin href="<?php echo get_theme_file_uri() ?>/dist/swiper-bundle.css">
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

    <section class="content dark:text-light flex items-start justify-start relative <?php echo  is_front_page() ? 'pt-[50px]' : 'pt-[60px] lg:pt-[128px]' ?> ">

        <aside class="z-[999] xl:w-[180px] 2xl:w-[240px] h-screen hidden xl:fixed top-0 left-0 pl-5 lg:pl-[28px] xl:flex xl:flex-col xl:justify-between  pb-[40px] aside pt-[140px]">

            <!-- aside top -->
            <div>

                <div class="relative -top-[102px]">
                    <div class="xl:min-w-[180px] 2xl:min-w-[240px] flex  items-center ">
                        <a href="<?php echo get_home_url() ?>"> <img class="w-[43px] min-w-[43px] lg:w-[55px]" src="<?php echo $theme_dir ?>/dist/Logo_128px_GrafikOnlinePL_v2.gif" alt="GrafikOnline logotyp"></a>
                    </div>
                </div>

                <div class="w-full text-[16px] text-light flex items-center">
                    <p class=" relative inline-block pr-3 font-medium">GrafikOnline <span class="absolute right-0 -top-2 inline-block text-[8px] uppercase">
                            pl</span></p>
                </div>

                <div class="flex flex-col gap-[13px] mt-[30px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z" transform="translate(0 8) rotate(-90)" fill="#ef4123" />
                    </svg>
                    <p class="text-gray text-[14px]">Internetowe <br /> Studio Projektowe</p>

                </div>
            </div>

            <!-- aside bottom  -->
            <div>
                <p class="text-gray text-[14px]">All Right Reserved <br /> © 2017 - 2024</p>
            </div>


        </aside>

        <!-- pt161 on homepage only if dont have breadcrumbs section  -->
        <main class="<?php echo $is_home ? 'pt-[93px] lg:pt-[171px] z-50 w-full max-w-[100vw] overflow-hidden' : 'z-50 w-full main-has-breadcrumbs' ?>">