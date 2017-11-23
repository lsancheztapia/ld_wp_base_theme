<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Template for Bootstrap</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="container">
  <div class="nav_logo">
    <nav>
      <button>Menu</button>
      <?php wp_nav_menu( array( 'menu' => 'main-menu' ) ); ?>
    </nav>
  </div>
  <div class="top_info">
    <h3>CALL: <a href="tel:18006478673">1-800-64-STORE</a></h3>
    <p>(1-800-647-8673)<br>1586 Route 28 West Hurley, NY 12491</p>
    <p><a href="">Email us</a></p>
  </div>
  </div>
</header>



