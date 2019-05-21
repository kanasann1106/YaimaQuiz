$(function () {

	//アニメーション
	$(window).on('load scroll', function () {

		var elem = $('.animated');

		elem.each(function () {

			var isAnimate = $(this).data('animate');
			var elemOffset = $(this).offset().top;
			var scrollPos = $(window).scrollTop();
			var wh = $(window).height();

			if (scrollPos > elemOffset - wh + (wh / 2)) {
				$(this).addClass(isAnimate);
			}
		});

	});

	// ハンバーガーメニュー
	$('.js-toggle-nav').on('click', function (e) {
		$('.top-nav').toggleClass('show');
		$(this).toggleClass('active');
	});
	// ハンバーガーとメニュー以外をクリックしたらナビメニューを閉じる
	$(document).on('click', function (e) {
		if (!$(e.target).closest('.js-toggle-nav, .top-nav #accordion-menu').length) {
			$('.top-nav').removeClass('show');
			$('.js-toggle-nav').removeClass('active');
		}
	});

	// 画像ライブプレビュー
	var $dropArea = $('.js-area-drop');
	var $fileInput = $('.input-file');
	$dropArea.on('dragover', function (e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border', '3px #ccc dashed');
	});
	$dropArea.on('dragleave', function (e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border', 'none');
	});
	$fileInput.on('change', function (e) {
		$dropArea.css('border', 'none');
		var file = this.files[0],
			$img = $(this).siblings('.prev-img'),
			fileReader = new FileReader();

		fileReader.onload = function (event) {
			$img.attr('src', event.target.result).show();
		};

		fileReader.readAsDataURL(file);
	});
});