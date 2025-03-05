<?php
   /**
    * Template part for displaying page content
    *
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
                  <?php the_content(); ?>
               </h3>
            </div><!--/.title-->
            <div class="works__row--content">
               <?php
                  $args = array(
                     'post_type'      => 'seting',
                     'post_status'    => 'publish',
                     'posts_per_page' =>  12,
                        'tax_query' => array(
                           array(
                              'taxonomy' => 'seting',
                              'field'    => 'id',
                              'terms'    => '6'
                              )
                           )
                        );
                  $flowerPosts = new WP_Query($args);
               ?>
               <?php if ($flowerPosts->have_posts()) : while ($flowerPosts->have_posts()) : $flowerPosts->the_post(); ?>	
                     <div class="product__card" data-order="<?php the_field('czina_tovaru'); ?>">
                        <div class="product__card--img">
                        <a href="<?php the_field('osnovne_zobrazhennya'); ?>" data-lightbox="roadtrip" data-title="<?php the_title(); ?>">
                           <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="flowers" class="img">
                        </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                        <h3 class="_title">
                           <?php the_title(); ?>
                        </h3>
                        <p class="_description">
                           <?php the_content(); ?>
                        </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                        <p class="_price">
                           <?php the_field('czina_tovaru'); ?>
                        </p>
                        <p>
                           грн.
                        </p>
                        </div><!--/.price-->
                        <div class="product__card--button">
                        <button type="button" class="_byePosition" data-button="byePosition">
                           <?php the_field('tekst_knopky'); ?>
                        </button>
                        </div><!--/.button-->
                     </div><!--/.product__card-->
                     <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?> 
            </div><!--/.content-->
         </div><!--/.works__row-->
      </div><!--/.container-->
   </section><!--/.works-->
   <?php get_template_part('templates/modal'); ?>
   <?php get_footer(); ?>