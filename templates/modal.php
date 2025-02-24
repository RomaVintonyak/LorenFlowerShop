   <!--modal window-->
   <section class="modal">
         <div class="modal__mask">
            <div class="modal__body">
               <div class="modal__body--button">
                  <button type="button" class="_modalClose">
                     <i class="fas fa-times"></i>
                  </button>
               </div><!--/.button-->
               <div class="modal__body--title">
                  <h3>
                     <?php the_field('zagolovok_vikna', 'option') ?>
                  </h3>
               </div><!--/.title-->
               <div class="modal__body--form">
                  <form data-action="#" id="shopingForm" class="shoping__form">
                  <h3><?php the_field('pidzagolovok_formy', 'option') ?></h3>
                  <div class="shoping__form--block">
                     <i class="fas fa-user"></i>
                     <input type="text" id="name" name="name">
                     <label id="lebelName" for="name"><?php the_field('pole_imya', 'option') ?></label>
                     <p class="error__name" id="errorName" style="display: none;"><?php the_field('pomylka_polya_imya', 'option') ?></p>
                  </div><!--/.block-->
                  <div class="shoping__form--block">
                     <i class="fas fa-phone-volume"></i>
                     <input type="tel" id="phone" name="phone">
                     <label id="labelPhone" for="phone"><?php the_field('pole_telefon', 'option') ?></label>
                     <p class="error__phone" id="errorPhone" style="display: none;"><?php the_field('pomylka_polya_telefon', 'option') ?></p>
                  </div><!--/.block-->
                  <div class="shoping__form--block">
                     <i class="fas fa-pencil-alt"></i>
                     <textarea name="message" id="message" rows="1"></textarea>
                     <label id="labelMessage" for="message"><?php the_field('tekstove_pole', 'option') ?></label>
                     <p class="error__message" id="errorMessage" style="display: none;"><?php the_field('pomylka_tekstovogo_polya', 'option') ?></p>
                  </div><!--/.block-->
                  <h3><?php the_field('pidzagolovok_zamovlennya', 'option') ?></h3>
                  <div class="shoping__form--block">
                     <i class="fas fa-signature"></i>
                     <input type="text" id="titleFlowers" name="titleFlowers" value="" disabled>
                     <label id="labelTitleFlowers" for="titleFlowers"><?php the_field('nazva_buketa', 'option') ?></label>
                  </div><!--/.block-->
                  <div class="shoping__form--block">
                     <i class="fas fa-audio-description"></i>
                     <input type="text" id="descriptionFlowers" name="descriptionFlowers" value="" disabled>
                     <label id="labelDescriptionFlowers" for="descriptionFlowers"><?php the_field('opys_buketa', 'option') ?></label>
                  </div><!--/.block-->
                  <div class="shoping__form--block">
                     <i class="fas fa-money-bill"></i>
                     <input type="text" id="priceFlowers" name="priceFlowers" value="" disabled>
                     <label id="labelPriceFlowers" for="priceFlowers"><?php the_field('czina_buketa', 'option') ?></label>
                  </div><!--/.block-->
                  <div class="shoping__form--button text__center"> 
                     <p class="privat__policy">
                        <?php the_field('oferta', 'option') ?>
                     </p>
                     <button id="sendCart" type="button">
                        <?php the_field('tekst_knopky_vidpravyty', 'option') ?>
                        <i class="fas fa-paper-plane"></i>
                     </button>
                  </div><!--/.button-->
                  <div class="error__text" id="errorText"></div><!--/.error__text-->
                  </form><!--/.shoping__form-->
               </div><!--/.form-->
               <div class="modal__body--footer"></div><!--/.footer-->
            </div><!--/.modal__body-->
      </div><!--/.modal__mask-->
   </section><!--modal-->