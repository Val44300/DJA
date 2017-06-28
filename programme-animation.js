$(function() {

	var i =0;

	$('.animation').each(function() {
        console.log(i)
		if (i % 2 === 0) {
			$(this).addClass('animation-offset-2');

		} else {
			$(this).addClass('animation-offset-5'); 
        }
        i++
	});
}); 