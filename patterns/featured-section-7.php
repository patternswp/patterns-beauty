<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-beauty/featured-section-7
 * Categories: featured, testimonials
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"120px","top":"120px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"primary","textColor":"default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-default-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:120px;padding-bottom:120px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-bottom:0px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'testimonials', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1","textTransform":"capitalize"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.1;text-transform:capitalize"><?php esc_html_e( 'Our Clients Said', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"200"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="font-style:italic;font-weight:200;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"left","level":5,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
<h5 class="wp-block-heading alignwide has-text-align-left has-quinary-color has-text-color" style="margin-bottom:0px;font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e( 'Natalie Jones', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
<p class="has-text-align-left has-quaternary-color has-text-color" style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Certified Dermatologist', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
