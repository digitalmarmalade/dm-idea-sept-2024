

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
    
});

$( ".when-use-options1 a" ).click(function() {
    
    $('.when-use-options1 li').removeClass('on');
    
    dataValue = $(this).data('value');
    $(this).closest('li').addClass('on');    
    
    if(dataValue==='arriveSchool') {
       answer2 = true; 
    } else { answer2 = false; }
    answer2Text = $(this).find('h3').text();
    $('#howUse1').addClass('visible');
    
});

$( "#howUseOptions1 a" ).click(function() {
    
    $('#howUseOptions1 li').removeClass('on');
    $('#whatDo1 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='phoneUse') {
        answer3 = true;        
    } else { answer3 = false; }
    answer3Text = dataText;
    $('#whatDo1').addClass('visible');
    $('#'+dataValue).fadeIn();
    
});

$( ".what-do-options1 a" ).click(function() {

    $('.what-do-options1 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='mutePhone') {
        answer4 = true;        
    } else { answer4 = false; }   
   
    answer4Text = $(this).find('h3').text();
    
    $('#whatTech2').addClass('visible'); 
	
	
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

    
});

</script>

