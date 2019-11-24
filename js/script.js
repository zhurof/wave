﻿//шапка
$('.header__info-trigger').click(function(){
	$(this).toggleClass('header__info-trigger--active');
	$(this).siblings('.header__info-body').fadeToggle(150);
	$('.menu-btn').removeClass('menu-btn--active');
	$('.header__menu').removeClass('header__menu--open');
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
$('.header__search-btn').click(function(){
	$('.header__search').fadeIn(200,function(){
		$(this).find('input').focus();
	});
	$('.menu-btn').removeClass('menu-btn--active');
	$('.header__menu').removeClass('header__menu--open');
})
$('.search-form__close').click(function(){
	$(this).parents('.search-form').fadeOut(200);
})
$(document).click(function(e){
	if(!$(e.target).is('.header__search,.header__search-btn') && !$('.header__search').find(e.target).length){
		$('.header__search').hide();
	}
})
$('.menu-btn').click(function(){
	$(this).toggleClass('menu-btn--active');
	$('.header__menu').toggleClass('header__menu--open');
})
//верхний слайдер на главной
$('.top-block').slick({
	touchThreshold: 1000,
	arrows: false,
	dots: true,
	customPaging: function(){return ''},
	dotsClass: 'top-block__dots'
})
//Видео
$('.video__btn').click(function(){
	$(this).siblings('.video__tag')[0].play();
})
$('.video__tag').on('play',function(){
	$(this).parent('.video').addClass('video--playing');
	this.controls = true;
})
$('.video__tag').on('pause ended',function(){
	$(this).parent('.video').removeClass('video--playing');
	this.controls = false;
})
$('.video__tag').on('seeking',function(){
	this.controls = true;
	this.play();
	$(this).parent('.video').addClass('video--playing');
})
//Блок со слайдером видео
$('.video-block__slider').on('beforeChange',function(e,slick,currentSlide,nextSlide){
	$(this).parents('.video-block').find('.video-block__card').removeClass('video-block__card--active').eq(nextSlide).addClass('video-block__card--active');
	$(slick.$slides[currentSlide]).find('video')[0].pause();
	$(slick.$slides[nextSlide]).find('video')[0].play();
})
$('.video-block__card').click(function(){
	var index = $(this).index();
	$(this).parents('.video-block').find('.video-block__slider').slick('slickGoTo',index);
})
$('.video-block__slider').slick({
	touchThreshold: 1000,
	arrows: false,
	focusOnSelect: true,
	centerMode: true,
	centerPadding: 0,
	variableWidth: true,
	customPaging: function(){return ''},
	dotsClass: 'slick-dots video-block__dots',
	responsive: [
		{
			breakpoint: 768,
			settings: {
				variableWidth: false,
				dots: true
			}
		}
	]
})
//
$('.category-block__slider').slick({
	touchThreshold: 1000,
	variableWidth: true,
	infinite: false,
	prevArrow: '<span class="slick-arrow prev category-block__arrow" />',
	nextArrow: '<span class="slick-arrow next category-block__arrow" />',
	responsive: [
		{
			breakpoint: 992,
			settings: {
				infinite: true,
				arrows: false
			}
		}
	]
})