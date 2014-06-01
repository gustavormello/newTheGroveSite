// Redirects user to the correct prices page according to location.

    $( "#prices" ).click(function() {
      $.get("http://ipinfo.io", function (response) {

        if (response.country = 'BR') {
          window.location.href = './planos.html';
        } else {
            window.location.href = './prices.html';
        }
    }, "jsonp");
    });

// Asks use for promotional code and redirects accordingly.

	$('form').on('submit', function(e) {
		var code = $(this).find('#promocode').val();
		console.log( code );
		if ((code) == 'SK10') {
			window.location.href = './skype65.html';
		} else if ((code) == 'SK20') {
			window.location.href = './skype75.html';
		} else if ((code) == 'SK30') {
			window.location.href = './skype85.html';
		} else {
			$( "span" ).text( "Código promocional inexistente" ).show().fadeOut( 2000 );
		}
		e.preventDefault();
	});