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

    $(function () {

        var rightAnswers = 0;
        
        if(getInternetExplorerVersion() === 11) {
                $('#answer_4_1, #answer_4_2, #answer_4_3, #answer_4_4').draggable({
                    revert: 'invalid',
                    appendTo: 'body',
                    containment: 'window',
                    scroll: false,
                    helper: 'clone',
                    drag: function (event, ui) {
                        $('body').addClass('dragging');
                    },
                    stop: function (event, ui) {
                        $('body').removeClass('dragging');
                    }
                }); 
            } else {
                $('#answer_4_1, #answer_4_2, #answer_4_3, #answer_4_4').draggable({
                    revert: 'invalid',
                    drag: function (event, ui) {
                        $('body').addClass('dragging');
                    },
                    stop: function (event, ui) {
                        $('body').removeClass('dragging');
                    }
                });
            }

        $('#droppable1').droppable({
            accept: '#answer_4_3',
            drop: function (event, ui) {
                var currentDraggable =     $(ui.draggable).attr('id');
                var currentText =     $(ui.draggable).text();
                $(this).addClass('dropped');
                $(this).find('p.class-name').append(currentText);
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 4) {
                    $('#clickTrigger').trigger('click');
                    $('#nextStep').addClass('visible');
                }
            }
        });

        $('#droppable2').droppable({
            accept: '#answer_4_4',
            drop: function (event, ui) {
                var currentDraggable =     $(ui.draggable).attr('id');
                var currentText =     $(ui.draggable).text();
                $(this).addClass('dropped');
                $(this).find('p.class-name').append(currentText);
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 4) {
                    $('#clickTrigger').trigger('click');
                    $('#nextStep').addClass('visible');
                }
            }
        });

        $('#droppable3').droppable({
            accept: '#answer_4_1',
            drop: function (event, ui) {
                var currentDraggable =     $(ui.draggable).attr('id');
                var currentText =     $(ui.draggable).text();
                $(this).addClass('dropped');
                $(this).find('p.class-name').append(currentText);
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 4) {
                    $('#clickTrigger').trigger('click');
                    $('#nextStep').addClass('visible');
                }
            }
        });

        $('#droppable4').droppable({
            accept: '#answer_4_2',
            drop: function (event, ui) {
                var currentDraggable =     $(ui.draggable).attr('id');
                var currentText =     $(ui.draggable).text();
                $(this).addClass('dropped');
                $(this).find('p.class-name').append(currentText);
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 4) {
                    $('#clickTrigger').trigger('click');
                    $('#nextStep').addClass('visible');
                }
            }
        });

    });

    $('#previewButton1').click(function () {
        $('.reveal-section-1').addClass('visible');
    });

    $('#previewButton2').click(function () {

        var submittedCode = $('#bannerInput').val(),
            hashOfMinifiedCode = oBadges.getHashOfMinifiedCode(submittedCode),
            hashOfAnswer = '1047d5a5b57a5d830d476c7247154f7d';

        if (hashOfMinifiedCode == hashOfAnswer) {
            $('#error3').removeClass('visible');
            showOverlay($(this).data('href'));
            $('.lets-move-on').addClass('visible');
            console.log('YETHHHH!');
        } else {
            $('#error3').addClass('visible');
            console.log('NOOOOOO!');
        }
    });

}());