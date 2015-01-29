// JavaScript Document
$(document).ready(function() { 

	 $('#Send').click(function() {  
	 	log("test1");
			// name validation
		
			var nameVal = $('#name').val();
			if(nameVal == '') {
				
				$('#name_error').html('');
				$('#name').after('<label class="error" id="name_error" style="width:200px;">&nbsp;&nbsp;Please enter your name</label>');
				return false
			}
			else
			{
				$("#name_error").html('');
				
			}
			// company validation
			
			var nameVal = $("#company").val();
			if(nameVal == '') {
				
				$("#company_error").html('');
				$("#company").after('<label class="error" style="width:200px;" id="company_error">&nbsp;&nbsp;Please enter your company</label>');
				return false
			}
			else
			{
				$("#company_error").html('');
			}
			
			
			/// email validation
			
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var emailaddressVal = $("#email").val();
			
			if(emailaddressVal == '') {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error" style="width:200px;">&nbsp;&nbsp;Please enter a valid email</label>');
				return false
			}
			else if(!emailReg.test(emailaddressVal)) {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error" style="width:200px;">&nbsp;&nbsp;Please enter a valid email</label>');
				return false
			 
			}
			else
			{
				$("#email_error").html('');
			}
		
		
	        // phone validation
			
			var nameVal = $("#phone").val();
			if(nameVal == '') {
				
				$("#phone_error").html('');
				$("#phone").after('<label class="error" id="phone_error" style="width:200px;">&nbsp;&nbsp;Please enter your phone</label>');
				return false
			}
			else
			{
				$("#phone_error").html('');
			}	
			
			$.post("post.php?"+$("#MYFORM").serialize(), function(response){
			
			if(response==1)
			{
				$("#after_submit").html('');
				$("#Send").after('<label class="success" id="after_submit" style="width:200px;">&nbsp;&nbsp;Download link sent to your email</label>');
				change_captcha();
				clear_form();
			}
			else
			{
				$("#after_submit").html('');
				$("#Send").after('<label class="error" id="after_submit" style="width:200px;">&nbsp;&nbsp;Error - invalid anti-spam code .</label>');
			}
			
			
		});
				
		return false;
	 });
	 
	 // refresh captcha
	 $('img#refresh').click(function() {  
			
			change_captcha();
	 });
	 
	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
	 }
	 
	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#message").val('');
	 }
});
function log(s){
    if(typeof console!="undefined"&&typeof console.debug!="undefined"){
        console.log(s);
    }
                
}//else{alert(s);}}