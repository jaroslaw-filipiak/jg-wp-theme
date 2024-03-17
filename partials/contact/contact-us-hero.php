<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section id="contact-us-hero" class="dark:bg-gradient-to-r  lg:pl-0  lg:pr-14 lg:pt-[44px] ">

    <div class="flex aside-offset__margin ">
        <div class="w-full hidden lg:flex lg:w-5/12 xl:min-w-[586px]">
            <?php if ( get_field( 'contact_box_photo' ) ) : ?>
            <div class="w-full aspect-[1/1.111] bg-red rounded-lg xl:max-w-[586px] contact-box__photo"
                style="background-image: url(<?php the_field( 'contact_box_photo' ); ?>)"></div>
            <?php endif ?>
        </div>
        <div
            class="w-full lg:w-7/12 lg:pl-[45px] xl:pl-[65px] 2xl:pl-[134px] pt-[38px] lg:pt-0 flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <div class="flex flex-col items-start justify-between xl:pt-[16px]">
                    <h1 class="fluid-text-5xl max-w-[444px]"><?php the_field( 'contact_box_heading' ); ?>
                    </h1>
                </div>
            </div>

            <div class="pb-[29px] pt-[38px] xl:pt-0 ">
                <div class="flex items-center gap-[24px] pb-[37px] ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                            transform="translate(0 8) rotate(-90)" fill="#ef4123"></path>
                    </svg>
                    <p class="text-[14px] text-red uppercase font-medium"><?php the_field( 'contact_box_label' ); ?></p>

                </div>
                <div>
                    <div>
                        <?php the_field( 'contact_box_content' ); ?>
                    </div>
                    <div class="lg:pt-[32px]">
                        <div
                            class="flex flex-col xl:flex-row flex-wrap items-start xl:items-center lg:gap-[14px] 2xl:gap-[54px]">
                            <!-- TODO: icon -->
                            <a class="text-[14px] lg:fluid-text-base font-medium  max-lg:w-full max-lg:bg-dark max-lg:pt-[14px] max-lg:pb-[14px] max-lg:pl-6 max-lg:pr-6 max-lg:rounded-full whitespace-nowrap max-lg:order-2 flex items-center gap-3 btn--contact__animation"
                                href="tel:<?php the_field('phone', 'option') ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.696" height="16.582"
                                    viewBox="0 0 11.696 16.582">
                                    <g id="Phone_Icon" transform="translate(-451.164 -7759.324)">
                                        <g id="Rectangle_75" data-name="Rectangle 75"
                                            transform="translate(462.86 7759.324) rotate(90)" fill="none"
                                            stroke="#f9f2e5" stroke-width="1.5">
                                            <rect width="16.582" height="11.696" stroke="none" />
                                            <rect x="0.75" y="0.75" width="15.082" height="10.196" fill="none" />
                                        </g>
                                        <line class="line__transform" id=" Line_20" data-name="Line 20" x2="3.599"
                                            fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                    </g>
                                </svg>
                                <p><?php the_field('phone', 'option') ?></p>
                            </a>

                            <div
                                class="text-[14px] max-lg:pt-[20px] max-lg:pb-[20px]  self-center lg:hidden max-lg:order-1">
                                PN
                                - PT
                                - 9:00 -
                                16:00
                            </div>

                            <a class="text-[14px] lg:fluid-text-base font-medium  max-lg:w-full max-lg:bg-dark max-lg:pt-[14px] max-lg:pb-[14px] max-lg:pl-6 max-lg:pr-6 max-lg:rounded-full max-lg:order-3 max-lg:mt-[10px] underline underline-offset-[6px] hover:text-red transition-all"
                                href="mailto:biuro@grafikonline.pl">
                                <img src="" style="width:11px;" alt="">
                                <p><?php the_field('email', 'option') ?></p>
                            </a>

                            <?php $contact_box_btn_order = get_field( 'contact_box_btn_order' ); ?>
                            <?php if ( $contact_box_btn_order ) : ?>
                            <a href="<?php echo esc_url( $contact_box_btn_order['url'] ); ?>"
                                target="<?php echo esc_attr( $contact_box_btn_order['target'] ); ?>"
                                class=" max-lg:order-4 btn btn--red whitespace-nowrap max-lg:w-full max-lg:mt-[10px]">
                                <span><?php echo esc_html( $contact_box_btn_order['title'] ); ?></span>

                                <svg width="14.819" height="14.819" viewBox="0 0 14.819 14.819">
                                    <g id="Edit_Icon" transform="translate(-779.261 -1011.304)">
                                        <line id="Line_8" data-name="Line 8" x2="6.294"
                                            transform="translate(787.786 1024.145)" fill="white" stroke="#f9f2e5"
                                            stroke-width="1.5" />
                                        <g id="Path_316" data-name="Path 316"
                                            transform="translate(790.623 1011.304) rotate(45)" fill="none">
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

                </div>

            </div>
        </div>
    </div>
</section>