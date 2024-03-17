<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="aside-offset__margin">
    <div class="breadcrumbs">

        <?php // the_breadcrumb() ?>
        <ul>
            <li><a href="<?php echo get_home_url() ?>">Studio</a></li>
            <li> <svg
                    class="hidden xl:flex dark:fill-light dark:stroke-light group-hover:left-[5px] relative left-0 transition-all"
                    xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897" viewBox="0 0 5.305 8.897">
                    <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                        transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5" />
                </svg></li>
            <li class="breadcrumb__last">
                <a href="#"><?php echo get_the_title() ?></a>
            </li>
        </ul>
    </div>
</section>