<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>




<?php wp_head(); ?>



<h1> <?php echo get_the_title(); ?><h1>

<?php get_footer();?>


    
</body>
</html>