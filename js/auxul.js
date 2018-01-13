$(document).ready(function () {

	/* Якорь */
	$(function () {
		$("a[href^='#']").click(function (h) {
			h.preventDefault();
			var f = $(this).attr("href"),
				g = $(f).offset().top;
			$("body,html").animate({
				scrollTop: g
			}, 1500)
		});
	});
	

	/* Слайдер с Видео */
	$('.video-crsl-items').carousel({
		itemMinWidth: 300,
		autoRotate: false,
		speed: 300,
		visible: 1
	});
	/* Слайдер с Текстовыми отзывами */
	
	$('.text-crsl-items').carousel({
		itemMinWidth: 300,
		autoRotate: false,
		speed: 300,
		visible: 1,
		itemEqualHeight: false,
	});
	/* Галерея сертификатов */
	$(function () {
		$("[data-fancybox]").fancybox({
			speed: 330,
			opacity: 'auto',
			closeBtn: true
		});
	});

	/* Видео */
	$(".video_wrapper").click(function () {
		var a = $(this).attr("data-youtube");
		$(this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1" frameborder="0" class="video_testimonial" allowfullscreen></iframe>')
	});

	

	/* Конец документа */
});