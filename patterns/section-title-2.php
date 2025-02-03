<?php
/**
 * Title: Section Title 2
 * Slug: patterns-beauty/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"},"metadata":{"name":"Section title"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-left has-base-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Who We Are', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);line-height:1.1"><?php esc_html_e( 'Quality &amp; Natural Beauty Salon', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.7"}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-medium-font-size" style="margin-bottom:0px;line-height:1.7"><?php esc_html_e( 'Sed ut persiciatis unde omnis iste natus error sit voluptate maccusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explic aboemo enim ipsa', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
