<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<!-- pricing -->
<section id="pricing" class="relative">
    <!-- TODO: icons -->
    <div class="pricing__wrapper max-w-full">
        <div class="pricing__content relative">
            <div class="pricing__top dark:text-light text-lightmode_text flex flex-col items-center bg-dark pt-4 pb-4 pl-5 pr-5 lg:pl-10 lg:pr-10">
                <div class="pricing__info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M12 9h.01" />
                        <path d="M11 12h1v4h1" />
                    </svg>
                </div>

                <div class="pricing__top-txt text-[14px] pb-2 pt-2 lg:pl-4 text-left sm:text-center">
                    <p>Sprawdź ceny naszych usług, a następnie dodaj wybrane do swojego
                        zamówienia.</p>
                </div>

                <div class="pricing__close-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 6l-12 12" />
                        <path d="M6 6l12 12" />
                    </svg></div>
            </div>
            <div class="pricing__search bg-darkMain lg:pl-10 lg:pr-10">
                <input class="w-full placeholder-gray placeholder:text-[14px] text-[14px] text-center lg:text-left placeholder:text-center lg:placeholder:text-start lg:pl-6 pt-[14px] pb-[14px] bg-dark dark:lg:bg-dark3 lg:bg-lightmode_f9 rounded-[8px] dark:border-dark border-lightmode_ef border-[2px] pricing__searchbox" type="text" placeholder="Filtruj po nazwie">
            </div>
            <!-- loop -->
            <!-- TODO: szczególy usługi toggle zwiń -->
            <div class="pricing__items relative lg:pb-[100px]">
                <!-- item if no results -->

                <div class="no-results no-results__hidden" data-selected="false">
                    <span class="dark:text-light text-lightmode_texttext-[16px] lg:text-[20px] flex">Nie znaleziono...</span>
                </div>
                <!-- item -->

            </div>

            <!-- footer absolute in pricing content -->
            <div class="pricing__footer hidden bg-dark  items-center justify-between pt-4 pb-4 pl-7 pr-7  lg:absolute lg:left-0 lg:bottom-0 lg:w-full">
                <div class="flex items-center  gap-7 pl-3">
                    <p class="text-[14px] text-dark2">Twoje zamówienie</p>
                    <p class="text-[20px] dark:text-light text-lightmode_textpricing__count"><span class="val"></span> PLN <span class="inline-block pl-1 text-[12px] text-dark2">netto</span></p>
                </div>
                <a class="bg-light rounded-full pl-7 pr-7 xl:pl-[17px] xl:pr-[27px] pt-[13px] pb-[13px] 2xl:pl-[37px] 2xl:pr-[33px hover:bg-red transition-all group xl:mr-[35px]" href="#
 ">
                    <div class="text-[#1E1E1E] group-hover:dark:text-light text-lightmode_texttransition-all flex items-center  justify-center  gap-6 text-[16px] font-medium  ]">
                        Zamów
                        <div>
                            <svg class="-rotate-90 w-[11px]" xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                                <path class="fill-gray group-hover:fill-light transition-all" id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                            </svg>

                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!-- total -->
    <!-- mobile only  -->
    <div class="lg:hidden hidden pricing__total pricing__total--mobile bg-red pt-[9px] pb-[9px] pl-5 pr-5 absolute bottom-0 left-0 w-full flex items-center justify-between">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="14.819" height="14.819" viewBox="0 0 14.819 14.819">
                <g id="Edit_Icon" transform="translate(-779.261 -1011.304)">
                    <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(787.786 1024.145)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                    <g id="Path_316" data-name="Path 316" transform="translate(790.623 1011.304) rotate(45)" fill="none">
                        <path d="M0,0H4.889V12.223l-2.4,3.845L0,12.223Z" stroke="none" />
                        <path d="M 1.499998092651367 1.499997138977051 L 1.499998092651367 11.77978992462158 L 2.467294692993164 13.27259922027588 L 3.389317989349365 11.7939338684082 L 3.389317989349365 1.499997138977051 L 1.499998092651367 1.499997138977051 M -1.9073486328125e-06 -1.9073486328125e-06 L 4.889317989349365 -1.9073486328125e-06 L 4.889317989349365 12.22328758239746 L 2.491608142852783 16.06853675842285 L -1.9073486328125e-06 12.22328758239746 L -1.9073486328125e-06 -1.9073486328125e-06 Z" stroke="none" fill="#f9f2e5" />
                    </g>
                </g>
            </svg>

            <div class="text-light"><span class="text-[20px]"><span class="pricing__total-value"></span> PLN</span>
                <span class="text-[10px]">netto</span>
            </div>
        </div>
        <div class="pricing__total--btn"></div>
    </div>

</section>
<!-- pricing -->