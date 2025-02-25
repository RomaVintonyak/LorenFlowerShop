<?php
/**
 * Template Name: About Us
 */
?>
   <?php get_header();?>
   <?php get_template_part('templates/intro'); ?>
   <!--/.about us-->
   <section class="about__us">
      <div class="container">
         <div class="about__content">
            <div class="about__content--title">
               <h3>
                  <?php the_title(); ?>
               </h3>
            </div><!--/.title-->
            <div class="about__content--text">
               <?php
                  if(have_rows('bloky_tekstu')):
                     while(have_rows('bloky_tekstu')) : the_row();
                     $textLine = get_sub_field('abzacz_tekstu');
               ?>
                  <p><?php echo $textLine; ?></p>
               <?php
                     endwhile;
                  endif;   
               ?>   
            </div><!--/.text-->
         </div><!--/.-about__content->
      </div><!--/.container-->
   </section><!--/.about__us-->
   <?php get_footer(); ?>