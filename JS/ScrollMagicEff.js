// JavaScript Document
$(document).ready(function() {
	
	var controller = new ScrollMagic.Controller();
	
	
	var bookshelf = new ScrollMagic.Scene({
		
		triggerElement: '.Bookshelf',
		duration:3680,
		triggerHook:'0.1'
		
		
		
		
	})
	
	.setPin('.Bookshelf',{pushFollowers: false})
	.addTo(controller);

//PIN DESC BOX


	$('.DescBox').each(function() {
		
		var PinDescription= new ScrollMagic.Scene({
			
			
			triggerElement: this,
			duration: 600,
			triggerHook:'0.3',
			
		})
		.setPin(this)
		.addTo(controller);
		
		
		
        
    });





//LAPTOP-BOOK-DIV ANIMATE

	$('.animate-left').each(function() {
		
		
		
			
	var Scene1 = new ScrollMagic.Scene({
		
		triggerElement:this,
		triggerHook:'0.5',
		duration:400,
		reverse: true

		
		})
		.setClassToggle(this, 'Fade-In-From-Left')
		
		.addTo(controller);
		
        
    });
	
	$('.animate-right').each(function() {
		
		
		
			
	var Scene1 = new ScrollMagic.Scene({
		
		triggerElement:this,
		triggerHook:'0.505',
		duration:400,
		reverse: true

		
		})
		.setClassToggle(this, 'Fade-In-From-Right')
		
		.addTo(controller);
		
        
    });
	
	$('.animate-up').each(function() {
	var Scene1 = new ScrollMagic.Scene({
		
		triggerElement:this,
		duration:300,
		triggerHook:'0.85'

		
		})
		.setClassToggle(this, 'Fade-In-From-Below')
		
		.addTo(controller);
		
        
    });
	
	
	
	
	
	
//BASE HEADING ANIMATE
	$('.Fade-in').each(function() {
	var Scene1 = new ScrollMagic.Scene({
		
		triggerElement:this,
		duration: 300,
		triggerHook:'0.65'

		
		})
		.setClassToggle(this, 'Fade')

		.addTo(controller);
		
        
    });
	
	
	
	
// MANUAL CHECK TO SEE IF THE OBJECT IS IN VIEWPORT

$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};
	
//rotate BOOKS	
	var $book= $('.Book-left');
	var $win=$(window);
	
	$win.on('scroll',function(){
		
		if($book.isInViewport()){
		var angle = $win.scrollTop()/20;
		$book.css('transform', 'rotate(' +angle+'deg)');
		}
	});
	
		var $book2= $('.Book-right');
	var $win2=$(window);
	
	$win.on('scroll',function(){
		
		if($book2.isInViewport()){
		var angle2 = $win.scrollTop()/20;
		$book2.css('transform', 'rotate(' +-angle2+'deg)');
		}
	});





//Stack PIN

	var $laptopScene = new ScrollMagic.Scene({
		
		triggerElement:'#Laptop',
		duration:300,
		triggerHook:'0.28'
		
		
	})
	.setPin('#Laptop')
	.addIndicators()
	.addTo(controller);
				
	
	
	var $BookStackScene = new ScrollMagic.Scene({
		
		triggerElement:'#BookStack',
		duration:900,
		triggerHook:'0.1'
		
		
	})
	.setPin('#BookStack')
	
	.addIndicators()
	.addTo(controller);

		
	var $PhoneScene = new ScrollMagic.Scene({
		
		triggerElement:'#Phone',
		duration:1400,
		triggerHook:'0.34'
		
		
	})
	.setPin('#Phone')
	.addIndicators()
	.addTo(controller);
				

		
	
});