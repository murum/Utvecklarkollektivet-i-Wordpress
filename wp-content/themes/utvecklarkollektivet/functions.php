<?php 

function register_main_nav() {
  register_nav_menu('main-nav', 'Main navigation');
}
add_action( 'init', 'register_main_nav' );