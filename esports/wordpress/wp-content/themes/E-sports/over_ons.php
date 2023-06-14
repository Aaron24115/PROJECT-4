<?php /* Template Name: Overons */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php wp_head(); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <h1 class="Team"> <?php echo get_the_title(); ?><h1>
    <p> <?php echo get_the_content(); ?> </p>

    <div class="footer"><?php get_footer(); ?></div>

   
    <footer class="footer2">
  <a href="https://www.youtube.com" target="_blank">
<img class="youtube" src="<?php echo get_template_directory_uri(); ?>../img/youtube.jpeg" alt="youtube_logo">
</a>
<a href="https://www.instagram.com/vic_iousvultures/" target="_blank">
<img class="insta" src="<?php echo get_template_directory_uri(); ?>/img/Instagram.png" alt="insta_logo">
</a>
<a href="https://www.twitter.com" target="_blank">
<img class="twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.jpg" alt="twitter_logo">
</a>
</footer>

    
</body>
</html>