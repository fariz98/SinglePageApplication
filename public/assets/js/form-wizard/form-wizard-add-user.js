"use strict";
function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}
function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}
(function($) {
	"use strict";
	$.backstretch;
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('.f1 fieldset:first').fadeIn('slow');
    
    $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
	var currentstep = 0;
	var newstep = 1;
    $('.f1 .btn-next').on('click', function() {	
		
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
        var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
			
			
				var gelaran     = $('#indeks_gelaran').parsley();
				var nama        = $('#nama').parsley();
				var idPengguna  = $('#IdPengguna').parsley();
				var emel        = $('#emel').parsley();
				var noTel        = $('#noTel').parsley();
				var kementerian = $('#indeks_kementerian').parsley();
				
				if(gelaran.isValid() && nama.isValid() && idPengguna.isValid() && emel.isValid() && noTel.isValid() && kementerian.isValid()) {
					currentstep +=1;
					newstep +=1;
					$(this).removeClass('input-error');
					parent_fieldset.fadeOut(400, function() {
						current_active_step.removeClass('active').addClass('activated').next().addClass('active');
						bar_progress(progress_line, 'right');
						$(this).next().fadeIn();
						scroll_to_class( $('.f1'), 20 );
					});
					
					return true;
				} else {
					gelaran.validate();
					nama.validate();
					idPengguna.validate();
					emel.validate();
					noTel.validate();
					kementerian.validate();
					next_step = false;
				}
			

			
    	});
    	
    });
	$('.f1 .btn-next2').on('click', function() {	
		
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
        var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
			
			
					var pwd = $('#password-input').parsley();

					if(pwd.isValid()) {
						next_step = true;
						$(this).removeClass('input-error');
						parent_fieldset.fadeOut(400, function() {
							current_active_step.removeClass('active').addClass('activated').next().addClass('active');
							bar_progress(progress_line, 'right');
							$(this).next().fadeIn();
							scroll_to_class( $('.f1'), 20 );
						});
						return true;
					} else { 
						alert(3);
						pwd.validate();
						next_step = false;
						return; 
					}
				
			
    		
    	});
    	
    });
    $('.f1 .btn-previous').on('click', function() {
		currentstep -=1;
		newstep -=1;
        var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	$(this).parents('fieldset').fadeOut(400, function() {
    	   current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		bar_progress(progress_line, 'left');
    		$(this).prev().fadeIn();
    		scroll_to_class( $('.f1'), 20 );
    	});
    });
    $('.f1').on('submit', function(e) {
    	// $(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    	// 	if( $(this).val() == "" ) {
    	// 		e.preventDefault();
    	// 		$(this).addClass('input-error');
    	// 	}
    	// 	else {
    	// 		$(this).removeClass('input-error');
    	// 	}
			
			
    	// });
    });
})(jQuery);