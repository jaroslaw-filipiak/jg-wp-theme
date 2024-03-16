<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();
$is_contact_page = is_page_template('page-templates/contact.php');
?>

<section class="<?php echo $is_contact_page ? 'pl-5 lg:pl-0 pr-5 lg:pr-0 logos__contact-us-page' : '' ?>">
    <div class="lg:pr-14 xl:pr-0 aside-offset__margin">
        <div
            class="divider-with-text flex items-center <?php echo $is_contact_page ? 'mt-8 lg:mt-20 xl:mt-[104px]' : '' ?>">
            <p
                class=" dark:text-light text-lightmode_text w-full lg:w-auto flex text-[16px] lg:fluid-text-2xl lg:pr-[65px] lg:whitespace-nowrap">
                Mamy doświadczenie we współpracy z:
            </p>
            <div class="border-[1px] border-gray w-full hidden lg:flex"></div>
            <div class="pl-6 hidden lg:flex">
                <svg width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                    <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                        transform="translate(0 7.496) rotate(-45)" fill="#777"></path>
                </svg>
            </div>
        </div>

    </div>

    <div class="logos-slider swiper mt-[24px] mb-[24px] lg:mt-[71px] xl:mt-[91px] lg:mb-[71px] xl:mb-[91px]">

        <div class="swiper-wrapper" style="transition-timing-function: linear;">
            <!-- Slides -->

            <?php 
            $images = get_field('logotypy', 'option');
            if( $images ): ?>

            <?php foreach( $images as $image ): ?>
            <div style="max-width: 340px;" class="swiper-slide"> <img style="max-width: 180px;" class="max-w-full"
                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> </div>

            <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </div>
</section>