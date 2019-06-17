<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 10:55 AM
 */


//Aqui el menu

if(function_exists('register_nav_menus')){
    register_nav_menus (array('primero' => 'Menu principal superior'));
}

//Especial para los atributos de los link del menu

    add_filter('nav_menu_link_attributes', 'clases_para_link', 10, 3 );

    function clases_para_link($atts, $item, $args) {
        $class = 'nav-link text-white';
        $atts['class'] = $class;
        return $atts;
    }
    if( function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }
?>


