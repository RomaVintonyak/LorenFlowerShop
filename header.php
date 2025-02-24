   <!DOCTYPE html>
   <html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <!--meta-->
      <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
      <meta name="keywords" content="<?php the_field('klyuchovi_frazy_seo', 'option'); ?>" />
      <meta name="google" content="notranslate" />
      <meta name="author" content="Roman Coder" />
      <meta name="robots" content="index, follow" />
      <!--disable format detection (iPhone / IPod / IPad) -->
      <meta name="format-detection" content="telephone=no" />
      <!--BlackBerry-->
      <meta http-equiv="x-rim-auto-match" content="none" />
      <!--Fav Icon-->
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
      <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.svg" />
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" />
      <meta name="apple-mobile-web-app-title" content="LOREN" />
      <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest" />
      <!--Title-->
      <title>
      <?php
         if(is_404()){
            echo bloginfo('name') . ' &mdash; ' . 'Такої сторінки не існує';
         }else{
            echo bloginfo('name');
            echo ' &mdash; ';
            echo bloginfo('description');
         }
      ?>
      </title>
      <?php wp_head(); ?>
   </head>
   <body>
   <!--header-->
   <header class="header" id="header">
      <div class="container">
         <div class="header__row">
         <div class="header__row--brand">
            <a href="<?php echo home_url(); ?>">
               <img src="<?php the_field('logotyp', 'option'); ?>" alt="logo" class="img">
            </a>
         </div><!--/.brand-->
         <div class="header__row--phone">
            <?php
               $phoneNum = get_field('nomer_telefonu', 'option');
               $phoneNumGap = str_replace(" ", '', $phoneNum);
            ?>
            <a href="tel:<?php echo $phoneNumGap; ?>"><?php echo $phoneNum; ?></a>
         </div><!--/.phone-->
         <div class="header__row--menu">
            <div class="burger__btn">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div><!--/.burger__btn-->
         </div><!--/.menu-->
         </div><!--/.header__row-->
      </div><!--/.container-->
   </header><!--/.header-->
   <!--menu-->
   <section class="menu">
      <div class="menu__title">
         <h3>
            <?php the_field('nazva_bloku_menyu', 'option'); ?>
         </h3>
      </div><!--/.menu__title-->
      <div class="menu__content">
         <nav class="nav__menu">
         <?php 
            wp_nav_menu(array(
            'theme_location'  => 'primary',
            'menu'            => 'Menu Header', 
            'container'       => 'ul',
            'menu_class'      => 'main__menu', 
            'echo'            => true,
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            ));
         ?><!--/.main__menu-->
         </nav><!--/.nav__menu-->
      </div><!--/.menu__content-->
      <div class="menu__footer">
         <div class="menu__footer--phone">
            <a href="<?php echo $phoneNumGap; ?>"><?php echo $phoneNum; ?></a>
         </div><!--/.phone-->
         <div class="menu__footer--social">
            <?php 
               if( have_rows('soczialni_merezhi', 'option') ):
                  while( have_rows('soczialni_merezhi', 'option') ) : the_row();
                     if( have_rows('mesendzhery', 'option') ):
                        while( have_rows('mesendzhery', 'option') ) : the_row();
                           $socialURL = get_sub_field('posylannya_merezhi');
                           $socialIcon = get_sub_field('ikonka_merezhi');
               ?>
                        <a href="<?php echo $socialURL; ?>" target="_blank">
                           <?php echo $socialIcon; ?>
                        </a>
                  <?php
                        endwhile;
                     endif;
                  ?>
            <?php
                  endwhile;
               endif;
            ?>
         </div><!--/.social-->
      </div><!--/.menu__footer-->
   </section>