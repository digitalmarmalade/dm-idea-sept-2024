/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadLs();

    if (oBadges.ls.data === undefined) {
        oBadges.ls.data = oBadges.getDefaultObject();
        oBadges.saveLs();
    }

    if (oBadges.ls.data.grid.labels[1] === '') {
        window.location = oBadges.prevUrl;
    }

    oBadges.populateInputFieldsUsingObjectData(oBadges.ls.data, {warnMissingItems: false});

    for (var level = 0; level < oBadges.ls.data.levels.length; level++) {
        for(var i = 0; i < oBadges.ls.data.levels[level].categories.length; i++) {
            var cat = oBadges.ls.data.levels[level].categories[i],
                elId = 'level'+level+'usecat'+cat;
            $('#'+elId).prop('checked', true);
        }
    }

    for(var x = 0; x < oBadges.ls.data.grid.labels.length; x++) {
        $('.jsCategoryName' + x).html(oBadges.categories[oBadges.ls.data.grid.labels[x]]);
    }


    $('.jsLevelCatSelector').click(function(){
        var el = $(this),
            elId = el.attr('id'),
            levelId = elId.substr(5,1),
            newArrayOfCats = [];

        for(var f = 1; f <= 3; f++) {
            if ($('#level' +levelId + 'usecat' + f).prop('checked')) {
                newArrayOfCats.push(f);
            }          
        }
        $('#level-'+levelId+'-cats').val(newArrayOfCats.join(','));

    });

    $('.jsBtnNext').click(function () {
        oBadges.ls.data = oBadges.populateObjectDataUsingInputFields(oBadges.ls.data, {warnMissingItems: false});

        for(var level = 0; level < 3; level++) {
            var cats = $('#level-'+level+'-cats').val();
            oBadges.ls.data.levels[level].categories = cats.split(',');
        }
        //  fill in blanks
        oBadges.ls.data.settings.pointsPerCorrectAnswer = oBadges.ls.data.settings.pointsPerCorrectAnswer || 100;
        if (oBadges.ls.data.levels[0].categories[0] == [""]) {
            oBadges.ls.data.levels[0].categories[0] = 1;
        }
        if (oBadges.ls.data.levels[1].categories[0] == [""]) {
            oBadges.ls.data.levels[1].categories[0] = 2;
        }
        if (oBadges.ls.data.levels[2].categories[0] == [""]) {
            oBadges.ls.data.levels[2].categories[0] = 3;
        }

        oBadges.saveLs();
        oBadges.stepCompleted();

    });

    oBadges.checkForTips = function () {
        if (oBadges.getMaxQuestionsInOneLevel() > 14) {
            $('ul.advice-list li[data-type="questions-toomanyinonecat"]').addClass('show');
        } else {
            $('ul.advice-list li[data-type="questions-toomanyinonecat"]').removeClass('show');
        }
        if (oBadges.getTotalNumberOfQuestions() > 30) {
            $('ul.advice-list li[data-type="questions-toomanyoverall"]').addClass('show');
        } else {
            $('ul.advice-list li[data-type="questions-toomanyoverall"]').removeClass('show');
        }
    }

    oBadges.getMaxQuestionsInOneLevel = function () {
        var questions = oBadges.getLevelQuestionCounts(),
            max = Math.max.apply(null, questions);

        return max;
    }

    oBadges.getTotalNumberOfQuestions = function () {
        var questions = oBadges.getLevelQuestionCounts(),
            tot = questions.reduce(function(a, b) { return a + b; }, 0);

        return tot;
    }

    oBadges.getLevelQuestionCounts = function () {
        return [
            parseInt($('#numanswers0').val(), 10),
            parseInt($('#numanswers1').val(), 10),
            parseInt($('#numanswers2').val(), 10)
        ];
    }

    oBadges.checkForTips();

    $('input[type="range"]').change(function() {
        oBadges.checkForTips();
    });

}());