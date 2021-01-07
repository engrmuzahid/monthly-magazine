

<div class="row">

    <div class="admin-form" id="top_header">
        <div class="panel panel-alert heading-border">
            <div class="panel-heading">
                <span class="panel-title"> Comment  Listing </span>
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
    var current_url = '<?php echo site_url('comments/comment_listing') ?>';

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



    $(document).ready(function () {
        load_data(current_url);
    });
</script>
