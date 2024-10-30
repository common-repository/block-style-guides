<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Quotes_Pullquotes extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Quote</h4>
		<!-- /wp:html -->

		<!-- wp:quote -->
		<blockquote class="wp-block-quote"><p><?php echo $this->short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote>
		<!-- /wp:quote -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Quote - Large Format</h4>
		<!-- /wp:html -->

		<!-- wp:quote {"className":"is-style-large"} -->
		<blockquote class="wp-block-quote is-style-large"><p><?php echo $this->short_lorem; ?></p><cite>Citation - Lorem Ipsum<br></cite></blockquote>
		<!-- /wp:quote -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Pullquote</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote -->
		<figure class="wp-block-pullquote"><blockquote><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Pullquote with Custom Background Color</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote {"customMainColor":"<?php echo $this->primary_custom_color; ?>","textColor":"very-dark-gray","className":"is-style-solid-color"} -->
		<figure class="wp-block-pullquote is-style-solid-color" style="background-color:<?php echo $this->primary_custom_color; ?>"><blockquote class="has-text-color has-very-dark-gray-color"><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Left-aligned Pullquote</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote {"align":"left","className":"is-style-default"} -->
		<figure class="wp-block-pullquote alignleft is-style-default"><blockquote><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Right-aligned Pullquote</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote {"align":"right"} -->
		<figure class="wp-block-pullquote alignright"><blockquote><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Wide Aligned Pullquote</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote {"align":"wide"} -->
		<figure class="wp-block-pullquote alignwide"><blockquote><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Full Width Pullquote</h4>
		<!-- /wp:html -->

		<!-- wp:pullquote {"align":"full"} -->
		<figure class="wp-block-pullquote alignfull"><blockquote><p><?php echo $this->very_short_lorem; ?></p><cite>Citation - Lorem Ipsum</cite></blockquote></figure>
		<!-- /wp:pullquote -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}