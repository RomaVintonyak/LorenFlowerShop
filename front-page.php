<?php
   /**
    * Template part for displaying page content
    *
    */
   ?>
   <?php get_header();?>
   <?php get_template_part('templates/intro'); ?>
   <!--section text-->
   <section class="text">
      <div class="container">
         <div class="text__title">
         <h3>
            <?php the_field('osnovnyj_zagolovok'); ?>
         </h3>
         </div><!--/.text__title-->
         <div class="text__suptitle">
         <p>
            <?php the_content(); ?>
         </p>
         </div><!--/.text__suptitle-->
         <div class="text__coll">
            <?php
               if(have_rows('blok_servisu')):
                  while(have_rows('blok_servisu')) : the_row();
                     if(have_rows('grupa_blokiv')):
                        while(have_rows('grupa_blokiv')) : the_row();
                        $titleGroup = get_sub_field('zagolovok_grupy');
                        $textGroup = get_sub_field('tekst_grupy');
                        $iconGroup = get_sub_field('ikonka_grupy');
            ?>
            <div class="text__coll--block">
               <div class="coll__block--img">
                  <svg class="img">
                     <use xlink:href="<?php echo get_template_directory_uri().$iconGroup; ?>"></use>
                  </svg>
               </div><!--/.img-->
               <div class="coll__block--text">
                  <h5>
                     <?php echo $titleGroup; ?>
                  </h5>
                  <p>
                     <?php echo $textGroup; ?>
                  </p>
               </div><!--/.text-->
            </div><!--/.block-->
            <?php
                        endwhile;
                     endif;
                  endwhile;
               endif;         
            ?>
         </div><!--/.text__coll-->
         <div class="text__img">
            <?php
               if(have_rows('polya_blokiv_zobrazhen')):
                  while(have_rows('polya_blokiv_zobrazhen')) : the_row();
                     if(have_rows('grupa_blokiv_zobrazhen')):
                        while(have_rows('grupa_blokiv_zobrazhen')) : the_row();
                        $titleLine = get_sub_field('zagolovok_bloku_zobrazhen');
                        $textLine = get_sub_field('tekst_bloku_zobrazhen');
                        $imageLine = get_sub_field('kartynka_bloku_zobrazhen');
            ?>
            <div class="text__img--block">
               <img src="<?php echo $imageLine; ?>" alt="flowers" class="img">
               <div class="text__img--text">
                  <h5>
                     <?php echo $titleLine; ?>
                  </h5>
                  <p>
                     <?php echo $textLine; ?>
                  </p>
               </div><!--/.text-->
            </div><!--/.block-->
            <?php
                        endwhile;
                     endif;
                  endwhile;   
               endif;      
            ?>
         </div><!--/.img-->
      </div><!--/.container-->
   </section><!--/.text-->
   <!--works-->
   <section class="works">
      <div class="container">
         <div class="works__row">
            <div class="works__row--title">
               <h3>
                  <?php the_field('zagolovok_bloku_slajder'); ?>
               </h3>
            </div><!--/.title-->
            <div class="works__row--slider" id="mainSlider">
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