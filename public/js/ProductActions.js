$(document).ready(function () {
    var data;
    var month;
    var year;
    var type;

    $("#classification_id").change(function () {

        type = $('#classification_id').val();
       console.log(type);
        // $('#dailyTable tbody').empty();
        // var href="dailyPdf/"+data+ "/"+type;
        // $('#btn_search_daily').attr("href", href);

        $.ajax({
            // url: "dailyReport/" + data + "/"+type,
            // dataType: 'json',
            // type: 'get',
            // success: function (data) {

            //     $('#dailyTable tbody').prepend(data.result);
            //     $('#dailyTable').DataTable();

            // }
        });
    });


});


