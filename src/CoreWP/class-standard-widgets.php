<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Standard_Widgets extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:heading {"level":4} -->
		<h4>Archives</h4>
		<!-- /wp:heading -->

		<!-- wp:archives /-->

		<!-- wp:heading {"level":4} -->
		<h4>Categories</h4>
		<!-- /wp:heading -->

		<!-- wp:categories /-->

		<!-- wp:heading {"level":4} -->
		<h4>Latest Comments</h4>
		<!-- /wp:heading -->

		<!-- wp:latest-comments /-->

		<!-- wp:heading {"level":4} -->
		<h4>Latest Posts</h4>
		<!-- /wp:heading -->

		<!-- wp:latest-posts /-->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}