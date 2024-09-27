

<script>

$( "#whatTechOptions2 a" ).click(function() {

    $('#whatTechOptions2 li').removeClass('on');
    $('#whenUse2 .hidden-options').hide();
   
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='instagram2') {
        answer2_1 = true;   
    } else { answer2_1 = false; }
    answer2_1Text = dataText;
    
    $('#whenUse2').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated2 === true) { validate2(); }
    
});

$( ".when-use-options2 a" ).click(function() {
    
    
    if($(this).hasClass('btn-set')) {
    } else {
        $('.when-use-options2 li').removeClass('on');
    }
    
        $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
        
    
    if(dataValue==='iPostPhotoHashtag') {
       answer2_2 = true; 
    } else { answer2_2 = false; }
    answer2_2Text = $(this).find('h3').text();
	
	if($(this).hasClass('has-hashtag')) {
		$('#hashtagHolder2').fadeIn();
	} else {
		$('#howUse2').addClass('visible'); 
	}
    
    if(validated2 === true) { validate2(); }
    
});

$( "#howUseOptions2 a" ).click(function() {
    
    $('#howUseOptions2 li').removeClass('on');
    $('#whatDo2 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='printerUse2') {
        answer2_3 = true;        
    } else { answer2_3 = false; }
    answer2_3Text = dataText;
    $('#whatDo2').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated2 === true) { validate2(); }
    
});

$( ".what-do-options2 a").click(function() {

    $('.what-do-options2 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='printPhoto') {
        answer2_4 = true;        
    } else { answer2_4 = false; }   
    
    
   
    answer2_4Text = $(this).find('h3').text();
    
    
	
	if(answer2_1===false) {
        $('#answer2_1Text').text(answer1Text).addClass('got-it-wrong');
    } else { 
        $('#answer2_1Answer').text('');
    }
    if(answer2_2===false) {
        $('#answer2_2Text').text(answer2Text).addClass('got-it-wrong');;  
    } else { 
        $('#answer2_2Answer').text('');
    }
    if(answer2_3===false) {
        $('#answer2_3Text').text(answer3Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer2_3Answer').text('');
    }
    if(answer2_4===false) {
        $('#answer2_4Text').text(answer4Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer2_4Answer').text('');
    }  
    
    validate2();    

    
});

$( "#setHashTag2" ).click(function() {
	if($('#hashTag2').val().toLowerCase() === 'amazingparty' || $('#hashTag2').val().toLowerCase() === '#amazingparty' || $('#hashTag2').val().toLowerCase() === '#amazingparty!') {
		answer2_2 = true; 	
	} else {
		answer2_2 = false; 	
	}
});

var validated2 = false;

function validate2() {
    
    if(validated2 === false) { validated2 = true; };
    if(answer2_1===false || answer2_2===false || answer2_3===false || answer2_4===false) {
            $('#wrong_5_2').removeClass('hide');
     } else {
            $('#wrong_5_2').addClass('hide');
            $('#whatTech3').addClass('visible'); 
            $('.task5-sentence-2').addClass('hide');
            $('.task5-sentence-3').removeClass('hide');
            $('#task5part3').addClass('show');
     }
     
     console.log(answer2_1);
     console.log(answer2_2);
     console.log(answer2_3);
     console.log(answer2_4);
     console.log('Validate2');
       
}

</script>

