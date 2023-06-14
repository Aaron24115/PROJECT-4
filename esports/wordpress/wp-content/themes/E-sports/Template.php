<?php /* Template Name: Esports */ ?>

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
    <h1 class="teamleden-namen"> <?php echo get_the_title(); ?><h1>
    <p class="Ramino"> <?php echo get_the_content(); ?> </p>
    <div class="footer"> <?php get_footer(); ?></div>

    <h1 class="leeg"></h1>
    <footer class="footer3">
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
</h1>

</body>
</html>