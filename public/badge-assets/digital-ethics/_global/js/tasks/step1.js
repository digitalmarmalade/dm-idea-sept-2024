var questionNum = 0;
function submitAnswer() {
	var ele = document.getElementsByName('options'+(questionNum+1));

	for(i = 0; i < ele.length; i++) {
		if(ele[i].checked) {
			//document.getElementById("result").innerHTML = "Gender: "+ele[i].value;
			$('#jsFeedbackSuccess' + (questionNum+1) + '-' +i).show();
			$('#jsFeedbackFail'+ (questionNum+1) + '-' +i).show();

		}else{
			$('#jsFeedbackFail'+ (questionNum+1) + '-' +i).hide();
		}
	}

	if ((questionNum+1) === 1) {
		if (ele[2].checked) {
			$('#option3').addClass('success');
		} else if (ele[0].checked) {
			$('#option1').addClass('fail');
		} else if (ele[1].checked) {
			$('#option2').addClass('fail');
		} else if (ele[3].checked) {
			$('#option4').addClass('fail');
		}
	}

	if ((questionNum+1) === 4) {
		if (ele[0].checked) {
			$('#option4-1').addClass('success');
		} else if (ele[1].checked) {
			$('#option4-2').addClass('fail');
		}
	}

	$('.submitButton').hide();
}

function submitAnswerQuestion2() {
	var i = 0;
	console.log('submitAnswerQuestion2');
	// var checkbox= document.querySelector('input[name="options2[]"]:checked');
	var chkbxElements = document.getElementsByClassName("options2");

	for (element of chkbxElements)
	{
		if (element.checked)
		{
			i++;
		}
	}
	console.log('i');
	console.log(i);

	if (i < 8 || i > 8) {
		$('#jsFeedbackFail1').show();
		addClassName(chkbxElements, 'fail',2);
	}
	if (i === 8) {
		if (chkbxElements[1].checked &&
			chkbxElements[2].checked &&
			chkbxElements[3].checked &&
			chkbxElements[4].checked &&
			chkbxElements[5].checked &&
			chkbxElements[6].checked &&
			chkbxElements[8].checked &&
			chkbxElements[9].checked) {
			$('#jsFeedbackSuccess2-2').show();

			addClassName(chkbxElements, 'success',2);

			$('#option3').addClass('success');
		} else {
			$('#jsFeedbackFail2').show();

			addClassName(chkbxElements, 'fail',2);
		}
	}
	$('.submitButton').hide();
}

function addClassName(chkbxElements, className, question) {
	// console.log('addClassName');
	// console.log('chkbxElements');
	// console.log('chkbxElements.length : ' + chkbxElements.length);
	// console.log('className : ' + className);

	if (question == 1)  {
		for (var c = 0; c < chkbxElements.length; c++) {
			if (chkbxElements[c].checked) {
				document.getElementById(chkbxElements[c].id).classList.add(className);
			}
			if (chkbxElements[c].checked) {
				document.getElementById(chkbxElements[c].id).classList.add('success');
			}
		}
	}
	if (question == 2)  {
		for (var c = 0; c < chkbxElements.length; c++) {
			if (chkbxElements[c].checked && (c == 0 || c == 7)) {
				document.getElementById(chkbxElements[c].id).classList.add(className);
				document.getElementById(chkbxElements[c].id).checked = false;
			}
			if (chkbxElements[c].checked && (c != 0 && c != 7)) {
				document.getElementById(chkbxElements[c].id).classList.add('success');
				document.getElementById(chkbxElements[c].id).checked = true;
			}
		}
	}
	if (question == 3)  {
		for (var c = 0; c < chkbxElements.length; c++) {
			if (chkbxElements[c].checked && (c == 1 || c == 2 || c == 4 || c == 7)) {
				document.getElementById(chkbxElements[c].id).classList.add(className);
				document.getElementById(chkbxElements[c].id).checked = false;
			}
			if (chkbxElements[c].checked && (c != 1 && c != 2 && c != 4 && c != 7)) {
				document.getElementById(chkbxElements[c].id).classList.add('success');
				document.getElementById(chkbxElements[c].id).checked = true;
			}
		}
	}
}

function submitAnswerQuestion3() {
	var i = 0;
	console.log('submitAnswerQuestio3');
	var chkbxElements = document.getElementsByClassName("options3");

	for (element of chkbxElements)
	{
		if (element.checked)
		{
			i++;
		}
	}
	console.log('i');
	console.log(i);

	if (i < 4 || i > 4) {
		$('#jsFeedbackFail3-2').show();
		addClassName(chkbxElements, 'fail',3);
	}
	if (i === 4) {
		if (chkbxElements[0].checked &&
			chkbxElements[3].checked &&
			chkbxElements[5].checked &&
			chkbxElements[6].checked )
		{
			console.log('success');
			$('#jsFeedbackSuccess3-1').show();
			addClassName(chkbxElements, 'success',3);
		} else {
			$('#jsFeedbackFail3-1').show();
			addClassName(chkbxElements, 'fail',3);
		}
	}
	$('.submitButton').hide();
}

function submitAnswerQuestion5() {
	console.log('submitAnswerQuestion5');
	var i = 0;
	var chkbxElements = document.getElementsByClassName("options5");

	for (element of chkbxElements) {
		if (element.checked) {
			i++;
		}
	}

	if (i === 1 && chkbxElements[1].checked) {
		console.log('2');
		$('#jsFeedbackFail5-1').show();

		$('#option5-2').addClass('fail');
	} else if ( i < 3 || i > 3) {
		console.log('1');
		$('#jsFeedbackFail5-2').show();

		for (var c = 0; c < chkbxElements.length; c++) {
			if (chkbxElements[c].checked) {
				document.getElementById(chkbxElements[c].id).classList.add('fail');
			}
		}

	} else if (i === 3) {
		console.log('3');
		if (chkbxElements[1].checked) {
			console.log('4');
			$('#jsFeedbackFail5-2').show();

			for (var w = 0; w < chkbxElements.length; w++) {
				if (chkbxElements[w].checked) {
					console.log('5');
					document.getElementById(chkbxElements[w].id).classList.add('fail');
				}
			}
		}
		if (chkbxElements[0].checked &&
			chkbxElements[2].checked &&
			chkbxElements[3].checked &&
			i === 3)
		{
			console.log('6');
			console.log('success');
			$('#jsFeedbackSuccess5-1').show();

			$('#option5-1').addClass('success');
			$('#option5-3').addClass('success');
			$('#option5-4').addClass('success');
		}
	}
	$(".options5").prop("checked", false);
	$('.submitButton').hide();
}

function tryAgainQuestion1() {
	$('#jsFeedbackFail1-0').hide();
	$('#jsFeedbackFail1-1').hide();
	$('#jsFeedbackFail1-3').hide();
	//
	// var ele = document.getElementsByName("Choose");
	// for(var i=0;i<ele.length;i++)
	// 	ele[i].checked = false;

	$('input[name=options1]').prop('checked',false);
	$('.submitButton').show();

	$('input[name=options1]').removeClass('fail');
}

function tryAgainQuestion2() {
	$('#jsFeedbackFail1').hide();
	$('#jsFeedbackFail2').hide();
	//$(".options2").prop("checked", false);
	$('.submitButton').show();

	$('.options2').removeClass('fail');
}

function tryAgainQuestion3() {
	$('#jsFeedbackFail3-1').hide();
	$('#jsFeedbackFail3-2').hide();
	//$(".options3").prop("checked", false);
	$('.submitButton').show();

	$('.options3').removeClass('fail');
}

function tryAgainQuestion4() {
	$('#jsFeedbackFail4-1').hide();
	$('input[name=options4]').prop('checked',false);
	$('.submitButton').show();

	$('.options4').removeClass('fail');
}

function tryAgainQuestion5() {
	$('#jsFeedbackFail5-1').hide();
	$('#jsFeedbackFail5-2').hide();

	$(".options5").prop("checked", false);
	$('.submitButton').show();

	$('.options5').removeClass('fail');
}

function continueToNextQuestion() {
	console.log('continueToNextQuestion');

	$('.submitButton').show();
	var question1 = document.getElementById('question' + (questionNum+1)),
		question2 = document.getElementById('question' + (questionNum+2))
	;
	console.log(question1);
	console.log(question2);

	if(!question1) return;

	if (getComputedStyle(question1).display === 'flex') {
		question1.style.display = 'none';
		question2.style.display = 'flex';

		questionNum++;
	} else {
		question1.style.display = 'flex';
		question2.style.display = 'none';
	}

	console.log(questionNum);

	for (var i = 0; i < 5; i++) {
		if ( questionNum === i) {
			$('.dot-' + (questionNum)).addClass('completed').removeClass('active');
			$('.dot-' + (questionNum+1)).addClass('active');
		}
	}

	scrollToTask(document.getElementById('sectionTask'));

	/*
	var sentences = [
		'<p>test</p>',
		<p>test2</p>,
		'third',
		'fourth'
	];
	var senNum = 0;
	var sen = document.getElementById('sen');

	sen.innerText = sentences[senNum++]; // set initial sentence
	sen.innerText = sentences[senNum++ % sentences.length];*/
}

function tryAgain() {
	var ele = document.getElementsByName('options');

	for(i = 0; i < ele.length; i++) {
		if(ele[i].checked) {
			$('#jsFeedbackFail'+ (questionNum+1) + '-' +i).hide();
			ele[i].checked = false;
		}
	}
	$('.submitButton').show();
}

var paraNum = 1;
function nextParagraph() {
	$('#para' + (paraNum+1)).show();

	if (paraNum === 3) {
		$('#continueNextTask').show();
		$('#nextParagraph').hide();
	}
	paraNum++;
}

function continueToFinalTask1() {
	$('#continueNextTask').hide();
	$('#finalStatement').show();
}

function continueToTask() {
	$('#continueToTask').hide();
	$('.task').show();
	scrollToTask(document.getElementById('sectionTask'));
}

function scrollToTask (target) {
	var scrollContainer = target;
	do { //find scroll container
		scrollContainer = scrollContainer.parentNode;
		if (!scrollContainer) return;
		scrollContainer.scrollTop += 1;
	} while (scrollContainer.scrollTop == 0);

	var targetY = 0;
	do { //find the top of target relatively to the container
		if (target == scrollContainer) break;
		targetY += target.offsetTop;
	} while (target = target.offsetParent);

	scroll = function(c, a, b, i) {
		i++; if (i > 30) return;
		c.scrollTop = a + (b - a) / 30 * i;
		setTimeout(function(){ scroll(c, a, b, i); }, 20);
	}
	// start scrolling
	scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}