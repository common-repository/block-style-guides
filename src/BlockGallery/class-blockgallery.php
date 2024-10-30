<?php

namespace BSG\BlockGallery;

use BSG\Base\Abstract_Markup;

class BlockGallery extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Carousel - Large with Arrows</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/carousel {"gutterMobile":0} -->
		<div class="wp-block-blockgallery-carousel"><div class="is-cropped blockgallery has-no-alignment has-caption-style-dark has-horizontal-gutter"><div class="has-carousel has-carousel-lrg" style="height:400px" data-flickity="{&quot;autoPlay&quot;:false,&quot;draggable&quot;:true,&quot;pageDots&quot;:false,&quot;prevNextButtons&quot;:true,&quot;wrapAround&quot;:true,&quot;arrowShape&quot;:{&quot;x0&quot;:10,&quot;x1&quot;:60,&quot;y1&quot;:50,&quot;x2&quot;:65,&quot;y2&quot;:45,&quot;x3&quot;:20}}"><div class="blockgallery--item"><figure class="blockgallery--figure has-margin-left-5 has-margin-right-5"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6"/></figure></div><div class="blockgallery--item"><figure class="blockgallery--figure has-margin-left-5 has-margin-right-5"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521"/></figure></div><div class="blockgallery--item"><figure class="blockgallery--figure has-margin-left-5 has-margin-right-5"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522"/></figure></div></div></div></div>
		<!-- /wp:blockgallery/carousel -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Carousel - Extra Large with Dots</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/carousel {"gutter":0,"gutterMobile":0,"gridSize":"xlrg","pageDots":true,"prevNextButtons":false} -->
		<div class="wp-block-blockgallery-carousel"><div class="is-cropped blockgallery has-no-alignment has-caption-style-dark"><div class="has-carousel has-carousel-xlrg" style="height:400px" data-flickity="{&quot;autoPlay&quot;:false,&quot;draggable&quot;:true,&quot;pageDots&quot;:true,&quot;prevNextButtons&quot;:false,&quot;wrapAround&quot;:true,&quot;arrowShape&quot;:{&quot;x0&quot;:10,&quot;x1&quot;:60,&quot;y1&quot;:50,&quot;x2&quot;:65,&quot;y2&quot;:45,&quot;x3&quot;:20}}"><div class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6"/></figure></div><div class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521"/></figure></div><div class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522"/></figure></div></div></div></div>
		<!-- /wp:blockgallery/carousel -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Masonry - Medium</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/masonry {"align":"wide","gridSize":"med"} -->
		<div class="wp-block-blockgallery-masonry alignwide"><div class="blockgallery has-caption-style-dark has-gutter"><ul class="has-grid-med has-gutter-15 has-gutter-mobile-15"><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_landscape_image; ?>" alt="" data-id="1525" class="wp-image-1525"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1524" class="wp-image-1524"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="1523" class="wp-image-1523"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521"/><figcaption class="blockgallery--caption">Caption</figcaption></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6"/></figure></li></ul></div></div>
		<!-- /wp:blockgallery/masonry -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Masonry - Large</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/masonry {"align":"wide","gridSize":"lrg"} -->
		<div class="wp-block-blockgallery-masonry alignwide"><div class="blockgallery has-caption-style-dark has-gutter"><ul class="has-grid-lrg has-gutter-15 has-gutter-mobile-15"><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_landscape_image; ?>" alt="" data-id="1525" class="wp-image-1525"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1524" class="wp-image-1524"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="1523" class="wp-image-1523"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521"/><figcaption class="blockgallery--caption">Caption</figcaption></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6"/></figure></li></ul></div></div>
		<!-- /wp:blockgallery/masonry -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Masonry - Extra Large</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/masonry {"align":"wide"} -->
		<div class="wp-block-blockgallery-masonry alignwide"><div class="blockgallery has-caption-style-dark has-gutter"><ul class="has-grid-xlrg has-gutter-15 has-gutter-mobile-15"><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_landscape_image; ?>" alt="" data-id="1525" class="wp-image-1525"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1524" class="wp-image-1524"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="1523" class="wp-image-1523"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521"/><figcaption class="blockgallery--caption">Caption</figcaption></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6"/></figure></li></ul></div></div>
		<!-- /wp:blockgallery/masonry -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Stacked - Regular with Large Box Shadow</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/stacked {"gutter":20,"shadow":"lrg","fullwidth":false} -->
		<div class="wp-block-blockgallery-stacked alignfull"><ul class="blockgallery has-margin"><li class="blockgallery--item"><figure class="blockgallery--figure has-margin-bottom-20"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="1523" class="wp-image-1523 has-shadow-lrg"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure has-margin-bottom-20"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522 has-shadow-lrg"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure has-margin-bottom-20"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521 has-shadow-lrg"/><figcaption class="blockgallery--caption">Caption</figcaption></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure has-margin-bottom-20"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6 has-shadow-lrg"/></figure></li></ul></div>
		<!-- /wp:blockgallery/stacked -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">Block Gallery Stacked - Full Width</h4>
		<!-- /wp:html -->

		<!-- wp:blockgallery/stacked -->
		<div class="wp-block-blockgallery-stacked alignfull"><ul class="blockgallery has-fullwidth-images"><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="1523" class="wp-image-1523 has-shadow-none"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->medium_portrait_image; ?>" alt="" data-id="1522" class="wp-image-1522 has-shadow-none"/></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_landscape_image; ?>" alt="" data-id="1521" class="wp-image-1521 has-shadow-none"/><figcaption class="blockgallery--caption">Caption</figcaption></figure></li><li class="blockgallery--item"><figure class="blockgallery--figure"><img src="<?php echo $this->small_square_image; ?>" alt="" data-id="6" class="wp-image-6 has-shadow-none"/></figure></li></ul></div>
		<!-- /wp:blockgallery/stacked -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}