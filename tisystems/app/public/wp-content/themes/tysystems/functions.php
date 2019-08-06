<?php

//CUANDO EL TEMAS ES ACTIVADO
function tisystems_setup(){
    //HABILITAR IMAGENES DESTACADAS
    add_theme_support('post-thumbnails');

    //agregar imagenes de tamaño personalizado
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',996,664,true);

}
add_action('after_setup_theme','tisystems_setup');



//menus de navegacion, agregar más utilizando el arreglo
function tisystems_menus(){

    register_nav_menus(array(
        'menu-principal'=> __("Menu Principal",'TISystems')
    ));
}

 add_action('init','tisystems_menus');
 /*Scripts y Styles*/

 function tisystems_scripts_styles(){
    /*cargando normalize.css*/
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    /*google fonts*/
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
  
    /*agregando slick_nav hoja de estilos*/
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css',array(),'1.0.0');

    /*hoja de estilo principal*/
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0');

    /*cargar archivos javascripts*/
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js',array('jquery','slicknavJS'),'1.0.0',true);
    


 }
 add_action('wp_enqueue_scripts','tisystems_scripts_styles');