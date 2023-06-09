<?php /* Template Name: contact */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php wp_head(); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <h1 class="teamleden-namen"> <?php echo get_the_title(); ?><h1>
    <p> <?php echo get_the_content(); ?> </p>
    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
    <?php get_footer(); ?>
    
</body>
</html>
