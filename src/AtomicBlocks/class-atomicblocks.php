<?php

namespace BSG\AtomicBlocks;

use BSG\Base\Abstract_Markup;

class AtomicBlocks extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Accordion</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-accordion -->
		<div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-18"><details><summary class="ab-accordion-title">Title - Lorem Ipsum</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph --></div></details></div>
		<!-- /wp:atomic-blocks/ab-accordion -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Button - Square</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-button {"buttonText":"Lorem Ipsum - Square","buttonShape":"ab-button-shape-square"} -->
		<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Lorem Ipsum - Square</a></div>
		<!-- /wp:atomic-blocks/ab-button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Button - Rounded Square</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-button {"buttonText":"Lorem Ipsum - Rounded Square"} -->
		<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Lorem Ipsum - Rounded Square</a></div>
		<!-- /wp:atomic-blocks/ab-button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Button - Circular</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-button {"buttonText":"Lorem Ipsum - Circular","buttonShape":"ab-button-shape-circular"} -->
		<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-circular ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Lorem Ipsum - Circular</a></div>
		<!-- /wp:atomic-blocks/ab-button -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB - Call to Action</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-cta {"buttonText":"Lorem Ipsum"} -->
		<div style="text-align:center" class="wp-block-atomic-blocks-ab-cta ab-block-cta"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#32373c">Title Lorem Ipsum</h2><div class="ab-cta-text ab-font-size-32" style="color:#32373c"><p><?php echo $this->medium_lorem; ?></p></div></div><div class="ab-cta-button"><a href="<?php echo $this->url; ?>" target="_self" rel="noopener noreferrer" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Lorem Ipsum</a></div></div>
		<!-- /wp:atomic-blocks/ab-cta -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB - Call to Action with Background</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-cta {"buttonText":"Lorem Ipsum"} -->
		<div style="text-align:center" class="wp-block-atomic-blocks-ab-cta ab-block-cta"><div class="ab-cta-image-wrap"><img class="ab-cta-image has-background-dim" src="<?php echo $this->small_landscape_image; ?>" alt=""/></div><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#32373c">Title Lorem Ipsum</h2><div class="ab-cta-text ab-font-size-32" style="color:#32373c"><p><?php echo $this->medium_lorem; ?></p></div></div><div class="ab-cta-button"><a href="<?php echo $this->url; ?>" target="_self" rel="noopener noreferrer" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Lorem Ipsum</a></div></div>
		<!-- /wp:atomic-blocks/ab-cta -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Container with two Paragraphs</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-container {"containerBackgroundColor":"<?php echo $this->primary_custom_color; ?>"} -->
		<div style="background-color:<?php echo $this->primary_custom_color; ?>" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph --></div></div></div>
		<!-- /wp:atomic-blocks/ab-container -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Drop Cap - Letter</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-drop-cap -->
		<div style="color:#32373c" class="wp-block-atomic-blocks-ab-drop-cap drop-cap-letter ab-font-size-3 ab-block-drop-cap"><div class="ab-drop-cap-text"><p><?php echo $this->long_lorem; ?></p></div></div>
		<!-- /wp:atomic-blocks/ab-drop-cap -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Drop Cap - Square</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-drop-cap {"dropCapStyle":"ab-drop-cap-square"} -->
		<div style="color:#32373c" class="wp-block-atomic-blocks-ab-drop-cap ab-drop-cap-square ab-font-size-3 ab-block-drop-cap"><div class="ab-drop-cap-text"><p><?php echo $this->long_lorem; ?></p></div></div>
		<!-- /wp:atomic-blocks/ab-drop-cap -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Drop Cap - Border</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-drop-cap {"dropCapStyle":"ab-drop-cap-border"} -->
		<div style="color:#32373c" class="wp-block-atomic-blocks-ab-drop-cap ab-drop-cap-border ab-font-size-3 ab-block-drop-cap"><div class="ab-drop-cap-text"><p><?php echo $this->long_lorem; ?></p></div></div>
		<!-- /wp:atomic-blocks/ab-drop-cap -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Notice - Always Show</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-notice {"noticeTitle":"Lorem Ipsum","noticeDismiss":"Always Show"} -->
		<div style="color:#32373c;background-color:#00d1b2" class="wp-block-atomic-blocks-ab-notice Always Show ab-font-size-18 ab-block-notice" data-id="386776"><div class="ab-notice-dismiss" style="fill:#fff;color:#fff"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"><path d="M10 2c4.42 0 8 3.58 8 8s-3.58 8-8 8-8-3.58-8-8 3.58-8 8-8zM15 13l-3-3 3-3-2-2-3 3-3-3-2 2 3 3-3 3 2 2 3-3 3 3z"></path></svg></div><div class="ab-notice-title" style="color:#fff"><p>Lorem Ipsum</p></div><div class="ab-notice-text" style="border-color:#00d1b2"><p><?php echo $this->medium_lorem; ?></p></div></div>
		<!-- /wp:atomic-blocks/ab-notice -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Notice - Dismissable</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-notice {"noticeTitle":"Lorem Ipsum","noticeDismiss":"ab-dismissable"} -->
		<div style="color:#32373c;background-color:#00d1b2" class="wp-block-atomic-blocks-ab-notice ab-dismissable ab-font-size-18 ab-block-notice" data-id="6d2319"><div class="ab-notice-dismiss" style="fill:#fff;color:#fff"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"><path d="M10 2c4.42 0 8 3.58 8 8s-3.58 8-8 8-8-3.58-8-8 3.58-8 8-8zM15 13l-3-3 3-3-2-2-3 3-3-3-2 2 3 3-3 3 2 2 3-3 3 3z"></path></svg></div><div class="ab-notice-title" style="color:#fff"><p>Lorem Ipsum</p></div><div class="ab-notice-text" style="border-color:#00d1b2"><p><?php echo $this->medium_lorem; ?></p></div></div>
		<!-- /wp:atomic-blocks/ab-notice -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Post Grid</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-post-grid /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Post Grid with Pages</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-post-grid {"postType":"page"} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Pricing</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-pricing {"columns":3} -->
		<div class="wp-block-atomic-blocks-ab-pricing ab-pricing-columns-3"><div class="ab-pricing-table-wrap ab-block-pricing-table-gap-2"><!-- wp:atomic-blocks/ab-pricing-table -->
		<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:2px;border-style:solid"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"<strong>Title - Lorem Ipsum</strong>","fontSize":"medium","paddingTop":30} -->
		<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Title - Lorem Ipsum</strong></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-title -->

		<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"<?php echo $this->very_short_lorem; ?>","customFontSize":20} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo $this->very_short_lorem; ?></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

		<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"10","currency":"$","term":"/mo"} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" placeholder="$" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">10</div><span class="ab-pricing-table-term" style="font-size:24px">/mo</span></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-price -->

		<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
		<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Lorem</li><li>Ipsum</li><li>Dolor</li></ul>
		<!-- /wp:atomic-blocks/ab-pricing-table-features -->

		<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Lorem Ipsum","buttonBackgroundColor":"#272c30","paddingTop":15,"paddingBottom":35} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#272c30">Lorem Ipsum</a></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table -->

		<!-- wp:atomic-blocks/ab-pricing-table -->
		<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:2px;border-style:solid"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"<strong>Title - Lorem Ipsum</strong>","fontSize":"medium","paddingTop":30} -->
		<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Title - Lorem Ipsum</strong></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-title -->

		<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"<?php echo $this->very_short_lorem; ?>","customFontSize":20} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo $this->very_short_lorem; ?></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

		<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"100","currency":"$","term":"/yr"} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" placeholder="$" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">100</div><span class="ab-pricing-table-term" style="font-size:24px">/yr</span></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-price -->

		<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
		<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Lorem</li><li>Ipsum</li><li>Dolor</li></ul>
		<!-- /wp:atomic-blocks/ab-pricing-table-features -->

		<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Lorem Ipsum","buttonBackgroundColor":"#272c30","paddingTop":15,"paddingBottom":35} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#272c30">Lorem Ipsum</a></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table -->

		<!-- wp:atomic-blocks/ab-pricing-table -->
		<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:2px;border-style:solid"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"<strong>Title - Lorem Ipsum</strong>","fontSize":"medium","paddingTop":30} -->
		<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Title - Lorem Ipsum</strong></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-title -->

		<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"<?php echo $this->very_short_lorem; ?>","customFontSize":20} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo $this->very_short_lorem; ?></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

		<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"299","currency":"$","term":"/ lifetime"} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" placeholder="$" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">299</div><span class="ab-pricing-table-term" style="font-size:24px">/ lifetime</span></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-price -->

		<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
		<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Lorem</li><li>Ipsum</li><li>Dolor</li></ul>
		<!-- /wp:atomic-blocks/ab-pricing-table-features -->

		<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Lorem Ipsum","buttonBackgroundColor":"#272c30","paddingTop":15,"paddingBottom":35} -->
		<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a href="<?php echo $this->url; ?>" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#272c30">Lorem Ipsum</a></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
		<!-- /wp:atomic-blocks/ab-pricing-table --></div></div>
		<!-- /wp:atomic-blocks/ab-pricing -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Profile Box</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-profile-box {"profileImgID":2014,"twitter":"https://twitter.com","facebook":"https://www.facebook.com","instagram":"https://www.instagram.com/","pinterest":"https://www.pinterest.com/","google":"https://www.google.com","youtube":"https://www.youtube.com","github":"https://github.com","linkedin":"https://www.linkedin.com","email":"mailto:test@example.com","website":"<?php echo $this->url; ?>"} -->
		<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><div class="ab-profile-image-square"><img class="ab-profile-avatar" src="<?php echo $this->small_square_image; ?>" alt="avatar"/></div></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Name - Lorem Ipsum</h2><p class="ab-profile-title" style="color:#32373c">Title - Lorem Ipsum</p><div class="ab-profile-text"><p><?php echo $this->medium_lorem; ?></p></div><ul class="ab-social-links"><li><a href="<?php echo $this->url; ?>" target="_blank" rel="noopener noreferrer">Website <i style="background-color:#392f43" class="fas fa-link"></i></a></li><li><a href="https://twitter.com" target="_blank" rel="noopener noreferrer">Twitter <i style="background-color:#392f43" class="fab fa-twitter"></i></a></li><li><a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">Facebook <i style="background-color:#392f43" class="fab fa-facebook-f"></i></a></li><li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram <i style="background-color:#392f43" class="fab fa-instagram"></i></a></li><li><a href="https://www.pinterest.com/" target="_blank" rel="noopener noreferrer">Pinterest <i style="background-color:#392f43" class="fab fa-pinterest"></i></a></li><li><a href="https://www.google.com" target="_blank" rel="noopener noreferrer">Google <i style="background-color:#392f43" class="fab fa-google"></i></a></li><li><a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">YouTube <i style="background-color:#392f43" class="fab fa-youtube"></i></a></li><li><a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">LinkedIn <i style="background-color:#392f43" class="fab fa-linkedin"></i></a></li><li><a href="https://github.com" target="_blank" rel="noopener noreferrer">Github <i style="background-color:#392f43" class="fab fa-github"></i></a></li><li><a href="mailto:test@example.com" target="_blank" rel="noopener noreferrer">Email <i style="background-color:#392f43" class="far fa-envelope"></i></a></li></ul></div></div>
		<!-- /wp:atomic-blocks/ab-profile-box -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Sharing - Icon Only</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-sharing {"linkedin":true,"pinterest":true,"email":true,"reddit":true,"shareButtonStyle":"ab-share-icon-only"} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Sharing - Text Only</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-sharing {"linkedin":true,"pinterest":true,"email":true,"reddit":true,"shareButtonStyle":"ab-share-text-only"} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Sharing - Icon and Text, Social Media Colors</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-sharing {"linkedin":true,"pinterest":true,"email":true,"reddit":true,"shareButtonColor":"ab-share-color-social"} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Spacer (100px)</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":100} -->
		<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:100px"/></div>
		<!-- /wp:atomic-blocks/ab-spacer -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Spacer with Divider (100px)</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":100,"spacerDivider":true} -->
		<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:100px"/></div>
		<!-- /wp:atomic-blocks/ab-spacer -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Testimonial</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-testimonial -->
		<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p><?php echo $this->short_lorem; ?></p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="<?php echo $this->small_landscape_image; ?>" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Name - Lorem Ipsum</h2><small class="ab-testimonial-title" style="color:#32373c">Title - Lorem Ipsum</small></div></div>
		<!-- /wp:atomic-blocks/ab-testimonial -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">AB Testimonial - Right Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:atomic-blocks/ab-testimonial {"testimonialCiteAlign":"right-aligned"} -->
		<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial right-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p><?php echo $this->short_lorem; ?></p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="<?php echo $this->small_landscape_image; ?>" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Name - Lorem Ipsum</h2><small class="ab-testimonial-title" style="color:#32373c">Title - Lorem Ipsum</small></div></div>
		<!-- /wp:atomic-blocks/ab-testimonial -->
		<?php

		$out = ob_get_clean();
		return $out;
	}
}