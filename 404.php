<?php get_header(); ?>
   <style>
      .main{
         width: 100%;
         height: 80vh;
      }
      .error{
         width: 100%;
         height: 100%;
      }
      .error__block{
         width: 100%;
         height: 100%;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
      }
      .error__block h2{
         margin-bottom: 1rem;
         text-transform: uppercase;
         font-size: 3.5rem;
      }
      .error__block a{
         text-decoration: none;
         font-weight: 700;
         font-size: 2rem;
         color: #FF0000;
      }
   </style>
   <!--main-->
   <main class="main" id="main">
      <!--error block-->
      <section class="error">
         <div class="error__block">
            <h2>page not found</h2>
            <a href="<?php echo home_url(); ?>">Go to the main page</a>
         </div><!--/.error__block-->
      </section><!--/.error-->
   </main>
   <!--/.main-->
<?php get_footer(); ?>