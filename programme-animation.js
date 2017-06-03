$(function() {
	var colors = ['#e0607e', '#5472dd', '#dbd3ad', '#f7f71d']
	var i =0;
	$('.animation-date').each(function() {
		$(this).css('background', colors[i]);
		i++;
		if (i === 4) {
			i = 0;
		}
	});

    i = 0;

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