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
            <?php
               if(have_rows('bloky_tekstu')):
                  while(have_rows('bloky_tekstu')) : the_row();
                  $titleBlock = get_sub_field('zagolovok_bloku_tekstu');
            ?>
            <div class="shipping__content--block">
               <h5>
                  <?php echo $titleBlock; ?>
               </h5>
               <?php
                  if(have_rows('paragraf_bloku_tekstu')):
                     while(have_rows('paragraf_bloku_tekstu')) : the_row();
                     $textBlock = get_sub_field('oblast_tekstu_paragrafa');
               ?>
               <p>
                  <?php echo $textBlock; ?>
               </p>
               <?php
                     endwhile;
                  endif;   
               ?>
            </div><!--/.block-->
            <?php
                  endwhile;
               endif;      
            ?>
         </div><!--/.-shipping__content->
      </div><!--/.container-->
   </section><!--/.shipping-->
   <?php get_footer(); ?>




