<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-beauty/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"13px","lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color" style="margin-bottom:0px;font-size:13px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Create Your Image', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"10px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Health Care &amp; Beauty Salon', 'patterns-beauty' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"30px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"layout":{"flexSize":"30px","selfStretch":"fixed"}},"layout":{"type":"constrained","contentSize":"500px","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","lineHeight":1.6}}} -->
<p class="has-text-align-left" style="font-size:18px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"30px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"layout":{"flexSize":"30px","selfStretch":"fixed"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"default","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"borderColor":"default","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-default-color has-text-color has-link-color has-border-color has-default-border-color wp-element-button"><?php esc_html_e( 'Learn More', 'patterns-beauty' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained","wideSize":"200px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"right","level":5} -->
<h5 class="wp-block-heading has-text-align-right"><?php esc_html_e( 'Opening Hours', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Mon - Fri', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e( '9:00AM - 8:00PM', 'patterns-beauty' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Sat - Sun', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e( '9:00AM - 8:00PM', 'patterns-beauty' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
