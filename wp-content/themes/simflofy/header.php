<!DOCTYPE html>
<html>
<head>

    <title>Simflofy</title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel = "stylesheet" type = "text/css" href = "<?php echo get_template_directory_uri(); ?>/style.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600|Source+Sans+Pro:300,400,700" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/hamburgers.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
	<?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
  <section id="mobmenu">
    <div class="container">
     <?php get_template_part( 'parts/content', 'block-navicons' ); ?>

    <?php wp_nav_menu( array( 'theme_location' => 'secondNav' ) ); ?>
     </div> 
  </section>

<header>
  <section class="container">
    <a href="<?php echo get_site_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png"></a>
    <nav>
    	<?php wp_nav_menu( array( 'theme_location' => 'secondNav' ) ); ?>
    	<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>

    </nav>
    <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
  </section>

</header>
<section id="main">