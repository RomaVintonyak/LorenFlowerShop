      

   <!--footer-->
   <footer class="footer">
      <div class="container">
         <div class="footer__row">
         <div class="footer__row--brand">
            <a href="<?php echo home_url(); ?>">
               <img src="<?php the_field('logotyp', 'option'); ?>" alt="logo" class="img">
            </a>
         </div><!--/.brand-->
         <div class="footer__row--menu">
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
         </div><!--/.menu-->
         <div class="footer__row--location">
            <div class="location__text">
               <?php
                  if(have_rows('tekst_pidval', 'option')):
                     while(have_rows('tekst_pidval', 'option')) : the_row();
                     $textLine = get_sub_field('pole_tekstu');
               ?>
                  <p><?php echo $textLine; ?></p>
               <?php
                     endwhile;
                  endif;   
               ?>
               <p>
                  <?php the_field('nomer_telefonu', 'option'); ?>
               </p>
            </div><!--/.location__text-->
            <div class="location__img">
               <?php
                  if(have_rows('grupa_ikonok_oplaty', 'option')):
                     while(have_rows('grupa_ikonok_oplaty', 'option')) : the_row();
                     $imgLine = get_sub_field('ikonka_oplaty');
               ?>
                  <img src="<?php echo $imgLine; ?>" alt="icon" class="img">
               <?php
                     endwhile;
                  endif;
               ?>
            </div><!--/.location__img-->
         </div><!--/.location-->
         </div><!--/.footer__row-->
         <div class="footer__line"></div><!--/.footer__line-->
         <div class="footer__copyright">
         <p>
            Loren Доставка квітів в Бурштині &copy;<script>document.write(new Date().getFullYear());</script>
         </p>
         </div><!--/.footer__copyright-->
      </div><!--/.container-->
   </footer><!--/.footer-->
   <!--backto top button-->
   <div class="backtop">
      <button type="button">
         <i class="fas fa-arrow-up"></i>
      </button>
   </div><!--/.backtop-->
   <?php wp_footer(); ?>
   </body>
   </html>