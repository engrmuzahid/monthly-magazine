<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title">Add Menu</span>

    </div>
    <form class="form-horizontal" method="post" action="<?php echo base_url("menu/addformdb"); ?>"  id="frmAdd"  enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center n"  id="errorDiv"></div>
            </div>

          

            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Name <span class="redstar">*</span></label>
                <div class="col-sm-7">
                    <input class="form-control required" required name="Menu[name]"  placeholder="Title" type="text" />
                </div>
            </div>

            <div class="form-group">
                <label for="details" class="col-sm-2 control-label">Page type <span class="redstar">*</span></label>
                <div class="col-sm-7">
                    <select class="form-control required" id="pageType">
                        <option value="">Select</option>
                        <option value="index">Home</option>
                        <option value="page">Pages</option>
                        <option value="archive">Archive</option>
                        <option value="search">Search page</option>
                        <option value="custom">Custom</option>
                    </select>
                </div>
            </div>

            <div id="slug">
                <div class="form-group">
                    <label for="sportsname" class="col-sm-2 control-label"> Content type <span class="redstar">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control required" required  readonly type="text" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Sort order</label>
                <div class="col-sm-7">
                    <input class="form-control" name="Menu[sort_order]"   type="text" value="1" />
                </div>
            </div>



            <div class="form-group">
                <label for="details" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-7">
                    <select name="Menu[status]" class="form-control">
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

