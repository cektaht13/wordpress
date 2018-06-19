<?php
/**
 * Single Template
 */
?>
<article id="tp_donate-<?php the_ID(); ?>" <?php post_class('campaign_single'); ?>>

	<?php
		/**
		 * donate_before_single_room_summary hook
		 *
		 * @hooked donate_show_room_sale_flash - 10
		 * @hooked donate_show_room_images - 20
		 */
		do_action( 'donate_before_single_campaign' );
	?>

	<div class="summary entry-summary">
		<div class="right-box" style="float: right;">
			<?php 
				/**
				 * donate_single_campaign_thumbnail hook
				 */
				do_action( 'donate_single_campaign_donate' );
			?>
		</div>
		<?php
			/**
			 * donate_single_campaign_title hook
			 */
			do_action( 'donate_single_campaign_title' );
		?>
			
		<?php
			/**
			 * donate_single_campaign_thumbnail hook
			 */
			do_action( 'donate_single_campaign_thumbnail' );
		?>

	</div><!-- .summary -->

	<?php
		/**
		 * donate_single_campaign_content hook
		 */
		do_action( 'donate_single_campaign_content' );
	?>

	<?php
		/**
		 * donate_after_single_room hook
		 *
		 * @hooked donate_output_room_data_tabs - 10
		 * @hooked donate_upsell_display - 15
		 * @hooked donate_output_related_campaigns - 20
		 */
		do_action( 'donate_after_single_campaign' );
	?>

</article><!-- #campaign-<?php the_ID(); ?> -->

<div class="share-wrapper">
	<?php do_action('thim_social_share'); ?>
</div>
