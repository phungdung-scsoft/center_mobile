//modal
$(function(){
	　　　$('.menu-trigger').on("click", function(){
	　　　　if ($('.menu-trigger').hasClass('active')) {
	　　　　　$('.menu-trigger').removeClass('active');
	　　　　} else {
	　　　　　$('.menu-trigger').addClass('active');
	　　　　}
	　　　});
	　　});


$(function(){
　　　$('.menu-trigger').on("click", function(){
　　　　if ($('.gnav').hasClass('active')) {
　　　　　$('.gnav').removeClass('active');
　　　　} else {
　　　　　$('.gnav').addClass('active');
　　　　}
　　　});
　　});

$(function(){
　　　$('.menu-trigger').on("click", function(){
　　　　if ($('body').hasClass('open')) {
　　　　　$('body').removeClass('open');
　　　　} else {
　　　　　$('body').addClass('open');
　　　　}
　　　});
　　});


//slider
$('.slider').slick({
	autoplay: true,
	arrows: false,
	asNavFor: ".thumb",
	slidesToShow: 1,
	centerMode: true,
	centerPadding: "25%",
	waitForAnimate: false,
	responsive: [
		{
		  breakpoint: 1921,
		  settings: {
				slidesToShow: 1,
				centerMode: false,
			}
		}
	]
});

$('.thumb').slick({
	asNavFor: '.slider', // スライダを他のスライダのナビゲーションに設定する（class名またはID名）
	focusOnSelect: true, // クリックでのスライド切り替えを有効にするか
	slidesToShow: 4, // 表示するスライド数を設定
	waitForAnimate: false,
});


//YouTube
$(window).on('load',function(){
	youtubeDef();
});

$(function(){
	$(window).scroll(function (){
		youtubeDef();
	});
});

function youtubeDef(){
	$('.videoDefer').each(function(index, element){
		var ePos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > ePos - windowHeight){
			var vimg = $('.videoDefer')[index];
			if(!$('.videoDefer').hasClass('show')){
				if (vimg.getAttribute('data-src')) {
					vimg.setAttribute('src', vimg.getAttribute('data-src'));
				}
				$('.videoDefer').addClass('show');
			}
		}
	});
}
