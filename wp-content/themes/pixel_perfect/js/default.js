$(document).ready(function(){
	//scroll header images
	$('#banner_images').cycle({
		//fx:     'scrollLeft', 
		timeout: 10000
	});
	
	$('#coming_up ul').children('li:first').addClass("first");
	$('#coming_up ul').children('li:nth-child(2n)').addClass("second");
	$('#coming_up ul').children('li:nth-child(3n)').addClass("last");
	
	//move event cal to top of post
	var myDiv2Para = $('.ec3_schedule').detach();
	myDiv2Para.prependTo('article');
	
	
	$('#site_footer').after('<div class="overlay"></div>').hover(function(){
		$('.overlay').fadeOut();
	});
	
	
	
});