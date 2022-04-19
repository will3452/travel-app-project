$( function() {
    $( "#datefrom" ).datepicker({
        dateFormat: "yy-mm-dd",
        autoclose: true,
        changeMonth: true,
        changeYear: true,
        });
    } );
$("#datefrom").keypress(function (e) {
    return false;
});
$("#datefrom").keydown(function (e) {
    return false;
});

$( function() {
    $( "#dateto" ).datepicker({
        dateFormat: "yy-mm-dd",
        autoclose: true,
        changeMonth: true,
        changeYear: true,
        });
    } );
$("#dateto").keypress(function (e) {
    return false;
});
$("#dateto").keydown(function (e) {
    return false;
});

