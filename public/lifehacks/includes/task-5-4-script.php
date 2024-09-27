

<script>

$( "#whatTechOptions4 a" ).click(function() {

    $('#whatTechOptions4 li').removeClass('on');
    $('#whenUse4 .hidden-options').hide();
   
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='instagram4') {
        answer4_1 = true;   
    } else { answer4_1 = false; }
    answer4_1Text = dataText;
    
    $('#whenUse4').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated4 === true) { validate4(); }
    
});

$( ".when-use-options4 a" ).click(function() {
    
    if($(this).hasClass('btn-set')) {
    } else {
        $('.when-use-options4 li').removeClass('on');
    }
    
    dataValue = $(this).data('value');
    $(this).closest('li').addClass('on');    
    
    if(dataValue==='postPhotoHashtag') {
       answer4_2 = true; 
    } else { answer4_2 = false; }
    answer4_2Text = $(this).find('h3').text();
    
	if($(this).hasClass('has-hashtag')) {
		$('#hashtagHolder4').fadeIn();
	} else {
		$('#howUse4').addClass('visible'); 
	}
    
    if(validated4 === true) { validate4(); }
    
});

$( "#howUseOptions4 a" ).click(function() {
    
    $('#howUseOptions4 li').removeClass('on');
    $('#whatDo4 .hidden-options').hide();
    
    dataValue = $(this).data('value');
    dataText = $(this).data('text');
    $(this).closest('li').addClass('on');
    
    if(dataValue==='facebookUse4') {
        answer4_3 = true;        
    } else { answer4_3 = false; }
    answer4_3Text = dataText;
    $('#whatDo4').addClass('visible');
    $('#'+dataValue).fadeIn();
    
    if(validated4 === true) { validate4(); }
    
});

$( ".what-do-options4 a" ).click(function() {

    $('.what-do-options4 li').removeClass('on');  
    $(this).closest('li').addClass('on');
    
    dataValue = $(this).data('value');
    if(dataValue==='createLinkPost') {
        answer4_4 = true;        
    } else { answer4_4 = false; }  
   
    answer4_4Text = $(this).find('h3').text();
    
    $('#complete').addClass('visible'); 
	
	
	validate4();
	
	    

    
});

$( "#setHashTag4" ).click(function() {
	if($('#hashTag4').val().toLowerCase() === 'amazingparty' || $('#hashTag4').val().toLowerCase() === '#amazingparty' || $('#hashTag4').val().toLowerCase() === '#amazingparty!') {
		answer4_2 = true; 	
	} else {
		answer4_2 = false; 	
	}
    
    if(validated4 === true) { validate4(); }
	
});

var validated4 = false;

function validate4() {
    
    if(validated4 === false) { validated4 = true; };
    
	if($('#hashTag4').val().toLowerCase() === 'amazingparty' || $('#hashTag4').val().toLowerCase() === '#amazingparty' || $('#hashTag4').val().toLowerCase() === '#amazingparty!') {
		answer4_2 = true; 	
	} else {
		answer4_2 = false; 	
	}
    
    
    if(answer4_1===false || answer4_2===false || answer4_3===false || answer4_4===false) {
            $('#wrong_5_4').removeClass('hide');
     } else {
            $('#wrong_5_4').addClass('hide');
            window.location.href = "2456-success.php";            
     }
     
     console.log(answer4_1);
     console.log(answer4_2);
     console.log(answer4_3);
     console.log(answer4_4);
     console.log('Validate4');
       
}

</script>

