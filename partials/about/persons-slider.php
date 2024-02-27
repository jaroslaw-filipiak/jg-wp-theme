<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();
?>

<section class="slider-row mt-8 lg:mt-11 pl-5 lg:pl-0 pr-5 lg:pr-0 ">
    <div class="slider-row__persons w-full overflow-hidden mb-5 relative">
        <div class="portfolio__desktop-nav hidden lg:flex aside-offset__margin absolute left-0 top-1 w-full h-full  items-center justify-end">

            <button class="w-[120px] h-[120px] bg-dark rounded-full flex items-center justify-center z-20 relative left-[60px] group hover:bg-red hover:shadow-2xl swiper--portfolio--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993" class="-rotate-90 fill-light relative left-0 transition-all group-hover:left-2">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z" transform="translate(0 7.496) rotate(-45)" />
                </svg>

            </button>
        </div>

        <div class="swiper-wrapper -top-6 pt-6">

            <?php

            if (have_rows('person', 'option')) : $i = 0; ?>

                <?php while (have_rows('person', 'option')) : $i++;
                    the_row(); ?>

                    <?php

                    $image = get_sub_field('photo');
                    $size = 'full';
                    $name_surname = get_sub_field('name_surname');
                    $role = get_sub_field('role');
                    $excerpt = get_sub_field('excerpt');
                    $behance = get_sub_field('behance');
                    $linkedin = get_sub_field('linkedin');

                    ?>

                    <div class="swiper-slide person person-<?php echo $i; ?>" data-person="person-<?php echo $i; ?>">
                        <div class="swiper-slide__photo " style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                            <div class="person-slider__meta  lg:flex lg:flex-col absolute max-lg:bottom-[10px] max-lg:right-[10px] lg:left-[31px] lg:top-[29px] text-light" s>
                                <div class="person-slider__name text-[16px] font-medium  hidden lg:flex">
                                    <?php echo $name_surname ?></div>
                                <div class="person-slider__work text-[16px] hidden lg:flex max-lg:mt-[32px]"><?php echo $role ?>
                                </div>
                                <div class="open-person open-person-<?php echo $i; ?> btn btn--dark dark:max-lg:bg-red max-md:w-full mt-[24px] max-w-[126px] lg:max-w-[164px] cursor-pointer">
                                    <span>Więcej</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.708" height="10.219" viewBox="0 0 13.708 10.219">
                                        <g id="Więcej_Icon" transform="translate(-782.5 -1015.043)">
                                            <line id="Line_6" data-name="Line 6" x2="13.708" transform="translate(782.5 1015.793)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                            <line id="Line_7" data-name="Line 7" x2="13.708" transform="translate(782.5 1020.153)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                            <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(782.5 1024.512)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide__excerpt pt-[16px] lg:hidden">
                            <div class="person-slider__name text-[14px] font-medium "><?php echo $name_surname ?></div>
                            <div class="person-slider__work text-[14px]"><?php echo $role ?></div>
                        </div>
                    </div>


            <?php
                endwhile;
            else :
            endif; ?>

        </div>
        <div class="swiper-scrollbar lg:hidden" style="width: 90%; left: 5%"></div>
    </div>
</section>