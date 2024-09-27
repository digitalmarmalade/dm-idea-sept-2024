// Select multiple items.

$('.jsSelectItems').each(function(){

	var _this = $(this);

	var $answer = _this.find('.jsAnswer'),
		$check = _this.find('.jsCheck'),
		$reset = _this.find('.jsReset'),
		$tryAgain = _this.find('.jsTryAgain'),

		scrollAnchor = _this.data('scroll-anchor'),

		maxSelections = _this.data('max-selected'),

		attempts = 0,
		maxAttempts = 3,

		$successFeedback = _this.find('.jsFeedbackSuccess'),
		$failFeedback = _this.find('.jsFeedbackFail'),
		$failFeedbackMaxAttempts = _this.find('.jsFeedbackFailMaxAttempts'),

		animateClasses = _this.find($('[class*="animate__"]')),

		$timelineQuestion = _this.find($('.jsTimelimeQuestion')),

		altFeedbacks = _this.find($('[data-show-feedback]')).attr("data-show-feedback");

	function scrollToFeedback(){
		if(scrollAnchor != undefined){
			$("html, body").animate({
				//scrollTop: _this.position().top + 100
				scrollTop: $('.' + scrollAnchor).position().top
			}, 1000);
		}
	}

	function removeAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/animate__/g, 'xxx__');
	    });
	}

	function addAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/xxx__/g, 'animate__');
	    });
	}

	removeAnimation();

	function showSuccessFeedback(){
		$successFeedback.removeClass('hide');

		addAnimation();
		scrollToFeedback();
		addCompletionClass();
	}

	function showFailFeedback(){
		$failFeedback.removeClass('hide');

		addAnimation();
		scrollToFeedback();
	}

	function hideFailFeedback(){
		$failFeedback.addClass('hide');

		removeAnimation();
		scrollToFeedback();
	}

	function showFailMaxAttemptsFeedback(){
		$failFeedbackMaxAttempts.removeClass('hide');

		addAnimation();
		scrollToFeedback();
	}

	function hideFailMaxAttemptsFeedback(){
		$failFeedbackMaxAttempts.addClass('hide');

		removeAnimation();
		scrollToFeedback();
	}

	// Pick answer
	$answer.on('click', function(e){
		e.preventDefault();
		
		// Limit number of answers that can be selected.
		if(maxSelections === 1){

			$answer.removeClass('selected');
			$(this).addClass('selected');

		} else if (maxSelections > 1){

			var currentlySelected = _this.find('.selected').length;

			if(currentlySelected === maxSelections){
				$(this).removeClass('selected');
			} else {
				$(this).toggleClass('selected');
			}

		} else {

			// Unlimited selections.
			$(this).toggleClass('selected');
		}
	});

	function addCompletionClass(){
		_this.addClass('jsCompleted');

		// Timeline Specific
		if($timelineQuestion.length > 0){
			$(document).trigger('activityComplete');
		}
	}


	function hideAltFeedback(){
		var alt = _this.find($('[data-show-feedback]'));

		alt.each(function(){
			var feedback = $(this).attr("data-show-feedback");
			_this.find('.' + feedback).hide();
		});
	}


	// Reset.
	$check.on('click', function(e){

		e.preventDefault();

		var minimumSelected = _this.find('.selected').length,
			correctSelected = _this.find($('.jsCorrect.jsAnswer.selected')).length,
			selected = _this.find($('.jsCorrect.jsAnswer')).length,
			wrongAnswers = _this.find($('.jsAnswer.selected:not(.jsCorrect)')).length,
		 	altFeedback = _this.find('.selected').data('show-feedback');
		
		hideFailFeedback();
		hideFailMaxAttemptsFeedback();

		if(selected === correctSelected && wrongAnswers === 0){
			showSuccessFeedback();

			// Timeline Specific.
			if($timelineQuestion.length > 0){
				$timelineQuestion.hide();
			}

		} else {

			if(altFeedback){

				// altFeedback to show.

				_this.find('.' + altFeedback).show();
				addAnimation();

				// Timeline Specific.
				if($timelineQuestion.length > 0){
					$timelineQuestion.hide();
				}

			} else {

				if(minimumSelected > 0){
					
					$check.addClass('visibility-hidden');

					attempts++;
					if(attempts >= maxAttempts){

						// If there is a max attempts message
						if($failFeedbackMaxAttempts.length > 0){
							showFailMaxAttemptsFeedback();
						} else {
							showFailFeedback();
						}

						// Timeline Specific.
						if($timelineQuestion.length > 0){
							$timelineQuestion.hide();
						}

					} else {
						showFailFeedback();

						// Timeline Specific.
						if($timelineQuestion.length > 0){
							$timelineQuestion.hide();
						}
					}
				}
			}

		}
	});

	// Reset - remove all selected answers.
	$reset.on('click', function(e){

		e.preventDefault();

		_this.find('.selected').removeClass('selected');

		$check.removeClass('visibility-hidden');

		hideFailFeedback();
		hideFailMaxAttemptsFeedback();
		removeAnimation();

		if(altFeedbacks != undefined){
			hideAltFeedback();
		}

		// Timeline Specific.
		if($timelineQuestion.length > 0){
			$timelineQuestion.show();
		}

	});

	// Try Again - Keeps correct answers if trying again.
	$tryAgain.on('click', function(){

		var answer = _this.find('.jsAnswer');

		answer.each(function(){
			if(!$(this).hasClass('jsCorrect')){
				$(this).removeClass('selected');
			}
		});


		// Timeline Specific.
		if($timelineQuestion.length > 0){
			$timelineQuestion.show();
		}

		$check.removeClass('visibility-hidden');
		hideFailFeedback();
		hideFailMaxAttemptsFeedback();
		removeAnimation();

	});
	
});