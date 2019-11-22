$('.header__info-trigger').click(function(){
	$(this).toggleClass('header__info-trigger--active');
	$(this).siblings('.header__info-body').fadeToggle(150);
})
$(document).click(function(e){
	if(!$(e.target).is('.header__info') && !$('.header__info').find(e.target).length){
		$('.header__info-body').hide();
		$('.header__info-trigger').removeClass('header__info-trigger--active');
	}
})
$('.banner__remove-btn').click(function(){
	$(this).parents('.banner').slideUp(200);
})