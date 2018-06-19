<?php
if( ! defined( 'ABSPATH' ) ) exit();

?>
<!-- Overlay -->
<div class="campaign_thumbnail_overlay">
	<?php
		$post_tags = get_the_terms( get_the_ID(), 'dn_campaign_tag' );
		if (is_array($post_tags)) {
			foreach($post_tags as $tag) {
				if ($tag->slug === 'available') {
					?>
					<a href="#" class="donate_load_form_disabled"><?php esc_html_e( 'Donate now', 'fundpress' ); ?></a>
					<?php
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