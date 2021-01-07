<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title">Edit contact </span>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo base_url("admin/contacts/addformdb/".$result->id); ?>"  id="frmAdd"  enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center n"  id="errorDiv"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"></span>
                        </div>
                        <div class="panel-body">
                            <div class="form-group text-center">
                                <?php $img = $result->logo == NULL ? 'logo.png' : $result->logo; ?>
                                <img src="<?php echo base_url('assets/image/' . $img); ?>" style="width: 100px;height: 100px;" />
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Change logo <span class="redstar">Height(172) and Width(200)</span></label>
                                <div class="col-sm-9">
                                    <input class="gui-file"  name="img"  type="file" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Web title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->web_title; ?>" name="Contact[web_title]" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Sub title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->sub_title; ?>" name="Contact[sub_title]" type="text" />
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Web Description </label>
                                <div class="col-sm-9">
                                    <textarea name="Contact[web_description]" class="form-control required" style="min-height: 120px;"><?php echo $result->web_description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Phone number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->phone_number; ?>" name="Contact[phone_number]" type="text" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Email <span class="redstar">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control required" value="<?php echo $result->email; ?>"  type="email" name="Contact[email]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Address <span class="redstar">*</span></label>
                                <div class="col-sm-9">
                                    <textarea name="Contact[address]" class="form-control required" style="min-height: 120px;"><?php echo $result->address; ?></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"></span>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Facebook link</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->fb_link; ?>"  type="text" name="Contact[fb_link]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Twitter link</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->twitter_link; ?>"  type="text" name="Contact[twitter_link]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Google plus link</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->googlePlus_link; ?>"  type="text" name="Contact[googlePlus_link]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Youtube link</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->youtube_link; ?>"  type="text" name="Contact[youtube_link]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Vimeo link</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->vimeo_link; ?>"  type="text" name="Contact[vimeo_link]" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Maps iFrame</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="Contact[maps_iframe]"><?php echo $result->maps_iframe; ?></textarea>
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

