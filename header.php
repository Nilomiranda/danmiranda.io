<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>
    <?php
      $title = the_title('', '', false);
      if( is_home() ) {
        echo $page_title = 'Danilo Miranda | Web Developer';
      } else {
        echo 'Danilo Miranda | ' . $title;
      }
    ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700|Zilla+Slab:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/post.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/page.css">
  <?php wp_head() ?>
</head>
<body>
  <div class="main-wrapper">
    <div class="banner">
    </div>
    <nav class="menu-navigation-mob">
      <i id="menu-button" class="fas fa-bars"></i>
    </nav>
    <nav class="menu-navigation">
        <?php 
          $args = array(
            'menu' => 'principal',
            'menu_class' => 'menu-options',
            'container' => false
          );
          wp_nav_menu($args);
        ?>     
    </nav>