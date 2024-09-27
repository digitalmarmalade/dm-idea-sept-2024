

    $( ".btn-check" ).click(function() {
        var r1 = $('#task-1-1 option:selected').val(),
            r2 = $('#task-1-2 option:selected').val(),
            r3 = $('#task-1-3 option:selected').val(),
            r4 = $('#task-1-4 option:selected').val(),
            r5 = $('#task-1-5 option:selected').val(),
            r6 = $('#task-1-6 option:selected').val(),
            r7 = $('#task-1-7 option:selected').val(),
            r8 = $('#task-1-8 option:selected').val();
            r9 = $('#task-1-9 option:selected').val();
        if(r1 == 1) {
            r1 = true;
        } else {
            r1 = false;
        }

        if(r2 == 1) {
            r2 = true;
        } else {
            r2 = false;
        }

        if(r3 == 3) {
            r3 = true;
        } else {
            r3 = false;
        }

        if(r4 == 2) {
            r4 = true;
        } else {
            r4 = false;
        }

        if(r5 == 3) {
            r5 = true;
        } else {
            r5 = false;
        }

        if(r6 == 1) {
            r6 = true;
        } else {
            r6 = false;
        }

        if(r7 == 1) {
            r7 = true;
        } else {
            r7 = false;
        }

        if(r8 == 1) {
            r8 = true;
        } else {
            r8 = false;
        }

        if(r9 == 2) {
            r9 = true;
        } else {
            r9 = false;
        }

        if(r1 == true && r2 == true && r3 == true && r4 == true && r5 == true && r6 == true && r7 == true && r8 == true && r9 == true) {
          $('.feedback-success').slideDown();
          $("html, body").animate({scrollTop: $(document).height()});
          $('.btn-check').fadeOut();
        }

        else {
          $('.feedback-fail').slideDown();
          $('.btn-check').fadeOut();
          $("html, body").animate({scrollTop: $(document).height()});
          $( ".btn-try-again" ).click(function() {
            $("option:selected").removeAttr("selected");
            $('.feedback-fail').slideUp();
            $('.btn-check').fadeIn();
          });
        }
    });
