<?php
/**
 * Title: Footer
 * Slug: patterns-beauty/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"accent","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);"><!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
	
<!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color  has-small-font-size" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit utelit tellus luctus.', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:25px"><!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
	<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
	<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Contact Info', 'patterns-beauty' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color  has-small-font-size" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-beauty' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-default-color has-text-color has-link-color  has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-beauty' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
<p class="pwp-txt-dec-non has-text-align-center has-default-color has-text-color has-link-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600"><a href="<?php echo esc_url( 'callto:000 - 9874 563 210' ); ?>"><?php esc_html_e( '000 - 9874 563 210', 'patterns-beauty' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Category', 'patterns-beauty' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"15px"},"typography":{"letterSpacing":"0px","fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Stone Massage', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Aroma Therapy', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Waxing', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Body Treatments', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Hands & Feet', 'patterns-beauty' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Recent Posts', 'patterns-beauty' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":80,"featuredImageSizeHeight":80,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#00000052"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#00000052"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"15px"},"typography":{"letterSpacing":"0px","fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'patterns-beauty' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
<!-- wp:pattern {"slug":"patterns-beauty/copyright"} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"patterns-beauty/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
