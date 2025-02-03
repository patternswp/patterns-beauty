<?php
/**
 * Title: Section Title 1
 * Slug: patterns-beauty/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"70%","contentSize":"70%"},"metadata":{"name":"Section title"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Be a more perfect', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->


<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1","textTransform":"capitalize"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.1;text-transform:capitalize"><?php esc_html_e( 'Your Beauty and Success Starts Here', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
