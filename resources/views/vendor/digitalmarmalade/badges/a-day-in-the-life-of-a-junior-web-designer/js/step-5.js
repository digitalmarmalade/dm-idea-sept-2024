/*globals $, showOverlay*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadSs();
    
    function getInternetExplorerVersion()
{
  var rv = -1;
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  else if (navigator.appName == 'Netscape')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  return rv;
}

    $('#range1').on('mousemove keyup', function () {

        var value = $(this).val(),
            gridCols = value;

        $('#slider-num-id1').text(value);
        $('#grid-slider-1').removeClass().addClass('grid-col-demo').addClass('col-' + gridCols);

        $('#revealSection1').addClass('visible');
    });

    $('#range1').on('change', function () {
        var value = $(this).val(),
            gridCols = value;

        $('#slider-num-id1').text(value);
        $('#grid-slider-1').removeClass().addClass('grid-col-demo').addClass('col-' + gridCols);

        $('#revealSection1').addClass('visible');
        
        if(getInternetExplorerVersion() !== 11) {
        $('#clickTrigger').trigger('click');   
    }
        
        
    });

    $('#previewButton1').click(function () {

        var iframeContent = $('#setColTask').val();
        $('#theColiFrame').contents().find('body').html('<div class="holder">' + iframeContent + '</div>');

        var submittedCode = $('#setColTask').val(),
            hashOfMinifiedCode = oBadges.getHashOfMinifiedCode(submittedCode),
            hashOfAnswer = '81fca52f4bf17973a3e4fb787c8718c4';

        if (hashOfMinifiedCode == hashOfAnswer) {
            $('#error1').removeClass('visible');
            showOverlay($(this).data('href'));
            $('#revealSection2').addClass('visible');
        } else {
            $('#error1').addClass('visible');
            setTimeout(function(){
                $('#errorTrigger1').click();
            }, 100);

        }

    });

    $('#range2').on('mousemove keyup', function () {

        var value = $(this).val(),
            offset = value;

        $('#slider-num-id2').text(value);
        $('#grid-slider-2').removeClass().addClass('grid-col-demo col-8').addClass('offset-' + offset);
        $('#grid-slider-3').removeClass().addClass('grid-offset-demo').addClass('col-' + offset);

    });

    $('#range2').on('change', function () {

        var value = $(this).val(),
            offset = value;

        $('#slider-num-id2').text(value);
        $('#grid-slider-2').removeClass().addClass('grid-col-demo col-8').addClass('offset-' + offset);
        $('#grid-slider-3').removeClass().addClass('grid-offset-demo').addClass('col-' + offset);

        $('#clickTrigger2').trigger('click');

    });

    $('#range2').on('mouseup keyup', function () {
        if ($(this).val() == 2) {
            $('.lets-move-on').addClass('visible');
            $('#error2').removeClass('visible');
        } else {
            $('#error2').addClass('visible');
        }

    });

}());