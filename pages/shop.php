<?php
/**
 * Template Name: Shop page
 */
?>
   <?php get_header();?>
   <!--works-->
   <section class="works">
      <div class="container">
         <div class="works__row">
            <div class="works__row--title">
               <h3>
                  <?php the_title(); ?>
               </h3>
            </div><!--/.title-->
            <div class="works__row--sort">
               <div class="sort__title">
                  <h3>
                     <?php the_field('zagolovok_bloku_sortuvannya'); ?>
                  </h3>
               </div><!--/.sort__title-->
               <div class="sort__block">
                  <h4>
                     <?php the_field('tekst_oblasti_sortuvannya'); ?>
                  </h4>
                  <div class="sort__block--radio">
                     <input type="radio" id="lowPrice" name="sorter">
                     <label for="lowPrice"><?php the_field('vid_najmenshogo'); ?></label>
                     <input type="radio" id="heightPrice" name="sorter">
                     <label for="heightPrice"><?php the_field('vid_najbilshogo'); ?></label>
                  </div><!--/.radio-->
               </div><!--/.sort__block-->
            </div><!--/.sort-->
            <div class="works__row--content">
            <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
                  $args = array(
                     'post_type'      => 'seting',
                     'posts_per_page' =>  12,
                     'paged'          => $paged,
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
            <div class="works__row--pagination">
               <?php
                  $GLOBALS['wp_query']->max_num_pages = $flowerPosts->max_num_pages;
                  $args = array(
                     'show_all'     => false,
                     'end_size'     => 2,
                     'mid_size'     => 1,
                     'prev_next'    => true,
                     'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                     'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                     'add_args'     => false,
                     'class'        => 'pagination',
                  );
                  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
                  function my_navigation_template( $template, $class ){
                     return '
                     <nav class="%1$s" role="navigation">
                        <div class="pagination__links">%3$s</div>
                     </nav>
                     ';
                  }
                  the_posts_pagination($args);
               ?>
            </div><!--/.pagination-->
         </div><!--/.works__row-->
      </div><!--/.container-->
   </section><!--/.works-->
   <?php get_template_part('templates/modal'); ?>
   <?php get_footer(); ?>