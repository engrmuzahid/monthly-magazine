<style>
.section span.select2 {
    width: 100% !important;
}
</style>
<div class="tray tray-center p30 va-t posr animated-delay animated-long common-content" id="contAdd" style="display: none;" data-animate='["800","fadeIn"]'>
    <div class="tab-content center-block">
        <div class="admin-form" id="survey1" >
            <div class="panel panel-alert heading-border">
                <div class="panel-heading">
                    <span class="panel-title"> New Article  </span>
                    <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllArticle"> <span class="fa fa-table"></span>  View All Article </a></span>
                </div>

                <form method="post" action="<?php echo site_url('article/add_article'); ?>" id="frmAdd"  enctype="multipart/form-data">
                    <div class="panel-body p25">
                       
                        <input type="hidden" name="Article[bookinfo_id]" value="<?php echo $book_id; ?>">


                        <div class="section row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label for="category_id" class="field-label">Category </label>
                                    <label for="category_id" class="field prepend-icon">
                                        <select class="gui-input" name="Article[category_id]" id="category_id">
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label> 
                                </div> 


                            </div>

<div class="col-md-4">
                                    <div class="section">
                                    <label for="writer_id" class="field-label"> Select Writer Name</label>
                                    <select class="gui-input" name="Article[writer_id]" id="writer_id">
                                        <option value="1">আত-তাহরীক ডেস্ক</option>
                                        <?php foreach ($writers as $writer): ?>
                                            <option value="<?php echo $writer->id; ?>"> <?php echo $writer->writer_name; ?> </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div> 
</div>

 <div class="col-md-4">

                                <div class="section">
                                    <label for="sort_order" class="field-label">Sort order</label>
                                    <input type="text" name="Article[sort_order]" id="sort_order" class="gui-input" value="1" placeholder="Enter sort order">

                                </div> 


                            </div>

                        </div> 
                        <div class="section row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="title" class="field-label">Title</label>
                                    <input type="text" name="Article[title]" id="title" class="gui-input" placeholder="Enter Title" style="font-size:22px;line-height:35px;">

                                </div> 
                            </div>

                            <div class="col-md-12">

                                <div class="section">
                                    <label for="description" class="field-label"> Description</label>
                                    <textarea name="Article[description]" id="article_details" rows="10" style="height:140px !important" class="gui-textarea summernote"></textarea> 

                                </div> 


                            </div>

                            <div class="col-md-12" style="display:none">

                                <div class="section">
                                    <label for="reference" class="field-label"> Reference</label>
                                    <textarea name="Article[reference]" id="reference_details" rows="60" class="gui-textarea summernote"></textarea> 

                                </div> 


                            </div>


                        </div>

                        <div class="section row">
                            <div class="col-md-12">

                                <div class="section "  style="display:none">
                                    <label for="article_image" class="field-label">Article Image</label>
                                    <input type="file" name="article_image" id="article_image" class="gui-input">
                                </div> 

                                <!--<div class="section">-->
                                <!--    <label for="writer_id" class="field-label"> Select Writer Name</label>-->
                                <!--    <select class="gui-input" name="Article[writer_id]" id="writer_id">-->
                                <!--        <option>Select A Writer</option>-->
                                <!--        <?php //foreach ($writers as $writer): ?>-->
                                <!--            <option value="<?php echo $writer->id; ?>"> <?php echo $writer->writer_name; ?> </option>-->
                                <!--        <?php // endforeach; ?>-->
                                <!--    </select>-->

                                <!--</div> -->

                                <div class="section">
                                    <label for="is_needed" class="field-label">Select Subject</label>

                                    <?php
                                        if($subjects){
                                                foreach ($subjects as $row) {
                                                      ;
                                                      ?>
                                                      <span class="col-md-3" style="height:30px;" >
                                                          <input type="checkbox" name="subjects[]" value="<?php echo $row->id;?>">&nbsp;  <?php echo $row->subject_name;?>
                                                    
                                                      </span>
                                                       

                                                     
                                                    <?php    
                                                }} ?>

                                </div> 
                            </div>


                        </div>

                        <div class="section row">
                            <div class="col-md-12">



                                <div class="section">
                                    <label for="is_needed" class="field-label">Important Article</label>
                                    <select name="Category[is_needed]" class="gui-input">
                                        <option selected value="0"> No </option>
                                        <option  value="1"> Yes </option>
                                    </select> 

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
                <span class="panel-title"> Article  Listing </span>
                <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="addArticle"> <span class="fa fa-plus-square"></span>  Add New Article   </a></span>
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
<!--<script>-->
<!--  $( function() {-->
<!--    $( "#article_datepicker" ).datepicker();-->
<!--  } );-->
<!--  </script>-->

<script type="text/javascript">
<?php if ($book_id): ?>
        var current_url = '<?php echo site_url('article/article_listing/' . $book_id) ?>';
<?php else: ?>
        var current_url = '<?php echo site_url('article/article_listing/') ?>';
<?php endif; ?>
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

        $('#article_details').summernote({
            height: 400,
        });

        $('#reference_details').summernote({
            height: 200,
        });
        $(".pagination > a").live('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            current_url = url;
            load_data(url);
        });

        $("#addArticle").die('click').live('click', function (e) {
            e.preventDefault();
            reset_form('frmAdd');
            $("#top_header").hide();
            show_content("contAdd");

        });

        $("#viewAllArticle,.btnCancel").die('click').live('click', function (e) {
            e.preventDefault();
            load_data(current_url);
        });
        $("#btnAdd").die('click').live('click', function (e) {
            e.preventDefault();
            $('#reference_details').val($('#reference_details').code());
            $('#article_details').val($('#article_details').code());
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
            $('#reference_details_edit').val($('#reference_details_edit').code());
            $('#article_details_edit').val($('#article_details_edit').code());
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
                        $("#errorDiv").html(resp);
                    } else {
                        reset_form('frmAdd');
                        load_data(current_url);
                    }
                }
            });
        });

    });
    
    $(document).ready(function() {
        $('#writer_id').select2();
    });
</script>
