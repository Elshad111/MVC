$(function(){
	var btnUp = $('.scroll-to-top');
	move = false;
	function scrollBtn(){
		var top = $(this).scrollTop();
		if(top > 100){
			btnUp.fadeIn(500);
		}else{
			btnUp.fadeOut(500);
		}
	}
	scrollBtn();
	$(document).on('scroll', scrollBtn);
	btnUp.on('click', function(){
		if(move){
			return ;
		}
		move = true;
		$('html, body').animate({
			scrollTop : 0
		}, 700, function(){
			move = false;
		});
	});
});