<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$fb_link = get_field('facebook_url', 'option');
$linkedin_link = get_field('linkedin_link', 'option');

?>

<footer class="footer">
    <div class="flex flex-col lg:flex-row items-start xl:items-stretch  aside-offset__margin ">
        <!-- 1 -->
        <div
            class="w-full xl:w-4/12  2xl:min-w-[460px] 2xl:max-w-[460px] lg:pr-10 xl:pr-12 xl:border-r-2 xl:dark:border-dark border-lightmode_ef">
            <h3 class="text-[18px] dark:text-light text-lightmode_text mb-[36px] xl:mb-[93px] xl:text-[20px]">Dane
                firmowe</h3>
            <p class="text-dark2 xl:dark:text-light  text-[14px] mb-[26px] xl:mb-[36px] xl:text-[16px] leading-[28px]">
                <?php the_field('company_info', 'option') ?>
            <div>
                <ul class="footer__links mb-[24px] lg:flex-row lg:items-start lg:justify-between xl:justify-start">
                    <div class="flex flex-col ">
                        <!-- privacy policy -->
                        <li class="group">
                            <a target="_blank" href="<?php echo get_privacy_policy_url() ?>"
                                class="lg:whitespace-nowrap flex flex-row-reverse lg:flex-row w-full justify-between lg:justify-start items-center gap-[22px]">
                                <!-- svg for desktop -->
                                <svg class="relative transition-all hidden lg:block  left-0 group-hover:left-[5px]"
                                    xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897"
                                    viewBox="0 0 5.305 8.897">
                                    <path class="dark:fill-[#f9f2e5] fill:lightmode_text" id="Link_Icon"
                                        d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                        transform="translate(0.354 8.543) rotate(-90)" stroke="#f9f2e5"
                                        stroke-width="0.5" />
                                </svg>

                                <!-- svg for mobile -->
                                <svg class=" -rotate-90 w-[11px] lg:hidden" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 14.993 14.993">
                                    <path class="fill-light" id="Arrow_Down"
                                        d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                        transform="translate(0 7.496) rotate(-45)"></path>
                                </svg>
                                <span class="xl:text-[14px] group-hover:underline">Polityka prywatnośći</span>
                            </a>
                        </li>

                        <!--jaroslaw.grycaj.pl -->
                        <li class="group">
                            <a target="_blank" href="https://www.jaroslaw.grycaj.pl"
                                class="lg:whitespace-nowrap flex flex-row-reverse lg:flex-row w-full justify-between lg:justify-start items-center gap-[22px]">
                                <!-- svg for desktop -->
                                <svg class="relative transition-all hidden lg:block  left-0 group-hover:left-[5px]"
                                    xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897"
                                    viewBox="0 0 5.305 8.897">
                                    <path class="dark:fill-[#f9f2e5] fill:lightmode_text" id="Link_Icon"
                                        d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                        transform="translate(0.354 8.543) rotate(-90)" stroke="#f9f2e5"
                                        stroke-width="0.5" />
                                </svg>

                                <!-- svg for mobile -->
                                <svg class=" -rotate-90 w-[11px] lg:hidden" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 14.993 14.993">
                                    <path class="fill-light" id="Arrow_Down"
                                        d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                        transform="translate(0 7.496) rotate(-45)"></path>
                                </svg>
                                <span class="xl:text-[14px] group-hover:underline">jaroslaw.grycaj.pl</span>
                            </a>
                        </li>

                    </div>
                    <div class="xl:pl-10 2xl:pl-20">
                        <!--facebook -->
                        <li class="group">
                            <a class="lg:whitespace-nowrap flex flex-row-reverse lg:flex-row w-full justify-between lg:justify-start items-center gap-[22px]"
                                href="<?php echo $fb_link ?>">
                                <!-- svg for desktop -->
                                <svg class="hidden lg:flex fill-red stroke-red group-hover:left-[5px] relative left-0 transition-all"
                                    xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897"
                                    viewBox="0 0 5.305 8.897">
                                    <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                        transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5"></path>
                                </svg>

                                <!-- svg for mobile -->
                                <svg class=" -rotate-90 w-[11px] lg:hidden" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 14.993 14.993">
                                    <path class="fill-light" id="Arrow_Down"
                                        d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                        transform="translate(0 7.496) rotate(-45)"></path>
                                </svg>
                                <span class="xl:text-[14px] group-hover:underline lg:text-red">Facebook</span>
                            </a>
                        </li>

                        <!--linkedin -->
                        <li class="group">
                            <a class="lg:whitespace-nowrap flex flex-row-reverse lg:flex-row w-full justify-between lg:justify-start items-center gap-[22px]"
                                href="<?php echo $linkedin_link ?>">
                                <!-- svg for desktop -->
                                <svg class="hidden lg:flex fill-red stroke-red group-hover:left-[5px] relative left-0 transition-all"
                                    xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897"
                                    viewBox="0 0 5.305 8.897">
                                    <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                        transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5"></path>
                                </svg>

                                <!-- svg for mobile -->
                                <svg class=" -rotate-90 w-[11px] lg:hidden" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 14.993 14.993">
                                    <path class="fill-light" id="Arrow_Down"
                                        d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
                                        transform="translate(0 7.496) rotate(-45)"></path>
                                </svg>
                                <span class="xl:text-[14px] group-hover:underline lg:text-red">LinkedIn</span>
                            </a>
                        </li>

                    </div>
                </ul>
            </div>
            <div class="divider border-b-2 dark:border-b-dark border-b-lightmode_ef lg:hidden"></div>
        </div>
        <!-- 2 -->
        <div
            class="w-full xl:w-4/12  2xl:w-full 2xl:min-w-[488px] 2xl:max-w-[488px] mt-[36px] lg:mt-0 lg:pl-10 xl:pl-20 2xl:pl-[124px] xl:border-r-2 xl:dark:border-dark border-lightmode_ef">
            <h3 class="text-[18px] dark:text-light text-lightmode_text mb-[24px] xl:text-[20px] xl:mb-[93px]">Oferta
            </h3>



            <ul class="footer__links mb-[24px]">
                <li class="group"><a class="flex items-center gap-[22px] group-hover:text-red group-hover:underline"
                        href="<?php echo get_home_url('', 'projektowanie-logo') ?>"><svg
                            class="hidden xl:flex fill-red stroke-red group-hover:left-[5px] relative left-0 transition-all"
                            xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897" viewBox="0 0 5.305 8.897">
                            <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5" />
                        </svg>Projektowanie Logo</a></li>
                <li class="group"><a class="flex items-center gap-[22px] group-hover:text-red group-hover:underline"
                        href=" <?php echo get_home_url('', 'projekty-reklamowe') ?>"><svg
                            class="hidden xl:flex fill-red stroke-red group-hover:left-[5px] relative left-0 transition-all"
                            xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897" viewBox="0 0 5.305 8.897">
                            <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5" />
                        </svg>Projekty reklamowe</a></li>
                <li class="group"><a class="flex items-center gap-[22px] group-hover:text-red group-hover:underline"
                        href="<?php echo get_home_url('', 'strony-internetowe') ?>"><svg
                            class="hidden xl:flex fill-red stroke-red group-hover:left-[5px] relative left-0 transition-all"
                            xmlns="http://www.w3.org/2000/svg" width="5.305" height="8.897" viewBox="0 0 5.305 8.897">
                            <path id="Link_Icon" d="M7.687,0,4.095,3.592h0L.5,0,0,.5l4.1,4.1L8.19.5Z"
                                transform="translate(0.354 8.543) rotate(-90)" stroke-width="0.5" />
                        </svg>Strony internetowe</a></li>
            </ul>
            <div class="divider border-b-2 dark:border-b-dark border-b-lightmode_ef lg:hidden"></div>
        </div>
        <!-- 3 -->
        <div class="w-full 2xl:w-full  xl:w-4/12 xl:pl-20 2xl:pl-[147px]">
            <h3 class="text-[18px] dark:text-light text-lightmode_text mt-[24px] lg:mt-0 xl:text-[20px] xl:mb-[93px]">
                Zamów Projekt</h3>
            <p class="text-dark2 text-[14px] xl:text-[16px] xl:dark:text-light text-lightmode_textmt-[36px]">
                <?php the_field('working_hours', 'option') ?>
            </p>
            <div class="xl:mt-[56px]">

                <a href="<?php echo get_home_url('', 'kontakt') ?>"
                    class="btn btn--red whitespace-nowrap max-lg:max-h-[40px] max-xl:mt-[24px] max-lg:w-full max-lg:rounded-[2px] xl:min-w-[234px]">
                    <span>Zamów projekt</span>

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

            </div>
            <div class="divider lg:hidden border-b-2 dark:border-b-dark border-b-lightmode_ef mt-[24px] mb-[14px]">
            </div>
            <p class="text-dark2 text-[13px] text-center lg:hidden">All Right Reserved <br />
                © 2017 - 2023</p>
        </div>
    </div>

</footer>
</main>

</section>

<?php wp_footer(); ?>

<!-- back to top  -->
<div
    class="back-to-top w-[52px] xl:w-[80px] h-[52px] xl:h-[80px] dark:bg-dark bg-lightmode_ef flex items-center justify-center rounded-full fixed bottom-6 rotate-180 right-6 cursor-pointer group hover:bg-red trnsition-all z-[9999]">

    <!-- mobile arrow -->
    <svg class="lg:hidden" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.687 1L5.095 4.592L1.5 1L1 1.5L5.1 5.6L9.19 1.5L8.687 1Z" fill="#F9F2E5" stroke="#F9F2E5"
            stroke-width="0.5" />
    </svg>

    <!-- arrow desktop -->
    <svg class="relative hidden lg:flex top-0 group-hover:top-[4px] transition-all" xmlns=" http://www.w3.org/2000/svg"
        width="14.993" height="14.993" viewBox="0 0 14.993 14.993">
        <path id="Arrow_Down" d="M0,0V10.6H10.6V9.3H2.223L10.594.929,9.674.008,1.3,8.38V0Z"
            transform="translate(0 7.496) rotate(-45)"
            class="dark:fill-light fill-lightmode_text group-hover:fill-light" />
    </svg>

</div>

<!-- handle pricing-->
<?php get_template_part('partials/global/pricing'); ?>

</body>

</html>