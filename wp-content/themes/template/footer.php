<div class="container my-3">
	<div class="row">
		<div class="col-md-9">

		<?php if ( is_active_sidebar( 'bottom_side' ) ) : ?>
			<div id="bottom-side-1" class="bg-success"><!--В этот <div> помещается сайдбар, class и id можно установить по желанию-->
						<?php dynamic_sidebar( 'bottom_side' ); ?><!--В скобки помещается id сайдбара из functions.php-->
			</div>
		<?php endif; ?>


<?php
/**
 * @subpackage template
 */
	wp_footer();//не трогать вообще!!!
?>
		</div>
	</div>
</div>

</body>
</html>
