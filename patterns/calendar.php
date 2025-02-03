<?php
/**
 * Title: Calendar
 * Slug: patterns-beauty/calendar
 * Categories: posts
 * Description: Display a calendar showing your site’s posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Calendar', 'patterns-beauty' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:calendar /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
