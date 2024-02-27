<?php /* Template Name: O firmie */ ?>
<?php get_header(); ?>

<?php get_template_part('partials/about/about-hero'); ?>
<?php get_template_part('partials/about/persons-slider'); ?>
<?php get_template_part('partials/about/who-we-are'); ?>
<?php get_template_part('partials/about/how-we-work'); ?>
<?php get_template_part('partials/about/about-accordions'); ?>

<?php get_template_part('partials/about/about-logos'); ?>
<?php get_template_part('partials/about/about-cta'); ?>

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
                    </div>
                    <!-- top -->
                    <div>
                        <p class="text-[28px] text-light"><?php echo $name_surname ?></p>
                        <div class="flex gap-6 mt-8">
                            <a href="<?php echo $behance ?>" class="btn btn--dark max-md:w-[164px]">
                                <span>Behance</span>
                                <!-- TODO: icon next -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.708" height="10.219" viewBox="0 0 13.708 10.219">
                                    <g id="Więcej_Icon" transform="translate(-782.5 -1015.043)">
                                        <line id="Line_6" data-name="Line 6" x2="13.708" transform="translate(782.5 1015.793)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                        <line id="Line_7" data-name="Line 7" x2="13.708" transform="translate(782.5 1020.153)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                        <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(782.5 1024.512)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                    </g>
                                </svg>

                            </a>

                            <a href="<?php echo $linkedin ?>" class="btn btn--dark max-md:w-[164px]">
                                <span>LinkedIn</span>
                                <!-- TODO: icon next -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.708" height="10.219" viewBox="0 0 13.708 10.219">
                                    <g id="Więcej_Icon" transform="translate(-782.5 -1015.043)">
                                        <line id="Line_6" data-name="Line 6" x2="13.708" transform="translate(782.5 1015.793)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                        <line id="Line_7" data-name="Line 7" x2="13.708" transform="translate(782.5 1020.153)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                        <line id="Line_8" data-name="Line 8" x2="6.294" transform="translate(782.5 1024.512)" fill="none" stroke="#f9f2e5" stroke-width="1.5" />
                                    </g>
                                </svg>

                            </a>
                        </div>
                    </div>
                    <!-- bottom -->
                    <div>
                        <div class="flex items-center justify-start max-lg:mt-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                <path id="Arrow_Icon" d="M0,0V8H8V7.018H1.677L7.994.7,7.3.006.983,6.323V0Z" transform="translate(0 8) rotate(-90)" fill="#ef4123"></path>
                            </svg>
                            <div class="text-[14px] text-red pl-[18px] "><?php echo $role ?></div>
                        </div>
                        <div class="mt-8">
                            <p class="text-light text-[16px]"><?php echo $excerpt ?></p>
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