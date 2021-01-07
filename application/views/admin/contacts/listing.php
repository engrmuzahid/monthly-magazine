<br/>
<div class="panel panel-info panel-border top">
    <div class="panel-heading">
        <span class="panel-title"></span>
    </div>
    <form class="form-horizontal" >
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
                                <img src="<?php echo base_url('assets/image/' . $img); ?>" style="width: 100%;" />
                            </div>

                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Phone number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->phone_number; ?>" readonly type="text" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" value="<?php echo $result->email; ?>" readonly type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sportsname" class="col-sm-3  control-label control-label_Post "> Address</label>
                                <div class="col-sm-9">
                                    <textarea readonly class="form-control"><?php echo $result->address; ?></textarea>
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
                                <div class="bs-component">

                                    <?php $link = $result->fb_link != null ? $result->fb_link : "#"; ?>
                                    <a class="zocial facebook" href="<?php echo $link ?>" target="_blank">
                                        Facebook
                                    </a>
                                    <?php $link = $result->twitter_link != null ? $result->twitter_link : "#"; ?>
                                    <a class="zocial twitter" href="<?php echo $link ?>" target="_blank">
                                        Twitter
                                    </a>
                                    <?php $link = $result->googlePlus_link != null ? $result->googlePlus_link : "#"; ?>
                                    <a class="zocial googleplus" href="<?php echo $link ?>" target="_blank">
                                        Google+
                                    </a>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo $result->maps_iframe; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="panel-footer">
        </div>
    </form>
</div>

