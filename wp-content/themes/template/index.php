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
      
        
					<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!--Заголовок постов-->
					<?php /*the_time('F j, Y');*/ ?><!--показывает дату постов-->
					<?php /*if ( has_post_thumbnail() ) { the_post_thumbnail(); }*/?><!--Миниатюра поста-->
					<?php /*the_content('');*/ ?><!--Содержание постов-->
					<?php endwhile;
				/*else: echo '<h2>Извините, ничего не найдено...</h2>';*/ endif;  ?><!--Если нет постов-->	
		
		</div><!--окончание основной части div col-md-12--> 
       </div><!--окончание основной части row-->
       
       
       
    </div><!--окончание основной части без сайдбара-->
    
      <?php get_sidebar();  ?><!--подключение сайдбара-->     
      
      
  </div><!--окончание основного row of body-->  
  
  
  <div class="row bg-light border-top"><!--начало дополнительной части row для пагинации-->
       <div class="col-xl-12"><!--начало дополнительной части div col-xl-12 для пагинации-->
		<nav class='d-flex justify-content-center'>
		<ul class='ml-5 mt-3 pagination'>		  
      	<?php		//если посты не помещаются на одной странице, пагинация
      	$links=paginate_links( array(		
	'prev_text'    => __('&#9668;	 Предыдущая'),//ссылка для перехода на предыдущую страницу (Default:'__('« Previous')')	
	'next_text'    => __('Следующая &#9658;'),//ссылка для перехода на следующую страницу (Default:'__('Next »')')
	'type'         => 'array',//plain - <a></a>; list - <ul> <li><a> </a></li> <ul> ;array - массив c <a>;(Default:'plain')
		));		
		foreach($links as $link){//$links- это массив, а $link- каждое значение массива, чтобы не писать $links[$i] и т.д.
		$link=str_replace( "page-numbers", "page-link", $link);
		$i=strripos($link, 'current');//поиск подстроки в строке	
		if($i==true) {	
		echo "<li class='page-item disabled'>".$link."</li>";
		}
		else{
		echo "<li class='page-item'>".$link."</li>";
		}}			
			?>		
		</ul>
		</nav>  
		</div><!--окончание дополнительной части div col-md-12 для пагинации-->
		</div><!--окончание дополнительной части row для пагинации-->     
</div><!--конец блока для средних и больших экранов-->

<div class="d-block d-sm-none"><!--начало блока для маленьких экранов,это экран мобильника-->
<div class="row"><!--начало основного row of body-->
    <div class="bg-light"><!--начало основной части без сайдбара-->
         
        
					<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!--Заголовок постов-->
					<?php /*the_time('F j, Y');*/ ?><!--показывает дату постов-->
					<?php /*if ( has_post_thumbnail() ) { the_post_thumbnail(); }*/?><!--Миниатюра поста-->
					<?php /*the_content('');*/ ?><!--Содержание постов-->
					<?php endwhile;
				/*else: echo '<h2>Извините, ничего не найдено...</h2>';*/ endif;  ?><!--Если нет постов-->	
		             
       
    </div><!--окончание основной части без сайдбара-->           
      
  </div><!--окончание основного row of body-->    
  
  <div class="row bg-light border-top"><!--начало дополнительной части row для пагинации-->
       <div class="col-xs-12"><!--начало дополнительной части div  для пагинации-->
		<nav class='navigation mt-3'>
		<ul class='pagination justify-content-start'>		  
      	<?php		//если посты не помещаются на одной странице, пагинация
      	$links=paginate_links( array(		
	'prev_text'    => __(' « '),//ссылка для перехода на предыдущую страницу (Default:'__('« Previous')')	
'next_text'    => __(' » '),//ссылка для перехода на следующую страницу (Default:'__('Next »')')
	'type'         => 'array',//plain - <a></a>; list - <ul> <li><a> </a></li> <ul> ;array - массив c <a>;(Default:'plain')
		));		
		foreach($links as $link){//$links- это массив, а $link- каждое значение массива, чтобы не писать $links[$i] и т.д.
		$link=str_replace( "page-numbers", "page-numbers page-link", $link);
		$i=strripos($link, 'current');//поиск подстроки в строке	
		if($i==true) {	
		echo "<li class='page-item disabled'>".$link."</li>";
		}
		else{
		echo "<li class='page-item'>".$link."</li>";
		}}			
			?>		
		</ul>
		</nav>  
		</div><!--окончание дополнительной части div col-md-12 для пагинации-->
		</div><!--окончание дополнительной части row для пагинации--> 
</div><!--конец блока для маленьких экранов-->

<div class="d-none d-sm-block d-xl-none"><!--начало блока для маленьких экранов,это экран  планшета-->
<div class="row"><!--начало основного row of body-->
    <div class="bg-light"><!--начало основной части без сайдбара-->
         
        
					<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!--Заголовок постов-->
					<?php /*the_time('F j, Y');*/ ?><!--показывает дату постов-->
					<?php /*if ( has_post_thumbnail() ) { the_post_thumbnail(); }*/?><!--Миниатюра поста-->
					<?php /*the_content('');*/ ?><!--Содержание постов-->
					<?php endwhile;
				/*else: echo '<h2>Извините, ничего не найдено...</h2>';*/ endif;  ?><!--Если нет постов-->	
		             
       
    </div><!--окончание основной части без сайдбара-->           
      
  </div><!--окончание основного row of body-->    
  
  <div class="row bg-light border-top"><!--начало дополнительной части row для пагинации-->
       <div class="col-sm-12 col-md-12 col-lg-12"><!--начало дополнительной части div col-md-12 для пагинации-->
		<nav class='navigation mt-3'>
		<ul class='pagination justify-content-start d-inline-block '>		  
      	<?php		//если посты не помещаются на одной странице, пагинация
      	$links=paginate_links( array(		
	'prev_text'    => __(' « '),//ссылка для перехода на предыдущую страницу (Default:'__('« Previous')')	
'next_text'    => __(' » '),//ссылка для перехода на следующую страницу (Default:'__('Next »')')
	'type'         => 'array',//plain - <a></a>; list - <ul> <li><a> </a></li> <ul> ;array - массив c <a>;(Default:'plain')
		));		
		foreach($links as $link){//$links- это массив, а $link- каждое значение массива, чтобы не писать $links[$i] и т.д.
		$link=str_replace( "page-numbers", "page-numbers page-link", $link);
		$i=strripos($link, 'current');//поиск подстроки в строке	
		if($i==true) {	
		echo "<li class='page-item disabled text-center d-inline-block'>".$link."</li>";
		}
		else{
		echo "<li class='page-item text-center d-inline-block'>".$link."</li>";
		}}						?>		
		</ul>
		</nav>  
		</div><!--окончание дополнительной части div для пагинации-->
		</div><!--окончание дополнительной части row для пагинации--> 
</div><!--конец блока для маленьких экранов-->

</div><!--окончание основного container of body-->

<?php get_footer();  ?>
