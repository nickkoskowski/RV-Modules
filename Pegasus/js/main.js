jQuery(document).ready(function(){


	jQuery('#responsive-nav .glyphicon').click(function(){
		var navPos = jQuery('#slideOut').css('right');
		if (navPos === '-320px') {
			jQuery( "#slideOut" ).animate({
				right: "0",
			}, 500, function() {
			});
		}
		else {
			jQuery( "#slideOut" ).animate({
				right: "-320",
			}, 500, function() {
			});
		}
	});


	jQuery('.model').click(function(){
		var vidLink = jQuery(this).attr('data-vidlink');
		var target = jQuery('#modelVid').attr('src', vidLink);

		//console.log(vidLink);
		//console.log(target);

	});

	jQuery('#inventory').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}
		]
	});
	
});