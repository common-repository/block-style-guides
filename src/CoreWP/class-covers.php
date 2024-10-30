<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Covers extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>"} -->
		<div class="wp-block-cover has-background-dim" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Cover Image with Title</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>"} -->
		<div class="wp-block-cover has-background-dim" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"><p class="wp-block-cover-text">Cover Image with a Title</p></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear: both;text-align:center;">Cover Image with an Overlay</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","customOverlayColor":"<?php echo $this->primary_custom_color; ?>"} -->
		<div class="wp-block-cover has-background-dim" style="background-image:url(<?php echo $this->large_landscape_image; ?>);background-color:<?php echo $this->primary_custom_color; ?>"></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Left-aligned Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"left"} -->
		<div class="wp-block-cover has-background-dim alignleft" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Centered Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"center"} -->
		<div class="wp-block-cover has-background-dim aligncenter" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Right-aligned Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"right"} -->
		<div class="wp-block-cover has-background-dim alignright" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Wide-aligned Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"wide"} -->
		<div class="wp-block-cover has-background-dim alignwide" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Full Width Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"full"} -->
		<div class="wp-block-cover has-background-dim alignfull" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Full Width Fixed Cover Image</h4>
		<!-- /wp:html -->

		<!-- wp:cover {"url":"<?php echo $this->large_landscape_image; ?>","align":"full","hasParallax":true} -->
		<div class="wp-block-cover has-background-dim has-parallax alignfull" style="background-image:url(<?php echo $this->large_landscape_image; ?>)"></div>
		<!-- /wp:cover -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}