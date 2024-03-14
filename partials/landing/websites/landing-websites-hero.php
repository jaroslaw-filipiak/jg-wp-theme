<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="aside-offset__margin pt-[38px]  landing-hero lg:pt-[90px] max-w-full">

    <!-- video / photo -->
    <div class="landing-hero__photo hidden lg:flex">
        <video autoplay loop muted src="<?php echo $theme_dir ?>/dist/9c24d3d90b25e674624df75dabf4bed8.mp4"></video>
    </div>

    <!-- label -->
    <div class="mb-[20px] lg:mb-0 landing-hero__label flex items-end">
        <div class="flex items-center gap-[24px] h-[22px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-red lg:fill-gray" width="8" height="8"
                viewBox="0 0 8 8">
                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                    transform="translate(0 8) rotate(-90)"></path>
            </svg>
            <p class="text-[14px] text-red lg:text-gray uppercase font-medium ">Logo design</p>
        </div>
    </div>

    <!-- title -->
    <h1 class="fluid-text-4xl mb-[24px] lg:mb-0 landing-hero__title">Potrzebujesz Projektu <br />Strony lub Sklepu
        Internetowego?
    </h1>

    <!-- subtitle -->
    <div class="landing-hero__subtitle">
        <p class="dark:text-light text-lightmode_texttext-[14px] lg:text-[16px] xl:max-w-[708px]">
            Dzięki nam Twoja marka stanie się rozpoznawalna i zacznie budzić konkretne, oczekiwane skojarzenia u
            odbiorców.</p>
    </div>


    <!-- buttons -->
    <div
        class="flex flex-col md:flex-row items-center justify-center lg:justify-between  w-full 2xl:container mt-[24px] lg:mt-0  landing-hero__buttons">



        <div class="flex items-center justify-center md:justify-start gap-[10px] lg:gap-[28px]   w-full lg:w-5/12">
            <a href="#" class="btn btn--dark max-md:w-full whitespace-nowrap">
                <span>Opis</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none"
                            stroke="#f9f2e5" stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)" fill="none"
                            stroke="#f9f2e5" stroke-width="1.5" />
                    </g>
                </svg>

            </a>

            <a href="#" class="btn btn--dark max-md:w-full whitespace-nowrap max-lg:hidden">
                <span>Cennik</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none"
                            stroke="#f9f2e5" stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)" fill="none"
                            stroke="#f9f2e5" stroke-width="1.5" />
                    </g>
                </svg>

            </a>

            <a href="#" class="btn btn--red max-md:w-full whitespace-nowrap">
                <span>Zamów projekt</span>

                <svg width="14.819" height="14.819" viewBox="0 0 14.819 14.819">
                    <g id="Edit_Icon" transform="translate(-779.261 -1011.304)">
                        <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(787.786 1024.145)"
                            fill="white" stroke="#f9f2e5" stroke-width="1.5" />
                        <g id="Path_316" data-name="Path 316" transform="translate(790.623 1011.304) rotate(45)"
                            fill="none">
                            <path d="M0,0H4.889V12.223l-2.4,3.845L0,12.223Z" stroke="none" />
                            <path
                                d="M 1.499998092651367 1.499997138977051 L 1.499998092651367 11.77978992462158 L 2.467294692993164 13.27259922027588 L 3.389317989349365 11.7939338684082 L 3.389317989349365 1.499997138977051 L 1.499998092651367 1.499997138977051 M -1.9073486328125e-06 -1.9073486328125e-06 L 4.889317989349365 -1.9073486328125e-06 L 4.889317989349365 12.22328758239746 L 2.491608142852783 16.06853675842285 L -1.9073486328125e-06 12.22328758239746 L -1.9073486328125e-06 -1.9073486328125e-06 Z"
                                stroke="none" fill="#fff" />
                        </g>
                    </g>
                </svg>

            </a>
        </div>

    </div>

</section>

<section class="aside-offset__margin 2xl:-mt-[100px]">
    <div class="divider-with-text flex items-center mt-8 ">
        <p class="text-[14px] text-gray min-w-[90px] flex lg:hidden">Zjedź niżej </p>
        <p class="text-[14px] text-gray hidden lg:flex w-[190px]">Zjedź niżej po więcej </p>
        <div class="border-[1px] dark:border-dark border-lightmode_ef w-full"></div>
        <div class="pl-6">
            <img class="lg:min-w-[14px]" src="arrow-down.svg" alt="">
        </div>
    </div>
</section>