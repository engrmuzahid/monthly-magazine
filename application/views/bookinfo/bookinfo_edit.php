<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Bookinfo  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllBookinfo"> <span class="fa fa-table"></span>  View All Bookinfo </a></span>
        </div>

        <form method="post" action="<?php echo site_url('bookinfo/int_edit_bookinfo') . '/' . $bookinfo->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mt10 mb40">
                    <span>Bookinfo   </span>
                </div>


                <div class="section-divider mv40">
                    <span> Bookinfo Details </span>
                </div>
                <div class="section row">
                    <div class="col-md-12">
                        <div class="section">
                            <label for="title" class="field-label">Title </label>
                            <input type="text" name="Bookinfo[title]" id="name" class="gui-input" value="<?php echo $bookinfo->title; ?>">
                        </div> 

                        <div class="col-md-12">
                            <div class="section">
                                <label for="publish_date_edit" class="field-label">Publish date</label>
                                <input type="text" name="Bookinfo[publish_date]" id="publish_date_edit" class="gui-input"  value="<?php echo $bookinfo->publish_date; ?>">
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="section">
                                <img src="<?php echo base_url() . 'assets/site/images/' . $bookinfo->header_background; ?>" style="height:160px" class="img-thumbnail"/>
                                <label for="header_background_edit" class="field-label">Header Photo</label>
                                <input type="file" name="header_background_edit" id="header_background_edit" class="gui-file" >
                            </div> 
                        </div>

                        <div class="col-md-12">
                            <div class="section">
                                <img src="<?php echo base_url() . 'assets/site/images/' . $bookinfo->cover_photo; ?>" style="height:160px" class="img-thumbnail"/>
                                <label for="cover_photo_edit" class="field-label">Cover Photo</label>
                                <input type="file" name="cover_photo_edit" id="cover_photo_edit" class="gui-file" >
                            </div> 
                        </div>

                    </div> 


                    <div class="col-md-12">
                        <div class="section">
                            <label for="pdf_url" class="field-label">PDF Version</label>
                            <input type="text" name="Bookinfo[pdf_url]" id="pdf_url" class="gui-input"  value="<?php echo $bookinfo->pdf_url; ?>">
                           <!--<input type="file" name="pdf_url" id="pdf_url" class="gui-file" >-->
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
<script>
    $(document).ready(function(){
        $( "#publish_date_edit" ).datepicker({ dateFormat: 'yy/mm/dd' });
    });
</script>