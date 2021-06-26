<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php wp_title(''); ?></title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" rel="stylesheet">
 

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <?php wp_head();?>

</head>

<body <?php body_class(); ?>>

<header>
  <div class="container">

    <div class="inner">
      <div class="header_center">Catskill Homes for Over 40 Years</div>

      <div class="logo"><a href="/"><img src="/wp-content/themes/moore/images/logoMoore.png" /></a></div>


      <div class="header_rigth">
        <a href="tel:18006750626">1-800-675-0626</a><br/>
        <a href="mailto:contact@mooreshomes.com">Email Us</a><br/>
        State Route 23<br/>
        Prattsville, NY 12468
      </div>
    </div>

    <div class="navigations">
      <div class="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
      </div>
        <nav class="hamburguer_navigation">
          <button id="mobile_nav_button"><i class="fas fa-bars"></i><i class="fas fa-times"></i></button>
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div>


  </div>

</header>



