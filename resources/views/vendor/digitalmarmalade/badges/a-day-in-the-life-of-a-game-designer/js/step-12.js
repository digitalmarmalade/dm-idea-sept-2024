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

    oBadges.populateInputFieldsUsingObjectData(oBadges.ls.data, {warnMissingItems: false});

    if (oBadges.ls.data.meta.title !== undefined && oBadges.ls.data.meta.title !== '') {
        $('#section1').addClass('visible');
    }

    (function () {
        [].slice.call(document.querySelectorAll('select#csSelect1')).forEach(function (el) {
            new SelectFx(el, {
                stickyPlaceholder: false,
                onChange: function (val) {
                    document.querySelector('#csHolder1 .cs-placeholder').style.backgroundColor = val;
                }
            });
        });
        $('#csHolder1 .cs-placeholder').css('backgroundColor', $('#csSelect1').val()).text($('#csHolder1 .cs-placeholder').text().split('Pick your colour').join($('#csSelect1 option:selected').text()));
    })();
    (function () {
        [].slice.call(document.querySelectorAll('select#csSelect2')).forEach(function (el) {
            new SelectFx(el, {
                stickyPlaceholder: false,
                onChange: function (val) {
                    document.querySelector('#csHolder2 .cs-placeholder').style.backgroundColor = val;
                }
            });
        });
        $('#csHolder2 .cs-placeholder').css('backgroundColor', $('#csSelect2').val()).text($('#csHolder2 .cs-placeholder').text().split('Pick your colour').join($('#csSelect2 option:selected').text()));
    })();
    (function () {
        [].slice.call(document.querySelectorAll('select#csSelect3')).forEach(function (el) {
            new SelectFx(el, {
                stickyPlaceholder: false,
                onChange: function (val) {
                    document.querySelector('#csHolder3 .cs-placeholder').style.backgroundColor = val;
                }
            });
        });
        $('#csHolder3 .cs-placeholder').css('backgroundColor', $('#csSelect3').val()).text($('#csHolder3 .cs-placeholder').text().split('Pick your colour').join($('#csSelect3 option:selected').text()));
    })();
    (function () {
        [].slice.call(document.querySelectorAll('select#csSelect4')).forEach(function (el) {
            new SelectFx(el, {
                stickyPlaceholder: false,
                onChange: function (val) {
                    document.querySelector('#csHolder4 .cs-placeholder').style.backgroundColor = val;
                }
            });
        });
        $('#csHolder4 .cs-placeholder').css('backgroundColor', $('#csSelect4').val()).text($('#csHolder4 .cs-placeholder').text().split('Pick your colour').join($('#csSelect4 option:selected').text()));
    })();

    $(function () {
        $('#gameNameFill').text($('#gameName').val());
    });

    $('.jsBtnNext').click(function () {
        oBadges.ls.data = oBadges.populateObjectDataUsingInputFields(oBadges.ls.data, {warnMissingItems: false});

        if (oBadges.ls.data.grid === undefined || oBadges.ls.data.grid.labels === undefined || oBadges.ls.data.grid.labels[1] === '' || oBadges.ls.data.grid.labels[1] === null) {
            oBadges.ls.data.grid.labels[1] = $('#category1Label option:Selected').val();
        }
        if (oBadges.ls.data.grid === undefined || oBadges.ls.data.grid.labels === undefined || oBadges.ls.data.grid.labels[2] === '' || oBadges.ls.data.grid.labels[2] === null) {
            oBadges.ls.data.grid.labels[2] = $('#category2Label option:Selected').val();
        }
        if (oBadges.ls.data.grid === undefined || oBadges.ls.data.grid.labels === undefined || oBadges.ls.data.grid.labels[3] === '' || oBadges.ls.data.grid.labels[3] === null) {
            oBadges.ls.data.grid.labels[3] = $('#category3Label option:Selected').val();
        }

        oBadges.saveLs();
        oBadges.stepCompleted();

    });

    oBadges.showContinueButtonIfAllCatsSelected = function () {

        var selectedValuesCount = 0;

        $('#categoryNames select').each(function(){
            if ($(this).val() !== '') {
                selectedValuesCount++;
            }
        });

        if (selectedValuesCount === $('#categoryNames select').length) {
            $('#moveon').addClass('visible');
        } else {
            $('#moveon').removeClass('visible');
        }

    };

    $('#categoryNames select').change(function(){

        oBadges.showContinueButtonIfAllCatsSelected();

    });

    oBadges.showContinueButtonIfAllCatsSelected();

}());