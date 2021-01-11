<div class="tray tray-center p30 va-t posr animated-delay animated-long common-content" id="contAdd" style="display: none;" data-animate='["800","fadeIn"]'>
    <div class="tab-content center-block">
        <div class="admin-form" id="survey1" >
            <div class="panel panel-alert heading-border">
                <div class="panel-heading">
                    <span class="panel-title"> New Book info  </span>
                    <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllBookinfo"> <span class="fa fa-table"></span>  View All Book info </a></span>
                </div>

                <form method="post" action="<?php echo site_url('bookinfo/add_bookinfo'); ?>" id="frmAdd"  enctype="multipart/form-data">
                    <div class="panel-body p25">


                        <div class="section-divider mv40">
                            <span> Book info Details </span>
                        </div>
                        <div class="section row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="title" class="field-label">Title</label>
                                    <input type="text" name="Bookinfo[title]" id="name" class="gui-input" placeholder="Enter Title">
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="sub_title" class="field-label">Sub title</label>
                                    <input type="text" name="Bookinfo[sub_title]" id="sub_title" class="gui-input" placeholder="Enter sub title">
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="publish_date" class="field-label">Publish date</label>
                                    <input type="text" name="Bookinfo[publish_date]" id="publish_date" class="gui-input" placeholder="2016-01-01">
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="header_background" class="field-label">Header Photo</label>
                                    <input type="file" name="header_background" id="header_background" class="gui-file" >
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="cover_photo" class="field-label">Cover Photo</label>
                                    <input type="file" name="cover_photo" id="cover_photo" class="gui-file" >
                                </div> 
                            </div>

                            <div class="col-md-12">
                                <div class="section">
                                    <label for="pdf_url" class="field-label">PDF Version</label>
                                     <input type="text" name="Bookinfo[pdf_url]" id="pdf_url" class="gui-input" placeholder="http://">
                                    <!--<input type="file" name="pdf_url" id="pdf_url" class="gui-file" >-->
                                </div> 
                            </div>



                        </div> 

                        <div class="section row">
                            <div class="col-md-12" id="errorDiv"></div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="button btn-danger btnCancel"><span class="fa fa-close"></span>  CANCEL</button>
                        <button type="submit" id="btnAdd" class="button btn-info pull-right"><span class="fa fa-save"></span> SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 common-content" id="contEdit">
    </div>
</div>

<div class="row">

    <div class="admin-form" id="top_header">
        <div class="panel panel-alert heading-border">
            <div class="panel-heading">
                <span class="panel-title"> Bookinfo  Listing </span>
                <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="addBookinfo"> <span class="fa fa-plus-square"></span>  Add New Bookinfo   </a></span>
            </div>
            <div class="panel panel-visible">
                <div class="panel-body pn">

                    <div class="col-md-12 common-content" id="listingContent">
                        <h4>Loading ....</h4>

                    </div>
                </div>
            </div>
        </div>

    </div> 
</div>

<script type="text/javascript">
    var current_url = '<?php echo site_url('bookinfo/bookinfo_listing') ?>';
    var book_url = '<?php echo site_url('bookinfo') ?>';

    function load_data(url) {
        $("#listingContent").html('<h4>Loading ....</h4>');
        var data = {};
        $.post(url, data, function (resp) {
            $("#listingContent").html(resp);
            show_content("listingContent");
            $("#top_header").show();

            dTable.fnDestroy();
            dTable = $('.art_datatable').dataTable(dTableOptions);
        });
    }




    function reset_form(id) {
        $(':input', "#" + id).not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked');
        //   .removeAttr('selected');
    }

    $(document).ready(function () {


        load_data(current_url);
        $(".pagination > a").live('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            current_url = url;
            load_data(url);
        });

        $("#addBookinfo").die('click').live('click', function (e) {
            e.preventDefault();
            reset_form('frmAdd');
            $("#top_header").hide();
            show_content("contAdd");

        });

        $("#viewAllBookinfo,.btnCancel").die('click').live('click', function (e) {
            e.preventDefault();
            load_data(current_url);
        });
        $("#btnAdd").die('click').live('click', function (e) {
            e.preventDefault();
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
                    if (resp != 'DONE') {
                        $("#errorDiv").html(resp);
                    } else {
                        reset_form('frmAdd');
                        load_data(current_url);
                    }
                }
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

        $(".edit").die('click').live('click', function (e) {
            e.preventDefault();

            $("#top_header").hide();
            var url = $(this).attr('href');
            $.post(url, {}, function (resp) {
                $("#contEdit").html(resp);
                show_content("contEdit");

            });
        });

        $("#btnEdit").die('click').live('click', function (e) {
            e.preventDefault();
            var data = new FormData(document.getElementById("frmEdit"));
            var url = $("#frmEdit").attr('action');
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
                    if (resp != 'DONE') {
                        $("#errorDivEdit").html(resp);
                    } else {
                        window.location.href = book_url;
                    }
                }
            });
        });

    });
</script>
