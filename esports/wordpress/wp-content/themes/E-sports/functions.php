<?php

add_action("wp_enqueue_scripts", "eigen_css");

function eigen_css(){
    wp_enqueue_style("custom_css", get_template_directory_uri() ."/style.css" );
}
?>

<?php

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => ( 'Header Menu' ),
        'extra-menu' => ( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   ?>

<?php 

function eigen_widgets_init() {
    register_sidebar( array(
        'name'          => 'Widgetized Area',
        'id'            => 'widgetized-area',
        'before_widget' => '<div class="widgetized-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgetized-area-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'eigen_widgets_init' );

?>

<?php 

function toekomende_matches(){



  
}

?>