<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- HOVER EFFECT -->
  <link rel="stylesheet" href="animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
  <!-- STYLE -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <!-- JS -->
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  // <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  // <script src="jquery.fadethis.js"></script> -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container fixed default-header">

    <!-- <div class="nav-wrapper"> -->
       <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?> 
    <!-- </div> end of nav-wrapper -->
  </div> <!-- /.container -->

  <div class="container fixed responsive-header">

    <!-- <div class="nav-wrapper"> -->
       <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?> 
    <!-- </div> end of nav-wrapper -->
  </div> <!-- /.container -->
</header><!--/.header-->

