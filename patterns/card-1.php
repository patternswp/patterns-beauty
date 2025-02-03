<?php
/**
 * Title: Card 1
 * Slug: patterns-beauty/card-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"primary","textColor":"default","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-default-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"lineHeight":"1.1","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}}} -->
<h5 class="wp-block-heading alignwide has-text-align-center" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:1.1"><?php esc_html_e( 'Don’t be ordinary, be extra  ordinary', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}}} -->
<p class="has-text-align-center" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
