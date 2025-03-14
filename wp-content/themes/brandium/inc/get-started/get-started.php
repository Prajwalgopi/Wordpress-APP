<?php
add_action( 'admin_menu', 'brandium_getting_started' );
function brandium_getting_started() {
	add_theme_page( esc_html__('Brandium Theme', 'brandium'), esc_html__('Brandium Theme', 'brandium'), 'edit_theme_options', 'brandium-guide-page', 'brandium_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function brandium_admin_theme_style() {
	wp_enqueue_style('brandium-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'brandium_admin_theme_style');

// Guidline for about theme
function brandium_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'brandium' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Brandium WordPress Theme', 'brandium' ); ?></h1>
			<p><?php esc_html_e('Version: ','brandium'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( BRANDIUM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'brandium'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'brandium'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'brandium'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( BRANDIUM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'brandium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'brandium'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'brandium'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( BRANDIUM_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'brandium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'brandium'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'brandium'); ?></p>
				<a href="<?php echo esc_url( BRANDIUM_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'brandium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'brandium'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'brandium'); ?></p>
				<a href="<?php echo esc_url( BRANDIUM_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'brandium'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>