$(document).ready(function(){
	$('.video').click(function(){
		$('.modal').show();
	});

	$('.model').click(function(){
		var vidLink = $(this).attr('data-vidlink');
		var target = $('#modelVid').attr('src', vidLink);

		console.log(vidLink);
		console.log(target);

	});
});