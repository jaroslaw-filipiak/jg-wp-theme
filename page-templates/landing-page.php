<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<?php get_template_part('partials/landing/landing-hero'); ?>
<?php get_template_part('partials/landing/landing-slider'); ?>
<?php get_template_part('partials/landing/landing-benefits'); ?>
<?php get_template_part('partials/landing/landing-why-worth'); ?>
<?php get_template_part('partials/landing/landing-who-we-are'); ?>

<!-- TODO: testimonials -->
<?php get_template_part('partials/global/testimonials'); ?>
<?php get_template_part('partials/global/logos'); ?>

<?php get_template_part('partials/global/cta'); ?>


<?php get_footer() ?>