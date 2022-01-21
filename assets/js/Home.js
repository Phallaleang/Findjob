// Box Job Location
$(document).ready(function() {
        $('#jobLocation').on('click', function() {
            $(this).parents().find('#checkBox').slideToggle('fast');
            $(this).parents().find('#boxCategory').hide();
        })
    })
    // Click Toggle  Box Job Category

$(document).ready(function() {
    $('#jobCategory').on('click', function() {
        $(this).parents().find('#boxCategory').slideToggle('fast');
        $(this).parents().find('#checkBox').hide();
    })
})






$(document).ready(function() {
    $('#JobLocation').multiSelect({
        'noneText': 'Job Location' // Push checkbox in to Main box
    });

    $('#JobCategory').multiSelect({
        'noneText': 'Job Category' // Get Data from Job category
    });
})