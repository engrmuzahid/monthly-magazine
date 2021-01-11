<header id="topbar">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-active">
                <a href="#">Page</a>
            </li>

        </ol>
    </div>
    <div class="topbar-right">

        <div class="ml15 ib va-m">
            <a href="#" id="addform" class="btn btn-primary btn-gradient dark"> <i class="fa fa-add"></i> Add page</a>

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
<script>
    var current_url = base_url + 'pages/listing';

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
        $.post(base_url + 'pages/formview', {}, function (resp) {
            $("#contAddEdit").html(resp);
            $(".common-content").fadeOut();
            $("#contAddEdit").fadeIn();
        });
    });

    $("body").on('click', '.edit', function (e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.post(base_url + 'pages/formview/' + data_id, {}, function (resp) {
            $("#contAddEdit").html(resp);
            $(".common-content").fadeOut();
            $("#contAddEdit").fadeIn();
        });
    });

    $(".delete").die('click').live('click', function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        (new PNotify({
            title: 'Are you sure you want to delete the item?',
            hide: false,
            type: 'dark',
            addclass: "mt30",
            buttons: {
                closer: false,
                sticker: false
            },
            confirm: {
                confirm: true,
                buttons: [{
                        text: "Yup, Do it.",
                        addClass: "btn-sm btn-info",
                    }, {
                        text: "Cancel",
                        addClass: "btn-sm btn-danger",
                    }],
            },
            history: {
                history: false
            }
        })).get().on('pnotify.confirm', function () {
            $.post(url, {}, function (resp) {
                load_data(current_url);
            });
        }).on('pnotify.cancel', function () {
            return;
        });
    });

   

    $("body").on('blur', '#title', function (e) {
        e.preventDefault();
        var data = $("#title").val();
        $.post(base_url + 'pages/check_slug', {title: data}, function (resp) {
            $("#errorTitle").html(resp);
        });
    });

    $("body").on('click', '#titleChange', function (e) {
        e.preventDefault();
        if ($("#title").is(":disabled")) {
            $("#title").removeAttr('disabled');
            $("#titleChange").html('Remain Unchabged');
            $("#errorTitle").empty();
        } else {
            $("#title").attr('disabled', 'true');
            $("#titleChange").html('Change Title');
            $("#errorTitle").empty();
        }
    });

});
</script>