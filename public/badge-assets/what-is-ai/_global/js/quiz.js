// selected = list--activity-answers__item;

$('.jsQuiz').each(function(){

	var _this = $(this),

		lives = 2,

		$lives =  _this.find('.jsLives'),

		$successFeedback = _this.find('.jsFeedbackSuccess'),

		scrollAnchor = _this.data('scroll-anchor'),

		answerClass = 'jsCorrect',

		numQuestions = _this.find('.jsQuestion').length,

		// Animations
		animateClasses = _this.find($('[class*="animate__"]')),

		fadeOutQuestionClass = 'animate__animated animate__fadeOutLeftBig',
		fadeInQuestionClass = 'animate__animated animate__fadeInRightBig',
		wrongAnswerClass = 'animate__animated animate__shakeX',

		$option = _this.find('.jsQuestion').find('.jsAnswer');


	function removeAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/animate__/g, 'xxx');
	    });
	}

	removeAnimation();

	function addAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/xxx/g, 'animate__');
	    });
	}

	function scrollToFeedback(){
		if(scrollAnchor != undefined){
			$("html, body").animate({
				//scrollTop: _this.position().top + 100
				scrollTop: $('.' + scrollAnchor).position().top
			}, 1000);
		}
	}

	function resetLives(){
		_this.find('.lost-life').removeClass('lost-life');
	}

	function resetQuestions(){
		_this.find('.active').removeClass('active');
	}

	function resetSelected(){
		_this.find('.selected').removeClass('selected');
	}

	function resetActiveClass(){
		_this.find('.jsQuestion:first-child').addClass('active');
		_this.find('.jsQuestion:not(:first-child)').addClass('hide');
	}

	function removeAnimationClasses(){

		_this.find('.jsQuestion').removeAttr('style');

		_this.find('.animate__fadeInRightBig').removeClass('animate__fadeInRightBig');
		_this.find('.animate__fadeOutLeftBig').removeClass('animate__fadeOutLeftBig');
		_this.find('.animate__animated').removeClass('animate__animated');
		_this.find('.animate__shakeX').removeClass('animate__shakeX');
	}

	$option.on('click', function(e){

		e.preventDefault();

		$(this).addClass('selected');
		
		var $questions = _this.find('.jsQuestions'),
		$question = $questions.find('.jsQuestion'),
		$currentQuestion = $questions.find('.active'),

		$currentQuestionIndex = $currentQuestion.index();

		// Correct Answer
		if($(this).hasClass(answerClass)){
			
			$currentQuestion.addClass(fadeOutQuestionClass);

			$currentQuestion.removeClass('active');

			$currentQuestion.css('position', 'absolute').fadeOut(250);

			$question.eq($currentQuestionIndex + 1).addClass(fadeInQuestionClass);

		 	$question.eq($currentQuestionIndex + 1).addClass('active').removeClass('hide');

		 	// We are finished!
		 	if(($currentQuestionIndex + 1) === numQuestions){
			 	setTimeout(function(){
			 	$successFeedback.removeClass('hide');
				 	addAnimation();
				 	scrollToFeedback();	
				 	//_this.find('.jsRemainingLives').addClass('hide');
				 }, 1000);
		 	}

		} else {

			_this.find('.animate__animated.animate__shakeX').removeClass('.animate__animated.animate__shakeX');
			_this.find('.animate__fadeInRightBig').removeClass('animate__fadeInRightBig');

			$currentQuestion.addClass(wrongAnswerClass);

			$livesLost = _this.find('.lost-life').length;
			$lives = _this.find('.jsLives').find('li:not(.lost-life):first');
			$lives.addClass('lost-life');

			// We're out of lives - RESTART!
			if($livesLost === lives){

				setTimeout(function(){
					removeAnimation();
					resetLives();
					resetQuestions();
					resetSelected();
					removeAnimationClasses();
					resetActiveClass();
				}, 1000);
			} 
		}
	});
});