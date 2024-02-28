<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>


<section class="top-bar fixed left-0  w-full z-[444] duration-1000 transition-all ">

    <div class="w-full xl:pr-5 2xl:pr-[43px] flex items-stretch justify-between h-[60px] lg:h-[128px]">

        <div class="max-xl:pl-5 lg:pl-[28px]  xl:min-w-[180px] 2xl:min-w-[240px] flex  items-center xl:opacity-0">
            <a href="<?php echo get_home_url() ?>"> <img class="w-[43px] min-w-[43px] lg:w-[55px] " src="<?php echo $theme_dir ?>/dist/Logo_128px_GrafikOnlinePL_v2.gif" alt="GrafikOnline logotyp"></a>
        </div>

        <div class="w-full text-[16px] text-light flex items-center justify-center xl:hidden">
            <p class=" relative inline-block pr-3 font-medium">GrafikOnline <span class="absolute right-0 -top-2 inline-block text-[8px] uppercase">
                    pl</span></p>
        </div>

        <div class="border-[2px] border-dark w-[60px] lg:w-[110px] border-b-[0px] flex flex-none items-center justify-center xl:hidden">
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>

        <!-- desktop -->
        <div class="desktop-menu on-scroll-initial hidden xl:flex items-center lg:w-6/12 xl:w-7/12 2xl:w-6/12 lg:pl-16 xl:pl-0 translate-y-0 transition-all">
            <ul class="w-full flex lg:gap-[8px] xl:gap-[38px] 2xl:gap-[68px] h-full items-center">

                <li class="relative fluid-text-base has-submenu group "><a href="<?php echo get_home_url() ?>" class="cursor-pointer transition-all relative top-0 group-hover:-top-1 ">Studio</a>
                    <ul class="submenu overflow-hidden transition-all absolute bottom-0  translate-y-[100%] hidden group-hover:flex group-hover:opacity-100 ">
                        <li class="child group/child"><a href="<?php echo get_home_url('', 'o-firmie') ?>">O
                                firmie <svg class="relative -left-3 opacity-0 transition-all group-hover/child:opacity-100 group-hover/child:left-0" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg></a></li>
                        <li class="child group/child"><a href="<?php echo get_home_url('', 'kontakt') ?>">Kontakt <svg class="relative -left-3 opacity-0 transition-all group-hover/child:opacity-100 group-hover/child:left-0" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg></a></li>
                        <!-- <li class="child"><a href="#">Aktualności</a></li> -->
                        <!-- <li class="child"><a href="#">Kariera</a></li> -->
                    </ul>
                </li>

                <li class="fluid-text-base group"><a class="transition-all relative top-0 group-hover:-top-1 " href="<?php echo get_home_url('', 'projektowanie-logo') ?>">Projekt
                        Logo</a></li>
                <li class="fluid-text-base group"><a class="transition-all relative top-0 group-hover:-top-1 " href="<?php echo get_home_url('', 'projekty-reklamowe') ?>">Projekty
                        Reklamowe</a></li>
                <li class="fluid-text-base group"><a class="transition-all relative top-0 group-hover:-top-1 " href="<?php echo get_home_url('', 'strony-internetowe') ?>">Strony
                        Internetowe</a></li>
            </ul>
        </div>

        <div class="hidden xl:flex items-center justify-end gap-[24px] xl:gap-[10px] 2xl:gap-[24px] lg:w-6/12 xl:w-5/12 translate-y-0 transition-all desktop-menu__right">

            <!-- switcher -->
            <div class="flex items-center gap-[19px] ">
                <div class="mode-switcher"><input type="checkbox" id="toggle">
                    <label id="switch" for="toggle">
                        <div id="circle"></div>
                    </label>
                </div>
            </div>

            <!-- switcher -->

            <!-- TODO: animacje svg -->
            <a href=" #" class="btn btn--dark btn--pricing__animation pricing__trigger">
                <span>Cennik</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none" stroke="#f9f2e5" stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line class="line__transform" id="Line_9" data-name="Line 9" x2="11" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                    </g>
                </svg>

            </a>

            <a href="<?php echo get_home_url('', 'kontakt') ?>" class="btn btn--red whitespace-nowrap">
                <span>Zamów projekt</span>

                <svg width="14.819" height="14.819" viewBox="0 0 14.819 14.819">
                    <g id="Edit_Icon" transform="translate(-779.261 -1011.304)">
                        <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(787.786 1024.145)" fill="white" stroke="#f9f2e5" stroke-width="1.5" />
                        <g id="Path_316" data-name="Path 316" transform="translate(790.623 1011.304) rotate(45)" fill="none">
                            <path d="M0,0H4.889V12.223l-2.4,3.845L0,12.223Z" stroke="none" />
                            <path d="M 1.499998092651367 1.499997138977051 L 1.499998092651367 11.77978992462158 L 2.467294692993164 13.27259922027588 L 3.389317989349365 11.7939338684082 L 3.389317989349365 1.499997138977051 L 1.499998092651367 1.499997138977051 M -1.9073486328125e-06 -1.9073486328125e-06 L 4.889317989349365 -1.9073486328125e-06 L 4.889317989349365 12.22328758239746 L 2.491608142852783 16.06853675842285 L -1.9073486328125e-06 12.22328758239746 L -1.9073486328125e-06 -1.9073486328125e-06 Z" stroke="none" fill="#fff" />
                        </g>
                    </g>
                </svg>

            </a>


        </div>
    </div>

    <?php get_template_part('partials/global/notification-slider'); ?>
</section>