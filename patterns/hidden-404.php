<?php
/**
 * Title: 404
 * Slug: patterns-beauty/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg","dimRatio":90,"overlayColor":"accent","minHeight":60,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-left has-default-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"><?php echo esc_html_e( '404', 'patterns-beauty' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->


<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:group {"align":"full","backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"><!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.png" style="object-fit:cover"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"is-style-relative at-pos pw-error-404","layout":{"type":"constrained","wideSize":"500px"}} -->
<div class="wp-block-group alignwide is-style-relative at-pos pw-error-404"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"5rem"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" style="font-size:5rem"><?php echo esc_html_e( 'Ooops!', 'patterns-beauty' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size" style="margin-bottom:15px"><?php echo esc_html_e( 'This page could not be found.', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_e( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search......","buttonText":"Search"} /-->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><a href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html_e( 'Back To Home', 'patterns-beauty' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->
