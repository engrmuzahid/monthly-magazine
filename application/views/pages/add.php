<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title">Create page</span>

    </div>
    <form class="form-horizontal" method="post" action="<?php echo base_url("pages/addformdb"); ?>"  id="frmAdd"  enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center n"  id="errorDiv"></div>
            </div>


            <div class="form-group">
                <label for="title" class="col-sm-1 control-label"> Title <span class="redstar">*</span></label>
                <div class="col-sm-5">
                    <input class="form-control required" id="title" required name="Page[title]"  placeholder="Title" type="text" />
                    <span id="errorTitle" style="color: red;"></span>
                </div>

                <label for="slug" class="col-sm-1 control-label"> Slug <span class="redstar">*</span></label>
                <div class="col-sm-2">
                    <input class="form-control required" id="slug" required name="Page[slug]"  placeholder="Slug Must Be English" type="text" />
                    <span id="errorTitle" style="color: red;"></span>
                </div>
                
                 <label for="details" class="col-sm-1 control-label">Status</label>

                <div class="col-sm-2">
                    <select name="Page[status]" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
               
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">Post description</span>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="form-control summernote required" id="page_content_id" name="Page[content]" ></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="button" id="cancelfrm" class="btn btn-danger">Cancel</button>
            <button type="submit" id="submitform" class="btn btn-info pull-right">Submit</button>
        </div>
    </form>
</div>

<script>
    $('.summernote').summernote({
        height: 355, //set editable area's height
        focus: false, //set focus editable area after Initialize summernote
        oninit: function () {},
        onChange: function (contents, $editable) {},
    });
</script>
