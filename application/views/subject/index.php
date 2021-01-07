<div class="tray tray-center p30 va-t posr animated-delay animated-long common-content" id="contAdd" style="display: none;" data-animate='["800","fadeIn"]'>
    <div class="tab-content center-block">
        <div class="admin-form" id="survey1" >
            <div class="panel panel-alert heading-border">
                <div class="panel-heading">
                    <span class="panel-title"> New Subject  </span>
                    <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllSubject"> <span class="fa fa-table"></span>  View All Subject </a></span>
                </div>

                <form method="post" action="<?php echo site_url('subject/add_subject'); ?>" id="frmAdd"  enctype="multipart/form-data">
                    <div class="panel-body p25">


                        <div class="section-divider mv40">
                            <span> Subject Details </span>
                        </div>
                        <div class="section row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="name" class="field-label">Subject Name</label>
                                    <input type="text" name="Subject[subject_name]" id="name" class="gui-input" placeholder="Enter name">
                                </div> 
                            </div>
                            <div class="col-md-12">

                                <div class="section">
                                    <label for="desc" class="field-label">Subject Description</label>
                                    <textarea name="Subject[subject_description]" id="subject_details" rows="60" class="gui-textarea"></textarea> 

                                </div> 


                            </div>
                     
                            <div class="col-md-12">

                                <div class="section">
                                    <label for="sort_order" class="field-label">Sort Order</label>
                                    <input type="text" name="Subject[sort_order]" id="sort_order" class="gui-input" value="1">

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
                <span class="panel-title"> Subject  Listing </span>
                <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="addSubject"> <span class="fa fa-plus-square"></span>  Add New Subject   </a></span>
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
    var current_url = '<?php echo site_url('subject/subject_listing') ?>';

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

        $("#addSubject").die('click').live('click', function (e) {
            e.preventDefault();
            reset_form('frmAdd');
            $("#top_header").hide();
            show_content("contAdd");

        });

        $("#viewAllSubject,.btnCancel").die('click').live('click', function (e) {
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
                        $("#errorEditDiv").html(resp);
                    } else {
                        reset_form('frmEdit');
                        load_data(current_url);
                    }
                }
            });
        });

    });
</script>
