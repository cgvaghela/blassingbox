// Prayer From Validation
$('#prayer_frm').validate({
	errorElement: "span", // contain the error msg in a span tag
	errorClass: 'help-block',
	errorPlacement: function (error, element) { // render error placement for each input type
		if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
			error.insertAfter($(element).closest('.form-group').children('div').children().last());
		} else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
			error.insertAfter($(element).closest('.form-group').children('div'));
		} else {
			error.insertAfter(element);
			// for other inputs, just perform default behavior
		}
	},
	ignore: "",
	rules: {
		first_name: {
			required: true
		},
		last_name: {
			required: true
		},
		email: {
			email:true,
			required: true
		},
		title: {
			required: true
		},
		body: {
			required: true
		},
		captcha_code: {
			minlength:6,
			required: true
		}
	},
	messages: {
	},
	invalidHandler: function (event, validator) { //display error alert on form submit
	},
	highlight: function (element) {
		$(element).closest('.help-block').removeClass('valid');
		// display OK icon
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
		// add the Bootstrap error class to the control group
	},
	unhighlight: function (element) { // revert the change done by hightlight
		$(element).closest('.form-group').removeClass('has-error');
		// set error class to the control group
	},
	success: function (label, element) {
		label.addClass('help-block valid');
		// mark the current input as valid and display OK icon
		$(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
	},
	submitHandler: function (form) {
		// submit form
		//$('#form').submit();
		form.submit();
	}
});

// Praise From Validation
$('#praise_frm').validate({
	errorElement: "span", // contain the error msg in a span tag
	errorClass: 'help-block',
	errorPlacement: function (error, element) { // render error placement for each input type
		if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
			error.insertAfter($(element).closest('.form-group').children('div').children().last());
		} else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
			error.insertAfter($(element).closest('.form-group').children('div'));
		} else {
			error.insertAfter(element);
			// for other inputs, just perform default behavior
		}
	},
	ignore: "",
	rules: {
		email: {
			email:true,
			required: true
		},
		report: {
			required: true
		},
		captcha_code: {
			minlength:6,
			required: true
		}
	},
	messages: {
	},
	invalidHandler: function (event, validator) { //display error alert on form submit
	},
	highlight: function (element) {
		$(element).closest('.help-block').removeClass('valid');
		// display OK icon
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
		// add the Bootstrap error class to the control group
	},
	unhighlight: function (element) { // revert the change done by hightlight
		$(element).closest('.form-group').removeClass('has-error');
		// set error class to the control group
	},
	success: function (label, element) {
		label.addClass('help-block valid');
		// mark the current input as valid and display OK icon
		$(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
	},
	submitHandler: function (form) {
		// submit form
		//$('#form').submit();
		form.submit();
	}
});