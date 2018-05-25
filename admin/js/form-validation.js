// Login Validation
$('#frmLogin').validate({
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
		username: {
			required: true,
			nowhitespace:true
		},
		password: {
			required: true,
			nowhitespace:true
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
	}
});

// Page Add Validation
$('#iconPageForm').validate({
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
		title: {
			required: true
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Slider Add Validation
$('#iconSliderForm').validate({
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
		name: {
			required: true
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// News Add Validation
$('#iconNewsForm').validate({
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
		name: {
			required: true
		},
		description: {
			required: true
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Banner Add Validation
$('#iconBannerForm').validate({
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
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Setting Page Validation
$('#iconSettingForm').validate({
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
		email1: {
			email: true
		},
		email2: {
			email: true
		},
		weblogo: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
		makeinindialogo: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
		catelog: {
			extension: 'pdf|PDF'
		},
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
		//form.submit();
	}
});

// Change Password Validation
$('#iconChangePasswordForm').validate({
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
		username: {
			nowhitespace:true
		},
		oldPassword: {
			required: true,
			nowhitespace:true,
		},
		newPassword: {
			required: true,
			nowhitespace:true,
		},
		confirmPassword: {
			required: true,
			nowhitespace:true,
			equalTo: "#newPassword",
		},
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
	}
});

// Product Categoty Add Validation
$('#iconBLFMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconPPMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconSWMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconVPMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconBSWMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconLMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconOPSCMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconWSMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconICSForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconCBSMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Categoty Add Validation
$('#iconBSMForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Product Add Validation
$('#iconProductForm').validate({
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
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Client Add Validation
$('#iconClientForm').validate({
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
		name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// Category Add Validation
$('#iconCategoryForm').validate({
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
		name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});

// New Product Add Validation
$('#iconProductNewForm').validate({
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
		cat_id: {
			required: true,
		},
		pro_name: {
			required: true,
		},
		image: {
			extension: 'png|PNG|jpg|JPG|jpeg|JPEG|jif|JIF'
		},
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
		//form.submit();
	}
});