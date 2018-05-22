$(document).ready(function () {
    $('#exampleInputBreakage').blur(function (e) {
        if ($('#price').val() != ''){
            $('#userFileSubmit').attr('disabled',false)
        }
    });
});