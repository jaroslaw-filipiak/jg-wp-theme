<?php /* Template Name: O firmie */ ?>
<?php get_header(); ?>

<?php get_template_part('partials/about/about-hero'); ?>
<?php get_template_part('partials/about/persons-slider'); ?>
<?php get_template_part('partials/about/about-row-repeater'); ?>
<?php get_template_part('partials/about/about-accordions'); ?>

<?php get_template_part('partials/global/about-logos'); ?>
<?php get_template_part('partials/global/cta'); ?>

<!-- popups persons -->

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

<div id="person-<?php echo $i ?>" class="person-popup__wrapper">
    <div class=" person-popup">
        <div class="person-popup__photo" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
        </div>
        <div class="person-popup__content relative">
            <div class="popup__close">
                <svg xmlns="http://www.w3.org/2000/svg" width="6.483" height="6.484" viewBox="0 0 6.483 6.484">
                    <g id="x" transform="translate(-4386.892 -2157.914) rotate(-45)">
                        <line id="Line_25" data-name="Line 25" x2="7.669" transform="translate(1572.291 4632.461)"
                            fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                        <line id="Line_26" data-name="Line 26" x2="7.669"
                            transform="translate(1576.125 4628.627) rotate(90)" fill="none" stroke="#f9f2e5"
                            stroke-width="1.5" />
                    </g>
                </svg>

            </div>
            <!-- top -->
            <div>
                <p class="text-[28px] text-light"><?php echo $name_surname ?></p>
                <div class="flex gap-6 mt-8">
                    <a href="<?php echo $behance ?>" class="btn btn--dark max-md:w-[164px] group">
                        <span>Behance</span>
                        <svg class="relative hidden lg:flex top-0 transition-all"
                            style="transform: scale(.75) rotate(-90deg);" xmlns=" http://www.w3.org/2000/svg"
                            width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                            <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                transform="translate(0 7.496) rotate(-45)"
                                class="dark:fill-light fill-lightmode_text group-hover:fill-light" />
                        </svg>

                    </a>

                    <a href="<?php echo $linkedin ?>" class="btn btn--dark max-md:w-[164px] group">
                        <span>LinkedIn</span>

                        <svg class="relative hidden lg:flex top-0 transition-all"
                            style="transform: scale(.75) rotate(-90deg);" xmlns=" http://www.w3.org/2000/svg"
                            width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
                            <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                transform="translate(0 7.496) rotate(-45)"
                                class="dark:fill-light fill-lightmode_text group-hover:fill-light" />
                        </svg>

                    </a>
                </div>
            </div>
            <!-- bottom -->
            <div>
                <div class="flex items-center justify-start max-lg:mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z"
                            transform="translate(0 8) rotate(-90)" fill="#ef4123"></path>
                    </svg>
                    <div class="text-[14px] text-red pl-[18px] "><?php echo $role ?></div>
                </div>
                <div class="mt-8">
                    <p class="dark:text-light text-lightmode_texttext-[16px]"><?php echo $excerpt ?></p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    endwhile;
else :
endif; ?>


<?php get_footer() ?>