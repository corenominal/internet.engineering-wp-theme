jQuery( document ).ready( function( $ ){

	$( '#signin' ).on('click', function( e )
	{
		e.preventDefault();
		var button = $( this );
		button.html( '<i class="fa fa-spinner fa-spin"></i> Processing' );
		var payload = {
			'user_login': $( '#user_login' ).val(),
			'user_password': $( '#user_password' ).val(),
			'foo': $( '#foo' ).val()
		};
		var endpoint = button.attr( 'data-endpoint' );
		$.getJSON( endpoint, payload, function( data )
		{
			if( data.error )
			{
				$( '#notify' ).html( '<i class="fa fa-exclamation-triangle"></i> ' + data.error );
				button.html( '<i class="fa fa-sign-in"></i> Sign-in' );
			}
			else
			{
				window.location.href = data.redirect;
			}
		});
	});

});
