jQuery( document ).ready( function( $ ){

	$( '#signout' ).on('click', function( e )
	{
		var endpoint = $( this ).attr( 'data-endpoint' );
		$.getJSON( endpoint, function( data )
		{
			console.log( data );
			window.location.href = data.redirect;
		});
	});

});