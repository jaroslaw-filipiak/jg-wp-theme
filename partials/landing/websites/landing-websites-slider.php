<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<!-- after hero slider -->
<section class="slider-row mt-8 lg:mt-11 pl-5 lg:pl-0 pr-5 lg:pr-0 ">
    <div class="slider-row__swiperWebsitesPortfolio w-full overflow-hidden mb-5 relative">
        <div
            class="portfolio__desktop-nav hidden lg:flex aside-offset__margin absolute left-0 top-1 w-full h-full  items-center justify-end">

            <!-- <button class="w-[120px] h-[120px] dark:bg-dark bg-lightmode_ef rounded-full flex items-center justify-center z-20 relative left-[60px] group hover:bg-red hover:shadow-2xl swiper--portfolio--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993" class="-rotate-90 fill-light relative left-0 transition-all group-hover:left-2">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                </svg>

            </button> -->
            <button
                class="w-[120px] h-[120px] dark:bg-dark bg-lightmode_ef rounded-full flex items-center justify-center z-20 relative left-[60px] group hover:bg-red hover:shadow-2xl swiper--portfolio--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993"
                    class="-rotate-90 dark:fill-light fill-darkMain relative left-0 group-hover:fill-light transition-all group-hover:left-2">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                        transform="translate(0 7.496) rotate(-45)" />
                </svg>
            </button>
        </div>
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper relative -top-6 pt-6" style="transition-timing-function: linear;">
            <!-- Slides -->
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg group/slide 2xl:pb-[37.374%]">
                <div class="swiper-slide__top" style="background-image:url('temp/1.webp')"></div>
                <div class="swiper-slide__bottom" style="background-image:url('temp/2.webp')"></div>
                <!-- icon -->
                <div class="swiper-slide__fullscreen-icon group/icon "><svg xmlns="http://www.w3.org/2000/svg"
                        width="14.08" height="14.08" viewBox="0 0 14.08 14.08"
                        class="scale-[100%] group/icon:hover:scale-[100%]">
                        <path id="Fullscreen_Icon"
                            d="M120-825.92v-3.911h1.564v2.347h2.347v1.564Zm10.169,0v-1.564h2.347v-2.347h1.564v3.911ZM120-836.089V-840h3.911v1.564h-2.347v2.347Zm12.516,0v-2.347h-2.347V-840h3.911v3.911Z"
                            transform="translate(-120 840)" fill="#f9f2e5" />
                    </svg>
                    <!-- icon -->
                </div>
            </div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>
            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg 2xl:pb-[37.374%]"></div>

        </div>
        <div class="swiper-scrollbar lg:hidden" style="width: 90%; left: 5%"></div>
    </div>
</section>