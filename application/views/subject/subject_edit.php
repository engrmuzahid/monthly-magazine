<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Subject  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllSubject"> <span class="fa fa-table"></span>  View All Subject </a></span>
        </div>

        <form method="post" action="<?php echo site_url('subject/int_edit_subject') . '/' . $subject->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mv40">
                    <span> Subject Details </span>
                </div>
                <div class="section row">
                    <div class="col-md-12">
                        <div class="section">
                            <label for="name" class="field-label">Subject Name</label>
                            <input type="text" name="Subject[subject_name]" id="name" class="gui-input" value="<?php echo $subject->subject_name; ?>">
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="desc" class="field-label">Subject Description</label>
                            <textarea name="Subject[subject_description]" id="desc" rows="60" class="gui-textarea"><?php echo $subject->subject_description; ?></textarea> 
                        </div> 
                    </div>
 
                    <div class="col-md-12">

                        <div class="section">
                            <label for="sort_order" class="field-label">Sort Order</label>
                            <input type="text" name="Subject[sort_order]" id="sort_order" class="gui-input" value="<?php echo $subject->sort_order; ?>">

                        </div> 


                    </div>



                </div>

                <div class="section row">
                    <div class="col-md-12" id="errorEditDiv"></div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="button btn-danger btnCancel"><span class="fa fa-close"></span>  CANCEL</button>
                <button type="submit" id="btnEdit" class="button btn-info pull-right"><span class="fa fa-save"></span> SAVE</button>
            </div>
        </form>
    </div>
</div>