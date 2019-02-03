$(function(){

	// ハンバーガーメニュー
	$('.js-toggle-nav').on('click', function(){
		$('.top-nav').toggleClass('show');
		$(this).toggleClass('active');
	});
});