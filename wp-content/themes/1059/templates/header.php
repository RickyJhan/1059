<?php 
$logo = get_field('logo','option');
if( $logo ) {
	$logo_html = '<img src="'.$logo['url'].'" alt="'.get_bloginfo('name').'" />';
}else{
	$logo_html = '<span>' . get_bloginfo('name') . '</span>';
}
?>
<header class="banner banner-default d-none d-lg-block">
	<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
	<div class="secondary-nav bg-dark text-light">
		<div class="container">
			<?php dynamic_sidebar('sidebar-header'); ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="primary-nav">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php echo $logo_html; ?></a>
				<div class="collapse navbar-collapse">
		      <?php
		      if (has_nav_menu('primary_navigation')) :
		        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'walker' => new WP_Bootstrap_Navwalker()]);
		      endif;
		      ?>
				</div>
			</nav>
		</div>
	</div>
</header>
<header class="banner banner-mobile-default d-lg-none">
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php echo $logo_html; ?></a>
			<button class="navbar-toggler navbar-toggler-right menu-button" type="button">
				<span class="sr-only">Main Navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flexnav list-unstyled']);
			endif;
			?>
		</nav>
	</div>
</header>
