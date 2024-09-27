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
        //oBadges.ls.data.actions.swipes.left = oBadges.ls.data.actions.swipes.left || 'incorrect';
        //oBadges.ls.data.actions.swipes.right = oBadges.ls.data.actions.swipes.right || 'correct';
        //oBadges.ls.data.actions.swipes.up = oBadges.ls.data.actions.swipes.up || '';
        //oBadges.ls.data.actions.swipes.down = oBadges.ls.data.actions.swipes.down || '';

        oBadges.saveLs();
        oBadges.stepCompleted();

    });

}());