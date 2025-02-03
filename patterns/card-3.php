<?php
/**
 * Title: Card 3
 * Slug: patterns-beauty/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|tertiary","style":"dashed","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-style:dashed;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h6 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:20px"><?php esc_html_e( 'Swedish Massage', 'patterns-beauty' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Curabitur ullamcorper ultricies nisi.', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-size:24px;font-style:normal;font-weight:700"><?php esc_html_e( '$50', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
