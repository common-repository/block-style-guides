=== Block Style Guides ===
Contributors: robertgillmer
Tags: gutenberg, gutenberg blocks, gutenberg styling, blocks, block styling
Donate link: https://robertgillmer.com/
Requires at least: 5.0
Tested up to: 5.1.1
Requires PHP: 5.3
Stable tag: 1.2.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Create "style guides" displaying all core WordPress Gutenberg blocks, including variations, for styling purposes.  It will also create style guides for popular WordPress block plugins if you have them installed and activated.

== Description ==
This plugin allows you to create "style guides" displaying all core WordPress Gutenberg blocks, including variations, for styling purposes.  You can choose which custom post types you can create the posts for, so you can see if there are CSS differences across different CPT's.  Additionally, you can use this to test how Gutenberg blocks display on custom post types which haven't been set up to use the Gutenberg editor yet.

== Installation ==
1. Install the plugin through the Add Plugins screen.
1. Or, if you're feeling adventurous, download the plugin, unzip it, and upload it to the /wp-content/plugins folder via (S)FTP.
1. But really, do that first one, all the cool kids are doing it. 
1. Once it's activated, go to Tools / Gutenberg Blog Style Guides to create the posts.

== Frequently Asked Questions ==
= Can this plugin be used to test custom post types which don't support Gutenberg Editor yet? =

Yes it can.  The Gutenberg mockup that this plugin puts into `the_content` will be parsed by WordPress just as if it had been entered through the editor directly.

= Can I choose which blocks to display? =

That will be offered in a future release.

= Do you only create pages for core WordPress Gutenberg blocks? =

If you have the following plugins installed and activated, there will be separate pages created for each:

* [Atomic Blocks](https://wordpress.org/plugins/atomic-blocks/)
* [Block Gallery](https://wordpress.org/plugins/block-gallery/)
* [CoBlocks](https://wordpress.org/plugins/coblocks/)

Next on the roadmap is [Ultimate Addons for Gutenberg](https://wordpress.org/plugins/ultimate-addons-for-gutenberg/) and [Kadence Blocks](https://wordpress.org/plugins/kadence-blocks/)

= I would rather use different placeholder text / images / URL's.  And, I'd really like to not Rickroll people, kaythxbai. =

Many of the placeholders are now filterable:

* bsg-very-short-lorem (default: some lorem, I'm not typing it out here)
* bsg-short-lorem (default: some different lorem)
* bsg-medium-lorem (default: some other different lorem)
* bsg-long-lorem (default: some alternative other different lorem)
* bsg-small-square-image (default: https://via.placeholder.com/400x400)
* bsg-medium-square-image (default: https://via.placeholder.com/800x800)
* bsg-large-square-image (default: https://via.placeholder.com/1600x1600)
* bsg-small-portrait-image (default: https://via.placeholder.com/225x400)
* bsg-medium-portrait-image (default: https://via.placeholder.com/450x800)
* bsg-large-portrait-image (default: https://via.placeholder.com/900x1600)
* bsg-small-landscape-image (default: https://via.placeholder.com/400x225)
* bsg-medium-landscape-image (default: https://via.placeholder.com/800x450)
* bsg-large-landscape-image (default: https://via.placeholder.com/1600x900)
* bsg-primary-custom-color (default: #bada55)
* bsg-secondary-custom-color (default: #c0ffee)
* bsg-tertiary-custom-color (default: #facade)
* bsg-website-url (default: https://wordpress.org)
* bsg-audio-url (default: https://upload.wikimedia.org/wikipedia/en/d/d0/Rick_Astley_-_Never_Gonna_Give_You_Up.ogg)
* bsg-video-url (default: https://www.youtube.com/watch?v=dQw4w9WgXcQ)
* bsg-giphy-url (default: https://media1.giphy.com/media/a6OnFHzHgCU1O/giphy.gif)
* bsg-gist-url (default: https://gist.github.com/robert-gillmer/370c261c97c136b68c034473d9ec87b7)

= Do I need to use the class name to filter those variables? =

Nah, just call the filter directly.  This keeps you from having to track down the class name with the namespacing and the bases and the everything.

= Why do I have to open the Audio/Video page through the Preview page to get the videos to work? =

In order to make the video URL filterable, the URL is injected into the markup as part of an echo call.  For some reason, this makes WordPress not convert it to an oEmbed until the page is viewed from the backend.  And why is that?  Because normally a wizard does it, but he gets confused by echo statements.  Or something.

== Screenshots ==
1. The main screen for Gutenberg Block Style Guides.

== Changelog ==
= 1.0.0 =

* Initial commit

= 1.1.0 =

* Support for Atomic Blocks, Block Gallery, and CoBlocks.
* Changed function prefix to match new plugin name.
* Error reporting.
* Condition to check if a class was autoloaded correctly; it it wasn't, load it.
* Abstract constructor now always includes all lorems.
* Added filters for a buncha placeholder variables.
* Used those variables throughout the markup.

= 1.2.0 =

* Error reporting is now 927% betterer.
* Form submits via AJAX, which is why the error reporting is so much betterer.
* Split list of CPT's up into groups based on ability to use the Gutenberg editor.
* "Delete all the things!" button added.  (Not all the things, just all the things this plugin created, but that's wordy.)

= 1.2.1 =

* Corrected issue where option group was not registered.

= 1.2.2 =

* Error messages for invalid nonces.
* Cleaned up JS code.