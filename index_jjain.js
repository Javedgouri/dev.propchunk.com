$(".email-signup").hide();
$(".email-reset").hide();


$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
    $(".email-reset").hide(); 	
});

$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
  $(".email-reset").hide(); 	
});


$("#reset-password").click(function(){
  $(".email-reset").delay(100).fadeIn(100);;
  $(".email-login").fadeOut(100);
  
});

$("#back-to-login").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-reset").fadeOut(100);
  
});


