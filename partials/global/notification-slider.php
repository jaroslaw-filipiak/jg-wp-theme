<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<div class="notificaton-slider w-full lg:hidden">
    <div class="swiper--notification w-screen ">
        <div class="swiper-wrapper" style="transition-timing-function: linear;">

            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="swiper-slide">
                    <div class="flex items-center justify-start gap-7">
                        <svg width="8" height="8" viewBox="0 0 8 8">
                            <path class="fill-gray" id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z" transform="translate(0 8) rotate(-90)" />
                        </svg>
                        <div>Internetowe Studio Projektowe</div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>