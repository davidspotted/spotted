function connect(){
	$("#login-form").submit();
}

function register(){
	$("#register-form").submit();
}

function pageSetup(){
	var containerWidth = $("#mobileContainer").width();
	var captionWidth = (containerWidth - 4)/2;
	$(".div-home-caption").css("width", captionWidth);
	
	$("#div-signup-form").hide();
}
