<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Images extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Image</h4>
		<!-- /wp:html -->

		<!-- wp:image -->
		<figure class="wp-block-image"><img src="<?php echo $this->medium_landscape_image; ?>" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Image with a Caption</h4>
		<!-- /wp:html -->

		<!-- wp:image -->
		<figure class="wp-block-image"><img src="<?php echo $this->medium_landscape_image; ?>" alt=""/><figcaption>With a caption</figcaption></figure>
		<!-- /wp:image -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Left-aligned Image</h4>
		<!-- /wp:html -->

		<!-- wp:image {"align":"left"} -->
		<div class="wp-block-image"><figure class="alignleft"><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><?php echo $this->long_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Centered Image</h4>
		<!-- /wp:html -->

		<!-- wp:image {"align":"center"} -->
		<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Right-aligned Image</h4>
		<!-- /wp:html -->

		<!-- wp:image {"align":"right"} -->
		<div class="wp-block-image"><figure class="alignright"><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><?php echo $this->long_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Wide Image</h4>
		<!-- /wp:html -->

		<!-- wp:image {"align":"wide"} -->
		<figure class="wp-block-image alignwide"><img src="<?php echo $this->large_landscape_image; ?>" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Full Image</h4>
		<!-- /wp:html -->

		<!-- wp:image {"align":"full"} -->
		<figure class="wp-block-image alignfull"><img src="<?php echo $this->large_landscape_image; ?>" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Media &amp; Text </h4>
		<!-- /wp:html -->

		<!-- wp:media-text {"mediaType":"image"} -->
		<div class="wp-block-media-text alignwide"><figure class="wp-block-media-text__media"><img src="<?php echo $this->medium_landscape_image; ?>.png" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:media-text -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Classic Block with Inline Image</h4>
		<!-- /wp:html -->

		<p><img class="alignnone size-medium" src="<?php echo $this->small_landscape_image; ?>.png" alt="" width="300" height="200"><?php echo $this->medium_lorem; ?></p>

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Paragraph Block with Inline Images</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph -->
		<p><img style="width: 150px;" src="<?php echo $this->small_landscape_image; ?>.png" alt=""><?php echo $this->short_lorem; ?><img style="width: 150px;" src="<?php echo $this->small_landscape_image; ?>.png" alt=""><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}