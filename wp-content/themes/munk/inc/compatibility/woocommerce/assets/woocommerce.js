jQuery(document).ready(function($){   
								
 $('form.cart').on( 'click', 'button.plus, button.minus', function() {

	// Get current quantity values
	var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
	var val   = parseFloat(qty.val());
	var max = parseFloat(qty.attr( 'max' ));
	var min = parseFloat(qty.attr( 'min' ));
	var step = parseFloat(qty.attr( 'step' ));

	// Change the value if plus or minus
	if ( $( this ).is( '.plus' ) ) {
	   if ( max && ( max <= val ) ) {
		  qty.val( max );
	   } else {
		  qty.val( val + step );
	   }
	} else {
	   if ( min && ( min >= val ) ) {
		  qty.val( min );
	   } else if ( val > 1 ) {
		  qty.val( val - step );
	   }
	}
	 
 });  
});
  
  
