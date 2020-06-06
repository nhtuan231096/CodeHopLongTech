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
	$('.list-child-menu').hide();
	$('.btn-view-child').click(function(){
		$(this).parent().children('.list-child-menu').toggle(500);
	})
});