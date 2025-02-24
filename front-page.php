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
                     <div class="product__card">
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
   
   
   
   
   
   
   
   <!--footer-->
   <footer class="footer">
      <div class="container">
         <div class="footer__row">
         <div class="footer__row--brand">
            <a href="index.html">
               <img src="img/logo/logo.svg" alt="logo" class="img">
            </a>
         </div><!--/.brand-->
         <div class="footer__row--menu">
            <ul class="main__menu">
               <li class="main__menu--item">
               <a class="main__menu--link" href="./pages/flowers.html">Букети</a>
               </li>
               <li class="main__menu--item">
               <a class="main__menu--link" href="./pages/about.html">Про нас</a>
               </li>
               <li class="main__menu--item">
               <a class="main__menu--link" href="./pages/shiping.html">Доставка та оплата</a>
               </li>
               <li class="main__menu--item">
               <a class="main__menu--link" href="./pages/contact.html">Контакти</a>
               </li>
            </ul><!--/.main__menu-->
         </div><!--/.menu-->
         <div class="footer__row--location">
            <div class="location__text">
               <p>
               м. Бурштин, вул. Незалежності
               </p>
               <p>
               Приймаємо замовлення: 10 &mdash; 18 щодня
               </p>
               <p>
               +38 097 23 49 231
               </p>
            </div><!--/.location__text-->
            <div class="location__img">
               <img src="img/footer/visa.svg" alt="icon" class="img">
               <img src="img/footer/master.svg" alt="icon" class="img">
               <img src="img/footer/privat.svg" alt="icon" class="img">
            </div><!--/.location__img-->
         </div><!--/.location-->
         </div><!--/.footer__row-->
         <div class="footer__line"></div><!--/.footer__line-->
         <div class="footer__copyright">
         <p>
            Loren Доставка квітів в Бурштині &copy;<script>document.write(new Date().getFullYear());</script>
         </p>
         </div><!--/.footer__copyright-->
      </div><!--/.container-->
   </footer><!--/.footer-->
   <!--backto top button-->
   <div class="backtop">
      <button type="button">
         <i class="fas fa-arrow-up"></i>
      </button>
   </div><!--/.backtop-->
   
   
   
   
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
               Оформлення замовлення
               </h3>
            </div><!--/.title-->
            <div class="modal__body--form">
               <form data-action="#" id="shopingForm" class="shoping__form">
               <h3>Замовник</h3>
               <div class="shoping__form--block">
                  <i class="fas fa-user"></i>
                  <input type="text" id="name" name="name">
                  <label id="lebelName" for="name">Ваше ім'я</label>
                  <p class="error__name" id="errorName" style="display: none;">Введіть Ваше ім'я...</p>
               </div><!--/.block-->
               <div class="shoping__form--block">
                  <i class="fas fa-phone-volume"></i>
                  <input type="tel" id="phone" name="phone">
                  <label id="labelPhone" for="phone">Ваш телефон</label>
                  <p class="error__phone" id="errorPhone" style="display: none;">Введіть Ваш номер телефону...</p>
               </div><!--/.block-->
               <div class="shoping__form--block">
                  <i class="fas fa-pencil-alt"></i>
                  <textarea name="message" id="message" rows="1"></textarea>
                  <label id="labelMessage" for="message">Залиште додаткові побажання</label>
                  <p class="error__message" id="errorMessage" style="display: none;">Ваше повідомлення (мінімум 10 символів)...</p>
               </div><!--/.block-->
               <h3>Замовлення</h3>
               <div class="shoping__form--block">
                  <i class="fas fa-signature"></i>
                  <input type="text" id="titleFlowers" name="titleFlowers" value="" disabled>
                  <label id="labelTitleFlowers" for="titleFlowers">Назва букета</label>
               </div><!--/.block-->
               <div class="shoping__form--block">
                  <i class="fas fa-audio-description"></i>
                  <input type="text" id="descriptionFlowers" name="descriptionFlowers" value="" disabled>
                  <label id="labelDescriptionFlowers" for="descriptionFlowers">Опис</label>
               </div><!--/.block-->
               <div class="shoping__form--block">
                  <i class="fas fa-money-bill"></i>
                  <input type="text" id="priceFlowers" name="priceFlowers" value="" disabled>
                  <label id="labelPriceFlowers" for="priceFlowers">Ціна грн.</label>
               </div><!--/.block-->
               <div class="shoping__form--button text__center"> 
                  <p class="privat__policy">
                     Натискаючи кнопку "Відправити" Ви надаєте згоду на обробку Ващих персональних даних для отримання
                     замовлення, та погоджуєтесь із умовами оплати та доставки вибраного замовлення.
                  </p>
                  <button id="sendCart" type="button">
                     Відправити
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



      
   <!--libs js conected-->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>');</script>
   <!--lightbox https://lokeshdhakar.com/projects/lightbox2/#getting-started-->
   <script src="js/vendor/lightbox.min.js"></script>
   <!-- main script -->
   <script src="js/main.js"></script>
   <!-- modal script -->
   <script src="js/modal.js"></script>
   </body>
   </html>











   <?php get_footer(); ?>