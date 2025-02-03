<?php
/**
 * Title: Card 2
 * Slug: patterns-beauty/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:64px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":5,"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"typography":{"lineHeight":"0.6","fontSize":"24px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:400;line-height:0.6"><?php esc_html_e( 'Cutting &amp; Styling', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.8"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color " style="margin-bottom:0px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, tempus iaculis. Duis pretium pretium tortor sagittis, at odio', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
