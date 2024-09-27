

<script>


$( "#howUseOptions3 a" ).click(function() {
    
    $('#howUseOptions3 li').removeClass('on');
    $('#whatDo3 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='remindersUse3') {
        answer3_3 = true;        
    } else { answer3_3 = false; }
    answer3_3Text = dataText;
    $('#whatDo3').addClass('visible');
    $('#'+dataValue).fadeIn();
    
});

$( ".what-do-options3 a" ).click(function() {

    $('.what-do-options3 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='setReminder') {
        answer3_4 = true;        
    } else { answer3_4 = false; }
   
    answer3_4Text = $(this).find('h3').text();
    
    $('#complete').addClass('visible');
	
    if(answer3_3===false) {
        $('#answer3_3Text').text(answer3_3Text).addClass('got-it-wrong');  
    } else { 
        $('#answer3_3Answer').text(answer3_3Text_default).removeClass('got-it-wrong');
    }
    if(answer3_4===false) {
        $('#answer3_4Text').text(answer3_4Text).addClass('got-it-wrong');  
    } else { 
        $('#answer3_4Answer').text(answer3_4Text_default).removeClass('got-it-wrong');
    }  
	
	
	
	
	if(answer1===true && answer2===true && answer3===true && answer4===true) {
       $('.first-part-complete').addClass('visible'); 
       $('#taskPart1').addClass('disabled');
    } else {
        $('.first-part-incomplete').addClass('visible');
    }
	
	if(answer2_1===true && answer2_2===true && answer2_3===true && answer2_4===true && answer3_3===true && answer3_4===true) {
       $('.second-part-complete').addClass('visible'); 
       $('#taskPart2').addClass('disabled');
    } else {
        $('.second-part-incomplete').addClass('visible');
    }
    
    
	
	       

    
});

$( ".check-results" ).click(function() {
    
    $('.first-part-complete,.first-part-incomplete').removeClass('visible');
    $('.second-part-complete,.second-part-incomplete').removeClass('visible');
    
    if(answer1===false) {
        $('#answer1Text').text(answer1Text).addClass('got-it-wrong');
    } else { 
        $('#answer1Answer').text(answer1Text_default).removeClass('got-it-wrong');
    }
    if(answer2===false) {
        $('#answer2Text').text(answer2Text).addClass('got-it-wrong'); 
    } else { 
        $('#answer2Answer').text(answer2Text_default).removeClass('got-it-wrong');
    }
    if(answer3===false) {
        $('#answer3Text').text(answer3Text).addClass('got-it-wrong');  
    } else { 
        $('#answer3Answer').text(answer3Text_default).removeClass('got-it-wrong');
    }
    if(answer4===false) {
        $('#answer4Text').text(answer4Text).addClass('got-it-wrong');  
    } else { 
        $('#answer4Answer').text(answer4Text_default).removeClass('got-it-wrong');
    } 
    
    if(answer2_1===false) {
        $('#answer2_1Text').text(answer2_1Text).addClass('got-it-wrong');
    } else { 
        $('#answer2_1Answer').text(answer2_1Text_default).removeClass('got-it-wrong');
    }
    if(answer2_2===false) {
        $('#answer2_2Text').text(answer2_2Text).addClass('got-it-wrong'); 
    } else { 
        $('#answer2_2Answer').text(answer2_2Text_default).removeClass('got-it-wrong');
    }
    if(answer2_3===false) {
        $('#answer2_3Text').text(answer2_3Text).addClass('got-it-wrong'); 
    } else { 
        $('#answer2_3Answer').text(answer2_3Text_default).removeClass('got-it-wrong');
    }
    if(answer2_4===false) {
        $('#answer2_4Text').text(answer2_4Text).addClass('got-it-wrong');  
    } else { 
        $('#answer2_4Answer').text(answer2_4Text_default).removeClass('got-it-wrong');
    }  
    
    if(answer3_3===false) {
        $('#answer3_3Text').text(answer3_3Text).addClass('got-it-wrong');  
    } else { 
        $('#answer3_3Answer').text(answer3_3Text_default).removeClass('got-it-wrong');
    }
    if(answer3_4===false) {
        $('#answer3_4Text').text(answer3_4Text).addClass('got-it-wrong');  
    } else { 
        $('#answer3_4Answer').text(answer3_4Text_default).removeClass('got-it-wrong');
    }  
    
    if(answer1===true && answer2===true && answer3===true && answer4===true) {
       $('.first-part-complete').addClass('visible'); 
       $('#taskPart1').addClass('disabled');
    } else {
        $('.first-part-incomplete').addClass('visible');
    }
	
	if(answer2_1===true && answer2_2===true && answer2_3===true && answer2_4===true && answer3_3===true && answer3_4===true) {
       $('.second-part-complete').addClass('visible');
       $('#taskPart2').addClass('disabled'); 
    } else {
        $('.second-part-incomplete').addClass('visible');
    }
});


</script>

