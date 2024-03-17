<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="aside-offset__margin pt-[38px] lg:pt-[59px]">
    <h1 class="fluid-text-5xl "> <span class="text-red"><?php the_field( 'about_heading' ); ?>
    </h1>

    <div
        class="flex flex-col md:flex-row items-center md:items-end justify-center lg:justify-between  w-full  2xl:container  md:mt-[117px] lg:mt-[130px]">
        <div class="flex items-center justify-start  gap-[10px] lg:gap-[28px]   w-full lg:w-5/12">
            <div class="pt-[38px] md:pt-0">
                <div class="flex items-center gap-[24px] pb-[20px] lg:pb-[37px] ">
                    <svg class="fill-gray" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                            transform="translate(0 8) rotate(-90)"></path>
                    </svg>
                    <p class="text-[14px] text-gray uppercase font-medium "><?php the_field( 'about_label' ); ?></p>

                </div>
                <div>
                    <div>
                        <p class="text-[14px] lg:fluid-text-base max-w-[580px]"><?php the_field( 'about_content' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- narzedzia i technologia -->
        <div class=" flex items-center justify-center lg:justify-between
         w-full lg:w-7/12 mt-[70px] md:mt-0 max-w-[680px]">

            <p class="text-[14px] dark:text-gray text-lightmode_9f hidden xl:flex text-nowrap xl:pr-[62px]">
                <?php the_field( 'about_technologies_title' ); ?>
            </p>

            <?php 
            $images = get_field('about_technologies_icons');
            
            if( $images ): ?>

            <ul class="flex items-center justify-between w-full gap-3 sm:gap-4 lg:gap-6">
                <?php foreach( $images as $image ): ?>

                <li><img class="max-lg:w-[14px]" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>">
                </li>

                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="aside-offset__margin ">
    <div class="divider-with-text flex items-center mt-8 lg:mt-20 xl:mt-[85px]">
        <p class="text-[14px] text-gray min-w-[90px] flex lg:hidden">Zjedź niżej </p>
        <p class="text-[14px] text-gray hidden lg:flex w-[190px]">Zjedź niżej po więcej </p>
        <div class="border-[1px] dark:border-dark border-lightmode_ef w-full"></div>
        <div class="pl-6">
            <svg width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                    transform="translate(0 7.496) rotate(-45)" fill="#777"></path>
            </svg>
        </div>
    </div>
</section>