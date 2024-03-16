<?php

/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafikonline
 */

$theme_dir = get_theme_file_uri();

?>

<section class="aside-offset__margin">
    <div class="breadcrumbs">

        <?php // the_breadcrumb() ?>
        <ul>
            <li><a href="<?php echo get_home_url() ?>">Studio</a></li>

            <li class="breadcrumb__last">
                <a href="#"><?php echo get_the_title() ?></a>
            </li>
        </ul>
    </div>
</section>