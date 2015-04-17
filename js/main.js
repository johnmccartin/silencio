var fire = {};

$(document).ready(function(){
	setSizes();
	iconer();
	linkit();
	externallinks();
	popstatecraft();
	
	
	$('.mobile-menu').on('click','a',function(){
		$(this).parents('.mobile-menu').slideUp();
	});


	$('.content img').addClass('pure-img');

	$(window).resize(function(){
		setSizes();
	});


});

function setSizes() {

	
	parent_width('.header');
	
	
}


function parent_width(el) {
	$(el).width($(el).parent().outerWidth());
}


function getRootElementFontSize( ) {
    // Returns a number
    return parseFloat(
        // of the computed font-size, so in px
        getComputedStyle(
            // for the root <html> element
            document.documentElement
        )
        .fontSize
    );
}
function convertRem(value) {
    return value * getRootElementFontSize();
}

function iconer() {
	
	$(document).on('click','.closer',function(){
		$(this).parent().slideUp();
	});
	
	$(document).on('click','.opener',function(){
		$(this).siblings('.mobile-menu').slideDown();
	});
	
}

function linkit() {
	if(Modernizr.history) {
		$(document).off('click','a').on('click','a',function(e){
			
			_href = $(this).attr('href');
			
			if(_href.indexOf(document.domain) > -1
			  || _href.indexOf(':') === -1) {
			  
			  	if (_href.indexOf(document.domain) <= 7) {
			  	
			  	var filetype = _href.substr( _href.lastIndexOf('.') + 1 );
			  	var files = ['pdf','jpg','jpeg','png','gif','doc','docx','xls','xlsx'];
			  	var found = $.inArray(filetype,files) > -1;
			  	
					if (found == true) {
					
					} else {
				
						e.preventDefault();
						history.pushState(null,null,_href);
						loadContent(_href);
						return false;
				
					}
			  	}
			} else {
			
			}
			
		}); //onclick
	} //mod.history
	
}

function loadContent(href){
  	var $c = $('.content');
	$.ajax({
	url: href,
	cache: false,
	success: function(data) {
		$c.animate({opacity:0},400,function(){
			$c.html(data);
			$('.content img').addClass('pure-img');
			gotClass();
			setSizes();
			externallinks();
			$c.animate({opacity:1},800);

		}); //animate
	
	} //success

	}); //ajax
	
}

function gotClass(){
	
	//var currentState = window.location.href;
	
	if(bodyClasses.length > 0) {
		$('body').removeClass();
		$.each(bodyClasses,function(i,val){
			$('body').addClass(val);
		});
	}
	
}

function popstatecraft() {

	$(window).on('popstate',function(){
		loadContent(window.location.href);
	
	});

}

function externallinks() {
	$('a').each(function(i,e) {
	
		var her = $(this).attr('href');
		if(her.indexOf(document.domain) === -1) {
			$(this).attr('target','_blank');
		}
	
	});
}
