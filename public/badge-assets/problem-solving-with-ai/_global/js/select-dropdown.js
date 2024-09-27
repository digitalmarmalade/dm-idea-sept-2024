// Activity - Select correct word from the dropdowns.

$('.jsSelectDropdown').each(function(){

	var _this = $(this),

		answers = {
		    correct: [],
		    user: []
		},

		$answer = _this.find('.jsAnswer'),
		$check = _this.find('.jsCheck'),
		$reset = _this.find('.jsReset'),
		$tryAgain = _this.find('.jsTryAgain'),

		scrollAnchor = _this.data('scroll-anchor'),

		attempts = 0,
		maxAttempts = 3,

		$successFeedback = _this.find('.jsFeedbackSuccess'),
		$failFeedback = _this.find('.jsFeedbackFail'),
		$failFeedbackMaxAttempts = _this.find('.jsFeedbackFailMaxAttempts'),

		animateClasses = _this.find($('[class*="animate__"]')),

		$taskDropdownSelect = _this.find('select'),
		$customSelect = _this.find('.custom-select'),

		$timelineQuestion = _this.find($('.jsTimelimeQuestion'));

	$taskDropdownSelect.each(function(){
	   var answer = $(this).find('.jsCorrect').text().toLowerCase().trim();
	   answers.correct.push(answer);
	   answers.user.push("");
	});

	_this.find('.custom-select').on('click', function(e){

		var pickedAnswer = $(this).find('.select-selected').text().toLowerCase().trim(),
		selectIndex = $(this).prevAll(".custom-select").size();

		answers.user[selectIndex] = pickedAnswer;
		console.log(answers);
	});

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
	        return attr.replace(/animate__/g, '###__');
	    });
	}

	function addAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/###__/g, 'animate__');
	    });
	}

	removeAnimation();

	function showSuccessFeedback(){
		$successFeedback.removeClass('hide');
	}

	function showFailFeedback(){
		$failFeedback.removeClass('hide');
	}

	function hideFailFeedback(){
		$failFeedback.addClass('hide');
	}

	function showFailMaxAttemptsFeedback(){
		$failFeedbackMaxAttempts.removeClass('hide');
	}

	function hideFailMaxAttemptsFeedback(){
		$failFeedbackMaxAttempts.addClass('hide');
	}

	function addCompletionClass(){
		_this.addClass('jsCompleted');
		
		// Timeline Specific
		if($timelineQuestion.length > 0){
			$(document).trigger('activityComplete');
		}
	}

	// Pick answer
	$answer.on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('selected');
	});

	// Check.
	$check.on('click', function(e){

		e.preventDefault();

		$check.addClass('visibility-hidden');

		// How many correct answers.
		var numCorrect = 0;
		for(var i = 0; i < answers.user.length; i++){
			if(answers.user[i] === answers.correct[i]){
				numCorrect++;
			}
		}

		// All answers correct
		if(JSON.stringify(answers.user) === JSON.stringify(answers.correct)){
			showSuccessFeedback();
			scrollToFeedback();
			addCompletionClass();
			addAnimation();

			// Timeline Specific.
			if($timelineQuestion.length > 0){
				$timelineQuestion.hide();
			}

		} else {

			if($timelineQuestion.length > 0){

				if(numCorrect > 2){ 
					$timelineQuestion.hide();

					addAnimation();

					if($failFeedbackMaxAttempts.length > 0){
						showFailMaxAttemptsFeedback();
						hideFailFeedback();
					} else {
						showFailFeedback();
					}

					$check.removeClass('visibility-hidden');
				} else {
					$timelineQuestion.hide();
					showFailFeedback();
					addAnimation();
					hideFailMaxAttemptsFeedback();	
					$check.removeClass('visibility-hidden');
				}
				
			} else {

			attempts++;
				if(attempts >= maxAttempts){
					hideFailFeedback();
					addAnimation();
					showFailMaxAttemptsFeedback();
					scrollToFeedback();

					// Timeline Specific.
					if($timelineQuestion.length > 0){
						$timelineQuestion.hide();
					}
					
				} else {
					showFailFeedback();
					addAnimation();
					hideFailMaxAttemptsFeedback();
					scrollToFeedback();

					// Timeline Specific.
					if($timelineQuestion.length > 0){
						$timelineQuestion.hide();
					}
				}
			}
		}
	});

	// Reset.
	$reset.on('click', function(){
		hideFailFeedback();
		hideFailMaxAttemptsFeedback();
		removeAnimation();

		$check.removeClass('visibility-hidden');

		// Timeline Specific.
		if($timelineQuestion.length > 0){
			$timelineQuestion.show();
		}

	});

	// Try Again - Keeps correct answers if trying again.
	$tryAgain.on('click', function(){

		var pickedAnswer = _this.find('.select-selected');

		pickedAnswer.each(function(index, value){

			// Reset any wrong answers.
			if(answers.correct[index] != answers.user[index]){
				$(this).text("Select one");
			}
		});

		$check.removeClass('visibility-hidden');
		hideFailFeedback();
		hideFailMaxAttemptsFeedback();
		removeAnimation();

		// Timeline Specific.
		if($timelineQuestion.length > 0){
			$timelineQuestion.show();
		}

	});
});