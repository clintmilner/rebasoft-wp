// JavaScript Document
$(document).ready(function() { 
    $('#btn-submit').click(function() {  
 
        $(".error").hide();
        var hasError = false;
 
    });
});
$(document).ready(function() { 
 
    $('#btn-submit').click(function() {  
 
        $(".error").hide();
        var hasError = false;
 
        var emailaddressVal = $("#UserEmail").val();
        if(emailaddressVal == '') {
            $("#UserEmail").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }
 
        if(hasError == true) { return false; }
 
    });
});
$(document).ready(function() { 
 
    $('#btn-submit').click(function() {  
 
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 
        var emailaddressVal = $("#UserEmail").val();
        if(emailaddressVal == '') {
            $("#UserEmail").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
            $("#UserEmail").after('<span class="error">Enter a valid email address.</span>');
            hasError = true;
        }
 
        if(hasError == true) { return false; }
 
    });
});