//localStorage.setItem('_NSCaseId', nsId);

$('.select-role-game select').change(function() {
    if($(this).val() !== 'Select a role') {
        var name = $(this).attr('name');
        var value = $(this).val();
        localStorage.setItem(name, value);
    }
    
    if($('#selectTeamRole1').val() === 'Select a role' || $('#selectTeamRole2').val() === 'Select a role' || $('#selectTeamRole3').val() === 'Select a role') {
        $('#moveOn').slideUp();
    } else {    
        $('#moveOn').slideDown(); 
        oBadges.stepCompleted();
    }
    
});