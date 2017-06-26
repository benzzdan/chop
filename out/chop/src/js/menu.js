$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

// close open navigation 

function handler1() {
    $(this).one("click", handler2);
    $('#chop_menu').css('width', '74%');
    setTimeout(function(){
        $('.container-menu').fadeIn();
    }, 500);
    
}

function handler2(){
    $(this).one("click", handler1);
    $('.container-menu').fadeOut();
    setTimeout(function(){
        $('#chop_menu').css('width', '0%');
    }, 500);
    
}

$(document).ready(function(){
    $('#nav-icon1').one("click", handler1);
});