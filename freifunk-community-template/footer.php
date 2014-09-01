<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p><a href="http://freifunk.net/impressum">Impressum & Kontakt</a>
		<br /><?php printf(__('%1$s and %2$s.', 'kubrick'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'kubrick') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'kubrick') . '</a>'); ?>
		<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
			<br />Dieser <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/InteractiveResource" rel="dc:type">Inhalt</span> ist unter einer <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/de/" target="_blank">Creative Commons-Lizenz</a> lizenziert. </p>
</div>
</div>
		<?php wp_footer(); ?>
</body>
</html>
