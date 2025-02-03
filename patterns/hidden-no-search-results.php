<?php
/**
 * Title: No Search Result
 * Slug: patterns-beauty/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-beauty' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-beauty' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-beauty' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-beauty' ); ?>","buttonUseIcon":true} /-->
