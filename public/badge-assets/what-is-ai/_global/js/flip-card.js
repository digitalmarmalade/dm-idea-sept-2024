// Activity - Select correct word from the dropdowns.

$('.jsFlipCard').each(function(){

	var _this = $(this),

		$answer = _this.find('.jsAnswer'),
		$check = _this.find('.jsCheck'),
	
		total = _this.find('.jsCardsList').find('.jsAnswer').length;

		$successFeedback = _this.find('.jsFeedbackSuccess'),

		animateClasses = _this.find($('[class*="animate__"]'));

	function scrollToFeedback(){
		$("html, body").animate({
		    //scrollTop: _this.position().top
			scrollTop: $('.jsScrollAnchor').position().top
		}, 1000);
	}

	function removeAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/animate__/g, 'xxx');
	    });
	}

	function addAnimation(){
	    animateClasses.attr('class', function(index, attr) {
	        return attr.replace(/xxx/g, 'animate__');
	    });
	}

	removeAnimation();

	function showSuccessFeedback(){
		$successFeedback.removeClass('hide');

		addAnimation();
		scrollToFeedback();
	}

	function addCompletionClass(){
		_this.addClass('jsCompleted')
	}

	var count = 0;

	var openedCards = [];

	// Pick answer
	$answer.on('click', function(){

		if(!$(this).hasClass('open')){

			if(count < 2){

				$(this).addClass('flipped open');

				var id = $(this).attr('data-id');
				openedCards.push(id);

				if(count === 1){

					// We matched
					if(openedCards[0] === openedCards[1]){

						_this.find('[data-id='+openedCards[0]+']').addClass('matched');
						_this.find('[data-id='+openedCards[1]+']').addClass('matched');

						var matched = _this.find('.jsCardsList').find('.matched').length;

						setTimeout(function(){
							count = 0;
							openedCards = [];
						}, 1500);

						if(matched === total){
							setTimeout(function(){
								showSuccessFeedback();
								addCompletionClass();
							}, 500);
						}

					} else {

						// No Match

						setTimeout(function(){
							_this.find('.flipped:not(.matched)').removeClass('flipped');
							_this.find('.open:not(.matched)').removeClass('open');

							count = 0;
							openedCards = [];
						}, 1500);
					}
				}
				count++;
			}
		}
	});
});