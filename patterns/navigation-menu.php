<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-beauty/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation {"align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"style":{"typography":{"textTransform":"uppercase","fontSize":"12px","letterSpacing":"1px","fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|30"}}}  -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-beauty' ); ?>"} /-->	
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-beauty' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-beauty' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
