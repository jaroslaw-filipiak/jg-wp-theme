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
        <div class="divider-with-text flex items-center <?php echo $is_contact_page ? 'mt-8 lg:mt-20 xl:mt-[104px]' : '' ?>">
            <p class=" text-light  w-full lg:w-auto flex text-[16px] lg:fluid-text-2xl lg:pr-[65px] lg:whitespace-nowrap">
                Mamy doświadczenie we współpracy z:
            </p>
            <div class="border-[1px] border-gray w-full hidden lg:flex"></div>
            <div class="pl-6 hidden lg:flex">
                <img class="lg:min-w-[14px]" src="arrow-down.svg" alt="">
            </div>
        </div>

    </div>

    <div class="logos-slider swiper mt-[24px] mb-[24px] lg:mt-[71px] xl:mt-[91px] lg:mb-[71px] xl:mb-[91px]">

        <div class="swiper-wrapper" style="transition-timing-function: linear;">
            <!-- Slides -->
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>
            <div class="swiper-slide"> logo</div>

        </div>

    </div>
</section>