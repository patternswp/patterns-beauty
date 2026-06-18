<?php
/**
 * Title: Featured Section 10
 * Slug: patterns-beauty/featured-section-10
 * Categories: contact, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-beauty' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"},"metadata":{"name":"Section Title"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-bottom:0px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Contact with us', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.1","textTransform":"capitalize"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" style="line-height:1.1;text-transform:capitalize"><?php esc_html_e( 'Have Questions ? Get In Touch', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","textTransform":"none","letterSpacing":"1px","fontStyle":"normal","fontWeight":"300","fontSize":"20px"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color" style="margin-bottom:0px;font-size:20px;font-style:normal;font-weight:300;letter-spacing:1px;line-height:1.4;text-transform:none"><?php esc_html_e( 'Send us a note anytime — we welcome feedback and requests.', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":5,"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e( 'Give us a call', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","textTransform":"none","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.4;text-transform:none"><?php esc_html_e( 'Mon – Fri, 9am – 7pm EST:', 'patterns-beauty' ); ?><br><?php esc_html_e( '(629) 555-0129', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":5,"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e( 'Write us an email', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","textTransform":"none","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.4;text-transform:none"><?php esc_html_e( 'info@example.com', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":5,"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e( 'Location', 'patterns-beauty' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","textTransform":"none","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.4;text-transform:none"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
