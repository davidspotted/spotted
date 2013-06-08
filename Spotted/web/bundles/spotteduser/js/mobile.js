function connect(){
	$("#login-form").submit();
}

function register(){
	$("#register-form").submit();
}

function pageSetup(){
	var containerWidth = $("#mobileContainer").width();
	var captionWidth = (containerWidth - 8)/2;
	$(".div-home-caption").css("width", captionWidth);
	
	$("#div-signup-form").hide();
}

function formToogle(sender){
	
	if (sender.id == "div-login-caption"){
		//alert("LOGIN");
		if (!$("#div-login-form").is(":visible")){
			$("#div-login-form").show("slide");

		}
		$("#div-signup-form").hide("slide");

	}
	
	if (sender.id == "div-register-caption"){
		//alert("REGISTER");
		if (!$("#div-signup-form").is(":visible")){
			$("#div-signup-form").show("slide");	

		}
		$("#div-login-form").hide("slide");

	}
	
	
}
