<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Read_More extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Content Before the Read More Tag</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph -->
		<p><?php echo $this->long_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:more {"customText":"This has an editable title"} -->
		<!--more This has an editable title-->
		<!-- /wp:more -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Content After the Read More Tag</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph -->
		<p><?php echo $this->long_lorem; ?></p>
		<!-- /wp:paragraph -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}