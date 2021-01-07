<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Category  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllCategory"> <span class="fa fa-table"></span>  View All Chapter </a></span>
        </div>

        <form method="post" action="<?php echo site_url('category/int_edit_category') . '/' . $category->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
                <div class="section-divider mv40">
                    <span> Category Details </span>
                </div>
                <div class="section row">
                    <div class="col-md-12">
                        <div class="section">
                            <label for="name" class="field-label">Category Name</label>
                            <input type="text" name="Category[name]" id="name" class="gui-input" value="<?php echo $category->name; ?>">
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <label for="desc" class="field-label">Category Description</label>
                            <textarea name="Category[desc]" id="desc" rows="60" class="gui-textarea"><?php echo $category->desc; ?></textarea> 
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="section">
                            <img width="200" src="<?php echo base_url('assets/site/images/'.$category->cat_image); ?>" alt="" /> <br>
                            <label for="name" class="field-label">Category Image</label>
                            <input type="file" name="cat_image" id="cat_image" class="gui-input">
                        </div> 
                    </div>

                    <div class="col-md-12">

                        <div class="section">
                            <label for="is_homepage" class="field-label">Homepage view</label>
                            <select name="Category[is_homepage]" class="gui-input">
                                <option <?php echo $category->is_homepage == "0" ? "selected" : ""; ?> value="0"> Hide </option>
                                <option <?php echo $category->is_homepage == "1" ? "selected" : ""; ?>  value="1"> Show </option>
                            </select> 

                        </div> 


                    </div>
                    <div class="col-md-12">

                        <div class="section">
                            <label for="sort_order" class="field-label">Sort Order</label>
                            <input type="text" name="Category[sort_order]" id="sort_order" class="gui-input" value="<?php echo $category->sort_order; ?>">

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