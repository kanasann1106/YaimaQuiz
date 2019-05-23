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
	const $dropArea = $('.js-area-drop');
	const $fileInput = $('.input-file');
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
		const file = this.files[0],
			$img = $(this).siblings('.prev-img'),
			fileReader = new FileReader();

		fileReader.onload = function (event) {
			$img.attr('src', event.target.result).show();
		};

		fileReader.readAsDataURL(file);
	});

	//アラートポップアップ
	const $withdrawMenu = $('.js-alert');
	const $alert = $('#alert');
	const $withdraw = $('#withdraw');
	const $cancel = $('#cancel');
	const $overlay = $('#overlay');

	$withdrawMenu.on('click', function () {
		$alert.addClass('is-active');
		$overlay.addClass('is-active');
	});
	$cancel.on('click', function () {
		$alert.removeClass('is-active');
		$overlay.removeClass('is-active');
	});
	$withdraw.on('click', function () {
		window.location.href = "/withdraw";
	});
});