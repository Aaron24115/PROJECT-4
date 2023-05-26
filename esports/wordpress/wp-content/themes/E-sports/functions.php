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