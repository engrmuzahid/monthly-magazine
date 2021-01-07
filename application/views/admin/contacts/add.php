<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title">Add Subject</span>

    </div>
    <form class="form-horizontal" method="post" action="<?php echo base_url("admin/category/addformdb"); ?>"  id="frmAdd"  enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center n"  id="errorDiv"></div>
            </div>


            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Title <span class="redstar">*</span></label>
                <div class="col-sm-7">
                    <input class="form-control required" required name="Category[title]"  placeholder="Title" type="text" />
                </div>
            </div>

            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Sort order</label>
                <div class="col-sm-7">
                    <input class="form-control" name="Category[sort_order]"   type="text" value="1" />
                </div>
            </div>



            <div class="form-group">
                <label for="details" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-7">
                    <select name="Category[status]" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="button" id="cancelfrm" class="btn btn-danger">Cancel</button>
            <button type="submit" id="submitform" class="btn btn-info pull-right">Submit</button>
        </div>
    </form>
</div>

