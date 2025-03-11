<?php
/**
 * Title: front-page
 * Slug: brandium/front-page
 * Inserter: no
 */
?>
<!-- wp:group {"className":"bg-light-custom-primary","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lines.png","id":1993,"source":"file","title":"lines"},"backgroundSize":"400px","backgroundPosition":"50% 0","backgroundAttachment":"fixed"},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bg-light-custom-primary" style="padding-right:0;padding-left:0"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"main"},"layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"63px"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-size:63px"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element, 3. is the start of a 'mark' HTML element, 4. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Unleash %1$sYour%2$s %3$sBrand’s%4$s Full Potential', 'brandium' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>', '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#e1ecf7a1"}}},"color":{"text":"#e1ecf7a1"}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#e1ecf7a1"><?php esc_html_e('We specialize in crafting websites that don’t just look good—they drive real results. From sleek, modern designs to seamless user experiences, we focus on every detail to ensure your brand stands out in the crowded digital space.', 'brandium');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"backgroundColor":"custom-primary","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none","radius":"5px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:5px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Get Started', 'brandium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"5px","width":"2px"}},"borderColor":"custom-primary"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-custom-primary-border-color wp-element-button" href="#" style="border-width:2px;border-radius:5px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('About Us', 'brandium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"custom-text-color","iconColorValue":"#fdfdfd","showLabels":true,"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"http://brandium.local/wp-content/uploads/2025/02/hero.jpg","hasParallax":true,"dimRatio":10,"overlayColor":"custom-background-primary","isUserOverlayColor":true,"style":{"border":{"radius":"5px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-parallax" style="border-radius:5px"><span aria-hidden="true" class="wp-block-cover__background has-custom-background-primary-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(http://brandium.local/wp-content/uploads/2025/02/hero.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"90px"},"elements":{"link":{"color":{"text":"#ffffff87"}}},"color":{"text":"#ffffff87"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#ffffff87;font-size:90px"><?php esc_html_e('Crafting Digital Experiences That Inspire and Convert', 'brandium');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about.jpg" alt="" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('About Us', 'brandium');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('We are a team of passionate creatives and strategists dedicated to building exceptional digital experiences. With a focus on innovation, design, and functionality, we craft websites that not only look stunning but also drive real results. Our approach is simple: we listen, strategize, and execute with precision to bring your vision to life.', 'brandium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"custom-primary","fontSize":"large"} -->
<p class="has-custom-primary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('4.9/5', 'brandium');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Positive Reviews', 'brandium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"custom-primary","fontSize":"large"} -->
<p class="has-custom-primary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('10+', 'brandium');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Years of Experience', 'brandium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"custom-primary","fontSize":"large"} -->
<p class="has-custom-primary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('25+', 'brandium');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Expert Team Members', 'brandium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Trusted by 200+ worldwide clients', 'brandium');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('⭐⭐⭐⭐⭐', 'brandium');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-example-1.png" alt="" style="width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-example-2.png" alt="" style="width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-example-3.png" alt="" style="width:150px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"150px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-example-4.png" alt="" style="width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->