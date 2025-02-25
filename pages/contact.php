<?php
/**
 * Template Name: Contact
 */
?>
   <?php get_header();?>
   <?php get_template_part('templates/intro'); ?>
   <!--contact title-->
   <section class="contact__title mt-4">
      <div class="container">
         <div class="contact__title--title">
            <h1>
               <?php the_field('osnovnyj_zagolovok'); ?>
            </h1>
         </div><!--/.title-->
      </div><!--/.container-->
   </section><!--/.contact__title-->
   <!--contact block-->
   <section class="contact__block">
      <div class="container">
         <div class="contact__block--row">
            <div class="contact__form">
               <form data-action="#" id="contactForm" class="contact__form--form">
                  <div class="contact__form--block">
                     <i class="fas fa-user"></i>
                     <input type="text" id="contactName" name="contactName">
                     <label id="lebelcontactName" for="contactName"><?php the_field('pole_imya'); ?></label>
                     <p class="error__contactName" id="errorcontactName" style="display: none;"><?php the_field('pomylka_polya_imya'); ?></p>
                  </div><!--/.block-->
                  <div class="contact__form--block">
                     <i class="fas fa-envelope"></i>
                     <input type="email" id="contactEmail" name="contactEmail">
                     <label id="labelcontactEmail" for="contactEmail"><?php the_field('pole_poshta'); ?></label>
                     <p class="error__contactEmail" id="errorcontactEmail" style="display: none;"><?php the_field('pomylka_polya_poshta'); ?></p>
                  </div><!--/.block-->
                  <div class="contact__form--block">
                     <i class="fas fa-phone-volume"></i>
                     <input type="tel" id="contactPhone" name="contactPhone">
                     <label id="labelcontactPhone" for="contactPhone"><?php the_field('pole_telefon'); ?></label>
                     <p class="error__contactPhone" id="errorcontactPhone" style="display: none;"><?php the_field('pomylka_polya_telefon'); ?></p>
                  </div><!--/.block-->
                  <div class="contact__form--block">
                     <i class="fas fa-pencil-alt"></i>
                     <textarea name="contactMessage" id="contactMessage" rows="1"></textarea>
                     <label id="labelcontactMessage" for="contactMessage"><?php the_field('tekstove_povidomlennya'); ?></label>
                     <p class="error__contactMessage" id="errorcontactMessage" style="display: none;"><?php the_field('pomylka_vvodu_povidomlennya'); ?></p>
                  </div><!--/.block-->
                  <div class="contact__form--button text__center">
                     <button id="sendMail" type="button">
                        <?php the_field('tekst_knopky_vidpravyty'); ?>
                        <i class="fas fa-paper-plane"></i>
                     </button>
                  </div><!--/.button-->
                  <div class="error__contactText" id="errorContactText"></div>
               </form><!--/.form-->
            </div><!--/.contact__form-->
            <div class="contact__address">
               <div class="contact__address--line">
                  <i class="fas fa-building"></i>
                  <span><?php the_field('pryjom_zamovlen'); ?></span>
               </div><!--/.line-->
               <div class="contact__address--line">
                  <i class="fab fa-usps"></i>
                  <span><?php the_field('vidpravka_zamovlen'); ?></span>
               </div><!--/.line-->
               <div class="contact__address--line">
                  <i class="fas fa-user-clock"></i>
                  <span><?php the_field('pryjom_dzvinkiv'); ?></span>
               </div><!--/.line-->
               <div class="contact__address--line">
                  <i class="fas fa-phone-square-alt"></i>
                  <span><?php the_field('nomer_telefonu', 'option'); ?></span>
               </div><!--/.line-->
               <div class="contact__address--line">
                  <i class="fab fa-viber"></i>
                  <span><?php the_field('nomer_telefonu', 'option'); ?></span>
               </div><!--/.line-->
            </div><!--/.contact__address-->
         </div><!--/.row-->
      </div><!--/.container-->
   </section><!--/.cotact__block-->
   <!--contact line-->
   <section class="contact__line">
      <div class="container">
         <div class="contact__line--line">
            <hr>
         </div><!--/.line-->
      </div><!--/.container-->
   </section><!--/.contact__line-->
   <?php get_footer(); ?>
