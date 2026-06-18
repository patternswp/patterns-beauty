<?php
/**
 * Title: Featured Section 1
 * Slug: patterns-beauty/featured-section-1
 * Categories: media, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:pattern {"slug":"patterns-beauty/section-title-1"} /-->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg","dimRatio":10,"overlayColor":"accent","minHeight":500,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:pattern {"slug":"patterns-beauty/card-1"} /-->

<!-- wp:group {"layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg","dimRatio":10,"overlayColor":"accent","minHeight":230,"isDark":false,"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-cover is-light" style="min-height:230px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg","dimRatio":10,"overlayColor":"accent","focalPoint":{"x":0.49,"y":0.02},"minHeight":500,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="object-position:49% 2%" data-object-fit="cover" data-object-position="49% 2%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
