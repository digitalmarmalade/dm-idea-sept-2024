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
		} else {
			$('#jsFeedbackFail2').show();
		}
	}
	$('.submitButton').hide();
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
	}
	if (i === 4) {
		if (chkbxElements[0].checked &&
			chkbxElements[3].checked &&
			chkbxElements[5].checked &&
			chkbxElements[6].checked )
		{
			console.log('success');
			$('#jsFeedbackSuccess3-1').show();
		} else {
			$('#jsFeedbackFail3-1').show();
		}
	}
	$('.submitButton').hide();
}

function submitAnswerQuestion5() {
	var i = 0;
	console.log('submitAnswerQuestion5');
	var chkbxElements = document.getElementsByClassName("options5");

	for (element of chkbxElements)
	{
		if (element.checked)
		{
			i++;
		}
	}
	console.log('i');
	console.log(i);

	if ((i < 3 || i > 3) && (!chkbxElements[1].checked)) {
		$('#jsFeedbackFail5-2').show();
	} else if (chkbxElements[1].checked) {
		$('#jsFeedbackFail5-1').show();
	}
	if (i === 3) {
		if (chkbxElements[0].checked &&
			chkbxElements[2].checked &&
			chkbxElements[3].checked )
		{
			console.log('success');
			$('#jsFeedbackSuccess5-1').show();
		}
		// else {
		// 	$('#jsFeedbackFail5-1').show();
		// }
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
}

function tryAgainQuestion2() {
	$('#jsFeedbackFail1').hide();
	$('#jsFeedbackFail2').hide();
	$(".options2").prop("checked", false);
	$('.submitButton').show();
}

function tryAgainQuestion3() {
	$('#jsFeedbackFail3-1').hide();
	$('#jsFeedbackFail3-2').hide();
	$(".options3").prop("checked", false);
	$('.submitButton').show();
}

function tryAgainQuestion4() {
	$('#jsFeedbackFail4-1').hide();
	$('input[name=options4]').prop('checked',false);
	$('.submitButton').show();
}

function tryAgainQuestion5() {
	$('#jsFeedbackFail5-1').hide();
	$('#jsFeedbackFail5-2').hide();

	$(".options5").prop("checked", false);
	$('.submitButton').show();
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

	if (getComputedStyle(question1).display === 'block') {
		question1.style.display = 'none';
		question2.style.display = 'block';

		questionNum++;
	} else {
		question1.style.display = 'block';
		question2.style.display = 'none';
	}

	console.log(questionNum);

	for (var i = 0; i < 5; i++) {
		if ( questionNum === i) {
			$('.dot-' + (questionNum)).addClass('completed').removeClass('active');
			$('.dot-' + (questionNum+1)).addClass('active');
		}
	}

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