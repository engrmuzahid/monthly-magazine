<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Notice  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllNotice"> <span class="fa fa-table"></span>  View All Notice </a></span>
        </div>

        <form method="post" action="<?php echo site_url('notice/int_edit_notice') . '/' . $notice->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mt10 mb40">
                    <span>Notice   </span>
                </div>


                <div class="section-divider mv40">
                    <span> Notice Details </span>
                </div>
                <div class="section row">
                    <div class="col-md-12">
                        <div class="section">
                            <label for="title" class="field-label">Title</label>
                            <input type="text" name="Notice[notice_title]" id="name" class="gui-input" placeholder="Enter notice title" value="<?php echo $notice->notice_title ?>">
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="sub_title" class="field-label">Link address</label>
                            <input type="text" name="Notice[link_address]" id="sub_title" class="gui-input" placeholder="Enter link address" value="<?php echo $notice->link_address ?>">
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="publish_date" class="field-label">Sort Order</label>
                            <input type="text" name="Notice[sort_order]" id="publish_date" class="gui-input"  value="<?php echo $notice->sort_order ?>">
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="cover_photo" class="field-label">Notice Image</label>
                            <img src="<?php echo base_url('assets/site/notice'); ?>/<?= $notice->image_url ?>" class="h-200">
                            <input type="file" name="image_url" id="cover_photo" class="gui-file" >
                        </div> 
                    </div>
  <div class="col-md-12">
                                <div class="section">
                                    <label for="min_height" class="field-label">Height</label>
                                    <input type="text" name="Notice[min_height]" id="min_height" class="gui-input" value="<?= $notice->min_height ?>">
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