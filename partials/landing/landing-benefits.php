<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>


<?php if( have_rows('landing_accordons_row_and_title') ): ?>

<?php while( have_rows('landing_accordons_row_and_title') ): the_row(); 
        $title = get_sub_field('landing_accordion_row_title');
        ?>

<!-- parent repater -->
<section
    class="pt-[36px] lg:pt-[80px] xl:pt-[90px] pb-[36px] lg:pb-[114px] landing-accordions-row landing-accordions-row-<?php echo get_row_index(); ?>">
    <div class="aside-offset__margin">
        <div>

            <h3
                class="fluid-text-3xl lg:fluid-text-4-717rem grid__title pt-[20px] xl:pt-0 pb-[36px]  max-w-[1440px] lg:pb-[50px] xl:pb-[70px] ">
                <?php echo $title ?>
            </h3>

        </div>
        <div class="flex flex-col lg:flex-row">

        </div>
        <div class="w-full  mt-[36px] lg:mt-0">

            <!-- accordions nested repeater -->

            <div
                class="accordion-container accordion-container-<?php echo get_row_index() ?> accordion-container__landing">

                <?php if( have_rows('landing_accordion_row_accordions_repeater') ): ?>
                <?php while( have_rows('landing_accordion_row_accordions_repeater') ): the_row();
                  $title = get_sub_field('accordion_title');
                  $content = get_sub_field('accordion_content');
                ?>

                <div class="ac group">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger group">
                            <span class="max-lg:w-10/12 flex"><?php echo $title ?></span>
                        </button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text fluid-text-lg lg:text-[16px]">
                            <img loading="lazy" class="mt-[16px] mb-[16px] lg:mb-[36px] w-3 "
                                src="<?php echo get_template_directory_uri() ?>/dist/icons/arrow_down_right.svg"
                                role="presentation">

                            <?php echo $content ?>
                        </p>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- accordions nested repeater -->

        </div>
    </div>
    </div>
</section>
<!-- parent repeater -->
<?php endwhile; ?>

<?php endif; ?>