<div class="tray tray-center p30 va-t posr animated-delay animated-long common-content" id="contAdd" style="display: none;" data-animate='["800","fadeIn"]'>
    <div class="tab-content center-block">
        <div class="admin-form" id="survey1" >
            <div class="panel panel-alert heading-border">
                <div class="panel-heading">
                    <span class="panel-title"> New User </span>
                    <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllUser"> <span class="fa fa-table"></span>  View All Users </a></span>
                </div>
                <form method="post" action="<?php echo site_url('user/add_user'); ?>" id="frmAdd"  enctype="multipart/form-data">
                    <div class="panel-body p25">
                        <div class="section-divider mt10 mb40">
                            <span>User Details</span>
                        </div>
                        <div class="section row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label for="first_name" class="field-label">First Name *</label>
                                    <label for="first_name" class="field prepend-icon">
                                        <input type="text" name="User[first_name]" id="first_name" class="gui-input" placeholder="Enter First name">
                                        <label for="first_name" class="field-icon"><i class="fa fa-camera-retro"></i>
                                        </label>
                                    </label>
                                </div>

                         
                                <div class="section">
                                    <label for="gender" class="field-label">Gender</label>
                                    <label for="gender" class="field prepend-icon">
                                        <select class="gui-input" name="User[gender]" id="gender">
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female </option>

                                        </select>

                                    </label>
                                </div>

                                <div class="section">
                                    <label for="dob" class="field-label">Date Of Birth </label>

                                    <label for="dob" class="field prepend-icon">
                                        <input type="text" name="User[dob]"  id="dob" class="gui-input date_class" placeholder="Enter date of birth ">
                                        <label for="dob" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="section">
                                    <label for="image_url" class="field-label">User Photo</label>
                                    <label class="field prepend-icon file">
                                        <span class="button">Browse File</span>
                                        <input type="file" class="gui-file" name="image_url" id="image_url" onChange="document.getElementById('uploader').value = this.value;">
                                        <input type="text" class="gui-input" id="uploader" placeholder="Please Select A File ( /jpg/png/gif)">
                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="password" class="field-label">  Password *</label>
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Enter   password">
                                        <label for="password" class="field-icon"><i class="fa fa-key"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <!-- end .colm section -->

                            <div class="col-md-6">
                                <div class="section">
                                    <label for="last_name" class="field-label">Last  Name</label>
                                    <label for="last_name" class="field prepend-icon">
                                        <input type="text" name="User[last_name]" id="last_name" class="gui-input" placeholder="Enter First name">
                                        <label for="last_name" class="field-icon"><i class="fa fa-camera-retro"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="user_type_id" class="field-label">User Type *</label>
                                    <label for="user_type_id" class="field prepend-icon">
                                        <select class="gui-input" name="User[user_type_id]" id="user_type_id">
                                            <option value=""> Select a Type </option>
                                            <?php foreach ($types as $user_type): ?>
                                                <option value="<?php echo $user_type->id; ?>"> <?php echo $user_type->type_name; ?> </option>
                                            <?php endforeach; ?>
                                        </select>

                                    </label>
                                </div>

                                <div class="section">
                                    <label for="email" class="field-label">User Email *</label>
                                    <label for="email" class="field prepend-icon">
                                        <input type="email" name="User[email]" id="email" class="gui-input" placeholder="Enter email">
                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                </div>    
                               
                                <div class="section">
                                    <label for="address" class="field-label">Address</label>
                                    <label for="address" class="field prepend-icon">
                                        <input type="text" name="User[address]" id="address" class="gui-input" placeholder="Enter address">
                                        <label for="address" class="field-icon"><i class="fa fa-map-marker"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="con_password" class="field-label">Confirm Password *</label>
                                    <label for="con_password" class="field prepend-icon">
                                        <input type="password" name="con_password" id="con_password" class="gui-input" placeholder="Enter confirm password">
                                        <label for="con_password" class="field-icon"><i class="fa fa-key"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="section row">
                            <div class="col-md-12" id="errorDiv"></div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="button btn-danger btnCancel"><span class="fa fa-close"></span>  CANCEL</button>
                        <button type="submit" id="btnAdd" class="button btn-info pull-right"><span class="fa fa-save"></span> SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 common-content" id="contEdit">
    </div>
</div>

<div class="row">
    <div class="col-md-12 common-content" id="listingContent">
        <h4>Loading ....</h4>
    </div> 
</div>
<script type="text/javascript">

    var current_url = '<?php echo site_url('user/user_listing') ?>';

    function load_data(url) {
        $("#listingContent").html('<h4>Loading ....</h4>');
        $.post(url, {}, function (resp) {
            $("#listingContent").html(resp);

            show_content("listingContent");
            dTable.fnDestroy();
            dTable = $('.restaurent_datatable').dataTable(dTableOptions);
        });
    }

    function reset_form(id) {
        $(':input', "#" + id)
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
    }

    $(document).ready(function () {


        load_data(current_url);
        $('.date_class').datetimepicker({
            format: 'DD/MM/YYYY',
            pickTime: false
        });
        
        $(".pagination > a").live('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            current_url = url;
            load_data(url);
        });

        $("#addUser").die('click').live('click', function (e) {
            e.preventDefault();
            reset_form('frmAdd');
            show_content("contAdd");



        });

        $("#viewAllUser,.btnCancel").die('click').live('click', function (e) {
            e.preventDefault();
            load_data(current_url);
        });

        $("#btnAdd").die('click').live('click', function (e) {
            e.preventDefault();
            var data = new FormData(document.getElementById("frmAdd"));
            var url = $("#frmAdd").attr('action');
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                async: false,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                success: function (resp) {
                    if (resp != 'DONE') {
                        $("#errorDiv").html(resp);
                    } else {
                        reset_form('frmAdd');
                        load_data(current_url);
                    }
                }
            });

        });

        $(".delete").die('click').live('click', function (e) {
            e.preventDefault();
            var url = $(this).attr("href");
            (new PNotify({
                title: 'Are you sure you want to delete the item?',
                hide: false,
                type: 'dark',
                addclass: "mt30",
                buttons: {
                    closer: false,
                    sticker: false
                },
                confirm: {
                    confirm: true,
                    buttons: [{
                            text: "Yup, Do it.",
                            addClass: "btn-sm btn-info",
                        }, {
                            text: "Cancel",
                            addClass: "btn-sm btn-danger",
                        }],
                },
                history: {
                    history: false
                }
            })).get().on('pnotify.confirm', function () {
                $.post(url, {}, function (resp) {
                    load_data(current_url);
                });
            }).on('pnotify.cancel', function () {
                return;
            });

        });

        $(".edit").die('click').live('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            $.post(url, {}, function (resp) {
                $("#contEdit").html(resp);
                show_content("contEdit");

            });
        });

        $("#btnEdit").die('click').live('click', function (e) {
            e.preventDefault();
            var data = $("#frmEdit").serialize();
            var url = $("#frmEdit").attr('action');
            $.post(url, data, function (resp) {
                if (resp != 'DONE') {
                    $("#errorEdit").html(resp);
                } else {
                    load_data(current_url);

                }
            });
        });

//        $(".btnCancel").die('click').live('click', function () {
//          
//        load_data(current_url);
//                    
//        });

    });
</script>
