<?php
/**
 * @subpackage template
*/

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div class="d-none d-xl-block"><!--начало блока для больших экранов,это экран ноутбука или компьютера-->

</div><!--конец блока для средних и больших экранов-->

<div class="d-block d-xl-none"><!--начало блока для маленьких экранов,это экран мобильника или планшета-->
<form role="search" method="get" class="search-form " action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="search" class="form-control border-success col-xs-9 offset-xs-1 col-md-7 offset-md-2 d-inline mb-1" id="<?php echo $unique_id; ?>" placeholder="Искать..." value="<?php echo get_search_query(); ?>" name="s">
<button type="submit" class="btn btn-danger border-success d-inline">Искать</button>
</form>
</div><!--конец блока для маленьких экранов-->
