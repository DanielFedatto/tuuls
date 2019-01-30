jQuery(document).ready(function(){
	$('.menu-item').addClass('menu-trigger');
	$('.menu-trigger').click(function(){
		$('#menu-trigger').toggleClass('clicked');
		$('.container').toggleClass('push');
		$('.menu-type').toggleClass('open');
	});
	$(window).scroll(function() {
		if ($(window).scrollTop() > 10) {
			$('.desk-nav').addClass('sticky');
		} else {
			$('.desk-nav').removeClass('sticky');
		}
	});
  $('.header_banner').slick({
	 centerMode: true,
	 slidesToShow: 1,
	 slidesToScroll: 3,
	 arrows: false,
	 draggable: false,
	 loop: false,
	 responsive: false,
	 dots: false,
	 autoplay: true,
	 responsive: [{
			 breakpoint: 1024,
			 settings: {
					 slidesToShow: 1,
					 infinite: true
			 }
	 }, {
			 breakpoint: 767,
			 settings: {
					 slidesToShow: 1,
			 }
	 }, {
			 breakpoint: 320,
			 settings: {
					 slidesToShow: 1,
			 }
	 }],
  });
});
