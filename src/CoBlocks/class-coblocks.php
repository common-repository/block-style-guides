<?php

namespace BSG\CoBlocks;

use BSG\Base\Abstract_Markup;

class CoBlocks extends Abstract_Markup {

	public function __construct() {
		parent::__construct();
	}

	protected function get_markup() {
		ob_start(); ?>

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Accordion</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/accordion -->
		<div class="wp-block-coblocks-accordion"><!-- wp:coblocks/accordion-item {"title":"Lorem","open":true} -->
		<div class="wp-block-coblocks-accordion-item"><details open><summary class="wp-block-coblocks-accordion-item__title">Lorem</summary><div class="wp-block-coblocks-accordion-item__content"><!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div></details></div>
		<!-- /wp:coblocks/accordion-item -->

		<!-- wp:coblocks/accordion-item {"title":"Ipsum"} -->
		<div class="wp-block-coblocks-accordion-item"><details><summary class="wp-block-coblocks-accordion-item__title">Ipsum</summary><div class="wp-block-coblocks-accordion-item__content"><!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->medium_lorem; ?></p>
		<!-- /wp:paragraph --></div></details></div>
		<!-- /wp:coblocks/accordion-item -->

		<!-- wp:coblocks/accordion-item {"title":"Dolor"} -->
		<div class="wp-block-coblocks-accordion-item"><details><summary class="wp-block-coblocks-accordion-item__title">Dolor</summary><div class="wp-block-coblocks-accordion-item__content"><!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div></details></div>
		<!-- /wp:coblocks/accordion-item --></div>
		<!-- /wp:coblocks/accordion -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Alert</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/alert {"title":"Title - Lorem Ipsum","customBackgroundColor":"<?php echo $this->primary_custom_color; ?>"} -->
		<div class="wp-block-coblocks-alert is-default-alert has-background" style="background-color:<?php echo $this->primary_custom_color; ?>"><p class="wp-block-coblocks-alert__title">Title - Lorem Ipsum</p><p class="wp-block-coblocks-alert__text"><?php echo $this->very_short_lorem; ?></p></div>
		<!-- /wp:coblocks/alert -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Author</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/author {"heading":"Written By","name":"Lorem Ipsum"} -->
		<div class="wp-block-coblocks-author"><div class="wp-block-coblocks-author__avatar"><img class="wp-block-coblocks-author__avatar-img" src="<?php echo $this->small_square_image; ?>" alt="avatar"/></div><div class="wp-block-coblocks-author__content"><p class="wp-block-coblocks-author__heading">Written By</p><span class="wp-block-coblocks-author__name">Lorem Ipsum</span><p class="wp-block-coblocks-author__biography"><?php echo $this->short_lorem; ?></p><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Follow</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/author -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Click to Tweet</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/click-to-tweet {"url":"<?php echo get_site_url(); ?>","buttonText":"Lorem Ipsum"} -->
		<blockquote class="wp-block-coblocks-click-to-tweet"><p class="wp-block-coblocks-click-to-tweet__text">Lorem ipsum dolor sit amet.</p><a class="wp-block-coblocks-click-to-tweet__twitter-btn" href="http://twitter.com/share?&amp;text=Lorem%20ipsum%20dolor%20sit%20amet.&amp;url=<?php echo get_site_url(); ?>" target="_blank" rel="noopener noreferrer">Lorem Ipsum</a></blockquote>
		<!-- /wp:coblocks/click-to-tweet -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Separator (100px)</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/dynamic-separator {"height":100} -->
		<hr class="wp-block-coblocks-dynamic-separator" style="height:100px"/>
		<!-- /wp:coblocks/dynamic-separator -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks GIF</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/gif -->
		<figure class="wp-block-coblocks-gif"><img src="<?php echo $this->giphy_url; ?>" alt=""/></figure>
		<!-- /wp:coblocks/gif -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks GitHub Gist</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/gist {"url":"<?php echo $this->gist_url; ?>"} -->
		<div class="wp-block-coblocks-gist"><script src="<?php echo $this->gist_url; ?>.js"></script><noscript><a href="<?php echo $this->gist_url; ?>">View this gist on GitHub</a></noscript></div>
		<!-- /wp:coblocks/gist -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Highlight</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/highlight -->
		<p class="wp-block-coblocks-highlight"><mark class="wp-block-coblocks-highlight__content"><?php echo $this->very_short_lorem; ?></mark></p>
		<!-- /wp:coblocks/highlight -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Pricing Table</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/pricing-table {"count":3} -->
		<div class="wp-block-coblocks-pricing-table has-3-columns has-center-content" style="text-align:center"><div class="wp-block-coblocks-pricing-table__inner"><!-- wp:coblocks/pricing-table-item -->
		<div class="wp-block-coblocks-pricing-table-item"><span class="wp-block-coblocks-pricing-table-item__title">Lorem Ipsum</span><div class="wp-block-coblocks-pricing-table-item__price-wrapper"><span class="wp-block-coblocks-pricing-table-item__amount">10</span></div><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:coblocks/pricing-table-item -->

		<!-- wp:coblocks/pricing-table-item -->
		<div class="wp-block-coblocks-pricing-table-item"><span class="wp-block-coblocks-pricing-table-item__title">Lorem Ipsum</span><div class="wp-block-coblocks-pricing-table-item__price-wrapper"><span class="wp-block-coblocks-pricing-table-item__amount">60</span></div><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:coblocks/pricing-table-item -->

		<!-- wp:coblocks/pricing-table-item -->
		<div class="wp-block-coblocks-pricing-table-item"><span class="wp-block-coblocks-pricing-table-item__title">Lorem Ipsum</span><div class="wp-block-coblocks-pricing-table-item__price-wrapper"><span class="wp-block-coblocks-pricing-table-item__amount">60</span></div><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:coblocks/pricing-table-item --></div></div>
		<!-- /wp:coblocks/pricing-table -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Row </h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/row {"columns":2,"layout":"50-50","coblocks":{"id":"31874727807"}} -->
		<div class="wp-block-coblocks-row coblocks-row-31874727807" data-columns="2" data-layout="50-50"><div class="wp-block-coblocks-row__inner has-medium-gutter has-no-padding has-no-margin is-stacked-on-mobile"><!-- wp:coblocks/column {"width":"50","coblocks":{"id":"31874734532"}} -->
		<div class="wp-block-coblocks-column coblocks-column-31874734532" style="width:50%"><div class="wp-block-coblocks-column__inner has-no-padding has-no-margin"><!-- wp:paragraph -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/column -->

		<!-- wp:coblocks/column {"width":"50","coblocks":{"id":"31874734545"}} -->
		<div class="wp-block-coblocks-column coblocks-column-31874734545" style="width:50%"><div class="wp-block-coblocks-column__inner has-no-padding has-no-margin"><!-- wp:paragraph -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/column --></div></div>
		<!-- /wp:coblocks/row -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Social - Small </h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/social {"hasColors":false,"size":"sml","linkedin":true,"tumblr":true,"reddit":true,"email":true,"google":true} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Social - Medium</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/social {"hasColors":false,"linkedin":true,"tumblr":true,"reddit":true,"email":true,"google":true} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Social - Large, Social Media Colors</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/social {"size":"lrg","linkedin":true,"tumblr":true,"reddit":true,"email":true,"google":true} /-->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Media Card - Left Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/media-card {"mediaId":1525,"mediaType":"image","align":"","marginBottom":0,"marginBottomTablet":0,"marginBottomMobile":0,"coblocks":{"id":"31874758833"},"noBottomMargin":true} -->
		<div class="wp-block-coblocks-media-card coblocks-media-card-31874758833 is-style-left is-stacked-on-mobile mb-0"><div class="wp-block-coblocks-media-card__inner has-no-padding"><div class="wp-block-coblocks-media-card__wrapper"><figure class="wp-block-coblocks-media-card__media"><img src="<?php echo $this->medium_landscape_image; ?>" alt="" class="wp-image-1525"/></figure><div class="wp-block-coblocks-media-card__content"><!-- wp:coblocks/row {"columns":1,"layout":"100","paddingSize":"huge","hasMarginControl":false,"hasAlignmentControls":false,"hasStackedControl":false,"customBackgroundColor":"#FFFFFF","coblocks":{"id":"31874758907"}} -->
		<div class="wp-block-coblocks-row coblocks-row-31874758907" data-columns="1" data-layout="100" style="background-color:#FFFFFF"><div class="wp-block-coblocks-row__inner has-background has-medium-gutter has-padding has-huge-padding has-no-margin is-stacked-on-mobile" style="background-color:#FFFFFF"><!-- wp:coblocks/column {"width":"100","coblocks":{"id":"31874758940"}} -->
		<div class="wp-block-coblocks-column coblocks-column-31874758940" style="width:100%"><div class="wp-block-coblocks-column__inner has-no-padding has-no-margin"><!-- wp:heading {"level":3,"placeholder":"Add heading..."} -->
		<h3>Lorem Ipsum</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/column --></div></div>
		<!-- /wp:coblocks/row --></div></div></div></div>
		<!-- /wp:coblocks/media-card -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Media Card - Right Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/media-card {"mediaPosition":"right","mediaId":1525,"mediaType":"image","align":"","marginBottom":0,"marginBottomTablet":0,"marginBottomMobile":0,"coblocks":{"id":"31874758833"},"noBottomMargin":true} -->
		<div class="wp-block-coblocks-media-card coblocks-media-card-31874758833 is-style-right is-stacked-on-mobile mb-0"><div class="wp-block-coblocks-media-card__inner has-no-padding"><div class="wp-block-coblocks-media-card__wrapper"><figure class="wp-block-coblocks-media-card__media"><img src="<?php echo $this->medium_landscape_image; ?>" alt="" class="wp-image-1525"/></figure><div class="wp-block-coblocks-media-card__content"><!-- wp:coblocks/row {"columns":1,"layout":"100","paddingSize":"huge","hasMarginControl":false,"hasAlignmentControls":false,"hasStackedControl":false,"customBackgroundColor":"#FFFFFF","coblocks":{"id":"31874758907"}} -->
		<div class="wp-block-coblocks-row coblocks-row-31874758907" data-columns="1" data-layout="100" style="background-color:#FFFFFF"><div class="wp-block-coblocks-row__inner has-background has-medium-gutter has-padding has-huge-padding has-no-margin is-stacked-on-mobile" style="background-color:#FFFFFF"><!-- wp:coblocks/column {"width":"100","coblocks":{"id":"31874758940"}} -->
		<div class="wp-block-coblocks-column coblocks-column-31874758940" style="width:100%"><div class="wp-block-coblocks-column__inner has-no-padding has-no-margin"><!-- wp:heading {"level":3,"placeholder":"Add heading..."} -->
		<h3>Lorem Ipsum</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->small_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/column --></div></div>
		<!-- /wp:coblocks/row --></div></div></div></div>
		<!-- /wp:coblocks/media-card -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Shape Divider </h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/shape-divider {"align":"","shapeHeight":50,"color":"dark-gray","justAdded":false,"coblocks":{"id":"3187489754"}} -->
		<div class="wp-block-coblocks-shape-divider coblocks-shape-divider-3187489754 has-dark-gray-color mb-0 mt-0" aria-hidden="true"><div class="wp-block-coblocks-shape-divider__svg-wrapper" style="min-height:50px"><svg class="divider--wavy" height="100%" viewbox="0 0 100 10" width="100%" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none"><path d="m42.19.65c2.26-.25 5.15.04 7.55.53 2.36.49 7.09 2.35 10.05 3.57 7.58 3.22 13.37 4.45 19.26 4.97 2.36.21 4.87.35 10.34-.25s10.62-2.56 10.62-2.56v-6.91h-100.01v3.03s7.2 3.26 15.84 3.05c3.92-.07 9.28-.67 13.4-2.24 2.12-.81 5.22-1.82 7.97-2.42 2.72-.63 3.95-.67 4.98-.77z" fill-rule="evenodd" transform="matrix(1 0 0 -1 0 10)"></path></svg></div><div class="wp-block-coblocks-shape-divider__alt-wrapper" style="min-height:50px"></div></div>
		<!-- /wp:coblocks/shape-divider -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Icon</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/icon {"icon":"coblocks","iconRand":false,"iconSize":"advanced","height":100,"width":100} -->
		<div class="wp-block-coblocks-icon"><div class="wp-block-coblocks-icon__inner" style="height:100px;width:100px"><svg height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="m5.17346763.00163164 9.55661877-.00163126c1.8075616-.00030854 2.4639368.18821016 3.1264625.54230616.6625258.35409601 1.183646.8737945 1.5402492 1.53604705.3566032.66225256.5479761 1.31916921.5567132 3.13082116l.0461929 9.57824455c.0087371 1.811652-.1762994 2.4686329-.5265143 3.1310061s-.8663216 1.1822487-1.5254309 1.5365703c-.6591092.3543216-1.313665.5430641-3.1212266.5433727l-9.55661876.0016312c-1.80756159.0003086-2.46393681-.1882101-3.12646255-.5423061-.66252575-.354096-1.18364596-.8737945-1.54024916-1.5360471-.3566032-.6622525-.54797616-1.3191692-.5567132-3.1308212l-.04619294-9.57824454c-.00873705-1.81165196.17629938-2.46863286.52651432-3.13100606.35021493-.6623732.8663216-1.18224875 1.52543086-1.53657035s1.31366506-.54306407 3.12122666-.54337261zm-.72902319 3.33170169c-.61364972 0-1.11111111.49746139-1.11111111 1.11111111v11.11111116c0 .6136497.49746139 1.1111111 1.11111111 1.1111111h3.33333334c.61364972 0 1.11111111-.4974614 1.11111111-1.1111111v-11.11111116c0-.61364972-.49746139-1.11111111-1.11111111-1.11111111zm7.77777776 7.77777777c-.6136497 0-1.1111111.4974614-1.1111111 1.1111111v3.3333334c0 .6136497.4974614 1.1111111 1.1111111 1.1111111h3.3333334c.6136497 0 1.1111111-.4974614 1.1111111-1.1111111v-3.3333334c0-.6136497-.4974614-1.1111111-1.1111111-1.1111111zm0-7.77777777c-.6136497 0-1.1111111.49746139-1.1111111 1.11111111v3.33333334c0 .61364972.4974614 1.11111111 1.1111111 1.11111111h3.3333334c.6136497 0 1.1111111-.49746139 1.1111111-1.11111111v-3.33333334c0-.61364972-.4974614-1.11111111-1.1111111-1.11111111z" fill-rule="evenodd"></path></svg></div></div>
		<!-- /wp:coblocks/icon -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Features</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/features {"coblocks":{"id":"31874832537"}} -->
		<div class="wp-block-coblocks-features coblocks-features-31874832537" data-columns="2"><div class="wp-block-coblocks-features__inner has-no-padding has-no-margin has-large-gutter has-center-content"><!-- wp:coblocks/feature {"coblocks":{"id":"31874832611"}} -->
		<div class="wp-block-coblocks-feature coblocks-feature-31874832611"><div class="wp-block-coblocks-feature__inner has-no-padding"><!-- wp:coblocks/icon {"icon":"album","iconRand":false,"hasContentAlign":false} -->
		<div class="wp-block-coblocks-icon"><div class="wp-block-coblocks-icon__inner" style="height:60px;width:60px"><svg height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="m10.2895508.29378255c-5.52000002 0-10.00000002 4.48-10.00000002 10.00000005 0 5.52 4.48 10 10.00000002 10 5.52 0 10-4.48 10-10 0-5.52000005-4.48-10.00000005-10-10.00000005zm0 18.00000005c-4.41000002 0-8.00000002-3.59-8.00000002-8 0-4.41000005 3.59-8.00000005 8.00000002-8.00000005 4.41 0 8 3.59 8 8.00000005 0 4.41-3.59 8-8 8zm0-12.50000005c-2.49000002 0-4.50000002 2.01-4.50000002 4.50000005 0 2.49 2.01 4.5 4.50000002 4.5 2.49 0 4.5-2.01 4.5-4.5 0-2.49000005-2.01-4.50000005-4.5-4.50000005zm0 5.50000005c-.55000002 0-1.00000002-.45-1.00000002-1 0-.55000005.45-1.00000005 1.00000002-1.00000005.55 0 1 .45 1 1.00000005 0 .55-.45 1-1 1z" transform="translate(-.289551 -.293783)"></path></svg></div></div>
		<!-- /wp:coblocks/icon -->

		<!-- wp:heading {"level":4,"placeholder":"Add feature title..."} -->
		<h4>Lorem Ipsum</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add feature content"} -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/feature -->

		<!-- wp:coblocks/feature {"coblocks":{"id":"31874832621"}} -->
		<div class="wp-block-coblocks-feature coblocks-feature-31874832621"><div class="wp-block-coblocks-feature__inner has-no-padding"><!-- wp:coblocks/icon {"icon":"audiotrack","iconRand":false,"hasContentAlign":false} -->
		<div class="wp-block-coblocks-icon"><div class="wp-block-coblocks-icon__inner" style="height:60px;width:60px"><svg height="20" viewbox="0 0 14 20" width="14" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="m10 0v11.7222222c-.65555556-.3777778-1.41111111-.6111111-2.22222222-.6111111-2.45555556 0-4.44444445 1.9888889-4.44444445 4.4444445 0 2.4555555 1.98888889 4.4444444 4.44444445 4.4444444 2.45555552 0 4.44444442-1.9888889 4.44444442-4.4444444v-11.11111116h4.4444445v-4.44444444zm-2.22222222 17.7777778c-1.22222222 0-2.22222222-1-2.22222222-2.2222222 0-1.2222223 1-2.2222223 2.22222222-2.2222223s2.22222222 1 2.22222222 2.2222223c0 1.2222222-1 2.2222222-2.22222222 2.2222222z" transform="translate(-3)"></path></svg></div></div>
		<!-- /wp:coblocks/icon -->

		<!-- wp:heading {"level":4,"placeholder":"Add feature title..."} -->
		<h4>Lorem Ipsum</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add feature content"} -->
		<p><?php echo $this->very_short_lorem; ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:coblocks/feature --></div></div>
		<!-- /wp:coblocks/features -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Buttons</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Left Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"backgroundImg":"<?php echo $this->medium_landscape_image; ?>","align":"","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-left-align has-padding has-huge-padding" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>);min-height:500px"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Center Aligned </h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-center","backgroundImg":"<?php echo $this->medium_landscape_image; ?>","align":"","contentAlign":"center","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-center-align has-padding has-huge-padding has-center-content" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>);min-height:500px"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Right Aligned</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-right","backgroundImg":"<?php echo $this->medium_landscape_image; ?>","align":"","contentAlign":"right","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-right-align has-padding has-huge-padding has-right-content" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>);min-height:500px"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Wide</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-center","backgroundImg":"<?php echo $this->medium_landscape_image; ?>","align":"wide","contentAlign":"center","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero alignwide coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-center-align has-padding has-huge-padding has-center-content" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>);min-height:500px"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Full Width</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-center","backgroundImg":"<?php echo $this->medium_landscape_image; ?>","contentAlign":"center","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero alignfull coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-center-align has-padding has-huge-padding has-center-content" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>);min-height:500px"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Full Width, Full Height, Center/Center</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-center","fullscreen":true,"backgroundImg":"<?php echo $this->medium_landscape_image; ?>","contentAlign":"center","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero alignfull coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-background-image bg-no-repeat bg-center-center bg-cover hero-center-center-align has-padding has-huge-padding has-center-content is-fullscreen" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>)"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<!-- wp:html -->
		<h4 style="clear:both;text-align:center">CoBlocks Hero - Full Width, Full Height, Center/Center, Fixed Background</h4>
		<!-- /wp:html -->

		<!-- wp:coblocks/hero {"layout":"center-center","fullscreen":true,"backgroundImg":"<?php echo $this->medium_landscape_image; ?>","hasParallax":true,"contentAlign":"center","coblocks":{"id":"31984016281"}} -->
		<div class="wp-block-coblocks-hero alignfull coblocks-hero-31984016281"><div class="wp-block-coblocks-hero__inner has-background has-parallax has-background-image bg-no-repeat bg-center-center bg-cover hero-center-center-align has-padding has-huge-padding has-center-content is-fullscreen" style="background-color:#f3f3f3;background-image:url(<?php echo $this->medium_landscape_image; ?>)"><div class="wp-block-coblocks-hero__box" style="max-width:560px"><!-- wp:heading {"placeholder":"Add heading..."} -->
		<h2>Lorem Ipsum</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"Add content..."} -->
		<p><?php echo $this->short_ipsum; ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:coblocks/buttons -->
		<div class="wp-block-coblocks-buttons"><div class="wp-block-coblocks-buttons__inner flex-align-left has-medium-gutter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="<?php echo $this->url; ?>">Lorem Ipsum</a></div>
		<!-- /wp:button --></div></div>
		<!-- /wp:coblocks/buttons --></div></div></div>
		<!-- /wp:coblocks/hero -->

		<?php

		$out = ob_get_clean();
		return $out;
	}
}		