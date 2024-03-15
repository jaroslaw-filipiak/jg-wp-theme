<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section id="who-we-are"
    class="dark:bg-gradient-to-r bg-gradient-to-r dark:from-[#1e1e1e] from-[#FFF] dark:to-[#262626] to-[#F9F9F9] pt-[36px] lg:pt-[124px] pb-[36px] lg:pb-[124px]">
    <div class="aside-offset__margin">
        <div>
            <!-- label -->
            <div class="flex flex-col items-start justify-between grid__label xl:pb-[72px]">
                <div class="flex items-center gap-[24px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                            transform="translate(0 8) rotate(-90)" fill="#777777" />
                    </svg>
                    <p class="text-[12px] lg:text-[14px]  text-gray uppercase font-medium ">
                        <?php the_field( 'who_we_are_label' ); ?></p>
                </div>
            </div>
            <!-- label -->
            <h3
                class="text-[20px] lg:fluid-text-3xl lg:fluid-text-4-717rem grid__title pt-[20px] xl:pt-0 pb-[36px]  max-w-[1440px] lg:pb-[150px] ">
                <?php the_field( 'who_we_are_heading' ); ?>
            </h3>

        </div>
        <div class="flex flex-col lg:items-stretch lg:flex-row lg:mt-5">
            <div class="w-full  lg:w-5/12 xl:min-w-[586px] max-w-[586px]">
                <?php $who_we_are_photo = get_field( 'who_we_are_photo' ); ?>
                <?php if ( $who_we_are_photo ) : ?>
                <div class="w-full aspect-[1/1.087] dark:bg-dark bg-lightmode_ef rounded-lg bg-cover bg-no-repeat bg-center"
                    style="background-image: url(<?php echo esc_url( $who_we_are_photo['url'] ); ?>)"></div>
                <?php endif; ?>
            </div>
            <div class="lg:w-7/12 lg:pl-[65px] xl:pl-[94px] mt-[36px] lg:mt-0">
                <div class="flex items-center justify-between lg:-mt-[25px]">
                    <div class="flex flex-col items-start justify-between grid__label ">
                        <div class="flex items-center gap-[24px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray lg:fill-red" width="8" height="8"
                                viewBox="0 0 8 8">
                                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                                    transform="translate(0 8) rotate(-90)" />
                            </svg>
                            <p class="text-[12px] lg:text-[14px]  text-gray lg:text-red uppercase font-medium ">
                                <?php the_field( 'who_we_are_label' ); ?>
                            </p>
                        </div>
                    </div>

                    <div>
                        <?php $who_we_are_btn = get_field( 'who_we_are_btn' ); ?>
                        <?php if ( $who_we_are_btn ) : ?>
                        <a href="<?php echo esc_url( $who_we_are_btn['url'] ); ?>"
                            target="<?php echo esc_attr( $who_we_are_btn['target'] ); ?>"
                            class="btn btn--dark max-md:w-full group">
                            <span><?php echo esc_html( $who_we_are_btn['title'] ); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.708" height="10.219"
                                viewBox="0 0 13.708 10.219">
                                <g id="Więcej_Icon" transform="translate(-782.5 -1015.043)">
                                    <line id="Line_6" data-name="Line 6" x2="13.708"
                                        transform="translate(782.5 1015.793)" fill="none" stroke="#f9f2e5"
                                        class="dark:stroke-[#f9f2e5] stroke-lightmode_text group-hover:stroke-[#f9f2e5]"
                                        stroke-width="1.5" />
                                    <line id="Line_7" data-name="Line 7" x2="13.708"
                                        transform="translate(782.5 1020.153)" fill="none"
                                        class="dark:stroke-[#f9f2e5] stroke-lightmode_text group-hover:stroke-[#f9f2e5]"
                                        stroke-width="1.5" />
                                    <line id="Line_8" data-name="Line 8" x2="6.294"
                                        transform="translate(782.5 1024.512)" fill="none"
                                        class="dark:stroke-[#f9f2e5] stroke-lightmode_text group-hover:stroke-[#f9f2e5]"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- accordions -->

                <div class="accordion-container xl:mt-[112px] max-lg:mt-[12px]">

                    <?php if( have_rows('who_we_are_accordions') ): ?>

                    <?php while( have_rows('who_we_are_accordions') ): the_row(); 
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>

                    <div class="ac group">
                        <h2 class="ac-header">
                            <button type="button" class="ac-trigger group ">
                                <span class="max-lg:w-10/12 flex"><?php echo $title ?></span>
                            </button>
                        </h2>
                        <div class="ac-panel">
                            <p class="ac-text fluid-text-lg">
                                <img loading="lazy" class="mt-[16px] mb-[16px] lg:hidden"
                                    src="<?php echo get_theme_file_uri() ?>/dist/icons/arrow_down_right.svg"
                                    role="presentation">
                                <?php echo $content ?>
                            </p>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>

                <!-- accordions -->

            </div>
        </div>
    </div>
</section>