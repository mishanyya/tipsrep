<?php
/**
 * @subpackage template
 */
get_header(); ?>
</div><!--закрытие тега container-->
  
<div class="container"><!--начало основного container of body-->
<div class="d-none d-xl-block"><!--начало блока для больших экранов,это экран ноутбука или компьютера-->
  <div class="row"><!--начало основного row of body-->
    <div class="col-xl-9 bg-light"><!--начало основной части без сайдбара-->
     <div class="row"><!--начало основной части row-->
      <div class="col-xl-12"><!--начало основной части div col--12-->

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php /*echo 'Рубрики: '; the_category( ' | ' );*/  ?><!--показывает одну или несколько рубрик, к которым относится этот пост-->
          <?php /*the_tags( 'Тэги: ', ' | ', '' );*/?><!--показывает один или несколько тэгов,которые подхлдят для этого поста-->
          <?php endwhile; ?>

         

          <?php /*comments_template( '', true );*/ ?><!--модуль комментария, пока не нужен-->
          
		<div class="nav flex-column nav-pills border bg-white text-center">			         
          <?php		//показать следующий или предыдущий post | запись
          previous_post_link("%link",'&laquo; %title',true,'','category');          
          next_post_link("%link",'%title &raquo;',true,'','category');      	
			?>		          
     </div>    

        </div>
      </div>
			       
                    
          
    </div>

      <?php get_sidebar();  ?>

  </div>
</div><!--конец блока для средних и больших экранов-->

<div class="d-block d-xl-none"><!--начало блока для маленьких экранов,это экран мобильника или планшета-->
     <div class="row">
    <div class="col-lg-12 bg-light">
      

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php /*echo 'Рубрики: '; the_category( ' | ' );*/  ?><!--показывает одну или несколько рубрик, к которым относится этот пост-->
          <?php /*the_tags( 'Тэги: ', ' | ', '' );*/?><!--показывает один или несколько тэгов,которые подхлдят для этого поста-->
          <?php endwhile; ?>
         

          <?php /*comments_template( '', true );*/ ?><!--модуль комментария, пока не нужен-->
          
		<div class="nav flex-column nav-pills border bg-white text-center">			         
          <?php		//показать следующий или предыдущий post | запись
          previous_post_link("%link",'&laquo; %title',true,'','category');          
          next_post_link("%link",'%title &raquo;',true,'','category');      	
			?>		          
     </div>   
			       
    </div>

</div>
</div>
</div>

  <?php get_footer();  ?>
