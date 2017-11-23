<?php

function registering_navigations() {
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'footer-menu' => 'Footer Menu'
     )
   );
 }
 add_action( 'init', 'registering_navigations' );