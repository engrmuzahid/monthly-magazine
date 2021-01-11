<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

    <table class="table table-striped table-responsive table-bordered table-hover art_datatable" cellspacing="0" width="100%">
        <thead>

            <tr class="bg-primary">
                <th> SL </th> 
                <th>Article Id</th>
                <th> Commenter Name </th>
                <th> Commenter Email </th>
                <th> Comment</th> 
                <th class="bg-primary"> Action </th>
            </tr>
        </thead>
        <tbody>

            <?php
            $cnt = 0;
            foreach ($results as $result) :
                ?>

                <tr>
                    <td><?= ++$cnt ?></td> 
                    <td>
                        <a href="<?php echo base_url('article_details/'.$result->article_id); ?>" target="_blank"><?= $result->article_id ?></a>
                    </td>
                    <td>
                        <?= $result->commenter_name ?> 
                    </td>
                    <td>
                        <?= $result->commenter_email ?> 
                    </td>
                    <td>
                        <?= $result->comment ?> 
                    </td>
                    <td class="text-center w300"> 
                    <?php if($result->comment_status == 0) : ?>
                        <a class="btn btn-success" onclick="return confirm('Are you sure want to Publish this comment?');" href="<?= site_url('comments/approve_comment/' . $result->id) ?>">Publish </a>
                    <?php else: ?>
                    <a class="btn btn-success" onclick="return confirm('Are you sure want to Unpublish this comment?');" href="<?= site_url('comments/unapprove_comment/' . $result->id) ?>">Unpublish </a>
                    <?php endif; ?>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete this comment?');" href="<?= site_url('comments/delete_comment/' . $result->id) ?>"><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
</div>