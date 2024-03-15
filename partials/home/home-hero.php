<?php

/**
 * The template for displaying home hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="aside-offset__margin">

    <h1 class="fluid-text-5xl">
        <?php the_field( 'hero_heading' ); ?>
    </h1>

    <div
        class="flex flex-col md:flex-row items-center justify-center lg:justify-between  w-full 2xl:container mt-[24px] md:mt-[117px] lg:mt-[153px]">
        <div
            class="flex md:flex-row-reverse  items-center justify-center md:justify-end gap-[10px] lg:gap-[28px] w-full lg:w-5/12 ">

            <!-- cennik -->
            <?php $hero_btn_pricing = get_field( 'hero_btn_pricing' ); ?>
            <?php if ( $hero_btn_pricing ) : ?>

            <?php endif; ?>
            <a href="<?php echo esc_url( $hero_btn_pricing['url'] ); ?>"
                target="<?php echo esc_attr( $hero_btn_pricing['target'] ); ?>"
                class="btn btn--dark max-md:w-full whitespace-nowrap group">
                <span><?php echo esc_html( $hero_btn_pricing['title'] ); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
                    <g id="Cennik_Icon" transform="translate(-135 -24)">
                        <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(135 24)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light" stroke-width="1.5">
                            <rect width="20" height="13" stroke="none" />
                            <rect x="0.75" y="0.75" width="18.5" height="11.5" fill="none" />
                        </g>
                        <line id="Line_9" data-name="Line 9" x2="11" transform="translate(139.5 29.5)" fill="none"
                            class="dark:stroke-[#f9f2e5] stroke-[#1E1E1E] group-hover:stroke-light" stroke-width="1.5">
                        </line>
                    </g>
                </svg>
            </a>

            <!-- zamow projekt -->
            <?php $hero_btn_order_project = get_field( 'hero_btn_order_project' ); ?>
            <?php if ( $hero_btn_order_project ) : ?>

            <a href="<?php echo esc_url( $hero_btn_order_project['url'] ); ?>"
                target="<?php echo esc_attr( $hero_btn_order_project['target'] ); ?>"
                class="btn btn--red max-md:w-full whitespace-nowrap">
                <span><?php echo esc_html( $hero_btn_order_project['title'] ); ?></span>
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

        <!-- narzedzia i technologia -->
        <div class=" flex items-center justify-center lg:justify-between
         w-full lg:w-7/12 mt-[70px] md:mt-0 max-w-[680px]">

            <p class="text-[14px] dark:text-gray text-lightmode_9f hidden xl:flex text-nowrap xl:pr-[62px]">
                <?php the_field( 'technologies_title' ); ?>
            </p>

            <?php 
            $images = get_field('technologies_icons');
            
            if( $images ): ?>

            <ul class="flex items-center justify-between w-full gap-3 sm:gap-4 lg:gap-6">
                <?php foreach( $images as $image ): ?>

                <li><img class="max-lg:w-[14px]" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>">
                </li>

                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>

    </div>
</section>

<section class="aside-offset__margin">
    <div class="divider-with-text flex items-center mt-8 lg:mt-20 xl:mt-[74px]">
        <p class="text-[12px] dark:text-gray text-dark2 min-w-[90px] flex lg:hidden">
            Zjedź niżej
        </p>
        <p class="text-[14px] dark:text-gray text-dark2 hidden lg:flex w-[190px]">
            Zjedź niżej po więcej
        </p>
        <div class="border-[1px] dark:dark:border-dark border-lightmode_ef w-full"></div>
        <div class="pl-6">
            <svg width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                    transform="translate(0 7.496) rotate(-45)" fill="#777" />
            </svg>

        </div>
    </div>
</section>