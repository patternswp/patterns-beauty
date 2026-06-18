<?php
/**
 * Title: Featured Section 3
 * Slug: patterns-beauty/featured-section-3
 * Categories: about, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"lightbox":{"enabled":false},"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" style="object-fit:cover" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"metadata":{"name":"Section title"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			
				<!-- wp:pattern {"slug":"patterns-beauty/section-title-2"} /-->

				<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"blockGap":"5px"}},"textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-tertiary-color has-text-color has-link-color">
						<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
						<figure class="wp-block-image size-full is-resized"><img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:16px" />
						</figure>
						<!-- /wp:image -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">
						<?php esc_html_e( 'Natural Beauty Salon', 'patterns-beauty' ); ?>
					</p>
					<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"blockGap":"5px"}},"textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-tertiary-color has-text-color has-link-color">
						<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:16px"/></figure>
						<!-- /wp:image -->

												<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php esc_html_e( 'Professional Women Spa Service', 'patterns-beauty' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"blockGap":"5px"}},"textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-tertiary-color has-text-color has-link-color">
						<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:16px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php esc_html_e( 'Experience Hair Treatments', 'patterns-beauty' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);letter-spacing:1px;text-transform:uppercase"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Read More', 'patterns-beauty' ); ?></a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
