<?php 

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer menu kolumna nr 2 (Oferta)' ));
  }
  add_action( 'init', 'register_my_menu' );

  ?>