<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title(''); ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="container">

    <div class="logo"><a href="/"><img src="" /></a></div>

    <div class="top_info">
      <h3>CALL: <a href="tel:11111">111111</a></h3>
      <p><a href="email@domain.com">Email us</a></p>
    </div>

    <div class="menu">
      <nav class="top_navigation">
        <button id="mobile_nav_button"><i class="fas fa-bars"></i><i class="fas fa-times"></i></button>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav>
    </div>


  </div>

</header>



