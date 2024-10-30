<?php

namespace BSG\Base;

abstract class Abstract_Markup {
	public $very_short_lorem;
	public $short_lorem;
	public $medium_lorem;
	public $long_lorem;
	public $primary_custom_color;
	public $secondary_custom_color;
	public $tertiary_custom_color;
	public $markup;
	public $small_square_image;
	public $medium_square_image;
	public $large_square_image;
	public $small_portrait_image;
	public $medium_portrait_image;
	public $large_portrait_image;
	public $small_landscape_image;
	public $medium_landscape_image;
	public $large_landscape_image;
	public $url;
	public $audio_url;
	public $video_url;
	public $giphy_url; // For CoBlocks
	public $gist_url; // For CoBlocks

	public function __construct() {
		$this->very_short_lorem = $this->get_lorem( 'very-short' );
		$this->short_lorem = $this->get_lorem( 'short' );
		$this->medium_lorem = $this->get_lorem( 'medium' );
		$this->long_lorem = $this->get_lorem( 'long' );
		$this->primary_custom_color = $this->get_custom_color( 'primary' );
		$this->secondary_custom_color = $this->get_custom_color( 'secondary' );
		$this->tertiary_custom_color = $this->get_custom_color( 'tertiary' );
		$this->small_square_image = $this->get_placeholder_src( 'small-square' );
		$this->medium_square_image = $this->get_placeholder_src( 'medium-square' );
		$this->large_square_image = $this->get_placeholder_src( 'large-square' );
		$this->small_portrait_image = $this->get_placeholder_src( 'small-portrait' );
		$this->medium_portrait_image = $this->get_placeholder_src( 'medium-portrait' );
		$this->large_portrait_image = $this->get_placeholder_src( 'large-portrait' );
		$this->small_landscape_image = $this->get_placeholder_src( 'small-landscape' );
		$this->medium_landscape_image = $this->get_placeholder_src( 'medium-landscape' );
		$this->large_landscape_image = $this->get_placeholder_src( 'large-landscape' );
		$this->url = $this->get_url( 'website' );
		$this->audio_url = $this->get_url( 'audio' );
		$this->video_url = $this->get_url( 'video' );
		$this->giphy_url = $this->get_url( 'giphy' );
		$this->gist_url = $this->get_url( 'gist' );
		$this->markup = $this->get_markup();
	}

	protected function get_lorem( $length = '' ) {
		$lorem = '';
		$very_short = apply_filters( 'bsg-very-short-lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo quisque a mattis nisi dapibus a suspendisse.' );
		$short = apply_filters( 'bsg-short-lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo quisque a mattis nisi dapibus a suspendisse ac ullamcorper conubia ut non eget potenti orci laoreet et condimentum a nibh dis.' );
		$medium = apply_filters( 'bsg-medium-lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo quisque a mattis nisi dapibus a suspendisse ac ullamcorper conubia ut non eget potenti orci laoreet et condimentum a nibh dis. Magnis nullam consectetur per scelerisque quam feugiat a convallis iaculis morbi torquent nulla viverra consectetur elementum purus vestibulum vitae nam.' );
		$long = apply_filters( 'bsg-long-lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo quisque a mattis nisi dapibus a suspendisse ac ullamcorper conubia ut non eget potenti orci laoreet et condimentum a nibh dis. Magnis nullam consectetur per scelerisque quam feugiat a convallis iaculis morbi torquent nulla viverra consectetur elementum purus vestibulum vitae nam. Mi scelerisque vestibulum adipiscing vestibulum nam gravida neque volutpat facilisi eros diam bibendum mi cursus cras scelerisque luctus bibendum himenaeos enim pulvinar felis euismod.' );

		switch( $length ) {
			case 'very-short':
				$lorem = $very_short;
				break;
			case 'short':
				$lorem = $short;
				break;
			case 'medium':
				$lorem = $medium;
				break;
			case 'long':
				$lorem = $long;
				break;
			default:
				break;
		}

		return $lorem;
	}

	protected function get_placeholder_src( $size = '' ) {
		$url = '';
		$small_square     = apply_filters( 'bsg-small-square-image', $this->get_placeholder_url( 400, 400 ) );
		$medium_square    = apply_filters( 'bsg-medium-square-image', $this->get_placeholder_url( 800, 800 ) );
		$large_square     = apply_filters( 'bsg-large-square-image', $this->get_placeholder_url( 1600, 1600 ) );
		$small_portrait   = apply_filters( 'bsg-small-portrait-image', $this->get_placeholder_url( 225, 400 ) );
		$medium_portrait  = apply_filters( 'bsg-medium-portrait-image', $this->get_placeholder_url( 450, 800 ) );
		$large_portrait   = apply_filters( 'bsg-large-portrait-image', $this->get_placeholder_url( 900, 1600 ) );
		$small_landscape  = apply_filters( 'bsg-small-landscape-image', $this->get_placeholder_url( 400, 225 ) );
		$medium_landscape = apply_filters( 'bsg-medium-landscape-image', $this->get_placeholder_url( 800, 450 ) );
		$large_landscape  = apply_filters( 'bsg-large-landscape-image', $this->get_placeholder_url( 1600, 900 ) );

		switch( $size ) {
			case 'small-square':
				$src = $small_square;
				break;
			case 'medium-square':
				$src = $medium_square;
				break;
			case 'large-square':
				$src = $large_square;
				break;
			case 'small-portrait':
				$src = $small_portrait;
				break;
			case 'medium-portrait':
				$src = $medium_portrait;
				break;
			case 'large-portrait':
				$src = $large_portrait;
				break;
			case 'small-landscape':
				$src = $small_landscape;
				break;
			case 'medium-landscape':
				$src = $medium_landscape;
				break;
			case 'large-landscape':
				$src = $large_landscape;
				break;
			default:
				break;
		}

		return $src;
	}

	protected function get_placeholder_url( $width, $height ) {
		return 'https://via.placeholder.com/' . $width . 'x' . $height;
	}

	protected function get_custom_color( $ordinal = '' ) {
		$color = '';
		$primary_color = apply_filters( 'bsg-primary-custom-color', '#bada55' );
		$secondary_color = apply_filters( 'bsg-secondary-custom-color', '#c0ffee' );
		$tertiary_color = apply_filters( 'bsg-tertiary-custom-color', '#facade' );

		switch( $ordinal ) {
			case 'primary':
				$color = $primary_color;
				break;
			case 'secondary':
				$color = $secondary_color;
				break;
			case 'tertiary':
				$color = $tertiary_color;
				break;
			default:
				break;
		}

		return $color;
	}

	protected function get_url( $type = '' ) {
		$website = apply_filters( 'bsg-website-url', 'https://wordpress.org' );
		$audio = apply_filters( 'bsg-audio-url', 'https://upload.wikimedia.org/wikipedia/en/d/d0/Rick_Astley_-_Never_Gonna_Give_You_Up.ogg' );
		// Note: this has to be a YouTube link due to other markup in the video blocks
		$video = apply_filters( 'bsg-video-url', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' );
		$giphy = apply_filters( 'bsg-giphy-url', 'https://media1.giphy.com/media/a6OnFHzHgCU1O/giphy.gif' );
		$gist = apply_filters( 'bsg-gist-url', 'https://gist.github.com/robert-gillmer/370c261c97c136b68c034473d9ec87b7' );

		switch( $type ) {
			case 'website':
				$url = $website;
				break;
			case 'audio':
				$url = $audio;
				break;
			case 'video':
				$url = $video;
				break;
			case 'giphy':
				$url = $giphy;
				break;
			case 'gist':
				$url = $gist;
				break;
			default:
				break;
		}

		return $url;
	}

	// protected abstract function get_list_of_blocks();
	protected abstract function get_markup();
}