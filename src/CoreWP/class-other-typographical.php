<?php

namespace BSG\CoreWP;

use BSG\Base\Abstract_Markup;

class Other_Typographical extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>
		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Verse</h4>
		<!-- /wp:html -->

		<!-- wp:verse -->
		<pre class="wp-block-verse">Hello, Dolly<br>Well, hello, Dolly<br>It's so nice to have you back where you belong<br>You're lookin' swell, Dolly<br>I can tell, Dolly<br>You're still glowin', you're still crowin'<br>You're still goin' strong</pre>
		<!-- /wp:verse -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Code</h4>
		<!-- /wp:html -->
		<?php
		/*
		 * This one has to have no indents in it, otherwise they'll carry through
		 * to the content.  It hurts me in my soul to have this one section
		 * indented differently.  I'm not asking you to fix it, I'm just
		 * asking you to hear me.
		 */
		?>
		<!-- wp:code -->
<pre class="wp-block-code"><code>&lt;?php
function hello() {
	echo "Hello, World!";
	// Here's a line which is intentionally really long to see how the theme handles displaying a line of code that's really long.
}</code></pre>
		<!-- /wp:code -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Preformatted</h4>
		<!-- /wp:html -->

		<!-- wp:preformatted -->
		<pre class="wp-block-preformatted"><code>A preformatted block.  Here's a line which is intentionally really long to see how the theme handles displaying a line of preformatted text that's really long.</code></pre>
		<!-- /wp:preformatted -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Unordered List</h4>
		<!-- /wp:html -->

		<!-- wp:list -->
		<ul><li>Lorem</li><li>Ipsum</li><li>Dolor</li></ul>
		<!-- /wp:list -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Unordered List with Sublist</h4>
		<!-- /wp:html -->

		<!-- wp:list -->
		<ul><li>Lorem<ul><li>Ipsum</li><li>Dolor</li></ul></li><li>Sit</li><li>Amit</li></ul>
		<!-- /wp:list -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Ordered List</h4>
		<!-- /wp:html -->

		<!-- wp:list {"ordered":true} -->
		<ol><li>Lorem</li><li>Ipsum</li><li>Dolor</li></ol>
		<!-- /wp:list -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Ordered List with Sublist</h4>
		<!-- /wp:html -->

		<!-- wp:list {"ordered":true} -->
		<ol><li>Lorem</li><li>Ipsum<ol><li>Dolor</li><li>Sit</li></ol></li><li>Amit</li></ol>
		<!-- /wp:list -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Button</h4>
		<!-- /wp:html -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Left-aligned Button</h4>
		<!-- /wp:html -->

		<!-- wp:button {"align":"left"} -->
		<div class="wp-block-button alignleft"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Centered Button</h4>
		<!-- /wp:html -->

		<!-- wp:button {"align":"center"} -->
		<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Right-aligned Button</h4>
		<!-- /wp:html -->

		<!-- wp:button {"align":"right"} -->
		<div class="wp-block-button alignright"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Outlined Button</h4>
		<!-- /wp:html -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Square Button</h4>
		<!-- /wp:html -->

		<!-- wp:button {"className":"is-style-squared"} -->
		<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Table</h4>
		<!-- /wp:html -->

		<!-- wp:table -->
		<table class="wp-block-table"><tbody><tr><td>Lorem</td><td>ipsum dolor sit amet,</td></tr><tr><td>consec</td><td>tetur adipiscing elit.</td></tr></tbody></table>
		<!-- /wp:table -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Table with Fixed-Width Columns</h4>
		<!-- /wp:html -->

		<!-- wp:table {"hasFixedLayout":true} -->
		<table class="wp-block-table has-fixed-layout"><tbody><tr><td>Lorem</td><td>ipsum</td><td>dolor sit amet,</td></tr><tr><td>consectetur adipiscing</td><td>elit</td><td>leo.</td></tr></tbody></table>
		<!-- /wp:table -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Table with Fixed-Width Columns and Stripes</h4>
		<!-- /wp:html -->

		<!-- wp:table {"hasFixedLayout":true,"className":"is-style-stripes"} -->
		<table class="wp-block-table has-fixed-layout is-style-stripes"><tbody><tr><td>Lorem</td><td>ipsum</td></tr><tr><td>dolor</td><td>sit</td></tr><tr><td>amet,</td><td>consectetur.</td></tr></tbody></table>
		<!-- /wp:table -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Wide Aligned Table with Fixed-Width Columns</h4>
		<!-- /wp:html -->

		<!-- wp:table {"hasFixedLayout":true,"align":"wide"} -->
		<table class="wp-block-table alignwide has-fixed-layout"><tbody><tr><td>Lorem</td><td>ipsum</td><td>dolor</td></tr><tr><td>sit</td><td>amet,</td><td>consectetur.</td></tr></tbody></table>
		<!-- /wp:table -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center;">Full Aligned Table with Fixed-Width Columns</h4>
		<!-- /wp:html -->

		<!-- wp:table {"hasFixedLayout":true,"align":"full"} -->
		<table class="wp-block-table alignfull has-fixed-layout"><tbody><tr><td>Lorem</td><td>ipsum</td><td>dolor</td></tr><tr><td>sit</td><td>amet,</td><td>consectetur.</td></tr></tbody></table>
		<!-- /wp:table -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}