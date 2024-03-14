<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<aside
    class="z-[999] xl:w-[180px] 2xl:w-[240px] h-screen hidden xl:fixed top-0 left-0 pl-5 lg:pl-[28px] xl:flex xl:flex-col xl:justify-between  pb-[40px] aside pt-[140px]">

    <!-- aside top -->
    <div>

        <div class="relative -top-[102px]">
            <div class="xl:min-w-[180px] 2xl:min-w-[240px] flex items-center ">
                <a href="<?php echo get_home_url() ?>"> <img class="w-[43px] min-w-[43px] lg:w-[55px]"
                        src="<?php echo $theme_dir ?>/dist/Logo_128px_GrafikOnlinePL_v2.gif"
                        alt="GrafikOnline logotyp"></a>
            </div>
        </div>

        <div class="w-full text-[16px] dark:dark:text-light text-lightmode_text flex items-center">
            <p class="relative inline-block pr-3 font-medium">GrafikOnline <span
                    class="absolute right-0 -top-2 inline-block text-[8px] uppercase">
                    pl</span></p>
        </div>

        <div class="flex flex-col gap-[13px] mt-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                    transform="translate(0 8) rotate(-90)" fill="#ef4123" />
            </svg>
            <p class="dark:text-gray text-lightmode_9f text-[14px]">
                Internetowe <br />
                Studio Projektowe
            </p>
        </div>
    </div>

    <!-- aside bottom  -->
    <div>
        <p class="dark:text-gray text-lightmode_9f text-[14px]">All Right Reserved <br /> © 2017 -
            <?php echo get_the_date('Y') ?></p>
    </div>


</aside>