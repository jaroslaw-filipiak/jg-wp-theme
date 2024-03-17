<?php


function remove_menus(){
    remove_menu_page( 'edit.php' );                        //Posts
    remove_menu_page( 'tools.php' );                       //Tools
    remove_menu_page( 'edit-comments.php' );               //Comments
    // remove_menu_page( 'edit.php?post_type=acf-field-group' ); //acf
  }
  add_action( 'admin_menu', 'remove_menus' );