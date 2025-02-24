   <!--intro-->
   <?php
         $args = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' =>  1,
            'cat'            =>  4
         );
         $postIntro = new WP_Query( $args );
         if ($postIntro->have_posts()) : while ($postIntro->have_posts()) : $postIntro->the_post(); 
   ?>
         <section class="intro" style="background-image: url(<?php the_field('osnovnyj_baner'); ?>);">
            <div class="intro__row">
               <div class="intro__row--title">
                  <h1><?php the_title();?></h1>
                  <p>
                     <?php the_content();?>
                  </p>
                  </div><!--/.title-->
                  <div class="intro__row--content">
                  <h3>
                     <?php the_field('pole_pidzagolovku'); ?>
                  </h3>
                  <p>
                     <?php the_field('pole_opysu'); ?>
                  </p>
               </div><!--/.content-->
               <div class="intro__row--button">
                  <?php $site_url = get_site_url( 28, 'bukety'); ?>
                  <a href="<?php echo $site_url ?>">
                     <?php the_field('tekst_knopky'); ?>
                  </a>
               </div><!--/.button-->
            </div><!--intro__row-->
         </section><!--/.intro-->
         <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
   <?php endif; ?>
         



