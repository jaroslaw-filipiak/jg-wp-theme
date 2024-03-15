<?php

/**
 * The template for displaying  REPEATER ROW + SWIPER SLIDER
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<!-- parent repeater -->
<?php if( have_rows('section') ): ?>

<?php while( have_rows('section') ): the_row(); 
        $label = get_sub_field('row_label');
        $title = get_sub_field('row_title');
        $subtitle = get_sub_field('row_subtitle');
        $btn_more = get_sub_field('btn_more');
        $btn_pricing = get_sub_field('btn_pricing');
        $btn_order = get_sub_field('btn_order');
        ?>
<section class="slider-row mt-8 lg:mt-11 lg:pl-0 lg:pr-0">
    <div class="slider-row__swiper portfolio-slider w-full overflow-hidden mb-5 relative">
        <div
            class="portfolio__desktop-nav hidden lg:flex aside-offset__margin absolute left-0 top-1 w-full h-full  items-center justify-end">
            <button
                class="w-[120px] h-[120px] dark:bg-dark bg-lightmode_ef rounded-full flex items-center justify-center z-20 relative left-[60px] group hover:bg-red hover:shadow-2xl swiper--portfolio--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.993" height="14.993" viewBox="0 0 14.993 14.993"
                    class="-rotate-90 dark:fill-light fill-darkMain relative left-0 group-hover:fill-light transition-all group-hover:left-2">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                        transform="translate(0 7.496) rotate(-45)" />
                </svg>
            </button>
        </div>
        <!-- Nested repeater slides -->
        <div class="swiper-wrapper -top-6 pt-6 " style="transition-timing-function: linear;">
            <!-- Slides -->

            <!-- child repeater start -->
            <?php if( have_rows('slides') ): ?>

            <?php while( have_rows('slides') ): the_row(); 
            
                    $image_top = get_sub_field('slide_top');
                    $image_bottom = get_sub_field('slide_bottom');
                    
            ?>

            <div class="swiper-slide aspect-square md:aspect-video bg-dark rounded-lg group/slide 2xl:pb-[37.374%]">
                <div class="swiper-slide__top rounded-lg" style="background-image:url('<?php echo $image_top ?>')">
                </div>
                <div class="swiper-slide__bottom rounded-lg"
                    style="background-image:url('<?php echo $image_bottom ?>')"></div>
                <!-- icon -->
                <div class="swiper-slide__fullscreen-icon group/icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.08" height="14.08" viewBox="0 0 14.08 14.08"
                        class="scale-[100%] group/icon:hover:scale-[100%]">
                        <path
                            class="dark:fill-light fill-darkMain group/icon:hover:fill-light dark:group-icon:hover:fill-light"
                            id="Fullscreen_Icon"
                            d="M120-825.92v-3.911h1.564v2.347h2.347v1.564Zm10.169,0v-1.564h2.347v-2.347h1.564v3.911ZM120-836.089V-840h3.911v1.564h-2.347v2.347Zm12.516,0v-2.347h-2.347V-840h3.911v3.911Z"
                            transform="translate(-120 840)" />
                    </svg>
                </div>
                <!-- icon -->
            </div>
            <?php endwhile; ?>

            <?php endif; ?>
            <!-- child repeater end -->
        </div>

        <div class="swiper-scrollbar w-full m-0 p-0 lg:hidden"></div>

    </div>
</section>

<section class="pt-[28px] pb-12 service-grid-container lg:pb-[125px] aside-offset__margin">

    <h3 class="text-[20px] lg:fluid-text-3xl grid__title pt-[17px] xl:pt-0 pb-[24px] xl:pb-0">
        <?php echo $title; ?>
    </h3>

    <div class="flex items-end gap-[10px] lg:gap-[24px] mt-6 lg:mt-[50px] xl:mt-[56px] grid__buttons">


        <?php if( $btn_more ): ?>
        <a href="<?php echo $btn_more['url'] ?>" class="btn btn--dark max-md:w-full group">
            <span><?php echo $btn_more['title'] ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="13.708" height="10.219" viewBox="0 0 13.708 10.219">
                <g id="Więcej_Icon" transform="translate(-782.5 -1015.043)">
                    <line id="Line_6" data-name="Line 6" x2="13.708" transform="translate(782.5 1015.793)" fill="none"
                        stroke-width="1.5"
                        class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-[#f9f2e5]" />
                    <line id="Line_7" data-name="Line 7" x2="13.708" transform="translate(782.5 1020.153)" fill="none"
                        stroke-width="1.5"
                        class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-[#f9f2e5]" />
                    <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(782.5 1024.512)" fill="none"
                        stroke-width="1.5"
                        class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-[#f9f2e5]" />
                </g>
            </svg>
        </a>
        <?php endif; ?>

        <?php if( $btn_pricing ): ?>
        <span class="hidden lg:flex"><a href="<?php echo $btn_pricing['url'] ?>" class="btn btn--dark group">
                <span><?php echo $btn_pricing['title'] ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-[#f9f2e5]"
                            stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-[#f9f2e5]"
                            stroke-width="1.5" />
                    </g>
                </svg>
            </a>
        </span>
        <?php endif; ?>

        <?php if( $btn_order ): ?>
        <a href="<?php echo $btn_order['url'] ?>" class="btn btn--red max-md:w-full">
            <span class="hidden lg:flex whitespace-nowrap"><?php echo $btn_order['title'] ?></span>
            <span class="flex lg:hidden">Zamów</span>

            <svg width="14.819" height="14.819" viewBox="0 0 14.819 14.819">
                <g id="Edit_Icon" transform="translate(-779.261 -1011.304)">
                    <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(787.786 1024.145)" fill="white"
                        stroke="#f9f2e5" stroke-width="1.5" />
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
        <?php endif; ?>
    </div>

    <p
        class="dark:dark:text-light text-lightmode_text text-[14px] lg:text-[16px] border-b-[2px] dark:border-b-dark border-lightmode_ef pb-6 lg:pb-[50px] xl:max-w-[708px] grid__excerpt">
        <?php echo $subtitle; ?>
    </p>

    <div class="flex flex-col items-start justify-between grid__label xl:pb-[107px]">
        <div class="flex items-center gap-[24px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                    transform="translate(0 8) rotate(-90)" fill="#ef4123" />
            </svg>
            <p class="text-[12px] lg:text-[14px] text-red uppercase font-medium "><?php echo $label ?></p>
        </div>

    </div>

</section>


<?php endwhile; ?>

<?php endif; ?>