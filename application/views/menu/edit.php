<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title">Edit menu</span>

    </div>
    <form class="form-horizontal" method="post" action="<?php echo base_url("menu/addformdb/" . $result->id); ?>"  id="frmAdd"  enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center n"  id="errorDiv"></div>
            </div>


            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Name <span class="redstar">*</span></label>
                <div class="col-sm-7">
                    <input class="form-control required" required name="Menu[name]"  value="<?php echo $result->name; ?>" type="text" />
                </div>
            </div>

            <div class="form-group">
                <label for="details" class="col-sm-2 control-label">Page type <span class="redstar">*</span></label>
                <div class="col-sm-7">
                    <?php
                    $pageType = explode('/', $result->menu_url);
                    $type1 = isset($pageType[2]) ? $pageType[2] : '';
                    $type = isset($pageType[3]) ? $pageType[3] : (isset($pageType[2]) ? $pageType[2] : $result->menu_url);
                    ?>
                    <select class="form-control required" id="pageType">
                        <option value="">Select</option>
                        <option value="index"  <?php echo $type1 == 'index' ? 'selected' : ''; ?> >Home</option>
                        <option value="page"  <?php echo $type1 == 'page' ? 'selected' : ''; ?>>Pages</option>
                        <option value="archive">Archive</option>
                        <option value="search"  <?php echo $type1 == 'searchpage' ? 'selected' : ''; ?>>Search page</option>
                        <option value="custom" <?php echo $pageType[0] != 'site' ? 'selected' : ''; ?>>Custom</option>
                    </select>
                </div>
            </div>

            <div id="slug">
                <div class="form-group">
                    <label for="sportsname" class="col-sm-2 control-label"> Content type <span class="redstar">*</span></label>
                    <div class="col-sm-7">
                        <input  class="form-control required" required value="<?php echo $type ?>" readonly type="text" />
                        <input type="hidden" value="<?php echo $result->menu_url; ?>" name="Menu[menu_url]" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="sportsname" class="col-sm-2 control-label"> Sort order</label>
                <div class="col-sm-7">
                    <input class="form-control" name="Menu[sort_order]" value="<?php echo $result->sort_order; ?>"  type="text" value="1" />
                </div>
            </div>



            <div class="form-group">
                <label for="details" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-7">
                    <select name="Menu[status]" class="form-control">
                        <option value="1" <?php echo $result->status == 1 ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo $result->status == 0 ? 'selected' : ''; ?>>Inactive</option>
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

