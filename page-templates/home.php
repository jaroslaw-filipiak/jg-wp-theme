<?php /* Template Name: Strona główna */
?>

<?php get_header(); ?>

<?php get_template_part('partials/home/home-hero'); ?>

<!-- repeater -->
<?php get_template_part('partials/repeater/section'); ?>

<!-- who we are -->
<?php get_template_part('partials/home/who-we-are'); ?>

<!-- testimonials slider -->
<?php get_template_part('partials/global/testimonials'); ?>


<!-- logos slider -->
<?php get_template_part('partials/global/logos'); ?>

<!-- CTA -->
<?php get_template_part('partials/global/cta'); ?>

<?php get_footer() ?>