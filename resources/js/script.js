$(function () {

	// ハンバーガーメニュー
	$('.js-toggle-nav').on('click', function (e) {
		$('.top-nav').toggleClass('show');
		$(this).toggleClass('active');
	});
	// ハンバーガーとメニュー以外をクリックしたらナビメニューを閉じる
	$(document).on('click', function (e) {
		if (!$(e.target).closest('.js-toggle-nav, .top-nav ul').length) {
			$('.top-nav').removeClass('show');
			$('.js-toggle-nav').removeClass('active');
		}
	});
});