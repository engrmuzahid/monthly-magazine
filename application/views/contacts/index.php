<header id="topbar">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-active">
                <a href="#">Contact </a>
            </li>

        </ol>
    </div>
    <div class="topbar-right">

        <div class="ml15 ib va-m">
            <a href="#" id="addform" class="btn btn-primary btn-gradient dark"> <i class="fa fa-add"></i> Edit contact</a>

        </div>
    </div>
</header>
<div class="container">
    <div class="row" style="">

    </div> 

    <div class="row">
        <div class="col-md-12 common-content" id="contAddEdit">

        </div>
    </div>
    
    <br/>
    <div class="row" style="background: white">

        <div class="col-md-12 common-content" id="listingContent">
            <h4>Loading ....</h4>
        </div> 
    </div>
</div> 
  <script type="text/javascript">
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

  </script>