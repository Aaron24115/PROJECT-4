<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>

<?php wp_head(); ?>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<h1 class="tekst_center"> <?php echo get_the_title(); ?><h1>
    <div class="img_naast_elkaar">
    <p class="tekst"> <?php echo get_the_content(); ?> </p>
    </div>

   
   
  <div class="footer">  
    <?php get_footer(); 
    echo "<h3>Deze pagina is bijgewerkt op ".date("d-m-Y")."</h3>";
    ?> 
</div>

   




















    
</body>
</html>