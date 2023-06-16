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

  <div class="tekst_in_img">
    <h1 class="tekst_center">
      <?php echo get_the_title(); ?>
      <h1>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/apex_logo.jpeg" alt="apex_logo">
  </div>




  <p class="tekst">
    <?php echo get_the_content(); ?>
  </p>


  <footer class="footer2">
    <a href="https://www.youtube.com" target="_blank">
      <img class="youtube" src="<?php echo get_template_directory_uri(); ?>../img/youtube.jpeg" alt="youtube_logo">
    </a>
    <a href="https://www.instagram.com/vic_iousvultures/" target="_blank">
      <img class="insta" src="<?php echo get_template_directory_uri(); ?>/img/Instagram.jpeg" alt="insta_logo">
    </a>
    <a href="https://www.twitter.com" target="_blank">
      <img class="twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.jpg" alt="twitter_logo">
    </a>
  </footer>










  <div class="footer">
    <?php get_footer(); 
   
    ?>
  </div>























</body>

</html>