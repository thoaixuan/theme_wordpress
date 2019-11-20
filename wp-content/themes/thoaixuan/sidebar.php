<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<!---->
		<section class="widget widget_recent_entries">
		
			<h2 class="widget-title">Tư vấn Online</h2>
		<p>
		<div class="html_after_addtocart" style="background-color: #fff1dd; padding: 8px; border: 1px dotted red; font-size: 19px">
		<b style="color: red"></b>
		<b>Hotline: <a href="tel:0933496897" target="_blank">0933.496.897</a></b><br>
		<b>Mail: <a href="mail: thoaixuan@yahoo.com" target="_blank">thoaixuan@yahoo.com</a></b><br>
		<b>Facebook: <a href="https://fb.com/ithomnay" target="_blank">Facebook</a></b><br>
		
		
		<span style="font-size:14px"></span>
</div>
		</p>	
		</section>
		<!-- -->

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</aside><!-- .sidebar .widget-area -->

<?php endif; ?>
