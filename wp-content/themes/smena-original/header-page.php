<head>

   <!--- basic page needs
     ================================================== -->
     <meta charset="utf-8">
     <title>С.О.К. СМЕНА</title>
     <meta name="description" content="">  
     <meta name="author" content="">

   <!-- mobile specific metas
     ================================================== -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- favicons
     ================================================== -->
     <link rel="shortcut icon" href="favicon.png" >

   <!-- CSS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Roboto+Mono|Source+Sans+Pro|Ubuntu&display=swap" rel="stylesheet">
    <lin rel="stylesheet" href="http://news/wp-content/themes/smena-original/assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

    <link href="<?= bloginfo('template_directory'); ?>/assets/css/login.css" rel="stylesheet"/>

    <?php wp_head(); ?>
    
  </head>


  <body id="top">


    <!-- header
      ================================================== -->
      <header class="s-header">

        <nav class="header-nav">

          <a href="#0" class="header-nav__close" title="Закрыть"><span>Закрыть</span></a>

          <div class="header-nav__content">

            <div class="logo">
              <a href="<?php echo home_url();?>">
                <?php bloginfo('name'); ?>
              </a>
            </div>
            <?php wp_nav_menu(array(
                'theme_location'  => 'top-right',
                'container'       => 'div', 
                'container_class' => 'header-nav__list', 
                'container_id'    => '',
            )); ?>
            
         <p>В меню вы можете быстро перемещаться по странице и всему сайту</p>

         <ul class="header-nav__social">
           <li><a href="https://www.facebook.com/smena67/"><i class="fa fa-facebook"></i></a></li>
           <li><a href="https://www.instagram.com/smena67/"><i class="fa fa-instagram"></i></a></li>
           <li><a href="https://vk.com/smena67"><i class="fa fa-vk"></i></a></li>
         </ul>

       </div> <!-- end header-nav__content -->

     </nav>  <!-- end header-nav -->

     <a class="header-menu-toggle" href="#0">
      <span class="header-menu-text">Меню</span>
      <span class="header-menu-icon" class="header-menu-icon-opaque"></span>
    </a>

    </header> <!-- end s-header -->