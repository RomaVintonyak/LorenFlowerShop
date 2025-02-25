<?php
/**
 * Template Name: Dostavka&Oplata
 */
?>
   <?php get_header();?>
   <?php get_template_part('templates/intro'); ?>
   <!--/.shipping-->
   <section class="shipping">
      <div class="container">
         <div class="shipping__content">
            <div class="shipping__content--title">
               <h3>
                  <?php the_title(); ?>
               </h3>
            </div><!--/.title-->
            <div class="shipping__content--text">
               <?php
                  if(have_rows('abzaczy_tekstu')):
                     while(have_rows('abzaczy_tekstu')) : the_row();
                     $textBlock = get_sub_field('tekstove_pole');
               ?>
                  <p><?php echo $textBlock; ?></p>
               <?php
                     endwhile;
                  endif;   
               ?>
            </div><!--/.text-->
         </div><!--/.-shipping__content->
      </div><!--/.container-->
   </section><!--/.shipping-->
   <?php get_footer(); ?>




