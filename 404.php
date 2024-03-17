<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grafikonline
 */
$theme_dir = get_theme_file_uri();
get_header(); ?>

<section class="aside-offset__margin">

    <h1 class="fluid-text-5xl">
        Upss... Podana strona </br><span class="text-red">nie istnieje</span>
    </h1>

    <div
        class="flex flex-col md:flex-row items-center justify-center lg:justify-between  w-full 2xl:container mt-[24px] md:mt-[117px] lg:mt-[153px]">
        <div
            class="flex md:flex-row-reverse  items-center justify-center md:justify-end gap-[10px] lg:gap-[28px] w-full lg:w-5/12 ">
        </div>

    </div>
</section>



<?php get_footer() ?>