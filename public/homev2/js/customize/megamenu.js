$(document).ready(function(){
	$('.megamenu-left').hide();
	$('.megamenuToogle-wrapper').click(function(){
		$('.megamenu-left').toggle();
	});
})

$(document).ready(function(){
	$('.itemMenu').hide();
	$('.button-view').click(function(){
		$(this).parent().children('.itemMenu').toggle(500);
	});  
});

$(document).ready(function(){
	$('.childMenu').hide();
	$('.button-view-child').click(function(){
		$(this).parent().parent().children('.childMenu').toggle(500);
	})
});