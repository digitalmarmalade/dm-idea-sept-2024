
$(".next-box").hide();

$( "li" ).click(function() {
     dataValue = $(this).data('value');
     if(dataValue==='incorrect-1') {
        $('.incorrect-1 .question').css('display','none');
        $('.incorrect-1 .answer').css('display','inline-flex');
     } else {
        $('.incorrect-1 .question').css('display','inline-flex');
        $('.incorrect-1 .answer').css('display','none');
     }
     if(dataValue==='incorrect-2') {
        $('.incorrect-2 .question').css('display','none');
        $('.incorrect-2 .answer').css('display','inline-flex');
     } else {
        $('.incorrect-2 .question').css('display','inline-flex');
        $('.incorrect-2 .answer').css('display','none');
     }
     if(dataValue==='incorrect-3') {
        $('.incorrect-3 .question').css('display','none');
        $('.incorrect-3 .answer').css('display','inline-flex');
     } else {
        $('.incorrect-3 .question').css('display','inline-flex');
        $('.incorrect-3 .answer').css('display','none');
     }
     if(dataValue==='correct') {
        $('.correct .question').css('display','none');
        $('.correct .answer').css('display','inline-flex');
        $('.next-box').slideDown();
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        oBadges.stepCompleted();
     } else {
        $('.correct .question').css('display','inline-flex');
        $('.correct .answer').css('display','none');

     }
 });
