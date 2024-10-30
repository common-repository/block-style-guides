<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Paragraphs_Headers extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:heading {"level":1} -->
		<h1>Header 1</h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":1,"align":"center"} -->
		<h1 style="text-align:center">Centered H1</h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":1,"align":"right"} -->
		<h1 style="text-align:right">Right Aligned H1</h1>
		<!-- /wp:heading -->

		<!-- wp:heading -->
		<h2>Header 2</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3} -->
		<h3>Header 3</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Header 4</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":5} -->
		<h5>Header 5</h5>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":6} -->
		<h6>Header 6</h6>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph -->
		<p><strong>Bold</strong> <em>italic</em> <a href="<?php echo $this->url; ?>" target="_blank">link</a> <del>strikethrough</del>. <?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with Centered Text</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"align":"center"} -->
		<p style="text-align:center"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with Right-aligned Text</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"align":"right"} -->
		<p style="text-align:right"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with Custom Background Color</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"customBackgroundColor":"<?php echo $this->primary_custom_color; ?>"} -->
		<p style="background-color:<?php echo $this->primary_custom_color; ?>" class="has-background"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with Custom Text Color</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"customTextColor":"<?php echo $this->primary_custom_color; ?>"} -->
		<p style="color:<?php echo $this->primary_custom_color; ?>" class="has-text-color"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with a Drop Cap</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"dropCap":true} -->
		<p class="has-drop-cap"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with "Small" Font Size</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with "Medium" Font Size</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with "Large" Font Size</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Paragraph with "Huge" Font Size</h4>
		<!-- /wp:html -->

		<!-- wp:paragraph {"fontSize":"huge"} -->
		<p class="has-huge-font-size"><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->
		<?php

		$out = ob_get_clean();
		return $out;
	}

	// This will be used later to allow for individual blocks to be chosen.  Not in use yet.
	protected function get_list_of_blocks() {
		$list_of_blocks = array(
			'header-1'						=> 'H1',
			'header-1-centered'				=> 'Centered H1',
			'header-1-right'				=> 'Right-aligned H1',
			'header-2'						=> 'H2',
			'header-3'						=> 'H3',
			'header-4'						=> 'H4',
			'header-5'						=> 'H5',
			'header-6'						=> 'H6',
			'paragraph'						=> 'Paragraph',
			'paragraph-centered'			=> 'Centered Paragraph',
			'paragraph-right'				=> 'Right-aligned Paragraph',
			'paragraph-custom-background'	=> 'Paragraph with a Custom Background Color',
			'paragraph-custom-text'			=> 'Paragraph with a Custom Text Color',
			'paragraph-dropcap'				=> 'Paragraph with a Drop Cap',
			'paragraph-small-font'			=> 'Paragraph with "Small" Font Type',
			'paragraph-medium-font'			=> 'Paragraph with "Medium" Font Type',
			'paragraph-large-font'			=> 'Paragraph with "Large" Font Type',
			'paragraph-huge-font'			=> 'Paragraph with "Huge" Font Type',
		);

		return $list_of_blocks;
	}
}