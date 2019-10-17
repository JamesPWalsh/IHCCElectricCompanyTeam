$(document).ready(function(){
	$('input#firstname.formtick').click(function() {
		thisRadio = $(this);
		if (thisRadio.hasClass("imChecked")) {
        thisRadio.removeClass("imChecked");
				$('input#form-firstname').prop('disabled', true);
        thisRadio.prop('checked', false);
				$('input#form-firstname').removeClass("bg");
    } else {
        thisRadio.prop('checked', true);
				$('input#form-firstname').prop('disabled', false);
				$('input#form-firstname.form').addClass("bg");
        thisRadio.addClass("imChecked");
    };
});
$('input#lastname.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-lastname').prop('disabled', true);
			$('input#form-lastname').removeClass("bg");
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-lastname').prop('disabled', false);
			thisRadio.addClass("imChecked");
			$('input#form-lastname').addClass("bg");
	};
});
$('input#email.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-email').prop('disabled', true);
			$('input#form-email.form').removeClass("bg");
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-email').prop('disabled', false);
			thisRadio.addClass("imChecked");
			$('input#form-email.form').addClass("bg");
	};
});
$('input#password.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-password').prop('disabled', true);
			$('input#form-password').removeClass("bg");
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-password').prop('disabled', false);
			thisRadio.addClass("imChecked");
			$('input#form-password').addClass("bg");
	};
});
$('input#address.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-address').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-address').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
$('input#city.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-city').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-city').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
$('input#state.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-state').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-state').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
$('input#zip.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-zip').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-zip').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
$('input#phonenumber.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-phonenumber').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-phonenumber').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
$('input#alt_phonenumber.formtick').click(function() {
	thisRadio = $(this);
	if (thisRadio.hasClass("imChecked")) {
			thisRadio.removeClass("imChecked");
			$('input#form-alt-number').prop('disabled', true);
			thisRadio.prop('checked', false);
	} else {
			thisRadio.prop('checked', true);
			$('input#form-alt-number').prop('disabled', false);
			thisRadio.addClass("imChecked");
	};
});
});
