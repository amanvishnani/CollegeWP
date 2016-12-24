<?php
/**
 * Created by PhpStorm.
 * User: Aman
 * Date: 12/24/2016
 * Time: 9:52 PM
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'sub-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );