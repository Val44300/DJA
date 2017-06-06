$(function() {

	var i =0;

	$('.animation').each(function() {
        console.log(i)
		if (i % 2 === 0) {
			$(this).addClass('col-md-offset-2');

		} else {
			$(this).addClass('col-md-offset-5'); 
        }
        i++
	});
}); 