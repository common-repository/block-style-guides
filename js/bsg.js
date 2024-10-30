(function($) {
	var bsgAddNonce = bsgAjax.bsgAddNonce;
	var bsgDeleteNonce = bsgAjax.bsgDeleteNonce;

	$( '#bsg-form' ).submit( function( e ) {
		e.preventDefault(); // Submitting via AJAX
		$(this).ajaxSubmit(); // See?

		var selectedTypes = [];
		jQuery( '.bsg-cpt-type' ).each( function() {
			if( this.checked ) {
				selectedTypes.push( this.dataset.cpt );
			}
		} );

		$.ajax({
			url: ajaxurl,
			type: 'post',
			data: {
				action: 'bsg_add_posts',
				bsgAddNonce: bsgAddNonce,
				selectedTypes: selectedTypes
			} 
		})

		.done( function( response ) {
			$( '.setting-error-bsg-update' ).remove();
			console.log( response );
			var data = response[ 'data' ],
				success = response[ 'success' ],
				banners = '';

			if( data === true ) { // true means there were no errors
				banners = makeBanner( 'Posts were created successfully.', 'updated' ) + banners;
			// } else if( data === 'invalidNonce' ) { // data is a string
				// var message = 'The request timed out.  Please refresh the page and try again.';
				// banners += makeBanner( message, 'error' );
				// hasError = true; // Not strictly needed now, but maybe later
			} else { // data is a multidimensional array
				if( 'invalidNonce' in data ) {
					var message = 'The request timed out.  Please refresh the page and try again.';
					banners += makeBanner( message, 'error' );
				}

				if( 'couldNotCreatePosts' in data ) {
					var message = 'The following post(s) could not be created due to internal errors: ',
						errorArray = data[ 'couldNotCreatePosts' ];
					banners += makeErrorBanner( message, errorArray );
				}

				if( 'postAlreadyExists' in data ) {
					var message = 'Posts already existed for the following post type(s), so new posts were not created: ',
						errorArray = data[ 'postAlreadyExists' ];
					banners += makeErrorBanner( message, errorArray );
				}

				if( 'classDoesNotExist' in data ) {
					var message = 'The following page(s) could not be created because the class doesn\'t exist: ',
						errorArray = data[ 'classDoesNotExist' ];
					banners += makeErrorBanner( message, errorArray );
				}

				if( success === true ) { // Some posts were created
					// Success messages should be above the error messages, hence the no += operator.
					banners = makeBanner( 'Posts were created successfully, with the exceptions listed below.', 'updated' ) + banners;
				}
			}

			$( '.bsg-title' ).after( banners );

			return true;
		})

		.fail( function( data ) {
			console.log( 'hi' );
		})
	} );

	$( '#bsg-delete' ).click( function( e ) {
		e.preventDefault();
		$( '.setting-error-bsg-update' ).remove();

		$.ajax({
			url: ajaxurl,
			type: 'post',
			data: {
				action: 'bsg_delete_posts',
				bsgDeleteNonce: bsgDeleteNonce,
			}
		})

		.done( function( data ) {
			var banner = makeBanner( 'All posts created by Block Style Guides have been successfully deleted.', 'updated' );
			$( '.bsg-title' ).after( banner );
			return true;
		})

		.fail( function() {
			var banner = makeBanner( 'There was an issue deleting the posts created by Block Style Guides.', 'error' );
			$( '.bsg-title' ).after( banner );
			return false; // More here too
		})

		return false;
	} );

	function makeBanner( text, type="updated" ) {
		if( ! text ) {
			return;
		}

		var banner = '<div class="setting-error-bsg-update ' + type + ' settings-error notice is-dismissible">'; 
			banner += '<p><strong>' + text + '</strong></p>';
			banner += '<button type="button" class="notice-dismiss">';
			banner += '<span class="screen-reader-text">Dismiss this notice.</span>';
			banner += '</button>';
			banner += '</div>';

		return banner;
	}

	function makeErrorBanner( text, errorArray ) {
		var message = text + errorArray.join( ', ' );

		return makeBanner( message, 'error' );
	}
})( jQuery );