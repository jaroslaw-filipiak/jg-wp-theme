<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>


<section id="side-menu" class="side-menu hidden xl:hidden">
    <div class="flex items-center justify-between ">
        <div class="dark:text-gray text-[12px]">Motyw Ciemny</div>
        <div class="mode-switcher"><input type="checkbox" id="toggle2">
            <label id="switch" for="toggle2">
                <div id="circle"></div>
            </label>
        </div>
    </div>

    <div class="flex flex-col gap-0">
        <ul class="mt-[66px]">
            <li class="parent dark:text-light text-[18px]">
                Studio
            </li>

            <div class="submenu h-0 overflow-hidden transition-all ">
                <li class="child"><a href="<?php echo get_home_url('', 'o-firmie') ?>">O firmie</a></li>
                <li class="child"><a href="<?php echo get_home_url('', 'kontakt') ?>">Kontakt</a></li>
                <!-- <li class=" child">Aktualności</li>
                <li class="child">Kariera</li> -->
            </div>
        </ul>

        <ul>
            <li class="parent dark:text-light text-[18px]">
                <a href="<?php echo get_home_url('', 'projektowanie-logo') ?>">Projekt logo</a>
            </li>
        </ul>

        <ul>
            <li class="parent dark:text-light text-[18px]">
                <a href="<?php echo get_home_url('', 'projekty-reklamowe') ?>">Projekty reklamowe</a>
            </li>
        </ul>

        <ul>
            <li class="parent dark:text-light text-[18px]">
                <a href="<?php echo get_home_url('', 'strony-internetowe') ?>">Strony internetowe</a>
            </li>
        </ul>

    </div>
</section>