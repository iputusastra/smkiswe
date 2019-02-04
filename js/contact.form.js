$(document).ready(function(){
	
   //submission scripts
  $('.contactForm').submit( function(){
		//statements to validate the form	
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = document.getElementById('e-mail');
		if (!filter.test(email.value)) {
			$('.email-missing').css({'opacity': 1 });
		} else {$('.email-missing').css({'opacity': 0 });}
		if (document.cform.name.value == "") {
			$('.name-missing').css({'opacity': 1 });
		} else {$('.name-missing').css({'opacity': 0 });}	
		if (document.cform.message.value == "") {
			$('.message-missing').css({'opacity': 1 });
		} else {$('.message-missing').css({'opacity': 0 });}		
		if ((document.cform.name.value == "") || (!filter.test(email.value)) || (document.cform.message.value == "")){
			return false;
		} 
		
  }); 
});