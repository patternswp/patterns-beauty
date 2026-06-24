<?php
/**
 * Title: Single Full width
 * Slug: patterns-beauty/single-post-full-width
 * Template Types: single
 * Description: A full-width layout template for displaying a post without sidebars.
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-absolute","tagName":"header"} /-->
<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
		<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
	<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"patterns-beauty/hidden-single-post-content"} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
