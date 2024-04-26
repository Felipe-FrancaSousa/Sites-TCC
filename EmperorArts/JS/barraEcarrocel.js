// JavaScript Document

		//== BARRA ==\\
$(document).ready(function(e){
				  
	$('.volta_Topo').hide(0);
	
				  })
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 100) {
	  $('.volta_Topo').fadeIn(300);

  } else {
	$('.volta_Topo').fadeOut(300);
  };
});

$(document).ready(function(){
	$("a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;
			var p = $(hash).offset().top; // A posição do id

			$('html, body').animate({
				scrollTop: p
			}, 800, function(){
				window.location.hash = p;
			});
		} 
	});
});
		
