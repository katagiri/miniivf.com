// jquery validation script

	
$().ready(function() {
	
	// validate CONTACT form on keyup and submit
	$("#contactForm").validate({
		rules: {
			first: {
				notEqual: "First",
				required: true
			},
			last: {
				notEqual: "Last",
				required: true
			},
			email: {
				notEqual: "Email",
				email: true
			},
			phone: {
				notEqual: "Phone",
				phoneUS: true
			},
		},
		messages: {
		}
	});
});
	

// Jquery Phone Validator

jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
		phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Must be a valid phone number");

jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != param;
}, "This field is required.");