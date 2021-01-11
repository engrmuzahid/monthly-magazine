var current_url = base_url + 'contacts/listing';

function load_data(url) {
    $("#listingContent").html('<h4>Loading ....</h4>');
    $.post(url, {}, function (resp) {
        $("#listingContent").html(resp);
        $(".common-content").fadeOut();
        $("#listingContent").fadeIn();
    });
}

$(function () {

    load_data(current_url);

    $("body").on('click', '#cancelfrm', function (e) {
        e.preventDefault();
        load_data(current_url);
    });

    $('body').on('click', '#addform', function (e) {
        e.preventDefault();
        $.post(base_url + 'contacts/formview', {}, function (resp) {
            $("#contAddEdit").html(resp);
            $(".common-content").fadeOut();
            $("#contAddEdit").fadeIn();
        });
    });





    $("body").on("click", "#submitform", function (e) {
        e.preventDefault();
        var check = 0;
        $(".required").each(function () {
            if (!$(this).val()) {
                $(this).parent().addClass("has-error");
                check = 1;
            } else {
                $(this).parent().removeClass("has-error");
            }
        });
        if (check == 0) {
            datainsertdb();
        }
    });
    function datainsertdb() {
        var data = new FormData(document.getElementById("frmAdd"));
        var url = $("#frmAdd").attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            async: false,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                if (resp.trim() != 'DONE') {
                    $("#errorDiv").html(resp);
                } else {
                    load_data(current_url);
                }
            }
        });
    }


});
