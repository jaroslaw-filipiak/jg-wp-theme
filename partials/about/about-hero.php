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
    <h1 class="fluid-text-5xl "> <span class="text-red">Tworzymy, wdrażamy,</span> wspieramy.
    </h1>

    <div class="flex flex-col md:flex-row items-center md:items-end justify-center lg:justify-between  w-full  2xl:container  md:mt-[117px] lg:mt-[130px]">
        <div class="flex items-center justify-start  gap-[10px] lg:gap-[28px]   w-full lg:w-5/12">
            <div class="pt-[38px] md:pt-0">
                <div class="flex items-center gap-[24px] pb-[20px] lg:pb-[37px] ">
                    <svg class="fill-gray" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z" transform="translate(0 8) rotate(-90)"></path>
                    </svg>
                    <p class="text-[14px] text-gray uppercase font-medium ">Co robimy</p>

                </div>
                <div>
                    <div>
                        <p class="text-[14px] lg:fluid-text-base max-w-[580px]">Od 2017 roku projektujemy praktyczne
                            rozwiązania, wspierając
                            firmy w całym kraju. Jako studio projektowe tworzymy funkcjonalny design, który pozwala na
                            rozwój
                            oraz budowę stabilnej marki.
                        </p>


                    </div>


                </div>

            </div>
        </div>

        <div class=" flex items-center justify-center md:justify-between
         w-full lg:w-7/12 mt-[32px] md:mt-0  max-w-[680px]">

            <p class="text-[14px] text-gray hidden xl:flex text-nowrap xl:pr-[62px]">Narzędzia i technologia:</p>
            <ul class="flex items-center justify-between w-full gap-3 sm:gap-4 lg:gap-6">
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/ps.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/ai.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/id.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/ae.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/xd.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/blender.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/hotjar.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/meet.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/drive.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/gmail.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/wordpress.svg" alt=""></li>
                <li><img class="max-lg:w-[14px]" src="<?php echo $theme_dir ?>/dist/icons/gpt.svg" alt=""></li>
            </ul>
        </div>
    </div>
</section>

<section class="aside-offset__margin ">
    <div class="divider-with-text flex items-center mt-8 lg:mt-20 xl:mt-[85px]">
        <p class="text-[14px] text-gray min-w-[90px] flex lg:hidden">Zjedź niżej </p>
        <p class="text-[14px] text-gray hidden lg:flex w-[190px]">Zjedź niżej po więcej </p>
        <div class="border-[1px] dark:border-dark border-lightmode_ef w-full"></div>
        <div class="pl-6">
            <img class="lg:min-w-[14px]" src="arrow-down.svg" alt="">
        </div>
    </div>
</section>