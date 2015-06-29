$(document).ready(function() {
	
	// Get the checkboxes
	var $checkboxes = $('.input-select-wrapper input[type="checkbox"]');
	
	// Base variables for price
	var subTotal = 0;
	var contractPeriod = $('.contract-period').attr('data-contract-period');
	var total = 0;
	
	// When a checkbox is checked/not checked
    $checkboxes.change(function(){
		
		// Get price of selected product
		var productPrice = parseInt($(this).next('label').find('.product-price').attr('data-product-price'));
		
		// Add the price to the subtotal
		if ($(this).is(':checked')) {
			subTotal = parseInt(subTotal + productPrice);
		} else {
			subTotal = parseInt(subTotal - productPrice);
		}
		
		// Display the subtotal price
		if (subTotal === 0) {
			$('.product-sub-total').text('-');
			$('.sub-total-dollar').addClass('hide');
			//$('.total').removeClass('highlight');
		} else {
			//$('.total').addClass('highlight');
			$('.product-sub-total').text(subTotal);
			$('.sub-total-dollar').removeClass('hide');
		}
		
		// Get the total price
		var total = parseInt(subTotal * contractPeriod);
		
		// Display the total price
		if (total === 0) {
			$('.product-total').text('-');
			$('.total-dollar').addClass('hide');
		} else {
			$('.product-total').text(total);
			$('.total-dollar').removeClass('hide');
		}
    });
	
});