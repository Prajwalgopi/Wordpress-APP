<?php
if ( ! function_exists( 'brandium_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 * @since brandium 1.0
 */
function brandium_setup() {
  // Add support for HTML5 tags
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // Add support for title tag
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add support for post formats
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Add support for block styles
  add_theme_support( 'wp-block-styles' );

  // Make theme available for translation.
  load_theme_textdomain( 'brandium' );
}
endif;  
add_action( 'after_setup_theme', 'brandium_setup' );

function brandium_enqueue_styles_and_scripts() {
    // Enqueue normalize.css
    wp_enqueue_style( 'brandium-normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );

  // Enqueue block.css
    wp_enqueue_style( 'brandium-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );

  // Enqueue main stylesheet
    wp_enqueue_style( 'brandium-style-css', get_stylesheet_uri() );

  // Enqueue custom JavaScript
    wp_enqueue_script( 'brandium-custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'brandium_enqueue_styles_and_scripts' );

// Enqueue editor styles
add_theme_support( 'editor-styles' );
add_editor_style( 'style.css' );

// Enqueue core
require_once get_template_directory() . '/inc/core/init.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
    class Brandium_Upsell_Section extends WP_Customize_Section {
        public $type = 'brandium-upsell';
        public $button_text = '';
        public $url = '';
        public $background = '';
        public $text_color = '';
        protected function render() {
            $background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#6f1dc3';
            $text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
            ?>
            <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="brandium_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
                <h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
                    <?php echo esc_html( $this->title ); ?>
                    <a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
                </h3>
            </li>
            <?php
        }
    }
}

// Loads custom styles for the WordPress block editor  
function load_editor_styles() {
	add_theme_support('editor-styles');
	add_editor_style('assets/css/editor-styles.css');
}
add_action('after_setup_theme', 'load_editor_styles');

// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function brandium_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'brandium_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
        if( is_network_admin() ){
                return;
        }

        if( ! current_user_can( 'manage_options' ) ){
                return;
        } 
        if($current_screen->base != 'appearance_page_brandium-guide-page' ) { ?>

            <div class="notice notice-success is-dismissible">
                <p>⭐⭐⭐⭐⭐</p>
                <h1><?php esc_html_e('Thanks for choosing Brandium!', 'brandium'); ?></h1>
                <p>Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Brandium PRO</b>!</p>
                <div style="display: flex;">
                <p>
                    <a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=brandium-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'brandium'); ?></a>
                </p>
                <p><a href="?brandium-dismissed" class="button button-secondary"><?php echo esc_html('Dismiss', 'brandium'); ?></a></p>
                </div>
        </div>
        <?php }?>
        <?php
    }
}

add_action( 'admin_notices', 'brandium_admin_notice' );

function brandium_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['brandium-dismissed'] ) ) 
        update_option( 'brandium_admin_notice', true );
}
add_action( 'admin_init', 'brandium_notice_dismissed' );

if( ! function_exists( 'brandium_update_admin_notice' ) ) :
/**
* Updating admin notice on dismiss
*/
function brandium_update_admin_notice(){
    if ( isset( $_GET['brandium_admin_notice'] ) && $_GET['brandium_admin_notice'] = '1' ) {
        update_option( 'brandium_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'brandium_update_admin_notice' );

// After switch theme function
add_action('after_switch_theme', 'brandium_getstart_setup_options');
function brandium_getstart_setup_options () {
    update_option('brandium_admin_notice', FALSE );
}

// Theme credit link
define('BRANDIUM_BUY_NOW',__('https://effethemes.com/themes/brandium-wordpress-theme/','brandium'));
define('BRANDIUM_PRO_DEMO',__('https://preview.effethemes.com/brandium-wordpress-theme/','brandium'));
define('BRANDIUM_REVIEW',__('https://wordpress.org/support/theme/brandium/reviews/#new-post','brandium'));
define('BRANDIUM_SUPPORT',__('https://wordpress.org/support/theme/brandium','brandium'));