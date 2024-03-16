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
        <?php if ( get_field( 'video' ) ) : ?>
        <video autoplay loop muted src=" <?php the_field( 'video' ); ?>"></video>
        <?php endif; ?>

    </div>

    <!-- label -->
    <div class="mb-[20px] lg:mb-0 landing-hero__label flex items-end">
        <div class="flex items-center gap-[24px] h-[22px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-red lg:fill-gray" width="8" height="8"
                viewBox="0 0 8 8">
                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                    transform="translate(0 8) rotate(-90)"></path>
            </svg>
            <p class="text-[14px] text-red lg:text-gray uppercase font-medium "><?php the_field( 'landing_label' ); ?>
            </p>
        </div>
    </div>

    <!-- title -->
    <h1 class="fluid-text-4xl mb-[24px] lg:mb-0 landing-hero__title"><?php the_field( 'landing_heading' ); ?>
    </h1>

    <!-- subtitle -->
    <div class="landing-hero__subtitle">
        <p class="dark:text-light text-lightmode_texttext-[14px] lg:text-[16px] xl:max-w-[708px]">
            <?php the_field( 'landing_content' ); ?></p>
    </div>

    <!-- buttons -->
    <div
        class="flex flex-col md:flex-row items-center justify-center lg:justify-between  w-full 2xl:container mt-[24px] lg:mt-0  landing-hero__buttons">

        <div class="flex items-center justify-center md:justify-start gap-[10px] lg:gap-[28px] w-full lg:w-5/12">
            <!-- Opis -->
            <?php $landing_btn_info = get_field( 'landing_btn_info' ); ?>
            <?php if ( $landing_btn_info ) : ?>
            <a href="<?php echo esc_url( $landing_btn_info['url'] ); ?>"
                class="btn btn--dark max-md:w-full whitespace-nowrap group">
                <span><?php echo esc_html( $landing_btn_info['title'] ); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light" stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light"
                            stroke-width="1.5" />
                    </g>
                </svg>
            </a>
            <?php endif; ?>

            <!-- Cennik -->
            <?php $landing_btn_pricing = get_field( 'landing_btn_pricing' ); ?>
            <?php if ( $landing_btn_pricing ) : ?>
            <a href="<?php echo esc_url( $landing_btn_pricing['url'] ); ?>"
                class="btn btn--dark max-md:w-full whitespace-nowrap max-lg:hidden group">
                <span><?php echo esc_html( $landing_btn_pricing['title'] ); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" stroke-width="1.5"
                            fill="none" class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)"
                            stroke-width="1.5" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light" />
                    </g>
                </svg>
            </a>
            <?php endif; ?>

            <!-- Zamów projekt -->
            <?php $landing_btn_order = get_field( 'landing_btn_order' ); ?>
            <?php if ( $landing_btn_order ) : ?>
            <a href="<?php echo esc_url( $landing_btn_order['url'] ); ?>"
                class="btn btn--red max-md:w-full whitespace-nowrap group">
                <span><?php echo esc_html( $landing_btn_order['title'] ); ?></span>

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
            <?php endif; ?>
        </div>

    </div>

</section>

<section class="aside-offset__margin 2xl:-mt-[100px]">
    <div class="divider-with-text flex items-center mt-8">
        <p class="text-[14px] text-gray min-w-[90px] flex lg:hidden">Zjedź niżej</p>
        <p class="text-[14px] text-gray hidden lg:flex w-[190px]">Zjedź niżej po więcej</p>
        <div class="border-[1px] dark:border-dark border-lightmode_ef w-full"></div>
        <div class="pl-6">
            <svg width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                    transform="translate(0 7.496) rotate(-45)" fill="#777"></path>
            </svg>
        </div>
    </div>
</section>