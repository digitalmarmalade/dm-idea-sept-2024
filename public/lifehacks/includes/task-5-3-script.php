

<script>

$( "#whatTechOptions3 a" ).click(function() {

    $('#whatTechOptions3 li').removeClass('on');
    $('#whenUse3 .hidden-options').hide();
   
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='sms3') {
        answer3_1 = true;   
    } else { answer3_1 = false; }
    answer3_1Text = dataText;
    
    $('#whenUse3').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated3 === true) { validate3(); }
    
});

$( ".when-use-options3 a" ).click(function() {
    
    $('.when-use-options3 li').removeClass('on');
    
    dataValue = $(this).data('value');
    $(this).closest('li').addClass('on');    
    
    if(dataValue==='getTextLost') {
       answer3_2 = true; 
    } else { answer3_2 = false; }
    answer3_2Text = $(this).find('h3').text();
    $('#howUse3').addClass('visible');
    
    if(validated3 === true) { validate3(); }
    
});

$( "#howUseOptions3 a" ).click(function() {
    
    $('#howUseOptions3 li').removeClass('on');
    $('#whatDo3 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='phoneUse3') {
        answer3_3 = true;        
    } else { answer3_3 = false; }
    answer3_3Text = dataText;
    $('#whatDo3').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated3 === true) { validate3(); }
    
});

$( ".what-do-options3 a" ).click(function() {

    $('.what-do-options3 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='setRingtoneVolume') {
        answer3_4 = true;        
    } else { answer3_4 = false; }    
   
    answer3_4Text = $(this).find('h3').text();
    
    
	
	if(answer3_1===false) {
        $('#answer3_1Text').text(answer1Text).addClass('got-it-wrong');
    } else { 
        $('#answer3_1Answer').text('');
    }
    if(answer3_2===false) {
        $('#answer3_2Text').text(answer2Text).addClass('got-it-wrong');;  
    } else { 
        $('#answer3_2Answer').text('');
    }
    if(answer3_3===false) {
        $('#answer3_3Text').text(answer3Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer3_3Answer').text('');
    }
    if(answer3_4===false) {
        $('#answer3_4Text').text(answer4Text).addClass('got-it-wrong');;   
    } else { 
        $('#answer3_4Answer').text('');
    }   
    
     validate3();      

    
});


var validated3 = false;

function validate3() {
    
    if(validated3 === false) { validated3 = true; };
    if(answer3_1===false || answer3_2===false || answer3_3===false || answer3_4===false) {
            $('#wrong_5_3').removeClass('hide');
     } else {
            $('#wrong_5_3').addClass('hide');
            $('#whatTech4').addClass('visible'); 
            $('.task5-sentence-3').addClass('hide');
            $('.task5-sentence-4').removeClass('hide');
            $('#task5part4').addClass('show');
     }
     
     console.log(answer3_1);
     console.log(answer3_2);
     console.log(answer3_3);
     console.log(answer3_4);
     console.log('Validate3');
       
}

</script>