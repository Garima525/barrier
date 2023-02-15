<!DOCTYPE html>
<html>

<head>
   <title>Home</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap"
      rel="stylesheet">
   <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />
   <style></style>
</head>

<body <?php echo body_class(); ?>>
   <main <?php if(is_product_category() || is_product()){?> class="product-page"<?php } ?>>
      <div class="main-inner"></div>
      <?php if(is_product_category()  || is_product()){?>
         <div class="right-inner"></div>
      <?php } ?>
      <header class="fixed-top">
         <div class="container">
            <nav class="navbar">
               <?php
               if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
               }
               ?>
               <!-- <a href="/" class="logo article">
                  <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid">
               </a> -->
               <?php 
                  /*wp_nav_menu( 
                     array( 
                        'menu' => 'Main menus', 
                        'container' => '', 
                        'container_class' => '',
                        'menu_class' => 'article pt-4 nav-links dropdown',
                        'add_li_class'  => 'items',
                        'add_parent_li_class' => 'dropdown-toggle'
                     ) 
                  );*/

                  wp_nav_menu( 
                     array( 
                        'menu' => 'Main menus', 
                        'container' => '',
                        'menu_class' => 'article pt-4 nav-links dropdown',
                        'add_li_class'  => 'items',
                        'add_parent_li_class' => 'dropdown-toggle',
                        'walker'  => new Child_Wrap()
                     ) 
                  );
               ?>
               <!-- <ul class="article pt-4 nav-links dropdown">
                  <li class="items item1 dropdown-toggle" data-bs-toggle="dropdown">Product Catagories<i
                        class="fa fa-chevron-down ms-2"></i></li>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Link 1</a></li>
                     <li><a class="dropdown-item" href="#">Link 2</a></li>
                     <li><a class="dropdown-item" href="#">Link 3</a></li>
                  </ul>
                  <li class="items">
                     WholeSale
                  </li>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Link 1</a></li>
                     <li><a class="dropdown-item" href="#">Link 2</a></li>
                     <li><a class="dropdown-item" href="#">Link 3</a></li>
                  </ul>
                  <li class="items"> Custom Product </li>
                  <li class="items">About Us </li>
                  <li class="items">Contact Us</li>
               </ul> -->
            </nav>
         </div>
      </header>

      <div class="topnav" id="myTopnav">
         <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
               the_custom_logo();
            }
            ?>
            <!-- <a href="/" class="logo article">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid">
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
               aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
            </button>

            <?php
               wp_nav_menu( 
                  array( 
                     'menu' => 'Main menus', 
                     'container' => 'div',
                     'container_class' => 'collapse navbar-collapse',
                     'container_id' => 'navbarTogglerDemo01',
                     'menu_class' => 'navbar-nav mt-4 ms-auto',
                     'add_li_class'  => 'items',
                     'add_parent_li_class' => 'dropdown-toggle',
                     'walker'  => new Child_Wrap()
                  ) 
               );

               ?>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">



               <!-- <ul class="navbar-nav mt-4 ms-auto">
                  <li class="items item1 dropdown-toggle" data-bs-toggle="dropdown">Product Catagories<i
                        class="fa fa-chevron-down ms-2"></i></li>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Link 1</a></li>
                     <li><a class="dropdown-item" href="#">Link 2</a></li>
                     <li><a class="dropdown-item" href="#">Link 3</a></li>
                  </ul>
                  <li class="items">
                     WholeSale
                  </li>
                  <li class="items"> Custom Product </li>
                  <li class="items">About Us </li>
                  <li class="items">Contact Us</li>
               </ul> -->
            </div>
         </nav>
      </div>
      <?php wp_head(); ?>