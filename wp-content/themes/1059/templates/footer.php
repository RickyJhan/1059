<footer class="content-info">
	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
	<div class="buckets">
	  <div class="container">
	  	<aside class="widgets row">
	    	<?php dynamic_sidebar('sidebar-footer'); ?>
	    </aside>
	  </div>
	</div>
	<?php endif; ?>
	<div class="footer text-center">
		<div class="container">
			<div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</div>
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation','menu_class'=>'list-inline']);
			endif;
			?>
		</div>
	</div>
</footer>
<div class="backtotop pagetoscroll"><a href="#verytop"><i class="fa fa-angle-up"></i></a></div>
