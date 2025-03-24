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
            <!--about__content--block-->
            <div class="about__content--block">
               <div class="block__text">
                  <div class="block__text--title">
                     <h4>
                        <?php the_field('osnovnyj_zagolovok'); ?>
                     </h4>
                  </div><!--/.title-->
                  <div class="block__text--tab">
                     <ul class="nav__tabs">
                        <li class="nav__tabs--item item__active">
                           <a class="nav__tabs--link" href="#hto-my"><?php the_field('zagolovok_tab_1'); ?></a>
                        </li>
                        <li class="nav__tabs--item">
                           <a class="nav__tabs--link" href="#chomu-my"><?php the_field('zagolovok_tab_2'); ?></a>
                        </li>
                        <li class="nav__tabs--item">
                           <a class="nav__tabs--link" href="#nashe-kredo"><?php the_field('zagolovok_tab_3'); ?></a>
                        </li>
                     </ul><!--/.nav__tabs-->
                     <div class="content__tab">
                        <div class="content__tab--block tab__show" id="#hto-my">
                        <?php
                           if(have_rows('bloky_tekstu_hto_my')):
                              while(have_rows('bloky_tekstu_hto_my')) : the_row();
                              $textLine = get_sub_field('ryadok_tekstu_vkladky');
                        ?>
                           <p><?php echo $textLine; ?></p>
                        <?php
                              endwhile;
                           endif;   
                        ?>   
                        </div><!--/.block-->
                        <div class="content__tab--block" id="#chomu-my">
                           <ul>
                              <?php
                                 if(have_rows('bloky_tekstu_chomu_my')):
                                    while(have_rows('bloky_tekstu_chomu_my')) : the_row();
                                    $textBlock = get_sub_field('ryadky_tekstu_chomu_my');
                              ?>
                              <li>
                                 <p>
                                    <?php echo $textBlock; ?>
                                 </p>
                              </li>
                              <?php
                                    endwhile;
                                 endif;   
                              ?>
                           </ul>
                           <p>
                              <?php the_field('oblast_tekstu_chomu_my'); ?>
                           </p>
                        </div><!--/.block-->
                        <div class="content__tab--block" id="#nashe-kredo">
                           <?php
                              if(have_rows('bloky_nashe_kredo')):
                                 while(have_rows('bloky_nashe_kredo')) : the_row();
                                 if(have_rows('gupa_nashe_kredo')):
                                    while(have_rows('gupa_nashe_kredo')) : the_row();
                                    $kredoTitle = get_sub_field('zagolovok_nashe_kredo');
                                    $kredoText = get_sub_field('tekst_nashe_kredo');
                           ?>
                           <h5>
                              <?php echo $kredoTitle; ?>
                           </h5>
                           <p>
                              <?php echo $kredoText; ?>
                           </p>
                           <?php
                                    endwhile;
                                 endif;
                              endwhile;
                           endif;      
                           ?>
                        </div><!--/.block-->
                     </div><!--/.content__tab-->
                  </div><!--/.tab-->
                  <div class="block__text--button">
                     <?php $site_url = get_site_url( 28, 'bukety'); ?>
                     <a href="<?php echo $site_url; ?>">
                        <?php the_field('tekst_knopky_buket'); ?>
                     </a>
                  </div><!--/.button-->
               </div><!--/.block__text-->
               <div class="block__slider">
                  <?php
                     if(have_rows('karusel_zobrazhen')):
                        while(have_rows('karusel_zobrazhen')) : the_row();
                  ?>
                     <div class="block__slider--top top__slider">
                        <?php
                           if(have_rows('grupa_zobrazhen')):
                              while(have_rows('grupa_zobrazhen')) : the_row();
                              if(have_rows('blok_zobrazhen_slajderiv')):
                                 while(have_rows('blok_zobrazhen_slajderiv')) : the_row();
                                 $mainImage = get_sub_field('osnovne_zobrazhennya_slajdera');
                        ?>
                        <img src="<?php echo $mainImage; ?>" class="img" alt="flowers">
                        <?php
                                 endwhile;
                              endif;
                           endwhile;
                        endif;         
                        ?>
                     </div><!--/.top__slider-->
                     <div class="block__slider--bottom bottom__slider">
                        <?php
                           if(have_rows('grupa_zobrazhen')):
                              while(have_rows('grupa_zobrazhen')) : the_row();
                              if(have_rows('blok_zobrazhen_slajderiv')):
                                 while(have_rows('blok_zobrazhen_slajderiv')) : the_row();
                                 $previewImage = get_sub_field('minyatyura_zobrazhennya_slajdera');
                        ?>
                        <img src="<?php echo $previewImage; ?>" class="img" alt="flowers">
                        <?php
                                 endwhile;
                              endif;
                           endwhile;
                        endif;         
                        ?>
                     </div><!--/.bottom__slider-->
                  <?php
                        endwhile;
                     endif;   
                  ?>   
               </div><!--/.block__slider-->
            </div><!--/.block-->
            <div class="about__content--text">
               <?php the_content(); ?>
            </div><!--/.text-->
         </div><!--/.-about__content->
      </div><!--/.container-->
   </section><!--/.about__us-->
   <?php get_footer(); ?>