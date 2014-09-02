<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar" role="complementary">
		<ul>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>	
	<li><a href="http://freifunk.net"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_freifunk.png"></a></li>
		</ul>

	</div>

