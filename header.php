<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <!-- <title>Document</title> -->
  <?php
  wp_head();
  ?>

</head>

<body>

  <div class="container">
    <div class="menu_container">
      <div class="navbar_menu">
        <img src="/wp-content/themes/immob-theme-wp/assets/img/Logo.png" alt="logo_immob">
        <?php wp_nav_menu(['theme_location' => 'menu-header']) ?>

        <button class="button-menu" type="button">
          Get a Quote
        </button>
      </div>

    </div>