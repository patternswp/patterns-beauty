<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme reivew notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Beauty
 * @subpackage Patterns_Beauty/Patterns_Beauty_Intro
 */

global $current_user;
?>
<div id='patterns-beauty-review-notice' class="notice updated patterns-beauty-review-notice at-p at-pos">
	<button class="patterns-beauty-rn-permanent-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-beauty' ); ?>
	</button>
	<p>
		<?php
		printf(
		/* Translators: %1$s current user display name. */
			esc_html__(
				'Howdy, %1$s! It seems that you have been using this theme for more than 15 days. We hope you are happy with everything that the theme has to offer. If you can spare a minute, please help us by leaving a review on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future!',
				'patterns-beauty'
			),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>'
		);
		?>
	</p>

	<div class="links">
		<a href="https://wordpress.org/support/theme/patterns-beauty/reviews/#new-post" class="patterns-beauty-rn-temporary-close patterns-beauty-btn-primary button-primary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-thumbs-up"></span>
			<span><?php esc_html_e( 'Sure', 'patterns-beauty' ); ?></span>
		</a>

		<button class="patterns-beauty-rn-temporary-close patterns-beauty-btn-secondary button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-calendar"></span>
			<span><?php esc_html_e( 'Maybe later', 'patterns-beauty' ); ?></span>
		</button>

		<button class="patterns-beauty-rn-permanent-close patterns-beauty-btn-default button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-smiley"></span>
			<span><?php esc_html_e( 'I already did', 'patterns-beauty' ); ?></span>
		</button>

		<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/patterns-beauty' ); ?>" class="patterns-beauty-rn-temporary-close button-secondary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-edit"></span>
			<span><?php esc_html_e( 'Got theme support question?', 'patterns-beauty' ); ?></span>
		</a>
	</div>
</div>
