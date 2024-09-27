$(document).ready(function(){
	$('.jsSortableWords').each(function(){

  		var _this = $(this),
  			$sorts = _this.find('.jsSortableWord'),
  			$check = _this.find('.jsCheckSortedWords'),
			$successFeedback = _this.find('.jsFeedbackSuccess'),
			animateClasses = _this.find($('[class*="animate__"]')),
			scrollAnchor = _this.data('scroll-anchor'),
			targetWord = _this.find('.word-shuffle').data('target-word');

		function showSuccessFeedback(){
			$successFeedback.removeClass('hide');

			addAnimation();
			scrollToFeedback();
		}

		function addAnimation(){
		    animateClasses.attr('class', function(index, attr) {
		        return attr.replace(/xxx__/g, 'animate__');
		    });
		}

		function scrollToFeedback(){
			if(scrollAnchor != undefined){
				$("html, body").animate({
					scrollTop: $('.' + scrollAnchor).position().top
				}, 1000);
			}
		}

		dragula([document.querySelector('#left'), document.querySelector('#right')], {
		  isContainer: function (el) {
		    return false; // only elements in drake.containers will be taken into account
		  },
		  moves: function (el, source, handle, sibling) {
		    return true; // elements are always draggable by default
		  },
		  accepts: function (el, target, source, sibling) {
		    return true; // elements can be dropped in any of the `containers` by default
		  },
		  invalid: function (el, handle) {
		    return false; // don't prevent any drags from initiating by default
		  },
		  direction: 'horizontal',	// Y axis is considered when determining where an element would be dropped
		  copy: false,	// elements are moved by default, not copied
		  copySortSource: false,	// elements in copy-source containers can be reordered
		  revertOnSpill: false,	// spilling will put the element back where it was dragged from, if this is true
		  removeOnSpill: false,	// spilling will `.remove` the element, if this is true
		  mirrorContainer: document.body,	// set the element that gets mirror elements appended
		  ignoreInputTextSelection: true,	// allows users to select input text, see details below
		  slideFactorX: 0,	// allows users to select the amount of movement on the X axis before it is considered a drag instead of a click
		  slideFactorY: 0,	// allows users to select the amount of movement on the Y axis before it is considered a drag instead of a click
		}).on('drag', function (el) {
		    el.className = el.className.replace('ex-moved', '');
		    //console.log('drag');
		}).on('drop', function (el) {
			el.className += ' ex-moved';
			//console.log('drop');
		}).on('over', function (el, container) {
			container.className += ' ex-over';
			//console.log('over');
		}).on('out', function (el, container) {
			container.className = container.className.replace('ex-over', '');
			//console.log('out');
		});


	    var $sorts = $('.jsSortableWord');

	    $check.on('click', function(e){

	    	e.preventDefault();

	    	var answer = '';
			$sorts.each(function(){
				answer += $(this).find('li').text();
			});

			var answerArray = answer.toLowerCase().split("");
			var targetWordArray = targetWord.toLowerCase().split("");

			// Reset correct letters.
			_this.find('.word-shuffle li').removeClass('correct');
			_this.find('.letter:not(.blank)').find('.active').removeClass('active');

			// Highlight correct letters.
			for(var i = 0; i < answerArray.length; i++){
				if(answerArray[i] === targetWordArray[i]){
					_this.find('.letter:not(.blank)').eq(i).find('.letter-reveal').addClass('active');
					_this.find('.word-shuffle li').eq(i).addClass('correct');
				}
			}

			// Word correct
			if(targetWord === answer.toLowerCase()){
				_this.addClass('show');
				$check.addClass('visibility-hidden');
				showSuccessFeedback();
			} 
	    });
	});
});