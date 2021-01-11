<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Page  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllPage"> <span class="fa fa-table"></span>  View All Page </a></span>
        </div>

        <form method="post" action="<?php echo site_url('page/int_edit_page') . '/' . $page->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mv40">
                    <span> Page Details </span>
                </div>
                 <div class="section row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="name" class="field-label">Page Title</label>
                                    <input type="text" name="Page[page_title]" id="name" class="gui-input" value="<?php echo $page->page_title; ?>">
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="desc" class="field-label">Page Description</label>
                                    <textarea name="Page[description]" id="page_details" style="min-height: 350px;" class="gui-textarea"><?php echo $page->description; ?></textarea> 
                                </div> 
                            </div>
                      
                            <div class="col-md-12">
                                <div class="section">
                                    <label for="sort_order" class="field-label">Sort Order</label>
                                    <input type="text" name="Page[sort_order]" id="sort_order" class="gui-input" value="<?php echo $page->sort_order; ?>">
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