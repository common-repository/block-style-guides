<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Galleries extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Two Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery -->
		<ul class="wp-block-gallery columns-2 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/><figcaption>With a Caption</figcaption></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Three Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery -->
		<ul class="wp-block-gallery columns-3 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Three Images Across Two Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":2} -->
		<ul class="wp-block-gallery columns-2 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Four Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":4} -->
		<ul class="wp-block-gallery columns-4 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Four Images Across Three Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery -->
		<ul class="wp-block-gallery columns-3 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Four Images Across Two Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":2} -->
		<ul class="wp-block-gallery columns-2 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Five Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":5} -->
		<ul class="wp-block-gallery columns-5 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Six Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":6} -->
		<ul class="wp-block-gallery columns-6 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Gallery - Seven Columns</h4>
		<!-- /wp:html -->

		<!-- wp:gallery {"columns":7} -->
		<ul class="wp-block-gallery columns-7 is-cropped"><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo $this->small_landscape_image; ?>" alt=""/></figure></li></ul>
		<!-- /wp:gallery -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}