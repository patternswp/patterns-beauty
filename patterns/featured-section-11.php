<?php
/**
 * Title: Featured Section 11
 * Slug: patterns-beauty/featured-section-11
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80"}},"border":{"right":{"color":"#00000012","style":"solid","width":"1px"},"top":{},"bottom":{},"left":{}}}} --><div class="wp-block-column" style="border-right-color:#00000012;border-right-style:solid;border-right-width:1px;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-8.png" style="width:64px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"lineHeight":"0.6","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Join Our Team', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View Positions', 'patterns-beauty' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-9.png" style="width:64px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"lineHeight":"0.6","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Become Our Partner', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Tell Me More', 'patterns-beauty' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
