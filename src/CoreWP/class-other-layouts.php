<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Other_Layouts extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Spacer (100px)</h4>
		<!-- /wp:html -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Separator (Short Line)</h4>
		<!-- /wp:html -->

		<!-- wp:separator -->
		<hr class="wp-block-separator"/>
		<!-- /wp:separator -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Separator (Wide Line)</h4>
		<!-- /wp:html -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Separator (Dots)</h4>
		<!-- /wp:html -->

		<!-- wp:separator {"className":"is-style-dots"} -->
		<hr class="wp-block-separator is-style-dots"/>
		<!-- /wp:separator -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Page Break</h4>
		<!-- /wp:html -->

		<!-- wp:nextpage -->
		<!--nextpage-->
		<!-- /wp:nextpage -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Second Page</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->
		<?php
		$out = ob_get_clean();
		return $out;
	}
}