	//Accordian
	$('.accordion').each(function () {
	    var $accordian = $(this);
	    $accordian.find('.accordion-head').on('click', function () {
            $(this).removeClass('open').addClass('close');
	        $accordian.find('.accordion-body').slideUp();
	        if (!$(this).next().is(':visible')) {
                $(this).removeClass('close').addClass('open');
	            $(this).next().slideDown();
	        }
	    });
	});
	
	