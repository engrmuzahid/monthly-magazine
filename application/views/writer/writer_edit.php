<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Writer  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllNotice"> <span class="fa fa-table"></span>  View All Writer </a></span>
        </div>

        <form method="post" action="<?php echo site_url('writer/int_edit_writer') . '/' . $writer->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mt10 mb40">
                    <span>Writer   </span>
                </div>


                <div class="section-divider mv40">
                    <span> Notice Writer </span>
                </div>
                <div class="section row">
                    <div class="col-md-12">
                        <div class="section">
                            <label for="title" class="field-label">Name</label>
                            <input type="text" name="Writer[writer_name]" id="writer_name" class="gui-input" placeholder="Enter writer name" value="<?php echo $writer->writer_name ?>">
                        </div> 
                    </div>
                    
                    <div class="col-md-12">
                        <div class="section">
                            <label for="cover_photo" class="field-label">Writer Image</label>
                            <img src="<?php echo base_url('assets/site/images'); ?>/<?= $writer->photo ?>" class="h-200">
                            <input type="file" name="writer_photo_edit" id="cover_photo" class="gui-file" >
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="description" class="field-label">Writer Biodata</label>
                            <textarea name="Writer[description]" id="article_details_edit" rows="60" class="gui-textarea summernote">
                                <?php echo $writer->description; ?>
                            </textarea> 

                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="publish_date" class="field-label">Sort Order</label>
                            <input type="text" name="Writer[sort_order]" id="publish_date" class="gui-input"  value="<?php echo $writer->sort_order ?>">
                        </div> 
                    </div>


                </div> 

                <div class="section row">
                    <div class="col-md-12" id="errorDivEdit"></div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="button btn-danger btnCancel"><span class="fa fa-close"></span>  CANCEL</button>
                <button type="submit" id="btnEdit" class="button btn-info pull-right"><span class="fa fa-save"></span> SAVE</button>
            </div>
        </form>


    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#article_details_edit').summernote({
            height: 500,
        });

    });
</script>