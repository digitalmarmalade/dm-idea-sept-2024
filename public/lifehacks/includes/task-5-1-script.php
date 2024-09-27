

<script>

$( "#whatTechOptions1 a" ).click(function() {

    $('#whatTechOptions1 li').removeClass('on');
    $('#whenUse1 .hidden-options').hide();
   
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='location') {
        answer1 = true;   
    } else { answer1 = false; }
    answer1Text = dataText;
    
    $('#whenUse1').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    
    if(validated1 === true) { validate1(); }
    
});

$( ".when-use-options1 a" ).click(function() {
    
    $('.when-use-options2 li').removeClass('on');
    
    dataValue = $(this).data('value');
    $(this).closest('li').addClass('on');    
    
    if(dataValue==='leaveSchool') {
       answer2 = true; 
    } else { answer2 = false; }
    answer2Text = $(this).find('h3').text();
    $('#howUse1').addClass('visible');
    
    if(validated1 === true) { validate1(); }
    
});

$( "#howUseOptions1 a" ).click(function() {
    
    $('#howUseOptions1 li').removeClass('on');
    $('#whatDo1 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='smsUse') {
        answer3 = true;        
    } else { answer3 = false; }
	
	
    answer3Text = dataText;
    $('#whatDo1').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated1 === true) { validate1(); }
    
});

$( ".what-do-options1 a" ).click(function() {

    $('.what-do-options1 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='textParents') {
        answer4 = true;
       
    } else { answer4 = false; }    
   
    answer4Text = $(this).find('h3').text();
    
    
	
	if($(this).hasClass('sms-link')) {
		$('#taskSMS').fadeIn();
		$('#smsPart1').text($(this).data('part1'));
		$('#smsPart2').text($(this).data('part2'));
        if(validated1 === true) { validate1(); }
	} else {
		$('#wrong_5_1').removeClass('hide');
	}
	
	
	if(answer1===false) {
        $('#answer1Text').text(answer1Text).addClass('got-it-wrong');
    } else { 
        $('#answer1Answer').text('');
    }
    if(answer2===false) {
        $('#answer2Text').text(answer2Text).addClass('got-it-wrong');;  
    } else { 
        $('#answer2Answer').text('');
    }
    if(answer3===false) {
        $('#answer3Text').text(answer3Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer3Answer').text('');
    }
    if(answer4===false) {
        $('#answer4Text').text(answer4Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer4Answer').text('');
    } 
    
   

    
});






$(function() {
    
    $("#draggableCurrentLocation2" ).draggable({
        appendTo: "body",
        helper: "clone",
        revert: "invalid",
		drag: function(event, ui) {
			$('body').addClass('dragging');
		},
		stop: function(event, ui) {
			$('body').removeClass('dragging');
		}
	
    });
    $("#draggableMissedCall2" ).draggable({
        appendTo: "body",
        helper: "clone",
        revert: "invalid",
		drag: function(event, ui) {
			$('body').addClass('dragging');
		},
		stop: function(event, ui) {
			$('body').removeClass('dragging');
		}
    });
    $("#draggableOccurredAt2" ).draggable({
        appendTo: "body",
        helper: "clone",
        revert: "invalid",
		drag: function(event, ui) {
			$('body').addClass('dragging');
		},
		stop: function(event, ui) {
			$('body').removeClass('dragging');
		}
    });
    $("#draggableCurrentLocationImg2" ).draggable({
        appendTo: "body",
        helper: "clone",
        revert: "invalid",
		drag: function(event, ui) {
			$('body').addClass('dragging');
		},
		stop: function(event, ui) {
			$('body').removeClass('dragging');
		}
    });

    $("#droppable5" ).droppable({
        accept: "#draggableMissedCall2,#draggableCurrentLocationImg2,#draggableCurrentLocation2,#draggableOccurredAt2",
		drop: function(event, ui) {
			$( this ).text( ui.draggable.text() ).appendTo( this );
			var currentDraggable = 	$(ui.draggable).attr('id');
            if(currentDraggable == 'draggableOccurredAt2') {
                answer4 = true;   
                answer4Text = '';
                
                validate1(); 
                                
                
            } else { 
                answer4 = false;
                answer4Text = 'You selected the wrong variable';
                validate1();
            }
            
		}
    });
});

var validated1 = false;

function validate1() {
    
    if(validated1 === false) { validated1 = true; };
    if(answer1===false || answer2===false || answer3===false || answer4===false) {
            $('#wrong_5_1').removeClass('hide');
     } else {
            $('#wrong_5_1').addClass('hide');
            $( "#validateTrigger" ).trigger( "click" );  
            $('#whatTech2').addClass('visible'); 
            $('#task5part2').addClass('show');
            
            $('.task5-sentence-1').addClass('hide');
            $('.task5-sentence-2').removeClass('hide');
     }
     
     console.log(answer1);
     console.log(answer2);
     console.log(answer3);
     console.log(answer4);
     console.log('Validate');
       
}


</script>

