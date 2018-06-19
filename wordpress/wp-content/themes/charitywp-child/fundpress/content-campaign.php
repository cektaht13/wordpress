<?php
/**
 * The Template for displaying all archive products.
 *
 * Override this template by copying it to yourtheme/tp-donate/templates/content-campaign.php
 *
 * @author        ThimPress
 * @package    tp-donate/templates
 * @version     1.0
 */

$col = 'col-xs-6 col-md-' . ( 12 / (int) DN_Settings::instance()->donate->get( 'archive_column', '4' ) );

?>

<article id="campaign-<?php the_ID(); ?>" <?php post_class( $col ); ?>>

    <div class="content-inner">

        <div class="entry-thumbnail">
            <div class="thumbnail">
				<?php

				/**
				 * donate_loop_campaign_thumbnail hook
				 * <!-- Thumbnail Campaign -->
				 */
				the_post_thumbnail( 'shop_single' ); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="thim-button style3" ><?php esc_html_e( 'DONATE NOW', 'charitywp' ); ?></a>

        </div>

        <div class="event-content">
            <div class="dn-content-inner">
				<?php
				/**
				 * donate_loop_campaign_title hook
				 * <!-- Title Campaign -->
				 */
				do_action( 'donate_loop_campaign_title' );

				/**
				 * donate_loop_campaign_countdown
				 * <!-- Description Campaign -->
				 */
				do_action( 'donate_loop_campaign_excerpt' );
				?>
            </div>
            <div class="dn-content-countdown-box">
				<?php
					$post_tags = get_the_terms( get_the_ID(), 'dn_campaign_tag' );
					if (is_array($post_tags)) {
						foreach($post_tags as $tag) {
							if ($tag->slug === 'available') {
								echo ("<div class='card-val tag-{$tag->slug}'>НЕЗДIЙСНЕНА</div>");
							}
							if ($tag->slug === 'fulfilled') {
								echo ("<div class='card-val tag-{$tag->slug}'>ЗДIЙСНЕНА</div>");
							}
							if ($tag->slug === 'in-progress') {
								echo ("<div class='card-val tag-{$tag->slug}'>В ПРОЦЕСI</div>");
							}
						}
					}
				?>
            </div>
			<?php
			/**
			 * donate_loop_campaign_posted hook
			 * <!-- Posted Campaign -->
			 */
			do_action( 'donate_loop_campaign_posted' );
			?>

        </div>

    </div>

</article>
