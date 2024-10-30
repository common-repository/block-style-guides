<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Columns extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Two Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns -->
		<div class="wp-block-columns has-2-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Three Columns, Wide Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":3,"align":"wide"} -->
		<div class="wp-block-columns alignwide has-3-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Three Columns Full Width Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":3,"align":"full"} -->
		<div class="wp-block-columns alignfull has-3-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Two Columns with Nested Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns -->
		<div class="wp-block-columns has-2-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns -->
		<div class="wp-block-columns has-2-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Three Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":3} -->
		<div class="wp-block-columns has-3-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Four Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":4} -->
		<div class="wp-block-columns has-4-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Five Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":5} -->
		<div class="wp-block-columns has-5-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Six Columns</h4>
		<!-- /wp:html -->

		<!-- wp:columns {"columns":6} -->
		<div class="wp-block-columns has-6-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}