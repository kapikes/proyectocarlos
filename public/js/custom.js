$(function() {
	console.log("Loaded custom loader!!!");
	$('.require-login').click(function(e) {
		e.preventDefault();
		$('#register-modal').modal('show');
		return false;
	});

	$('#lnk-logout').click(function(e) {
		e.preventDefault();
		$('#logout-form').submit();
	});
});
