<?php
/**
 * Title: Featured Section 9
 * Slug: patterns-beauty/featured-section-9
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"60%"},"metadata":{"name":"Section title"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<p class="has-text-align-center" style="margin-bottom:0px;font-size:13px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Our Clients', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2","textTransform":"capitalize"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="line-height:1.2;text-transform:capitalize"><?php esc_html_e( 'Trusted By 200+ Amazing Companies Worldwide', 'patterns-beauty' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:image {"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-1.png" style="width:auto;height:80px"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-2.png" style="width:auto;height:80px"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-3.png" style="width:auto;height:80px"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-4.png" style="width:auto;height:80px"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-5.png" style="width:auto;height:80px"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
