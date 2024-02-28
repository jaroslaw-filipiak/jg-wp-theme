<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section id="testimonials" class="pt-[36px] lg:pt-[130px] pb-12 lg:pb-[124px] ">
    <div class="flex flex-col lg:flex-row items-center justify-between lg:mb-[70px] aside-offset__margin">
        <h3 class="text-[24px] lg:fluid-text-3xl lg:fluid-text-4-717rem xl:whitespace-nowrap lg:pr-[34px]">
            Jakie zdanie mają o nas <span class="text-red">dotychczasowi Klienci?
            </span>

        </h3>
        <!-- divider -->
        <div class="flex items-center w-full mt-[20px] lg:mt-0">
            <div class="border-[1px] border-dark w-full"></div>
            <div class="pl-6">
                <img class="lg:min-w-[14px]" src="arrow-down.svg" alt="">
            </div>
        </div>
    </div>

    <div class="slider-row__swiper--testimonials overflow-hidden relative max-lg:pl-[24px] max-lg:pr-[24px]">
        <div class="testimonials__desktop-nav hidden lg:flex aside-offset__margin absolute left-0 top-1 w-full h-full  items-center justify-end">

            <button class="w-[120px] h-[120px] bg-dark rounded-full flex items-center justify-center z-20 relative left-[60px] group hover:bg-red hover:shadow-2xl swiper--testimonials--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993" class="-rotate-90 fill-light relative left-0 transition-all group-hover:left-2">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                </svg>

            </button>
        </div>
        <div class="testimonials swiper-wrapper ">
            <div class="testimonial swiper-slide lg:bg-dark3 flex flex-col-reverse lg:flex-col lg:pt-[54px] lg:pl-[51px] lg:pr-[51px] lg:pb-0 xl:max-w-[1196px]">
                <div class="testimonial__content text-[14px] lg:text-[20px] lg:leading-[36px] font-normal text-light mt-[22px] lg:mt-0 lg:pb-[134px]">
                    Jako firma Boxmet Ltd. Sp. z o.o. współpracujemy ze Studiem GrafikOnline.PL od stosunkowo
                    niedługiego
                    czasu, jednak już zdążyliśmy się przekonać o jakości obsługi i profesjonaliźmie. Firma wykazała się
                    kreatywnym i twórczym podejściem do realizacji projektu nowego katalogu produktowego. Nasza
                    współpraca
                    to
                    nie tylko katalog, ale również stworzenie całej szaty graficznej firmy, a w jej obrębie tworzenie
                    wielu
                    projektów graficznych, takich jak banery na stronę www. Każdy z projektów spotyka się z naszą
                    aprobatą,
                    pomimo wysoko zawieszonych wymagań. To czyni współpracę łatwą i przyjemną, ale przede wszystkim w
                    efekcie
                    wpływa na pozytywny wizerunek firmy. Również projekty mniej typowe, spoza domyślnej oferty, są
                    obsługiwane
                    przez Studio Graficznej Jarosław Grycaj z pełnym zaangażowaniem. Zdecydowanie polecamy!
                </div>
                <div class="testimonial__footer flex flex-wrap mt-[24px] lg:mt-[0px]">
                    <div class="text-gray text-[12px] lg:text-[14px] font-bold  lg:border-b-[1px] lg:border-dark w-6/12 lg:w-full order-2 lg:order-1 flex justify-end lg:justify-start lg:pb-[12px]">
                        <!-- TODO: Icon -->
                        12.2020r.
                    </div>
                    <div class="max-lg:w-6/12 lg:flex-grow-4 lg:w-8/12  order-1 lg:items-center lg:justify-start lg:pt-[39px] lg:pb-[63px]">
                        {logo}</div>
                    <div class="w-full max-lg:w-6/12 lg:flex-grow-1 lg:w-4/12  order-3 flex-grow-[2] mt-[24px] lg:mt-0 lg:pt-[39px] lg:pb-[63px] lg:pl-[70px] lg:justify-end lg:flex lg:flex-col lg:items-start">
                        <div class="text-[12px] lg:text-[14px] lg:text-light font-bold text-gray">
                            <p>Paweł Gryszan</p>
                        </div>
                        <div class="text-12 lg:text-[14px] font-normal lg:text-light text-gray">
                            <p>Kierownik Działu Handlu i Marketingu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial swiper-slide lg:bg-dark3 flex flex-col-reverse lg:flex-col  lg:pt-[54px] lg:pl-[51px] lg:pr-[51px] lg:pb-0 xl:max-w-[1196px]">
                <div class="testimonial__content text-[14px] lg:text-[20px] lg:leading-[36px] font-normal text-light mt-[22px] lg:mt-0 lg:pb-[134px]">
                    Jako firma Boxmet Ltd. Sp. z o.o. współpracujemy ze Studiem GrafikOnline.PL od stosunkowo
                    niedługiego
                    czasu, jednak już zdążyliśmy się przekonać o jakości obsługi i profesjonaliźmie. Firma wykazała się
                    kreatywnym i twórczym podejściem do realizacji projektu nowego katalogu produktowego. Nasza
                    współpraca
                    to
                    nie tylko katalog, ale również stworzenie całej szaty graficznej firmy, a w jej obrębie tworzenie
                    wielu
                    projektów graficznych, takich jak banery na stronę www. Każdy z projektów spotyka się z naszą
                    aprobatą,
                    pomimo wysoko zawieszonych wymagań. To czyni współpracę łatwą i przyjemną, ale przede wszystkim w
                    efekcie
                    wpływa na pozytywny wizerunek firmy. Również projekty mniej typowe, spoza domyślnej oferty, są
                    obsługiwane
                    przez Studio Graficznej Jarosław Grycaj z pełnym zaangażowaniem. Zdecydowanie polecamy!
                </div>
                <div class="testimonial__footer flex flex-wrap mt-[24px] lg:mt-[0px]">
                    <div class="text-gray text-[12px] lg:text-[14px] font-bold  lg:border-b-[1px] lg:border-dark w-6/12 lg:w-full order-2 lg:order-1 flex justify-end lg:justify-start lg:pb-[12px]">
                        <!-- TODO: Icon -->
                        12.2020r.
                    </div>
                    <div class="max-lg:w-6/12 lg:flex-grow-4 lg:w-8/12  order-1 lg:items-center lg:justify-start lg:pt-[39px] lg:pb-[63px]">
                        {logo}</div>
                    <div class="w-full max-lg:w-6/12 lg:flex-grow-1 lg:w-4/12  order-3 flex-grow-[2] mt-[24px] lg:mt-0 lg:pt-[39px] lg:pb-[63px] lg:pl-[70px] lg:justify-end lg:flex lg:flex-col lg:items-start">
                        <div class="text-[12px] lg:text-[14px] lg:text-light font-bold text-gray">
                            <p>Paweł Gryszan</p>
                        </div>
                        <div class="text-12 lg:text-[14px] font-normal lg:text-light text-gray">
                            <p>Kierownik Działu Handlu i Marketingu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial swiper-slide lg:bg-dark3 flex flex-col-reverse lg:flex-col  lg:pt-[54px] lg:pl-[51px] lg:pr-[51px] lg:pb-0 xl:max-w-[1196px]">
                <div class="testimonial__content text-[14px] lg:text-[20px] lg:leading-[36px] font-normal text-light mt-[22px] lg:mt-0 lg:pb-[134px]">
                    Jako firma Boxmet Ltd. Sp. z o.o. współpracujemy ze Studiem GrafikOnline.PL od stosunkowo
                    niedługiego
                    czasu, jednak już zdążyliśmy się przekonać o jakości obsługi i profesjonaliźmie. Firma wykazała się
                    kreatywnym i twórczym podejściem do realizacji projektu nowego katalogu produktowego. Nasza
                    współpraca
                    to
                    nie tylko katalog, ale również stworzenie całej szaty graficznej firmy, a w jej obrębie tworzenie
                    wielu
                    projektów graficznych, takich jak banery na stronę www. Każdy z projektów spotyka się z naszą
                    aprobatą,
                    pomimo wysoko zawieszonych wymagań. To czyni współpracę łatwą i przyjemną, ale przede wszystkim w
                    efekcie
                    wpływa na pozytywny wizerunek firmy. Również projekty mniej typowe, spoza domyślnej oferty, są
                    obsługiwane
                    przez Studio Graficznej Jarosław Grycaj z pełnym zaangażowaniem. Zdecydowanie polecamy!
                </div>
                <div class="testimonial__footer flex flex-wrap mt-[24px] lg:mt-[0px]">
                    <div class="text-gray text-[12px] lg:text-[14px] font-bold  lg:border-b-[1px] lg:border-dark w-6/12 lg:w-full order-2 lg:order-1 flex justify-end lg:justify-start lg:pb-[12px]">
                        <!-- TODO: Icon -->
                        12.2020r.
                    </div>
                    <div class="max-lg:w-6/12 lg:flex-grow-4 lg:w-8/12  order-1 lg:items-center lg:justify-start lg:pt-[39px] lg:pb-[63px]">
                        {logo}</div>
                    <div class="w-full max-lg:w-6/12 lg:flex-grow-1 lg:w-4/12  order-3 flex-grow-[2] mt-[24px] lg:mt-0 lg:pt-[39px] lg:pb-[63px] lg:pl-[70px] lg:justify-end lg:flex lg:flex-col lg:items-start">
                        <div class="text-[12px] lg:text-[14px] lg:text-light font-bold text-gray">
                            <p>Paweł Gryszan</p>
                        </div>
                        <div class="text-12 lg:text-[14px] font-normal lg:text-light text-gray">
                            <p>Kierownik Działu Handlu i Marketingu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial swiper-slide lg:bg-dark3 flex flex-col-reverse lg:flex-col  lg:pt-[54px] lg:pl-[51px] lg:pr-[51px] lg:pb-0 xl:max-w-[1196px] ">
                <div class="testimonial__content text-[14px] lg:text-[20px] lg:leading-[36px] font-normal text-light mt-[22px] lg:mt-0 lg:pb-[134px]">
                    Jako firma Boxmet Ltd. Sp. z o.o. współpracujemy ze Studiem GrafikOnline.PL od stosunkowo
                    niedługiego
                    czasu, jednak już zdążyliśmy się przekonać o jakości obsługi i profesjonaliźmie. Firma wykazała się
                    kreatywnym i twórczym podejściem do realizacji projektu nowego katalogu produktowego. Nasza
                    współpraca
                    to
                    nie tylko katalog, ale również stworzenie całej szaty graficznej firmy, a w jej obrębie tworzenie
                    wielu
                    projektów graficznych, takich jak banery na stronę www. Każdy z projektów spotyka się z naszą
                    aprobatą,
                    pomimo wysoko zawieszonych wymagań. To czyni współpracę łatwą i przyjemną, ale przede wszystkim w
                    efekcie
                    wpływa na pozytywny wizerunek firmy. Również projekty mniej typowe, spoza domyślnej oferty, są
                    obsługiwane
                    przez Studio Graficznej Jarosław Grycaj z pełnym zaangażowaniem. Zdecydowanie polecamy!
                </div>
                <div class="testimonial__footer flex flex-wrap mt-[24px] lg:mt-[0px]">
                    <div class="text-gray text-[12px] lg:text-[14px] font-bold  lg:border-b-[1px] lg:border-dark w-6/12 lg:w-full order-2 lg:order-1 flex justify-end lg:justify-start lg:pb-[12px]">
                        <!-- TODO: Icon -->
                        12.2020r.
                    </div>
                    <div class="max-lg:w-6/12 lg:flex-grow-4 lg:w-8/12  order-1 lg:items-center lg:justify-start lg:pt-[39px] lg:pb-[63px]">
                        {logo}</div>
                    <div class="w-full max-lg:w-6/12 lg:flex-grow-1 lg:w-4/12  order-3 flex-grow-[2] mt-[24px] lg:mt-0 lg:pt-[39px] lg:pb-[63px] lg:pl-[70px] lg:justify-end lg:flex lg:flex-col lg:items-start">
                        <div class="text-[12px] lg:text-[14px] lg:text-light font-bold text-gray">
                            <p>Paweł Gryszan</p>
                        </div>
                        <div class="text-12 lg:text-[14px] font-normal lg:text-light text-gray">
                            <p>Kierownik Działu Handlu i Marketingu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="testimonials--nav lg:hidden  flex items-center gap-[12px] mt-[38px] max-lg:pl-[24px] max-lg:pr-[24px]">
        <div class="w-6/12 flex items-center text-gray text-[12px] font-bold border-[2px]  border-dark rounded-[20px] h-[40px] pl-[18px] pr-[18px] testimonials__more-btn">
            Rozwiń opis
        </div>
        <div class="w-3/12 h-[40px] bg-dark rounded-[20px] flex items-center justify-start pl-[14px] testimonial__prev--mobile">
            <div>
                <svg class="rotate-90 w-[11px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.993 14.993">
                    <path class="fill-light" id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                </svg>
            </div>
        </div>
        <div class="w-3/12 h-[40px] bg-dark rounded-[20px] flex items-center justify-end pr-[14px] testimonial__next--mobile">
            <div>
                <svg class=" -rotate-90 w-[11px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.993 14.993">
                    <path class="fill-light" id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                </svg>
            </div>
        </div>
    </div>


</section>