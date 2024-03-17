<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>


<?php if( have_rows('about_row_repeater') ): ?>

<?php while( have_rows('about_row_repeater') ): the_row(); 
        $label = get_sub_field('label');
        $content = get_sub_field('content');
        ?>
<section class="pt-[36px] lg:pt-[124px]">
    <div class="aside-offset__margin">
        <div>
            <div class="flex flex-col items-start justify-between grid__label xl:pb-[72px]">
                <div class="flex items-center gap-[24px]">
                    <svg width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                            transform="translate(0 8) rotate(-90)" fill="#777777" />
                    </svg>
                    <p class="text-[12px] lg:text-[14px]  text-gray uppercase font-medium "><?php echo $label ?></p>
                </div>
            </div>
            <?php echo $content ?>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php endif; ?>