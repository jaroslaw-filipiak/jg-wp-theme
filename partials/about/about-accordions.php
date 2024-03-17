<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="accordions pt-[36px] lg:pt-[114px]">
    <div class="aside-offset__margin">
        <!-- label -->
        <div class="flex flex-col items-start justify-between grid__label xl:pb-[72px]">
            <div class="flex items-center gap-[24px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                    <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                        transform="translate(0 8) rotate(-90)" fill="#777777" />
                </svg>
                <p class="text-[14px]  text-gray uppercase font-medium ">Nasze wartości</p>
            </div>
        </div>
        <!-- label -->
        <div class="accordion-container accordion-container__about">

            <?php if( have_rows('about_accordions') ): ?>

            <?php while( have_rows('about_accordions') ): the_row(); 
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                ?>

            <!-- accordion  -->
            <div class="ac js-enabled" id="ac-0">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger group " id="ac-trigger-0" role="button"
                        aria-controls="ac-panel-0" aria-disabled="false" aria-expanded="false">
                        <span class="max-lg:w-10/12 flex"><?php echo $title ?></span>
                    </button>
                </h2>
                <div class="ac-panel" id="ac-panel-0" role="region" aria-labelledby="ac-trigger-0"
                    style="transition-duration: 130ms; height: 0px;">
                    <p class="ac-text fluid-text-lg lg:text-[16px]">
                        <img loading="lazy" class="mt-[16px] mb-[16px] lg:mb-[36px] w-3 "
                            src="<?php echo get_template_directory_uri() ?>/dist/icons/arrow_down_right.svg"
                            role="presentation">
                        <?php echo $content ?>
                    </p>
                </div>
            </div>
            <!-- accordion  -->

            <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </div>

</section>