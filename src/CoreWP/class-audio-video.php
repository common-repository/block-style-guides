<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Audio_Video extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h3 style="clear:both;text-align:center">NOTE: This page needs to be previewed from the Gutenberg Editor screen for the videos to load properly.  It does not need to be published, it just needs to be opened from there.</h3>
		<!-- /wp:html -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio -->
		<figure class="wp-block-audio"><audio controls src="<?php echo $this->audio_url; ?>"></audio></figure>
		<!-- /wp:audio -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Audio with a Caption</h4>
		<!-- /wp:html -->

		<!-- wp:audio -->
		<figure class="wp-block-audio"><audio controls src="<?php echo $this->audio_url; ?>"></audio><figcaption>Audio with a Caption</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Left-aligned Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio {"align":"left"} -->
		<figure class="wp-block-audio alignleft"><audio controls src="<?php echo $this->audio_url; ?>"></audio></figure>
		<!-- /wp:audio -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Centered Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio {"align":"center"} -->
		<figure class="wp-block-audio aligncenter"><audio controls src="<?php echo $this->audio_url; ?>"></audio><figcaption>Centered Audio</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Right-aligned Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio {"align":"right"} -->
		<figure class="wp-block-audio alignright"><audio controls src="<?php echo $this->audio_url; ?>"></audio></figure>
		<!-- /wp:audio -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Wide Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio {"align":"wide"} -->
		<figure class="wp-block-audio alignwide"><audio controls src="<?php echo $this->audio_url; ?>"></audio><figcaption>Wide Audio</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Full-width Audio</h4>
		<!-- /wp:html -->

		<!-- wp:audio {"align":"full"} -->
		<figure class="wp-block-audio alignfull"><audio controls src="<?php echo $this->audio_url; ?>"></audio><figcaption>Full Width Audio</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Video with a Caption</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div><figcaption>Video with a caption</figcaption></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Left-aligned Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","align":"left","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube alignleft wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Centered Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","align":"center","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube aligncenter wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Right-aligned Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","align":"right","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube alignright wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Wide Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube alignwide wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Full-width Video</h4>
		<!-- /wp:html -->

		<!-- wp:core-embed/youtube {"url":"<?php echo $this->video_url; ?>","type":"video","providerNameSlug":"youtube","align":"full","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed-youtube alignfull wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		<?php echo $this->video_url; ?>
		</div></figure>
		<!-- /wp:core-embed/youtube -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}