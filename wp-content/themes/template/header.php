<?php
/**
 * @subpackage template
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>




<?php
	wp_head();
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="yandex-verification" content="0c30809579126c26" />
<meta name="google-site-verification" content="mQyFFECFTsPVUEiE1qldlMmVlWG0BFqUpYyh5wBlkyc" />
<meta name='wmail-verification' content='506545f4e5239fad6d0c641bfab98a98' />
<meta name="msvalidate.01" content="351CDD8671A68F8F2A8EB97EF595F634" />
<link rel="icon" href="http://addscripts.ru/favicon.ico" type="image/x-icon">
<meta name="description" content="<?php for_description(); ?>">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(61142353, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61142353" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body class="">

<div class="container bg-light border-bottom my-3">

<div class="d-none d-xl-block"><!--начало блока для больших экранов,это экран ноутбука или компьютера-->
<div class="row bg-white">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 d-flex justify-content-center">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-10 col-xl-10">
<h1 class="text-center text-danger">
<?php
bloginfo( 'name' );
?>
</h1>

<h2 class="text-center text-info">
<?php
bloginfo( 'description' );
?>
</h2>

</div>

</div>

</div><!--конец блока для средних и больших экранов-->



<div class="d-block d-xl-none "><!--начало блока для маленьких экранов,это экран мобильника или планшета-->


<nav class="navbar text-center d-flex justify-content-center align-top">


<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 rounded">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

  <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-10">
<h1 class="text-center text-danger">
<?php
bloginfo( 'name' );
?>...
</h1>
  </div>


</nav>

</div><!--конец блока для маленьких экранов-->





	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">


<div class="d-none d-xl-block"><!--начало блока для больших экранов,это экран ноутбука или компьютера-->
	<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
	<form role="search" method="get" class="search-form mt-3 col-xl-5 float-right " action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="form-control border-success col-xl-12 " id="<?php echo $unique_id; ?>" placeholder="Поиск на сайте..." value="<?php echo get_search_query(); ?>" name="s">
	</form>


	<?php
		wp_nav_menu( array(
	'theme_location'  => 'top',// Расположение меню в шаблоне. (указано в функции register_nav_menus)
	'container'       => 'nav', // Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию - div)
	'container_class' => 'navbar navbar-expand-lg justify-content-left ',// class контейнера (div тега),если не указано, то ставится стиль WP
	'container_id'    => '',// id контейнера (div тега), если не указано, то отсутствует
	'menu_class'      => 'nav nav-pills nav-fill ',// class тега ul этого меню, если не указано, то отсутствует
	'menu_id'         => '', // id ul тега этого меню, если не указано, то ставится id WP
	'depth'           => 0,     //Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
) );
?>






</div><!--конец для больших экранов-->

<div class="d-none d-sm-block d-xl-none"><!--начало блока для маленьких экранов,это экран  планшета-->
<?php
		wp_nav_menu( array(
	'theme_location'  => 'top-mini',// Расположение меню в шаблоне. (указано в функции register_nav_menus)
	'container'       => 'nav', // Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию - div)
	'container_class' => 'navbar navbar-expand-xs justify-content-left',// class контейнера (div тега),если не указано, то ставится стиль WP
	'container_id'    => '',// id контейнера (div тега), если не указано, то отсутствует
	'menu_class'      => 'nav nav-pills nav-fill',// class тега ul этого меню, если не указано, то отсутствует
	'menu_id'         => '', // id ul тега этого меню, если не указано, то ставится id WP
	'depth'           => 0,     //Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
) );
?>
</div><!--конец для маленьких экранов-->

<div class="d-block d-sm-none"><!--начало блока для маленьких экранов,это экран мобильника-->
<?php
		wp_nav_menu( array(
	'theme_location'  => 'top-mini',// Расположение меню в шаблоне. (указано в функции register_nav_menus)
	'container'       => 'nav', // Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию - div)
	'container_class' => 'navbar navbar-expand-xs justify-content-left',// class контейнера (div тега),если не указано, то ставится стиль WP
	'container_id'    => '',// id контейнера (div тега), если не указано, то отсутствует
	'menu_class'      => 'nav nav-pills nav-fill',// class тега ul этого меню, если не указано, то отсутствует
	'menu_id'         => '', // id ul тега этого меню, если не указано, то ставится id WP
	'depth'           => 0,     //Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
) );
?>
</div><!--конец для маленьких экранов-->




</div>

	</div>
