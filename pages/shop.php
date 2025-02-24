<?php
/**
 * Template Name: Shop page
 */
?>
   <?php get_header();?>
   <?php get_template_part('templates/intro'); ?>
   <!--works-->
   <section class="works">
      <div class="container">
         <div class="works__row">
            <div class="works__row--title">
               <h3>
                  <?php the_title(); ?>
               </h3>
            </div><!--/.title-->
            <div class="works__row--content">
               

            
            
            
               <div class="product__card">
                  <div class="product__card--img">
                  <a href="../img/works/work2.jpg" data-lightbox="image-1" data-title="Букет з 21 троянди">
                     <img src="../img/works/work2.jpg" alt="flowers" class="img">
                  </a>
                  </div><!--/.img-->
                  <div class="product__card--title">
                  <h3 class="_title">
                     Букет з 21 троянди
                  </h3>
                  <p class="_description">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  </div><!--/.title-->
                  <div class="product__card--price">
                  <p class="_price">
                     3700
                  </p>
                  <p>
                     грн.
                  </p>
                  </div><!--/.price-->
                  <div class="product__card--button">
                  <button type="button" class="_byePosition" data-button="byePosition">
                     Замовити
                  </button>
                  </div><!--/.button-->
               </div><!--/.product__card-->
               
      
            </div><!--/.content-->
         </div><!--/.works__row-->
      </div><!--/.container-->
   </section><!--/.works-->
   <?php get_template_part('templates/modal'); ?>
   <?php get_footer(); ?>