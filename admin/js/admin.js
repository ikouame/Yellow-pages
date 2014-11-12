// JavaScript Document
$(document).ready( function () {
	$('#button-action').on('click', 'input', function () {
		//alert($(this).val());
		switch($(this).val()) {
			case 'Add Country':
				//alert($(this).val());
				$('#add-country').slideDown();
				$('#add-state').slideUp();
				$('#add-city').slideUp();
				$('#add-company').slideUp();
			break;
			
			case 'Add State':
				$('#add-country').slideUp();
				$('#add-state').slideDown();
				$('#add-city').slideUp();
				$('#add-company').slideUp();
			break;
			
			case 'Add City':
				$('#add-country').slideUp();
				$('#add-state').slideUp();
				$('#add-city').slideDown();
				$('#add-company').slideUp();
			break;
			
			case 'Add Company':
				$('#add-country').slideUp();
				$('#add-state').slideUp();
				$('#add-city').slideUp();
				$('#add-company').slideDown();
			break;
			
			default:
		}
	});
});