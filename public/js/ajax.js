/*
/!**
 * Created by samsung on 22.05.2018.
 *!/
$(document).ready(function () {
    $('#1').click(function (e) {
        $.ajax({
            type: "POST",
            url: "some.php",
            data: {status: $('#1').val()}
        }).done(function (msg) {
            alert("Data Saved: " + msg);
        });

    });
});*/
