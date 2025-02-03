<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-beauty/featured-section-4
 * Categories: featured, banner, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg","id":30,"hasParallax":true,"dimRatio":30,"minHeight":60,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-30 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"70%","contentSize":"70%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-bottom:0px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'This week only', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1","textTransform":"capitalize"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.1;text-transform:capitalize"><?php esc_html_e( '50% OFF Aroma and Jet Hydrotherapy!', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Book An Appointment', 'patterns-beauty' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
