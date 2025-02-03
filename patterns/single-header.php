<?php
/**
 * Title: Page Header With Post Title
 * Slug: patterns-beauty/single-header
 * Block Types: core/template-part/single-header
 * Description: Page header that displays the post, page or post type title.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg","dimRatio":90,"overlayColor":"accent","minHeight":60,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:0px;padding-right:var(--wp--preset--spacing--30);padding-bottom:0px;padding-left:var(--wp--preset--spacing--30);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
