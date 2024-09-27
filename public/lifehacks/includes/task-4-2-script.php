

<script>

$( "#whatTechOptions2 a" ).click(function() {

    $('#whatTechOptions2 li').removeClass('on');
    $('#whenUse2 .hidden-options').hide();
   
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='device2') {
        answer2_1 = true;   
    } else { answer2_1 = false; }
    answer2_1Text = dataText;
    
    $('#whenUse2').addClass('visible');
    $('#'+dataValue).fadeIn();
    
});

$( ".when-use-options2 a" ).click(function() {
    
    $('.when-use-options2 li').removeClass('on');
    
    dataValue = $(this).data('value');
    $(this).closest('li').addClass('on');    
    
    if(dataValue==='missCall') {
       answer2_2 = true; 
    } else { answer2_2 = false; }
    answer2_2Text = $(this).find('h3').text();
    $('#howUse2').addClass('visible');
    
});

$( "#howUseOptions2 a" ).click(function() {
    
    $('#howUseOptions2 li').removeClass('on');
    $('#whatDo2 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='smsUse2') {
        answer2_3 = true;        
    } else { answer2_3 = false; }
    answer2_3Text = dataText;
    $('#whatDo2').addClass('visible');
    $('#'+dataValue).fadeIn();
    
});

$( ".what-do-options2 a" ).click(function() {

    $('.what-do-options2 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='textCaller') {
        answer2_4 = true;        
    } else { answer2_4 = false; }   
   
    answer2_4Text = $(this).find('h3').text();
    
    $('#howUse3').addClass('visible'); 
	
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

    
});

</script>

