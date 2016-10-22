<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package LuM
 * 
 * @since LuM 1.0
 */
?>
<div id="sidebar" class="policy-other">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</div>
	<!--<div id="tablet-sidebar">
			<a id="opt-in" class="btn" href="https://megmillerhilo.com/answers" target="_blank" >Get More Info</a>
		</div>  Uncomment to show button. Make sure to add the proper link in your href.  -->
</div><!-- #primary-sidebar -->
	
	<?php endif; ?>
	
	
</div><!-- #secondary -->