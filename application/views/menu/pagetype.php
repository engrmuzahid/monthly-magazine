

<div class="form-group">
    <label for="sportsname" class="col-sm-2 control-label"> <?php if ($type != 'custom') { ?>
        Content Type
        <?php } else {
            ?>
            Custom Url
        <?php }
        ?>  <span class="redstar">*</span></label>
    <div class="col-sm-7">
        <?php if ($type != 'custom') { ?>
            <?php if ($type == 'page') { ?>
                <select class="form-control" name="Menu[menu_url]" >
                    <?php foreach ($results as $result): ?>
                        <option value="<?php echo $type . '/' . $result->slug; ?>"><?php echo $result->title; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php } else if($type == 'archive') { ?>
            <select class="form-control" name="Menu[menu_url]" >
                <option value="writer">Writer</option>
                <option value="subject">Subject</option>
                <option value="category">Category</option>
            </select>
            <?php }else if ($type == 'search') { ?>
                <input type="text" readonly class="form-control" value="Search page" />
                <input type="hidden" name="Menu[menu_url]"   value="<?php echo 'searchpage'; ?>" />
            <?php } else { ?>
                <select class="form-control" name="Menu[menu_url]" >
                    <?php foreach ($results as $result): ?>
                        <option value="<?php echo $type; ?>"><?php echo $result->title; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php } ?>

        <?php } else { ?>
            <input type="url" name="Menu[menu_url]" class="form-control" />
            <input type="hidden" name="Menu[is_custom]" value="1"/>
        <?php } ?>
    </div>
</div>